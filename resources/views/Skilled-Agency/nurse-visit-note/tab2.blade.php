
<div class="px-[15px] bg-white {{isset($active) && $active=='final'?'active':''}}" id="teb-two">
    <div class="container-fluid">
<div class="form-holder pt-5 pb-5">
    
          {{-- <form action="{{route('skilled-agency.nurse-visit-note.index')}}" method="POST" id="nursing-visit-form">
                  @csrf 
                   <div class="">
                       <div class="border border-2 rounded bg-white vt">
                          <table class="table table-borderless m-0">
                              <tr>
                             <td class="p-0 border-lg-end-2 pb-3">
                                 <h3 class="bg-dark-subtle text-center p-2">EMOTIONAL STATUS</h3>
                            <div class="ps-1 pe-1">
                                 <table class="table table-borderless align-middle m-0 stack-padding">
                                     <tr>
                                <td class="labels-group">
                                    <label class="form-check-label" for="angry"><input type="checkbox" name="angry" id="angry" value="1"
                                    class="form-check-input"> Angry</label>
                                    <label class="form-check-label" for="agitated"><input type="checkbox" name="agitated" id="agitated" value="1"
                                    class="form-check-input"> Agitated</label>
                                    <label class="form-check-label" for="fearful"><input type="checkbox" name="fearful" id="fearful" value="1"
                                    class="form-check-input"> Fearful</label>
                                    <label class="form-check-label" for="sad" ><input type="checkbox" name="sad" id="sad" value="1"
                                    class="form-check-input"> Sad</label>
                                    <br>
                                    <label class="form-check-label mt-2" for="iscourage"><input type="checkbox" name="discourage" id="discourage" value="1"
                                    class="form-check-input"> Discouraged</label>
                                    <label class="form-check-label mt-2" for="lonely"><input type="checkbox" name="lonely" id="lonely" value="1"
                                    class="form-check-input"> Lonely</label>
                                    <br>
                                    <label class="form-check-label mt-2" for="depressed"><input type="checkbox" name="depressed" id="depressed" value="1"
                                    class="form-check-input"> Depressed</label>
                                    <label class="form-check-label mt-2" for="helpless"><input type="checkbox" name="helpless" id="helpless" value="1"
                                    class="form-check-input"> Helpless</label>
                                    <label class="form-check-label mt-2" for="forgetfull"><input type="checkbox" name="forgetfull" id="orgetfull" value="1"
                                    class="form-check-input"> Forgetful</label>
                                    <br>
                                    <label class="form-check-label mt-2"for="confused" ><input type="checkbox" name="confused" id="confused" value="1"
                                    class="form-check-input"> Confused</label>
                                    <label class="form-check-label mt-2" for="content"><input type="checkbox" name="content" id="content" value="1"
                                    class="form-check-input"> Content</label>
                                    <label class="form-check-label mt-2" for="happy"><input type="checkbox" name="happy" id="happy" value="1"
                                    class="form-check-input"> Happy</label>
                                    <br>
                                    <label class="form-check-label mt-2" for="hopeful"><input type="checkbox" name="hopeful" id="hopeful" value="1"
                                    class="form-check-input"> Hopeful</label>
                                    <label class="form-check-label mt-2" for="motivated"><input type="checkbox" name="motivated" id="motivated" value="1"
                                    class="form-check-input"> Motivated</label>
                                    <br>
                                        <div class="input-group mt-2">
                                        <label class="input-group-text m-0" for="status_other">Other:</label>
                                        <input type="text" name="statusOther" id="status_other" class="form-control">
                                        </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                <h3 class="bg-dark-subtle text-center p-2 mt-3 mb-2">SKIN</h3>
                <div class="ps-1 pe-1">
                <table class="table table-borderless align-middle m-0 stack-padding">
                <tr>
                <td class="labels-group">
                <label for="">Turgor:</label>
                <label class="form-check-label" for="turgor_good"><input type="radio" name="turgor" id="turgor_good" value="good"
                class="form-check-input"> Good</label>
                <label class="form-check-label" for="turgor_poor"><input type="radio" name="turgor" id="turgor_poor" value="poor"
                class="form-check-input"> Poor</label>
                </td>
                </tr>
                <tr>
                <td>
                <div class="row row-flex">
                <div class="col-md-6">
                <div class="input-group">
                <label class="input-group-text" for="turgor_color">Color:</label>
                <input type="text" name="turgorColor" id="turgor_color" value="" class="form-control">
                </div>
                </div>
                <div class="col-md-6">
                <div class="input-group">
                <label class="input-group-text" for="turgor_temp">Temp:</label>
                <input type="text" name="turgorTemp" id="turgor_temp" value="" class="form-control">
                </div>
                </div>
                </div>
                </td>
                </tr>
                <tr>
                <td class="labels-group">
                <label class="form-check-label" for="turgor_itch"><input type="checkbox" name="itch" id="itch" value="1"
                class="form-check-input"> Itch</label>
                <label class="form-check-label" for="turgor_rash"><input type="checkbox" name="rash" id="rash" value="1"
                class="form-check-input"> Rash</label>
                <label class="form-check-label" for="turgor_try"><input type="checkbox" name="try" id="try" value="1"
                class="form-check-input"> Dry</label>
                <label class="form-check-label" for="turgor_scaling"><input type="checkbox" name="scaling" id="scaling" value="1"
                class="form-check-input"> Scaling</label>
                <br>
                <label class="form-check-label mt-2" for="turgor_redness"><input type="checkbox" name="redness" id="redness" value="1"
                class="form-check-input"> Redness</label>
                <label class="form-check-label mt-2" for="turgor_ecchymosis"><input type="checkbox" name="ecchymosis" idturgor_ecchymosis value="1"
                class="form-check-input"> Ecchymosis</label>
                <label class="form-check-label mt-2" for="turgor_pallor"><input type="checkbox" name="pallor" id="turgor_pallor" value="1"
                class="form-check-input"> Pallor</label>
                <br>
                <label class="form-check-label mt-2" for="turgor_jaundice"><input type="checkbox" name="jaundice" id="turgor_jaundice" value="1"
                class="form-check-input"> Jaundice</label>
                <div class="d-inline-block mt-2">
                <div class="input-group">
                <label class="input-group-text m-0" for="turgor_other">Other (specify)</label>
                <input type="text" name="turgorOther" id="turgor_other" value="" class="form-control">
                </div>
                </div>
                </td>
                </tr>
                </table>
                 --}}
