@extends('layouts.app')

@section('extra_css')
<link rel="stylesheet" href="{{ asset('assets/css/patients-admission.css') }}"/>
{{-- <link rel="stylesheet" href="{{ asset('assets/css/patient/communication/style.css') }}"/> --}}
<link rel="stylesheet" href="{{ asset('assets/hiring/style.css') }}"/>

<style>
.application-title h2 {
text-align: center;
padding: 20px 0;
}

.application-title h6 {
font-size: 17px;
}

.employee_application input {
margin-right: 5px;
}

.employee_application .btn-primary{
background-color: #0b5ed7;
border-color: #0a58ca;
}
.employee_application .sub_heading {
font-size: 18px;
font-weight: 500;
margin-right: 10px;
}
.mt-3_5 {
margin-top: 20px !important;
}
.overflow {
overflow: hidden;
}
.overflow-x {
overflow-x: auto;
}
table tr {
white-space: wrap;
}
</style>
@endsection
@section('content')

<div class="vs">
<div class="container-fluid">
<div class="header bg-[#4133BF]">
<div class="logo">
<img src="{{ asset('assets/images/logo.png') }}"/>
</div>
<div class="header_content">
<p>On Boarding New Employee</p>
</div>
</div>

<div class="main_wrapper">
<div class="container-full">
<div class="row">
<div class="col-lg-12">
<div class="main_content pb-[50px]">
    <div id="tabs">
        <div class="main_content_nav">
            <ul class="bg-[#4133BF]">
                <li><a href="#tabs-application">Application</a></li>
                <li><a href="#tabs-w-9">I-9</a></li>
                <li><a href="#tabs-wfour">W-4</a></li>
                <li><a href="#tabs-itfour">IT-4</a></li>
                <li><a href="#tabs-ethics">Ethics</a></li>
                <li><a href="#tabs-Addendum">Addendum</a></li>
                <li><a href="#tabs-Confidentially">Confidentially</a></li>
                <li><a href="#tabs-COVID-19">COVID-19</a></li>
                <li><a href="#tabs-Health">Health Statement</a></li>
                <li><a href="#tabs-Hepatitis">Hepatitis B</a></li>
                <!-- <li><a href="#tabs-Coronavirus">Coronavirus Screening</a></li> -->
                <!-- <li><a href="#tabs-Memo">Employee Handbook</a></li> -->
                <li><a href="#tabs-Non-Compete">Non-Compete</a></li>
                <!-- <li><a href="#tabs-Reference">Reference</a></li> -->
                <li><a href="#tabs-TB">TB Screening</a></li>
                <li><a href="#tabs-required">Required Documents</a></li>
                
                

                
                
                
            </ul>
        </div>
       
            <div class="px-[15px]" id="tabs-application">
                <div class="">
                    @include('hiring.components.hiring-forms.application_form')
                </div>
            </div>
                <div class="px-[15px]" id="tabs-w-9">
                    <div class="">
                        @include('hiring.components.hiring-forms.i9')
                    </div>
                </div>

                <div class="px-[15px]" id="tabs-wfour">
                    <div class="">
                        @include('hiring.components.hiring-forms.w4')
                    </div>
                </div>

                <div class="px-[15px]" id="tabs-itfour">
                    <div class="">
                        @include('hiring.components.hiring-forms.it-4')
                    </div>
                </div>
                <div class="px-[15px]" id="tabs-ethics">
                    <div class="">
                        @include('hiring.components.hiring-forms.ethics')
                    </div>
                </div>
                <div class="px-[15px]" id="tabs-Addendum">
                    <div class="">
                        @include('hiring.components.hiring-forms.Addendum')
                    </div>
                </div>
                <div class="px-[15px]" id="tabs-Confidentially">
                    <div class="">
                        @include('hiring.components.hiring-forms.Confidentially')
                    </div>
                </div>
                 <div class="px-[15px]" id="tabs-COVID-19">
                    <div class="">
                        @include('hiring.components.hiring-forms.Covid-19')
                    </div>
                </div>
                <div class="px-[15px]" id="tabs-Health">
                    <div class="">
                        @include('hiring.components.hiring-forms.Health')
                    </div>
                </div> 
                <div class="px-[15px]" id="tabs-Hepatitis">
                    <div class="">
                        @include('hiring.components.hiring-forms.Hepatitis')
                    </div>
                </div>
              <!--   <div class="px-[15px]" id="tabs-Coronavirus">
                    <div class="">
                        @include('hiring.components.hiring-forms.Coronavirus')
                    </div>
                </div> -->
                
               <!--  <div class="px-[15px]" id="tabs-Memo">
                    <div class="">
                        @include('hiring.components.hiring-forms.Memo')
                    </div>
                </div> -->
                <div class="px-[15px]" id="tabs-Non-Compete">
                    <div class="">
                        @include('hiring.components.hiring-forms.Noncompete')
                    </div>
                </div>
               <!--  <div class="px-[15px]" id="tabs-Reference">
                    <div class="">
                        @include('hiring.components.hiring-forms.Reference')
                    </div> 
                </div> -->
                <div class="px-[15px]" id="tabs-TB">
                    <div class="">
                        @include('hiring.components.hiring-forms.Tbscreening')
                    </div>
                </div>
                <div class="px-[15px]" id="tabs-required">
                    <div class="">
                        @include('hiring.components.hiring-forms.required')
                    </div>
                </div>
      
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


@endsection

@section('extra_js')
<script src="{{ asset('assets/js/leaflet.js') }}"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
<link href="{{ asset('assets/css/maplibre-gl.css') }}" rel='stylesheet'/>
<script src="{{ asset('assets/js/maplibre-gl.js') }}"></script>
<script src="{{ asset('assets/js/leaflet-maplibre-gl.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.buttons.min.js') }}"></script>

<script>
$(function () {
$("#tabs").tabs();
});
</script>

<script>
var loadFile = function(event) {
var output = document.getElementById('output');
output.src = URL.createObjectURL(event.target.files[0]);
output.onload = function() {
URL.revokeObjectURL(output.src)
}
};
</script>

@endsection
