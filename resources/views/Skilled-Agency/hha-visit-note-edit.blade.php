    @extends('layouts.app')

            {{-- <link rel="stylesheet" href="{{ asset('outass/bs/css/bootstrap.min.css') }}">
            <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="{{asset('outass/css/style.css')}}"> --}}
            <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    @section('content')

<main>

   <div class="container">
      <div class="vt p-2">@include('layouts.company_info')</div>
      <div class="form-holder pt15 pb-5">
         <form action="{{route('nonskilled.hhaVisitNoteUpdate')}}"  method="POST">
            @csrf
            <input type="hidden" value="{{ $hhhaData['visitnote']->id ?? '' }}" name="id">
            <input type="hidden" name="schedule_id" id="" value="{{$data}}">
            <div class="row vt row-flex flex-md-row-reverse align-items-center">
               <div class="col-lg-4">
                  <h1 class="text-lg-end fw-bolder text-uppercase">HOME CARE AIDE VISIT RECORD</h1>
               </div>
               <div class="col-lg-8">
                  <table class="table table-borderless align-middle default-td mb-0">
                     <tr>
                        <td class="ps-0">
                            <div class="input-group clean-input-group">
                                <label class="input-group-text m-0" for="date_1">Date:</label>
                                <input type="date" class="form-control" name="date_1" id="date_1" value="{{ $hhhaData['visitnote']->date_1 ?? '' }}">
                            </div>
                        </td>
                        <td class="ps-0">
                            <div class="input-group clean-input-group" for="time_in">
                                <label class="input-group-text m-0">Time In:</label>
                                <input type="time" class="form-control" name="time_in" id="time_in" value="{{ $hhhaData['visitnote']->time_in ?? '' }}">
                            </div>
                        </td>
                        <td class="ps-0">
                            <div class="input-group clean-input-group" for="date_2">
                                <label class="input-group-text m-0">Date:</label>
                                <input type="date" id="" class="form-control" name="date_2" id="date_2" value="{{ $hhhaData['visitnote']->date_2 ?? '' }}">
                            </div>
                        </td>
                        <td class="ps-0">
                            <div class="input-group clean-input-group" for="time_out">
                                <label class="input-group-text m-0" for="">Time Out:</label>
                                <input type="time" class="form-control" name="time_out" id="time_out" value="{{ $hhhaData['visitnote']->time_out ?? '' }}">
                            </div>
                        </td>
                    </tr>

                  </table>
               </div>
            </div>

            <div class="request-data border border-2 rounded-4 overflow-hidden">
               <table class="table table-bordered default-td mb-0">
                  <tr>
                     <td class="text-center" colspan="2"><h4 class="bg-black text-white fw-bolder p-3">Check each activity completed during visit, refer to Aide Care Plan.</h4></td>
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
                              <td colspan="3" class="bg-black text-white pt-1 pb-1"><b class="bg-black text-white fw-bolder p-2">VITALS/RESULTS</b></td>
                           </tr>
                           <tr>
                            <td>
                                <div class="row row-flex align-items-center">
                                    <div class="col">
                                        <div class="input-group clean-input-group">
                                            <label class="input-group-text m-0" for="vitals_results"><b>T</b></label>
                                            <input type="text" class="form-control" name="vitals_results" id="vitals_results" value="{{ $hhhaData['visitnote']->vitals_results ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-group clean-input-group" for="vitals_P">
                                            <label class="input-group-text m-0"><b>P</b></label>
                                            <input type="text" class="form-control" name="vitals_P" id="vitals_P" value="{{ $hhhaData['visitnote']->vitals_P ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_1" id="refused_1" value="1"></td>
                            <td><input type="text" class="form-control" name="comments_1" id="comments_1" value="{{ $hhhaData['visitnote']->comments_1 ?? '' }}"></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="row row-flex align-items-center">
                                    <div class="col">
                                        <div class="input-group clean-input-group">
                                            <label class="input-group-text m-0" for="vitals_R"><b>R</b></label>
                                            <input type="text" class="form-control" name="vitals_R" id="vitals_R" value="{{ $hhhaData['visitnote']->vitals_R ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-group clean-input-group">
                                            <label class="input-group-text m-0" for="vitals_B_P"><b>B/P</b></label>
                                            <input type="text" class="form-control" name="vitals_B_P" id="vitals_B_P" value="{{ $hhhaData['visitnote']->vitals_B_P ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_2" id="refused_2" value="1"></td>
                            <td><input type="text" class="form-control" name="comments_2" id="comments_2" value="{{ $hhhaData['visitnote']->comments_2 ?? '' }}"></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="row row-flex align-items-center">
                                    <div class="col">
                                        <div class="input-group clean-input-group">
                                            <label class="input-group-text m-0" for="vitals_weight"><b>Weight</b></label>
                                            <input type="text" class="form-control" name="vitals_weight" id="vitals_weight" value="{{ $hhhaData['visitnote']->vitals_weight ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-group clean-input-group">
                                            <label class="input-group-text m-0" for="vitals_pain_rating"><b>Pain rating</b></label>
                                            <input type="text" class="form-control" name="vitals_pain_rating" id="vitals_pain_rating" value="{{ $hhhaData['visitnote']->vitals_pain_rating ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_3" id="refused_3" value="1"></td>
                            <td><input type="text" class="form-control" name="comments_3" id="comments_3" value="{{ $hhhaData['visitnote']->comments_3 ?? '' }}"></td>
                        </tr>

                           <tr><td colspan="4" class="p-0"></td></tr>

                           <!-- BATH -->
                           <tr>
                              <td colspan="3" class="bg-black text-white pt-1 pb-1"><b>BATH</b></td>
                           </tr>
                           <tr>
                            <td class="labels-group">
                                <label class="form-check-label" for="bath">
                                    <input type="radio" name="bath" id="bath_1" value="Tube" class="form-check-input" {{ $hhhaData['visitnote']->bath == 'Tube' ? 'checked' : '' }}>
                                    Tube
                                </label>
                                <label class="form-check-label" for="bath">
                                    <input type="radio" name="bath" id="bath_2" value="Shower" class="form-check-input" {{ $hhhaData['visitnote']->bath == 'Shower' ? 'checked' : '' }}>
                                    Shower
                                </label>
                            </td>
                            <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_4" id="refused_4" value="1" {{ $hhhaData['visitnote']->refused_4 == 1 ? 'checked' : '' }}></td>
                            <td><input type="text" class="form-control" name="comments_4" id="comments_4" value="{{ $hhhaData['visitnote']->comments_4 ?? '' }}"></td>
                        </tr>
                        <tr>
                            <td class="labels-group">
                                <span><b>Bed Batch:</b>&nbsp;&nbsp;</span>
                                <label class="form-check-label" for="bed_bath_1">
                                    <input type="radio" name="bed_bath" id="bed_bath_1" value="Partial" class="form-check-input" {{ $hhhaData['visitnote']->bed_bath_1 == 'Partial' ? 'checked' : '' }}>
                                    Partial
                                </label>
                                <label class="form-check-label" for="bed_bath_2">
                                    <input type="radio" name="bed_bath" id="bed_bath_2" value="Complete" class="form-check-input" {{ $hhhaData['visitnote']->bed_bath_2 == 'Complete' ? 'checked' : '' }}>
                                    Complete
                                </label>
                            </td>
                            <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_5" id="refused_5" value="1"></td>
                            <td><input type="text" class="form-control" name="comments_5" id="comments_5" value="{{ $hhhaData['visitnote']->comments_5 ?? '' }}"></td>
                        </tr>
                        <tr>
                            <td class="labels-group">
                                <label class="form-check-label" for="assis_bath_chair">
                                    <input type="radio" name="assis_bath_chair_1" id="assis_bath_chair" value="Assist Bath-Chair" class="form-check-input_1" {{ $hhhaData['visitnote']->assis_bath_chair_1 == 'Assist Bath-Chair' ? 'checked' : '' }}>
                                    Assist Bath - Chair
                                </label>
                            </td>
                            <td class="text-center"><input type="checkbox" class="form-check-input" name="assis_bath_chair_2" id="assis_bath_chair_2" value="1" {{ $hhhaData['visitnote']->assis_bath_chair_2 == 1 ? 'checked' : '' }}></td>
                            <td><input type="text" class="form-control" name="assis_bath_chair_3" id="assis_bath_chair_3" value="{{ $hhhaData['visitnote']->assis_bath_chair_3 ?? '' }}"></td>
                        </tr>
                        <tr>
                            <td class="labels-group">
                                <div class="input-group clean-input-group">
                                    <label class="input-group-text" for="other_specify"><b>Other (specify):</b></label>
                                    <input type="text" name="other_specify" id="other_specify" value="{{ $hhhaData['visitnote']->other_specify ?? '' }}" class="form-control">
                                </div>
                            </td>
                            <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_6" id="refused_6" value="1"></td>
                            <td><input type="text" class="form-control" name="comments_6" id="comments_6" value="{{ $hhhaData['visitnote']->comments_6 ?? '' }}"></td>
                        </tr>


                           <!-- HYGIENE/GROOMING -->
                           <tr>
                              <td colspan="3" class="bg-black text-white pt-1 pb-1"><b>HYGIENE/GROOMING</b></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="assist_bath_chair">
                                <input type="checkbox" name="assist_bath_chair" id="assist_bath_chair" value="1" {{ $hhhaData['visitnote']->assist_bath_chair==1 ? 'checked' : '' }} class="form-check-input"> Personal Care</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="assist_bath_chair_1" id="assist_bath_chair_1" value="1" {{ $hhhaData['visitnote']->assist_bath_chair_1 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_7" id="comments_7" value="{{ !empty($hhhaData['visitnote']->comments_7) ? $hhhaData['visitnote']->comments_7 : ''}}"></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="assist_with_dressing"><input type="checkbox" name="assist_with_dressing" id="assist_with_dressing" value="1" class="form-check-input" {{ $hhhaData['visitnote']->assist_with_dressing == 1 ? 'checked' : '' }}> Assist with Dressing</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="assist_with_dressing_1" id="assist_with_dressing_1" value="{{ !empty($hhhaData['visitnote']->assist_with_dressing_1) ? $hhhaData['visitnote']->assist_with_dressing_1 : ''}}"></td>
                              <td><input type="text" class="form-control" name="comments_8" id="comments_8" value="{{ !empty($hhhaData['visitnote']->comments_8) ? $hhhaData['visitnote']->comments_8 : ''}}"></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="hair_care"><input type="checkbox" name="hair_care" id="hair_care" value="1" class="form-check-input" {{ $hhhaData['visitnote']->hair_care == 1 ? 'checked' : '' }}> Hair Care</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="hair_care_1" id="hair_care_1" value="1" {{ $hhhaData['visitnote']->hair_care_1 == 1 ? 'checked' : '' }} ></td>
                              <td><input type="text" class="form-control" name="comments_9" id="comments_9" value="{{ !empty($hhhaData['visitnote']->comments_9) ? $hhhaData['visitnote']->comments_9 : ''}}"></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="shampoo"><input type="checkbox" name="shampoo" id="shampoo" value="1" class="form-check-input" {{ $hhhaData['visitnote']->shampoo == 1 ? 'checked' : '' }}> Shampoo</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="shampoo_1" id="shampoo_1" value="1" {{ $hhhaData['visitnote']->shampoo_1 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_11" id="comments_11" value="{{ !empty($hhhaData['visitnote']->comments_11) ? $hhhaData['visitnote']->comments_11 : ''}}"></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="skin_care"><input type="checkbox" name="skin_care" id="skin_care" value="1" class="form-check-input" {{ $hhhaData['visitnote']->skin_care == 1 ? 'checked' : '' }}> Skin Care</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="skin_care_1" id="skin_care_1" value="1" {{ $hhhaData['visitnote']->skin_care_1 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_12" id="comments_12" value="{{ !empty($hhhaData['visitnote']->comments_12) ? $hhhaData['visitnote']->comments_12 : ''}}"></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="moisturizer"><input type="checkbox" name="moisturizer" id="moisturizer" value="1" class="form-check-input" {{ $hhhaData['visitnote']->moisturizer == 1 ? 'checked' : '' }}> Moisturizer</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="moisturizer_1" id="moisturizer_1" value="1" {{ $hhhaData['visitnote']->moisturizer_1 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_13" id="comments_13" value="{{ !empty($hhhaData['visitnote']->comments_13) ? $hhhaData['visitnote']->comments_13 : ''}}"></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="foot_care"><input type="checkbox" name="foot_care" id="foot_care" value="1" class="form-check-input" {{ $hhhaData['visitnote']->foot_care == 1 ? 'checked' : '' }}> Foot Care</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="foot_care_1" id="foot_care_1" value="1" {{ $hhhaData['visitnote']->foot_care_1 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_14" id="comments_14" value="{{ !empty($hhhaData['visitnote']->comments_14) ? $hhhaData['visitnote']->comments_14 : ''}}"></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="check_pressure_areas"><input type="checkbox" name="check_pressure_areas" id="check_pressure_areas" value="1" class="form-check-input"{{ $hhhaData['visitnote']->check_pressure_areas == 1 ? 'checked' : '' }}> Check Pressure Areas</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="check_pressure_areas_1" id="check_pressure_areas_1" value="1" {{ $hhhaData['visitnote']->check_pressure_areas_1 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_15" id="comments_15" value="{{ !empty($hhhaData['visitnote']->comments_15) ? $hhhaData['visitnote']->comments_15 : ''}}"></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="nail_care"><input type="checkbox" name="nail_care" id="nail_care" value="1" class="form-check-input" {{ $hhhaData['visitnote']->nail_care == 1 ? 'checked' : '' }}> Nail Care</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="nail_care_1" id="nail_care_1" value="1" {{ $hhhaData['visitnote']->nail_care_1 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_16" id="comments_16" value="{{ !empty($hhhaData['visitnote']->comments_16) ? $hhhaData['visitnote']->comments_16 : ''}}"></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="oral_care"><input type="checkbox" name="oral_care" id="oral_care" value="1" class="form-check-input" {{ $hhhaData['visitnote']->oral_care == 1 ? 'checked' : '' }}> Oral Care</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="oral_care_1" id="oral_care_1" value="1" {{ $hhhaData['visitnote']->oral_care_1 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_17" id="comments_17" value="{{ !empty($hhhaData['visitnote']->comments_17) ? $hhhaData['visitnote']->comments_17 : ''}}"></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="clean_dentures"><input type="checkbox" name="clean_dentures" id="clean_dentures" value="1" class="form-check-input" {{ $hhhaData['visitnote']->clean_dentures == 1 ? 'checked' : '' }}> Clean Dentures</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="clean_dentures_1" id="clean_dentures_1" value="1" {{ $hhhaData['hhavisitnote1']->clean_dentures_1 == 1 ? 'checked' : '' }}></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="shave"><input type="checkbox" name="shave" id="shave" value="1" class="form-check-input" {{ $hhhaData['visitnote']->shave == 1 ? 'checked' : '' }}> Shave</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="shave_1" id="shave_1" value="1" {{ $hhhaData['visitnote']->oral_care_1 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_19" id="comments_19" value="{{ !empty($hhhaData['hhavisitnote1']->comments_19) ? $hhhaData['visitnote']->comments_19 : ''}}"></td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="input-group clean-input-group">
                                    <label class="input-group-text" for="other"><b>Other (specify):</b></label>
                                    <input type="text" id="" class="form-control" name="other" id="other" value="">
                                 </div>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="other_1" id="other_1" value="1"></td>
                              <td><input type="text" class="form-control" name="comments_20" id="comments_20" value="{{ !empty($hhhaData['hhavisitnote1']->comments_19) ? $hhhaData['hhavisitnote1']->comments_19 : ''}}"></td>
                           </tr>

                           <tr>
                              <td colspan="3" class="bg-black text-white pt-1 pb-1"><b>PROCEDURES</b></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="perineal_care"><input type="checkbox" name="perineal_care" id="perineal_care" value="1" {{ $hhhaData['hhavisitnote1']->perineal_care == 1 ? 'checked' : '' }} class="form-check-input name="> Perineal Care</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="perineal_care_1" id="perineal_care_1" value="1" {{ $hhhaData['hhavisitnote1']->perineal_care_1 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_22" id="comments_21" value="{{ !empty($hhhaData['hhavisitnote1']->comments_21) ? $hhhaData['hhavisitnote1']->comments_21 : ''}}"></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="assist_with_elimination"><input type="checkbox" name="assist_with_elimination" id="assist_with_elimination" value="1" class="form-check-input"{{ $hhhaData['hhavisitnote1']->assist_with_elimination == 1 ? 'checked' : '' }}> Assist with Elimination</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="assist_with_elimination_1" id="assist_with_elimination_1" value="1"{{ $hhhaData['hhavisitnote1']->assist_with_elimination_1 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_22" id="comments_22" value="{{ !empty($hhhaData['hhavisitnote1']->comments_22) ? $hhhaData['hhavisitnote1']->comments_22 : ''}}"></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="catheter_care"><input type="checkbox" name="catheter_care" id="catheter_care" value="1" class="form-check-input" {{ $hhhaData['hhavisitnote1']->catheter_care == 1 ? 'checked' : '' }}> Catheter Care</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="catheter_care_1" id="catheter_care_1" value="1" {{ $hhhaData['hhavisitnote1']->catheter_care_1 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_23" id="comments_23" value="{{ !empty($hhhaData['hhavisitnote1']->comments_23) ? $hhhaData['hhavisitnote1']->comments_23 : ''}}"></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="ostomy_care"><input type="checkbox" name="ostomy_care" id="ostomy_care" value="1" class="form-check-input" {{ $hhhaData['hhavisitnote1']->ostomy_care == 1 ? 'checked' : '' }}> Ostomy Care</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="ostomy_care_1" id="ostomy_care_2" value="1" {{ $hhhaData['hhavisitnote1']->ostomy_care_2 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_24" id="comments_24" value="{{ !empty($hhhaData['hhavisitnote1']->comments_24) ? $hhhaData['hhavisitnote1']->comments_24 : ''}}"></td>
                           </tr>
                           <tr>
                              <td class="labels-group">
                                 <span><b>Record:</b>&nbsp;&nbsp;</span>
                                 <label class="form-check-label" for="Intake"><input type="checkbox" name="Intake" id="Intake" value="1" class="form-check-input" {{ $hhhaData['hhavisitnote1']->Intake == 1 ? 'checked' : '' }}> Intake</label>
                                 <label class="form-check-label" for="Output"><input type="checkbox" name="Output" id="Output" value="1" class="form-check-input" {{ $hhhaData['hhavisitnote1']->Output == 1 ? 'checked' : '' }}> Output</label>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input"></td>
                              <td><input type="text" class="form-control" name="comments_25" id="comments_25" value="{{ !empty($hhhaData['hhavisitnote1']->comments_25) ? $hhhaData['hhavisitnote1']->comments_25 : ''}}"></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="inspect_reinforce_dressing"><input type="checkbox" name="inspect_reinforce_dressing" id="inspect_reinforce_dressing" value="1" class="form-check-input" {{ $hhhaData['hhavisitnote1']->inspect_reinforce_dressing == 1 ? 'checked' : '' }}> Inspect/Reinforce Dressing</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="comments_26" id="comments_26" value="{{ !empty($hhhaData['hhavisitnote1']->comments_26) ? $hhhaData['hhavisitnote1']->comments_26 : ''}}"></td>
                              <td><input type="text" class="form-control" name="refuse_7" id="refuse_7" value="{{ !empty($hhhaData['hhavisitnote1']->refuse_7) ? $hhhaData['hhavisitnote1']->refuse_7 : ''}}"></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="medication_reminders"><input type="checkbox" name="medication_reminders" id="medication_reminders" value="1" class="form-check-input" {{ $hhhaData['hhavisitnote1']->medication_reminders == 1 ? 'checked' : '' }}> Medication Reminder</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="comments_27" id="comments_27" value="{{ !empty($hhhaData['hhavisitnote1']->comments_27) ? $hhhaData['hhavisitnote1']->comments_27 : ''}}"></td>
                              <td><input type="text" class="form-control" name="refuse_8" id="refuse_8" value="{{ !empty($hhhaData['hhavisitnote1']->refuse_8) ? $hhhaData['hhavisitnote1']->refuse_8 : ''}}"></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="medication_assistance"><input type="checkbox" name="medication_assistance" id="medication_assistance" value="1" class="form-check-input" {{ $hhhaData['hhavisitnote1']->Intake == 1 ? 'checked' : '' }}> Medication Assistance</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="comments_28" id="comments_28" value="{{ !empty($hhhaData['hhavisitnote1']->comments_28) ? $hhhaData['hhavisitnote1']->comments_28 : ''}}"></td>
                              <td><input type="text" class="form-control" name="refuse_9" id="refuse_9" value="{{ !empty($hhhaData['hhavisitnote1']->refuse_9) ? $hhhaData['hhavisitnote1']->refuse_9 : ''}}"></td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="input-group clean-input-group">
                                    <label class="input-group-text" for="other_303"><b>Other (specify):</b></label>
                                    <input type="text" name="other_303" id="other_303" value="{{ !empty($hhhaData['hhavisitnote1']->other_303) ? $hhhaData['hhavisitnote1']->other_303 : ''}}" class="form-control">
                                 </div>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refuse_10" id="refuse_10" value="{{ !empty($hhhaData['hhavisitnote1']->refuse_10) ? $hhhaData['hhavisitnote1']->refuse_10 : ''}}"></td>
                              <td><input type="text" class="form-control" name="comments_29" id="comments_29" value="{{ !empty($hhhaData['hhavisitnote1']->comments_29) ? $hhhaData['hhavisitnote1']->comments_29 : ''}}"></td>
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
                              <td colspan="3" class="bg-black text-white pt-1 pb-1"><b class="bg-black text-white fw-bolder p-2">ACTIVITY</b></td>
                           </tr>
                           <tr>
                              <td class="labels-group">
                                 <span><b>Assist with:</b>&nbsp;&nbsp;</span>
                                 <label class="form-check-label" for="ambulation" ><input type="checkbox" name="ambulation" id="ambulation" value="ambulation" {{ $hhhaData['hhavisitnote1']->ambulation == 'ambulation' ? 'checked' : '' }} class="form-check-input"> Ambulation</label>
                                 <label class="form-check-label" for="w_c"><input type="checkbox" name="w_c" id="" value="w_c" class="form-check-input" {{ $hhhaData['hhavisitnote1']->w_c == 'w_c' ? 'checked' : '' }}> W/C</label>
                                 <label class="form-check-label" for="walker"><input type="checkbox" name="walker" id="walker" value="walker" class="form-check-input" {{ $hhhaData['hhavisitnote1']->walker == 'walker' ? 'checked' : '' }}> Walker</label>
                                 <label class="form-check-label" for="cane"><input type="checkbox" name="cane" id="" value="cane" class="form-check-input" {{ $hhhaData['hhavisitnote1']->cane == 'cane' ? 'checked' : '' }}> Cane</label>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refuse_11" id="refuse_11" value="1" {{ $hhhaData['hhavisitnote1']->refuse_11 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_30" id="comments_30" value="{{ !empty($hhhaData['hhavisitnote1']->comments_29) ? $hhhaData['hhavisitnote1']->comments_29 : ''}}"></td>
                           </tr>
                           <tr>
                              <td class="labels-group">
                                 <span><b>Assist with Mobility:</b>&nbsp;&nbsp;</span>
                                 <label class="form-check-label" for="gait_belt"><input type="checkbox" name="gait_belt" id="gait_belt" value="1" class="form-check-input" {{ $hhhaData['hhavisitnote1']->gait_belt == 1 ? 'checked' : '' }}> Gait Belt</label>
                                 <label class="form-check-label" for="chair"><input type="checkbox" name="chair" id="" value="1" class="form-check-input" {{ $hhhaData['hhavisitnote1']->chair == 1 ? 'checked' : '' }}> Chair</label>
                                 <label class="form-check-label" for="bed"><input type="checkbox" name="bed" id="bed" value="1"class="form-check-input" {{ $hhhaData['hhavisitnote1']->bed == 1 ? 'checked' : '' }}> Bed</label>
                                 <label class="form-check-label" for="dangle"><input type="checkbox" name="dangle" id="dangle" value="1" class="form-check-input" {{ $hhhaData['hhavisitnote1']->dangle == 1 ? 'checked' : '' }}> Dangle</label>
                                 <label class="form-check-label" for="commod"><input type="checkbox" name="commod" id="commod" value="1"class="form-check-input" {{ $hhhaData['hhavisitnote1']->commod == 1 ? 'checked' : '' }}> Commode</label>
                                 <label class="form-check-label" for="shower"><input type="checkbox" name="shower" id="shower" value="1" class="form-check-input" {{ $hhhaData['hhavisitnote1']->shower == 1 ? 'checked' : '' }}> Shower</label>
                                 <label class="form-check-label" for="tub"><input type="checkbox" name="tub" id="tub" value="1" class="form-check-input" {{ $hhhaData['hhavisitnote1']->tub == 1 ? 'checked' : '' }}> Tub</label>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refuse_13" id="" value="1" {{ $hhhaData['hhavisitnote1']->refuse_13 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_31" id="comments_31" value="{{ !empty($hhhaData['hhavisitnote1']->comments_29) ? $hhhaData['hhavisitnote1']->comments_29 : ''}}"></td>
                           </tr>
                           <tr>
                              <td class="labels-group">
                                 <span><b>ROM:</b>&nbsp;&nbsp;</span>
                                 <label class="form-check-label" for="active"><input type="radio" name="ROM" class="form-check-input" id="active" value="active" {{ $hhhaData['hhavisitnote1']->ROM == 'active' ? 'checked' : '' }}> Active</label>
                                 <label class="form-check-label" for="passive"><input type="radio" name="ROM" class="form-check-input" id="passive" value="passive" {{ $hhhaData['hhavisitnote1']->ROM == 'passive' ? 'checked' : '' }}> Passive</label>
                                 <br>
                                 <span><b>Arm:</b>&nbsp;&nbsp;</span>
                                 <label class="form-check-label" for="arm_r"><input type="radio" name="Arm" class="form-check-input" id="arm_r" value="r" {{ $hhhaData['hhavisitnote1']->Arm == 'r' ? 'checked' : '' }}> R</label>
                                 <label class="form-check-label" for="arm_l"><input type="radio" name="Arm" class="form-check-input" id="arm_l" value="l" {{ $hhhaData['hhavisitnote1']->Arm == 'l' ? 'checked' : '' }}> L</label>
                                 <br>
                                 <span><b>Leg:</b>&nbsp;&nbsp;</span>
                                 <label class="form-check-label" for="leg_r"><input type="radio" name="Leg" class="form-check-input" id="eg_r" value="1" {{ $hhhaData['hhavisitnote1']->Leg == 1 ? 'checked' : '' }}> R</label>
                                 <label class="form-check-label" for="leg_l"><input type="radio" name="Leg" class="form-check-input" id="leg_l" value="1" {{ $hhhaData['hhavisitnote1']->Leg == 1 ? 'checked' : '' }}> L</label>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_14" id="refused_14" value="1" {{ $hhhaData['hhavisitnote1']->refused_14 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_32" id="comments_32" value="{{ !empty($hhhaData['hhavisitnote1']->comments_32) ? $hhhaData['hhavisitnote1']->comments_32 : ''}}"></td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="d-block"><label class="form-check-label" for="encourange_reposition"><input type="checkbox"  name="reposition" id="encourange_reposition" value="1" class="form-check-input" {{ $hhhaData['hhavisitnote1']->reposition == 1 ? 'checked' : '' }}> Reposition</label></div>
                                 <div class="d-block"><label class="form-check-label" for="encourange_reposition"><input type="checkbox"  name="reposition" id="encourange_reposition" value="1" class="form-check-input" {{ $hhhaData['hhavisitnote1']->reposition == 1 ? 'checked' : '' }}> Encourage Position Change</label></div>
                                 <div class="input-group clean-input-group">
                                    <label class="input-group-text m-0" for="every_hrs">Every</label>
                                    <input type="number"  name="every_hrs" id="every_hrs" value="{{ !empty($hhhaData['hhavisitnote2']->every_hrs) ? $hhhaData['hhavisitnote2']->every_hrs : ''}}" class="form-control">
                                    <label class="input-group-text m-0">hrs</label>
                                 </div>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_15" id="refused_15" value="1" {{ $hhhaData['hhavisitnote2']->refused_15 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_33" id="comments_33" value="{{ !empty($hhhaData['hhavisitnote2']->comments_33) ? $hhhaData['hhavisitnote2']->comments_33 : ''}}"></td>
                           </tr>
                           <tr>
                              <td class="labels-group">
                                 <span><b>Exercise - Per:</b>&nbsp;&nbsp;</span>
                                 <label class="form-check-label" for="exercise_pt"><input type="checkbox" name="exercise_pt" id="exercise_pt" value="pt" class="form-check-input" {{ $hhhaData['hhavisitnote2']->exercise_pt == 1 ? 'checked' : '' }}> PT</label>
                                 <label class="form-check-label" for="exercise_ot"><input type="checkbox" name="exercise_ot" id="exercise_ot" value="ot" class="form-check-input" {{ $hhhaData['hhavisitnote2']->exercise_ot == 1 ? 'checked' : '' }}> OT</label>
                                 <label class="form-check-label" for="exercise_slp"><input type="checkbox" name="exercise_slp" id="exercise_slp" value="slp" class="form-check-input" {{ $hhhaData['hhavisitnote2']->exercise_slp == 1 ? 'checked' : '' }}> SLP Care Plan</label>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_17" id="refused_17" value="1" {{ $hhhaData['hhavisitnote2']->refused_17 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_34" id="comments_35" value="{{ !empty($hhhaData['hhavisitnote2']->comments_34) ? $hhhaData['hhavisitnote2']->comments_34 : ''}}"></td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="input-group clean-input-group">
                                    <label class="input-group-text fw-semibold" for="other_408">Other (specify):</label>
                                    <input type="text" name="other_408" id="other_408" value="{{ !empty($hhhaData['hhavisitnote2']->other_408) ? $hhhaData['hhavisitnote2']->other_408 : ''}}" class="form-control">
                                 </div>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_18" id="refused_18" value="1" {{ $hhhaData['hhavisitnote2']->refused_18 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_36" id="comments_36" value="{{ !empty($hhhaData['hhavisitnote2']->comments_36) ? $hhhaData['hhavisitnote2']->comments_36 : ''}}"></td>
                           </tr>

                           <!-- NUTRITION -->
                           <tr>
                              <td colspan="3" class="bg-black text-white pt-1 pb-1"><b>NUTRITION</b></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="meal_preparation"><input type="checkbox" name="meal_preparation" id="meal_preparation" value="1" class="form-check-input"> Meal Preparation</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_19" id="refused_19" value="1" {{ $hhhaData['hhavisitnote2']->refused_19 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_37" id="comments_37" value="{{ !empty($hhhaData['hhavisitnote2']->comments_37) ? $hhhaData['hhavisitnote2']->comments_37 : ''}}"></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for=""><input type="checkbox" name="assist_feeding" id="assist_feeding" value="assist_feeding" class="form-check-input"> Assist with Feeding</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_20" id="refused_20" value="1"></td>
                              <td><input type="text" class="form-control" name="comments_38" id="comments_38" value="{{ !empty($hhhaData['hhavisitnote2']->comments_38) ? $hhhaData['hhavisitnote2']->comments_38 : ''}}"></td>
                           </tr>
                           <tr>
                              <td class="labels-group">
                                 <label class="form-check-label" for="limit"><input type="radio" name="radio_1" id="limit" value="limit" class="form-check-input" {{ $hhhaData['hhavisitnote2']->radio_1 == 'limit' ? 'checked' : '' }}> Limit</label>
                                 <label class="form-check-label" for="encourage_fluides"><input type="radio" name="radio_1" id="encourage_fluides" value="encf" class="form-check-input" {{ $hhhaData['hhavisitnote2']->radio_1 == 'encf' ? 'checked' : '' }}> Encourage Fluides</label>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_21" id="refused_21" value="1" {{ $hhhaData['hhavisitnote2']->refused_21 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_39" id="comments_39" value="{{ !empty($hhhaData['hhavisitnote2']->comments_39) ? $hhhaData['hhavisitnote2']->comments_39 : ''}}"></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="grocery_shopping"><input type="checkbox" name="grocery_shopping" id="grocery_shopping" value="1" class="form-check-input"> Grocery Shopping</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_22" id="refused_22" value="1" {{ $hhhaData['hhavisitnote2']->refused_22 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_40" id="comments_40" value="{{ !empty($hhhaData['hhavisitnote2']->comments_40) ? $hhhaData['hhavisitnote2']->comments_40 : ''}}"></td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="input-group clean-input-group">
                                    <label class="input-group-text fw-semibold" for="other_500">Other (specify):</label>
                                    <input type="text" name="other_500" id="other_500" value="{{ !empty($hhhaData['hhavisitnote2']->other_500) ? $hhhaData['hhavisitnote2']->other_500 : ''}}" class="form-control">
                                 </div>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_23" id="refused_23" value="1" {{ $hhhaData['hhavisitnote2']->refused_23 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_41" id="comments_41" value="{{ !empty($hhhaData['hhavisitnote2']->comments_41) ? $hhhaData['hhavisitnote2']->comments_41 : ''}}"></td>
                           </tr>

                           <!-- OTHER -->
                           <tr>
                              <td colspan="3" class="bg-black text-white pt-1 pb-1"><b>OTHER</b></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="other_100"><input type="checkbox" name="other_100" id="other_100" value="1" class="form-check-input"> Wash Clothes</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_24" id="refused_24" value="1"></td>
                              <td><input type="text" class="form-control" name="comments_42" id="comments_42" value="{{ !empty($hhhaData['hhavisitnote2']->comments_42) ? $hhhaData['hhavisitnote2']->comments_42 : ''}}"></td>
                           </tr>
                           <tr>
                              <td class="labels-group">
                                 <span><b>Light Housekeeping:</b>&nbsp;&nbsp;</span>
                                 <label class="form-check-label" for="bedroom"><input type="checkbox" name="bedroom" id="bedroom" value="1" class="form-check-input" {{ $hhhaData['hhavisitnote2']->bedroom == 1 ? 'checked' : '' }}> Bedroom</label>
                                 <label class="form-check-label" for="bathroom"><input type="checkbox" name="bathroom" id="bathroom" value="1" class="form-check-input" {{ $hhhaData['hhavisitnote2']->bathroom == 1 ? 'checked' : '' }}> Bathroom</label>
                                 <label class="form-check-label" for="kitchen"><input type="checkbox" name="kitchen" id="kitchen" value="1" class="form-check-input" {{ $hhhaData['hhavisitnote2']->kitchen == 1 ? 'checked' : '' }}> Kitchen</label>
                                 <label class="form-check-label" for="change_bed_linen"><input type="checkbox" name="change_bed_linen" id="change_bed_linen" value="1" class="form-check-input" {{ $hhhaData['hhavisitnote2']->change_bed_linen == 1 ? 'checked' : '' }}> Change Bed Linen</label>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_25" id="refused_25" value="1" {{ $hhhaData['hhavisitnote2']->refused_23 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_43" id="comments_43" value="{{ !empty($hhhaData['hhavisitnote2']->comments_43) ? $hhhaData['hhavisitnote2']->comments_43 : ''}}"></td>
                           </tr>
                           <tr>
                              <td><label class="form-check-label" for="equipment_care"><input type="checkbox" name="equipment_care" id="equipment_care" value="1" class="form-check-input"> Equipment Care</label></td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_26" id="refused_26" value="1" {{ $hhhaData['hhavisitnote2']->refused_26 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_44" id="comments_44" value="{{ !empty($hhhaData['hhavisitnote2']->comments_44) ? $hhhaData['hhavisitnote2']->comments_44 : ''}}"></td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="input-group clean-input-group">
                                    <label class="input-group-text fw-semibold" for="other_50">Other (specify):</label>
                                    <input type="text" name="other_50" id="other_50" value="{{ !empty($hhhaData['hhavisitnote2']->other_50) ? $hhhaData['hhavisitnote2']->other_50 : ''}}" class="form-control">
                                 </div>
                              </td>
                              <td class="text-center"><input type="checkbox" class="form-check-input" name="refused_27" id="refused_27" value="1" {{ $hhhaData['hhavisitnote2']->refused_27 == 1 ? 'checked' : '' }}></td>
                              <td><input type="text" class="form-control" name="comments_45" id="comments_44" value="{{ !empty($hhhaData['hhavisitnote2']->comments_45) ? $hhhaData['hhavisitnote2']->comments_45 : ''}}"></td>
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
                        <textarea name="CommentsNotes" id="CommentsNotes" cols="30" rows="6" class="form-control">{{ !empty($hhhaData['hhavisitnote2']->CommentsNotes) ? $hhhaData['hhavisitnote2']->CommentsNotes : ''}}</textarea>
                     </td>
                  </tr>
                  <tr><td colspan="2" class="p-0"></td></tr>
                  <tr>
                     <td colspan="2" class="text-center labels-group">
                        <span><b>Coordination of Care with:</b></span>
                        <label class="form-check-label" for="sn"><input type="checkbox" name="sn" id="sn" value="sn" {{ $hhhaData['hhavisitnote2']->sn == 'sn' ? 'checked' : '' }} class="form-check-input"> SN</label>
                        <label class="form-check-label" for="therapy"><input type="checkbox" name="therapy" id="therapy" value="therapy" {{ $hhhaData['hhavisitnote2']->therapy == 'therapy' ? 'checked' : '' }} class="form-check-input"> Therapy</label>
                        <label class="form-check-label" for="therapy"><input type="checkbox" name="pt" id="pt" value="pt" {{ $hhhaData['hhavisitnote2']->pt == 'pt' ? 'checked' : '' }} class="form-check-input"> PT</label>
                        <label class="form-check-label" for="ot"><input type="checkbox" name="ot" id="ot" value="ot" {{ $hhhaData['hhavisitnote2']->ot == 'ot' ? 'checked' : '' }} class="form-check-input"> OT</label>
                        <label class="form-check-label" for="slp"><input type="checkbox" name="slp" id="slp" value="slp" {{ $hhhaData['hhavisitnote2']->slp == 'slp' ? 'checked' : '' }} class="form-check-input"> SLP</label>
                        <label class="form-check-label" for="family"><input type="checkbox" name="family" id="family" {{ $hhhaData['hhavisitnote2']->family == 'family' ? 'checked' : '' }} value="family" class="form-check-input"> Family</label>
                        <label class="form-check-label" for="patient"><input type="checkbox" name="patient" id="patient" value="patient" {{ $hhhaData['hhavisitnote2']->patient == 'patient' ? 'checked' : '' }} class="form-check-input"> Patient</label>
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
                                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nurseFormModal">Add Signature</button>
                                <div id="nurseSignatureImageContainer" style="display: none;">
                                    <img id="nurseSignatureImage" src="" alt="Nurse's Signature">
                                    <input type="hidden" id="nurseSignaturePath" name="nurseSignaturePath" value="">
                                </div>
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
                                 <label class="input-group-text m-0" for="patientsign"><b>Patient</b></label>
                                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nurseFormModal">Add Signature</button>
                                    <div id="nurseSignatureImageContainer" style="display: none;">
                                        <img id="nurseSignatureImage" src="" alt="Nurse's Signature">
                                        <input type="hidden" id="nurseSignaturePath" name="nurseSignaturePath" value="{{ !empty($hhhaData['hhavisitnote1']->comments_29) ? $hhhaData['hhavisitnote1']->comments_29 : ''}}">
                                    </div>
                              </div>
                           </div>
                           <div class="col-lg-2 col-md-4">
                              <div class="input-group clean-input-group">
                                 <input type="text" class="form-control" for="patient_date">
                                 <label class="input-group-text m-0" name="patient_date" id="patient_date" value="{{ !empty($hhhaData['hhavisitnote1']->comments_29) ? $hhhaData['hhavisitnote1']->comments_29 : ''}}"><i>Date</i></label>
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
            <div class=" mt-4">
               <button type="submit" class=" btn btn-primary btn-block active" >Save</button>
           </div>
         </form>
      </div>
   </div>

   <script src="bs/js/bootstrap.min.js"></script>
   @include('signature')
</main>

@endsection
