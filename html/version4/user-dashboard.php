<!doctype html>
<html lang="en">


<head>

        <meta charset="utf-8" />
        <title>UAE10</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- plugin css -->
        <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- preloader css -->
        <link rel="stylesheet" href="assets/css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link rel="stylesheet" href="./assets/css/dash2.css">
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo.png" alt="" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo.png" alt="" height="24">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo.png" alt="" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo.png" alt="" height="24">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <button class="btn btn-primary" type="button"><i class="bx bx-search-alt align-middle"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="search" class="icon-lg"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
        
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Search Result">

                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img id="header-lang-img" src="assets/images/united-arab-emirates.png" alt="Header Language" height="16">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="en">
                                    <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item" id="mode-setting-btn">
                                <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                                <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                            </button>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="grid" class="icon-lg"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/b1.png" alt="bitbucket">
                                                <span>Job Portal</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/b2.png" alt="dribbble">
                                                <span>Marketplace</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/b3.png" alt="mail_chimp">
                                                <span>Professional <br> Services</span>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon position-relative" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell" class="icon-lg"></i>
                                <span class="badge bg-danger rounded-pill">5</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small text-reset text-decoration-underline"> Unread (3)</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">James Lemire</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">It will seem like simplified English.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-sm me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your order is placed</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-sm me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your item is shipped</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon position-relative" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="tag" class="icon-lg"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> Top Top Offer Requests </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small text-reset text-decoration-underline"> Unread (3)</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">

                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-sm me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your order is placed</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-sm me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your item is shipped</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span> 
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium">Malik N.</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="apps-contacts-profile.html"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock Screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="auth-logout.html"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" data-key="t-menu">Menu</li>

                            <li>
                                <a href="index.html">
                                    <i class="bx bx-home-alt"></i>
                                    <span data-key="t-dashboard">Dashboard</span>
                                </a>

                                <a href="index.html">
                                    <i class="bx bx-star"></i>
                                    <span data-key="t-dashboard">Special Offers</span>
                                </a>

                                <a href="http://contrivance.co/uae-dashboard/version4/wallet.html">
                                    <i class="bx bx-wallet-alt"></i>
                                    <span data-key="t-dashboard">Wallet</span>
                                </a>

                                <a href="http://contrivance.co/uae10/version22/offer" target="_blank">
                                    <i class="bx bx-trophy"></i>
                                    <span data-key="t-dashboard">Offers</span>
                                </a>

                                <a href="index.html">
                                    <i class="bx bx-news"></i>
                                    <span data-key="t-dashboard">News</span>
                                </a>
                                <a href="http://contrivance.co/uae10/version22/event" target="_blank">
                                    <i class="bx bx-calendar-event"></i>
                                    <span data-key="t-dashboard">Events</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <span data-key="t-invoices"><i class="bx bx-briefcase-alt-2"></i> Job Portal</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="uae-jobportal/index.php" data-key="t-invoice-list" target="_blank"><i class="bx bx-file-find"></i>Find Job</a></li>
                                    <li><a href="uae-jobportal/profile-settings.php" data-key="t-invoice-detail" target="_blank"><i class="bx bx-clipboard"></i>Set Job Profile</a></li> 
                                    <li><a href="uae-jobportal/manage-job.php" data-key="t-invoice-detail" target="_blank"><i class="bx bx-window-open"></i>Manage Applied Jobs</a></li> 
                                    
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <span data-key="t-invoices"><i class="bx bx-building"></i> Market Place</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="uae-marketplace/listings-grid-full-width.php" data-key="t-invoice-list" target="_blank"><i class="bx bx-list-ul"></i>View Listing</a></li>
                                    <li><a href="uae-marketplace/dashboard-add-listing.php" data-key="t-invoice-detail" target="_blank"><i class="bx bx-list-plus"></i>Add Listing</a></li> 
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <span data-key="t-invoices"><i class="bx bx-wrench"></i> Professional Services</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="urban-club/index.php" data-key="t-invoice-list" target="_blank"><i class="bx bx-slider-alt"></i> View Services</a></li>

                                    <li><a href="urban-club/add-service.php" data-key="t-invoice-detail" target="_blank"><i class="bx bx-dock-right"></i>Post a service</a></li> 
                               
                                    
                                </ul>
                            </li>

                        </ul>

                        <hr>

                        <div class="card sidebar-alert border-0 text-center mx-4 mb-0 mt-5">
                            <div class="card-body">
                                <img src="assets/images/giftbox.png" alt="">
                                <div class="mt-4">
                                    <h5 class="alertcard-title font-size-16">Unlimited Access</h5>
                                    <p class="font-size-13">Upgrade your plan from a Free trial, to select ‘Business Plan’.</p>
                                    <a href="#!" class="btn btn-primary mt-2">Upgrade Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-25">Hello, <span class="text-primary">Malik N.</span></h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-5 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Intermiles</span>
                                                <h4 class="mb-3 f40">
                                                    <span class="counter-value" data-target="1387737.00">0</span>
                                                </h4>
                                            </div>

                                            <div class="col-6">
                                                <div id="mini-chart1" data-colors='["#275ba7"]' class="apex-charts mb-2"></div>
                                            </div>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-success text-success">+$20.9k</span>
                                            <span class="ms-1 text-muted font-size-13">Added last week</span>

                                            <a href="#" class="viewWallet"><i class="bx bx-wallet-alt"></i> View Wallet</a>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
        
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Eligible Intermiles</span>
                                                <h4 class="mb-3">
                                                    <span class="counter-value" data-target="6258">0</span>
                                                </h4>
                                            </div>
                                            <div class="col-4">
                                                <div id="mini-chart2" data-colors='["#275ba7"]' class="apex-charts mb-2"></div>
                                            </div>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-danger text-danger">-29 Per Hour</span>
                                            <span class="ms-1 text-muted font-size-13">Since Morning</span>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col-->
        
                            <div class="col-xl-4 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="intermileEarn">
                                            <p>Earned Since - <i class="bx bx-calendar"></i>  30 Nov 2019</p>
                                            <p>These Intermiles are eligible for tier review.</p>
                                            <a href="#">Learn About Eligible InterMiles</a>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
        
                        </div><!-- end row-->

                        <div class="card">
                            <div class="card-body">
                                <div class="intermileCard">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="intCard">
                                                <div class="cardTop">
                                                    <div class="d-flex">
                                                        <h3>Gold</h3>
                                                        <p>inter<span>miles</span> </p>
                                                    </div>
                                                    
                                                    <p class="expireDate">Expire on <i class="bi bi-calendar3"></i> 30 Dec 2021</p>
                                                </div>
                                                <div class="cardBottom">
                                                    <p>Tier Review Period - <i class="bi bi-calendar3"></i> 30 Nov 2021 - 30 Nov 2022 </p>
                                                    <a href="#">Learn About Tier Review</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 my-auto">
                                            <div class="cardDetails">
                                                <b>Retain Your Gold Membership</b>
                                                <p>by Earning <b>75000</b> More InterMiles by 27th Jul 2022</p>
                                                <div class="progress">
                                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">50,000</div>
                                                </div>
                                                <a href="#"> Earn 75000 Upgrade To Platinum Membership</a>
                                                <hr>
                                                <div class="badges">
                                                    <p>Badge Earned <i class="bx bx-question-mark"></i></p>
                                                    <ul>
                                                        <li><img src="./assets/images/bb1.png" alt=""></li>
                                                        <li><img src="./assets/images/bb2.png" alt=""></li>
                                                        <li><img src="./assets/images/bb3.png" alt=""></li>
                                                        <li><img src="./assets/images/bb4.png" alt=""></li>
                                                        <li><img src="./assets/images/bb1.png" alt=""></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-5">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center mb-4">
                                            <h5 class="card-title me-2">Intermiles Earned</h5>
                                            <div class="ms-auto">
                                                <div>
                                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                                        ALL
                                                    </button>
                                                    <button type="button" class="btn btn-soft-primary btn-sm">
                                                        1M
                                                    </button>
                                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                                        6M
                                                    </button>
                                                    <button type="button" class="btn btn-soft-secondary btn-sm active">
                                                        1Y
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="col-sm">
                                                <div id="wallet-balance2" data-colors='["#AF8AFE", "#9AC3FE", "#FE849A", "#B3F06F"]' class="apex-charts"></div>
                                            </div>
                                            <div class="col-sm align-self-center">
                                                <div class="mt-4 mt-sm-0">
                                                    <div>
                                                        <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2" style="color:#AF8AFE;"></i>  Mining Rewards</p>
                                                        <h6>441 Intermiles</h6>
                                                    </div>
    
                                                    <div class="mt-4 pt-2">
                                                        <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2" style="color:#FE849A;"></i> Airdrops</p>
                                                        <h6>325 Intermiles</h6>
                                                    </div>
    
                                                    <div class="mt-4 pt-2">
                                                        <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2" style="color:#B3F06F;"></i>  Stacking Reward</p>
                                                        <h6>525 Intermiles</h6>
                                                    </div>

                                                    <div class="mt-4 pt-2">
                                                        <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2" style="color:#a0c7ff;"></i> Farming Reward</p>
                                                        <h6>405 Intermiles</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-7">
                                <div class="row">
                                    <div class="col-xl-12">
                             
                                        <div class="card" id="tables">
                                            <div class="card-header align-items-center d-flex">
                                                <div class="flex-shrink-0">
                                                    <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-bs-toggle="tab" href="#transactions-all-tab" role="tab">
                                                                My Activity 
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#transactions-buy-tab" role="tab">
                                                                Top Offer
                                                            </a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#transactions-sell-tab2" role="tab">
                                                                Transactions
                                                            </a>
                                                        </li>

                                                    </ul>
                                                    <!-- end nav tabs -->
                                                </div>
                                            </div><!-- end card header -->
        
                                            <div class="card-body px-0">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="transactions-all-tab" role="tabpanel">
                                                        <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                                            <table class="table align-middle table-nowrap table-borderless">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Catagory</th>
                                                                        <th class="text-end">Activity</th>
                                                                        <th class="text-end">Earned</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 50px;">
                                                                            <div class="font-size-22 text-success">
                                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div>
                                                                                <h5 class="font-size-14 mb-1">Liked Grand Hotel</h5>
                                                                                <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 mb-0">180 INT</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Coin Earned</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 text-muted mb-0">$2.20</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="width: 50px;">
                                                                            <div class="font-size-22 text-success">
                                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div>
                                                                                <h5 class="font-size-14 mb-1">Shared a picture</h5>
                                                                                <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 mb-0">160 INT</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 text-muted mb-0">$1.20</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="width: 50px;">
                                                                            <div class="font-size-22 text-success">
                                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div>
                                                                                <h5 class="font-size-14 mb-1">Liked a picture</h5>
                                                                                <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 mb-0">220 INT</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 text-muted mb-0">$4.00</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="width: 50px;">
                                                                            <div class="font-size-22 text-success">
                                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div>
                                                                                <h5 class="font-size-14 mb-1">Availed Coupon</h5>
                                                                                <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 mb-0">160 INT</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 text-muted mb-0">$1.20</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <a href="#" class="viewMore mt-3">View All <i class="bx bx-chevron-down"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- end tab pane -->
                                                    <div class="tab-pane" id="transactions-buy-tab" role="tabpanel">
                                                        <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                                            <table class="table align-middle table-nowrap table-borderless">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="width: 50px;">
                                                                            <div class="font-size-22 text-danger">
                                                                                <img src="./assets/images/1.png" alt="">
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div>
                                                                                <h5 class="font-size-14 mb-1">Add Banner</h5>
                                                                                <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 mb-0">180 INT</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 text-muted mb-0">$13.20</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="width: 50px;">
                                                                            <div class="font-size-22 text-danger">
                                                                                <img src="./assets/images/2.jpg" alt="">
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div>
                                                                                <h5 class="font-size-14 mb-1">Special Request</h5>
                                                                                <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 mb-0">160 INT</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 text-muted mb-0">$12.20</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="width: 50px;">
                                                                            <div class="font-size-22 text-danger">
                                                                                <img src="./assets/images/3.jpg" alt="">
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div>
                                                                                <h5 class="font-size-14 mb-1">Add Offer</h5>
                                                                                <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 mb-0">220 INT</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 text-muted mb-0">$14.00</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="width: 50px;">
                                                                            <div class="font-size-22 text-danger">
                                                                                <img src="./assets/images/5.jpg" alt="">
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div>
                                                                                <h5 class="font-size-14 mb-1">Add Banner</h5>
                                                                                <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 mb-0">160 INT</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 text-muted mb-0">$12.20</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <a href="#" class="viewMore mt-3">View All <i class="bx bx-chevron-down"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- end tab pane -->
                                                    <div class="tab-pane" id="transactions-sell-tab2" role="tabpanel">
                                                        <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                                            <table class="table align-middle table-nowrap table-borderless">
                                                                <tbody>

                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Catagory</th>
                                                                        <th class="text-end">Activity</th>
                                                                        <th class="text-end">Transaction Id</th>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <div class="font-size-22 text-danger">
                                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div>
                                                                                <h5 class="font-size-14 mb-1">Buy NFT</h5>
                                                                                <p class="text-muted mb-0 font-size-12">15 Mar, 2021</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 text-muted mb-0">125454</h5>
                                                                                
                                                                            </div>
                                                                        </td>
                                                                    </tr>
        
                                                                    <tr>
                                                                        <td style="width: 50px;">
                                                                            <div class="font-size-22 text-danger">
                                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div>
                                                                                <h5 class="font-size-14 mb-1">Sell NFT</h5>
                                                                                <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 text-muted mb-0">125454</h5>
                                                                                
                                                                            </div>
                                                                        </td>
                                                                    </tr>
        
                                                                    <tr>
                                                                        <td>
                                                                            <div class="font-size-22 text-danger">
                                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div>
                                                                                <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                                                <p class="text-muted mb-0 font-size-12">18 Mar, 2021</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 mb-0">0.018 BTC</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 text-muted mb-0">125454</h5>
                                                                                
                                                                            </div>
                                                                        </td>
                                                                    </tr>
        
                                                                    <tr>
                                                                        <td>
                                                                            <div class="font-size-22 text-danger">
                                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div>
                                                                                <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                                                <p class="text-muted mb-0 font-size-12">15 Mar, 2021</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 text-muted mb-0">252554</h5>
                                                                               
                                                                            </div>
                                                                        </td>
                                                                    </tr>
        
                                                                    <tr>
                                                                        <td>
                                                                            <div class="font-size-22 text-danger">
                                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div>
                                                                                <h5 class="font-size-14 mb-1">Sell LTC</h5>
                                                                                <p class="text-muted mb-0 font-size-12">16 Mar, 2021</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 mb-0">1.88 LTC</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 text-muted mb-0">252554</h5>
                                                                                
                                                                            </div>
                                                                        </td>
                                                                    </tr>
        
                                                                    <tr>
                                                                        <td>
                                                                            <div class="font-size-22 text-danger">
                                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div>
                                                                                <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                                                <p class="text-muted mb-0 font-size-12">17 Mar, 2021</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 mb-0">0.42 ETH</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 text-muted mb-0">252554</h5>
                                                                                
                                                                            </div>
                                                                        </td>
                                                                    </tr>
        
                                                                    
        
                                                                    <tr>
                                                                        <td style="width: 50px;">
                                                                            <div class="font-size-22 text-danger">
                                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div>
                                                                                <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                                                <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                                            </div>
                                                                        </td>
        
                                                                        <td>
                                                                            <div class="text-end">
                                                                                <h5 class="font-size-14 text-muted mb-0">252554</h5>
                                                                                
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <a href="#" class="viewMore mt-3">View All <i class="bx bx-chevron-down"></i></a>
                                                    </div>
                                                    <!-- end tab pane -->
                                                </div>
                                                <!-- end tab content -->
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                       
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end col -->
                        </div> <!-- end row-->
                        
                        
                        <!-- end row-->
                        
                        <div class="audience">
                            <h2>Explore The Power Of UAE Audience Platform</h2>
                            <div class="row">
                                <div class="col-md-5">

                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid mx-auto" src="./assets/images/g1.jpg" alt="First slide">
                                            </div>

                                            <div class="carousel-item">
                                                <img class="d-block img-fluid mx-auto" src="./assets/images/g2.jpg" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div><!-- end carousel -->

                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-primary halfBtn mt-3 postAd" type="button">Sell</button>
                                        <button class="btn btn-primary halfBtn mt-3 postAd" type="button">Explore Now</button>
                                    </div>
                                    
                                </div>
                                <div class="col-md-7">
                                    <div class="results">
                                        <h5>Sharp Targeting. Powerful Results </h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="inner">
                                                    <i class="bx bx-face"></i>
                                                    <div class="right">
                                                        <h5>Heading</h5>
                                                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inner">
                                                    <i class="bx bx-face"></i>
                                                    <div class="right">
                                                        <h5>Heading</h5>
                                                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inner mb-0">
                                                    <i class="bx bx-face"></i>
                                                    <div class="right">
                                                        <h5>Heading</h5>
                                                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inner mb-0">
                                                    <i class="bx bx-face"></i>
                                                    <div class="right">
                                                        <h5>Heading</h5>
                                                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="onDemand">
                            <div class="card">
                                <div class="card-body p-0">
                                    
                                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <div class="inner" style="background-image: url('./assets/images/ac.jpg');">
                                                <h5>Do You Want to Provide any Professional Services? <button class="btn btn-primary" type="button">Post your Request</button> </h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="inner" style="background-image: url('./assets/images/new.jpg');">
                                                <h5>Do You Want to Provide any Professional Services? <button class="btn btn-primary" type="button">Post your Request</button> </h5>
                                                </div>
                                            </div>
                                            <!-- <div class="carousel-item">
                                                <div class="inner" style="background-image: url('./assets/images/4.jpg');">
                                                <h5>Do You Want to Provide any Professional Services? <button class="btn btn-primary" type="button">Post your Request</button> </h5>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div><!-- end carousel -->

                                </div>
                            </div>
                        </div>

                        <div class="catagory">
                            <div class="row">
                                <div class="col">
                                    <div class="inner">
                                        <div class="card" style="background:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('./assets/images/ac_repair1.jpg'); background-size:cover">
                                            <div class="card-body">
                                                <h5>AC Repair</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="inner">
                                        <div class="card" style="background:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('./assets/images/carpenters.jpg'); background-size:cover">
                                            <div class="card-body">
                                                <h5>Carpenters</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="inner">
                                        <div class="card" style="background:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('./assets/images/spa.jpg'); background-size:cover">
                                            <div class="card-body">
                                                <h5>Spa & Message</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="inner">
                                        <div class="card" style="background:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('./assets/images/salon.jpg'); background-size:cover">
                                            <div class="card-body">
                                                <h5>Salon</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="inner">
                                        <div class="card" style="background:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('./assets/images/plumber.jpg'); background-size:cover">
                                            <div class="card-body">
                                                <h5>Plumber</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="inner">
                                        <div class="card" style="background:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('./assets/images/pest_control.jpg'); background-size:cover">
                                            <div class="card-body">
                                                <h5>Cleaning & Pest Control</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="inner">
                                        <div class="card" style="background:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('./assets/images/hair_service.jpg'); background-size:cover">
                                            <div class="card-body">
                                                <h5>Hair Service</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="inner">
                                        <div class="card" style="background:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('./assets/images/gysar_repair.jpg'); background-size:cover">
                                            <div class="card-body">
                                                <h5>Gysar Repair</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="inner">
                                        <div class="card" style="background:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('./assets/images/electrician.jpg'); background-size:cover">
                                            <div class="card-body">
                                                <h5>Electrician</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="inner">
                                        <div class="card" style="background:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('./assets/images/explore_all.jpg'); background-size:cover">
                                            <div class="card-body">
                                                <h5></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="audience">
                            <h2>Explore The Jobs of UAE Job Portal</h2>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="results bg-yellow">
                                        <h5>Sharp Targeting. Powerful Results </h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="inner">
                                                    <i class="bx bx-doughnut-chart"></i>
                                                    <div class="right">
                                                        <h5>Heading</h5>
                                                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inner">
                                                    <i class="bx bx-purchase-tag-alt"></i>
                                                    <div class="right">
                                                        <h5>Heading</h5>
                                                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inner mb-0">
                                                    <i class="bx bx-joystick"></i>
                                                    <div class="right">
                                                        <h5>Heading</h5>
                                                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inner mb-0">
                                                    <i class="bx bx-award"></i>
                                                    <div class="right">
                                                        <h5>Heading</h5>
                                                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-5">

                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid mx-auto" src="./assets/images/job.jpg" alt="First slide">
                                            </div>

                                            <div class="carousel-item">
                                                <img class="d-block img-fluid mx-auto" src="./assets/images/job1.jpg" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div><!-- end carousel -->

                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-primary halfBtn mt-3 postAd" type="button">Post Job</button>
                                        <button class="btn btn-primary halfBtn mt-3 postAd" type="button">Explore Now</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © UAE10
                            </div>
                            <div class="col-sm-6">
                             
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        
        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center bg-dark p-3">

                    <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="m-0" />

                <div class="p-4">
                    <h6 class="mb-3">Layout</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-vertical" value="vertical">
                        <label class="form-check-label" for="layout-vertical">Vertical</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-horizontal" value="horizontal">
                        <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-light" value="light">
                        <label class="form-check-label" for="layout-mode-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-dark" value="dark">
                        <label class="form-check-label" for="layout-mode-dark">Dark</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                        <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position"
                            id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                        <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position"
                            id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                        <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                        <label class="form-check-label" for="topbar-color-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                        <label class="form-check-label" for="topbar-color-dark">Dark</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                        <label class="form-check-label" for="sidebar-size-default">Default</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                        <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                        <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                        <label class="form-check-label" for="sidebar-color-light">Light</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                        <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                        <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Direction</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-ltr" value="ltr">
                        <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-rtl" value="rtl">
                        <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                    </div>

                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="assets/libs/pace-js/pace.min.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="./assets/js/pages/apexcharts.init.js"></script>
        <script src="./assets/libs/chart.js/Chart.bundle.min.js"></script>
        <script src="./assets/js/pages/chartjs.init.js"></script>

        <!-- Plugins js-->
        <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
        <!-- dashboard init -->
        <script src="assets/libs/glightbox/js/glightbox.min.js"></script>
        <script src="./assets/js/pages/lightbox.init.js"></script>

        <script src="assets/js/app.js"></script>

        <script>
            function getChartColorsArray(r) {
    r = $(r).attr("data-colors");
    return (r = JSON.parse(r)).map(function(r) {
        r = r.replace(" ", "");
        if (-1 == r.indexOf("--")) return r;
        r = getComputedStyle(document.documentElement).getPropertyValue(r);
        return r || void 0
    })
}
var minichart1Colors = getChartColorsArray("#mini-chart1"),
    options = {
        series: [{
            data: [2, 10, 18, 22, 36, 15, 47, 75, 65, 19, 14, 2, 47, 42, 15]
        }],
        chart: {
            type: "line",
            height: 50,
            sparkline: {
                enabled: !0
            }
        },
        colors: minichart1Colors,
        stroke: {
            curve: "smooth",
            width: 2
        },
        tooltip: {
            fixed: {
                enabled: !1
            },
            x: {
                show: !1
            },
            y: {
                title: {
                    formatter: function(r) {
                        return ""
                    }
                }
            },
            marker: {
                show: !1
            }
        }
    },
    chart = new ApexCharts(document.querySelector("#mini-chart1"), options);
