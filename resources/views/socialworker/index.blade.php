@extends('layouts.app')
@section('content')
    <main>
        <div class="vs jj ttm vl ou uf na">
            <div class="y pr dw jk rounded-sm la rc !bg-[#4133BF]">
                <div class="g q k ip id pointer-events-none hidden tnh" aria-hidden="true">
                    <svg width="319" height="198" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs>
                            <path id="welcome-a" d="M64 0l64 128-64-20-64 20z"></path>
                            <path id="welcome-e" d="M40 0l40 80-40-12.5L0 80z"></path>
                            <path id="welcome-g" d="M40 0l40 80-40-12.5L0 80z"></path>
                            <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="welcome-b">
                                <stop stop-color="#A5B4FC" offset="0%"></stop>
                                <stop stop-color="#818CF8" offset="100%"></stop>
                            </linearGradient>
                            <linearGradient x1="50%" y1="24.537%" x2="50%" y2="100%" id="welcome-c">
                                <stop stop-color="#4338CA" offset="0%"></stop>
                                <stop stop-color="#6366F1" stop-opacity="0" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <g fill="none" fill-rule="evenodd">
                            <g transform="rotate(64 36.592 105.604)">
                                <mask id="welcome-d" fill="#fff">
                                    <use xlink:href="#welcome-a"></use>
                                </mask>
                                <use fill="url(#welcome-b)" xlink:href="#welcome-a"></use>
                                <path fill="url(#welcome-c)" mask="url(#welcome-d)" d="M64-24h80v152H64z"></path>
                            </g>
                            <g transform="rotate(-51 91.324 -105.372)">
                                <mask id="welcome-f" fill="#fff">
                                    <use xlink:href="#welcome-e"></use>
                                </mask>
                                <use fill="url(#welcome-b)" xlink:href="#welcome-e"></use>
                                <path fill="url(#welcome-c)" mask="url(#welcome-f)"
                                      d="M40.333-15.147h50v95h-50z"></path>
                            </g>
                            <g transform="rotate(44 61.546 392.623)">
                                <mask id="welcome-h" fill="#fff">
                                    <use xlink:href="#welcome-g"></use>
                                </mask>
                                <use fill="url(#welcome-b)" xlink:href="#welcome-g"></use>
                                <path fill="url(#welcome-c)" mask="url(#welcome-h)"
                                      d="M40.333-15.147h50v95h-50z"></path>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="y">
                    <h1 class="gu teu text-slate-800 font-bold rt !text-[#fff]">Case Manager</h1>
                </div>
            </div>

            <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
                <div class="dk">
                    <div class="lf">
                        <button type="button" class="btn btn-primary !bg-[#4133BF] !text-[#fff] mb-[20px] add_new_social_worker">Add new</button>
                        <table class="ux ou display nowrap" style="width:100%" id="caseManagerTable">
                            <thead class="go gv rounded-sm bg-[#4133BF] text-[#fff]">
                                <tr>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Agency Branch</th>
                                    <th>Insurance</th>
                                    <th>Tel</th>
                                    <th>Fax</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div id="socialWorkerModal" class="max-w-[450px] bg-white p-[15px] hidden !h-fit z-[999]">
        <form name="socialWorkerForm" id="socialWorkerForm" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="first_name">First Name <span class="text-red">*</span></label>
                    <input id="first_name" type="text" class="form-control s ou  " name="first_name"/>
                </div>
                <div class="col-md-6">
                    <label for="last_name">Last Name <span class="text-red">*</span></label>
                    <input id="last_name" type="text" class="form-control s ou  " name="last_name" />
                </div>
                <div class="col-md-6">
                    <label for="agency_branch">Agency Branch: <span class="text-red">*</span></label>
                    <select name="agency_branch" id="agency_branch" class="form-control s ou">
                        <option value="">Select Agency</option>
                        @if($agency_branch)
                            @foreach($agency_branch as $branch)
                                <option value="{{$branch->name}}">{{$branch->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="tel">Tel <span class="text-red">*</span> </label>
                    <input id="tel" type="text" class="form-control s ou  " name="tel"/>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md-6">
                    <label for="fax">Fax <span class="text-red">*</span> </label>
                    <input id="fax" type="text" class="form-control s ou " name="fax" />
                </div>
                <div class="col-md-6">
                    <label for="social_insurance">Insurance:</label>
                    <select name="social_insurance" class="social_insurance form-control" id="social_insurance">
                        <option value="">Select Insurance</option>
                        @if($social_insurance)
                        @foreach($social_insurance as $insurance_type_sub_addons)
                        <option value="{{$insurance_type_sub_addons->name}}">{{$insurance_type_sub_addons->name}}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="row mt-4">
                <label for="comment">Comment <span class="text-red">*</span> </label>
                <div class="col-md-12">
                    <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary !bg-[#4133BF] !text-[#fff]">Save</button>
        </form>
    </div>
    <div id="socialWorkerUpdateModal" class="max-w-[450px] bg-white p-[15px] hidden !h-fit z-[999]">
        <form name="socialWorkerUpdateForm" id="socialWorkerUpdateForm" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <label for="first_name">First Name <span class="text-red">*</span></label>
                    <input id="first_name" type="text" class="form-control s ou  " name="first_name"/>
                </div>
                <div class="col-md-6">
                    <label for="last_name">Last Name <span class="text-red">*</span></label>
                    <input id="last_name" type="text" class="form-control s ou  " name="last_name" />
                </div>
                <div class="col-md-6">
                    <label for="agency_branch">Agency Branch: <span class="text-red">*</span></label>
                    <select name="agency_branch" id="agency_branch" class="form-control s ou">
                        <option value="">Select Agency</option>
                        @if($agency_branch)
                            @foreach($agency_branch as $branch)
                                <option value="{{$branch->name}}">{{$branch->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="social_insurance">Insurance:</label>
                    <select name="social_insurance" class="social_insurance form-control" id="social_insurance">
                        <option value="">Select Insurance</option>
                        @if($social_insurance)
                        @foreach($social_insurance as $insurance_type_sub_addons)
                        <option value="{{$insurance_type_sub_addons->name}}">{{$insurance_type_sub_addons->name}}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md-6">
                    <label for="tel">Tel <span class="text-red">*</span> </label>
                    <input id="tel" type="text" class="form-control s ou  " name="tel"/>
                </div>
                <div class="col-md-6">
                    <label for="edit_fax">Fax <span class="text-red">*</span> </label>
                    <input id="edit_fax" type="text" class="form-control s ou " name="fax" />
                </div>
            </div>
            <div class="row mt-4">
                <label for="comment">Comment <span class="text-red">*</span> </label>
                <div class="col-md-12">
                    <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary !bg-[#4133BF] !text-[#fff]">Save</button>
        </form>
    </div>
@endsection
@section('extra_js')
    <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/toastr.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            let s_id;
            $('#caseManagerTable').DataTable({
                scrollX: true,
                order: [1, 'desc'],
                ajax: {
                    url: "/api/social-worker",
                },
                columns: [
                    { data: 'first_name'},
                    { data: 'last_name'},
                    { data: 'agency_branch'},
                    { data: 'social_insurance'},
                    { data: 'tel'},
                    { data: 'fax'},
                    {
                        data: 'id',
                        className: "dt-center editor-delete",
                        orderable: false,
                        "mRender" : function ( data, type, row ) {
                            return `
                            <button type="button" class="btn btn-primary social_worker_edit !bg-[#4133BF] !text-[#fff]" data-id="${data}">Edit</button>
                            <button type="button" class="btn btn-danger social_worker_delete !bg-[#bb2d3b]" data-id="${data}">Delete</button>
                        `;
                        }
                    }

                ],
            });

            $('.add_new_social_worker').click(function () {
                $('#socialWorkerModal').modal({
                    fadeDuration: 100
                });
            });

            $(document).on('submit', '#socialWorkerForm', function(e) {
                e.preventDefault();
                let validator = $('#socialWorkerForm').validate({
                    rules: {
                        first_name: "required",
                        last_name: "required",
                        agency_branch: "required",
                        social_insurance: "required",
                        tel: "required",
                        fax: "required",
                        comment: "required",
                    }
                });
                if(validator.valid()) {
                    $('.loader_wrap').fadeIn();
                    let data = new FormData(this);
                    $.ajax({
                        url: "{{route('social-worker.store')}}",
                        method: 'POST',
                        data: data,
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function (data) {
                            $('#socialWorkerForm').trigger("reset");
                            $('.loader_wrap').fadeOut();
                            $('.close-modal').trigger('click');
                            $('#caseManagerTable').DataTable().ajax.reload();
                        },
                        error: function (data) {
                            let errors = data.responseJSON;
                            for (const key of Object.keys(errors.errors)) {
                                let input = $('#'+key);
                                input.addClass('error');
                                input.parent().append('<label class="error">'+errors.errors[key][0]+'</label>');
                            }
                            $('.loader_wrap').fadeOut();
                        }
                    });
                }
            });
            $(document).on('click', '.social_worker_delete', function () {
                let s_worker = $(this).data('id');
                $.ajax({
                    url: "/api/social-worker/"+s_worker,
                    method: 'DELETE',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (res) {
                        $('#caseManagerTable').DataTable().ajax.reload();
                    },
                    error: function (data) {
                        console.log(data)
                    }
                });
            });
            $(document).on('click', '.social_worker_edit', function () {
                $('#socialWorkerUpdateModal').modal({
                    fadeDuration: 100
                });
                s_id = $(this).data('id');
                $.ajax({
                    url: "/api/social-worker/"+s_id+"/edit",
                    method: 'GET',
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (res) {
                        console.log(res.data.fax) 
                        $('#socialWorkerUpdateModal #first_name').val(res.data.first_name);
                        $('#socialWorkerUpdateModal #last_name').val(res.data.last_name);
                        $('#socialWorkerUpdateModal #agency_branch').val(res.data.agency_branch);
                        $('#socialWorkerUpdateModal #tel').val(res.data.tel);
                        $('#socialWorkerUpdateModal #edit_fax').val(res.data.fax);
                        $('#socialWorkerUpdateModal #comment').val(res.data.comment);
                        $('#socialWorkerUpdateModal #social_insurance').val(res.data.social_insurance);
                        $('.loader_wrap').fadeOut();
                    },
                    error: function (data) {
                        $('.loader_wrap').fadeOut();
                    }
                });
            });

            $(document).on('submit', '#socialWorkerUpdateModal form', function (e) {
                e.preventDefault();
                $('.loader_wrap').fadeIn();
                let data = new FormData(this);
                data.append("_method", "PUT")
                $.ajax({
                    url: "/api/social-worker/"+s_id,
                    method: 'POST',
                    data: data,
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        $('#socialWorkerUpdateModal form').trigger("reset");
                        $('.loader_wrap').fadeOut();
                        $('.close-modal').trigger('click');
                        $('#caseManagerTable').DataTable().ajax.reload();
                    },
                    error: function (data) {
                        let errors = data.responseJSON;
                        for (const key of Object.keys(errors.errors)) {
                            let input = $('#'+key);
                            input.addClass('error');
                            input.parent().append('<label class="error">'+errors.errors[key][0]+'</label>');
                        }
                        $('.loader_wrap').fadeOut();
                        $('.close-modal').trigger('click');
                    }
                });
            });
        });
    </script>
@endsection
