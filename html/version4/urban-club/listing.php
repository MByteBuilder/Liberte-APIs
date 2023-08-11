<!DOCTYPE html>
<html lang="en">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Urban Club</title>
    
    
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    
    <link rel="stylesheet" href="assets/css/feather.css">
    
    <link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/owlcarousel/owl.theme.default.min.css">
    
    <link rel="stylesheet" href="assets/css/style.css">
    </head>
<body>
<div class="main-wrapper">

    <?php include './includes/header.php';?>


<div class="breadcrumb-bar">
<div class="container-fluid">
<div class="row">
<div class="col">
<div class="breadcrumb-title">
<h2>Find a Professional</h2>
</div>
</div>
<div class="col-auto float-end ms-auto breadcrumb-menu">
<nav aria-label="breadcrumb" class="page-breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item">
<a href="index.php">Home</a>
</li>
<li class="breadcrumb-item active" aria-current="page">Find a Professional</li>
</ol>
</nav>
</div>
</div>
</div>
</div>

<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 theiaStickySidebar">
<div class="card filter-card">
<div class="card-body">
<h4 class="card-title mb-4">Search Filter</h4>
<form id="search_form">
<div class="filter-widget">
<div class="filter-list">
<h4 class="filter-title">Keyword</h4>
<input type="text" class="form-control" placeholder="What are you looking for?">
</div>
<div class="filter-list">
<h4 class="filter-title">Sort By</h4>
<select class="form-control selectbox select form-select">
<option>Sort By</option>
<option>Price Low to High</option>
<option>Price High to Low</option>
<option>Newest</option>
</select>
</div>
<div class="filter-list">
<h4 class="filter-title">Categories</h4>
<select class="form-control form-control selectbox select form-select">
<option>All Categories</option>
<option>Computer</option>
<option selected="">Automobile</option>
<option>Car Wash</option>
<option>Cleaning</option>
<option>Electrical</option>
<option>Construction</option>
</select>
</div>
<div class="filter-list">
<h4 class="filter-title">Location</h4>
<input class="form-control" type="text" placeholder="Search Location">
</div>
</div>
<button class="btn btn-primary ps-5 pe-5 btn-block get_services w-100" type="button">Search</button>
</form>
</div>
</div>
</div>
<div class="col-lg-9">
<div class="row align-items-center mb-4">
<div class="col-md-6 col">
<h4 class="content-title"><span>118</span> Services</h4>
</div>
<div class="col-md-6 col-auto">
<div class="view-icons">
<a href="javascript:void(0);" class="grid-view active"><i class="fas fa-th-large"></i></a>
</div>
</div>
</div>
<div>
<div class="row">
<div class="col-lg-4 col-md-6">

<div class="service-widget">
<div class="service-img">
<a href="service-details.php">
<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-01.jpg">
</a>
<div class="item-info">
<div class="cate-list">
<a href="service-details.php">Cleaning</a>
</div>
<div class="service-user"> 
<span class="service-price">$25</span>
</div>
</div>
<div class="fav-btn">
<a href="javascript:void(0)" class="fav-icon">
<i class="fas fa-heart"></i>
</a>
</div>
</div>
<div class="service-content">
<div class="service-info">
<a href="#">
<img src="assets/img/customer/user-01.jpg" alt="">
</a>
<div class="user-content">
<p>Thomas Herzberg</p>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="d-inline-block average-rating">(4)</span>
</div>
</div>
</div>
<div class="user-info">
<h3 class="title">
<a href="service-details.php">Toughened Glass Fitting Services</a>
</h3>
<p>Praesent pharetra, justo ut scelerisque the mattis, leo quam aliquet congue.</p>
<div class="row">
<div class="col-md-12 mb-2">
<i class="fas fa-phone-alt me-1"></i>
<span>xxxxxx4574</span>
</div>
<div class="col-md-12">
<i class="fas fa-map-marker-alt me-1"></i>
<span>Electra, Texas</span>
</div>
</div>
</div>
</div>
</div>

</div>
<div class="col-lg-4 col-md-6">

<div class="service-widget">
<div class="service-img">
<a href="service-details.php">
<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-02.jpg">
</a>
<div class="item-info">
<div class="cate-list">
<a href="service-details.php">Automobile</a>
</div>
<div class="service-user">
<span class="service-price">$25</span>
</div>
</div>
<div class="fav-btn">
<a href="javascript:void(0)" class="fav-icon">
<i class="fas fa-heart"></i>
</a>
</div>
</div>
<div class="service-content">
<div class="service-info">
<a href="#">
<img src="assets/img/customer/user-02.jpg" alt="">
</a>
<div class="user-content">
<p>Thomas Herzberg</p>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span class="d-inline-block average-rating">(5)</span>
</div>
</div>
</div>
<div class="user-info">
<h3 class="title">
<a href="service-details.php">Car Repair Services</a>
</h3>
<p>Praesent pharetra, justo ut scelerisque the mattis, leo quam aliquet congue.</p>
<div class="row">
<div class="col-md-12 mb-2">
<i class="fas fa-phone-alt me-1"></i>
<span>xxxxxx4574</span>
</div>
<div class="col-md-12">
<i class="fas fa-map-marker-alt me-1"></i>
<span>Hanover, Maryland</span>
</div>
</div>
</div>
</div>
</div>

