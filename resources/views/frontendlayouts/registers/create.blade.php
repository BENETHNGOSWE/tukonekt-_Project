@extends('frontendlayouts.main')
@section('content')

<div class="ugf-bg ufg-main-container">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 p-sm-0">
        <div class="ugf-form">
          @if(session('success'))
          <div class="alert alert-success">
            <div class="feedback-box">
              <i class="fas fa-trash"></i>
              {{ session('success') }}
              <!-- Add a button inside the alert -->
              <button type="button" class="btn btn-primary" style="float: right; height: 50px; width: 100px; text-align: center; line-height: 30px; margin-top:-1em;" onclick="redirectToNextForm()">Continue 👉</button>
            </div>
          </div>
          @endif
          <form action="{{ route('store.registers')}}" method="post">
            @csrf
            <div class="input-block">
              <h4 style="color: white;">Personal Information</h4>
              <div class="row">
                <div class="col-md-6 p-sm-0">
                  <div class="form-group">
                    <label style="color: white;" for="first_name">First Name <span style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="e.g. Robert" required>
                    @error('first_name')
                    <div style="color: red;">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6 p-sm-0">
                  <div class="form-group">
                    <label style="color: white;" for="middlename">Middle Name</label>
                    <input type="text" class="form-control" id="middlename" name="middlename" placeholder="e.g. Smith">
                  </div>
                </div>


                <div class="col-md-6 p-sm-0">
                  <div class="form-group">
                    <label style="color: white;" for="last_name">Surname <span style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="e.g. Smith" required>
                  </div>
                </div>
                <div class="col-md-6 p-sm-0">
                  <div class="form-group">
                    <label style="color: white;" for="phone_number">Phone Number <span style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="e.g. +255710459064" required>
                    <small class="error-message" style="color: red; display: none;">Please fill in this field.</small>
                  </div>
                </div>
                <div class="col-md-6 p-sm-0">
                  <div class="form-group">
                    <label style="color: white;" for="email">Email <span style="color: red;">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="e.g. example@gmail.com" required>
                    @error('email')
                    <div style="color: red;">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6 p-sm-0">
                  <div class="form-group">
                    <label style="color: white;" for="gender">Gender <span style="color: red;">*</span></label>
                    <select class="form-control" id="gender" name="gender" placeholder="e.g. Other" required>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 p-sm-0">
                  <div class="form-group">
                    <label style="color: white;" for="age_group">Age Group</label>
                    <select class="form-control" id="age_group" name="age_group" placeholder="e.g. 18">
                      <option value="0-18">0-18 yrs</option>
                      <option value="19-35">19-35 yrs</option>
                      <option value="35-above">36-above</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 p-sm-0">
                  <div class="form-group">
                    <label style="color: white;" for="city">City <span style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="e.g. Dar es salaam" required>

                  </div>
                </div>
                <div class="col-md-6 p-sm-0">
                  <div class="form-group">
                    <label style="color: white;" for="address_line_2">Address Location</label>
                    <input type="text" class="form-control" id="address_line_2" name="address_line_2" placeholder="e.g. Kigogo">
                  </div>
                </div>

              </div>

            </div>

            <button type="submit" value="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .feedback-box {
    background-color: #d4edda;
    /* Green background color */
    color: #155724;
    /* Text color */
    padding: 15px;
    /* Padding around the content */
    border-radius: 5px;
    /* Rounded corners */
  }
</style>

<script>
  function validateForm() {
    var phoneNumber = document.getElementById('phone_number').value;

    if (phoneNumber.trim() === '') {
      document.querySelector('.error-message').style.display = 'block';
      return false;
    }

    return true;
  }
</script>

<script>
  // JavaScript function to redirect to the next form
  function redirectToNextForm() {
    // You can replace 'next-form-url' with the actual URL of your next form
    window.location.href = 'next-form-url';
  }
</script>

@endsection