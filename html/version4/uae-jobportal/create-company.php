<?php 
include("includes/header.php");
?>
<!-- ======================= End Navigation ===================== --> 

<!-- ======================= Start Page Title ===================== -->
<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>Create Company</h2>
      <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i> Create Company</p>
    </div>
  </div>
</div>
<!-- ======================= End Page Title ===================== --> 

<!-- ======================= Start Create Company ===================== -->
<section class="utf_create_company_area padd-top-80 padd-bot-80">
  <div class="container">
    <form class="c-form">
      <!-- General Information -->
      <div class="box">
        <div class="box-header">
          <h4>General Information</h4>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Company Name</label>
              <input type="text" class="form-control" placeholder="Company Name">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Company Tagline</label>
              <input type="text" class="form-control" placeholder="Company Tagline">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Category</label>
              <select class="wide form-control">
                <option data-display="Location">Information Of Technology</option>
                <option value="1">Hardware</option>
                <option value="2">Machanical</option>
              </select>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 m-clear">
              <label>Owner Name</label>
              <input type="text" class="form-control" placeholder="Owner Name">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Company Logo</label>
              <div class="custom-file-upload">
                <input type="file" id="file" name="myfiles[]" multiple />
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Established</label>
              <input type="text" placeholder="Established" id="reservation-date" data-lang="en" data-large-mode="true" data-min-year="2020" data-max-year="2020" data-disabled-days="08/17/2020,08/18/2020" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Company Address -->
      <div class="box">
        <div class="box-header">
          <h4>Company Address</h4>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Email</label>
              <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Phone Number</label>
              <input type="text" class="form-control" placeholder="Phone Number">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Landline</label>
              <input type="text" class="form-control" placeholder="Landline">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Website Link</label>
              <input type="text" class="form-control" placeholder="Website Link">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Address</label>
              <input type="text" class="form-control" placeholder="Address">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>City</label>
              <select class="wide form-control">
                  <option data-display="City">Afghanistan</option>
                  <option value="1">Albania</option>
				  <option value="2">Algeria</option>
				  <option value="3">Brazil</option>
				  <option value="4">Burundi</option>
				  <option value="5">Bulgaria</option>
				  <option value="6">Germany</option>
				  <option value="7">Grenada</option>
				  <option value="8">Guatemala</option>
				  <option value="9" disabled>Iceland</option>
              </select>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 m-clear">
              <label>State</label>
              <select class="wide form-control">
                  <option data-display="State">Afghanistan</option>
                  <option value="1">Albania</option>
				  <option value="2">Algeria</option>
				  <option value="3">Brazil</option>
				  <option value="4">Burundi</option>
				  <option value="5">Bulgaria</option>
				  <option value="6">Germany</option>
				  <option value="7">Grenada</option>
				  <option value="8">Guatemala</option>
				  <option value="9" disabled>Iceland</option>
              </select>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 m-clear">
              <label>Country</label>
              <select class="wide form-control">
                  <option data-display="State">Afghanistan</option>
                  <option value="1">Albania</option>
				  <option value="2">Algeria</option>
				  <option value="3">Brazil</option>
				  <option value="4">Burundi</option>
				  <option value="5">Bulgaria</option>
				  <option value="6">Germany</option>
				  <option value="7">Grenada</option>
				  <option value="8">Guatemala</option>
				  <option value="9" disabled>Iceland</option>
              </select>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 m-clear">
              <label>Zip Code</label>
              <input type="text" class="form-control" placeholder="Zip Code">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Employees</label>
              <select class="wide form-control">
                <option data-display="Employees">10 - 50</option>
                <option value="1">50 - 100</option>
                <option value="2">100 - 500</option>
                <option value="3" disabled>500 - 1000</option>
              </select>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 m-clear">
              <label>Working Time</label>
              <select class="wide form-control">
                <option data-display="Working Time">08:00AM To 5:00PM</option>
                <option value="1">10:00AM To 4:00PM</option>
                <option value="2">10:00AM To 6:00PM</option>
                <option value="3" disabled>11:00AM To 7:00PM</option>
              </select>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 m-clear">
              <label>Address 2</label>
              <input type="text" class="form-control" placeholder="Address Two">
            </div>
          </div>
        </div>
      </div>
      
      <!-- Social Accounts -->
      <div class="box">
        <div class="box-header">
          <h4>Social Accounts</h4>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Facebook</label>
              <input type="text" class="form-control" placeholder="https://www.facebook.com/">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Google +</label>
              <input type="text" class="form-control" placeholder="https://www.gmail.com/">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Twitter</label>
              <input type="text" class="form-control" placeholder="https://twitter.com/">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>LinkedIn</label>
              <input type="text" class="form-control" placeholder="https://www.linkedin.com/">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Pinterest</label>
              <input type="text" class="form-control" placeholder="https://www.pinterest.com/">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Instagram</label>
              <input type="text" class="form-control" placeholder="http://instagram.com/">
            </div>
          </div>
        </div>
      </div>
      
      <!-- Company Summery -->
      <div class="box">
        <div class="box-header">
          <h4>Company Summery</h4>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-sm-12">
              <label>About Company</label>
              <textarea class="form-control height-120 textarea" placeholder="About Company"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-m theme-btn full-width">Submit</button>
      </div>
    </form>
  </div>
</section>
<!-- ====================== End Create Company ================ --> 

<section class="newsletter theme-bg" style="background-image:url(assets/img/bg-new.png)">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="heading light">
          <h2>Subscribe Our Newsletter!</h2>
          <p>Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
        <div class="newsletter-box text-center">
          <div class="input-group"> <span class="input-group-addon"><span class="ti-email theme-cl"></span></span>
            <input type="text" class="form-control" placeholder="Enter your Email...">
          </div>
          <button type="button" class="btn theme-btn btn-radius btn-m">Subscribe</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= footer start ========================= -->
<?php 
include("includes/footer.php");
?>