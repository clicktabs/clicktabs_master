<style>
    #expirationsUpdateModal {
        display: none;
        height: max-content;
    }
</style>
<div id="expirations" class="mt-[30px] ">
    <table id="expirations_table" class="display nowrap" style="width: 100%;">
        <thead class="bg-[#4133BF] text-[#fff]">
        <tr>
            <th>Document Type</th>
            <th>Expiration Date</th>
            <th>Notes</th>
            <th>Created On</th>
            <th>Created By</th>
            <th>Action</th>
        </tr>
        </thead>
    </table>
    <div id="expirationsModal" class="max-w-[450px]">
        <form method="POST" name="expirationForm" id="expirationForm">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="expirations_doc_type">Document type</label>
                    <select class="form-control" id="expirations_doc_type" name="expirations_doc_type">
                        <option value="">Select document type</option>
                        @if($docs)
                        @foreach($docs as $doc)
                            <option value="{{$doc->name}}">{{$doc->name}}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="expirations_date">Expiration Date</label>
                    <input type="date" class="form-control" id="expirations_date" name="expirations_date" />
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="expiration_notes">Notes</label>
                    <textarea class="form-control" id="expiration_notes" name="expiration_notes" cols="4"></textarea>
                </div>
            </div>
            <input type="hidden" name="employee_id" value="{{$employee->id}}"/>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <div id="expirationsUpdateModal" class="max-w-[450px]">
        <form method="POST" name="expirationUpdateForm" id="expirationUpdateForm">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <label for="expirations_doc_type">Document type</label>
                    <select class="form-control" id="expirations_doc_type" name="expirations_doc_type">
                        <option value="">Select document type</option>
                        @if($docs)
                            @foreach($docs as $doc)
                                <option value="{{$doc->name}}">{{$doc->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="expirations_date">Expiration Date</label>
                    <input type="date" class="form-control" id="expirations_date" name="expirations_date" />
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="expiration_notes">Notes</label>
                    <textarea class="form-control" id="expiration_notes" name="expiration_notes" cols="4"></textarea>
                </div>
            </div>
            <input type="hidden" name="employee_id" value="{{$employee->id}}"/>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
