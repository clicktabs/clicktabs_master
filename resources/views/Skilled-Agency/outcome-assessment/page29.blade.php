<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Order</title>
    <link rel="stylesheet" href="{{asset('outass/css/style.css')}}">

</head>
<body class="container">
<table class="table table-bordered align-middle default-td not-responsive">
   <table class="table table-bordered align-middle" id="patient-history-print">
    <tr>
       <td class="p-4">
         <div class="row mb-2 fw-bolder border-1 border-secondary">
            <div class="col-md-6 border border-secondary">
               <p>Panient Name:</p>
               <p>Panient DOB:</p>
               <p>Panient Home Address:</p>
               <p>City: | State: | Zip:</p>
               <p>Tel:</p>
               
            </div>
            <div class="col-md-6 border border-secondary">
                <p>Agency Name:</p>
                <p>Agency Address:</p>
                <p>City: | State: | Zip:</p>
                 <p>Tel:</p>
                <p>Fax:</p>
                 
            </div>
         </div>
          <div class="row row-flex align-items-center gy-3">
               
               <p class="fw-bolder" style="font-size: 3em;">Physician Order</p>
             <div class="col-md-6">
                <label for="PhysicianName" class="form-label"><b>Physician's Name:</b></label>
                <input type="text" name="PhysicianName" id="PhysicianName" class="form-control">
             </div>
             <div class="col-md-6">
                <label for="ClientName" class="form-label"><b>Patient Name:</b></label>
                <input type="text" name="ClientName" id="ClientName" class="form-control">
             </div>
          </div>

          <div class="row row-flex align-items-center gy-3 mt-1">
             <div class="col-md-6">
                <label for="Address_1" class="form-label"><b>Address:</b></label>
                <input type="text" name="Address_1" id="Address_1" class="form-control">
             </div>
             <div class="col-md-6">
                <label for="Address_2" class="form-label"><b>Address:</b></label>
                <input type="text" name="Address_2" id="Address_2" class="form-control">
             </div>
          </div>

          <div class="row row-flex align-items-center gy-3 mt-1">
             <div class="col-md-3">
                <label for="Tel_1" class="form-label"><b>Tel, #:</b></label>
                <input type="text" name="Tel_1" id="Tel_1" class="form-control">
             </div>
             <div class="col-md-3">
                <label for="Fax" class="form-label"><b>Fax #:</b></label>
                <input type="text" name="Fax" id="Fax" class="form-control">
             </div>
             <div class="col-md-3">
                <label for="Tel_2" class="form-label"><b>Tel, #:</b></label>
                <input type="text" name="Tel_2" id="Tel_2" class="form-control">
             </div>
             <div class="col-md-3">
                <label for="SSN" class="form-label"><b>SSN #:</b></label>
                <input type="text" name="SSN" id="SSN" class="form-control">
             </div>
          </div>

          <div class="row row-flex align-items-center gy-3 mt-1">
            <div class="col-md-3">
               <label for="NPI" class="form-label"><b>NPI #:</b></label>
               <input type="text" name="NPI" id="NPI" class="form-control">
            </div>
             <div class="col-md-3">
                <label for="ClientDateOfBirth" class="form-label"><b>Patient Date of Birth:</b></label>
                <input type="date" name="ClientDateOfBirth" id="ClientDateOfBirth" class="form-control">
             </div>
             <div class="col-md-3">
                <label for="Date" class="form-label" for="Date"><b>Date:</b></label>
                <input type="date" name="Date" id="Date" class="form-control">
             </div>
             <div class="col-md-3 labels-group">
                <p class="mb-2"><b>Sex:</b></p>
                <label class="form-check-label" for="sex_male"><input type="radio" class="form-check-input" name="sex_male" id="sex_male"> M</label>
                <label class="form-check-label" for="sex_f"><input type="radio" class="form-check-input" name="sex_f" id="sex_f"> F</label>
             </div>
          </div>

          <p class="mt-4 mb-1"><b>RN to Evaluate for Home Health Care Service</b></p>
          <div class="labels-group">
             <label class="form-check-label" for="skilled_nursing"><input type="checkbox" class="form-check-input" name="skilled_nursing" id="skilled_nursing"> Skilled Nursing</label>
             <label class="form-check-label" for="home_health_aide"><input type="checkbox" class="form-check-input" name="home_health_aide" id="home_health_aide"> Home Health Aide</label>
             <label class="form-check-label" for="therapy"><input type="checkbox" class="form-check-input" name="therapy" id="therapy"> Therapy (OT/PT/ST)</label>
             <label class="form-check-label" for="evaluate_other"><input type="checkbox" class="form-check-input" name="evaluate_other" id="evaluate_other"> Other</label>
          </div>

          <div class="row row-flex align-items-center gy-3 mt-1">
             <div class="col-md-6">
                <label for="PrimaryDiagnosis" class="form-label"><b>Primary Diagnosis:</b></label>
                <input type="text" name="PrimaryDiagnosis" id="PrimaryDiagnosis" class="form-control">
             </div>
             <div class="col-md-6">
                <label for="PD_ICD10" class="form-label"><b>ICD10:</b></label>
                <input type="text" name="PD_ICD10" id="PD_ICD10" class="form-control">
             </div>
          </div>

          <div class="row row-flex align-items-center gy-3 mt-1">
             <div class="col-md-6">
                <label for="OtherDiagnosis_1" class="form-label"><b>Other Diagnosis:</b></label>
                <input type="text" name="OtherDiagnosis_1" id="OtherDiagnosis_1" class="form-control">
             </div>
             <div class="col-md-6">
                <label for="OD_ICD10" class="form-label"><b>ICD10:</b></label>
                <input type="text" name="OD_ICD10" id="OD_ICD10" class="form-control">
             </div>
          </div>

          <div class="row row-flex align-items-center gy-3 mt-1">
             <div class="col-md-6">
               <label for="OtherDiagnosis"></label>
                <input type="text" name="OtherDiagnosis" id="OtherDiagnosis" class="form-control">
             </div>
             <div class="col-md-6">
                <div class="input-group">
                   <label class="input-group-text" for="icnd_10">ICD10:</label>
                   <input type="text" name="icnd_10" id="icnd_10" class="form-control">
                </div>
             </div>
          </div>

          <div class="row row-flex align-items-center gy-3 mt-1">
             <div class="col-md-6">
               <label for="OtherDiagnosis_10"></label>
                <input type="text" name="OtherDiagnosis_10" id="OtherDiagnosis_10" class="form-control">
             </div>
             <div class="col-md-6">
                <div class="input-group">
                   <label class="input-group-text" for="OtherDiagnosis_11">ICD10:</label>
                   <input type="text" name="OtherDiagnosis_11" id="OtherDiagnosis_11" class="form-control">
                </div>
             </div>
          </div>

          <div class="row row-flex align-items-center gy-3 mt-1">
             <div class="col-md-6">
               <label for="OtherDiagnosis_12"></label>
                <input type="text" name="OtherDiagnosis_12" id="OtherDiagnosis_12" class="form-control">
             </div>
             <div class="col-md-6">
                <div class="input-group">
                   <label class="input-group-text" for="OtherDiagnosis_13">ICD10:</label>
                   <input type="text" name="OtherDiagnosis_13" id="OtherDiagnosis_13" class="form-control">
                </div>
             </div>
          </div> 

          <div class="row row-flex align-items-center gy-3 mt-1">
             <div class="col-md-6">
               <label for="OtherDiagnosis_14"></label>
                <input type="text" name="OtherDiagnosis_14" id="OtherDiagnosis_14" class="form-control">
             </div>
             <div class="col-md-6">
                <div class="input-group">
                   <label class="input-group-text" for="OtherDiagnosis_15">ICD10:</label>
                   <input type="text" name="OtherDiagnosis_15" id="OtherDiagnosis_15" class="form-control">
                </div>
             </div>
          </div>

          <div class="row row-flex align-items-center gy-3 mt-1">
             <div class="col-md-6">
                <label for="NewMedicationDate" class="form-label"><b>New Medication and Start Date:</b></label>
                  <textarea name="pNewMedicationDate" id="NewMedicationDate"  cols="30" rows="6" class="form-control autolineinput"></textarea>
             </div>
             <div class="col-md-6">
                <label for="OldMedicationsDate" class="form-label"><b>Old Medications and End Date:</b></label>
                <textarea name="OldMedicationsDate" id="OldMedicationsDate"  cols="30" rows="6" class="form-control autolineinput"></textarea>             
             </div>
          </div>
          <div class="row row-flex align-items-center gy-3 mt-1">
             <div class="col-md-6">
                <label for="MdSignature" class="form-label"><b>M.D. Signature:</b></label>
                <input type="text" name="MdSignature" id="MdSignature" class="form-control">

                <div class="d-block mt-2">
                   <label for="MdSignatureDate" class="form-label"><b>Date:</b></label>
                   <input type="text" name="MdSignatureDate" id="MdSignatureDate" class="form-control">
                </div>
             </div>
             <div class="col-md-6">
                <label for="NurseSignature" class="form-label"><b>Nurse's Signature:</b></label>
                <input type="text" name="NurseSignature" id="NurseSignature" class="form-control">

                <div class="d-block mt-2">
                   <label for="NurseSignatureDate" class="form-label"><b>Date:</b></label>
                   <input type="date" name="NurseSignatureDate" id="NurseSignatureDate" class="form-control">
                </div>
             </div>
          </div>
       </td>
    </tr>
 </table>

</body>
</html>