chart.render();
var minichart2Colors = getChartColorsArray("#mini-chart2"),
    options = {
        series: [{
            data: [15, 42, 47, 2, 14, 19, 65, 75, 47, 15, 42, 47, 2, 14, 12]
        }],
        chart: {
            type: "line",
            height: 50,
            sparkline: {
                enabled: !0
            }
        },
        colors: minichart2Colors,
        stroke: {
            curve: "smooth",
            width: 2
        },
        tooltip: {
            fixed: {
                enabled: !1
            },
            x: {
                show: !1
            },
            y: {
                title: {
                    formatter: function(r) {
                        return ""
                    }
                }
            },
            marker: {
                show: !1
            }
        }
    };



    
(chart = new ApexCharts(document.querySelector("#mini-chart2"), options)).render();
var piechartColors = getChartColorsArray("#wallet-balance2"),
    options = {
        series: [35, 70, 15,30],
        chart: {
            width: 227,
            height: 227,
            type: "pie"
        },
        labels: ["Mining Rewards", "Farming Reward", "Airdrops", "Stacking Reward"],
        colors: piechartColors,
        stroke: {
            width: 0
        },
        legend: {
            show: !1
        },
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                }
            }
        }]
    };
(chart = new ApexCharts(document.querySelector("#wallet-balance2"), options)).render();
var radialchartColors = getChartColorsArray("#wallet-balance2"),
    options = {
        chart: {
            height: 270,
            type: "radialBar",
            offsetY: -10
        },
        plotOptions: {
            radialBar: {
                startAngle: -130,
                endAngle: 130,
                dataLabels: {
                    name: {
                        show: !1
                    },
                    value: {
                        offsetY: 10,
                        fontSize: "18px",
                        color: void 0,
                        formatter: function(r) {
                            return r + "%"
                        }
                    }
                }
            }
        },
        colors: [radialchartColors[0]],
        fill: {
            type: "gradient",
            gradient: {
                shade: "dark",
                type: "horizontal",
                gradientToColors: [radialchartColors[1]],
                shadeIntensity: .15,
                inverseColors: !1,
                opacityFrom: 1,
                opacityTo: 1,
                stops: [20, 60]
            }
        },
        stroke: {
            dashArray: 4
        },
        legend: {
            show: !1
        },
        series: [80],
        labels: ["Series A"]
    };

