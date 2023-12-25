<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Nursing Visit Form</title>
@php
$routeName=request()->route()->getName();
@endphp
    @if($routeName==='skilled-agency.oasis-e-start-of-care' || $routeName=='oasis-soc-e.store' || $routeName=='skilled-agency.get-oasis-e-start-of-care' || $routeName=='skilled-agency.task-form')
        <link rel="stylesheet" href="{{ asset('outass/bs/css/bootstrap.min.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('outass/css/style.css')}}">
    @else


   @endif

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
{{-- <script src="{{asset('aosisjs/startofcare.js') }}"></script> --}}
</head>

<body>
<nav class="pb-3 pt-4">
    <div class="container">
        <div class="nav nav-pills" id="nav-oasis-update-ui" role="tablist">
            <button class="nav-link {{isset($active) && $active=='phistory'?'active':''}}" data-bs-toggle="tab" data-bs-target="#patient-history" type="button" role="tab"
                    aria-selected="true">Patient History
            </button>
            <button class="nav-link {{isset($active) && $active=='admin'?'active':''}}" data-bs-toggle="tab" data-bs-target="#patient-tracking" type="button" role="tab"
                    aria-selected="true">Administrative
            </button>
            <button class="nav-link  {{isset($active) && $active=='demographic'?'active':''}}" data-bs-toggle="tab" data-bs-target="#demographics" type="button"
                    role="tab" aria-selected="true">Demographics
            </button>
            <button class="nav-link  {{isset($active) && $active=='hearing'?'active':''}}" data-bs-toggle="tab" data-bs-target="#speach-hearing-vision" type="button"
                    role="tab" aria-selected="true">Hearing, Speech, and Vision
            </button>
            <button class="nav-link  {{isset($active) && $active=='cognitive'?'active':''}}" data-bs-toggle="tab" data-bs-target="#cognitive-mood-behaviour" type="button"
                    role="tab" aria-selected="true">Cognitive, Mood, and Behavior
            </button>
            <button class="nav-link  {{isset($active) && $active=='preference'?'active':''}}" data-bs-toggle="tab" data-bs-target="#preferences-routine-activities" type="button"
                    role="tab" aria-selected="true">Preferences for Customary Routine Activities
            </button>
           <!--  <button class="nav-link  {{isset($active) && $active=='environment'?'active':''}}" data-bs-toggle="tab" data-bs-target="#environment-condition" type="button"
                    role="tab" aria-selected="true">Environment Conditions
            </button> -->
            <button class="nav-link  {{isset($active) && $active=='funStatus'?'active':''}}" data-bs-toggle="tab" data-bs-target="#functional-status" type="button" role="tab"
                    aria-selected="true">Functional Status
            </button>
            <button class="nav-link  {{isset($active) && $active=='functionalabilitie'?'active':''}}" data-bs-toggle="tab" data-bs-target="#functional-abilities" type="button" role="tab" aria-selected="true">Functional Abilities and Goals
            </button>
            <button class="nav-link  {{isset($active) && $active=='bladd'?'active':''}}" data-bs-toggle="tab" data-bs-target="#bladder-bowel" type="button" role="tab"
                    aria-selected="true">Bladder and Bowel
            </button>
            <button class="nav-link {{isset($active) && $active=='activeDig'?'active':''}} " data-bs-toggle="tab" data-bs-target="#active-diagnosis" type="button" role="tab"
                    aria-selected="true">Active Diagnosis
            </button>
            <button class="nav-link {{isset($active) && $active=='healthcon'?'active':''}}" data-bs-toggle="tab" data-bs-target="#health-conditions" type="button" role="tab" aria-selected="true">Health Conditions
            </button>
            <button class="nav-link {{isset($active) && $active=='swallowing'?'active':''}}" data-bs-toggle="tab" data-bs-target="#swallowing_nutritional_status" type="button" role="tab" aria-selected="true">Swallowing/Nutritional Status
            </button>
            <button class="nav-link {{isset($active) && $active=='skin'?'active':''}}" data-bs-toggle="tab" data-bs-target="#skin-conditions" type="button" role="tab"
                    aria-selected="true">Skin Conditions
            </button>
            <button class="nav-link {{isset($active) && $active=='medication'?'active':''}}" data-bs-toggle="tab" data-bs-target="#medications" type="button" role="tab"
                    aria-selected="true">Medications
            </button>
            <button class="nav-link {{isset($active) && $active=='treatment'?'active':''}}" data-bs-toggle="tab" data-bs-target="#discipline-treatment" type="button"
                    role="tab" aria-selected="true">Orders For Discipline and Treatments
            </button>
            <button class="nav-link {{isset($active) && $active=='physician'?'active':''}}" data-bs-toggle="tab" data-bs-target="#physician-order" type="button"
            role="tab" aria-selected="true">Physician Orders
           </button>
           <button class="nav-link {{isset($active) && $active=='cms'?'active':''}}" data-bs-toggle="tab" data-bs-target="#cms-485" type="button"
           role="tab" aria-selected="true">CMS-485
          </button>
        </div>
    </div>
