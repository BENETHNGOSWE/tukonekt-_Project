

<div class="ugf-bg ufg-main-container">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 p-sm-0">
          <div class="ugf-form">
            <form action="{{ route('store.registers')}}" method="post">
              @csrf
              <div class="input-block">
                <h4>Personal Information</h4>
                <div class="row">
                  <div class="col-md-6 p-sm-0">
                    <div class="form-group">
                      <label for="first_name">First Name</label>
                      <input type="text" class="form-control" id="first_name" name="first_name"  placeholder="e.g. Robert">
                    </div>
                  </div>


                  <div class="col-md-6 p-sm-0">
                    <div class="form-group">
                      <label for="middlename">Middlename</label>
                      <input type="text" class="form-control" id="middlename" name="middlename"  placeholder="e.g. Smith">
                    </div>
                  </div>


                  <div class="col-md-6 p-sm-0">
                    <div class="form-group">
                      <label for="last_name">Last Name</label>
                      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="e.g. Smith">
                    </div>
                  </div>
                  <div class="col-md-6 p-sm-0">
                    <div class="form-group">
                      <label for="phone_number">Phone Number</label>
                      <input type="text" class="form-control" id="phone_number" name="phone_number"  placeholder="e.g. +255710459064">
                    </div>
                  </div>
                  <div class="col-md-6 p-sm-0">
                    <div class="form-group">
                      <label for="zip">Date of Entry </label>
                      <input type="text" class="form-control" placeholder="e.g. 02/10/2023">
                    </div>
                  </div>
                  <div class="col-md-6 p-sm-0">
                    <div class="form-group">
                      <label for="country_of_nationality">Country of Nationality</label>
                      <input type="text" class="form-control" id="country_of_nationality" name="country_of_nationality" placeholder="e.g. Tanzania">
                    </div>
                  </div>
                  <div class="col-md-6 p-sm-0">
                    <div class="form-group">
                      <label for="city">City</label>
                      <input type="text" class="form-control" id="city" name="city" placeholder="e.g. Dar es salaam">
                    </div>
                  </div>
                  <div class="col-md-6 p-sm-0">
                    <div class="form-group">
                        <label for="date_of_entry">Date of Entry</label>
                        <input type="text" class="form-control" id="date_of_entry" name="date_of_entry" placeholder="e.g. 07/010/2023">
                    </div>
                  </div>
                
                  <div class="col-md-6 p-sm-0">
                    <div class="form-group">
                      <label for="address_line_1">Address Line 1</label>
                      <input type="text" class="form-control" id="address_line_1" name="address_line_1" placeholder="e.g. 2707 Par Drive">
                    </div>
                  </div>
                  <div class="col-md-6 p-sm-0">
                    <div class="form-group">
                      <label for="address_line_2">Address Line 2</label>
                      <input type="text" class="form-control" id="address_line_2" name="address_line_2" placeholder="e.g. Los Angeles, CA 90013">
                    </div>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label for="">Gender</label>
                  <div class="check-gender">
                    <div class="custom-radio">
                      <input type="radio" name="gender" class="custom-control-input" required>
                      <label class="custom-control-label" for="Gmale">Male</label>
                    </div>
                    <div class="custom-radio">
                      <input type="radio" name="gender" class="custom-control-input" required>
                      <label class="custom-control-label" for="Gfemale">Female</label>
                    </div>
                  </div>
                </div> -->
              </div>
              <!-- <div class="input-block">
                <h4>Personal Documents</h4>
                <p>Upload any of the following personal document.</p>
                <div class="documents-upload-wrap">
                  <div class="label">Select Document type</div>
                  <ul class="nav nav-tabs nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="passport-tab" data-bs-toggle="pill" href="#passport" role="tab" aria-controls="passport" aria-selected="true"><img src="assets/images/passport.png" alt="">passport</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="nid-tab" data-bs-toggle="pill" href="#nid" role="tab" aria-controls="nid" aria-selected="false"><img src="assets/images/nid.png" alt="">National id</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="driver-tab" data-bs-toggle="pill" href="#driver" role="tab" aria-controls="driver" aria-selected="false"><img src="assets/images/driving.png" alt="">Driver’s License</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="passport" role="tabpanel" aria-labelledby="home-tab">
                      <div class="documents-upload">
                        <div class="upload-item">
                          <input type="file" id="input1" class="input-file" accept="image/*" hidden />
                          <label class="btn-upload" for="input1" role="button">
                            <img src="assets/images/cloud.png">
                            <div id="p-input1" class="preview-box"></div>
                          </label>
                          <div class="upload-direction"><span class="text">Passport Cover</span><a href="#"><img src="assets/images/download.png" alt=""></a></div>
                        </div>
                        <div class="upload-item">
                          <input type="file" id="input2" class="input-file" accept="image/*" hidden />
                          <label class="btn-upload" for="input2" role="button">
                            <img src="assets/images/cloud.png">
                            <div  id="p-input2" class="preview-box"></div>
                          </label>
                          <div class="upload-direction"><span class="text">Passport Data Page</span><a href="#"><img src="assets/images/download.png" alt=""></a></div>
                        </div>
                        <div class="upload-item">
                          <input type="file" id="input3" class="input-file" accept="image/*" hidden />
                          <label class="btn-upload" for="input3" role="button">
                            <img src="assets/images/cloud.png">
                            <div  id="p-input3" class="preview-box"></div>
                          </label>
                          <div class="upload-direction"><span class="text">Selfie With Passport</span><a href="#"><img src="assets/images/download.png" alt=""></a></div>
                        </div>
                      </div>
                      <div class="conditions">
                        <ul>
                          <li class="complete">File accepted: JPEG/JPG/PNG (Max size: 250 KB)</li>
                          <li>Document should be good condition</li>
                          <li>Document must be  valid period</li>
                          <li>Face must be clear visible</li>
                          <li>Note has today’s date</li>
                        </ul>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nid" role="tabpanel" aria-labelledby="nid-tab">
                      <div class="documents-upload">
                        <div class="upload-item">
                          <input type="file" id="input4" class="input-file" accept="image/*" hidden />
                          <label class="btn-upload" for="input4" role="button">
                            <img src="assets/images/cloud.png">
                            <div id="p-input4" class="preview-box"></div>
                          </label>
                          <div class="upload-direction"><span class="text">National ID Front</span><a href="#"><img src="assets/images/download.png" alt=""></a></div>
                        </div>
                        <div class="upload-item">
                          <input type="file" id="input5" class="input-file" accept="image/*" hidden />
                          <label class="btn-upload" for="input5" role="button">
                            <img src="assets/images/cloud.png">
                            <div id="p-input5" class="preview-box"></div>
                          </label>
                          <div class="upload-direction"><span class="text">National ID Back</span><a href="#"><img src="assets/images/download.png" alt=""></a></div>
                        </div>
                        <div class="upload-item">
                          <input type="file" id="input6" class="input-file" accept="image/*" hidden />
                          <label class="btn-upload" for="input6" role="button">
                            <img src="assets/images/cloud.png">
                            <div id="p-input6" class="preview-box"></div>
                          </label>
                          <div class="upload-direction"><span class="text">Selfie With National ID</span><a href="#"><img src="assets/images/download.png" alt=""></a></div>
                        </div>
                      </div>
                      <div class="conditions">
                        <ul>
                          <li class="complete">File accepted: JPEG/JPG/PNG (Max size: 250 KB)</li>
                          <li>Document should be good condition</li>
                          <li>Document must be  valid period</li>
                          <li>Face must be clear visible</li>
                          <li>Note has today’s date</li>
                        </ul>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="driver" role="tabpanel" aria-labelledby="driver-tab">
                      <div class="documents-upload">
                        <div class="upload-item">
                          <input type="file" id="input7" class="input-file" accept="image/*" hidden />
                          <label class="btn-upload" for="input7" role="button">
                            <img src="assets/images/cloud.png">
                            <div id="p-input7" class="preview-box"></div>
                          </label>
                          <div class="upload-direction"><span class="text">License Front</span><a href="#"><img src="assets/images/download.png" alt=""></a></div>
                        </div>
                        <div class="upload-item">
                          <input type="file" id="input8" class="input-file" accept="image/*" hidden />
                          <label class="btn-upload" for="input8" role="button">
                            <img src="assets/images/cloud.png">
                            <div id="p-input8" class="preview-box"></div>
                          </label>
                          <div class="upload-direction"><span class="text">License Back</span><a href="#"><img src="assets/images/download.png" alt=""></a></div>
                        </div>
                        <div class="upload-item">
                          <input type="file" id="input9" class="input-file" accept="image/*" hidden />
                          <label class="btn-upload" for="input9" role="button">
                            <img src="assets/images/cloud.png">
                            <div id="p-input9" class="preview-box"></div>
                          </label>
                          <div class="upload-direction"><span class="text">Selfie With License</span><a href="#"><img src="assets/images/download.png" alt=""></a></div>
                        </div>
                      </div>
                      <div class="conditions">
                        <ul>
                          <li class="complete">File accepted: JPEG/JPG/PNG (Max size: 250 KB)</li>
                          <li>Document should be good condition</li>
                          <li>Document must be  valid period</li>
                          <li>Face must be clear visible</li>
                          <li>Note has today’s date</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>  
                <div class="form-group">
                  <div class="custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customControlValidation1" required="">
                    <label class="custom-control-label" for="customControlValidation1">I accept the <a href="#">Terms &amp; Conditions</a> and <a href="#">Privacy policy</a></label>
                  </div>
                </div>
              </div> -->
              <!-- <button type="submit" class="btn btn-primary">Submit Documents</button> -->
              <button type="submit" value="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
    




<!-- <form action="{{ route('store.registers')}}" method="post">
    @csrf
    <label for="first_name">First Name:</label><br>
    <input type="text" id="first_name" name="first_name"><br>
    <label for="middlename">Middle Name:</label><br>
    <input type="text" id="middlename" name="middlename"><br>
    <label for="last_name">Last Name:</label><br>
    <input type="text" id="last_name" name="last_name"><br>
    <label for="country_of_nationality">Country of Nationality:</label><br>
    <input type="text" id="country_of_nationality" name="country_of_nationality"><br>
    <label for="address_line_1">Address Line 1:</label><br>
    <input type="text" id="address_line_1" name="address_line_1"><br>
    <label for="address_line_2">Address Line 2:</label><br>
    <input type="text" id="address_line_2" name="address_line_2"><br>
    <label for="city">City:</label><br>
    <input type="text" id="city" name="city"><br>
    <label for="date_of_entry">Date of Entry:</label><br>
    <input type="date" id="date_of_entry" name="date_of_entry"><br>
    <label for="phone_number">Phone Number:</label><br>
    <input type="tel" id="phone_number" name="phone_number"><br>
    <input type="submit" value="Submit">
</form> -->