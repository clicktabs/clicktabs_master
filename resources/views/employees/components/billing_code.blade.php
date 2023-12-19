<style>
    .dataTables_scrollHeadInner, .dataTables_scrollHeadInner .dataTable {
        width: 100% !important;
    }
    #billingUpdateModal {
        display: none;
        height: max-content;
    }
</style>
<div id="billing-code" class="mt-[30px]">
    <table id="billing_table" class="display nowrap" style="width: 100%">
        <thead class="bg-[#4133BF] text-[#fff]" style="width: 100%">
        <tr>
            <th>Billing Code</th>
            <th>Description</th>
            <th>Created On</th>
            <th>Created By</th>
            <th>Action</th>
        </tr>
        </thead>
    </table>
    <div id="billingModal" class="!max-w-[450px] !w-[450px]">
        <form name="billingForm" id="billingForm" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <label for="billing_code">Billing Code</label>
                    <select class="form-control" id="billing_code" name="billing_code">
                        <option value="">Select billing code</option>
                        @if($billing_code)
                            @foreach($billing_code as $billing)
                                <option value="{{$billing->code}}">{{$billing->name}}</option>
                            @endforeach
                        @endif;
                    </select>
                </div>
            </div>
            <input type="hidden" name="employee_id" value="{{$employee->id}}"/>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <div id="billingUpdateModal" class="!max-w-[450px] !w-[450px]">
        <form name="billingUpdateForm" id="billingUpdateForm" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <label for="billing_code">Billing Code</label>
                    <select class="form-control" id="billing_code" name="billing_code">
                        <option value="">Select billing code</option>
                        @if($billing_code)
                            @foreach($billing_code as $billing)
                                <option value="{{$billing->code}}">{{$billing->name}}</option>
                            @endforeach
                        @endif;
                    </select>
                </div>
            </div>
            <input type="hidden" name="employee_id" value="{{$employee->id}}"/>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