</div>
<div class="col-lg-4 col-md-6">

<div class="service-widget">
<div class="service-img">
<a href="service-details.php">
<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-03.jpg">
</a>
<div class="item-info">
<div class="cate-list">
<a href="service-details.php">Electrical</a>
</div>
<div class="service-user">
<span class="service-price">$45</span>
</div>
</div>
<div class="fav-btn">
<a href="javascript:void(0)" class="fav-icon">
<i class="fas fa-heart"></i>
</a>
</div>
</div>
<div class="service-content">
<div class="service-info">
<a href="#">
<img src="assets/img/customer/user-03.jpg" alt="">
</a>
<div class="user-content">
<p>Thomas Herzberg</p>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="d-inline-block average-rating">(4.5)</span>
</div>
</div>
</div>
<div class="user-info">
<h3 class="title">
<a href="service-details.php">Electric Panel Repairing Service</a>
</h3>
<p>Praesent pharetra, justo ut scelerisque the mattis, leo quam aliquet congue.</p>
<div class="row">
<div class="col-md-12 mb-2">
<i class="fas fa-phone-alt me-1"></i>
<span>xxxxxx4330</span>
</div>
<div class="col-md-12">
<i class="fas fa-map-marker-alt me-1"></i>
<span>Kalispell, Montana</span>
</div>
</div>
</div>
</div>
</div>

</div>
<div class="col-lg-4 col-md-6">

<div class="service-widget">
<div class="service-img">
<a href="service-details.php">
<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-04.jpg">
</a>
<div class="item-info">
<div class="cate-list">
<a href="service-details.php">Car Wash</a>
</div>
<div class="service-user">
<span class="service-price">$14</span>
</div>
</div>
<div class="fav-btn">
<a href="javascript:void(0)" class="fav-icon">
<i class="fas fa-heart"></i>
</a>
</div>
</div>
<div class="service-content">
<div class="service-info">
<a href="#">
<img src="assets/img/customer/user-04.jpg" alt="">
</a>
<div class="user-content">
<p>Thomas Herzberg</p>
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<span class="d-inline-block average-rating">(0)</span>
</div>
</div>
</div>
<div class="user-info">
<h3 class="title">
<a href="service-details.php">Steam Car Wash</a>
</h3>
<p>Praesent pharetra, justo ut scelerisque the mattis, leo quam aliquet congue.</p>
<div class="row">
<div class="col-md-12 mb-2">
<i class="fas fa-phone-alt me-1"></i>
<span>xxxxxx4174</span>
</div>
<div class="col-md-12">
<i class="fas fa-map-marker-alt me-1"></i>
<span>Electra, Texas</span>
</div>
</div>
</div>
</div>
</div>

</div>
<div class="col-lg-4 col-md-6">

<div class="service-widget">
<div class="service-img">
<a href="service-details.php">
<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-05.jpg">
</a>
<div class="item-info">
<div class="cate-list">
<a href="service-details.php">Cleaning</a>
</div>
<div class="service-user">
<span class="service-price">$100</span>
</div>
</div>
<div class="fav-btn">
<a href="javascript:void(0)" class="fav-icon">
<i class="fas fa-heart"></i>
</a>
</div>
</div>
<div class="service-content">
<div class="service-info">
<a href="#">
<img src="assets/img/customer/user-05.jpg" alt="">
</a>
<div class="user-content">
<p>Thomas Herzberg</p>
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<span class="d-inline-block average-rating">(0)</span>
</div>
</div>
</div>
<div class="user-info">
<h3 class="title">
<a href="service-details.php">House Cleaning Services</a>
</h3>
<p>Praesent pharetra, justo ut scelerisque the mattis, leo quam aliquet congue.</p>
<div class="row">
<div class="col-md-12 mb-2">
<i class="fas fa-phone-alt me-1"></i>
<span>xxxxxx4471</span>
</div>
<div class="col-md-12">
<i class="fas fa-map-marker-alt me-1"></i>
<span>Sylvester, Georgia</span>
</div>
</div>
</div>
</div>
</div>

</div>
<div class="col-lg-4 col-md-6">

