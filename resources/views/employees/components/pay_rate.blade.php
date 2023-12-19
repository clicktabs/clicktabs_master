<style>
    #payRateUpdateModal {
        display: none;
        height: max-content;
    }
</style>
<div id="pay-rates" class="mt-[30px]">
<table id="pay_rate_table" class=" !w-full ux ou display nowrap">
    <thead class="bg-[#4133BF] text-[#fff]">
    <tr>
        <th>Service code</th>
        <th>Start date</th>
        <th>End Date</th>
        <th>Pay Type</th>
        <th>Amount</th>
        <th>Billing Code</th>
        <th>Created By</th>
        <th>Updated On</th>
        <th>Updated By</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($employee_pays as $pay)
    <tr>
        <td>
            {{$pay->pay_rate_service_code}}
        </td>
        <td>
            {{$pay->pay_rate_start_date}}
        </td>
        <td>
            {{$pay->pay_rate_end_date}}
        </td>
        <td>
            {{$pay->pay_rate_pay_type}}
        </td>
        <td>
            {{$pay->pay_rate_amount}}
        </td>
        <td>
            {{$pay->pay_rate_billing_code}}
        </td>
        <td>
            {{$pay->created_at}}
        </td>
        <td>
            {{$pay->updated_at}}
        </td>
        <td>
            {{$pay->employee_id}}
        </td>
        <td class="flex items-center gap-[10px]">
            <button type="button" class="btn btn-primary pay_edit" data-id="{{$pay->id}}" >Edit</button>
            <button type="button" class="btn btn-danger pay_rate_delete" data-id="{{$pay->id}}">Delete</button>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
<div id="payRateModal" class="max-w-[650px]">
    <form name="payRateForm" id="payRateForm" type="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label for="pay_rate_service_code">Service Code</label>
                <select class="form-control" id="pay_rate_service_code" name="pay_rate_service_code">
                    <option value="">Select service code</option>
                    @if($service_code)
                        @foreach($service_code as $s_code)
                            <option value="{{$s_code->code}}">{{$s_code->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="col-md-6">
                <label for="pay_rate_billing_code">Billing Code</label>
                <select class="form-control" id="pay_rate_billing_code" name="pay_rate_billing_code">
                    <option value="">Select billing code</option>
                    @if($billing_code)
                        @foreach($billing_code as $b_code)
                            <option value="{{$b_code->code}}">{{$b_code->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="pay_rate_start_date">Start date</label>
                <input type="date" class="form-control" id="pay_rate_start_date" name="pay_rate_start_date" />
            </div>
            <div class="col-md-6">
                <label for="pay_rate_end_date">End date</label>
                <input type="date" class="form-control" id="pay_rate_end_date" name="pay_rate_end_date" />
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="pay_rate_employee">Pay Type</label>
                <select class="form-control" id="pay_rate_pay_type" name="pay_rate_pay_type">
                    <option value="">Select pay type</option>
                    @if($pay_type)
                        @foreach($pay_type as $p_type)
                            <option value="{{$p_type->code}}">{{$p_type->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="col-md-6">
                <label for="expiration_modified_on">Amount</label>
                <input type="text" class="form-control" id="pay_rate_amount" name="pay_rate_amount" />
            </div>
        </div>
        <div class="row">
        </div>
        <input type="hidden" name="employee_id" value="{{$employee->id}}"/>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
<div id="payRateUpdateModal" class="max-w-[650px]">
    <form name="payRateUpdateForm" id="payRateUpdateForm" type="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <label for="pay_rate_service_code">Service Code</label>
                <select class="form-control" id="pay_rate_service_code" name="pay_rate_service_code">
                    <option value="">Select service code</option>
                    @if($service_code)
                        @foreach($service_code as $s_code)
                            <option value="{{$s_code->code}}">{{$s_code->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="col-md-6">
                <label for="pay_rate_billing_code">Billing Code</label>
                <select class="form-control" id="pay_rate_billing_code" name="pay_rate_billing_code">
                    <option value="">Select billing code</option>
                    @if($billing_code)
                        @foreach($billing_code as $b_code)
                            <option value="{{$b_code->code}}">{{$b_code->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="pay_rate_start_date">Start date</label>
                <input type="date" class="form-control" id="pay_rate_start_date" name="pay_rate_start_date" />
            </div>
            <div class="col-md-6">
                <label for="pay_rate_end_date">End date</label>
                <input type="date" class="form-control" id="pay_rate_end_date" name="pay_rate_end_date" />
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="pay_rate_employee">Pay Type</label>
                <select class="form-control" id="pay_rate_pay_type" name="pay_rate_pay_type">
                    <option value="">Select pay type</option>
                    @if($pay_type)
                        @foreach($pay_type as $p_type)
                            <option value="{{$p_type->code}}">{{$p_type->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="col-md-6">
                <label for="pay_rate_amount">Amount</label>
                <input type="text" class="form-control" id="pay_rate_amount" name="pay_rate_amount" />
            </div>
        </div>
        <div class="row">
        </div>
        <input type="hidden" name="employee_id" value="{{$employee->id}}"/>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</div>
