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

    const ctrlKeyChanged = (function() {
        let ctrlHeld = false;
        let subscriptions = [];
        ['keydown', 'keyup'].forEach(x =>
            document.addEventListener(x, e => {
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

    const extractEventProperties = ({ title, start, end, allDay }) => ({
        title,
        start,
        end,
        allDay
    });

    const callbackKey = Symbol();
// End of the workaround
    let calendar = new FullCalendar.Calendar(calendarEl, {
        initialDate: '2023-01-12',
        initialView: 'listWeek',
        editable: true,
        selectable: true,
        businessHours: true,
        selectMirror: true,
        dayMaxEvents: true, // allow "more" link when too many events
        eventDragStart: e => {
            let event;
            const callback = ctrlKey => {
                if (ctrlKey) {
                    event = calendar.addEvent(extractEventProperties(e.event));
                } else {
                    event && event.remove();
                }
            };
            ctrlKeyChanged.subscribe(callback);
            // store the callback for further unsubscribe
            e.event.setExtendedProp(callbackKey, callback);
        },
        // stop listening when the event has been dropped
        eventDragStop: e => ctrlKeyChanged.unsubscribe(e.event.extendedProps[callbackKey]),
        eventClick: function (e) {
            const B = document.getElementById('open_kt_modal_view_event');
            B.click();
            const C = document.getElementById('kt_modal_view_event');
            let eventName = C.querySelector('[data-kt-calendar="event_name"]');
            let eventDesc = C.querySelector('[data-kt-calendar="event_description"]');
            let eventStartDate = C.querySelector('[data-kt-calendar="event_start_date"]');
            let eventEndDate = C.querySelector('[data-kt-calendar="event_end_date"]');
            // let eventLocation = C.querySelector('[data-kt-calendar="event_location"]');

            eventName.textContent = e.event.title;
            eventDesc.textContent = e.event.description;
            eventStartDate.textContent = moment(e.event.start).format("dddd, MMMM Do YYYY, h:mm:ss a");
            eventEndDate.textContent = moment(e.event.end).format("dddd, MMMM Do YYYY, h:mm:ss a");
            // eventLocation.textContent = e.event.location ? e.event.location : '____';

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
        events: [
            {
                id: 1,
                title: "ICT Expo 2021 - Product Release",
                start: '2023-01-01',
                description: "Lorem ipsum dolor sit tempor inci",
                end: '2023-01-01',
                className: "fc-event-light fc-event-solid-primary",
                location: "Melbourne Exhibition Hall",
            },
            {
                id: 2,
                title: 'Long Event',
                start: '2023-01-07',
                description: "Lorem ipsum dolor sit tempor inci",
                end: '2023-01-10',
                className: "fc-event-warning",
                location: "Melbourne Exhibition Hall",
            },
            {
                id: 3,
                groupId: 999,
                title: 'Repeating Event',
                start: '2023-01-09T16:00:00',
                description: "Lorem ipsum dolor sit tempor inci",
                end: '2023-01-20T16:10:00',
                className: "fc-event-info",
                location: "Melbourne Exhibition Hall",
            },
            {
                id: 4,
                title: "Meeting",
                start: "2023-01-12T14:30:00",
                end: "2023-01-12T15:30:00",
                className: "fc-event-warning",
                description: "Lorem ipsum conse ctetur adipi scing",
                location: "Meeting Room 11.10"
            },

        ]
    });

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
                for (let i = 0; i < checkedValues.length; i++) {
                    let event = calendar.getEventById(checkedValues[i].value);
                    event.remove();
                }
                // window.location.reload();
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
