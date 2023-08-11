<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Truelysell | Template</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/feather.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="main-wrapper">

    <?php include './includes/header.php';?>

<div class="content">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-10">
<div class="section-header text-center">
<h2 class="content-title">Add Service</h2>
</div>
<form>
<div class="service-fields mb-3">
<h3 class="heading-2">Service Information</h3>
<div class="row">
<div class="col-lg-12">
<div class="form-group">
<label>Service Title <span class="text-danger">*</span></label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Service Amount <span class="text-danger">*</span></label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Service Location <span class="text-danger">*</span></label>
<input class="form-control" type="text">
</div>
</div>
</div>
</div>
<div class="service-fields mb-3">
<h3 class="heading-2">Service Category</h3>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label>Category <span class="text-danger">*</span></label>
<select class="form-control form-select">
<option>Automobile</option>
<option>Construction</option>
<option>Interior</option>
<option>Cleaning</option>
<option>Electrical</option>
<option>Carpentry</option>
<option>Computer</option>
</select>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Sub Category <span class="text-danger">*</span></label>
<select class="form-control form-select">
<option>House Cleaning</option>
<option>Full Car Wash</option>
 <option>Roofing</option>
<option>Indoor Glass</option>
<option>Convertible Fridge</option>
<option>Fridge</option>
<option>Car Wash</option>
<option>Others</option>
</select>
</div>
</div>
</div>
</div>
<div class="service-fields mb-3">
<h3 class="heading-2">Service Offer</h3>
<div class="membership-info">
<div class="row form-row membership-cont">
<div class="col-lg-6">
<div class="form-group">
<label>Service Offered <span class="text-danger">*</span></label>
<input class="form-control" type="text">
</div>
</div>
</div>
</div>
<div class="add-more form-group">
<a href="javascript:void(0);" class="add-membership"><i class="fas fa-plus-circle"></i> Add More</a>
</div>
</div>
<div class="service-fields mb-3">
<h3 class="heading-2">Details Information</h3>
<div class="row">
<div class="col-lg-12">
<div class="form-group">
<label>Descriptions <span class="text-danger">*</span></label>
<textarea class="form-control service-desc"></textarea>
</div>
</div>
</div>
</div>
<div class="service-fields mb-3">
<h3 class="heading-2">Service Gallery </h3>
<div class="row">
<div class="col-lg-12">
<div class="service-upload">
<i class="fas fa-cloud-upload-alt"></i> <span>Upload Service Images *</span>
<input type="file" multiple>
</div>
<div>
<ul class="upload-wrap">
<li>
<div class="upload-images">
<img alt="Service Image" src="assets/img/services/service-08.jpg">
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="submit-section">
<button class="btn btn-primary submit-btn" type="submit">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>

<?php include './includes/footer.php';?>

</div>

<div class="modal account-modal fade multi-step" id="provider-register" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header p-0 border-0">
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="login-header">
<h3>Join as a Provider</h3>
</div>

<form action="https://truelysell-html.dreamguystech.com/template2/index.html">
<div class="form-group form-focus">
<label class="focus-label">Name</label>
<input type="text" class="form-control" placeholder="johndoe@exapmle.com">
</div>
<div class="form-group form-focus">
<label class="focus-label">Mobile Number</label>
<input type="text" class="form-control" placeholder="986 452 1236">
</div>
<div class="form-group form-focus">
<label class="focus-label">Create Password</label>
<input type="password" class="form-control" placeholder="********">
</div>
<div class="text-end">
<a class="forgot-link" href="#">Already have an account?</a>
</div>
<div class="d-grid">
<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
</div>
<div class="login-or">
<span class="or-line"></span>
<span class="span-or">or</span>
</div>
<div class="row form-row social-login">
<div class="col-6 d-grid">
 <a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f me-1"></i> Login</a>
</div>
<div class="col-6 d-grid">
<a href="#" class="btn btn-google btn-block"><i class="fab fa-google me-1"></i> Login</a>
</div>
</div>
</form>

</div>
</div>
</div>
</div>


<div class="modal account-modal fade multi-step" id="user-register" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header p-0 border-0">
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="login-header">
<h3>Join as a User</h3>
</div>

<form action="https://truelysell-html.dreamguystech.com/template2/index.html">
<div class="form-group form-focus">
<label class="focus-label">Name</label>
<input type="text" class="form-control" placeholder="johndoe@exapmle.com">
</div>
<div class="form-group form-focus">
<label class="focus-label">Mobile Number</label>
<input type="text" class="form-control" placeholder="986 452 1236">
</div>
<div class="form-group form-focus">
<label class="focus-label">Create Password</label>
<input type="password" class="form-control" placeholder="********">
</div>
<div class="text-end">
<a class="forgot-link" href="#">Already have an account?</a>
</div>
<div class="d-grid">
<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
</div>
<div class="login-or">
<span class="or-line"></span>
<span class="span-or">or</span>
</div>
<div class="row form-row social-login">
<div class="col-6 d-grid">
<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f me-1"></i> Login</a>
</div>
<div class="col-6 d-grid">
<a href="#" class="btn btn-google btn-block"><i class="fab fa-google me-1"></i> Login</a>
</div>
</div>
</form>

</div>
</div>
</div>
</div>


<div class="modal account-modal fade" id="login_modal">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header p-0 border-0">
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="login-header">
<h3>Login <span>Truelysell</span></h3>
</div>
<form action="https://truelysell-html.dreamguystech.com/template2/index.html">
<div class="form-group form-focus">
<label class="focus-label">Email</label>
<input type="email" class="form-control" placeholder="truelysell@example.com">
</div>
<div class="form-group form-focus">
<label class="focus-label">Password</label>
<input type="password" class="form-control" placeholder="********">
</div>
<div class="text-end">
</div>
<div class="d-grid">
<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
</div>
<div class="login-or"> <span class="or-line"></span>
<span class="span-or">or</span>
</div>
<div class="row form-row social-login">
<div class="col-6 d-grid"><a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f me-1"></i> Login</a>
</div>
<div class="col-6 d-grid"><a href="#" class="btn btn-google btn-block"><i class="fab fa-google me-1"></i> Login</a>
</div>
</div>
<div class="text-center dont-have">Don’t have an account? <a href="#">Register</a>
 </div>
</form>
</div>
</div>
</div>
</div>


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/script.js"></script>
</body>


</html>