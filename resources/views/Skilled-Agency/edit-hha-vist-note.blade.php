{{--


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Nursing Visit Form</title>
   <link rel="stylesheet" href="bs/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>

<body> --}}
    @extends('layouts.app')

    @section('content')

<main>
   <div class="container">
      <div class="form-holder pt-5 pb-5">
         <form action="" method="post" id="hcavr-form">
            <div class="row row-flex flex-md-row-reverse align-items-center">
               <div class="col-lg-6">
                  <h1 class="text-lg-end text-uppercase">HOME CARE AIDE VISIT RECORD</h1>
               </div>
               <div class="col-lg-6">
                  <table class="table table-borderless align-middle default-td mb-0">
                     <tr>
                        <td class="ps-0">
                           <div class="input-group clean-input-group">
                              <label class="input-group-text m-0" for="date_1">Date:</label>
                              <input type="date" class="form-control" name="date_1" id="date_1" value="">
                           </div>
                        </td>
                        <td class="ps-0">
                           <div class="input-group clean-input-group" for="time_in">
                              <label class="input-group-text m-0">Time In:</label>
                              <input type="time" class="form-control" name="time_in" id="time_in" value="">
                           </div>
                        </td>
                        <td class="ps-0">
                           <div class="input-group clean-input-group" for="date_2">
                              <label class="input-group-text m-0">Date:</label>
                              <input type="date" id="" class="form-control" name="date_2" id="date_2" value="">
                           </div>
                        </td>
                        <td class="ps-0">
                           <div class="input-group clean-input-group" for="time_out">
                              <label class="input-group-text m-0" for="" >Time Out:</label>
                              <input type="time" class="form-control" name="time_out" id="time_out" value="">
                           </div>
                        </td>
                     </tr>
                  </table>
               </div>
            </div>

            <div class="request-data border border-2 rounded-4 overflow-hidden">
               <table class="table table-bordered default-td mb-0">
                  <tr>
                     <td class="text-center" colspan="2"><h4>Check each activity completed during visit, refer to Aide Care Plan.</h4></td>
                  </tr>
                  <tr>
                     <td class="p-0 md-w-60">
                        <table class="table table-bordered align-middle default-td">
                           <tr class="text-center">
                              <th>ACTIVITIES</th>
                              <th><small>REFUSED</small></th>
                              <th>COMMENTS</th>
                           </tr>

                           <!-- VITALS/RESULTS -->
                           <tr>
                              <td colspan="3" class="bg-black text-white pt-1 pb-1"><b>VITALS/RESULTS</b></td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="row row-flex align-items-center">
                                    <div class="col">
                                       <div class="input-group clean-input-group">
                                          <label class="input-group-text m-0" for="vitals_results"><b>T</b></label>
                                          <input type="text" class="form-control" name="vitals_results" id="vitals_results" value="">
                                       </div>
                                    </div>
                                    <div class="col">
                                       <div class="input-group clean-input-group" for="vitals_P">
                                          <label class="input-group-text m-0"><b>P</b></label>
                                          <input type="text" class="form-control" name="vitals_P" id="vitals_P" value="">
                                       </div>
                                    </div>
                                 </div>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_1" id="refused_1" value=""></td>
                               <td><input type="text" class="form-control" name="comments_1" id="comments_1" value=""></td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="row row-flex align-items-center">
                                    <div class="col">
                                       <div class="input-group clean-input-group">
                                          <label class="input-group-text m-0" for="vitals_R"><b>R</b></label>
                                          <input type="text" class="form-control" name="vitals_R" id="vitals_R" value="">
                                       </div>
                                    </div>
                                    <div class="col">
                                       <div class="input-group clean-input-group">
                                          <label class="input-group-text m-0" for="vitals_B_P"><b>B/P</b></label>
                                          <input type="text" class="form-control" name="vitals_B_P" id="vitals_B_P" value="">
                                       </div>
                                    </div>
                                 </div>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_2" id="refused_2" value=""></td>
                              <label for="comments_2"></label>
                              <td><input type="text" class="form-control" name="comments_2" id="comments_2" value=""></td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="row row-flex align-items-center">
                                    <div class="col">
                                       <div class="input-group clean-input-group">
                                          <label class="input-group-text m-0" for="vitals_weight"><b>Weight</b></label>
                                          <input type="text" class="form-control" name="vitals_weight" id="vitals_weight" value="">
                                       </div>
                                    </div>
                                    <div class="col">
                                       <div class="input-group clean-input-group">
                                          <label class="input-group-text m-0" for="vitals_pain_rating"><b>Pain rating</b></label>
                                          <input type="text" class="form-control" name="vitals_pain_rating" id="vitals_pain_rating" value="">
                                       </div>
                                    </div>
                                 </div>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_3" id="refused_3" value=""></td>
                              <td><input type="text" class="form-control" name="comments_3" id="comments_3" value=""></td>
                           </tr>
                           <tr><td colspan="4" class="p-0"></td></tr>

                           <!-- BATH -->
                           <tr>
                              <td colspan="3" class="bg-black text-white pt-1 pb-1"><b>BATH</b></td>
                           </tr>
                           <tr>
                              <td class="labels-group">
                                 <label class="form-check-label" for=""><input type="radio" name="bath" id="bath_1" value="" class="form-check-input">Tube</label>
                                 <label class="form-check-label" for=""><input type="radio" name="bath" id="bath_2" value="" class="form-check-input">Shower</label>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_4" id="refused_4" value=""></td>
                              <td><input type="text" class="form-control" name="comments_4" id="comments_4" value=""></td>
                           </tr>
                           <tr>
                              <td class="labels-group">
                                 <span><b>Bed Batch:</b>&nbsp;&nbsp;</span>
                                 <label class="form-check-label" for="bed_bath_1"><input type="radio" name="bed_bath" id="bed_bath_1" value="" class="form-check-input"> Partial</label>
                                 <label class="form-check-label" for="bed_bath_2"><input type="radio" name="bed_bath" id="bed_bath_2" value="" class="form-check-input"> Complete</label>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_5" id="refused_5" value=""></td>
                              <td><input type="text" class="form-control" name="comments_5" id="comments_5comments_5" value=""></td>
                           </tr>
                           <tr>
                              <td class="labels-group">
                                 <label class="form-check-label" for="assis_bath_chair"><input type="radio" name="assis_bath_chair_1" id="assis_bath_chair" value="" class="form-check-input_1">
                                 Assist Bath - Chair</label>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="assis_bath_chair_2" id="assis_bath_chair_2"></td>
                              <td><input type="text" class="form-control" name="assis_bath_chair_3" id="assis_bath_chair_3" value=""></td>
                           </tr>
                           <tr>
                              <td class="labels-group">
                                 <div class="input-group clean-input-group">
                                    <label class="input-group-text" for="other_specify"><b>Other (specify):</b></label>
                                    <input type="text" name="other_specify" id="other_specify" value="" class="form-control">
                                 </div>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_6" id="refused_6" value=""></td>
                              <td><input type="text" class="form-control" name="comments_6" id="comments_6" value=""></td>
                           </tr>

                           <!-- HYGIENE/GROOMING -->
                           <tr>
                              <td colspan="3" class="bg-black text-white pt-1 pb-1"><b>HYGIENE/GROOMING</b></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="assist_bath_chair"><input type="checkbox" name="assist_bath_chair" id="assist_bath_chair" value="" class="form-check-input"> Personal Care</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="assist_bath_chair_1" id="assist_bath_chair_1" value=""></td>
                              <td><input type="text" class="form-control" name="comments_7" id="comments_7" value=""></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="assist_with_dressing"><input type="checkbox" name="assist_with_dressing" id="assist_with_dressing" value="" class="form-check-input"> Assist with Dressing</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="assist_with_dressing_1" id="assist_with_dressing_1" value=""></td>
                              <td><input type="text" class="form-control" name="comments_8" id="comments_8" value=""></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="hair_care"><input type="checkbox" name="hair_care" id="hair_care" value="" class="form-check-input"> Hair Care</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="hair_care_1" id="hair_care_1" value=""></td>
                              <td><input type="text" class="form-control" name="comments_9" id="comments_9" value=""></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="shampoo"><input type="checkbox" name="shampoo" id="shampoo" value="" class="form-check-input"> Shampoo</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="shampoo_1" id="shampoo_1" value=""></td>
                              <td><input type="text" class="form-control" name="comments_11" id="comments_11" value=""></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="skin_care"><input type="checkbox" name="skin_care" id="skin_care" value="" class="form-check-input"> Skin Care</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="skin_care_1" id="skin_care_1" value=""></td>
                              <td><input type="text" class="form-control" name="comments_12" id="comments_12" value=""></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="moisturizer"><input type="checkbox" name="moisturizer" id="moisturizer" value="" class="form-check-input"> Moisturizer</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="moisturizer_1" id="moisturizer_1" value=""></td>
                              <td><input type="text" class="form-control" name="comments_13" id="comments_13" value=""></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="foot_care"><input type="checkbox" name="foot_care" id="foot_care" value="" class="form-check-input"> Foot Care</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="foot_care_1" id="foot_care_1" value=""></td>
                              <td><input type="text" class="form-control" name="comments_14" id="comments_14" value=""></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="check_pressure_areas"><input type="checkbox" name="check_pressure_areas" id="check_pressure_areas" value="" class="form-check-input"> Check Pressure Areas</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="check_pressure_areas_1" id="check_pressure_areas_1" value="" ></td>
                              <td><input type="text" class="form-control" name="comments_15" id="comments_15" value=""></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="nail_care"><input type="checkbox" name="nail_care" id="nail_care" value="" class="form-check-input"> Nail Care</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="nail_care_1" id="nail_care_1" value=""></td>
                              <td><input type="text" class="form-control" name="comments_16" id="comments_16" value=""></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="oral_care"><input type="checkbox" name="oral_care" id="oral_care" value="" class="form-check-input"> Oral Care</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="oral_care_1" id="oral_care_1" value=""></td>
                              <td><input type="text" class="form-control" name="comments_17" id="comments_17" value=""></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="clean_dentures"><input type="checkbox" name="clean_dentures" id="clean_dentures" value="" class="form-check-input"> Clean Dentures</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="clean_dentures_1" id="clean_dentures_1"
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="shave"><input type="checkbox" name="shave" id="shave" value="" class="form-check-input"> Shave</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="shave_1" id="shave_1" value=""></td>
                              <td><input type="text" class="form-control" name="comments_19" id="comments_19" value=""></td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="input-group clean-input-group">
                                    <label class="input-group-text" for="other"><b>Other (specify):</b></label>
                                    <input type="text" id="" class="form-control" name="other" id="other" value="">
                                 </div>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="other_1" id="other_1" value=""></td>
                              <td><input type="text" class="form-control" name="comments_20" id="comments_20" value=""></td>
                           </tr>

                           <tr>
                              <td colspan="3" class="bg-black text-white pt-1 pb-1"><b>PROCEDURES</b></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="perineal_care"><input type="checkbox" name="perineal_care" id="perineal_care" value="" class="form-check-input name="> Perineal Care</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="perineal_care_1" id="perineal_care_1" value=""></td>
                              <td><input type="text" class="form-control" name="comments_22" id="comments_21" value=""></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="assist_with_elimination"><input type="checkbox" name="assist_with_elimination" id="assist_with_elimination" value="" class="form-check-input"> Assist with Elimination</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="assist_with_elimination_1" id="assist_with_elimination_1" value=""></td>
                              <td><input type="text" class="form-control" name="comments_22" id="comments_22" value=""></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="catheter_care"><input type="checkbox" name="catheter_care" id="catheter_care" value="" class="form-check-input"> Catheter Care</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="catheter_care_1" id="catheter_care_1" value=""></td>
                              <td><input type="text" class="form-control" name="comments_23" id="comments_23" value=""></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="ostomy_care"><input type="checkbox" name="ostomy_care" id="ostomy_care" value="" class="form-check-input"> Ostomy Care</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="ostomy_care_1" id="ostomy_care_2" value=""></td>
                              <td><input type="text" class="form-control" name="comments_24" id="comments_24" value=""></td>
                           </tr>
                           <tr>
                              <td class="labels-group">
                                 <span><b>Record:</b>&nbsp;&nbsp;</span>
                                 <label class="form-check-label" for="Intake"><input type="checkbox" name="Intake" id="Intake" value="" class="form-check-input"> Intake</label>
                                 <label class="form-check-label" for="Output"><input type="checkbox" name="Output" id="Output" value="" class="form-check-input"> Output</label>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input"></td>
                              <td><input type="text" class="form-control" name="comments_25" id="comments_25" value=""></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="inspect_reinforce_dressing"><input type="checkbox" name="inspect_reinforce_dressing" id="inspect_reinforce_dressing" value="" class="form-check-input"> Inspect/Reinforce Dressing</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="comments_26" id="comments_26" value=""></td>
                              <td><input type="text" class="form-control" name="refuse_7" id="refuse_7" value=""></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="medication_reminders"><input type="checkbox" name="medication_reminders" id="medication_reminders" value="" class="form-check-input"> Medication Reminder</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="comments_27" id="comments_27" value=""></td>
                              <td><input type="text" class="form-control" name="refuse_8" id="refuse_8" value=""></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="medication_assistance"><input type="checkbox" name="medication_assistance" id="medication_assistance" value="" class="form-check-input"> Medication Assistance</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="comments_28" id="comments_28" value=""></td>
                              <td><input type="text" class="form-control" name="refuse_9" id="refuse_9" value=""></td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="input-group clean-input-group">
                                    <label class="input-group-text" for="other_303"><b>Other (specify):</b></label>
                                    <input type="text" name="other_303" id="other_303" value="" class="form-control">
                                 </div>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refuse_10" id="refuse_10" value=""></td>
                              <td><input type="text" class="form-control" name="comments_29" id="comments_29" value=""></td>
                           </tr>
                        </table>
                     </td>
                     <td class="p-0">
                        <table class="table table-bordered align-middle default-td">
                           <tr class="text-center">
                              <th>ACTIVITIES</th>
                              <th><small>REFUSED</small></th>
                              <th>COMMENTS</th>
                           </tr>

                           <!-- ACTIVIY -->
                           <tr>
                              <td colspan="3" class="bg-black text-white pt-1 pb-1"><b>ACTIVIY</b></td>
                           </tr>
                           <tr>
                              <td class="labels-group">
                                 <span><b>Assist with:</b>&nbsp;&nbsp;</span>
                                 <label class="form-check-label" for="ambulation" ><input type="checkbox" name="ambulation" id="ambulation" value="" class="form-check-input"> Ambulation</label>
                                 <label class="form-check-label" for="w_c"><input type="checkbox" name="w_c" id="" value="w_c" class="form-check-input"> W/C</label>
                                 <label class="form-check-label" for="walker"><input type="checkbox" name="walker" id="walker" value="" class="form-check-input"> Walker</label>
                                 <label class="form-check-label" for="cane"><input type="checkbox" name="cane" id="" value="cane" class="form-check-input"> Cane</label>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refuse_11" id="refuse_11" value=""></td>
                              <td><input type="text" class="form-control" name="comments_30" id="comments_30" value=""></td>
                           </tr>
                           <tr>
                              <td class="labels-group">
                                 <span><b>Assist with Mobility:</b>&nbsp;&nbsp;</span>
                                 <label class="form-check-label" for="gait_belt"><input type="checkbox" name="gait_belt" id="gait_belt" value="" class="form-check-input"> Gait Belt</label>
                                 <label class="form-check-label" for="chair"><input type="checkbox" name="chair" id="" value="chair" class="form-check-input"> Chair</label>
                                 <label class="form-check-label" for="bed"><input type="checkbox" name="bed" id="bed" value=""class="form-check-input"> Bed</label>
                                 <label class="form-check-label" for="dangle"><input type="checkbox" name="dangle" id="dangle" value="" class="form-check-input"> Dangle</label>
                                 <label class="form-check-label" for="commod"><input type="checkbox" name="commod" id="commod" value=""class="form-check-input"> Commode</label>
                                 <label class="form-check-label" for="shower"><input type="checkbox" name="shower" id="shower" value="" class="form-check-input"> Shower</label>
                                 <label class="form-check-label" for="tub"><input type="checkbox" name="tub" id="tub" value="" class="form-check-input"> Tub</label>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refuse_13" id="" value=""></td>
                              <td><input type="text" class="form-control" name="comments_31" id="comments_31" value=""></td>
                           </tr>
                           <tr>
                              <td class="labels-group">
                                 <span><b>ROM:</b>&nbsp;&nbsp;</span>
                                 <label class="form-check-label" for="active"><input type="radio" name="ROM" class="form-check-input" id="active" value=""> Active</label>
                                 <label class="form-check-label" for="passive"><input type="radio" name="ROM" class="form-check-input" id="passive" value=""> Passive</label>
                                 <br>
                                 <span><b>Arm:</b>&nbsp;&nbsp;</span>
                                 <label class="form-check-label" for="arm_r"><input type="radio" name="Arm" class="form-check-input" id="arm_r" value=""> R</label>
                                 <label class="form-check-label" for="arm_l"><input type="radio" name="Arm" class="form-check-input" id="arm_l" value=""> L</label>
                                 <br>
                                 <span><b>Leg:</b>&nbsp;&nbsp;</span>
                                 <label class="form-check-label" for="leg_r"><input type="radio" name="Leg" class="form-check-input" id="eg_r" value=""> R</label>
                                 <label class="form-check-label" for="leg_l"><input type="radio" name="Leg" class="form-check-input" id="leg_l" value=""> L</label>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_14" id="refused_14" value=""></td>
                              <td><input type="text" class="form-control" name="comments_32" id="comments_32" value=""></td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="d-block"><label class="form-check-label" for="reposition"><input type="checkbox"  name="reposition" id="reposition" value="" class="form-check-input"> Reposition</label></div>
                                 <div class="d-block"><label class="form-check-label" for="encourange_reposition"><input type="checkbox"  name="encourange_reposition" id="encourange_reposition" value="" class="form-check-input"> Encourage Position Change</label></div>
                                 <div class="input-group clean-input-group">
                                    <label class="input-group-text m-0" for="every">Every</label>
                                    <input type="number"  name="every" id="every" value="" class="form-control">
                                    <label class="input-group-text m-0">hrs</label>
                                 </div>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_15" id="refused_15" value=""></td>
                              <td><input type="text" class="form-control" name="comments_33" id="comments_33" value=""></td>
                           </tr>
                           <tr>
                              <td class="labels-group">
                                 <span><b>Exercise - Per:</b>&nbsp;&nbsp;</span>
                                 <label class="form-check-label" for="exercise_pt"><input type="checkbox" name="exercise_pt" id="exercise_pt" value="" class="form-check-input"> PT</label>
                                 <label class="form-check-label" for="exercise_ot"><input type="checkbox" name="exercise_ot" id="exercise_ot" value="" class="form-check-input"> OT</label>
                                 <label class="form-check-label" for="exercise_slp"><input type="checkbox" name="exercise_slp" id="exercise_slp" value="" class="form-check-input"> SLP Care Plan</label>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_17" id="refused_17" value=""></td>
                              <td><input type="text" class="form-control" name="comments_34" id="comments_35" value=""></td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="input-group clean-input-group">
                                    <label class="input-group-text fw-semibold" for="other_408">Other (specify):</label>
                                    <input type="text" name="other_408" id="other_408" value="" class="form-control">
                                 </div>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_18" id="refused_18" value=""></td>
                              <td><input type="text" class="form-control" name="comments_35" id="comments_35" value=""></td>
                           </tr>

                           <!-- NUTRITION -->
                           <tr>
                              <td colspan="3" class="bg-black text-white pt-1 pb-1"><b>NUTRITION</b></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="meal_preparation"><input type="checkbox" name="meal_preparation" id="meal_preparation" value="" class="form-check-input"> Meal Preparation</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_19" id="refused_19" value=""></td>
                              <td><input type="text" class="form-control" name="comments_36" id="comments_36" value=""></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for=""><input type="checkbox" name="assist_feeding" id="assist_feeding" value="assist_feeding" class="form-check-input"> Assist with Feeding</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_20" id="refused_20" value=""></td>
                              <td><input type="text" class="form-control" name="comments_37" id="comments_37" value=""></td>
                           </tr>
                           <tr>
                              <td class="labels-group">
                                 <label class="form-check-label" for="limit"><input type="radio" name="radio_1" id="limit" value="" class="form-check-input"> Limit</label>
                                 <label class="form-check-label" for="encourage_fluides"><input type="radio" name="radio_1" id="encourage_fluides" value="" class="form-check-input"> Encourage Fluides</label>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_21" id="refused_21" value=""></td>
                              <td><input type="text" class="form-control" name="comments_38" id="comments_38" value=""></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="grocery_shopping"><input type="checkbox" name="grocery_shopping" id="grocery_shopping" value="" class="form-check-input"> Grocery Shopping</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_22" id="refused_22" value=""></td>
                              <td><input type="text" class="form-control" name="comments_39" id="comments_39" value=""></td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="input-group clean-input-group">
                                    <label class="input-group-text fw-semibold" for="other_500">Other (specify):</label>
                                    <input type="text" name="other_500" id="other_500" value="" class="form-control">
                                 </div>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_23" id="refused_23" value=""></td>
                              <td><input type="text" class="form-control" name="comments_40" id="comments_40" value=""></td>
                           </tr>

                           <!-- OTHER -->
                           <tr>
                              <td colspan="3" class="bg-black text-white pt-1 pb-1"><b>OTHER</b></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="other_100"><input type="checkbox" name="other_100" id="other_100" value="" class="form-check-input"> Wash Clothes</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_24" id="refused_24" value=""></td>
                              <td><input type="text" class="form-control" name="comments_41" id="comments_41" value=""></td>
                           </tr>
                           <tr>
                              <td class="labels-group">
                                 <span><b>Light Housekeeping:</b>&nbsp;&nbsp;</span>
                                 <label class="form-check-label" for="bedroom"><input type="checkbox" name="bedroom" id="bedroom" value="" class="form-check-input"> Bedroom</label>
                                 <label class="form-check-label" for="bathroom"><input type="checkbox" name="bathroom" id="bathroom" value="" class="form-check-input"> Bathroom</label>
                                 <label class="form-check-label" for="kitchen"><input type="checkbox" name="kitchen" id="kitchen" value="" class="form-check-input"> Kitchen</label>
                                 <label class="form-check-label" for="change_bed_linen"><input type="checkbox" name="change_bed_linen" id="change_bed_linen" value="" class="form-check-input"> Change Bed Linen</label>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_25" id="refused_25" value=""></td>
                              <td><input type="text" class="form-control" name="comments_42" id="comments_42" value=""></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="equipment_care"><input type="checkbox" name="equipment_care" id="equipment_care" value="" class="form-check-input"> Equipment Care</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_26" id="refused_26" value=""></td>
                              <td><input type="text" class="form-control" name="comments_43" id="comments_43" value=""></td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="input-group clean-input-group">
                                    <label class="input-group-text fw-semibold" for="other_50">Other (specify):</label>
                                    <input type="text" name="other_50" id="other_50" value="" class="form-control">
                                 </div>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_27" id="refused_27" value=""></td>
                              <td><input type="text" class="form-control" name="comments_44" id="comments_44" value=""></td>
                           </tr>
                           <tr><td class="p-3"></td><td></td><td></td></tr>
                           <tr><td class="p-3"></td><td></td><td></td></tr>
                           <tr><td class="p-3"></td><td></td><td></td></tr>
                           <tr><td class="p-3"></td><td></td><td></td></tr>
                           <tr><td class="p-3"></td><td></td><td></td></tr>
                           <tr><td class="p-3"></td><td></td><td></td></tr>
                           <tr><td class="p-3"></td><td></td><td></td></tr>
                           <tr><td class="p-3"></td><td></td><td></td></tr>
                           <tr><td class="p-3"></td><td></td><td></td></tr>
                           <tr><td class="p-3"></td><td></td><td></td></tr>
                           <tr><td class="p-3"></td><td></td><td></td></tr>
                           <tr><td class="p-3"></td><td></td><td></td></tr>
                           <tr><td class="p-3"></td><td></td><td></td></tr>
                           <tr><td class="p-3"></td><td></td><td></td></tr>
                           <tr><td class="p-3"></td><td></td><td></td></tr>
                           <tr><td class="p-3"></td><td></td><td></td></tr>
                           <tr><td class="p-3"></td><td></td><td></td></tr>
                        </table>
                     </td>
                  </tr>
                  <tr>
                     <td colspan="2">
                        <label for=""><b>Comments/Notes:</b></label>
                        <textarea name="" id="" cols="30" rows="6" class="form-control"></textarea>
                     </td>
                  </tr>
                  <tr><td colspan="2" class="p-0"></td></tr>
                  <tr>
                     <td colspan="2" class="text-center labels-group">
                        <span><b>Coordination of Care with:</b></span>
                        <label class="form-check-label" for="sn"><input type="checkbox" name="sn" id="sn" value=""ame="" class="form-check-input"> SN</label>
                        <label class="form-check-label" for="therapy"><input type="checkbox" name="therapy" id="therapy" value="" class="form-check-input"> Therapy</label>
                        <label class="form-check-label" for="pt"><input type="checkbox" name="pt" id="pt" value="" class="form-check-input"> PT</label>
                        <label class="form-check-label" for="ot"><input type="checkbox" name="ot" id="ot" value="" class="form-check-input"> OT</label>
                        <label class="form-check-label" for="slp"><input type="checkbox" name="slp" id="slp" value="" class="form-check-input"> SLP</label>
                        <label class="form-check-label" for="family"><input type="checkbox" name="family" id="family" value="" class="form-check-input"> Family</label>
                        <label class="form-check-label" for="patient"><input type="checkbox" name="patient" id="patient" value="" class="form-check-input"> Patient</label>
                     </td>
                  </tr>
                  <tr><td colspan="2" class="p-0"></td></tr>
                  <tr>
                     <td colspan="2">
                        <span><b>SIGNATURE/DATE</b></span>
                         <div class="row row-flex align-items-center gy-3 mt-2">
                           <div class="col-lg-4 col-md-8">
                              <div class="input-group clean-input-group">
                                 <label class="input-group-text m-0" for="signature_date"><b>Employee</b></label>
                                 <input type="text" class="form-control" name="signature_date" id="signature_date" value="">
                              </div>
                           </div>
                           <div class="col-lg-2 col-md-4">
                              <div class="input-group clean-input-group input-group-block">
                                 <input type="text" class="form-control" for="date">
                                 <label class="input-group-text" name="date" id="date" value=""><i>Date</i></label>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-8">
                              <div class="input-group clean-input-group">
                                 <label class="input-group-text m-0" for="patient"><b>Patient</b></label>
                                 <input type="text" class="form-control" name="patient" id="patient" value="">
                              </div>
                           </div>
                           <div class="col-lg-2 col-md-4">
                              <div class="input-group clean-input-group">
                                 <input type="text" class="form-control" for="patient_date">
                                 <label class="input-group-text m-0" name="patient_date" id="patient_date" value=""><i>Date</i></label>
                              </div>
                           </div>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td><small>PATIENT NAME- Last, First, Middle Initial</small></td>
                     <td>ID#</td>
                  </tr>
               </table>
            </div>
         </form>
      </div>
   </div>

   <script src="bs/js/bootstrap.min.js"></script>
</main>

@endsection
{{-- </body>
</html> --}}