</nav>

<div class="container">
    <div class="form-holder pb-5">
            <div class="tab-content" id="nav-tabContent">
                @include('skilled-agency.new-outcome-assessment.patient-history')
                @include('skilled-agency.new-outcome-assessment.administrative')
                @include('skilled-agency.new-outcome-assessment.demographics')
                @include('skilled-agency.new-outcome-assessment.hearing-vision')
                @include('skilled-agency.new-outcome-assessment.cognitive-mood-behavior')
                @include('skilled-agency.new-outcome-assessment.preferences-activities')

                @include('skilled-agency.new-outcome-assessment.environment-condition')

                @include('skilled-agency.new-outcome-assessment.functional-status')
                @include('skilled-agency.new-outcome-assessment.functional-abilities')

                @include('skilled-agency.new-outcome-assessment.bladder-bowel')
                @include('skilled-agency.new-outcome-assessment.active-diagnosis')
                @include('skilled-agency.new-outcome-assessment.health-condition')
                @include('skilled-agency.new-outcome-assessment.swallowing-nutritional')


                @include('skilled-agency.new-outcome-assessment.skin-conditions')
                @include('skilled-agency.new-outcome-assessment.medications')
                @include('skilled-agency.new-outcome-assessment.special-treatment')
                @include('skilled-agency.new-outcome-assessment.physician-order')
                @include('skilled-agency.new-outcome-assessment.cms-485')


            </div>

    </div>
</div>
@include('signature')
    @if($routeName==='skilled-agency.oasis-e-start-of-care' || $routeName=='oasis-soc-e.store' || $routeName=='skilled-agency.get-oasis-e-start-of-care'|| $routeName=='skilled-agency.task-form')
        <script src="{{asset('outass/bs/js/bootstrap.min.js')}}"></script>
    @endif

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function () {
        const new_goals = $('#new_goals');
        new_goals.select2();

        new_goals.on('select2:select', function (e) {
            let selectedValue = e.params.data.id; // Get the selected value

            let textareaValue = $('#new_goals_content').val(); // Get the current value of the textarea

            // Split the current textarea value into an array
            let existingValues = textareaValue ? textareaValue.split('\n') : [];

            // Check if the selected value is already in the textarea
            if (!existingValues.includes(selectedValue)) {
                existingValues.push(selectedValue); // Add the selected value to the existing values array

                let updatedText = existingValues.join('\n'); // Convert the array to a comma-separated string
                $('#new_goals_content').val(updatedText); // Set the updated value of the textarea
            }
        });
        new_goals.on('select2:unselect', function (e) {
            let deselectedValue = e.params.data.id; // Get the deselected value

            let textareaValue = $('#new_goals_content').val(); // Get the current value of the textarea

            // Split the current textarea value into an array
            let existingValues = textareaValue ? textareaValue.split('\n') : [];

            // Remove the deselected value from the existing values array
            let updatedValues = existingValues.filter(value => value !== deselectedValue);

            let updatedText = updatedValues.join('\n'); // Convert the array to a comma-separated string
            $('#new_goals_content').val(updatedText); // Set the updated value of the textarea
        });
    });
</script>

<script>
        $(document).ready(function () {
            const new_interventions = $('#new_interventions');
            new_interventions.select2();

            new_interventions.on('select2:select', function (e) {
                let selectedValue = e.params.data.id; // Get the selected value

                let textareaValue = $('#intervension_content').val(); // Get the current value of the textarea

                // Split the current textarea value into an array
                let existingValues = textareaValue ? textareaValue.split('\n') : [];

                // Check if the selected value is already in the textarea
                if (!existingValues.includes(selectedValue)) {
                    existingValues.push(selectedValue); // Add the selected value to the existing values array

                    let updatedText = existingValues.join(', '+'\n'); // Convert the array to a comma-separated string
                    $('#intervension_content').val(updatedText); // Set the updated value of the textarea
                }
            });
            new_interventions.on('select2:unselect', function (e) {
                let deselectedValue = e.params.data.id; // Get the deselected value

                let textareaValue = $('#intervension_content').val(); // Get the current value of the textarea

                // Split the current textarea value into an array
                let existingValues = textareaValue ? textareaValue.split('\n') : [];

                // Remove the deselected value from the existing values array
                let updatedValues = existingValues.filter(value => value !== deselectedValue);

                let updatedText = updatedValues.join(', '+'\n'); // Convert the array to a comma-separated string
                $('#intervension_content').val(updatedText); // Set the updated value of the textarea
            });
        });
    </script>


</body>

</html>
