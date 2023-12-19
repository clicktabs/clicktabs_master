<!DOCTYPE html>
<html lang="en">

<head>
	<style>
/*This code is styling the HTML elements in the document. Here is a breakdown of
what each part of the code does:*/
	<style>
		* {
			margin: 0;
			padding: 0;
		}

		body {
			background: white;
		}

		.container {
			margin: 1rem;
		}

		[data-tab-info] {
			display: none;
		}

		.active[data-tab-info] {
			display: block;
		}

		.tab-content {
			margin-top: 1rem;
			padding-left: 1rem;
			font-size: 16px;
			font-family: sans-serif;
			font-weight: bold;
			color: rgb(0, 0, 0);
		}

		.tabs {

			background-color: rgb(16, 153, 9);
			font-size: 15px;
			color: rgb(0, 0, 0);
			display: flex;
			margin: 0;
		}

		.tabs span {
			background: rgb(16, 153, 9);
			padding: 10px;
			border: 1px solid rgb(255, 255, 255);
		}

		.tabs span:hover {
			background: rgb(55, 219, 46);
			cursor: pointer;
			color: black;
		}

        .nav>a {
            font-size: 15px;
            font-weight: 500;
        }
	</style>
</head>

<body>

	<!-- Body Container -->
	<div class="container" style="padding: 0;margin-left:0;margin-right:0">

		<!-- Tabs Detail -->
		<div class="tabs">
			<span data-tab-value="#tab_1">Oasis-E-Start-of-Care</span>
			<span data-tab-value="#tab_2">Oasis-E-Resumption-of-Care</span>
			<span data-tab-value="#tab_3">Oasis-E-Recertification</span>
            <span data-tab-value="#tab_4">Oasis-E-Discharge</span>
			<span data-tab-value="#tab_5">Oasis-E-Transfer</span>
			<span data-tab-value="#tab_6">Oasis-E-Death</span>
		</div>

		<!-- Tab content -->
		<div class="tab-content px-0">
			<div class="tabs__tab active" id="tab_1" data-tab-info>
				<div class="nav">
                    {{-- <a class="nav-link" href="{{route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient->id,'tab'=>'phistory'])}}" target="_blank">Patient History</a> --}}
                    <a class="nav-link" href="{{route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient->id,'tab'=>'admin'])}}" target="_blank">Administrative</a>
                    <a class="nav-link" href="{{route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient->id,'tab'=>'demographic'])}}" target="_blank">Demographics</a>
                    <a class="nav-link" href="{{route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient->id,'tab'=>'hearing'])}}" target="_blank">Hearing, Speech, and Vision</a>
                    <a class="nav-link" href="{{route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient->id,'tab'=>'cognitive'])}}" target="_blank">Cognitive, Mood, and Behavior</a>
                    <a class="nav-link" href="{{route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient->id,'tab'=>'preference'])}}" target="_blank">Preferences for Customary Routine Activities</a>
                    <a class="nav-link" href="{{route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient->id,'tab'=>'funStatus'])}}" target="_blank">Functional Status</a>
                    <a class="nav-link" href="{{route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient->id,'tab'=>'functionalabilitie'])}}" target="_blank">Functional Abilities and Goals</a>
                    <a class="nav-link" href="{{route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient->id,'tab'=>'bladd'])}}" target="_blank">Bladder and Bowel</a>
                    <a class="nav-link" href="{{route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient->id,'tab'=>'activeDig'])}}" target="_blank">Active Diagnosis</a>
                    <a class="nav-link" href="{{route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient->id,'tab'=>'healthcon'])}}" target="_blank">Health Conditions</a>
                    <a class="nav-link" href="{{route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient->id,'tab'=>'swallowing'])}}" target="_blank">Swallowing/Nutritional Status</a>
                    <a class="nav-link" href="{{route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient->id,'tab'=>'skin'])}}" target="_blank">Skin Conditions</a>
                    <a class="nav-link" href="{{route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient->id,'tab'=>'medication'])}}" target="_blank">Medications</a>
                    <a class="nav-link" href="{{route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient->id,'tab'=>'treatment'])}}" target="_blank">Orders For Discipline and Treatments</a>
                    <a class="nav-link" href="{{route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient->id,'tab'=>'physician'])}}" target="_blank">Physician Orders</a>
                   <a class="nav-link" href="{{route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient->id,'tab'=>'cms'])}}" target="_blank">CMS-485</a>
                </div>
			</div>
			<div class="tabs__tab" id="tab_2" data-tab-info>
				@include('patients.components.assessment-forms.resumption')
			</div>
			<div class="tabs__tab" id="tab_3" data-tab-info>
				@include('patients.components.assessment-forms.recertification')
			</div>
			<div class="tabs__tab" id="tab_4" data-tab-info>
				@include('patients.components.assessment-forms.discharge')
			</div>
			<div class="tabs__tab" id="tab_5" data-tab-info>
				@include('patients.components.assessment-forms.etransfer')
			</div>
            <div class="tabs__tab" id="tab_6" data-tab-info>
				@include('patients.components.assessment-forms.death')
			</div>
		</div>
	</div>
	<script type="text/javascript">

		// function to get each tab details
		const tabs = document.querySelectorAll('[data-tab-value]')
		const tabInfos = document.querySelectorAll('[data-tab-info]')

		tabs.forEach(tab => {
			tab.addEventListener('click', () => {
				const target = document
					.querySelector(tab.dataset.tabValue);
				tabInfos.forEach(tabInfo => {
					tabInfo.classList.remove('active')
				})
				target.classList.add('active');
			})
		})
	</script>
</body>

</html>
