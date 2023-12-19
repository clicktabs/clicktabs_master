
<div class="vs jj ttm vl ou uf na">
    <h1 class="fw-bolder display-4 text-primary text-certer">{{ Auth::user()->organization->name }}</h1>
    <div class="row mb-4">
        <div class="tz tni vt bd rounded-sm border border-slate-200 col-md-12">
            <div class="dk p-3">
                <form action="{{route('hiring.ecovid19')}}" method="post">
                    @csrf
                    <div class="col-md-12">
                        <h1 class="gu teu text-slate-800 font-bold rt text-center text-decoration-underline">COVID-19 In-service Education</h1>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <p>
                                I, <input type="text" name="patientName" style=""> 
                                acknowledge and have received COVID-19 education and training regarding preventive methods, signs, symtoms, reporting
                                actual and potential exposures and the agency policy and procedure.
                            </p>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <label for="signature" class="!mb[-4]">Signature of Applicant</label>
                                <input id="signature" type="text" name="signature">
                            </div>
                         </div>
                    </div>
                    <div class=" mt-5">
                        <button type="submit" class="btn btn-primary active mb-5">Save & Exit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

