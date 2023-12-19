<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Vital Signs</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
   <style>:root{--bs-border-width:1px;--bs-border-color:#ccc;}@media print{nav{display:none}.h1,h1{font-size:1.9rem}.h2,h2{font-size:1.5rem}body{-webkit-print-color-adjust:exact;print-color-adjust:exact}h2.d-md-flex{display:flex!important}h2>.border-md-end-1{border-right:1px var(--bs-border-style) var(--bs-border-color)!important}.row>.col-auto>.input-group>.form-control{max-width:130px}}.bg-secondary-subtle{background-color:#eee!important}.navbar-expand-lg .navbar-nav{flex-direction:row;column-gap:20px}body{background-color:#fff}.nm-3{margin-left:-15px!important;margin-right:-15px!important}.nmt-1{margin-top:-1px!important}.nmb-1{margin-bottom:-1px!important}.labels-mt-1 label{margin-top:5px}.clean-input-group{align-items:flex-end;column-gap:10px}.clean-input-group .form-control,.clean-input-group .input-group-text{border-radius:0;border:0;padding:0;background: none;}.clean-input-group .form-control{border-bottom:var(--bs-border-width) solid var(--bs-border-color)}.clean-input-group .form-control:focus{border-color:transparent;box-shadow:none;border-bottom:var(--bs-border-width) solid #000}#oasis-e-form img{max-width:100%}#oasis-e-form p:last-child{margin-bottom:0}#oasis-e-form .form-fields-wrapper{border:2px solid var(--bs-border-color);border-radius:15px;overflow:hidden}#oasis-e-form .table td{padding-left:1rem;padding-right:1rem}#oasis-e-form .table td>.d-block{margin:5px 0}#oasis-e-form .table td>.d-block .form-check-input,#oasis-e-form td table td .form-check-input{margin-right:5px}#oasis-e-form .table:not(.default-td)>:not(caption)>*>*{background-color:transparent;padding:1rem}#oasis-e-form h3{font-size:1.4em;font-weight:700}#oasis-e-form h4{font-weight:700;margin:0;font-size:1.2em}#oasis-e-form h5{font-size:1em;font-weight:700}#oasis-e-form table h5,#oasis-e-form td table{margin:0}#oasis-e-form label.form-check-label{font-weight:500}#oasis-e-form .labels-group label{margin-right:10px}@media (max-width:1199px){#oasis-e-form td table.table-bordered td{display:table-cell}#oasis-e-form td table.stack-padding td{padding-left:10px;padding-right:10px}}@media (max-width:991px){#oasis-e-form .table td[data-title]::before{content:attr(data-title);display:block;font-weight:700;text-align:center}#oasis-e-form .labels-group{margin-top:5px}.mt-md-2{margin-top:10px!important}}@media (min-width:992px){.nmt-lg-1{margin-top:-1px!important}.border-lg-end-2{border-right:2px var(--bs-border-style) var(--bs-border-color)!important}}@media (min-width:768px){.border-md-end-2{border-right:2px var(--bs-border-style) var(--bs-border-color)!important}.border-md-end-1{border-right:1px var(--bs-border-style) var(--bs-border-color)!important}}.form-holder h2>span{padding:5px 15px}@media (max-width:1199px){.d-block-on-xl{display: block!important;width: 100% !important;}}@media (max-width:767px){.form-holder h2>span{display:block}#oasis-e-form .table-responsive{max-width:calc(540px - var(--bs-gutter-x))}}@media (max-width:575px){#oasis-e-form .table-responsive{max-width:calc(100vw - var(--bs-gutter-x))}}table tr th, table tr td {white-space: wrap!important;}.table-py-8 td{padding-top: 8px!important;padding-bottom: 8px!important;}.table-py-5 td{padding-top: 5px!important;padding-bottom: 5px!important;}.border-1{border: 1px solid var(--bs-border-color)!important;}</style>
</head>

<body>

   <div class="container pt-5">
    <div class="form-holder">
<!-- VITAL SIGNS -->
<tr>
    <td class="text-center bg-dark text-white py-2"><b>VITAL SIGNS</b></td>
</tr>
<tr>
    <td class="p-0">
        <table class="table table-borderless">
            <tr>
                <td class="d-block-on-xl">
                    <div>
                        <div class="d-inline-flex flex-grow-1">
                            <b>Temperature:</b>
                            <div class="clean-input-group flex-grow-1 ms-2">
                                <input type="text" name="Temperature" id="" class="form-control">
                            </div>
                            <span>F</span>
                        </div>
                        <label class="form-check-label ms-2"><input type="radio" name="otrat" class="form-check-input">Oral</label>
                        <label class="form-check-label ms-2"><input type="radio" name="otrat" class="form-check-input">Temporal/Forehead</label>
                        <label class="form-check-label ms-2"><input type="radio" name="otrat" class="form-check-input">Rectal</label>
                        <label class="form-check-label ms-2"><input type="radio" name="otrat" class="form-check-input">Axillary</label>
                        <label class="form-check-label ms-2"><input type="radio" name="otrat" class="form-check-input">Tympanic</label>
                    </div>

                    <div class="mt-2">
                        <b>Pulse:</b>
                        <div class="d-inline-flex ms-2">
                            <label class="form-check-label"><input type="checkbox" class="form-check-input">Apical</label>
                            <div class="clean-input-group flex-grow-1">
                                <input type="text" name="Apical" id="" class="form-control">
                            </div>
                        </div>
                        <div class="d-inline-flex ms-2">
                            <label class="form-check-label"><input type="checkbox" class="form-check-input">Brachial</label>
                            <div class="clean-input-group flex-grow-1">
                                <input type="text" name="Brachial" id="" class="form-control">
                            </div>
                        </div>
                        <label class="form-check-label ms-2"><input type="radio" name="PulseRI" class="form-check-input">Regular</label>
                        <label class="form-check-label ms-2"><input type="radio" name="PulseRI" class="form-check-input">Irregular</label>
                        <div class="d-inline-flex ms-2">
                            <label class="form-check-label"><input type="checkbox" class="form-check-input">Radial</label>
                            <div class="clean-input-group flex-grow-1">
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </div>
                        <div class="d-inline-flex ms-2">
                            <label class="form-check-label"><input type="checkbox" class="form-check-input">Carotid</label>
                            <div class="clean-input-group flex-grow-1">
                                <input type="text" id="" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="mt-2">
                        <b>Pulse Oximetry:</b>
                        <div class="d-inline-flex flex-grow-1 ms-2">
                            <span>at rest</span>
                            <div class="clean-input-group flex-grow-1 ms-2">
                                <input type="text" id="" class="form-control">
                            </div>
                            <span>%</span>
                        </div>
                        <div class="d-inline-flex flex-grow-1 ms-3">
                            <span>after activity</span>
                            <div class="clean-input-group flex-grow-1 ms-2">
                                <input type="text" id="" class="form-control">
                            </div>
                            <span>%</span>
                        </div>
                        <div class="d-flex flex-grow-1 ms-3">
                            <span>(specify activity):</span>
                            <div class="clean-input-group flex-grow-1 ms-2">
                                <input type="text" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                </td>






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
                                  <label class="form-check-label" for="oral"><input type="radio" name="temp" id="oral" value="" class="form-check-input"> Oral</label>
                                  <label class="form-check-label" for="axillary"><input type="radio" name="temp" id="axillary" value="" class="form-check-input"> Axillary</label>
                                  <label class="form-check-label" for="tympanic"><input type="radio" name="temp" id="tympanic" value="" class="form-check-input"> Tympanic</label>
                                  <label class="form-check-label" for="temporal"><input type="radio" name="temp" id="temporal" value="" class="form-check-input"> Temporal/Forehead</label>
                                  <label class="form-check-label" for="rectal"><input type="radio" name="tem" id="rectal" value="" class="form-check-input"> Rectal</label>
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
                                     <input type="text" name="Pulse" class="form-control">
                                  </div>
                               </td>
                               <td class="labels-group">
                                  <label class="form-check-label" for="radial"><input type="radio" name="pul" id="radial" value="" class="form-check-input"> Radial</label>
                                  <label class="form-check-label" for="apical"><input type="radio" name="pul" id="apical" value="" class="form-check-input"> Apical</label>
                                  <label class="form-check-label" for="brachial"><input type="radio" name="pul" id="brachial" value="" class="form-check-input"> Brachial</label>
                                  <label class="form-check-label" for="carotid"><input type="radio" name="pul" id="carotid" value="" class="form-check-input"> Carotid</label>
                                  <label class="form-check-label" for="p_regular"><input type="radio" name="pul" id="p_regular" value="" class="form-check-input"> Regular</label>
                                  <label class="form-check-label" for="p_irregular"><input type="radio" name="pul" id="p_irregular" value="" class="form-check-input">Irregular</label>
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
                                     <input type="text" name="Respirations" class="form-control">
                                  </div>
                               </td>
                               <td class="labels-group">
                                  <label class="form-check-label" for="regular"><input type="radio" name="respiration" id="regular" value="" class="form-check-input"> Regular</label>
                                  <label class="form-check-label" for="irregular"><input type="radio" name="respiration" id="irregular" value="" class="form-check-input"> Irregular</label>
                               </td>
                            </tr>
                         </table>
                      </td>
                      
                      <td>
                         <div class="input-group">
                            <label class="input-group-text" for="Weight">Weight:</label>
                            <input type="text" name="Weight" id="Weight" value="Weight" class="form-control">
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
                                           <label class="input-group-text" for="blood_pressure_right">Right:</label>
                                           <input type="text" name="blood_pressure_right" id="blood_pressure_right" value="" class="form-control">
                                        </div>
                                     </div>
                                     <div class="col">
                                        <div class="input-group">
                                           <label class="input-group-text" for="blood_pressure_left">Left:</label>
                                           <input type="text" name="blood_pressure_left" id="blood_pressure_left" value="" class="form-control">
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
                                     <input style="max-width: 120px;" type="text" name="apnea_periods" id="apnea_periods" value="" class="form-control">
                                     <label class="input-group-text" for="">sec.</label>
                                  </div>
                               </td>
                               <td class="labels-group">
                                  <label class="form-check-label" for="apnea_periods_observed"><input type="radio" name="ApneaPeriods" id="apnea_periods_observed" value="" class="form-check-input"> Observed</label>
                                  <label class="form-check-label" for="apnea_periods_reported"><input type="radio" name="ApneaPeriods" id="apnea_periods_reported" value="" class="form-check-input"> Reported</label>
                               </td>
                            </tr>
                         </table>
                      </td>
                      <td class="labels-group">
                         <label class="form-check-label" for="apnea_periods_actual"><input type="radio" name="ApneaPeriods" id="apnea_periods_actual" value="" class="form-check-input"> Actual</label>
                         <label class="form-check-label" for="reported_apnea_periods"><input type="radio" name="ApneaPeriods" id="reported_apnea_periods" value="" class="form-check-input"> Reported</label>
                      </td>
                      <td class="labels-group">
                         <label class="form-check-label" for="apnea_periods_lying"><input type="radio" name="ApneaPeriods" id="apnea_periods_lying" value="" class="form-check-input"> Lying</label>
                         <label class="form-check-label" for="apnea_periods_standing"><input type="radio" name="ApneaPeriods" id="apnea_periods_standing" value="" class="form-check-input"> Standing</label>
                         <label class="form-check-label" for="apnea_periods_sitting"><input type="radio" name="ApneaPeriods" id="apnea_periods_sitting" value="" class="form-check-input"> Sitting</label>
                      </td>
                   </tr>
                </table>
            </div>
        </div>
     
     </body>
     </html>