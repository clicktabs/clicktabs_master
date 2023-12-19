
<div class="vs jj ttm vl ou uf na">
    <h1 class="fw-bolder display-4 text-primary text--certer">{{ Auth::user()->organization->name }}</h1>
    <div class="row mb-4">
        <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
            <div class="dk">
                <form action="{{route('hiring.storetb')}}" method="post">
                @csrf   
                    <div class="">
                  
                      <div class="dk">
                          <h1 class="gu teu text-slate-800 font-bold rt text-center text-decoration-underline">TB Screening</h1>
                      </div>
                      <div class="col-md-12">
                          
                          <label for="">Have you had recent contact with someone who has tuberculosys?</label>
                          <input class="ml-1" type="radio" name="tuberculosys" value="1">Yes
                          <input class="ml-1" type="radio" name="tuberculosys" value="0">No 
                      </div>
                      <div class="dk">
                          <label for="">Has anyone living with you had tuberculosys?</label>
                          <input class="ml-1" type="radio" name="living" value="1">Yes
                          <input class="ml-1" type="radio" name="living" value="0">No 
                      </div>
                      <div class="dk">
                          <label for="">Have you had positive TB skin test?</label>
                          <input class="ml-1" type="radio" name="skin" value="1">Yes
                          <input class="ml-1" type="radio" name="skin" value="0">No |
                          if yes explain:- <input class="text border border-dark" name="skinExplain" span="10"> 
                      </div>
                      <div class="dk">
                          <label for="">Have you had abnormal chest X-ray?</label>
                          <input class="ml-1" type="radio" name="xray" value="1">Yes
                          <input class="ml-1" type="radio" name="xray" value="0">No |
                          if yes list:- <input class="text border border-dark" name="xrayExplain" span="10"> 
                      </div>
                      <div class="dk">
                          <label for="">Do you have any type of chronic disease?</label>
                          <input class="ml-1" type="radio" name="chronic" value="1">Yes
                          <input class="ml-1" type="radio" name="chronic" value="0">No |
                          if yes explain:- <input class="text border border-dark" name="chronicExplain" span="10"> 
                      </div>
                      <div class="dk">
                          <label for="">Has anyone living with you had tuberculosys?</label>
                          <input class="ml-1" type="radio" name="tuberculosys1" value="1">Yes
                          <input class="ml-1" type="radio" name="tuberculosys1" value="0">No 
                      </div>
                      <div class="dk">
                          <label for="">Has anyone living with you had tuberculosys?</label>
                          <input class="ml-1" type="radio" name="tuberculosys2" value="1">Yes
                          <input class="ml-1" type="radio" name="tuberculosys2" value="0">No
                      </div>
                  
                  <div class="row mt-3">
                      <h2 class="gu teu text-slate-800 font-bold rt text-center text-decoration-underline">Have you had any of the following symptoms</h2>
                      <div class="col-md-6">
                          <div class="dk">
                              <label for="">Weight loss</label>
                              <input class="ml-1" type="checkbox" name="living0Yes" value="1">Yes
                              <input class="ml-1" type="checkbox" name="living0No" value="1">No 
                          </div>
                          <div class="dk">
                              <label for="">Extreme tiredness or fatigure</label>
                              <input class="ml-1" type="checkbox" name="livingYes" value="1">Yes
                              <input class="ml-1" type="checkbox" name="livingNo" value="1">No 
                          </div>
                          <div class="dk">
                              <label for=""></label>
                              <input class="ml-1" type="checkbox" name="living1Yes" value="1">Yes
                              <input class="ml-1" type="checkbox" name="living1No" value="1">No
                          </div>
                          <div class="dk">
                              <label for=""></label>
                              <input class="ml-1" type="checkbox" name="living2Yes" value="1">Yes
                              <input class="ml-1" type="checkbox" name="living2No" value="1">No
                          </div>
                          <div class="dk">
                              <label for="">Shortness of breath</label>
                              <input class="ml-1" type="checkbox" name="living3Yes" value="1">Yes
                              <input class="ml-1" type="checkbox" name="living3No" value="1">No
                          </div>
                          <div class="dk">
                              <label for="">Night Sweats</label>
                              <input class="ml-1" type="checkbox" name="living4Yes" value="1">Yes
                              <input class="ml-1" type="checkbox" name="living4No" value="1">No
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="dk">
                              <label for="">Productive cough</label>
                              <input class="ml-1" type="checkbox" name="living5Yes" value="1">Yes
                              <input class="ml-1" type="checkbox" name="living5No" value="1">No
                          </div>
                          <div class="dk">
                              <label for="">Blood producing cough</label>
                              <input class="ml-1" type="checkbox" name="living6Yes" value="1">Yes
                              <input class="ml-1" type="checkbox" name="living6No" value="1">No
                          </div>
                          <div class="dk">
                              <label for="">Chest pain around the ribs</label>
                              <input class="ml-1" type="checkbox" name="living7Yes" value="1">Yes
                              <input class="ml-1" type="checkbox" name="living7No" value="1">No
                          </div>
                          <div class="dk">
                              <label for="">Unexplained fevers</label>
                              <input class="ml-1" type="checkbox" name="living8Yes" value="1">Yes
                              <input class="ml-1" type="checkbox" name="living8No" value="1">No
                          </div>
                          <div class="dk">
                              <label for="">Loss of apprtite</label>
                              <input class="ml-1" type="checkbox" name="living9Yes" value="1">Yes
                              <input class="ml-1" type="checkbox" name="living9No" value="1">No |
                          </div>
                          <div class="dk">
                              if you answered yes to any of the above, explain:- 
                              <textarea name="explainScreen" id="" cols="30" rows="2"></textarea>
                          </div>
                      </div>
                   </div>
                   <div class="row mt-5">
                      <div class="col-md-6">
                          <label for="">Signature of Applicant</label>
                          <textarea name="" id="" cols="30" rows="2"></textarea>
                      </div>
                    </div>
              </div> 
              <button type="submit" class="btn btn-primary active mb-5">Save & Exit</button>
          </form> 
            </div>
        </div>
    </div>
</div>

<