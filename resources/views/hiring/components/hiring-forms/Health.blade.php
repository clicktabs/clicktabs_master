
<style>
  form-group.col-md-4 {
display: flex;
align-items: center;
}
form-group.col-md-4 {
display: flex;
align-items: center;
}

</style>

<div class="vs jj ttm vl ou uf na">
  <h1 class="fw-bolder display-4 text-primary text--certer">{{ Auth::user()->organization->name }}</h1>
  <div class="row mb-4">
      <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
          <div class="dk">
            <form action="{{route('hiring.storehealth')}}" method="post">
              @csrf
              <h1 class="gu teu text-slate-800 font-bold rt text-center text-decoration-underline">HEALTH STATEMENT</h1>
              <div class="row mt-4">
                  <div class="col-md-8">
                      <label for="">Applicant Name:-</label>
                      <input type="text" name="applicantName">
                  </div>
                  <div class="col-md-4">
                      <label for="date">Date</label>
                      <input type="date" name="date" id="date">
                  </div>
              </div>
              <div class="row mt-3">
                  <div class="col-md-12">
                      <p>
                          I, <textarea name="fullName" id="" cols="30" rows="1" class=" ml-1 mr-1" placeholder="Enter Full Name"></textarea>
                          hereby attest that the state of my health is such that it will enable me to perform the duties of a health care profeesional. 
                          I further specifically attest that I am free of any and all potentially contagious including 
                          but not limited to those below;
                      </p>
                  </div>
                  <div class="col-md-12 mt-4">
                      <table class="table table-success table-striped-columns">
                          <thead>
                            <tr>
                              <th scope="col">ADIS</th>
                              <th scope="col">ANTHRAX</th>
                              <th scope="col">CHICKENPOX</th>
                              <th scope="col">CHOLERA</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Diphtheria</td>
                              <td>Encephalitis</td>
                              <td>Hepatitis, Types A, B and C</td>
                              <td>Influenza</td>
                            </tr>
                            <tr>
                              <td>Leprosy (Hansen's Disease)</td>
                              <td>Leptospirosis</td>
                              <td>Malaria</td>
                              <td>Measles (Rubeola)</td>
                            </tr>
                            <tr>
                              <td>Meningitis</td>
                              <td>Mononucleosis</td>
                              <td>Mimps</td>
                              <td>Whooping Cough</td>
                            </tr>
                            <tr>
                              <td>Plaugue</td>
                              <td>Pollomyelitis</td>
                              <td>Psittacois (Ornithosis)</td>
                              <td>Rabies</td>
                            </tr>
                            <tr>
                              <td>Rocky Mountain Spotted Fever</td>
                              <td>Rubella (German Measles)</td>
                              <td>Shigellosis</td>
                              <td>Smallpox</td>
                            </tr>
                            <tr>
                              <td>Tetanus</td>
                              <td>Tularemia</td>
                              <td>Tuberculosis</td>
                              <td>Typhoid Fever</td>
                            </tr>
                          </tbody>
                        </table>
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


