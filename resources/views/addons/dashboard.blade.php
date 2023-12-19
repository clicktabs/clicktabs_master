@extends('layouts.app')

@section('extra_css')
    <link rel="stylesheet" href="{{asset('assets/css/jquery.modal.min.css')}}"/>
    <style>
        #addonsAddModal {
            display: none;
            height: fit-content;
        }

        .blocker.jquery-modal {
            z-index: 99;
        }

        .jquery-modal .modal a.close-modal {
            top: 15px;
            right: 5px;
        }

        #addonUpdateModal {
            display: none;
            height: fit-content;
        }

        #addonsAddModal {
            max-width: 450px !important;
        }
    </style>
@endsection

@section('content')

    <main>
        <div class="vs jj ttm vl ou uf na">

            <!-- Welcome banner -->
            <div class="y pr dw jk rounded-sm la rc !bg-[#4133BF]">

                <!-- Background illustration -->
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

                <!-- Content -->
                <div class="y">
                    <h1 class="gu teu text-slate-800 font-bold rt !text-[#fff]">Good afternoon, Acme Inc. 👋</h1>
                    <p class="!text-[#fff]">Here is what’s happening with your projects today:</p>
                </div>

            </div>

            <div class="row mb-4">

                <!-- Table (Top Channels) -->
                <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
                    <header class="vc vu cs ch flex items-center gap-[10px]">
                        <h2 class="gh text-slate-800">Addons</h2>
                        @hasrole('super-admin')
                        <button class="btn ho xi ye add_new_addons">Add new addon</button>
                        @endhasrole
                    </header>
                    <div class="dk">

                        <!-- Table -->
                        <div class="lf">

                            <table class="ux ou">
                                <!-- Table header -->
                                <thead class="go gv gq hp rounded-sm">
                                <tr>
                                    <th class="dx">
                                        <div class="gh gt">Name</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">Status</div>
                                    </th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <!-- Table body -->
                                <tbody class="text-sm gp le ln" id="addonsLists">
                                <!-- Row -->
                                @if ($data)
                                    @foreach ($data as $addon)
                                        @if($addon->name === 'Tasks')
                                            @hasrole('super-admin')
                                            <tr>
                                                <td class="dx">
                                                    <div class="text-slate-800 font-weight-bolder"
                                                         style="font-weight: 700;">{{$addon->name}}</div>
                                                </td>
                                                <td class="dx">
                                                    <div
                                                        class="">{{  $addon->status === 1 ? 'Active' : 'Inactive'  }}</div>
                                                </td>
                                                <td class="dx">
                                                    <a href="addons-list/{{env('ENCRYPT_PREFIX')}}{{encrypt(env('ENCRYPT_KEY'). $addon->id )}}" class="btn ho xi ye"
                                                       data-id="{{env('ENCRYPT_PREFIX')}}{{encrypt(env('ENCRYPT_KEY'). $addon->id )}}">Add</a>
                                                    <button class="btn ho xi ye addon_edit" data-id="{{env('ENCRYPT_PREFIX')}}{{encrypt(env('ENCRYPT_KEY'). $addon->id )}}">
                                                        Edit
                                                    </button>
                                                    <button class="btn btn-danger delete_addon"
                                                            data-id="{{env('ENCRYPT_PREFIX')}}{{encrypt(env('ENCRYPT_KEY'). $addon->id )}}">Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            @endhasrole
                                        @else
                                            <tr>
                                                <td class="dx">
                                                    <div class="text-slate-800 font-weight-bolder"
                                                         style="font-weight: 700;">{{$addon->name}}</div>
                                                </td>
                                                <td class="dx">
                                                    <div
                                                        class="">{{  $addon->status === 1 ? 'Active' : 'Inactive'  }}</div>
                                                </td>
                                                <td class="dx">
                                                    <a href="addons-list/{{env('ENCRYPT_PREFIX')}}{{encrypt(env('ENCRYPT_KEY'). $addon->id )}}" class="btn ho xi ye"
                                                       data-id="{{env('ENCRYPT_PREFIX')}}{{encrypt(env('ENCRYPT_KEY'). $addon->id )}}">Add</a>
                                                    @hasrole('super-admin')
                                                    <button class="btn ho xi ye addon_edit" data-id="{{env('ENCRYPT_PREFIX')}}{{encrypt(env('ENCRYPT_KEY'). $addon->id )}}">
                                                        Edit
                                                    </button>
                                                    <button class="btn btn-danger delete_addon"
                                                            data-id="{{env('ENCRYPT_PREFIX')}}{{encrypt(env('ENCRYPT_KEY'). $addon->id )}}">Delete
                                                    </button>
                                                    @endhasrole
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                            <div class="!max-w-[450px]">
                                <div id="addonsAddModal" class="!max-w-[450px]">
                                    <form method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="addons_name">Addon Name</label>
                                                <input type="text" name="addons_name" id="addons_name" value=""
                                                       class="form-control"/>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="addon_status">Addon Status</label>
                                                <select class="form-control s ou" name="addon_status" id="addon_status">
                                                    <option value="">Select status</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn ho xi ye">Save</button>
                                    </form>
                                </div>
                            </div>
                            <div id="addonUpdateModal" class="max-w-[450px]">
                                <form name="addonUpdateModalForm" id="addonUpdateModalForm" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="addons_name">Addon Name</label>
                                            <input type="text" name="addons_name" id="addons_name"
                                                   class="form-control"/>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="addon_status">Addon Status</label>
                                            <select class="form-control s ou" name="addon_status" id="addon_status">
                                                <option value="">Select status</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn ho xi ye">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('extra_js')
    <script src="{{asset('assets/js/plugins/toastr.min.js')}}"></script>
    <script>
        let aId = '';
        $(function () {
            $('.add_new_addons').click(function () {
                $('#addonsAddModal').modal({
                    fadeDuration: 100
                });
            });

            // Add Addon
            jQuery(document).on('submit', '#addonsAddModal form', function (e) {
                e.preventDefault();

                let validator = jQuery('#addonsAddModal form').validate({
                    rules: {
                        addons_name: "required",
                        addon_status: "required",
                    }
                });

                if (validator.valid()) {
                    jQuery('.loader_wrap').fadeIn();
                    jQuery.ajax({
                        url: "{{route('category.store')}}",
                        method: 'POST',
                        data: new FormData(this),
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function (res) {
                            $('#employeeForm').trigger("reset");
                            jQuery('.close-modal').trigger('click');
                            toastr.success(res.message)
                            toastr.options.closeMethod = 'fadeOut';
                            toastr.options.closeDuration = 300;
                            toastr.options.closeEasing = 'swing';
                            toastr.options.progressBar = true;
                            window.location.reload();
                        },
                        error: function (data) {
                            jQuery('.loader_wrap').fadeOut();
                            let errors = data.responseJSON;
                            for (const key of Object.keys(errors.errors)) {
                                let input = $('#' + key);
                                input.addClass('error');
                                input.parent().append('<label class="error">' + errors.errors[key][0] + '</label>');
                            }
                        }
                    });
                }
            });
            // Delete
            jQuery(document).on('click', '.delete_addon', function () {
                jQuery('.loader_wrap').fadeIn();
                let addonId = jQuery(this).data('id');
                jQuery.ajax({
                    url: "/api/category/" + addonId,
                    method: 'DELETE',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (res) {
                        $('#employeeForm').trigger("reset");
                        jQuery('.close-modal').trigger('click');
                        toastr.success(res.message)
                        toastr.options.closeMethod = 'fadeOut';
                        toastr.options.closeDuration = 300;
                        toastr.options.closeEasing = 'swing';
                        toastr.options.progressBar = true;
                        // jQuery('.loader_wrap').fadeOut();
                        window.location.reload();
                    },
                    error: function (data) {
                        console.log(data)
                    }
                });
            });
            // Edit addon
            jQuery(document).on('click', '.addon_edit', function () {
                // jQuery('.edit_employee').click(function () {
                $('#addonUpdateModal').modal({
                    fadeDuration: 100
                });

                aId = jQuery(this).data("id");

                jQuery.ajax({
                    url: "/api/category/" + aId + "/edit/",
                    method: 'GET',
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        jQuery('#addonUpdateModal #addons_name').val(data.addon.name);
                        jQuery('#addonUpdateModal #addon_status').val(data.addon.status);
                        jQuery('.loader_wrap').fadeOut();
                    },
                    error: function (data) {
                        jQuery('.loader_wrap').fadeOut();
                    }
                });
            });
            // Update addon
            jQuery(document).on('submit', '#addonUpdateModalForm', function (e) {
                e.preventDefault();

                let validator = jQuery('#addonUpdateModalForm').validate({
                    rules: {
                        addons_name: "required",
                        addon_status: "required",
                    }
                });

                if (validator.valid()) {
                    jQuery('.loader_wrap').fadeIn();
                    let data = new FormData(this);
                    data.append("_method", "PUT");

                    jQuery.ajax({
                        url: "/api/category/" + aId,
                        method: 'POST',
                        data: data,
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function (res) {
                            $('#employeeForm').trigger("reset");
                            jQuery('.close-modal').trigger('click');
                            toastr.success(res.message)
                            toastr.options.closeMethod = 'fadeOut';
                            toastr.options.closeDuration = 300;
                            toastr.options.closeEasing = 'swing';
                            toastr.options.progressBar = true;
                            window.location.reload();
                            jQuery('.loader_wrap').fadeOut();
                        },
                        error: function (data) {
                            jQuery('.loader_wrap').fadeOut();
                            let errors = data.responseJSON;
                            for (const key of Object.keys(errors.errors)) {
                                let input = $('#' + key);
                                input.addClass('error');
                                input.parent().append('<label class="error">' + errors.errors[key][0] + '</label>');
                            }
                        }
                    });
                }
            })
        });
    </script>
@endsection
