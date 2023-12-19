<nav class="pt-3 pb-3">
    <div class="container">
        <div class="nav nav-pills" id="nav-oasis-update-ui" role="tablist">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#patient-history" type="button" role="tab"
                    aria-selected="true">Patient History
            </button>
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#patient-tracking" type="button" role="tab"
                    aria-selected="true">Administrative
            </button>
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#demographics" type="button"
                    role="tab" aria-selected="true">Demographics
            </button>
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#speach-hearing-vision" type="button"
                    role="tab" aria-selected="true">Hearing, Speech, and Vision
            </button>
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cognitive-mood-behaviour" type="button"
                    role="tab" aria-selected="true">Cognitive, Mood, and Behavior
            </button>
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#preferences-routine-activities" type="button"
                    role="tab" aria-selected="true">Preferences for Customary Routine Activities
            </button>
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#environment-condition" type="button"
                    role="tab" aria-selected="true">Environment Conditions
            </button>
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#functional-status" type="button" role="tab"
                    aria-selected="true">Functional Status
            </button>
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#functional-abilities" type="button"
                    role="tab" aria-selected="true">Functional Abilities and Goals
            </button>
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#bladder-bowel" type="button" role="tab"
                    aria-selected="true">Bladder and Bowel
            </button>
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#active-diagnosis" type="button" role="tab"
                    aria-selected="true">Active Diagnosis
            </button>
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#health-conditions" type="button" role="tab"
                    aria-selected="true">Health Conditions
            </button>
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Swallowing_Nutritional Status" type="button" role="tab"
                    aria-selected="true">Swallowing/Nutritional Status
            </button>
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#skin-conditions" type="button" role="tab"
                    aria-selected="true">Skin Conditions
            </button>
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#medications" type="button" role="tab"
                    aria-selected="true">Medications
            </button>
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#discipline-treatment" type="button"
                    role="tab" aria-selected="true">Orders For Discipline and Treatments
            </button>
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#physician-order" type="button"
            role="tab" aria-selected="true">Physician Orders
           </button>
           <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cms-485" type="button"
           role="tab" aria-selected="true">CMS-485
          </button>
        </div>
    </div>
</nav>

<div class="container pt-5">
    <div class="form-holder pt-5 pb-5">
        <form action="{{route('oasis-soc-e.store')}}" method="POST" id="new-oasis-e-form">
            <div class="tab-content" id="nav-tabContent">
                @include('home-healthcare.new-outcome-assessment.patient-history')
                @include('home-healthcare.new-outcome-assessment.administrative')
                @include('home-healthcare.new-outcome-assessment.demographics')
                @include('home-healthcare.new-outcome-assessment.hearing-vision')
                @include('home-healthcare.new-outcome-assessment.cognitive-mood-behavior')
                @include('home-healthcare.new-outcome-assessment.preferences-activities')
                @include('home-healthcare.new-outcome-assessment.functional-status')
                @include('home-healthcare.new-outcome-assessment.functional-abilities')
                @include('home-healthcare.new-outcome-assessment.bladder-bowel')
                @include('home-healthcare.new-outcome-assessment.active-diagnosis')
                @include('home-healthcare.new-outcome-assessment.health-condition')
                @include('home-healthcare.new-outcome-assessment.swallowing-nutritional')
                @include('home-healthcare.new-outcome-assessment.skin-conditions')
                @include('home-healthcare.new-outcome-assessment.medications')
                @include('home-healthcare.new-outcome-assessment.special-treatment')
                @include('home-healthcare.new-outcome-assessment.physician-order')
                @include('home-healthcare.new-outcome-assessment.cms-485')
            </div>
        </form>
    </div>
</div>