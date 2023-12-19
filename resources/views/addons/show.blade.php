@extends('layouts.app')

@section('extra_css')
    <style>
        #subAddonModal {
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
    </style>
@endsection

@section('content')

    <main>
        <div class="vs jj ttm vl ou uf na">

            <div class="row mb-4">
                <!-- Table (Top Channels) -->
                <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
                    <header class="vc vu cs ch flex items-center gap-[10px]">
                        <h2 class="gh text-slate-800">Sub Addons</h2>
                        <button class="btn ho xi ye add_new_addons">Add new sub addon</button>
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
                                @if ($sub_addons)
                                    @foreach ($sub_addons as $addon)
{{--                                        @if(@hasrole('org-admin') && $addon->name === 'Subscriptions')--}}
                                        <tr>
                                            <td class="dx">
                                                <div class="text-slate-800 font-weight-bolder" style="font-weight: 700;">{{$addon->name}}</div>
                                            </td>
                                            <td class="dx">
                                                <div class="">{{  $addon->status === 1 ? 'Active' : 'Inactive'  }}</div>
                                            </td>
                                            <td class="dx">
                                                @if($addon->organization_id !== Null)
                                                    <button class="btn ho xi ye addon_edit" data-id="{{env('ENCRYPT_PREFIX')}}{{encrypt(env('ENCRYPT_KEY'). $addon->id )}}">Edit</button>
                                                    <button class="btn btn-danger delete_addon" data-id="{{env('ENCRYPT_PREFIX')}}{{encrypt(env('ENCRYPT_KEY'). $addon->id )}}">Delete</button>
                                                @else
                                                @hasrole('super-admin')
                                                    <button class="btn ho xi ye addon_edit" data-id="{{env('ENCRYPT_PREFIX')}}{{encrypt(env('ENCRYPT_KEY'). $addon->id )}}">Edit</button>
                                                    <button class="btn btn-danger delete_addon" data-id="{{env('ENCRYPT_PREFIX')}}{{encrypt(env('ENCRYPT_KEY'). $addon->id )}}">Delete</button>
                                                @endhasrole
                                                @endif
                                            </td>
                                        </tr>
{{--                                        @endif--}}
                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                            <div id="subAddonModal" class="max-w-[450px]">
                                <form method="POST" name="subAddonForm" id="subAddonForm">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="sub_addon_code">Code</label>
                                            <input type="text" name="sub_addon_code" id="sub_addon_code" class="form-control" />
                                        </div>
                                        <div class="col-md-6">
                                            <label for="sub_addons_name">Sub Addon Name</label>
                                            <input type="text" name="sub_addons_name" id="sub_addons_name" value="" class="form-control" />
                                            <input type="hidden" name="addon_id" value="{{env('ENCRYPT_PREFIX')}}{{encrypt(env('ENCRYPT_KEY'). $id )}}" />
                                        </div>
                                        <div class="col-md-6">
                                            <label for="sub_addon_status">Sub Addon Status</label>
                                            <select class="form-control s ou" name="sub_addon_status" id="sub_addon_status">
                                                <option value="">Select status</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="sub_addon_description">Description</label>
                                            <textarea name="sub_addon_description" id="sub_addon_description" class="form-control h-[150px]"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn ho xi ye">Save</button>
                                </form>
                            </div>
{{--                            @if($addon->organization_id !== Null)--}}
                                <div id="addonUpdateModal" class="max-w-[450px]">
                                <form name="addonUpdateModalForm" id="addonUpdateModalForm" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="sub_addon_code">Code</label>
                                            <input type="text" name="sub_addon_code" id="sub_addon_code" class="form-control" />
                                        </div>
                                        <div class="col-md-6">
                                            <label for="sub_addons_name">Sub Addon Name</label>
                                            <input type="text" name="sub_addons_name" id="sub_addons_name" value="" class="form-control" />
                                            <input type="hidden" name="addon_id" value="{{env('ENCRYPT_PREFIX')}}{{encrypt(env('ENCRYPT_KEY'). $id )}}" />
                                        </div>
                                        <div class="col-md-6">
                                            <label for="sub_addon_status">Sub Addon Status</label>
                                            <select class="form-control s ou" name="sub_addon_status" id="sub_addon_status">
                                                <option value="">Select status</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="sub_addon_description">Description</label>
                                            <textarea name="sub_addon_description" id="sub_addon_description" class="form-control h-[150px]"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn ho xi ye">Update</button>
                                </form>
                            </div>
{{--                            @endif--}}
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
                $('#subAddonModal').modal({
                    fadeDuration: 100
                });
            });

            // Add Addon
            jQuery(document).on('submit', '#subAddonForm', function(e) {
                e.preventDefault();

                let validator = jQuery('#subAddonForm').validate({
                    rules: {
                        sub_addon_code: "required",
                        sub_addons_name: "required",
                        sub_addon_status: "required",
                    }
                });

                if(validator.valid()) {
                    jQuery('.loader_wrap').fadeIn();
                    jQuery.ajax({
                        url: "{{route('sub-category.store')}}",
                        method: 'POST',
                        data: new FormData(this),
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function (res) {
                            $('#subAddonForm').trigger("reset");
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
                            if(data.responseJSON.data === 400) {
                                $('#subAddonForm').trigger("reset");
                                jQuery('.close-modal').trigger('click');
                                toastr.error(data.responseJSON.message)
                                toastr.options.closeMethod = 'fadeOut';
                                toastr.options.closeDuration = 300;
                                toastr.options.closeEasing = 'swing';
                                toastr.options.progressBar = true;
                            } else {
                                let errors = data.responseJSON;
                                for (const key of Object.keys(errors.errors)) {
                                    let input = $('#'+key);
                                    input.addClass('error');
                                    input.parent().append('<label class="error">'+errors.errors[key][0]+'</label>');
                                }
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
                    url: "/api/sub-category/"+addonId,
                    method: 'DELETE',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (res) {
                        toastr.success(res.message)
                        toastr.options.closeMethod = 'fadeOut';
                        toastr.options.closeDuration = 300;
                        toastr.options.closeEasing = 'swing';
                        toastr.options.progressBar = true;
                        window.location.reload()
                    },
                    error: function (data) {
                        console.log(data)
                    }
                });
            });
            // Edit addon
            jQuery(document).on('click', '.addon_edit', function() {
                $('#addonUpdateModal').modal({
                    fadeDuration: 100
                });

                aId = jQuery(this).data("id");

                jQuery.ajax({
                    url: "/api/sub-category/"+aId+"/edit/",
                    method: 'GET',
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        jQuery('#addonUpdateModal #sub_addon_code').val(data.sub_addon.code);
                        jQuery('#addonUpdateModal #sub_addons_name').val(data.sub_addon.name);
                        jQuery('#addonUpdateModal #sub_addon_status').val(data.sub_addon.status);
                        jQuery('#addonUpdateModal #sub_addon_description').val(data.sub_addon.description);
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
                        sub_addon_name: "required",
                        sub_addon_status: "required",
                    }
                });

                if(validator.valid()) {
                    jQuery('.loader_wrap').fadeIn();
                    let data = new FormData(this);
                    data.append("_method", "PUT");

                    jQuery.ajax({
                        url: "/api/sub-category/"+aId,
                        method: 'POST',
                        data: data,
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function (res) {
                            $('#addonUpdateModalForm').trigger("reset");
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
                                let input = $('#'+key);
                                input.addClass('error');
                                input.parent().append('<label class="error">'+errors.errors[key][0]+'</label>');
                            }
                        }
                    });
                }
            })
        });
    </script>
@endsection