<form action="{{route('skilled-agency.saveNursing')}}" method="POST" id="nursing-visit-form2">
@csrf
<div class="border border-2 rounded bg-white">
<table class="table table-borderless m-0">
<tr>
<td class="p-0 border-lg-end-2 pb-3">
<h3 class="bg-dark-subtle text-center p-2">EMOTIONAL STATUS</h3>
<div class="ps-1 pe-1">
<table class="table table-borderless align-middle m-0 stack-padding">
<tr>
<td class="labels-group">
<label class="form-check-label" for="angry"><input type="checkbox" name="angry" id="angry" value="1"
class="form-check-input"> Angry</label>
<label class="form-check-label" for="agitated"><input type="checkbox" name="agitated" id="agitated" value="1"
class="form-check-input"> Agitated</label>
<label class="form-check-label" for="fearful"><input type="checkbox" name="fearful" id="fearful" value="1"
class="form-check-input"> Fearful</label>
<label class="form-check-label" for="sad" ><input type="checkbox" name="sad" id="sad" value="1"
class="form-check-input"> Sad</label>
<br>
<label class="form-check-label mt-2" for="iscourage"><input type="checkbox" name="discourage" id="discourage" value="1"
class="form-check-input"> Discouraged</label>
<label class="form-check-label mt-2" for="lonely"><input type="checkbox" name="lonely" id="lonely" value="1"
class="form-check-input"> Lonely</label>
<br>
<label class="form-check-label mt-2" for="depressed"><input type="checkbox" name="depressed" id="depressed" value="1"
class="form-check-input"> Depressed</label>
<label class="form-check-label mt-2" for="helpless"><input type="checkbox" name="helpless" id="helpless" value="1"
class="form-check-input"> Helpless</label>
<label class="form-check-label mt-2" for="forgetfull"><input type="checkbox" name="forgetfull" id="orgetfull" value="1"
class="form-check-input"> Forgetful</label>
<br>
<label class="form-check-label mt-2"for="confused" ><input type="checkbox" name="confused" id="confused" value="1"
class="form-check-input"> Confused</label>
<label class="form-check-label mt-2" for="content"><input type="checkbox" name="content" id="content" value="1"
class="form-check-input"> Content</label>
<label class="form-check-label mt-2" for="happy"><input type="checkbox" name="happy" id="happy" value="1"
class="form-check-input"> Happy</label>
<br>
<label class="form-check-label mt-2" for="hopeful"><input type="checkbox" name="hopeful" id="hopeful" value="1"
class="form-check-input"> Hopeful</label>
<label class="form-check-label mt-2" for="motivated"><input type="checkbox" name="motivated" id="motivated" value="1"
class="form-check-input"> Motivated</label>
<br>
<div class="input-group mt-2">
<label class="input-group-text m-0" for="status_other">Other:</label>
<input type="text" name="statusOther" id="status_other" class="form-control">
</div>
</td>
</tr>
</table>
</div>
                </div>
                </td>

                <td class="p-0 pb-3">
                <h3 class="bg-dark-subtle text-center p-2">WOUND CARE PROVIDED</h3>
                <table class="table table-borderless m-0 stack-padding">
                <tr>
                <td class="p-0">
                <div class="ps-1 pe-1">
                <table class="table table-borderless align-middle m-0">
                <tr>
                <td class="labels-group" colspan="2">
                <label for="soiled_dressing_removed">Soiled dressing:</label>
                <label class="form-check-label">
                <input type="checkbox" name="soiledDressingRemoved" id="soiled_dressing_removed" value="1" class="form-check-input"> removed</label>
                <label class="form-check-label" for="soiled_dressing_properly">
                <input type="checkbox" name="soiledDressingProperly" id="soiled_dressing_properly" value="1" class="form-check-input"> disposed of properly</label>
                </td>
                </tr>
                <tr>
                <td colspan="2" class="pt-1 pb-1">
                <div class="input-group">
                <label class="input-group-text" for="wound_cleaned">Wound cleaned (specify)</label>
                <input type="text" name="woundCleaned" id="wound_cleaned" class="form-control">
                </div>
                </td>
                </tr>
                <tr>
                <td colspan="2" class="pt-1 pb-1">
                <div class="input-group">
                <label class="input-group-text" for="wound_irrigated">Wound irrigated (specify)</label>
                <input type="text" name="woundIrrigated" id="wound_irrigated" value="" class="form-control">
                </div>
                </td>
                </tr>
                <tr>
                <td colspan="2" class="pt-1 pb-1">
                <div class="input-group">
                <label class="input-group-text" for="">Type of dressing(s) used</label>
                <input type="text" name="woundDressingType" id="wound_dressingtype" value="" class="form-control">
                </div>
                </td>
                </tr>
                <tr>
                <td colspan="2" class="pt-1 pb-1">
                <label class="me-1" for="Drainage_collection_container_emptied">Drainage collection container emptied.</label>
                <div class="d-inline-block">
                <div class="input-group">
                <label class="input-group-text" for="Drainage_volume">Volume</label>
                <input style="max-width: 100px;" type="text" name="drainageVolume" id="Drainage_volume" value=""
                class="form-control">
                </div>
                </div>
                </td>
                </tr>
                <tr>
                <td colspan="2" class="pt-1 pb-1">
                <div class="d-inline-block">
                <div class="input-group">
                <label class="input-group-text" for="vacuum_reset">Vacuum assisted closure reset
                to</label>
                <input style="max-width: 100px;" type="text" name="vacuumReset" id="vacuum_reset" value=""
                class="form-control">
                <label class="input-group-text" for="vacuum_assisted_closure_reset">mm/Hg</label>
                </div>
                </div>
                </td>
                </tr>
                <tr>
                <td style="max-width: 220px;">
                <label for="">Patient tolerated procedure well</label>
                </td>
                <td class="labels-group">
                <label class="form-check-label" for="tolerated">
                <input type="radio"
                name="tolerated" id="tolerated" value="yes" class="form-check-input"> Yes</label>
                <label class="form-check-label" for="Patient_tolerated">
                <input type="radio"
                name="tolerated" id="Patient_tolerated" value="no" class="form-check-input"> No</label>
                </td>
                </tr>
                <tr>
                <td colspan="2" class="pt-0 pb-1">
                <label class="form-check-label" for="Medicated_woundcare">
                <input type="checkbox" name="medicatedWoundcare" id="Medicated_woundcare" value="1"
                class="form-check-input"> Medicated prior to wound care</label>
                </td>
                </tr>
                <tr>
                <td colspan="2" class="labels-group pt-0">
                <label for="dressing_performed_by_patient">Wound care/dressing change performed by:</label>
                <label class="form-check-label">
                <input type="checkbox" name="dressingPerformedPatient" id="dressingByPatient" value="1"
                class="form-check-input"> Patient</label>
                <br>
                <label class="form-check-label mt-2" for="dressing_performed_by_nurse"><input type="checkbox" name="dressingByNurse" id="dressing_performed_by_nurse" value="1"
                        class="form-check-input"> Nurse</label>
                <label class="form-check-label mt-2" for="dressing_performed_by_caregiver">
                <input type="checkbox" name="dressingByVaregiver" id="dressing_performed_by_caregiver" value="1"
                class="form-check-input"> Family/Caregiver</label>
                <div class="d-inline-block mt-2">
                <div class="input-group">
                <label class="input-group-text m-0" for="dressingOther">Other:</label>
                <input style="max-width: 100px;" type="text" name="dressingOther" id="dressingOther" 
                class="form-control">
                </div>
                </div>
                </td>
                </tr>
                <tr>
                <td colspan="2" class="labels-group pt-0">
                <label class="form-check-label" for="Woundcare_patient"><input type="checkbox" name="woundcarePatient" id="Wound_care_patient" value="1"
                class="form-check-input"> Patient</label>
                <label for="Woundcare_caregiver">Family/Caregiver instructed on:</label>
                <label class="form-check-label"><input type="checkbox" name="woundcareCaregiver" id="Woundcare_caregiver" value="1"
                class="form-check-input"> Wound care</label>
                <br>
                <label class="form-check-label mt-2" for="soiled-disposal"><input type="checkbox" name="soiledDisposal" id="soiled-disposal" value="1"
                class="form-check-input"> Disposal of soiled dressing</label>
                <label class="form-check-label mt-2" for="symptoms_report_to"><input type="checkbox" name="symptomsReport" id="symptoms_report" value="1"
                class="form-check-input"> Signs & Symptoms to report</label>
                </td>
                </tr>
                <tr>
                <td colspan="2" class="labels-group pt-0">
                <label class="form-check-label" for="woundcare_performpatient">
                <input type="checkbox" name="woundcarePerformpatient" id="woundcare_performpatient" value="1" class="form-check-input"> Patient</label>
                <label>Family/Caregiver to perform:</label>
                <label class="form-check-label" for="woundcare_performcaregiver">
                <input type="checkbox" name="woundcarePerformcaregiver" id="woundcare_performcaregiver" value="1"
                class="form-check-input"> Wound care</label>
                <br>
                <label class="form-check-label mt-2" for="dressing_changeby_caregiver">
                <input type="checkbox" name="dressingChangebyCaregiver" id="dressing_changeby_caregiver" value="1"
                class="form-check-input"> Dressing change</label>
                </td>
                </tr>
                </table>
                </div>
                </td>

                <td style="max-width: 380px;">
                <div class="ps-1 pe-1">
                <table class="table table-borderless m-0">
                <label class="text-center">Denote Location / Size of Wounds / Pressure Injury /
                Measure
                Extremity Edema Bilateral</label>
                <div class="p-2"><img src="{{asset('assets/images/Denote_Location.png')}}" alt="Denote Location"></div>
                <hr>
                <div class="p-2"><img src="{{asset('assets/images/Legs.png')}}" alt="Denote Location Legs"></div>
                </table>

                <table class="table table-bordered align-middle m-0">
                <thead>
                <tr>
                <th></th>
                <th>#1</th>
                <th>#2</th>
                <th>#3</th>
                <th>#4</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>Length</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td>Width</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td>Depth</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td>Drainage</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td>Tunneling</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td>Odor</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td>Sur. Tissue</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td>Edema</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td>Stoma</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                </tbody>
                </table>
                </div>
                </td>
                </tr>    
                </table>
                </td>
                </tr>
                </table>

                <h3 class="bg-dark text-center p-2 text-white">SKILLED INTERVENTIONS/INSTRUCTIONS <small>(Select all applicable items)</small>
                </h3>
                <div class="ps-1 pe-1">
                <table class="table table-borderless m-0">
                <tr>
                <td class="border-lg-end-2">
                <table class="table table-borderless align-middle m-0">
                <tr>
                <td>
                <label class="form-check-label" for="skilledObservationAssessment">
                <input type="checkbox" name="skilledObservationAssessment" id="skilledObservationAssessment" value="1"
                class="form-check-input"> Skilled observation & assessment</label>
                </td>
                </tr>
                <tr>
                <td class="labels-group">
                <label for="">Foley:</label>
                <label class="form-check-label" for="assessment_care">
                <input type="checkbox" name="assessmentCare" id="assessment_care" value="1"
                class="form-check-input"> care</label>
                <label class="form-check-label" for="assessmentChange">
                <input type="checkbox" name="assessmentChange" id="assessmentChange" value="1"
                class="form-check-input"> change</label>
                </td>
                </tr>
                <tr>
                <td>
                <label class="form-check-label" for="Skilled_observation_assessment_urine_testing">
                <input type="checkbox" name="assessmentUrineTesting" id="assessment_urine_testing" value="1"
                class="form-check-input"> Urine testing</label>
                </td>
                </tr>
                <tr>
                <td class="labels-group">
                <label for="">Wound:</label>
                <label class="form-check-label" for="Skilled_observation_assessment_wound_care">
                <input type="checkbox" name="skilledObservationAssessmentWoundCare" id="Skilled_observation_assessment_wound_care" value="1"
                class="form-check-input"> care</label>
                <label class="form-check-label" for="assessment_wound_dressing">
                <input type="checkbox" name="assessmentWoundDressing" id="assessment_wound_dressing" value="1"
                class="form-check-input"> dressing</label>
                </td>
                </tr>
                <tr>
                <td>
                <label class="form-check-label" for="Observe signs_symptoms_of_infection" >
                <input type="checkbox" name="symptomsInfection" id="symptoms_of_infection" value="1"
                class="form-check-input"> Observe signs & symptoms of infection</label>
                </td>
                </tr>
                <tr>
                <td>
                <h1 class="form-check-label bg-dark-subtle fw-bolder text-center" for="venipucture">LAB WORK</h1>
                </td>
                </tr>
                <tr>
                <td>
                <div class="row row-flex">
                <div class="col-md-12">
                <div class="input-group">
                <label class="input-group-text" for="turgor_color">Blood drawn From Left/Right arm:</label>
                <input type="text" name="turgorColor2" id="turgor_color" value="" class="form-control">
                </div>
                </div>
                <div class="col-md-12">
                <div class="input-group">
                <label class="input-group-text" for="turgor_temp">For:</label>
                <input type="text" name="turgorTemp2" id="turgor_temp" value="" class="form-control">
                </div>
                </div>
                </div>
                </td>
                </tr>
                <tr>
                <td>
                <div class="row row-flex">
                <div class="col-md-6">
                <div class="input-group">
                <label class="input-group-text" for="turgor_color">Other:</label>
                <input type="text" name="turgorColor3" id="turgor_color" value="" class="form-control">
                </div>
                </div>
                <div class="col-md-6">
                <div class="input-group">
                <label class="input-group-text" for="turgor_temp">Delivered to:</label>
                <input type="text" name="turgorTemp3" id="turgor_temp" value="" class="form-control">
                </div>
                </div>
                </div>
                </td>
                </tr>
                </tr>
                <tr>
                <td>
                <label class="form-check-label" for="painmanagement">
                <input type="checkbox" name="painmanagement" id="painmanagement" value="1"
                class="form-check-input"> Pain management</label>
                </td>
                </tr>
                <tr>
                <td>
                <label class="form-check-label" for="Bowel_Bladder_training">
                <input type="checkbox" name="bowelBladderTraining" id="Bowel_Bladder_training" value="1"
                class="form-check-input"> Bowel/Bladder training</label>
                </td>
                </tr>
                <tr>
                <td>
                <label class="form-check-label" for="digital_removal_Enema">
                <input type="checkbox" name="digitalRemovalEnema" id="digital_removal_Enema" value="1"
                class="form-check-input"> Digital exam with manual removal/Enema</label>
                </td>
                </tr>
                <tr>
                <td class="labels-group">
                <label for="">Change:</label>
                <label class="form-check-label" for="change_ng"><input type="radio" name="changeRadio" id="change_ng" value="ng"
                class="form-check-input"> NG</label>
                <label class="form-check-label" for="change_g_tube"><input type="radio" name="changeRadio" id="change_g_tube" value="gtube"
                class="form-check-input"> G tube</label>
                </td>
                </tr>
                <tr>
                <td class="labels-group">
                <label for="">Administer injection:</label>
                <label class="form-check-label" for="administer_injection_sc">
                <input type="radio" name="injection" id="administer_injection_sc" value="sc"
                class="form-check-input"> SC</label>
                <label class="form-check-label" for="administer_injection_im">
                <input type="radio" name="injection" id="administer_injection_im" value="im"
                class="form-check-input"> IM</label>
                </td>
                </tr>
                <tr>
                <td>
                <label for="administer_medication">Administer other medication:</label>
                <br>
                <input type="text" name="administerMedication" id="administer_medication" value="" class="form-control">
                </td>
                </tr>
                </table>
                </td>

                <td class="border-lg-end-2">
                <table class="table table-borderless align-middle m-0">
                <tr>
                <td class="labels-group">
                <label class="form-check-label" for="Insulin_prep"><input type="checkbox" name="insulinPrep" id="Insulin_prep" value="1"
                class="form-check-input"> Insulin prep</label>
                <label class="form-check-label" for="Insulin_administer">
                <input type="checkbox" name="insulinAdminister" id="Insulin_administer" value="1"
                class="form-check-input"> Insulin administer</label>
                </td>
                </tr>
                <tr>
                <td class="labels-group">
                <label class="form-check-label" for="Diabetic_assessment">
                <input type="checkbox" name="diabeticAssessment" id="Diabetic_assessment" value="1"
                class="form-check-input"> Diabetic observation and assessment</label>
                </td>
                </tr>
                <tr>
                <td class="labels-group">
                <label class="form-check-label" for="Teach_diabetic_care"><input type="checkbox" name="teachDiabeticCare" id="Teach_diabetic_care" value="1"
                class="form-check-input"> Teach diabetic care</label>
                </td>
                </tr>
                <tr>
                <td class="labels-group">
                <label for="">Teach:</label>
                <label class="form-check-label" for="Teach_administer"
                ><input type="checkbox" name="teachAdminister" id="Teach_administer" value="1"
                class="form-check-input"> Administer</label>
                <label class="form-check-label" for="Teach_ivs">
                <input type="checkbox" name="teachIvs" id="Teach_ivs" value="1"
                class="form-check-input"> IVs</label>
                <label class="form-check-label" for="Teach_clysis">
                <input type="checkbox" name="teachClysis" id="Teach_clysis" value="1"
                class="form-check-input"> Clysis</label>
                </td>
                </tr>
                <tr>
                <td class="labels-group">
                <label for="">Teach:</label> 
                <label class="form-check-label" for="Ostomy_care">
                <input type="checkbox" name="ostomyCare" id="Ostomy_care" value="1"
                class="form-check-input"> Ostomy care</label>
                <label class="form-check-label" for="conduit_care">
                <input type="checkbox" name="conduitCare" id="conduit_care" value="1"
                class="form-check-input"> Ileal conduit care</label>
                </td>
                </tr>
                <tr>
                <td class="labels-group">
                <label class="form-check-label" for="Teach_care">
                <input type="checkbox" name="teachCare2" id="Teach_care" value="1"
                class="form-check-input"> Teach care</label>
                <label class="form-check-label" for="Administer_tube_feedings">
                <input type="checkbox" name="AdministerTubeFeedings" id="Administer_tube_feedings" value="1"
                class="form-check-input"> Administer tube feedings</label>
                </td>
                </tr>
                <tr>
                <td class="labels-group">
                <label class="form-check-label" for="Teachcare">
                <input type="checkbox" name="teachcare" id="Teachcare" value="1"
                class="form-check-input"> Teach care</label>
                <label class="form-check-label" for="Administer_tracheostomy">
                <input type="checkbox" name="administerTracheostomy" id="Administer_tracheostomy" value="1"
                class="form-check-input"> Administer care of tracheostomy</label>
                </td>
                </tr>
                <tr>
                <td class="labels-group">
                <label class="form-check-label" for="Teachcare_1">
                <input type="checkbox" name="tachcare1" id="Teachcare_1" value="1"
                class="form-check-input"> Teach care</label>
                <label class="form-check-label" for="Administer_treatment">
                <input type="checkbox" name="administerTreatment" id="Administer_treatment" value="1"
                class="form-check-input"> Administer inhalation treatment</label>
                </td>
                </tr>
                <tr>
                <td class="labels-group">
                <label class="form-check-label" for="Teach_care_terminally_ill">
                <input type="checkbox" name="teachTerminallyIll" id="Teach_terminally_ill" value="1"
                class="form-check-input"> Teach care - terminally ill</label>
                </td>
                </tr>
                <tr>
                <td class="labels-group">
                <label class="form-check-label" for="Observe_and_assess_medication">
                <input type="checkbox" name="observeAssessMedication" id="Observe_assess_medication" value="1"
                class="form-check-input"> Observe and assess medication
                compliance/administration</label>
                </td>
                </tr>
                <tr>
                <td class="labels-group">
                <label for="">Teach medication:</label> 
                <label class="form-check-label" for="Teach_medication_purpose">
                <input type="checkbox" name="teachMedicationPurpose" id="Teach_medication_purpose" value="1"
                class="form-check-input"> purpose</label>
                <label class="form-check-label" for="Teach_medication_side_effect">
                <input type="checkbox" name="teachMedicationSideEffect" id="Teach_medication_side_effect" value="1"
                class="form-check-input"> side effects</label>
                <label class="form-check-label" for="Teach_medication_administration">
                <input type="checkbox" name="teachMedicationAdministration" id="Teach_medication_administration" value="1"
                class="form-check-input"> administration</label>
                </td>
                </tr>
                <tr>
                <td class="labels-group">
                <label for="">Teach diease process:</label>
                <br>
                <input type="text" name="" class="form-control">
                </td>
                </tr>
                <tr>
                <td class="labels-group">
                <label for="Evaluate_diet">Evaluate:</label>
                <label class="form-check-label" for="Evaluate_diet">
                    <input type="checkbox" name="evaluateDiet" id="Evaluate_diet" value="1"
                class="form-check-input"> diet</label>
                <label class="form-check-label" for="Evaluate_fluid_intake">
                <input type="checkbox" name="evaluateFluidIntake" id="Evaluate_fluid_intake" value="1"
                class="form-check-input"> fluid intake</label>
                </td>
                </tr>
                </table>
                </td>

                <td>
                <table class="table table-borderless align-middle m-0">
                <tr>
                <td>
                <label class="form-check-label" for="Diet_teaching">
                    <input type="checkbox" name="dietTeaching" id="Diet_teaching" value="1"
                class="form-check-input"> Diet teaching</label>
                </td>
                </tr>
                <tr>
                <td>
                <label class="form-check-label" for="Assess_ADLs_Functionality">
                <input type="checkbox" name="sssessAdlsFunctionality" id="Assess_ADLs_Functionality" value="1"
                class="form-check-input"> Assess ADLs/Functionality</label>
                </td>
                </tr>
                <tr>
                <td>
                <label class="form-check-label" for="Teach_Safety_precautions">
                <input type="checkbox" name="teachSafetyPrecautions" id="Teach_Safety_precautions" value="1"
                class="form-check-input"> Teach Safety precautions</label>
                </td>
                </tr>
                <tr>
                <td>
                <label class="form-check-label" for="Teach_skin_care_pressure_injury">
                <input type="checkbox" name="teachSkinCarePressureInjury" id="Teach_skin_care_pressure_injury" value="1"
                class="form-check-input"> Teach skin care/pressure injury
                prevention</label>
                </td>
                </tr>
                <tr>
                <td>
                <label class="form-check-label" for="Psychological_intervention">
                <input type="checkbox" name="psychologicalIntervention" id="Psychological_intervention" value="1"
                class="form-check-input"> Psychological intervention</label>
                </td>
                </tr>
                <tr>
                <td>
                <label class="form-check-label"for="Chest_physiotherapy_postural_drainage" >
                <input type="checkbox" name="posturalDrainage" id="postural_drainage" value="1"
                class="form-check-input"> Chest physiotherapy/postural drainage</label>
                </td>
                </tr>
                <tr>
                <td>
                <label class="form-check-label" for="Prenatal_assessment">
                <input type="checkbox" name="prenatalAssessment" id="Prenatal_assessment" value="1"
                class="form-check-input"> Prenatal assessment</label>
                </td>
                </tr>
                <tr>
                <td>
                <label class="form-check-label" for="Post_partum_assessment">
                <input type="checkbox" name="postPartumassessment" id="Post_partum_assessment" value="1"
                class="form-check-input"> Post-partum assessment</label>
                </td>
                </tr>
                <tr>
                <td>
                <label class="form-check-label" for="Teach_infant_child_care">
                <input type="checkbox" name="teachInfantChildCare" id="Teach_infant_child_care" value="1"
                class="form-check-input"> Teach infant/child care</label>
                </td>
                </tr>
                <tr>
                <td>
                <div class="input-group">
                <label class="input-group-text" for="child_care_other">Other:</label>
                <input type="text" name="childCareOther" id="child_care_other" value="1" class="form-control">
                </div>
                </td>
                </tr>
                </table>
                </td>
                </tr>
                </table>
                </div>
                <tr>
                <td colspan="2">
                <label for="Instructions_Patient_Response">Analysis/Interventions/Instructions/Patient Response:</label>
                <textarea name="instructionsPatientResponse" id="Instructions_Patient_Response" value="" cols="30" rows="4" class="form-control"></textarea>
                </td>
                </tr>
                </table>
            
                    <div class="row row-flex">
                    <div class="col-lg-6 border-lg-end-2">
                    <h3 class="bg-dark text-center p-2 mt-3 mb-2 text-white">SUMMARY CHECKLIST</h3>
                    <div class="ps-1 pe-1">
                    <table class="table table-borderless align-middle m-0">
                    <tr>
                    <td class="labels-group labels-mt-1">
                    <label>Care Plan:</label>
                    <label class="form-check-label" for="Care_plan_reviewed">
                    <input type="checkbox" name="carePlanReviewed" id="Care_plan_reviewed" value="1"
                    class="form-check-input"> Reviewed</label>
                    <label class="form-check-label" for="Care_patient_involvement">
                    <input type="checkbox" name="carePatientInvolvement" id="Care_patient_involvement" value="1"
                    class="form-check-input"> Revised with patient involvement</label>
                    <label class="form-check-label" for="Care_plan_outcome_achieved">
                    <input type="checkbox" name="carePlanOutcomeAchieved" id="Care_plan_outcome_achieved" value="1"
                    class="form-check-input"> Outcome achieved</label>
                    <label class="form-check-label" for="Care_plan_prn_order_obtained">
                    <input type="checkbox" name="carePlanPrnOrderObtained" id="Care_plan_prn_order_obtained" value="1"
                    class="form-check-input"> PRN order obtained</label>
                    <br>
                    <label for="planForNextVisit">Plan for Next Visit:</label>
                    <textarea name="planForNextVisit" id="planForNextVisit" value="" cols="30" rows="4" class="form-control"></textarea>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <div class="input-group">
                    <label class="input-group-text m-0" for="nextPhysicianVisit">Next Physician Visit:</label>
                    <input type="text" name="nextPhysicianVisit" id="nextPhysicianVisit" value="" class="form-control">
                    </div>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <div class="input-group">
                    <label class="input-group-text m-0" for="approximateNextVisitDate">Approximate Next Visit Date:</label>
                    <input type="date" name="approximateNextVisitDate" id="approximateNextVisitDate" value="" class="form-control">
                    </div>
                    </td>
                    </tr>
                    <tr>
                    <td class="labels-group">
                    <label for="">Discharge Planning Discussed:</label>
                    <label class="form-check-label" for="discharge_planning_discussed_yes">
                    <input type="radio" name="dischargePlanning" id="discharge_planning_discussed_yes" value="yes"
                    class="form-check-input"> Yes</label>
                    <label class="form-check-label" for="discharge_planning_discussed_no"><input type="radio" name="dischargePlanning" id="discharge_planning_discussed_no" value="no"
                    class="form-check-input"> No</label>
                    <label class="form-check-label" for="discharge_planning_discussed_long_term">
                    <input type="radio" name="dischargePlanning" id="discharge_planning_discussed_long_term" value="long term"
                    class="form-check-input"> Long Term</label>
                    <label class="form-check-label" for="discharge_planning_discussed_hospice" ><input type="radio" name="dischargePlanning" id="discharge_planning_discussed_hospice" value="hospice"
                    class="form-check-input"> Hospice</label>
                    </td>
                    </tr>
                    <tr>
                    <td class="labels-group">
                    <label>Discharge Plan:</label>
                    <label class="form-check-label" for="discharge_plan_verified"><input type="radio" name="dischargePlan" id="discharge_plan_verified" value="Verified"
                    class="form-check-input"> Verified</label>
                    <label class="form-check-label" for="discharge_plan_revised"><input type="radio" name="dischargePlan" id="discharge_plan_revised" value="Revised"
                    class="form-check-input"> Revised</label>
                    </td>
                    </tr>
                    <tr>
                    <td class="labels-group">
                    <label>Billable Supplies Recorded:</label>
                    <label class="form-check-label" for="Billable_supplies_recorded_yes"><input type="radio" name="billableSuppliesRecorded" id="Billable_supplies_recorded_yes" value="Yes"
                    class="form-check-input"> Yes</label>
                    <label class="form-check-label" for="Billable_supplies_recorded_no"><input type="radio" name="billableSuppliesRecorded" id="Billable_supplies_recorded_no" value="No"
                    class="form-check-input"> No</label>
                    </td>
                    </tr>
                    <tr>
                    <td class="labels-group labels-mt-1">
                    <label>Care Coordination:</label>
                    <label class="form-check-label" for="Care_coordination_physician_provider">
                    <input type="checkbox" name="physicianProvider" id="physician_provider" value=""
                    class="form-check-input"> Physician/Provider</label>
                    <label class="form-check-label" for="physicianPt">
                    <input type="checkbox" name="physicianPt" id="physicianPt" value="1" class="form-check-input"> PT</label> 
                    <label class="form-check-label" for="Care_coordination_physician_ot">
                    <input type="checkbox" name="physicianOt" id="physician_ot" value="1"
                    class="form-check-input"> OT</label>
                    <label class="form-check-label" for="Care_coordination_physician_st">
                    <input type="checkbox" name="physicianSt" id="physician_st" value="1"
                    class="form-check-input"> ST</label>
                    <label class="form-check-label" for="Care_coordination_physician_sw">
                    <input type="checkbox" name="physicianSw" id="physician_sw" value="1"
                    class="form-check-input"> MSW</label>
                    <label class="form-check-label" for="Care_coordination_physician_sn">
                    <input type="checkbox" name="physicianSn" id="physician_sn" value="1"
                    class="form-check-input"> SN</label>
                    <div class="d-inline-block mt-1">
                    <div class="input-group">
                    <label class="input-group-text m-0" for="careCoordinationPhysicianOther">Other (specify)</label>
                    <input type="text" name="careCoordinationPhysicianOther" id="careCoordinationPhysicianOther" class="form-control">
                    </div>
                    </div>
                    </td>
                    </tr>
                    </table>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <h3 class="bg-dark text-center p-2 mt-3 mb-2 text-white">AIDE SUPERVISORY VISIT <small>(Complete if
                    applicable)</small></h3>
                    <div class="ps-1 pe-1">
                    <table class="table table-borderless align-middle m-0">
                    <tr>
                    <td class="labels-group">
                    <label for="">Aide:</label>
                    <label class="form-check-label" for="aide_supervisory_visit_aide">
                    <input type="radio" name="aide" id="aide_supervisory_visit_aide" value="present" class="form-check-input"> Present</label>
                    <label class="form-check-label" for="aide_supervisory_visit_present">
                    <input type="radio" name="aide" id="aide_supervisory_visit_present" value="not present" class="form-check-input"> Not present</label>
                    </td>
                    </tr>
                    <tr>
                    <td class="labels-group">
                    <label for="supervisory_visit">Supervisory Visit:</label>
                    <label class="form-checkSupervisory Visit-label" for="supervisory_visit_scheduled">
                    <input type="radio" name="supervisoryVisit" id="supervisory_visit_scheduled" value="scheduled"
                    class="form-check-input"> Scheduled</label>
                    <label class="form-check-label" for="not_supervisory_visit_scheduled">
                    <input type="radio" name="supervisoryVisit" id="not_supervisory_visit_scheduled" value="not scheduled"
                    class="form-check-input"> Not Scheduled</label>
                    </td>
                    </tr>
                    {{-- <tr> recheck this section radio --}}
                    <td class="labels-group">
                    <label for="Is_patient_family_satisfied">Is Patient/ Family Satisfied:</label>
                    <label class="form-check-label" for="Is_patient_family_satisfied_yes">
                        <input type="radio" name="patientSatisfied" id="Is_patient_family_satisfied_yes" value="yes"
                    class="form-check-input"> Yes</label>
                    <label class="form-check-label" for="Is_patient_family_satisfied_no">
                        <input type="radio" name="patientSatisfied" id="Is_patient_family_satisfied_no" value="no"
                    class="form-check-input"> No</label>
                    <br>
                    <label class="mt-2" for="explain">Explain:</label>
                    <textarea name="explain" id="explain" cols="30" rows="2" class="form-control"></textarea>
                    </td>
                    </tr>
                    <tr>
                    <td class="labels-group">
                    <label for="Is_aide_following_care_plan_yes">Is Aide Following Care Plan:</label>
                    <label class="form-check-label">
                        <input type="radio" name="aideCarePlan" id="Is_aide_following_care_plan_yes" value="yes"
                    class="form-check-input"> Yes</label>
                    <label class="form-check-label" for="Is_aide_following_care_plan_no">
                        <input type="radio" name="aideCarePlan" id="Is_aide_following_care_plan_no" value="no"
                    class="form-check-input"> No</label>
                    </td>
                    </tr>
                    <tr>
                    <td class="labels-group">
                    <label for="aide_care_plan_updated">Aide Care Plan Updated:</label>
                    <label class="form-check-label" for="aide_care_plan_updated_yes">
                        <input type="radio" name="aideCarePlanUpdated" id="aide_care_plan_updated_no" value="yes"
                    class="form-check-input"> Yes</label>
                    <label class="form-check-label" for="aide_care_plan_updated_no">
                        <input type="radio" name="aideCarePlanUpdated" id="aide_care_plan_updated_no" value="no"
                    class="form-check-input"> No</label>
                    <br>
                    <label class="mt-2" for="observationOf">Observation of:</label>
                    <textarea name="observationOf" id="observationOf" cols="30" rows="2" class="form-control"></textarea>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <label for="teachingTrainingOf">Teaching/Training of:</label>
                    <textarea name="teachingTrainingOf" id="teachingTrainingOf" cols="30" rows="2" class="form-control"></textarea>
                    </td>
                    </tr>
                    </table>
                    </div>
                    </div>
                    </div>

                    <div class="border border-top-1 mt-3 mb-1"></div>
                    <div class="border border-top-1"></div>

                    <div class="ps-1 pe-1 pt-4 pb-4">
                    <table class="table table-borderless align-middle m-0">
                    <tr>
                    <td colspan="2">
                    <p class="m-0"><strong>SIGNATURE/DATE</strong>–Complete <strong>TIME OUT</strong> (on front)
                    prior to signing below.</p>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <div class="input-group clean-input-group">
                    <label class="input-group-text m-0" for="nurseSignatureTitle">Nurse Signature/Title:</label>
                    <input type="text" name="nurseSignatureTitle" id="nurseSignatureTitle" value="" class="form-control">
                    </div>
                    </td>
                    <td>
                    <div class="input-group clean-input-group">
                    <label class="input-group-text m-0" for="nurseSignatureDate">Date:</label>
                    <input type="text" name="nurseSignatureDate" id="nurseSignatureDate" value="" class="form-control">
                    </div>
                    </td>
                    </tr>
                    <tr>
                    <td colspan="2">
                    <div class="input-group clean-input-group">
                    <label class="input-group-text m-0" for="patientSignature">Patient Signature (optional):</label>
                    <input type="text" name="patientSignature" id="patientSignature" value="" class="form-control">
                    </div>
                    </td>
                    </tr>
                    </table>
                    </div>
                        <div class="pl-3 pb-3">
                        <button type="submit" name="finalSubmit" value="final" class=" btn btn-primary btn-block active" >Save</button>
                        </div>
                    </div>
                </div>
             </form>
        </div>
       
</div><!------/page two end---->