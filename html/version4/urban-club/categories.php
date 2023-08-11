<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Urban club</title>

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


<div class="breadcrumb-bar">
<div class="container">
<div class="row">
<div class="col">
<div class="breadcrumb-title">
<h2>Categories</h2>
</div>
</div>
<div class="col-auto float-end ms-auto breadcrumb-menu">
<nav aria-label="breadcrumb" class="page-breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item">
<a href="index.php">Home</a>
</li>
<li class="breadcrumb-item active" aria-current="page">Categories</li>
</ol>
</nav>
</div>
</div>
</div>
</div>

<div class="content">
<div class="container">
<div class="catsec clearfix">
<div class="row">
<div class="col-lg-4 col-md-6">
<a href="listing.php">
<div class="cate-widget">
<img src="assets/img/category/category-01.jpg" class="category-img" alt="">
<div class="cate-title">
<h3>Computer</h3>
</div>
<div class="cate-count">
<img src="assets/img/icons/group-mem.png" alt=""> 21
</div>
</div>
</a>
</div>
<div class="col-lg-4 col-md-6">
<a href="listing.php">
<div class="cate-widget">
<img src="assets/img/category/category-02.jpg" class="category-img" alt="">
<div class="cate-title">
<h3>Interior</h3>
</div>
<div class="cate-count">
<img src="assets/img/icons/group-mem.png" alt=""> 15
</div>
</div>
</a>
</div>
<div class="col-lg-4 col-md-6">
<a href="listing.php">
<div class="cate-widget">
<img src="assets/img/category/category-03.jpg" class="category-img" alt="">
<div class="cate-title">
<h3>Car Wash</h3>
</div>
<div class="cate-count">
<img src="assets/img/icons/group-mem.png" alt=""> 15
</div>
</div>
</a>
</div>
<div class="col-lg-4 col-md-6">
<a href="listing.php">
<div class="cate-widget">
<img src="assets/img/category/category-04.jpg" class="category-img" alt="">
<div class="cate-title">
<h3>Cleaning</h3>
</div>
<div class="cate-count">
<img src="assets/img/icons/group-mem.png" alt=""> 14
</div>
</div>
</a>
</div>
<div class="col-lg-4 col-md-6">
<a href="listing.php">
<div class="cate-widget">
<img src="assets/img/category/category-05.jpg" class="category-img" alt="">
<div class="cate-title">
<h3>Electrical</h3>
</div>
<div class="cate-count">
<img src="assets/img/icons/group-mem.png" alt=""> 10
</div>
</div>
</a>
</div>
<div class="col-lg-4 col-md-6">
<a href="listing.php">
<div class="cate-widget">
<img src="assets/img/category/category-06.jpg" class="category-img" alt="">
<div class="cate-title">
<h3>Construction</h3>
</div>
<div class="cate-count">
<img src="assets/img/icons/group-mem.png" class="category-img" alt=""> 8
</div>
</div>
</a>
</div>
<div class="col-lg-4 col-md-6">
<a href="listing.php">
<div class="cate-widget">
<img src="assets/img/category/category-07.jpg" class="category-img" alt="">
<div class="cate-title">
<h3>Plumbing</h3>
</div>
<div class="cate-count">
<img src="assets/img/icons/group-mem.png" class="category-img" alt=""> 18
</div>
</div>
</a>
</div>
<div class="col-lg-4 col-md-6">
<a href="listing.php">
<div class="cate-widget">
<img src="assets/img/category/category-08.jpg" class="category-img" alt="">
<div class="cate-title">
<h3>Carpentry</h3>
</div>
<div class="cate-count">
<img src="assets/img/icons/group-mem.png" alt=""> 32
</div>
</div>
</a>
</div>
<div class="col-lg-4 col-md-6">
<a href="listing.php">
<div class="cate-widget">
<img src="assets/img/category/category-09.jpg" class="category-img" alt="">
<div class="cate-title">
<h3>Appliance</h3>
</div>
<div class="cate-count">
<img src="assets/img/icons/group-mem.png" alt=""> 19
</div>
</div>
</a>
</div>
</div>
<div class="pagination">
<ul>
<li class="active"><a href="javascript:void(0);">1</a></li>
<li><a href="javascript:void(0);">2</a></li>
<li><a href="javascript:void(0);">3</a></li>
<li><a href="javascript:void(0);">4</a></li>
<li class="arrow"><a href="javascript:void(0);"><i class="fas fa-angle-right"></i></a></li>
</ul>
</div>
</div>
</div>﻿
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

<form action="https://truelysell-php.dreamguystech.com/template2/index.php">
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
<h3>Login <span>Truelysell</span></h3>
</div>
<form action="">
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