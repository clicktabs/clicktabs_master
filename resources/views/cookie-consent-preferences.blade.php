{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> --}}
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
        </style>
    @endsection
    @section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 mt-3 pd-5">
                <h1 class=" fw-bolder fon">Cookie Consent & Preferences</h1>
                <p>
                    This Site uses Cookies to collect certain information related to your 
                    use of our Site, which may include Personal Information. “Cookies” 
                    are small data files that we send to your computer when you visit our 
                    Site that help us customize your visit to our Site based on your 
                    preferences. Cookies enable our Site to recognize you or your 
                    computer when you return to our Site. We may utilize third parties 
                    to send and manage Cookies. If we have detected an opt-out preference 
                    signal for Avality.com, then it will be honored (this feature is not 
                    available for B2B Tools). Further information is available in the 
                    Click-tabs Privacy Policy.
                </p>
            </div>
            <div class="col-md-4">
                <div class="row mt-5 mx-4">
                    <div class="col-4-sm"  >
                        <button type="button" class="btn btn-primary btn-sm">Continue without Accepting</button>
                    </div>
                    <div class="col-4-sm">
                        <button type="button" class="btn btn-primary btn-sm mt-2">Accept All Cookies</button>
                    </div>
                    <div class="col-4-sm">
                        <button type="button" class="btn btn-primary btn-sm mt-2">Cokkies preferences</button>
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
/* </body>
</html> */