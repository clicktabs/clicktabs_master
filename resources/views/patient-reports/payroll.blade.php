@extends('layouts.app')
@section('extra_css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <style>
        .dataTables_length label{
            width: 250px;
        }
        .dataTables_length label select {
            width: 100px;
        }
        #orderTable {
            padding-top: 30px;
        }
        table.dataTable>tbody>tr.child ul.dtr-details {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .btn-primary {
            background: #6366f1 !important;
        }
        #orderModal {
            display: none;
            height: max-content;
        }
        .jquery-modal .modal a.close-modal {
            top: 15px;
            right: 5px;
        }
        .jquery-modal.blocker.current {
            z-index: 999;
        }

        table, th, td {
             border: 1px solid black;
             border-collapse: collapse;
             padding: 3px;
        }

        mark { background-color:pink; }

        /* Search form */
        .list-autocomplete {
        padding:0; }
        .list-autocomplete em {
        font-style:normal;
        background-color:#e1f2f9;
        }

        .hasNoResults { 
        color:#aaa; }
        .hasNoResults,
        .btn-extra { 
        display:block; 
        padding:10px; }

        .hasNoResults { 
        color:#aaa; }

        .btn-extra { 
        width:100%; 
        border-top:.5px solid #d2d2d2; }


    </style>
@endsection
@section('content')

    <main>
        <div class="vs jj ttm vl ou uf na">
            <div class="row mb-4">
                <!-- Table (Top Channels) -->
                <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
                    <div class="dk">
                        <h1 class=" mb-4 ext-center fw-bolder">Payroll Report Deta</h1>
                        <div class="row mb-[30px]">
                            <div class="col-md-3">
                                <div class="flex gap-[15px]">
                                    <label for="branch">Branch</label>
                                    <select name="branch" class="form-control">
                                        <option>Branch 1</option>
                                        <option>Branch 2</option>
                                        <option>Branch 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="y">
                                    <input class="datepicker s me text-slate-500 hover--text-slate-600 gp xq ol" placeholder="Select dates" data-class="flatpickr-right">
                                    <div class="g w j flex items-center pointer-events-none">
                                        <svg class="oo sl du text-slate-500 ml-3" viewBox="0 0 16 16">
                                            <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="y flex flex-wrap shrink-0 gap-[15px] justify-end">
                                    <button class="btn btn-primary bg-[#6366f1]" type="button">Generate</button>
                                    <button class="btn btn-primary bg-[#6366f1]" type="button">Export Excel</button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <form style="width:200px; auto;">
                                   <div class="dropdown">
                                      <input type="text" class="jAuto form-control" 
                                             placeholder="Search Name" autocomplete="on">
                                      <div class="dropdown-menu">
                                          <i class="hasNoResults">No matching results</i>
                                          <div class="list-autocomplete">
                                              <button type="button" class="dropdown-item">01 - Alpha  Barbuda</button>
                                              <button type="button" class="dropdown-item">02 - Charlie Alpha</button>
                                              <button type="button" class="dropdown-item">03 - Bravo Alpha</button>
                                              <button type="button" class="dropdown-item">04 - Delta</button>
                                          </div>
                                          <button type="button" class="btn-extra">Custom button</button>
                                      </div>
                                    </div>  
                                  </form>
                                  
                            </div>
                        </div>
                        <!-- Table -->

                    <div class="col-md-12">
                        <table>
                            <thead>
                                <tr class="" style="font-size: 1.5em;">
                                    <th>Precedence Home Healthcare | Payroll Details</th>
                                </tr>
                            </thead>
                        </table>
                        <table class="ux ou display nowrap" style="width:100%" id="payroll-export">
                            <thead class="go gv rounded-sm bg-[#4133BF] text-[#fff]">
                                 <tr>
                                    <th></th>
                                    <th class="dx">
                                        <div class="gh gt">Patient Name</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">Employee Name</div>
                                    </th>
                                    <th class="">
                                        <div class="gh gt">From Date</div>
                                    </th>  
                                    <th class="">
                                        <div class="gh gt">To Date</div>
                                    </th>                                   <th class="">
                                        <div class="gh gt">Scheduled Task</div>
                                    </th>
                                    <th class="">
                                        <div class="gh gt">Visit Date</div>
                                    </th>
                                    <th class="">
                                        <div class="gh gt">Time-in</div>
                                    </th>
                                    <th class="">
                                        <div class="gh gt">Time-out</div>
                                    </th>
                                    <th class="">
                                        <div class="gh gt">Travel Start Time</div>
                                    </th>
                                    <th class="">
                                        <div class="gh gt">Travel End Time</div>
                                    </th>
                                    <th class="">
                                        <div class="gh gt">Pay Rate</div>
                                    </th>
                                    <th class="">
                                        <div class="gh gt">Miles</div>
                                    </th>
                                    <th class="">
                                        <div class="gh gt">Milage Rate</div>
                                    </th>
                                    <th class="">
                                        <div class="gh gt">Total pay</div>
                                    </th>
                                </tr>
                                </thead>
                                <!-- Table body -->
                            <tbody class=" text-center text-sm gp le ln">
                                <tr>
                                    <td></td>
                                    <td class="">
                                        <div class="gh gt"> 25410021</div>
                                       
                                    </td>
                                    <td class="">
                                        <div class="gh gt"> 25410021</div>
                                    </td>
                                    <td class="">
                                        <div class="gh gt"> 25410021</div>
                                    </td>
                                   <td class="">
                                    <div class="gh gt"> 25410021</div>
                                    </td>
                                    <td class="">
                                        <div class="gh gt"> 25410021</div>
                                    </td>
                                    <td class="">
                                        <div class="gh gt"> 25410021</div>
                                    </td>
                                    <td class="">
                                        <div class="gh gt"> 25410021</div>
                                    </td>
                                    <td class="">
                                        <div class="gh gt"> 25410021</div>
                                    </td>
                                    <td class="">
                                        <div class="gh gt"> 25410021</div>
                                    </td>
                                    <td class="">
                                        <div class="gh gt"> 25410021</div>
                                    </td>
                                    <td class="">
                                        <div class="gh gt"> 25410021</div>
                                    </td>
                                    <td class="">
                                        <div class="gh gt"> 25410021</div>
                                    </td>
                                    <td class="">
                                        <div class="gh gt"> 25410021</div>
                                    </td>
                                    <td class="">
                                        <div class="gh gt"> 25410021</div>
                                    </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </main>

@endsection
@section('extra_js')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script>
        $(document).ready(function () {
            let dataTable = $('#orderTable').DataTable({
                responsive: {
                    details: {
                        type: 'column'
                    }
                },
                columnDefs: [ {
                    className: 'dtr-control',
                    orderable: false,
                    targets:   0
                } ],
                order: [ 1, 'asc' ],
            });

            $('.edit').click(function () {
                $('#orderModal').modal({
                    fadeDuration: 100
                });
            });
        });

        //code = 2k minified

function createAuto (i, elem) {

var input = $(elem);
var dropdown = input.closest('.dropdown');
var listContainer = dropdown.find('.list-autocomplete');
var listItems = listContainer.find('.dropdown-item');
var hasNoResults = dropdown.find('.hasNoResults');

listItems.hide();
listItems.each(function() {
     $(this).data('value', $(this).text() );  
     //!important, keep this copy of the text outside of keyup/input function
});

input.on("input", function(e){
    
    if((e.keyCode ? e.keyCode : e.which) == 13)  {
        $(this).closest('.dropdown').removeClass('open').removeClass('in');
        return; //if enter key, close dropdown and stop
    }
    if((e.keyCode ? e.keyCode : e.which) == 9) {
        return; //if tab key, stop
    }

  
    var query = input.val().toLowerCase();

    if( query.length > 1) {

        dropdown.addClass('open').addClass('in');

        listItems.each(function() {
         
          var text = $(this).data('value');             
          if ( text.toLowerCase().indexOf(query) > -1 ) {

            var textStart = text.toLowerCase().indexOf( query );
            var textEnd = textStart + query.length;
            var htmlR = text.substring(0,textStart) + '<em>' + text.substring(textStart,textEnd) + '</em>' + text.substring(textEnd+length);
            $(this).html( htmlR );               
            $(this).show();

          } else { 
          
            $(this).hide(); 
          
          }
        });
      
        var count = listItems.filter(':visible').length;
        ( count > 0 ) ? hasNoResults.hide() : hasNoResults.show();

    } else {
        listItems.hide();
        dropdown.removeClass('open').removeClass('in');
        hasNoResults.show();
    }
});

  listItems.on('click', function(e) {
    var txt = $(this).text().replace(/^\s+|\s+$/g, "");  //remove leading and trailing whitespace
    input.val( txt );
    dropdown.removeClass('open').removeClass('in');
    });

}

$('.jAuto').each( createAuto );


$(document).on('focus', '.jAuto', function() {
 $(this).select();  // in case input text already exists
});


    </script>
@endsection