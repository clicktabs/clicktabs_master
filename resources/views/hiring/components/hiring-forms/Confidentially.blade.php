
<div class=" jj ttm vl ou uf na">
    <h1 class="fw-bolder display-4 text-primary text--certer">{{ Auth::user()->organization->name }}</h1>
    <div class="row mb-4 p-3 vt">
        <form action="{{route('hiring.confidentially')}}" method="post">
            @csrf 
              <div class="tz">
                    <h2 class=" text-center">CONFIDENTIALLY AGREEMENT</h2>
                        <div class="col-md-offset-3 vt">
                            <p class="mt-1 p-3">
                                I understand and acknowledge that:
                            </p>
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item">
                                    I shall respect and maintain the confidentiality of all discussion, delibrations,
                                    patient care records and any other information generated in connection with the 
                                    individual patient care, risk management and/or peer review activities. 
                                </li>
                                <li class="list-group-item">
                                    It is my legal and ethical responsibility to protect the privacy, confidentiality and 
                                    security of all medical records, proprietary information and other confidential information
                                    relating to <span> company name</span> and its affiliates, including business, employment 
                                    and medical information relating to our patients, members, employees, and healthcare providers.
                                </li>
                                <li class="list-group-item">
                                    I shall only access or disseminate patient care information in the performance of my asigned Duties
                                    and where required by or permitted by law, and in a manner which is consistent with officially adopted 
                                    policies of the company, or where no officially adopted policy exist, only with the express approval of 
                                    director of nursing or designee. I shall make no voluntary disclosure of any discussion, delibrations,
                                    patient care records or any patient care, peer review or risk management information, except to persons 
                                    authorized to recive it the conduct of the company affairs.
                                </li>
                                <li class="list-group-item">
                                    The company administration performs audits and reviews patient records in occurdance the company policiesto identify 
                                    inappropirate access to patnient information. 
                                </li>
                                <li class="list-group-item">
                                    My user ID is recorded when I access electronic records and that I am the only one authorized to use my user ID.
                                    I will only access information neccessary to complete my task or when requested by the DON.
                                </li>
                                <li class="list-group-item">
                                    I agree to discuss confidential information only in occurdance to work ethics, and not discuss such information outside
                                    work environment or within hearing of other people who do not have need to know about the information.
                                </li>
                                <li class="list-group-item">
                                    My obligation to safeguard patient confidentiality continues after termination of employment with the company
                                </li>
                              </ol>
                        </div>
                        <div class="col-md p-3">
                            <p>
                                I hereby acknowledge that I have read and understand the forgoing information and that my signature below signifies
                                my agreement to comply with the above terms. In the event of a breach or threatened breach of the Confidentiality
                                Agreement,. I acknowledge as applicable by the company's policies, disciplinary action up to and including termination 
                                of employment. 
                            </p>
                        </div>
                            <div class="row p-3">
                                <div class="col-md-4">
                                    <label for="">Employee Signature</label>
                                    <textarea name="signature" id="signature" cols="20" rows="2"></textarea>
                                </div>
                                <div class="col-md-4">
                                    <label for="printName">Print Name</label>
                                    <input name="printName" id="printName" type="text">
                                </div>
                             </div>
                     
                    <div class=" mt-5">
                        <button type="submit" class="btn btn-primary active mb-5">Save & Exit</button>
                    </div>
                </div>
                </form>
            </div>
        </div>


