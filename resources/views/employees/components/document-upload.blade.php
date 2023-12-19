<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Infection Control</title>
   <link rel="stylesheet" href="bs/css/bootstrap.min.css">
   <style>
      :root {
         --bs-border-color: #a9a9a9;
      }
      .table>:not(caption)>*>* {
         padding-left: 0.8rem;
         padding-right: 0.81rem;
      }
      .clean-input-group {
         align-items: flex-end;
         column-gap: 10px;
      }
      .clean-input-group .input-group-text, .clean-input-group .form-control {
         border-radius: 0;
         border: 0 none;
         padding: 0;
         background: none;
      }
      .clean-input-group .form-control {
         border-bottom: var(--bs-border-width) solid var(--bs-border-color);
      }
      .clean-input-group .form-control:focus {
         border-color: transparent;
         box-shadow: none;
         border-bottom: var(--bs-border-width) solid #000;
      }
      .table.bg-transparent>:not(caption)>*>* {
         background-color: transparent;
      }
      .has-search {
         position: relative;
      }
      .has-search .form-control {
         padding-right: 2.375rem;
      }

      .has-search .icon-search {
         position: absolute;
         top: 50%;
         right: 10px;
         z-index: 2;
         display: block;
         width: 1.2rem;
         height: 1.2rem;
         line-height: 1.2rem;
         text-align: center;
         pointer-events: none;
         color: #aaa;
         margin-top: -12px;
      }
      .has-search .icon-search svg {
         fill: #aaa;
      }
      .dataTables_paginate {display: flex;justify-content: end;}
      .dataTables_length label, .dataTables_filter label {display: flex;align-items: center;column-gap: 10px;font-weight: 500;}
      .dataTables_length label select {width: 50px;}
      .dataTables_filter label {justify-content: end;}
      .dataTables_filter input.form-control {max-width: 200px;}
      /* Print */
      @media print {
         body {-webkit-print-color-adjust: exact;print-color-adjust: exact;}
         .d-flex,.d-md-flex,.d-lg-flex {
            display: flex!important;
         }
         .form-select {width: 100% !important;min-width: 100% !important;}
      }
  </style>
</head>

<body>
   <div class="container py-5 px-4" style="max-width: 1600px;">
      <div class="border p-3">
         <!-- New Infection Log -->


         
         <form action="" method="post">
            <div class="new-infection mt-4">
               <div class="text-end mb-2">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                     <svg style="width: 14px;fill:#ffffff;top:-2px;position:relative" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path></svg>
                     New Infection Log
                  </button>
               </div>

               <div class="bg-primary-subtle border border-primary rounded-1 p-3">
                  <div class="row g-2 mt-2"></div>

               <p>No Items Selected</p>

               <div class="log-table mt-4">
                  
                  
                  <p class="text-body-secondary text-center" style="display: none;">No infections match filter criteria.</p>
               </div>
            </div>
         </form>




      </div>
   </div>
 
   <!-- Modal -->
   <div class="modal fade modal-xl" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <div>
               <h1 class="fw-bold fs-2 mb-0">Infection Control</h1>
               <p class="mb-0">Log New Patient Infection</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form action="" method="post">
               <!-- Patient Information -->

            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
         </div>
      </div>
      </div>
   </div>

   <!-- jQuery -->
   <script src='js/jquery-3.7.0.js'></script>
   <!-- Data Table JS -->
   <script src='js/jquery.dataTables.min.js'></script>
   <script src='js/dataTables.responsive.min.js'></script>
   <script src='js/dataTables.bootstrap5.min.js'></script>
   <script src="bs/js/bootstrap.min.js"></script>

   <!-- Script JS -->
   <script src="js/script.js"></script>
</body>

</html>