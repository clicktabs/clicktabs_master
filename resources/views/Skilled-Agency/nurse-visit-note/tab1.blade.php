<div class="px-[15px] bg-white {{isset($active) && $active=='first'?'active':''}}" id="teb-one">
	<div class="vt p-2">@include('layouts.company_info')</div>
<div class="container-fluid">
<div class="form-holder pt-4 pb-5">
<form action="{{route('skilled-agency.saveNursing')}}" method="POST" id="nursing-visit-form">
@csrf
<div class=" vt row g-3 align-items-center justify-content-end pb-4">
	<div class="vt col-auto">
		<div class="row g-3 align-items-center">
			<div class="col-auto">
				<label for="visit_date" class="col-form-label">Visit Date & Time</label>
			</div>
			<div class="col-auto">
				<label for="visit_date" class="col-form-label">Date</label>
			</div>
			<div class="col-auto">
				<input type="date" name="visitDate" id="visit_date" value="" class="form-control">
			</div>
		</div>
	</div>

<div class="col-auto">
<div class="row g-3 align-items-center">
	<div class="col-auto">
		<label for="time-in" class="col-form-label" for="">TIME IN</label>
	</div>
	<div class="col-auto">
		<input type="time" name="timeIn" id="time_in" value="" class="form-control">
	</div>
</div>
</div>

<div class="col-auto">
<div class="row g-3 align-items-center">
	<div class="col-auto">
		<label for="time-out" class="col-form-label"for="" >TIME OUT</label>
	</div>
	<div class="col-auto">
		<input type="time" name="timeOut" id="time_out" value="" class="form-control">
	</div>
</div>
</div>
</div>

