
  
    <div class="vs jj ttm vl ou uf na">
      <h1 class="fw-bolder display-4 text-primary text--certer">{{ Auth::user()->organization->name }}</h1>
      <div class="row mb-4">
         <div class="inner vt p-3">
            <p class="text-center">Ethical, Professional, Respectful, and Legal Service Standards as defined in OAC 173-39-02 ODA Provider certification: requirements for providers to become, and to remain, certified</p>
            <p class="text-center">OAC 1739-39-02(B)(8) – effective 4/16/22</p>
            <p>The provider shall not engage in any unethical, unprofessional, disrespectful, or illegal behavior including the following:</p>
            <p>(a) Consuming alcohol while providing services to the individual.</p>
            <p>(b) Consuming medicine, drugs, or other chemical substances in a way that is illegal, unprescribed, or impairs the provider from providing services to the individual.</p>
            <p>(c) Accepting, obtaining, or attempting to obtain money, or anything of value, including gifts or tips, from the individual or his or her household or family members.</p>
            <p>(d) Engaging the individual in sexual conduct, or in conduct a reasonable person would interpret as sexual in nature, even if the conduct is consensual.</p>
            <p>(e) Leaving the individual's home when scheduled to provide a service for a purpose not related
               to providing the service without notifying the agency supervisor, the individual's emergency
               contact person, any identified caregiver, or ODA's designee.</p>
            <p>(f) Treating ODA or its designee disrespectfully.</p>
            <p>(g) Engaging in any activity while providing a service that may distract the provider from
               providing the service including the following:</p>
            <p>(i) Watching television, movies, videos, or playing games on computers, personal phones, or
               other electronic devices whether owned by the individual, provider, or the provider's staff.</p>
            <p>(ii) Non-care-related socialization with a person other than the individual (e.g., a visit from a
               person who is not providing care to the individual; making or receiving a personal telephone call;
               or, sending or receiving a personal text message, email, or video).</p>
            <p>(iii) Providing care to a person other than the individual.</p>
            <p>(iv) Smoking tobacco or any other material in any type of smoking equipment, including
               cigarettes, electronic cigarettes, vaporizers, hookahs, cigars, or pipes.</p>
            <p>(v) Sleeping.</p>
            <p>(vi) Bringing a child, friend, relative, or anyone else, or a pet, to the individual's place of
               residence.</p>
            <p>(vii) Discussing religion or politics with the individual and others.</p>
            <p>(viii) Discussing personal issues with the individual or any other person.</p>
            <p>(h) Engaging in behavior that causes, or may cause, physical, verbal, mental, or emotional
               distress or abuse to the individual including publishing photos of the individual on social media
               without the individual's written or electronic consent.</p>
            <p>(i) Engaging in behavior a reasonable person would interpret as inappropriate involvement in the
               individual's personal relationships.</p>
            <p>(j) Making decisions, or being designated to make decisions, for the individual in any capacity
               involving a declaration for mental health treatment, power of attorney, durable power of
               attorney, guardianship, or authorized representative.</p>
            <p>(k) Selling to, or purchasing from, the individual products or personal items, unless the provider
               is the individual's family member who does so only when not providing services.</p>
            <p>(l) Consuming the individual's food or drink, or using the individual's personal property without
               his or her consent.</p>
            <p>(m) Taking the individual to the provider's business site, unless the business site is an ADS
               center, RCF, or (if the provider is a participant-directed provider) the individual's home.</p>
            <p>(n) Engaging in behavior constituting a conflict of interest, or taking advantage of, or
               manipulating services resulting in an unintended advantage for personal gain that has detrimental
               results to the individual, the individual's family or caregivers, or another provider.</p>
            <div class="mb-5"></div>
               <div class="d-flex gap-3">
                  <div id="message"></div>
                  <div class="row">
                     {{-- @if(session::get('success'))
                     <div class="alert alert-success">
                        {{ session::get('success')}}
                     </div>
                  @endif
                  @if(session::get('success'))
                  <div class="alert alert-danger">
                     {{ session::get('fail')}}
                  </div>
               @endif --}}
                  <form action="ethics" method="post">
                     @csrf
                  <div class="col-md-6">
                     <label for="signature">Workers signature</label>
                     <input type="text" name="signature" id="signature" value="">
                  </div>
                  <div class=" pb-5 mt-4">
                     <button type="submit" class="d-flex px-5 btn btn-primary active">Save and Continue</button>
               </div>
               </form>
               </div>
            </div>
         </div><!--/ .inner -->
      </div>
          </div>

  
  