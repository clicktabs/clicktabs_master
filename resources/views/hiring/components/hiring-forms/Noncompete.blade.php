
<div class="vs jj ttm vl ou uf na">
    <h1 class="fw-bolder display-4 text-primary text--certer">{{ Auth::user()->organization->name }}</h1>
    <div class="row mb-4">
        <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
            <div class="dk">
                <form action="{{route('hiring.storenoncompete')}}" method="post">
                    @csrf
                    <div class="row mb-4">
                        <h1 class="gu teu text-slate-800 font-bold rt text-center text-decoration-underline mb-4">
                            EMPLOYEE NON-COMPETE AGREEMENT
                        </h1>
                        <div class="col-md-12">
                            <p>
                                For good Consideration and as an inducement for <span>company name</span> to employ 
                                <span><input type="text" name="employeeName"></span>(Employees) he/she understand employee here by agrees not 
                                directly or indirectly compete the business of the company and its successors and assigns during
                                the period of employment and for a period of 10years following termination of employment and
                                motwithstanding the cause or reason for termination.
                            </p>
                        </div>
                        <div class="col-md-12">
                            <p>
                                The term <span class="fw-bolder">"not compete"</span> as used herein shall mean that the employee shall not owe, 
                                manage, operate, consult or be employed in a business sustantially similar to or competitive with, 
                                the present business of the company or such other business activity in which company may substantially 
                                engage the term of employment. 
                                
                            </p>
                        </div>
                        <div class="col-md-12">
                            <p>
                                The employees acknownledge that, the company shall or may in reliance of this AGREEMENT
                                provide employee access to trade secrets, customers and other confidential data and good will.
                                Employee agree to retain said information as confidential and not to use said information or his/her 
                                own behalf or disclose same to any third party. Also, the employee agrees not to remove Client to other
                                agencies or related facilities.
                            </p>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label for="">Signature of Applicant</label>
                                <textarea name="signature" id="" cols="30" rows="2"></textarea>
                            </div>
                          </div>
                        <div class=" mt-5">
                            <button type="submit" class="btn btn-primary active mb-5">Save & Exit</button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