<div class="row row-flex align-items-center mt-2">

	
		<div class="border border-2 rounded bg-white p-2 mt-2 vt">
			<div class="col-lg-auto">
					<div class="col-lg-auto pt-2"><h4>TYPE OF VISIT:</h4></div>
				<div class="row row-flex align-items-center">
		<div class="col-auto">
			<label class="form-check-label" for="type_of_visit_1"><input type="radio" name="visitType" value="1" id="type_of_visit_1" value="skilled" class="form-check-input"> Skilled:</label>

		</div>
		<div class="col-auto">
			<label class="form-check-label" for="type_of_visit_2">
				<input type="radio" name="visitType" value="2" id="type_of_visit_2" value="planned"  class="form-check-input"> Planned</label>
			</div>
				<div class="col-auto">
					<label class="form-check-label" for="type_of_visit_3"><input type="radio" name="visitType" value="3" id="type_of_visit_3" value="prn"  class="form-check-input"> PRN</label>
				</div>
					<div class="col-auto">
						<label class="form-check-label" for="type_of_visit_4" ><input type="radio" name="visitType" value="4" id="type_of_visit_4" value="Skilled Supervisory"  class="form-check-input"> Skilled & Supervisory</label>
					</div>
						<div class="col-auto">
							<label class="form-check-label" for="type_of_visit_5"><input type="radio" name="visitType" value="5" id="type_of_visit_5" value="Supervisory Only"  class="form-check-input"> Supervisory Only</label>
						</div>
					<div class="col-auto">
						<label class="form-check-label" for="type_of_visit_6"><input type="radio" name="visitType" value="6" id="type_of_visit_6" value="Other"  class="form-check-input"> Other</label>
					</div>
				</div>
			</div>
				<div class="row row-flex">
			<div class="col-md-5 border-md-end-2">
			<label class="form-check-label mt-2" for="Q5001"><input type="checkbox" name="q5001" id="Q5001" value="1"  class="form-check-input"> 1 Q5001: Hospice or HH Care provided in patients home/residence</label>
				<label class="form-check-label mt-2" for="Q5002"><input type="checkbox" name="q5002" id="Q5002" value="1"  class="form-check-input"> Q5002: Hospice or HH Care provided in Assisted Living Facility</label>
					<label class="form-check-label mt-2" for="q5009"><input type="checkbox" name="q5009" id="Q5009" value="1"  class="form-check-input"> Q5009: Hospice or HH Care provided in place not otherwise specified</label>
				</div>
					<div class="col-md-7">
						<div class="row row-flex">
							<div class="col-md-6">
								<label class="form-check-label mt-2" for="G0162"><input type="checkbox" name="g0162" id="G0162" value="1"  class="form-check-input"> G0162: Management/Evaluation</label>
									<label class="form-check-label mt-2" for="G0299"><input type="checkbox" name="g0299" id="G0162" value="1"  class="form-check-input"> G0299: Direct Skill (RN)

								G0300: Direct Skill (LPN)</label>
									<label class="form-check-label mt-2" for="G0493"><input type="checkbox" name="g0493" id="G0493" value="1"  class="form-check-input"> G0493: Observation/Assessment (RN)</label>
							</div>
						<div class="col-md-6">
							<label class="form-check-label mt-2" for="G0494">
								<input type="checkbox" name="g0494" id="G0494" value="1" class="form-check-input"> G0494: Observation/Assessment (LPN)</label>
									<label class="form-check-label mt-2" for="G0495"><input type="checkbox" name="g0495" id="G0495" value="1"  class="form-check-input"> G0495: Education/Training (RN)</label>
										<label class="form-check-label mt-2" for="G0496"><input type="checkbox" name="g0496" id="G0496" value="1"  class="form-check-input"> G0496: Education/Training (LPN)</label>
									</div>
								</div>
							</div>
						</div>
					<div class="row row-flex">
						<div class="col-auto">
							<label for="diagnosis" class="col-form-label" for="">Diagnosis(es) related to need:</label>
						</div>
						<div class="col-md">
							<input type="text" name="diagnosis" id="diagnosis"  class="form-control">
						</div>
					</div>

				<div class="row row-flex mt-3">
					<div class="col-auto">
						<label for="homebound_reason" class="col-form-label" for="">Homebound reason:</label>
					</div>
					<div class="col-md">
						<input type="text" name="homeboundReason" id="homeboundReason" value=""  class="form-control">
					</div>
				</div>
		<h4 class="mt-4">VITAL SIGNS:</h4>
	<table class="table table-borderless align-middle mb-0">
	<tr>
	<td>
	<table class="table table-borderless align-middle">
		<tr>
			<td>
				<div class="input-group">
					<label class="input-group-text" for="temperature">Temperature:</label>
					<input type="text" name="temperature" id="temperature" value=""  class="form-control">
					<span class="input-group-text">F</span>
				</div>
			</td>
			<td class="labels-group">
				<label class="form-check-label" for="oral"><input type="radio" name="temp" value="1" id="oral" value="oral" class="form-check-input"> Oral</label>
				<label class="form-check-label" for="axillary"><input type="radio" name="temp" value="2" id="axillary" value="axillary" class="form-check-input"> Axillary</label>
				<label class="form-check-label" for="tympanic"><input type="radio" name="temp" value="3" id="tympanic" value="tympanic" class="form-check-input"> Tympanic</label>
				<label class="form-check-label" for="temporal"><input type="radio" name="temp" value="4" id="temporal" value="temporal" class="form-check-input"> Temporal/Forehead</label>
				<label class="form-check-label" for="rectal"><input type="radio" name="temp" value="5" id="rectal" value="rectal" class="form-check-input"> Rectal</label>
			</td>
		</tr>
	</table>
	</td>
			<td>
				<table class="table table-borderless align-middle">
					<tr>
						<td>
							<div class="input-group">
								<label class="input-group-text" for="">Pulse:</label>
								<input type="text" name="pulse" class="form-control">
							</div>
						</td>
						<td class="labels-group">
							<label class="form-check-label" for="radial"><input type="radio" name="pul" value="1" id="radial" value="radial" class="form-check-input"> Radial</label>
							<label class="form-check-label" for="apical"><input type="radio" name="pul" value="2" id="apical" value="apical" class="form-check-input"> Apical</label>
							<label class="form-check-label" for="brachial"><input type="radio" name="pul" value="3" id="brachial" value="brachial" class="form-check-input"> Brachial</label>
							<label class="form-check-label" for="carotid"><input type="radio" name="pul" value="4" id="carotid" value="carotid" class="form-check-input"> Carotid</label>
							<label class="form-check-label" for="p_regular"><input type="radio" name="pul" value="5" id="p_regular" value="regular" class="form-check-input"> Regular</label>
							<label class="form-check-label" for="p_irregular"><input type="radio" name="pul" value="6" id="p_irregular" value="irregular" class="form-check-input">Irregular</label>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<table class="table table-borderless align-middle mb-0">
		<tr>
			<td>
				<table class="table table-borderless align-middle">
					<tr>
						<td>
							<div class="input-group">
								<label class="input-group-text" for="">Respirations:</label>
								<input type="text" name="respirations" class="form-control">
							</div>
						</td>
						<td class="labels-group">
							<label class="form-check-label" for="regular"><input type="radio" name="irregularRespi" id="regular" value="regular" class="form-check-input"> Regular</label>
							<label class="form-check-label" for="irregular"><input type="radio" name="irregularRespi" id="irregular" value="irregular" class="form-check-input"> Irregular</label>
						</td>
					</tr>
				</table>
			</td>

			<td>
				<div class="input-group">
					<label class="input-group-text" for="Weight">Weight:</label>
					<input type="text" name="weight" id="Weight" value="" class="form-control">
				</div>
			</td>

			<td>
				<table class="table table-borderless align-middle">
					<tr>
						<td><label>Blood Pressure:</label></td>
						<td>
							<div class="row row-flex g-2">
								<div class="col">
									<div class="input-group">
										<label class="input-group-text" for="pressure_right">Right:</label>
										<input type="text" name="pressureRight" id="pressure_right" value="" class="form-control">
									</div>
								</div>
								<div class="col">
									<div class="input-group">
										<label class="input-group-text" for="pressure_left">Left:</label>
										<input type="text" name="pressureLeft" id="pressure_left" value="" class="form-control">
									</div>
								</div>
							</div>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<table class="table table-borderless align-middle mb-0">
		<tr>
			<td>
				<table class="table table-borderless align-middle">
					<tr>
						<td>
							<div class="input-group">
								<label class="input-group-text" for="apnea_periods">Apnea Periods</label>
								<input style="max-width: 120px;" type="text" name="apneaPeriodsText" id="apnea_periods" value="" class="form-control">
								<label class="input-group-text" for="">sec.</label>
							</div>
						</td>
						<td class="labels-group">
							<label class="form-check-label" for="apnea_periods_observed">
								<input type="radio" name="apneaPeriods" id="apnea_periods_observed" value="Observed" class="form-check-input"> Observed</label>
								<label class="form-check-label" for="apnea_periods_reported"><input type="radio" name="ApneaPeriods" id="apneaPeriodsReported" value="reported" class="form-check-input"> Reported</label>
							</td>
						</tr>
					</table>
				</td>
				<td class="labels-group">
					<label class="form-check-label" for="apnea_periods_actual"><input type="radio" name="apneaPeriods1" id="apnea_periods_actual" value="Actual" class="form-check-input"> Actual</label>
					<label class="form-check-label" for="reported_apnea_periods"><input type="radio" name="apneaPeriods1" id="reported_apnea_periods" value="reported" class="form-check-input"> Reported</label>
				</td>
				<td class="labels-group">
					<label class="form-check-label" for="apnea_periods_lying"><input type="radio" name="apneaPeriods2" id="apnea_periods_lying" value="lying" class="form-check-input"> Lying</label>
					<label class="form-check-label" for="apnea_periods_standing"><input type="radio" name="apneaPeriods2" id="apnea_periods_standing" value="standing" class="form-check-input"> Standing</label>
					<label class="form-check-label" for="apnea_periods_sitting"><input type="radio" name="apneaPeriods2" id="apnea_periods_sitting" value="sitting" class="form-check-input"> Sitting</label>
				</td>
			</tr>
		</table>

		<h4 class="mt-4">PAIN:</h4>
		<table class="table table-borderless align-middle mb-0">
			<tr>
				<td>
					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td><h5>Is patient experiencing pain?</h5></td>
							<td class="labels-group">
								<label class="form-check-label" for="patient_experiencing_yes"><input type="radio" name="patientExperiencing" id="patient_experiencing" value="Yes" class="form-check-input"> Yes</label>
								<label class="form-check-label" for="patient_experiencing_no">
									<input type="radio" name="patientExperiencing" id="patient_experiencing" value="No" class="form-check-input"> No</label>
									<label class="form-check-label" for="patient_experiencing_unable_to_communicate"><input type="radio" name="patientExperiencing" id="patient_experiencing_unable_to_communicate" value="unable to communicate" class="form-check-input"> Unable to communicate</label>
								</td>
							</tr>
						</table>
					</td>
					<td>
						<div class="input-group">
							<label class="input-group-text" for="origin">Origin</label>
							<input type="text" name="origin" id="origin" value="" class="form-control">
						</div>
					</td>
					<td>
						<div class="input-group">
							<label class="input-group-text" for="location">Location(s)</label>
							<input type="text" name="location" id="location" value="" class="form-control">
						</div>
					</td>
				</tr>
			</table>

			<table class="table table-borderless align-middle mb-0">
				<tr>
					<td>
						<div class="input-group">
							<label class="input-group-text" for="duration">Duration</label>
							<input type="text" name="duration" id="duration" value="" class="form-control">
						</div>
					</td>
					<td>
						<div class="input-group">
							<label class="input-group-text" for="intensity">Intensity 0-10</label>
							<input type="text" name="intensity" id="intensity" value="" class="form-control">
						</div>
					</td>
					<td>
						<div class="input-group">
							<label class="input-group-text" for="relief_measures">Relief measures</label>
							<input type="text" name="reliefMeasures" id="relief_measures" value="" class="form-control">
						</div>
					</td>
				</tr>
			</table>

			<table class="table table-borderless align-middle mb-0">
				<tr>
					<td><h5>Non-verbals demonstrated:</h5></td>
					<td class="labels-group">
						<label class="form-check-label" for="demonstrated_diaphoresis"><input type="radio" name="demonstrated" id="demonstrated_diaphoresis" value="diaphoresis" class="form-check-input"> Diaphoresis</label>
						<label class="form-check-label" for="demonstrated_grimacing"><input type="radio" name="demonstrated" id="Grimacing" value="grimacing" class="form-check-input"> Grimacing</label>
						<label class="form-check-label" for="demonstrated_guarding"><input type="radio" name="demonstrated" id="demonstrated_guarding" value="Guarding" class="form-check-input"> Guarding</label>
						<label class="form-check-label" for="demonstrated_moaning"><input type="radio" name="demonstrated" id="demonstrated_moaning" value="Moaning" class="form-check-input"> Moaning</label>
						<label class="form-check-label" for="demonstrated_crying"><input type="radio" name="demonstrated" id="demonstrated_crying" value="crying" class="form-check-input"> Crying</label>
						<label class="form-check-label" for="demonstrated_irritability"><input type="radio" name="demonstrated" id="demonstrated_irritability" value="irritability" class="form-check-input"> Irritability</label>
						<label class="form-check-label" for="demonstrated_anger"><input type="radio" name="demonstrated" id="demonstrated_anger" value="anger" class="form-check-input"> Anger</label>
						<label class="form-check-label" for="demonstrated_tense"><input type="radio" name="demonstrated" id="demonstrated_tense" value="tense" class="form-check-input"> Tense</label>
						<label class="form-check-label" for="demonstrated_restlessness"><input type="radio" name="demonstrated" id="demonstrated_restlessness" value="restlessness" class="form-check-input"> Restlessness</label>
					</td>
				</tr>
			</table>

			<table class="table table-borderless align-middle mb-0">
				<tr>
					<td>
						<label class="form-check-label" for=""><input type="checkbox" name="changeVitalSig" id="ChangeVitalSig" value="1" class="form-check-input"> Change in Vital Sig</label>
					</td>
					<td>
						<div class="input-group">
							<label class="input-group-text" for="p_other">Other:</label>
							<input type="text" name="pOther" id="p_other" value="" class="form-control">
						</div>
					</td>
					<td>
						<table class="table table-borderless align-middle mb-0">
							<tr>
								<td><label class="" for="">Implications Care Plan:</label></td>
								<td class="labels-group">
									<label class="form-check-label" for="implications_care_plan_yes"><input type="radio" name="implicationsCarePlan" id="implications_care_plan_yes" value="yes" class="form-check-input"> Yes</label>
									<label class="form-check-label" for="implications_care_plan_no"><input type="radio" name="implicationsCarePlan" id="implications_care_plan_no" value="no" class="form-check-input"> No</label>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>

			<div class="row row-flex mt-4">
				<div class="col-lg-6 border-lg-end-2">
					<h3 class="bg-dark-subtle text-center p-2 nm-3">CARDIOPULMONARY</h3>
					<h4 class="mb-0 mt-3">Lung Sounds</h4>
					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td class="labels-group">
								<label class="form-check-label" for="cardiopulmonary_clear"><input type="radio" name="lungSounds" id="cardiopulmonary_clear" value="clear" class="form-check-input"> Clear</label>
								<label class="form-check-label" for="cardiopulmonary_crackles"><input type="radio" name="lungSounds" id="cardiopulmonary_crackles" value="crackles" class="form-check-input"> Crackles</label>
								<label class="form-check-label" for="cardiopulmonary_rales"><input type="radio" name="lungSounds" id="cardiopulmonary_rales" value="rales" class="form-check-input"> Rales</label>
							</td>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="f_location">Location</label>
									<input type="text" name="fLocation" id="f_location" value="" class="form-control">
								</div>
							</td>
						</tr>
					</table>

					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="wheeze_location">Rhonchi/Wheeze Location</label>
									<input type="text" name="wheezeLocation" id="wheezeLocation" value="" class="form-control">
								</div>
							</td>
						</tr>
					</table>

					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td class="labels-group">
								<label class="form-check-label" for="diminished"><input type="checkbox" name="diminished" id="diminished" value="1" class="form-check-input"> Diminished</label>
								<label class="form-check-label" for="absent"><input type="checkbox" name="absent" id="absent" value="1" class="form-check-input"> Absent</label>
							</td>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="absentOther">Other</label>
									<input type="text" name="absentOther" id="absentOther" value="" class="form-control">
								</div>
							</td>
						</tr>
					</table>

					<h4 class="mb-0 mt-3">Cough</h4>
					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td class="labels-group">
								<label class="form-check-label" for="cough_none"><input type="radio" name="cough" id="cough_none" value="none" class="form-check-input"> None</label>
								<label class="form-check-label" for="cough_dry"><input type="radio" name="cough" id="cough_dry" value="dry" class="form-check-input"> Dry</label>
								<label class="form-check-label" for="cough_acute"><input type="radio" name="cough" id="cough_acute" value="acute" class="form-check-input"> Acute</label>
								<label class="form-check-label" for="cough_chronic"><input type="radio" name="cough" id="cough_chronic" value="chronic" class="form-check-input"> Chronic</label>
							</td>
						</tr>
					</table>

					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td class="labels-group">
								<label class="form-check-label" for="non_productive"><input type="radio" name="productiveCough" id="non_productive" value="Non-productive" class="form-check-input"> Non-productive</label>
								<label class="form-check-label" for="productive"><input type="radio" name="productiveCough" id="productive" value="productive" class="form-check-input"> Productive</label>
							</td>
							<td>
								<table class="table table-borderless align-middle mb-0">
									<tr>
										<td><label>Amt:</label></td>
										<td class="labels-group">
											<label class="form-check-label" for="amt_small"><input type="radio" name="amtCough" id="amt_small" value="small" class="form-check-input"> Small</label>
											<label class="form-check-label" for="amt_medium"><input type="radio" name="amtCough" id="amt_medium" value="medium" class="form-check-input"> Medium</label>
											<label class="form-check-label" for="amt_large"><input type="radio" name="amtCough" id="amt_large" value="large" class="form-check-input"> Large</label>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>

					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="hemoptysisFrequency">Hemoptysis frequency</label>
									<input type="text" name="hemoptysisFrequency" id="hemoptysisFrequency" value="" class="form-control">
								</div>
							</td>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="hemoptysisFrequencyAmount">Amount</label>
									<input type="text" name="hemoptysisFrequencyAmount" id="hemoptysisFrequencyAmount" value="" class="form-control">
								</div>
							</td>
						</tr>
					</table>

					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td class="labels-group">
								<label class="form-check-label" for="hemoptysis_frequency_able"><input type="radio" name="coughAU" id="hemoptysis_frequency_able" value="able" class="form-check-input"> Able</label>
								<label class="form-check-label" for="hemoptysis_frequency_unable"><input type="radio" name="coughAU" id="hemoptysis_frequency_unable" value="unable" class="form-check-input"> Unable to cough up secretions</label>
							</td>
							<td class="labels-group">
								<label>Suction:</label>
								<label class="form-check-label" for="hemoptysis_frequency_yes"><input type="radio" name="suction" id="hemoptysis_frequency_yes" value="yes" class="form-check-input"> Yes</label>
								<label class="form-check-label" for="hemoptysis_frequency_no"><input type="radio" name="suction" id="hemoptysis_frequency_no" value="no" class="form-check-input"> No</label>
							</td>
						</tr>
					</table>

					<h4 class="mb-0 mt-3">Respiratory Status</h4>
					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td class="labels-group">
								<label class="form-check-label" for="accessory_muscles_used"><input type="radio" name="respiratoryStatus" id="accessory_muscles_used" value="muscles used" class="form-check-input"> Accessory muscles used</label>
								<label class="form-check-label" for="orthopnea"><input type="radio" name="respiratoryStatus" id="orthopnea" value="orthopnea" class="form-check-input"> Orthopnea</label>
							</td>
							<td></td>
						</tr>
					</table>

					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td style="max-width: 45px;"><label>Dyspnea:</label></td>
							<td class="labels-group">
								<label class="form-check-label" for="dyspnea_at_rest"><input type="radio" name="dyspnea" id="dyspnea" value="rest" class="form-check-input"> At rest</label>
								<label class="form-check-label" for="dyspnea_with_exertion"><input type="radio" name="dyspnea" id="dyspnea_with_exertion" value="exertion" class="form-check-input"> With exertion/activity</label>
							</td>
						</tr>
					</table>

					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td><label>Stridor/retractions</label></td>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="stridorq">O<sub>2</sub></label>
									<input style="max-width: 120px;" type="text" name="stridorq" id="stridorq" value="" class="form-control">
									<label class="input-group-text" for="stridor_1">LPM</label>
								</div>
							</td>
							<td class="labels-group">
								<label class="form-check-label" for="stridor_prn"><input type="radio" name="stridor1" id="" value="prn" class="form-check-input"> PRN</label>
								<label class="form-check-label" for="stridor_continuous"><input type="radio" name="stridor1" id="stridor_continuous" value="continuous" class="form-check-input"> Continuous</label>
							</td>
						</tr>
					</table>

					<table class="table table-borderless align-middle mb-0">
						<div class="input-group">
							<label class="input-group-text" for="saturation">O<sub>2</sub>&nbsp;saturation</label>
							<input style="max-width: 150px;" type="text" name="saturation" id="saturation" value="" class="form-control">
							<label class="input-group-text" for="saturation_1">%</label>
						</div>
					</table>

					<h4 class="mb-0 mt-3">Respiratory Status</h4>
					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td class="labels-group">
								<label class="form-check-label" for="RespiratoryStatus_denies"><input type="radio" name="respiratoryStatus" id="denies" value="denies" class="form-check-input"> Denies</label>
								<label class="form-check-label" for="respiratoryStatus_anginal"><input type="radio" name="respiratoryStatus" id="anginal" value="anginal" class="form-check-input"> Anginal</label>
								<label class="form-check-label" for="respiratoryStatus_postural"><input type="radio" name="respiratoryStatus" id="postural" value="postural" class="form-check-input"> Postural</label>
								<label class="form-check-label" for="respiratoryStatus_localized"><input type="radio" name="respiratoryStatus" id="localized" value="localized" class="form-check-input"> Localized</label>
							</td>
						</tr>
					</table>

					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td class="labels-group">
								<label class="form-check-label" for="respiratoryStatusSubsternal"><input type="checkbox" name="substernal" id="substernal" value="1" class="form-check-input"> Substernal</label>
								<label class="form-check-label" for="RespiratoryStatus_radiating"><input type="checkbox" name="radiating" id="radiating" value="1" class="form-check-input"> Radiating</label>
								<label class="form-check-label" for="RespiratoryStatus_dull"><input type="checkbox" name="dull" id="dull" value="1" class="form-check-input"> Dull</label>
								<label class="form-check-label" for="RespiratoryStatus_aching"><input type="checkbox" name="aching" id="" value="1" class="form-check-input"> Aching</label>
								<label class="form-check-label" for="RespiratoryStatus_sharp"><input type="checkbox" name="sharp" id="RespiratoryStatus_sharp" value="1" class="form-check-input"> Sharp/stabbing</label>
							</td>
						</tr>
					</table>

					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td>
								<label class="form-check-label" for="viselike"><input type="checkbox" name="viselike" id="viselike" value="1" class="form-check-input"> Viselike</label>
							</td>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="viselike_other">Other:</label>
									<input type="text" name="viselikeOther" id="viselikeOther" value=""  class="form-control">
								</div>
							</td>
						</tr>
					</table>

					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td><label>Associated with:</label></td>
							<td class="labels-group">
								<label class="form-check-label" for="shortness_of_breath"><input type="checkbox" name="shortnessOfBreathh" id="shortnessOfBreathh" value="shortness of breath"  class="form-check-input"> Shortness of breath</label>
								<label class="form-check-label" for="activity"><input type="checkbox" name="activity" id="activity" value="activity"  class="form-check-input"> Activity</label>
								<label class="form-check-label" for="rest"><input type="checkbox" name="rest" id="rest" value="rest"  class="form-check-input"> Rest</label>
							</td>
						</tr>
					</table>

					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="">Frequency/duration</label>
									<input type="text" name="duration" id="" value=""  class="form-control">
								</div>
							</td>
						</tr>
					</table>

					<h4 class="mb-0 mt-3">Heart Sounds</h4>
					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td class="labels-group">
								<label class="form-check-label" for="heart_sounds_normal"><input type="radio" name="heartSounds" id="heart_sounds_normal" value="normal" class="form-check-input"> Normal</label>
								<label class="form-check-label" for="heart_sounds_rgular"><input type="radio" name="heartSounds" id="heart_sounds_rgular" value="regular" class="form-check-input"> Regular</label>
								<label class="form-check-label" for="heart_sounds_inrregular"><input type="radio" name="heartSounds" id="heart_sounds_inrregular" value="irregular" class="form-check-input"> Irregular</label>
								<label class="form-check-label" for="heart_sounds_murmur"><input type="radio" name="heartSounds" id="heart_sounds_murmur" value="murmur" class="form-check-input"> Murmur</label>
							</td>
						</tr>
					</table>

					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="abnormal">Abnormal (explain)</label>
									<input type="text" name="abnormal" id="abnormal" value="" class="form-control">
								</div>
							</td>
						</tr>
					</table>

					<h4 class="mb-0 mt-3">Other</h4>
					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td class="labels-group">
								<label class="form-check-label" for="other_fatigued"><input type="checkbox" name="fatigued" id="fatigued" value="fatigued" class="form-check-input"> Fatigued</label>
								<label class="form-check-label" for="other_edema"><input type="checkbox" name="edema" id="edema" value="edema" class="form-check-input"> Edema</label>
							</td>
							<td>
								<table class="table table-borderless align-middle mb-0">
									<tr>
										<td><label class="form-check-label" for="">Pedal:</label></td>
										<td>
											<div class="row row-flex g-2">
												<div class="col">
													<div class="input-group">
														<label class="input-group-text" for="pedal_right">Right</label>
														<input style="max-width: 80px;" type="text" name="pedalRight" id="pedal_right"  class="form-control">
													</div>
												</div>
												<div class="col">
													<div class="input-group">
														<label class="input-group-text" for="pedal_left">Left			</label>
														<input style="max-width: 80px;" type="text" name="pedalLeft" id="pedal_left" class="form-control">
													</div>
												</div>
											</div>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>

					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td style="max-width: 40px;"><label>Pitting:</label></td>
							<td class="labels-group">
								<label class="form-check-label" for="pitting_plus_1"><input type="radio" name="pitting" id="pitting_plus_1" value="1" class="form-check-input"> +1</label>
								<label class="form-check-label" for="pitting_plus_2"><input type="radio" name="pitting" id="pitting_plus_2" value="2" class="form-check-input"> +2</label>
								<label class="form-check-label" for="pitting_plus_3"><input type="radio" name="pitting" id="pitting_plus_3" value="3" class="form-check-input"> +3</label>
								<label class="form-check-label" for="pitting_plus_4"><input type="radio" name="pitting" id="pitting_plus_4" value="4" class="form-check-input"> +4</label>
							</td>
						</tr>
					</table>

					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td>
								<div class="input-group">
									<label class="input-group-text">Non-pitting site:</label>
									<input type="text" id="" name="nonPittingSite" class="form-control">
								</div>
							</td>
							<td>
								<label class="form-check-label" for="cramps_claudication"><input type="checkbox" name="cramps" id="cramps" value="1" class="form-check-input"> Cramps/claudication</label>
							</td>
						</tr>
					</table>

					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td>
								<label class="form-check-label" for="">Capillary refill:</label>
							</td>
							<td class="labels-group">
								<label class="form-check-label" for="capillary_greater"><input type="radio" name="capillaryRefill" id="capillary_greater" value="greater 3" class="form-check-input"> Greater than 3 seconds</label>
								<label class="form-check-label" for="capillary_less"><input type="radio" name="capillaryRefill" id="capillary_less" value="less 3" class="form-check-input"> Less than 3 seconds</label>
							</td>
						</tr>
					</table>

					<h3 class="bg-dark-subtle text-center p-2 nm-3 mt-3 mb-3">NEUROMUSCULAR</h3>
					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td>
								<label class="form-check-label" for="">Alert/oriented to person/place/time</label>
							</td>
						</tr>
						<tr>
							<td class="labels-group">
								<label class="form-check-label" for="disoriented"><input type="radio" name="alert" id="" value="disoriented" class="form-check-input"> Disoriented</label>
								<label class="form-check-label" for="syncope"><input type="radio" name="alert" id="syncope" value="syncope" class="form-check-input"> Syncope</label>
								<label class="form-check-label" for="headache"><input type="radio" name="alert" id="" value="headache" class="form-check-input"> Headache</label>
							</td>
						</tr>
					</table>

					<h4 class="mb-0 mt-3">Grasp</h4>
					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td class="labels-group">
								<label class="form-check-label">Right:</label>
								<label class="form-check-label" for="right-equal"><input type="radio" name="rightGrasp" id="right-equal" value="equal" class="form-check-input"> Equal</label>
								<label class="form-check-label" for="right-unequal"><input type="radio" name="rightGrasp" id="right-unequal" value="unequal" class="form-check-input"> Unequal</label>
							</td>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="right-other">Other</label>
									<input type="text" name="rightOther" id="right-other" value="" class="form-control">
								</div>
							</td>
						</tr>

						<tr>
							<td class="labels-group">
								<label>Left:</label>
								<label class="form-check-label" for="left-equal"><input type="radio" name="leftGrasp" id="left-equal" value="equal" class="form-check-input"> Equal</label>
								<label class="form-check-label" for="left-unequal"><input type="radio" name="leftGrasp" id="" value="unequal" class="form-check-input"> Unequal</label>
							</td>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="left_other">Other</label>
									<input type="text" name="leftOther" id="left_other" value="" class="form-control">
								</div>
							</td>
						</tr>
					</table>

					<h4 class="mb-0 mt-3">Pupils</h4>
					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td class="labels-group">
								<label>PERRLA:</label>
								<label class="form-check-label" for="perral_equal"><input type="radio" name="pupils" id="perral_equal" value="equal" class="form-check-input"> Equal</label>
								<label class="form-check-label" for="perral_unequal"><input type="radio" name="pupils" id="perral_unequal" value="unequal" class="form-check-input"> Unequal</label>
							</td>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="other_perral">Other</label>
									<input type="text" name="otherPerral" id="other_perral" class="form-control">
								</div>
							</td>
						</tr>
					</table>

					<h4 class="mb-0 mt-3">Impairment</h4>
					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td class="labels-group">
								<label class="form-check-label" for="impairment_speech"><input type="radio" name="impairment" id="impairment_speech" value="speech" class="form-check-input"> Speech</label>
								<label class="form-check-label" for="impairment_hearing"><input type="radio" name="impairment" id="impairment_hearing" value="hearing" class="form-check-input"> Hearing</label>
								<label class="form-check-label" for="impairment_visual"><input type="radio" name="impairment" id="impairment_visual" value="visual" class="form-check-input"> Visual</label>
							</td>
						</tr>
					</table>

					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td class="labels-group">
								<label class="form-check-label" for="impairment_decreased_sensitivity"><input type="radio" name="impair" id="impairment_decreased_sensitivity" value="sensitivity" class="form-check-input"> Decreased sensitivity</label>
								<label class="form-check-label" for="impairment_speech"><input type="radio" name="impair" id="impairment_tremors" value="tremors" class="form-check-input"> Tremors</label>
								<label class="form-check-label" for="impairment_numbness"><input type="radio" name="impair" id="impairment_numbness" value="numbness" class="form-check-input"> Numbness</label>
								<label class="form-check-label" for="impairment_tingling"><input type="radio" name="impair" id="impairment_tingling" value="tingling" class="form-check-input"> Tingling</label>
							</td>
						</tr>

						<tr>
							<td class="labels-group">
								<label class="form-check-label" for="impairment_vertigo"><input type="radio" name="impairmentVertigo" id="impairment_vertigo" value="vertigo" class="form-check-input"> Vertigo</label>
								<label class="form-check-label" for="impairment_ataxia"><input type="radio" name="impairmentVertigo" id="impairment_ataxia" value="ataxia" class="form-check-input"> Ataxia</label>
							</td>
						</tr>

						<tr>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="impairment_falls">Falls (explain):</label>
									<input type="text" name="impairmentFalls" id="impairment_falls"  class="form-control">
								</div>
							</td>
						</tr>

						<tr>
							<td class="labels-group">
								<label class="form-check-label" for="impairment_balance"><input type="radio" name="impairmentBal" id="impairment_balance" value="balance" class="form-check-input"> Balance WNL</label>
								<label class="form-check-label" for="impairment_unsteady"><input type="radio" name="impairmentBal" id="impairment_unsteady" value="unsteady" class="form-check-input"> Unsteady gait</label>
							</td>
						</tr>

						<tr>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="impairment_weekness">Weakness (describe)</label>
									<input type="text" name="impairmentWeekness" id="mpairment_weekness" class="form-control">
								</div>
							</td>
						</tr>

						<tr>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="change_in_adl">Change in ADL (explain)</label>
									<input type="text" name="changeInAdl" id="change_in_adl" class="form-control">
								</div>
							</td>
						</tr>
					</table>

					<h3 class="bg-dark-subtle text-center p-2 nm-3 mt-3 mb-3">GASTROINTESTINAL</h3>
					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td style="max-width: 60px;"><h4>Appetite</h4></td>
							<td class="labels-group">
								<label class="form-check-label" for="gastrointestinal_good"><input type="checkbox" name="good" id="gastrointestinal_good" value="1" class="form-check-input"> Good</label>
								<label class="form-check-label" for="gastrointestinal_fair"><input type="checkbox" name="fair" id="gastrointestinal_fair" value="1" class="form-check-input"> Fair</label>
								<label class="form-check-label" for="gastrointestinal_poor"><input type="checkbox" name="poor" id="gastrointestinal_poor" value="1" class="form-check-input"> Poor</label>
								<label class="form-check-label" for="gastrointestinal_npo"><input type="checkbox" name="npo" id="gastrointestinal_npo" value="1" class="form-check-input"> NPO</label>
							</td>
						</tr>
						<tr>
							<td class="labels-group">
								<label class="form-check-label" for=""><input type="checkbox" name="difficultySwallowing" value="1" class="form-check-input"> Difficulty swallowing</label>
							</td>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="oral_intake">Oral intake</label>
									<input type="text" name="oralIntake" id="oral_intake"  class="form-control">
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="tube_feeding">Tube feeding (specify)</label>
									<input type="text" name="tubeFeeding" id="tube_feeding" value="" class="form-control">
								</div>
							</td>
							<td class="labels-group">
								<label class="form-check-label" for="tube_feeding_cont"><input type="radio" name="tube" id="tube_feeding_cont" value="cont" class="form-check-input"> Cont.</label>
								<label class="form-check-label" for="tube_feeding_intermittent"><input type="radio" name="tube" id="tube_feeding_intermittent" value="intermittent" class="form-check-input"> Intermittent</label>
							</td>
						</tr>
					</table>

					<h4 class="mb-0 mt-3">Bowel Sounds</h4>
					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td colspan="2">
								<label class="form-check-label" for="bowel_sounds_active"><input type="radio" name="bowelSounds" id="bowel_sounds_active" value="active" class="form-check-input"> Active</label>
								<label class="form-check-label" for="bowel_sounds_absent"><input type="radio" name="bowelSounds" id="bowel_sounds_absent" value="absent" class="form-check-input"> Absent</label>
								<label class="form-check-label" for="bowel_sounds_hypoactive"><input type="radio" name="bowelSounds" id="bowel_sounds_hypoactive" value="hypoactive" class="form-check-input"> Hypoactive</label>
								<label class="form-check-label" for="bowel_sounds_hyperactive"><input type="radio" name="bowelSounds" id="bowel_sounds_hyperactive" value="hyperactive" class="form-check-input"> Hyperactive</label>
							</td>
						</tr>
						<tr>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="quadrants_x">x</label>
									<input style="max-width: 80px;" type="text" name="quadrantsXquadrants" id="quadrants_x" class="form-control">
									<label class="input-group-text">quadrants</label>
								</div>
							</td>
							<td class="labels-group">
								<label>Abdominal:</label>
								<label class="form-check-label" for="abdominal_pain"><input type="radio" name="abdominal" id="abdominal_pain" value="pain" class="form-check-input"> pain</label>
								<label class="form-check-label" for="abdominal_distention"><input type="radio" name="abdominal" id="" value="distention" class="form-check-input"> distention</label>
								<label class="form-check-label" for="abdominal_flatulence"><input type="radio" name="abdominal" id="" value="flatulence" class="form-check-input"> flatulence</label>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<div class="input-group">
									<label class="input-group-text" for="last_bm">Last BM</label>
									<input style="max-width: 200px;" type="text" name="lastBm" id="last_bm" value="" class="form-control">
								</div>
							</td>
						</tr>
						<tr>
							<td colspan="2" class="labels-group">
								<label class="form-check-label" for="last_bm_incontience"><input type="checkbox" name="incontience" id="last_bm_incontience" value="1" class="form-check-input"> Incontinence</label>
								<label class="form-check-label" for="last_bm_diarrhea"><input type="checkbox" name="diarrhea" id="last_bm_diarrhea" value="1" class="form-check-input"> Diarrhea</label>
								<label class="form-check-label" for="last_bm_constipation"><input type="checkbox" name="constipation" id="last_bm_constipation" value="1" class="form-check-input"> Constipation</label>
								<label class="form-check-label" for="last_bm_impaction"><input type="checkbox" name="impaction" id="last_bm_impaction" value="1" class="form-check-input"> Impaction</label>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<div class="input-group">
									<label class="input-group-text" for="enema_administered">Enema administered (results)</label>
									<input style="max-width: 200px;" type="text" name="administered" id="administered" value="" class="form-control">
								</div>
							</td>
						</tr>
						<tr>
							<td><label>Patient tolerated procedure well</label></td>
							<td class="labels-group">
								<label class="form-check-label" for="patient_tolerated_yes"><input type="radio" name="tolerated" id="patient_tolerated_yes" value="yes" class="form-check-input"> Yes</label>
								<label class="form-check-label" for="patient_tolerated_no"><input type="radio" name="tolerated" id="patient_tolerated_no" value="no" class="form-check-input"> No</label>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<div class="input-group">
									<label class="input-group-text" for="patient_tolerated_other">Other:</label>
									<input style="max-width: 200px;" type="text" name="toleratedOther" id="tolerated_other" value="" class="form-control">
								</div>
							</td>
						</tr>
					</table>

				</div>

				<div class="col-lg-6">
					<h3 class="bg-dark-subtle text-center p-2 nm-3">CARDIOPULMONARY</h3>
					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="urine_color">Urine color:</label>
									<input type="text" name="urineColor" id="urine_color" value="" class="form-control">
								</div>
							</td>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="urine_odor">Odor:</label>
									<input type="text" name="urineOdor" id="urine_odor" value="" class="form-control">
								</div>
							</td>
							<td class="labels-group">
								<label class="form-check-label" for="urineBurning"><input type="checkbox" name="urineBurning" id="urineBurning" value="1"  class="form-check-input"> Burning</label>
								<label class="form-check-label" for="cardiopulmonary_urine_hesitancy"><input type="checkbox" name="urineHesitancy" id="cardiopulmonary_urine_hesitancy" value="1"  class="form-check-input"> Hesitancy</label>
							</td>
						</tr>
						<tr>
							<td class="labels-group" colspan="2">
								<label class="form-check-label" for="cardiopulmonary_urine_nocturia"><input type="checkbox" name="nocturia" id="nocturia" value="1"  class="form-check-input"> Nocturia</label>
								<label class="form-check-label" for="cardiopulmonary_urine_oliguria"><input type="checkbox" name="oliguria" id="oliguria" value="1"  class="form-check-input"> Oliguria/anuria</label>
								<label class="form-check-label" for="cardiopulmonary_urine_retention"><input type="checkbox" name="retention" id="retention" value="1"  class="form-check-input"> Retention</label>
							</td>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="incontinence_occurs">Incontinence occurs</label>
									<input type="text" name="incontinenceOccurs" id="incontinence_occurs"   class="form-control">
								</div>
							</td>
						</tr>
					</table> 

					<h4 class="mb-0 mt-3">Urinary Catheter</h4>
					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="cardiopulmonary_type">Type (specify)</label>
									<input type="text" name="cardiopulmonaryType" id="cardiopulmonary_type" class="form-control">
								</div>
							</td>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="cardiopulmonary_french">French</label>
									<input type="text" name="french" id="french" class="form-control">
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="Bulbinflated">Bulb inflated</label>
									<input type="text" name="bulbinflated" id="Bulbinflated"  class="form-control">
									<label class="input-group-text">mL sterile water</label>
								</div>
							</td>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="date_change">Date changed</label>
									<input type="date" name="dateChange" id="date_change"   class="form-control">
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="cardiopulmonary_irrigated">Irrigated with (specify)</label>
									<input type="text" name="irrigated" id="cardiopulmonary_irrigated"  class="form-control">
									<label class="input-group-text">amt</label>
								</div>
							</td>
							<td>
								<div class="input-group">
									<input type="text" name="lm" id="lm"   class="form-control">
									<label class="input-group-text" for="lm">mL</label>
								</div>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<div class="input-group">
									<label class="input-group-text" for="lm_other">Other:</label>
									<input type="text" name="lmOther" id="lm_other" value=""  class="form-control">
								</div>
							</td>
						</tr>
					</table>

					<h3 class="bg-dark-subtle text-center p-2 nm-3 mt-3 mb-3">ENDOCRINE</h3>
					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td colspan="2">
								<div class="input-group">
									<label class="input-group-text" for="endocrine_blood">Blood sugar range</label>
									<input style="max-width: 200px;" type="text" name="endocrineBlood" id="endocrine_blood" value=""  class="form-control">
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<label for="">Reported by:</label>
							</td>
							<td class="labels-group">
								<label class="form-check-label" for="reported_by_patient"><input type="checkbox" name="patient" id="reported_by_patient" value="1"  class="form-check-input"> Patient</label>
								<label class="form-check-label" for="reported_by_caregiver"><input type="checkbox" name="caregiver" id="" value="1"  class="form-check-input"> Family/Caregiver</label>
								<label class="form-check-label" for="reported_by_nurse"><input type="checkbox" name="nurse" id="" value="1"  class="form-check-input"> Nurse</label>
								<div class="d-inline-block">
									<div class="input-group">
										<label class="input-group-text m-0" for="reported_by_other">Other</label>
										<input style="max-width: 110px;" type="text" name="reportedByOther" id="reported_by_other"  class="form-control">
									</div>
								</div>
							</td>
						</tr>
					</table>
					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="blood_sugar_this_visit">Blood sugar this visit:</label>
									<input type="text" name="bloodSugarThisVisit" id="blood_sugar_this_visit" class="form-control">
								</div>
							</td>
							<td></td>
							<td>
								<div class="input-group">
									<label class="input-group-text" for="check_by_nurse">Check by:</label>
									<input type="text" name="checkByNurse" id="check_by_nurse"  class="form-control">
								</div>
							</td>
						</tr>
					</table>
					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td>
								<label for="">Hyperglycemia:</label>
							</td>
							<td></td>
							<td class="labels-group">
								<label class="form-check-label" for="glycosuria"><input type="checkbox" name="glycosuria" id="Hyperglycemia_glycosuria" value="1"  class="form-check-input"> Glycosuria</label>
								<label class="form-check-label" for="polyuria"><input type="checkbox" name="polyuria" id="polyuria" value="1"  class="form-check-input"> Polyuria</label>
								<label class="form-check-label" for="polydipsia"><input type="checkbox" name="polydipsia" id="polydipsia" value="1"  class="form-check-input"> Polydipsia</label>
							</td>
						</tr>
						<tr>
							<td>
								<label for="">Hypoglycemia:</label>
							</td>
							<td></td>
							<td class="labels-group">
								<label class="form-check-label" for="Hypoglycemia_sweats"><input type="checkbox" name="sweats" id="" value="1"  class="form-check-input"> Sweats</label>
								<label class="form-check-label" for="Hypoglycemia_polyphagia"><input type="checkbox" name="polyphagia" id="polyphagia" value="1"  class="form-check-input"> Polyphagia</label>
								<label class="form-check-label" for="Hypoglycemia_weak"><input type="checkbox" name="weak" id="weak" value="1"  class="form-check-input"> Weak</label>
								<label class="form-check-label" for="Hypoglycemia_faint"><input type="checkbox" name="faint" id="faint" value="1"  class="form-check-input"> Faint</label>
								<label class="form-check-label" for="Hypoglycemia_stupor"><input type="checkbox" name="stupor" id="stupor" value="1"  class="form-check-input"> Stupor</label>
							</td>
						</tr>
						<tr>
							<td>
								<label for="">Monitored by:</label>
							</td>
							<td></td>
							<td class="labels-group mt-2">
								<label class="form-check-label" for="Monitored_by_Patient"><input type="checkbox" name="byPatient" id="" value="1"  class="form-check-input"> Patient</label>
								<label class="form-check-label" for="Monitored_by_caregiver"><input type="checkbox" name="bycaregiver" id="" value="1"  class="form-check-input"> Patient</label>
								<label class="form-check-label" for="Monitored_by_Nurse"><input type="checkbox" name="byNurse" id="" value="1"  class="form-check-input"> Nurse</label>
								<div class="d-inline-block">
									<div class="input-group mt-3">
										<label class="input-group-text m-0" for="Monitored_by_other">Other</label>
										<input style="max-width: 110px;" type="text" name="byOther" id="Monitored_by_other" class="form-control">
									</div>
								</div>
							</td>
						</tr>
					</table>

					<h3 class="bg-dark-subtle text-center mt-3">MEDICATIONS</h3>
					<table class="table table-borderless align-middle mb-0">
						<tr>
							<td class="labels-group">
								<label for="new_at_rest">New or changed since last visit</label>
								<label class="form-check-label mt-1" for="new_at_update">(Update Medication Profile)</label>
							</td>
						</tr>
					</table>
					<!------------------Update Meication Profile Starts------------------------------->
					<div class="px-[15px]" id="tabs-medication">
						<div class="flex items-center gap-[15px] mt-[5px] overflow-x-scroll">
							<button
							class="add_new_medication_continue btn btn-success text-white flex-shrink-0 !bg-[#4133BF]">
							Add Medication
						</button>
					</div>
				<div class="modal fade !max-w-[768px] !w-[768px]" id="continueModal" tabindex="-1" role="dialog" aria-labelledby="continueModal" aria-hidden="true">
						<div class="overlay fixed top-0 left-0 w-full h-full"></div>
						<div class="container">

						</div>
					</div>
				</div>
				<!------------------Update Meication Profile Ends------------------------------->




				<h4 class="mb-0 mt-3">Instructed on:</h4>
				<table class="table table-borderless align-middle mb-0">
					<tr>
						<td>
							<label class="form-check-label mt-2" for="Instructed_on_allergic"><input type="checkbox" name="onAllergic" id="Instructed_on_allergic" value="1" class="form-check-input"> S/S allergic reaction</label>
						</td>
						<td>
							<label class="form-check-label mt-2" for="onMedication"><input type="checkbox" name="onMedication" id="onMedication" value="1" class="form-check-input"> Medication(s) names</label>
						</td>
					</tr>

					<tr>
						<td>
							<label class="form-check-label mt-2" for="onDrugInteraction"><input type="checkbox" name="onDrugInteraction" id="onDrugInteraction" value="1" class="form-check-input"> Drug/drug interactions</label>
						</td>
						<td>
							<label class="form-check-label mt-2" for="onFoodInteractions"><input type="checkbox" name="onFoodInteractions" id="onFoodInteractions" value="1" class="form-check-input"> Drug/food interactions</label>
						</td>
					</tr>

					<tr>
						<td>
							<div class="input-group">
								<label class="input-group-text m-0" for="">Rx refill by:</label>
								<input type="text" name="rxRfillBy" class="form-control">
							</div>
						</td>
						<td>
							<label class="form-check-label mt-2" for="Instructed_on_expiration_dates"><input type="checkbox" name="expirationDates" id="Instructed_on_expiration_dates" value="1" class="form-check-input"> Expiration dates</label>
						</td>
					</tr>

					<tr>
						<td>
							<label class="form-check-label mt-2" for="Instructed_on_contraindications"><input type="checkbox" name="onContraindications" id="Instructed_on_contraindications" value="1" class="form-check-input"> S/E contraindications</label>
						</td>
						<td>
							<div class="input-group">
								<label class="input-group-text m-0" for="pill_count">Pill count (if applicable)</label>
								<input type="text" name="onPillCount" id="pill_count" value="" class="form-control">
							</div>
						</td>
					</tr>

					<tr>
						<td>
							<label class="form-check-label mt-2" for="pill_ample_supply"><input type="checkbox" name="ampleSupply" id="ample_supply" value="1" class="form-check-input"> Ample supply</label>
						</td>
						<td>
							<label class="form-check-label mt-2" for="Proper_disposal_of_sharps"><input type="checkbox" name="disposalOfSharps" id="disposal_of_sharps" value="1" class="form-check-input"> Proper disposal of sharps</label>
						</td>
					</tr>

					<tr>
						<td>
							<div class="input-group">
								<label class="input-group-text m-0" for="">Other:</label>
								<input type="text" name="disposalOfSharpsOther" class="form-control">
							</div>
						</td>
						<td>
							<label class="form-check-label mt-2" for="Duration_of_therapy"><input type="checkbox" name="durationOfTherapy" id="Duration_of_therapy" value="1" class="form-check-input"> Duration of therapy</label>
						</td>
					</tr>

					<tr>
						<td colspan="2">
							<div class="input-group">
								<label class="input-group-text m-0" for="Missed_doses">Missed doses/what to do:</label>
								<input type="text" name="missedDoses" id="Missed_doses" class="form-control">
							</div>
						</td>
					</tr>
				</table>

				<table class="table table-borderless align-middle mb-0">
					<tr>
						<td><label for="">Administered by:</label></td>
						<td class="labels-group">
							<label class="form-check-label" for="administered_by_patient_1"><input type="checkbox" name="administeredPatient1" id="administered_by_patient_1" value="1" class="form-check-input"> Patient</label>
							<label class="form-check-label" for="administered_by_caregiver_1"><input type="checkbox" name="byCaregiver2" id="administered_by_caregiver_1" value="1" class="form-check-input"> Family/Caregiver</label>
							<label class="form-check-label" for="administered_by_nurse_1"><input type="checkbox" name="byNurse1" id="administered_by_nurse_1" value="1" class="form-check-input"> Nurse</label>

							<div class="d-inline-block mt-2">
								<div class="input-group">
									<label class="input-group-text m-0" for="administered_by_other_1">Other</label>
									<input type="text" name="byOther1" id="administered_by_other_1" class="form-control">
								</div>
							</div>
						</td>
					</tr>

					<tr>
						<td colspan="2">
							<div class="input-group">
								<label class="input-group-text m-0" for="Medication_this_visit">Medication administered this visit:</label>
								<input type="text"  name="medicationThisVisit" id="Medication_this_visit" class="form-control">
							</div>
						</td>
					</tr>

					<tr>
						<td><label for="">Type of line:</label></td>
						<td class="labels-group">
							<label class="form-check-label" for="typeOfLine"><input type="radio" name="typeOfLine" id="typeOfLine" value="peripheral" class="form-check-input"> Peripheral</label>
							<label class="form-check-label" for="Medication_visit_picc"><input type="radio" name="typeOfLine" id="Medication_administered_this_visit_picc" value="picc" class="form-check-input"> PICC</label>
							<div class="d-inline-block mt-md-2">
								<div class="input-group">
									<label class="input-group-text m-0" for="central">Central (type)</label>
									<input style="max-width: 120px;" type="text" name="central" id="central" class="form-control">
								</div>
							</div>
						</td>
					</tr>

					<tr>
						<td colspan="2">
							<div class="input-group">
								<label class="input-group-text" for="Implanted_port_location">Implanted port Location (specify)</label>
								<input type="text" name="implantedPortLocation" id="Implanted_port_location" class="form-control">
							</div>
						</td>
					</tr>

					<tr>
						<td>
							<div class="input-group">
								<label class="input-group-text" for="catheter_length">Catheter length</label>
								<input type="text" name="catheterLength" id="catheter_length" value="" class="form-control">
								<label class="input-group-text">cm</label>
							</div>
						</td>
						<td>
							<label class="form-check-label" for="no_evidence_of_infection"><input type="checkbox" name="evidenceOfInfection" id="evidence_of_infection" value="1" class="form-check-input"> No evidence of infection</label>
						</td>
					</tr>

					<tr>
						<td colspan="2">
							<div class="input-group">
								<label class="input-group-text" for="number_of_lumens">Number of Lumens</label>
								<input style="max-width: 200px;" type="number" name="numberOfLumens" id="number_of_lumens" class="form-control">
							</div>
						</td>
					</tr>

					<tr>
						<td colspan="2">
							<div class="input-group">
								<label class="input-group-text" for="dressing_change">Dressing change</label>
								<input type="number" name="dressingChange" id="dressing_change" value="" class="form-control">
							</div>
						</td>
					</tr>

					<tr>
						<td colspan="2" class="labels-group">
							<label for="">Performed by:</label>
							<label class="form-check-label" for="Performed_bypatient"><input type="checkbox" name="performedbypatient" id="Performed_bypatient" value="1" class="form-check-input"> Patient</label>
							<label class="form-check-label" for="Performed_bycaregiver"><input type="checkbox" name="performedbycaregiver" id="Performed_bycaregiver" value="1" class="form-check-input"> Family/Caregiver</label>
							<label class="form-check-label" for="Performed_bynurse"><input type="checkbox" name="performedbynurse" id="Performed_bynurse" value="1" class="form-check-input"> Nurse</label>

							<div class="input-group mt-2">
								<label class="input-group-text m-0" for="Performed_bynurse_other">Other:</label>
								<input type="number" name="performedbynurseother" id="Performed_bynurse_other" value="" class="form-control">
							</div>
						</td>
					</tr>

					<tr>
						<td colspan="2" class="labels-group">
							<label for="">Cap change performed by:</label>
							<label class="form-check-label" for="capperformedbypatient"><input type="checkbox" name="capperformedbypatient" id="capperformedbypatient" value="1" class="form-check-input"> Patient</label>
							<label class="form-check-label" for="capperformedbycaregiver"><input type="checkbox" name="capperformedbycaregiver" id="capperformedbycaregiver" value="1" class="form-check-input"> Family/Caregiver</label>
							<label class="form-check-label" for="Cap_change_performed_by_nurse"><input type="checkbox" name="capperformedbynurse" id="Cap_change_performed_by_nurse" value="1" class="form-check-input"> Nurse</label>

							<div class="input-group mt-2">
								<label class="input-group-text m-0" for="capchangeperformedbyother">Other:</label>
								<input type="number" name="capchangeperformedbyother" id="Cap_performed_byother" class="form-control">
							</div>
						</td>
					</tr>

					<tr>
						<td colspan="2" class="labels-group">
							<label for="">Extension/tubing changed by:</label>
							<label class="form-check-label" for="tubing_changed_by_patient"><input type="checkbox" name="tubingByPatient" id="ubing_by_patient" value="1" class="form-check-input"> Patient</label>
							<label class="form-check-label" for="tubing_changed_by_caregiver"><input type="checkbox" name="tubingByCaregiver" id="tubing_by_caregiver" value="1" class="yform-check-input"> Family/Caregiver</label>
							<label class="form-check-label" for="tubingByNurse"><input type="checkbox" name="tubingByNurse" id="tubingByNurse" value="1" class="form-check-input"> Nurse</label>

							<div class="input-group mt-2">
								<label class="input-group-text m-0" for="tubing_changed_by_other">Other:</label>
								<input type="number" name="tubingchangedByOther" id="tubing_changed_by_other" value="" class="form-control">
							</div>
						</td>
					</tr>

					<tr>
						<td class="labels-group" colspan="2">
							<label class="form-check-label" for="flush">
								<input type="checkbox" name="flush" id="flush" value="1" class="form-check-input"> Flush</label>
								<div class="d-inline-block">
									<div class="input-group">
										<label class="input-group-text m-0" for="Saline">Saline</label>
										<input style="max-width: 110px;" type="text" id="saline" name="saline" class="form-control">
										<label class="input-group-text m-0" for="Saline">mL</label>
									</div>
								</div>

								<div class="d-inline-block mt-2 me-2">
									<div class="input-group">
										<label class="input-group-text m-0" for="Heparin">Heparin</label>
										<input style="max-width: 110px;" type="text" name="heparin" value="" class="form-control">
										<label class="input-group-text m-0" for="Heparin">unit/mL</label>
									</div>
								</div>
								<div class="d-inline-block mt-2">
									<div class="input-group">
										<input style="max-width: 110px;" type="text" name="ml1" id="ml_1" value="" class="form-control">
										<label class="input-group-text m-0" for="ml_1">mL</label>
									</div>
								</div>
							</td>
						</tr>

						<tr>
							<td colspan="2" class="labels-group">
								<label class="form-check-label" for="ml_instructed"><input type="checkbox" name="mlInstructed" id="mlInstructed" value="1" class="form-check-input"> Instructed</label>
								<label class="form-check-label" for="ml_patient"><input type="checkbox" name="mlPatient" id="ml_patient" value="1" class="form-check-input"> Patient</label>
								<label class="form-check-label" for="ml_caregiver"><input type="checkbox" name="caregiverInfusion" id="" value="1" class="form-check-input"> Family/Caregiver on infusion therapy</label>
							</td>
						</tr>

						<tr>
							<td colspan="2" class="labels-group">
								<label class="form-check-label" for="management_of_infusion_patient">
									<input type="checkbox" name="managementInfusionPatient" id="management_of_infusion_patient" value="1" class="form-check-input"> Patient</label>
									<label class="form-check-label" for="management_of_infusion_caregiver">
										<input type="checkbox" name="managementInfusionCaregiver" id="management_of_infusion_caregiver" value="1" class="form-check-input"> Family/Caregiver</label>
										<label class="form-check-label" for="management_of_infusion_demonstrates">
											<input type="checkbox" name="managementInfusionDemonstrates" id="management_of_infusion_demonstrates" value="1" class="form-check-input"> Demonstrates</label>
											<label class="form-check-label" for="management_of_infusion_verbalizes_proper">
												<input type="checkbox" name="managementInfusionVerbalizesProper" id="management_of_infusion_verbalizes_proper" value="1" class="form-check-input"> Verbalizes proper
											management of infusion(s)</label>
										</td>
									</tr>

									<tr>
										<td colspan="2">
											<div class="input-group">
												<label class="input-group-text" for="Comments">Comments:</label>
												<textarea class="form-control" name="comments" id="Comments" cols="100" rows="4"></textarea>
											</div>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<div class="border border-top-1 mt-3 mb-1"></div>
						<div class="border border-top-1"></div>

						<div class="row row-flex mt-4 align-items-center">
							<div class="col-lg-6">
								<p>PATIENT NAME – Last, First, Middle Initial</p>
							</div>
							<div class="col-lg-6">
								<p>ID#</p>
							</div>
						</div>

						<div class="p-4">
							<button type="submit" name="next" class=" btn btn-primary btn-block active"  value="Next Page!">Save & Continue</button>
						</div>
					</div>


				</form>

			</div>
		</div>

</div><!------/page one end---->