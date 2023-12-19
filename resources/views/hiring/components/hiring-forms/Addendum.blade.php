
<style>
        .vt{
            background-image: linear-gradient(rgb(238, 239, 192), rgb(203, 242, 240));
            border-radius: 4px;
        }
</style>
<div class="col">
    <h1 class="fw-bolder display-4 text-primary text--certer">{{ Auth::user()->organization->name }}</h1>
    <div class="row mb-4">
        <div class="vt tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
            <div class="dk">
                <form action="addendum" method="post">
                    @csrf
                    <div class="mt-3">
                        <h1 class="gu teu text-slate-800 font-bold rt text-center text-decoration-underline">ADDENDUM TO EMPLOYEE APPLICATION</h1>
                    </div>
                    <div class="mt-3">
                        <p>
                            The Ohio Adminstrative Code (5123:2-.05) requires that home health care companies ascertain 
                            from applicants for employment that they have not been covvicted, plead guilty of the offenses
                            listed below. Your signature below indicates that you have not commited nor plead guilty of:
                        </p>
                        <br>
                        <p>
                            Aggravated murder, muder, voluntry manslaughter, involuntary manslaghter, felonious assault
                            aggravated assault, failing to provide for funtionally impaired person, aggravated menacing,  
                            patient abuse and neglect, kdnapping, abduction, criminal child enticement, rape, sexual battery
                            unlawful sexual conduct with a minor, gross sexual imposition, importurning, voyeurism,
                            public indecency, compelling prodtitution, promoting prodtitution, procuring prodtitution,
                            disseminating matter harmful to juveniles, pandering obscenity, pandring obscenity involving a minor,
                            pandering sexually oriented materials involving a manor, illegal use of a minor nudity-oriented materials
                            or performance, aggravated robbery, robbery, aggravated burglary, burglary, domestic violence, carrying
                            concealed weapon, having weapons while under disability, improperly discharge a firearm at or into habitation
                            or schoo;, corrupting others with drugs, trafficking in drugs, illegal manufacture of drugs
                            cultivation of mariguana, funding of drugs or mariguana trafficking, illegal admistration or
                            distribution of anabolic steroids, placing harmful objects in food, or confection, child stealing, possession
                            of drugs, felonious sexual penetration. 
                        </p>
                        <br>
                        <p>I, <textarea name="fullName" id="fullName" cols="30" rows="1" class=" ml-1 mr-1" placeholder="Enter Full Name"></textarea> have read the contects of this addendum to my
                            application for employment with <span>company</span> also understand that i am required by law to notify
                            the office within 14(fourteen) days if I receive formal charges, convictions, or
                            make guilty plea to any of the disqualifying offenses listed above.
        
                        </p>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <label for="">Signature of Applicant</label>
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




