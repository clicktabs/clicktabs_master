"use strict";

document.addEventListener('DOMContentLoaded', function() {
    let calendarEl = document.getElementById('kt_calendar_app');

    const ctrlKeyDescriptor = Object.getOwnPropertyDescriptor(
        MouseEvent.prototype,
        'ctrlKey'
    );

// Always return false for event.ctrlKey when event is of type MouseEvent
    ctrlKeyDescriptor.get = function() {
        return false;
    };

    Object.defineProperty(MouseEvent.prototype, 'ctrlKey', ctrlKeyDescriptor);
    let is_drag = true;
    const ctrlKeyChanged = (function() {
        let ctrlHeld = false;
        let subscriptions = [];
        ['keydown', 'keyup'].forEach(x =>
            document.addEventListener(x, e => {
                // console.log(e)
                is_drag = false
                // emit only when the key state has changed
                if (ctrlHeld !== e.ctrlKey) subscriptions.forEach(fun => fun(e.ctrlKey));
                ctrlHeld = e.ctrlKey;
            })
        );

        function subscribe(callback) {
            subscriptions.push(callback);
            callback(ctrlHeld); // Emit the current state (case when Ctrl is already being held)
        }

        function unsubscribe(callback) {
            const index = subscriptions.indexOf(callback);
            subscriptions.splice(index, 1);
        }

        return { subscribe, unsubscribe };
    })();

    const extractEventProperties = (e) => ({
        'id': e.event._def.publicId,
        'title': e.event.title,
        'start': e.event.start,
        'end': e.event.end,
        'allDay': e.event.allDay,
        'className': e.el.className
    });

    const callbackKey = Symbol();
    const today = new Date();  // Get the current date
    const firstDate = new Date(today.getFullYear(), today.getMonth(), 1);
    // End of the workaround
    let calendar = new FullCalendar.Calendar(calendarEl, {
        initialDate: firstDate,
        editable: true,
        selectable: true,
        businessHours: true,
        selectMirror: true,
        dayMaxEvents: true,
        eventDragStart: function(e, jsEvent, ui, view) {
            let event;
            const callback = ctrlKey => {
                if (ctrlKey) {
                    let url = '/schedule/update-copy-event';
                    let date = new Date(e.event.start);
                    date.setDate(date.getDate() + 1);
                    let formattedDate = date.toISOString().split('T')[0];

                    let eventObj = {
                        days: null,
                        date: formattedDate,
                        schedule_id: e.event._def.publicId,
                    };

                    $.ajax({
                        url: url,
                        type: "POST",
                        data: eventObj,
                        success: function(data) {
                            // console.log(data)
                        }
                    });
                    console.log(e)
                    event = calendar.addEvent(extractEventProperties(e));
                    // console.log(event)
                } else {
                    event && event.remove();
                }
            };
            is_drag = true
            ctrlKeyChanged.subscribe(callback);
            e.event.setExtendedProp(callbackKey, callback);
        },
        eventDrop: function(event) {
            let url = '/schedule/update-copy-event';
            if(is_drag) {
                url = '/schedule/update-drag-event';
            }

            let date = new Date(event.event.start);
            date.setDate(date.getDate() + 1);
            let formattedDate = date.toISOString().split('T')[0];

            let eventObj = {
                days: event.delta.days,
                date: formattedDate,
                schedule_id: event.event._def.publicId,
            };

            $.ajax({
                url: url,
                type: "POST",
                data: eventObj,
                success: function(data) {
                    // console.log(data)
                }
            });
        },

        eventDragStop: e => {
            // console.log(is_drag)
            ctrlKeyChanged.unsubscribe(e.event.extendedProps[callbackKey])
        },
        eventClick: function(e) {
            const B = document.getElementById('open_kt_modal_view_event');
            B.click();
            const C = document.getElementById('kt_modal_view_event');
            let eventName = C.querySelector('[data-kt-calendar="event_name"]');
            let eventDesc = C.querySelector('[data-kt-calendar="event_description"]');
            let eventStartDate = C.querySelector('[data-kt-calendar="event_start_date"]');
            let eventEndDate = C.querySelector('[data-kt-calendar="event_end_date"]');
            // let eventLocation = C.querySelector('[data-kt-calendar="event_location"]');

            const eventId = document.getElementById('event_id');
            eventId.value = e.event.id;
            $.ajax({
                url: "/schedule/get-edit-weekly-schedule",
                type: "POST",
                data: {id:e.event.id},
                success: function(data) {
                    if (data.schedule === null) {
                        return;
                    }
                    eventName.textContent = e.event.title;
                    let start_date_time = data.schedule.kt_calendar_datepicker_start_date + " " + data.schedule.start_time;
                    let end_date_time = data.schedule.kt_calendar_datepicker_end_date + " " + data.schedule.end_time;
                    // eventDesc.textContent = e.event.description;
                    eventStartDate.textContent = moment(start_date_time, "YYYY-MM-DD HH:mm:ss").format("MMMM Do YYYY, h:mm:ss");
                    eventEndDate.textContent = moment(end_date_time, "YYYY-MM-DD HH:mm:ss").format("MMMM Do YYYY, h:mm:ss")
                    // eventLocation.textContent = e.event.location ? e.event.location : '__';
                }});

            calendar.getEvents().map((item, index) => {
                let checkbox = document.createElement('input');
                checkbox.type = 'checkbox';
                checkbox.id = item.id;
                checkbox.name = item.id;
                checkbox.value = item.id;

                let label = document.createElement('label')
                label.htmlFor = item.id;
                label.appendChild(document.createTextNode(item.title));
                let container = document.getElementById('event_lists');
                let divWrap = document.createElement('div');
                divWrap.appendChild(checkbox);
                divWrap.appendChild(label);
                container.appendChild(divWrap);
            });
        },

        dateClick: function(info) {
            document.getElementById('open_kt_modal_add_new_event').click();
        },
        events: function(fetchInfo, successCallback, failureCallback) {
            // Get schedule data via AJAX
            $.ajax({
                url: '/schedule/get-schedule',
                type: 'GET',
                success: function(data) {
                    console.log(data)
                    var events = [];

                    // Format the retrieved data into calendar events
                    data.data.forEach(function(eventData) {
                        let event = {
                            id: eventData.id,
                            title: eventData.first_name +' '+ eventData.last_name +" "+eventData.start_time.split(':').slice(0, 2).join(':'),
                            start: eventData.kt_calendar_datepicker_start_date,
                            className: `fc-event-light fc-event-solid-primary ${eventData.scheduling_status}`,
                        };
                        events.push(event);
                    });

                    successCallback(events); // Pass the formatted events to the calendar
                },
                error: function() {
                    failureCallback({ // Provide an empty array or handle the error case accordingly
                        message: 'Failed to retrieve schedule data.'
                    });
                }
            });
        }
    });

    calendar.render();

    document.getElementById('delete_submit').onclick = function() {
        let checkedValues = document.querySelectorAll('#event_lists div input:checked');

        if(!checkedValues) {
            return false;
        }

        Swal.fire({
            title: 'Do you want to delete events?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: "Yes, delete",
            cancelButtonText: "No, return",
            customClass: {
                confirmButton: "btn btn-primary",
                cancelButton: "btn btn-active-light"
            }
        }).then(function (result) {
            if (result.value) {
                let checked_event = [];
                for (let i = 0; i < checkedValues.length; i++) {
                    let event = calendar.getEventById(checkedValues[i].value);
                    checked_event.push(checkedValues[i].value)
                    event.remove();
                }
                // delete-schedule
                $.ajax({
                    url: "/schedule/delete-schedule",
                    type: "POST",
                    data: {ids:checked_event},
                    success: function(data) {
                        window.location.reload();
                    }});
                document.getElementById('kt_modal_delete').click();
            } else if (result.dismiss === "cancel") {
                Swal.fire({
                    text: "Event delete was declined!.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    }
                });
            }
        });
    }
    calendar.render();
});
