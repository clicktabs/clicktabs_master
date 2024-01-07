
@php
    $account = company_info();
@endphp
@if ($account)
<div class="col-md-12">
    <form action="create">
            <div class="">
                <p style="text-align: center; font-size: 1.5em;">{{!empty($account->company_name)?$account->company_name:''}}</p>
            </div>

            <div class="col  mt-1">
            <p style="text-align: center; font-size: 1em;">{{!empty($account->address_line)?$account->address_line:''}}, {{!empty($account->city)?$account->city:''}},  {{!empty($account->state)?$account->state:''}}, {{!empty($account->zip)?$account->zip:''}}</p>
            </div>
            <div class="col  mt-1">
                <p style="text-align: center; font-size: 1;"> </p>
            </div>
            <div class="col  mt-1">
                <p style="text-align: center; font-size: 1em; text-decoration: none;">Tel:- {{!empty($account->phone)?$account->phone:''}} | Fax:- {{!empty($account->fax)?$account->fax:''}}</p>
            </div>
            <div class="col mt-1">
                <p style="text-align: center; font-size: 1em;">Email:-{{!empty($account->email)?$account->email:''}}</p>
            </div>
    </form>
</div>
@endif




