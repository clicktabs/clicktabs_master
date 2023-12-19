
<div class="vs jj ttm vl ou uf na">
    <h1 class="fw-bolder display-4 text-primary text--certer">{{ Auth::user()->organization->name }}</h1>
    <div class="row mb-4">
        <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
            <div class="dk">
                <h1 class="gu teu text-slate-800 font-bold rt text-center text-decoration-underline mb-4">
                    HEPATITIS B VACCINATION WAIVER FORM
                </h1>
                <form action="{{route('hiring.storehepatitis')}}" method="post">
                    @csrf
                    <div class="col-md-12">
                        <p>
                            I understand that due to my occupational exposure to bllod or other potentailly infectious disease, I am at risk of acquring
                            HBV(storeHepatitis B Virus) infection. I have read the employee information sheet. Hepatitis B and Hepatitis B vaccine and have had the 
                            opportunity to ask questions and understand the risk and benefits of the HBV vaccine.
                        </p>
                        <p>
                            I have been given the opportunity to be vaccinated at no charge to myself.
                        </p>
                        <p>
                            Having been informed, I decline to take the HBV vaccine at this time. I understand that by declining th vaccine, 
                            I continue to have occupational exposure to blood or other potentailly infectious disease and what to be vaccinated, 
                            I can receive the vaccination series at no charge to me.
                        </p>
                    </div>
                    <div class=" mt-5">
                        <label for="">Print Name</label>
                        <input type="text" name="printName">
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <label for="" style="margin-top: -1em;">Signature of Applicant</label>
                            <textarea name="signature" id="signature" cols="30" rows="2"></textarea>
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