<div class="service-widget">
<div class="service-img">
<a href="service-details.php">
<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-06.jpg">
</a>
<div class="item-info">
<div class="cate-list">
<a href="service-details.php">Computer</a>
</div>
<div class="service-user">
<span class="service-price">$80</span>
</div>
</div>
<div class="fav-btn">
<a href="javascript:void(0)" class="fav-icon">
<i class="fas fa-heart"></i>
</a>
</div>
</div>
<div class="service-content">
<div class="service-info">
<a href="#">
<img src="assets/img/customer/user-06.jpg" alt="">
</a>
<div class="user-content">
<p>Thomas Herzberg</p>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<span class="d-inline-block average-rating">(1)</span>
</div>
</div>
</div>
<div class="user-info">
<h3 class="title">
<a href="service-details.php">Computer & Server AMC Service</a>
</h3>
<p>Praesent pharetra, justo ut scelerisque the mattis, leo quam aliquet congue.</p>
<div class="row">
<div class="col-md-12 mb-2">
<i class="fas fa-phone-alt me-1"></i>
<span>xxxxxx4492</span>
</div>
<div class="col-md-12">
<i class="fas fa-map-marker-alt me-1"></i>
<span>Los Angeles, California</span>
</div>
</div>
</div>
</div>
</div>

</div>
<div class="col-lg-4 col-md-6">

<div class="service-widget">
<div class="service-img">
<a href="service-details.php">
<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-07.jpg">
</a>
<div class="item-info">
<div class="cate-list">
<a href="service-details.php">Interior</a>
</div>
<div class="service-user">
<span class="service-price">$5</span>
</div>
</div>
<div class="fav-btn">
<a href="javascript:void(0)" class="fav-icon">
<i class="fas fa-heart"></i>
</a>
</div>
</div>
<div class="service-content">
<div class="service-info">
<a href="#">
<img src="assets/img/customer/user-07.jpg" alt="">
</a>
<div class="user-content">
<p>Thomas Herzberg</p>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="d-inline-block average-rating">(4)</span>
</div>
</div>
</div>
<div class="user-info">
<h3 class="title">
<a href="service-details.php">Interior Designing</a>
</h3>
<p>Praesent pharetra, justo ut scelerisque the mattis, leo quam aliquet congue.</p>
<div class="row">
<div class="col-md-12 mb-2">
<i class="fas fa-phone-alt me-1"></i>
<span>xxxxxx4928</span>
</div>
<div class="col-md-12">
<i class="fas fa-map-marker-alt me-1"></i>
<span>Hanover, Maryland</span>
</div>
</div>
</div>
</div>
</div>

</div>
<div class="col-lg-4 col-md-6">

<div class="service-widget">
<div class="service-img">
<a href="service-details.php">
<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-08.jpg">
</a>
<div class="item-info">
<div class="cate-list">
<a href="service-details.php">Construction</a>
</div>
<div class="service-user">
<span class="service-price">$75</span>
</div>
</div>
<div class="fav-btn">
<a href="javascript:void(0)" class="fav-icon">
<i class="fas fa-heart"></i>
</a>
</div>
</div>
<div class="service-content">
<div class="service-info">
<a href="#">
<img src="assets/img/customer/user-08.jpg" alt="">
</a>
<div class="user-content">
<p>Thomas Herzberg</p>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="d-inline-block average-rating">(4)</span>
</div>
</div>
</div>
<div class="user-info">
<h3 class="title">
<a href="service-details.php">Building Construction Services</a>
</h3>
<p>Praesent pharetra, justo ut scelerisque the mattis, leo quam aliquet congue.</p>
<div class="row">
<div class="col-md-12 mb-2">
<i class="fas fa-phone-alt me-1"></i>
<span>xxxxxx4862</span>
</div>
<div class="col-md-12">
<i class="fas fa-map-marker-alt me-1"></i>
<span>Burr Ridge, Illinois</span>
</div>
</div>
</div>
</div>
</div>

</div>
<div class="col-lg-4 col-md-6">

<div class="service-widget">
<div class="service-img">
<a href="service-details.php">
<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-09.jpg">
</a>
<div class="item-info">
<div class="cate-list">
<a href="service-details.php">Painting</a>
</div>
<div class="service-user">
<span class="service-price">$500</span>
</div>
</div>
<div class="fav-btn">
<a href="javascript:void(0)" class="fav-icon">
<i class="fas fa-heart"></i>
</a>
</div>
</div>
<div class="service-content">
<div class="service-info">
<a href="#">
<img src="assets/img/customer/user-09.jpg" alt="">
</a>
<div class="user-content">
<p>Thomas Herzberg</p>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<span class="d-inline-block average-rating">(3)</span>
</div>
</div>
</div>
<div class="user-info">
<h3 class="title">
<a href="service-details.php">Commercial Painting Services</a>
</h3>
<p>Praesent pharetra, justo ut scelerisque the mattis, leo quam aliquet congue.</p>
<div class="row">
<div class="col-md-12 mb-2">
<i class="fas fa-phone-alt me-1"></i>
<span>xxxxxx4874</span>
</div>
<div class="col-md-12">
<i class="fas fa-map-marker-alt me-1"></i>
<span>Huntsville, Alabama</span>
</div>
</div>
</div>
</div>
</div>

