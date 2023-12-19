<style>
    .dataTables_scrollHeadInner, .dataTables_scrollHeadInner .dataTable {
        width: 100% !important;
    }
    #billingUpdateModal {
        display: none;
        height: max-content;
    }
</style>
<div id="document-type" class="mt-[30px]">
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
    {{-- <div id="upload" class="!max-w-[450px] !w-[450px]">
        <form name="upload" id="upload" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <label for="buploadilling_code">Billing Code</label>
                    <select class="form-control" id="upload_code" name="upload_code">
                        <option value="">Select billing code</option>

                    </select>
                </div>
            </div>
            <input type="hidden" name="upload_id" value=""/>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <div id="uploadModal" class="!max-w-[450px] !w-[450px]">
        <form name="uploadForm" id="uploadForm" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <label for="upload_code">Billing Code</label>
                    <select class="form-control" id="billing_code" name="billing_code">
                        <option value="">Select billing code</option>
  
                    </select>
                </div>
            </div>
            <input type="hidden" name="employee_id" value=""/>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div> --}}