(chart = new ApexCharts(document.querySelector("#invested-overview"), options)).render();
var barchartColors = getChartColorsArray("#site-trafic"),
    options = {
        series: [{
            name: "Male",
            data: [12000, 16200, 8900, 11142, 11260, 18100, 18202, 14116, 11111, 8091, 5634, 5288]
        }, {
            name: "Female",
            data: [-11450, -15420, -7900, -6242, -5260, -8815, -7821, -7416, -7111, -7709, -6534, -5188]
        }],
        chart: {
            type: "bar",
            height: 400,
            stacked: !0,
            toolbar: {
                show: !1
            }
        },
        plotOptions: {
            bar: {
                columnWidth: "20%"
            }
        },
        colors: barchartColors,
        fill: {
            opacity: 1
        },
        dataLabels: {
            enabled: !1
        },
        legend: {
            show: !1
        },
        yaxis: {
            labels: {
                formatter: function(r) {
                    return r.toFixed(0) + ""
                }
            }
        },
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            labels: {
                rotate: -90
            }
        }
    };
(chart = new ApexCharts(document.querySelector("#site-trafic"), options)).render();
var vectormapColors = getChartColorsArray("#sales-by-locations");
$("#sales-by-locations").vectorMap({
    map: "world_mill_en",
    normalizeFunction: "polynomial",
    hoverOpacity: .7,
    hoverColor: !1,
    regionStyle: {
        initial: {
            fill: "#e9e9ef"
        }
    },
    markerStyle: {
        initial: {
            r: 9,
            fill: vectormapColors,
            "fill-opacity": .9,
            stroke: "#fff",
            "stroke-width": 7,
            "stroke-opacity": .4
        },
        hover: {
            stroke: "#fff",
            "fill-opacity": 1,
            "stroke-width": 1.5
        }
    },
    backgroundColor: "transparent",
    markers: [{
        latLng: [41.9, 12.45],
        name: "USA"
    }, {
        latLng: [12.05, -61.75],
        name: "Russia"
    }, {
        latLng: [1.3, 103.8],
        name: "Australia"
    }]
});
        </script>

    </body>


</html>