</div>
<div class="col-lg-4 col-md-6">

<div class="service-widget">
<div class="service-img">
<a href="service-details.php">
<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-10.jpg">
</a>
<div class="item-info">
<div class="cate-list">
<a href="service-details.php">Plumbing</a>
</div>
<div class="service-user">
<span class="service-price">$150</span>
</div>
</div>
<div class="fav-btn">
<a href="javascript:void(0)" class="fav-icon">
<i class="fas fa-heart"></i>
</a>
</div>
</div>
<div class="service-content">
<div class="service-info">
<a href="#">
<img src="assets/img/customer/user-10.jpg" alt="">
</a>
<div class="user-content">
<p>Thomas Herzberg</p>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<span class="d-inline-block average-rating">(3)</span>
</div>
</div>
</div>
<div class="user-info">
<h3 class="title">
<a href="service-details.php">Plumbing Services</a>
</h3>
<p>Praesent pharetra, justo ut scelerisque the mattis, leo quam aliquet congue.</p>
<div class="row">
<div class="col-md-12 mb-2">
<i class="fas fa-phone-alt me-1"></i>
<span>xxxxxx7413</span>
</div>
<div class="col-md-12">
<i class="fas fa-map-marker-alt me-1"></i>
<span>Richmond, Virginia</span>
</div>
</div>
</div>
</div>
</div>

</div>
<div class="col-lg-4 col-md-6">

<div class="service-widget">
<div class="service-img">
<a href="service-details.php">
<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-11.jpg">
</a>
<div class="item-info">
<div class="cate-list">
<a href="service-details.php">Carpentry</a>
</div>
<div class="service-user">
<span class="service-price">$32</span>
</div>
</div>
<div class="fav-btn">
<a href="javascript:void(0)" class="fav-icon">
<i class="fas fa-heart"></i>
</a>
</div>
</div>
<div class="service-content">
<div class="service-info">
<a href="#">
<img src="assets/img/customer/user-01.jpg" alt="">
</a>
<div class="user-content">
<p>Thomas Herzberg</p>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span class="d-inline-block average-rating">(5)</span>
</div>
</div>
</div>
<div class="user-info">
<h3 class="title">
<a href="service-details.php">Wooden Carpentry Work</a>
</h3>
<p>Praesent pharetra, justo ut scelerisque the mattis, leo quam aliquet congue.</p>
<div class="row">
<div class="col-md-12 mb-2">
<i class="fas fa-phone-alt me-1"></i>
<span>xxxxxx1768</span>
</div>
<div class="col-md-12">
<i class="fas fa-map-marker-alt me-1"></i>
<span>Columbus, Alabama</span>
</div>
</div>
</div>
</div>
</div>

</div>
<div class="col-lg-4 col-md-6">

<div class="service-widget">
<div class="service-img">
<a href="service-details.php">
<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-12.jpg">
</a>
<div class="item-info">
<div class="cate-list">
<a href="service-details.php">Appliance</a>
</div>
<div class="service-user">
<span class="service-price">$54</span>
</div>
</div>
<div class="fav-btn">
<a href="javascript:void(0)" class="fav-icon">
<i class="fas fa-heart"></i>
</a>
</div>
</div>
<div class="service-content">
<div class="service-info">
 <a href="#">
<img src="assets/img/customer/user-02.jpg" alt="">
</a>
<div class="user-content">
<p>Thomas Herzberg</p>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<span class="d-inline-block average-rating">(3)</span>
</div>
</div>
</div>
<div class="user-info">
<h3 class="title">
<a href="service-details.php">Air Conditioner Service</a>
</h3>
<p>Praesent pharetra, justo ut scelerisque the mattis, leo quam aliquet congue.</p>
<div class="row">
<div class="col-md-12 mb-2">
<i class="fas fa-phone-alt me-1"></i>
<span>xxxxxx1771</span>
</div>
<div class="col-md-12">
<i class="fas fa-map-marker-alt me-1"></i>
<span>Vancouver, Washington</span>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
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
<h3>Login <span>Uae10</span></h3>
</div>
<form action="">
<div class="form-group form-focus">
<label class="focus-label">Email</label>
<input type="email" class="form-control" placeholder="Uae10@example.com">
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

<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

</html>