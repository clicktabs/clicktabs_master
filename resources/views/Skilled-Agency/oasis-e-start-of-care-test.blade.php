<style>
    #oasis-e-start-of-care .ui-state-active a{
        background-color: red;
        color: #fff;
    }
    #oasis-e-start-of-care a{
        color: #fff;
    }
    label.form-check-label {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .input-group.clean-input-group .form-control {
        border-bottom: 1px solid #9999;
    }
    .tabcontent.active {
        display: block;
    }
    div#oasis_tabs ul li a {
        padding: 5px 15px;
    }
    div#oasis_tabs ul li a.active {
        background: red;
    }
</style>
<div id="oasis_tabs">
    <div class="container pt-5">
        <div class="bg-[#4133BF] overflow-hidden px-[20px] py-[10px]">
            <ul class="flex items-center overflow-scroll gap-[15px]">
                <li class="shrink-0"><a class="block tablinks py-[5px] px-[10px] rounded-[5px] text-[#fff] patient-history active" href="#" id="defaultOpen" onclick="openPage(event, 'patient-history')">Patient History</a></li>
                <li class="shrink-0"><a class="block tablinks py-[5px] px-[10px] rounded-[5px] text-[#fff] patient-tracking" href="#" onclick="openPage(event, 'patient-tracking')">Administrative</a></li>
                <li class="shrink-0"><a class="block tablinks py-[5px] px-[10px] rounded-[5px] text-[#fff] demographics" href="#" onclick="openPage(event, 'demographics')">Demographics</a></li>
                <li class="shrink-0"><a class="block tablinks py-[5px] px-[10px] rounded-[5px] text-[#fff] speach-hearing-vision" href="#" onclick="openPage(event, 'speach-hearing-vision')">Hearing, Speech, and Vision</a></li>
                <li class="shrink-0"><a class="block tablinks py-[5px] px-[10px] rounded-[5px] text-[#fff] cognitive-mood-behaviour" href="#" onclick="openPage(event, 'cognitive-mood-behaviour')">Cognitive, Mood, and Behavior</a></li>
                <li class="shrink-0"><a class="block tablinks py-[5px] px-[10px] rounded-[5px] text-[#fff] preferences-routine-activities" href="#" onclick="openPage(event, 'preferences-routine-activities')">Preferences for Customary Routine Activities</a></li>
                <!-- <li class="shrink-0"><a class="block tablinks py-[5px] px-[10px] rounded-[5px] text-[#fff]" href="#environment-condition">Environment Conditions</a></li> -->
                <li class="shrink-0"><a class="block tablinks py-[5px] px-[10px] rounded-[5px] text-[#fff] functional-status" href="#" onclick="openPage(event, 'functional-status')">Functional Status</a></li>
                <li class="shrink-0"><a class="block tablinks py-[5px] px-[10px] rounded-[5px] text-[#fff] functional-abilities" href="#" onclick="openPage(event, 'functional-abilities')">Functional Abilities and Goals</a></li>
                <li class="shrink-0"><a class="block tablinks py-[5px] px-[10px] rounded-[5px] text-[#fff] bladder-bowel" href="#" onclick="openPage(event, 'bladder-bowel')">Bladder and Bowel</a></li>
                <li class="shrink-0"><a class="block tablinks py-[5px] px-[10px] rounded-[5px] text-[#fff] diagnosis" href="#" onclick="openPage(event, 'diagnosis')">Active Diagnosis</a></li>
                <li class="shrink-0"><a class="block tablinks py-[5px] px-[10px] rounded-[5px] text-[#fff] health-conditions" href="#" onclick="openPage(event, 'health-conditions')">Health Conditions</a></li>
                <li class="shrink-0"><a class="block tablinks py-[5px] px-[10px] rounded-[5px] text-[#fff] swallowing_nutritional_status" href="#" onclick="openPage(event, 'swallowing_nutritional_status')">Swallowing/Nutritional Status</a></li>
                <li class="shrink-0"><a class="block tablinks py-[5px] px-[10px] rounded-[5px] text-[#fff] skin-conditions" href="#" onclick="openPage(event, 'skin-conditions')">Skin Conditions</a></li>
                <li class="shrink-0"><a class="block tablinks py-[5px] px-[10px] rounded-[5px] text-[#fff] medications" href="#" onclick="openPage(event, 'medications')">Medications</a></li>
                <li class="shrink-0"><a class="block tablinks py-[5px] px-[10px] rounded-[5px] text-[#fff] discipline-treatment" href="#" onclick="openPage(event, 'discipline-treatment')">Orders For Discipline and Treatments</a></li>
                <li class="shrink-0"><a class="block tablinks py-[5px] px-[10px] rounded-[5px] text-[#fff] physician-order" href="#" onclick="openPage(event, 'physician-order')">Physician Orders</a></li>
                <li class="shrink-0"><a class="block tablinks py-[5px] px-[10px] rounded-[5px] text-[#fff] cms-485" href="#" onclick="openPage(event, 'cms-485')">CMS-485</a></li>
            </ul>
        </div>
        <form action="{{route('oasis-soc-e.store')}}" method="POST" id="new-oasis-e-form">
            @csrf

            <input type="hidden" value="" name="patient_id" />
            <input type="hidden" name="task_schedule_id" class="task_schedule_id" />
            @include('skilled-agency.new-outcome-assessment.patient-history')
            @include('skilled-agency.new-outcome-assessment.administrative')
            @include('skilled-agency.new-outcome-assessment.demographics')
            @include('skilled-agency.new-outcome-assessment.hearing-vision')
            @include('skilled-agency.new-outcome-assessment.cognitive-mood-behavior')
            @include('skilled-agency.new-outcome-assessment.preferences-activities')
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
        </form>
    </div>
</div>
