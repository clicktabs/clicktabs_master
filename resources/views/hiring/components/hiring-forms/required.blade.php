
<div class="vs jj ttm vl ou uf na">
  <h1 class="fw-bolder display-4 text-primary text--certer">{{ Auth::user()->organization->name }}</h1>
  <div class="row mb-4">
      <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
          <div class="dk">
             <!-- Table -->
<div class="row mt-1 p-3">
        
  <h1  class="text-danger mb-3 fw-bolder">Documents Required:-<span class=" text-dark">(Upload what you have, someone will get intouch with you soon...)</span> </h1>
  <div class="col-md-5"> 
     <ul>
       <li><span class="text-danger">*</span>SSN Card</li>
       <li><span class="text-danger">*</span>Driver License/Photo ID</li>
       <li><span class="text-danger">*</span>Green Card (If not Citizen)</li>
       <li><span class="text-danger">*</span>HHA Certificate(proof of Experience)</li>
       <li><span class="text-danger">*</span>FBI/BCI (Receipt Proof of Finger Printing)</li>
     </ul>
   </div>
   <div class="col-md-6 ">
     <ul>
       <li><span class="text-danger">*</span>TB Test Result</li>
       <li><span class="text-danger">*</span>Physical Exam Result </li>
       <li><span class="text-danger">*</span>Diploma/GED (for MRDD  Position)</li>
       <li><span class="text-danger">*</span>DD 8hrs Training (for MRDD  Position)</li>
       <li><span class="text-danger">*</span>Medication Certificate (for MRDD  Position)</li>
     </ul>
   </div>
     </div><!--------/ End of Documents Required------->
     {{-- <div class="container">
       <div class="row">
         <form action="storerequireddocs">
         <div class="colo-md-12" style="margin-top: -4px">
           <table id="billing_table" class="display nowrap" style="width: 100%">
             <thead class="bg-[#4133BF] text-[#fff]" style="width: 100%">
             <tr>
                 <th>Document Type</th>
                 <th>Description</th>
                 <th>Created On</th>
                 <th>Created By</th>
                 <th>Action</th>
             </tr>
             </thead>
            </table>
               <!-- Table body -->
               <tbody class="gp le ln">
               <tr>
                 <td></td>
                 <td class="">
                   <div class=""> Kangaroo, Captain</div>
                   </td>
                   <td class="">
                       <div class="">Kangaroo, Captain</div>
                   </td>
                   <td class="">
                     <div class="">Kangaroo, Captain</div>
                   </td>
                   <td class="">
                       <div class="">05/04/23</div>
                   </td>
                     <td class="dx flex flex-wrap gap-[10px]">
                   <a href="#" class="btn ho xi ye">Print</a>
                   </td>
               </tr>
         
               </tbody>
           </table>
           <a class="btn btn-primary" href="#" role="button">Upload Document</a>
       </div> 
       </form>
     </div>
   </div>  --}}
 {{-- <script>
   document.getElementById('file_to_upload').addEventListener('change', (event) => {
     window.selectedFile = event.target.files[0];
     document.getElementById('file_name').innerHTML = window.selectedFile.name;
   });
 
   document.getElementById('upload_file_button').addEventListener('click', () => {
     uploadFile(window.selectedFile);
   });

   // Getting our drop zone by ID
   const dropZone = document.getElementById('drop_zone'); 
   if (window.FileList && window.File) {
     dropZone.addEventListener('dragover', event => {
       event.stopPropagation();
       event.preventDefault();

       // Adding a visual hint that the file is being copied to the window
       event.dataTransfer.dropEffect = 'copy';
     });

     dropZone.addEventListener('drop', event => {
       event.stopPropagation();
       event.preventDefault();

       // Accessing the files that are being dropped to the window
       const files = event.dataTransfer.files;

       // Getting the file from uploaded files list (only one file in our case)
       window.selectedFile = files[0];

       // Assigning the name of file to our "file_name" element
       document.getElementById('file_name').innerHTML = window.selectedFile.name;
     });
   }
 
   function uploadFile(file) {
     var formData = new FormData();
     formData.append('file_to_upload', file);
     
     var ajax = new XMLHttpRequest();
     ajax.upload.addEventListener("progress", progressHandler, false);
     ajax.open('POST', 'uploader.php');
     ajax.send(formData);
   }
 
   function progressHandler(event) {
     var percent = (event.loaded / event.total) * 100;
     document.getElementById('progress_bar').value = Math.round(percent);
     document.getElementById('progress_status').innerHTML = Math.round(percent) + '% uploaded';
   }
 </script>  --}}


 <div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
          </div>
      </div>
  </div>
</div>



