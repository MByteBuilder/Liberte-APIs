<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Urban Club</title>

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
<h2>Book Service</h2>
</div>
<form>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label>Service Location <span class="text-danger">*</span></label>
<input class="form-control" type="text" placeholder="Enter a location" autocomplete="off">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Service amount</label>
<input class="form-control" type="text" value="$100" readonly>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Date <span class="text-danger">*</span></label>
<input class="form-control hasDatepicker" type="text">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Time slot <span class="text-danger">*</span></label>
<select class="form-control form-select">
<option>10:00 AM</option>
<option>11:00 AM</option>
<option>12:00 PM</option>
<option>01:00 PM</option>
<option>02:00 PM</option>
<option>03:00 PM</option>
<option>04:00 PM</option>
<option>05:00 PM</option>
<option>06:00 PM</option>
<option>07:00 PM</option>
</select>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<div class="text-center">
<div id="load_div"></div>
</div>
<label>Notes</label>
<textarea class="form-control" rows="5"></textarea>
</div>
</div>
</div>
<div class="submit-section">
<button class="btn btn-primary submit-btn" type="submit">Continue to Book</button>
</div>
</form>
</div>
</div>
</div>
</div>

<?php include './includes/footer.php';?>


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

<form action="">
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

<form action="">
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
<h3>Login <span>uae10</span></h3>
</div>
<form action="">
<div class="form-group form-focus">
<label class="focus-label">Email</label>
<input type="email" class="form-control" placeholder="@example.com">
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

</div>

<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/script.js"></script>
</body>


</html>