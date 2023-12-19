
@php
    $account = company_info();
@endphp
<div class="row">
    <form action="create">
        
        <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-6">
            <h1>checking</h1>
            <div class="">
                <p style="text-align: center; font-size: 1.5em;">{{!empty($account->company_name)?$account->company_name:''}}</p>
            </div>

                <div class="col">
                    <p style="text-align: center; font-size: 1em;">{{!empty($account->address_line)?$account->address_line:''}}</p>
                </div>
                    <div class="col">
                        <p style="text-align: center; font-size: 1;"> {{!empty($account->city)?$account->city:''}},  {{!empty($account->state)?$account->state:''}}, {{!empty($account->zip)?$account->zip:''}}</p>
                        </div>
                <div class="col">
                    <p style="text-align: center; font-size: 1em; text-decoration: none;">Tel:- {{!empty($account->phone)?$account->phone:''}} | Fax:- {{!empty($account->fax)?$account->fax:''}}</p>
                </div>
            <div class="col">
                <p style="text-align: center; font-size: 1em;">{{!empty($account->email)?$account->email:''}}</p>
            </div>
    </div>
        <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-6">
                <div class="">
                    <p style="text-align: center; font-size: 1.5em;">{{!empty($account->company_name)?$account->company_name:''}}</p>
                </div>

                    <div class="col">
                        <p style="text-align: center; font-size: 1em;">{{!empty($account->address_line)?$account->address_line:''}}</p>
                    </div>
                        <div class="col">
                            <p style="text-align: center; font-size: 1;"> {{!empty($account->city)?$account->city:''}},  {{!empty($account->state)?$account->state:''}}, {{!empty($account->zip)?$account->zip:''}}</p>
                            </div>
                    <div class="col">
                        <p style="text-align: center; font-size: 1em; text-decoration: none;">Tel:- {{!empty($account->phone)?$account->phone:''}} | Fax:- {{!empty($account->fax)?$account->fax:''}}</p>
                    </div>
                <div class="col">
                    <p style="text-align: center; font-size: 1em;">{{!empty($account->email)?$account->email:''}}</p>
                </div>
        </div>
    </form>
</div>




