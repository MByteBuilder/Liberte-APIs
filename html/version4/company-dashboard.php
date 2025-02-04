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
                    <span data-key="t-dashboard">Reward & Rating</span>
                </a>

                <a href="index.html">
                    <i class="bx bx-wallet-alt"></i>
                    <span data-key="t-dashboard">Wallet</span>
                </a>

                <a href="index.html">
                    <i class="bx bx-landscape"></i>
                    <span data-key="t-dashboard">Banner</span>
                </a>

                <a href="index.html">
                    <i class="bx bx-building-house"></i>
                    <span data-key="t-dashboard">Company</span>
                </a>

                <a href="index.html">
                    <i class="bx bx-trophy"></i>
                    <span data-key="t-dashboard">Offers</span>
                </a>

                <a href="index.html">
                    <i class="bx bx-image-add"></i>
                    <span data-key="t-dashboard">Gallery</span>
                </a>
                <a href="index.html">
                    <i class="bx bx-news"></i>
                    <span data-key="t-dashboard">News</span>
                </a>
                <a href="index.html">
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
                                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

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
                            <div class="col-xl-6 col-md-6">
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
                                            <div class="col-6">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Traffic</span>
                                                <h4 class="mb-3">
                                                    <span class="counter-value" data-target="6258">0</span>
                                                </h4>
                                            </div>
                                            <div class="col-6">
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
        
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Reviews</span>
                                                <h4 class="mb-3">
                                                    <span class="counter-value" data-target="5212">0</span>
                                                </h4>
                                            </div>
                                            <div class="col-6">
                                                <div id="mini-chart3" data-colors='["#275ba7"]' class="apex-charts mb-2"></div>
                                            </div>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-success text-success">+ $2.8k</span>
                                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
        
                        </div><!-- end row-->

                        <div class="row">
                            <div class="col-xl-5">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center mb-4">
                                            <h5 class="card-title me-2">Intermiles Spent</h5>
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
                                                <div id="wallet-balance" data-colors='["#AF8AFE", "#9AC3FE", "#FE849A", "#B3F06F"]' class="apex-charts"></div>
                                            </div>
                                            <div class="col-sm align-self-center">
                                                <div class="mt-4 mt-sm-0">
                                                    <div>
                                                        <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2" style="color:#AF8AFE;"></i> Add Banner</p>
                                                        <h6>441 Intermiles</h6>
                                                    </div>
    
                                                    <div class="mt-4 pt-2">
                                                        <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2" style="color:#FE849A;"></i> Special Requests</p>
                                                        <h6>325 Intermiles</h6>
                                                    </div>
    
                                                    <div class="mt-4 pt-2">
                                                        <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2" style="color:#B3F06F;"></i> Add Event</p>
                                                        <h6>525 Intermiles</h6>
                                                    </div>

                                                    <div class="mt-4 pt-2">
                                                        <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2" style="color:#a0c7ff;"></i> Add Offer</p>
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
                                    <div class="col-xl-8">
                                        <!-- card -->
                                        <!-- <div class="card createPost">
                                            <div class="card-body">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="bx bx-calendar-check"></i>
                                                            Create Event
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <i class="bx bx-camera"></i>
                                                            Add Gallery
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <i class="bx bx-gift"></i>
                                                            Create Offer
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> -->
                                        <div class="card">
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
                                                                User's Activity 
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#transactions-buy-tab2" role="tab">
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
                                                                        <td style="width: 50px;">
                                                                            <div class="font-size-22 text-danger">
                                                                                <i class="bx bx-up-arrow-circle d-block"></i>
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
                                                                                <i class="bx bx-up-arrow-circle d-block"></i>
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
                                                                                <i class="bx bx-up-arrow-circle d-block"></i>
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
                                                                                <i class="bx bx-up-arrow-circle d-block"></i>
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
                                                    <div class="tab-pane" id="transactions-buy-tab" role="tabpanel">
                                                        <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                                            <table class="table align-middle table-nowrap table-borderless">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="width: 50px;">
                                                                            <div class="font-size-22 text-danger">
                                                                                <i class="bx bx-up-arrow-circle d-block"></i>
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
                                                                                <i class="bx bx-up-arrow-circle d-block"></i>
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
                                                                                <i class="bx bx-up-arrow-circle d-block"></i>
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
                                                                                <i class="bx bx-up-arrow-circle d-block"></i>
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
                                                    <div class="tab-pane" id="transactions-buy-tab2" role="tabpanel">
                                                        <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                                            <table class="table align-middle table-nowrap table-borderless">
                                                                <tbody>
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
                                                                                <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
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
                                                                                <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
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
                                                                                <h5 class="font-size-14 text-muted mb-0">$145.80</h5>
                                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
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
                                                                                <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
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
                                                </div>
                                                <!-- end tab content -->
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                       
                                    </div>
                                    <!-- end col -->

                                    <div class="col-xl-4">
                                        <!-- card -->
                                        <div class="card shadow-primary card-h-100">
                                            <!-- card body -->
                                            <div class="card-body h-100 p-0">
                                                <div id="carouselExampleCaptions" class="carousel slide text-center widget-carousel h-100 " data-bs-ride="carousel">                                                   
                                                    <div class="carousel-inner h-100 ocSlider" >
                                                        <div class="carousel-item active h-100" style="background:url('assets/images/s1.jpg');background-size:cover;">
                                                            <div class="text-center p-4 h-100">
                                                                <h5 class=" mb-3">Marketplace</h5>
                                                                <i class="mdi mdi-card-account-details-star widget-box-1-icon"></i>
                                                     
                                                                
                                                                <div class="ocBtn text-center">
                                                                <button type="button" class="btn btn-light btn-sm ">View All <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end carousel-item -->
                                                        <div class="carousel-item h-100" style="background:url('assets/images/s2.jpg');background-size:cover;background-position:center">
                                                            <div class="text-center p-4">
                                                                <h5 class="mb-3">Job Portal</h5>
                                                                <i class="mdi mdi-card-account-details-star widget-box-1-icon"></i>
                                       
                                                                
                                                                <div class="ocBtn text-center">
                                                                <button type="button" class="btn btn-light btn-sm ">View All <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end carousel-item -->
                                                        <div class="carousel-item h-100" style="background:url('assets/images/s3.jpg');background-size:cover;background-position:bottom">
                                                            <div class="text-center p-4">
                                                                <h5 class="mb-3">Professional Services</h5>
                                                                <i class="mdi mdi-card-account-details-star widget-box-1-icon"></i>

                                                                <div class="ocBtn text-center">
                                                                <button type="button" class="btn btn-light btn-sm ">View All <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                                </div>
                                                              
                                                            </div>
                                                        </div>
                                                        <!-- end carousel-item -->
                                                    </div>
                                                    <!-- end carousel-inner -->
                                                    
                                                    <div class="carousel-indicators carousel-indicators-rounded">
                                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                                                            aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    </div>
                                                    <!-- end carousel-indicators -->
                                                </div>
                                                <!-- end carousel -->
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end col -->
                        </div> <!-- end row-->

                        <div class="row">
                            <div class="col-xl-8">
                                <!-- card -->
                                <div class="card">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center mb-4">
                                            <h5 class="card-title me-2">Site Traffic Analysis</h5>
                                            <div class="ms-auto">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted font-size-12">Sort By:</span> <span class="fw-medium">Gender<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                                        <a class="dropdown-item" href="#">Gender</a>
                                                        <a class="dropdown-item" href="#">Age : 12 - 18</a>
                                                        <a class="dropdown-item" href="#">Age : 19 - 25</a>
                                                        <a class="dropdown-item" href="#">Age : 26 - 65</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="col-xl-12">
                                                <div>
                                                    <div id="site-trafic" data-colors='["#5156be", "#34c38f"]' class="apex-charts"></div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row-->
        
                            <div class="col-xl-4">
                                <!-- card -->
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Site Traffics</h4>
                                        <div class="flex-shrink-0">
                                            <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs" role="tablist">
                                             
                                            </ul>
                                            <!-- end nav tabs -->
                                        </div>
                                    </div><!-- end card header -->

                                    <div class="card-body px-0">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="transactions-all-tab" role="tabpanel">
                                                <div class="table-responsive px-3" data-simplebar="init" style="max-height: 352px;"><div class="simplebar-wrapper" style="margin: 0px -16px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px 16px;">
                                                    <table class="table align-middle table-nowrap table-borderless">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <div class="font-size-22 text-success">
                                                                        <i class="bx bx-user"></i>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1 text-truncate">#UAE52525</h5>
                                                                        <p class="text-muted mb-0 font-size-12"><i class="bx bx-time"></i> 1 hour ago</p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <a href="#">View details</a>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <div class="font-size-22 text-success">
                                                                        <i class="bx bx-user"></i>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1 text-truncate">#UAE52525</h5>
                                                                        <p class="text-muted mb-0 font-size-12"><i class="bx bx-time"></i> 1 hour ago</p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <a href="#">View details</a>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <div class="font-size-22 text-success">
                                                                        <i class="bx bx-user"></i>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1 text-truncate">#UAE52525</h5>
                                                                        <p class="text-muted mb-0 font-size-12"><i class="bx bx-time"></i> 1 hour ago</p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <a href="#">View details</a>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <div class="font-size-22 text-success">
                                                                        <i class="bx bx-user"></i>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1 text-truncate">#UAE52525</h5>
                                                                        <p class="text-muted mb-0 font-size-12"><i class="bx bx-time"></i> 1 hour ago</p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <a href="#">View details</a>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <div class="font-size-22 text-success">
                                                                        <i class="bx bx-user"></i>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1 text-truncate">#UAE52525</h5>
                                                                        <p class="text-muted mb-0 font-size-12"><i class="bx bx-time"></i> 1 hour ago</p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <a href="#">View details</a>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <div class="font-size-22 text-success">
                                                                        <i class="bx bx-user"></i>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1 text-truncate">#UAE52525</h5>
                                                                        <p class="text-muted mb-0 font-size-12"><i class="bx bx-time"></i> 1 hour ago</p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <a href="#">View details</a>
                                                                </td>

                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 267px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 271px; transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>
                                            </div>
                                            <!-- end tab pane -->
                                        </div>
                                        <a href="#" class="viewMore">View All <i class="bx bx-chevron-down"></i></a>
                                        <!-- end tab content -->
                                    </div>
                                    <!-- end card body -->
                                </div>

                                <!-- <div class="card">
                               
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center mb-4">
                                            <h5 class="card-title me-2">Review Analysis</h5>
                                            <div class="ms-auto">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted font-size-12">Sort By:</span> <span class="fw-medium">Gender<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                                        <a class="dropdown-item" href="#">Gender</a>
                                                        <a class="dropdown-item" href="#">Age : 12 - 18</a>
                                                        <a class="dropdown-item" href="#">Age : 19 - 25</a>
                                                        <a class="dropdown-item" href="#">Age : 26 - 65</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="col-xl-12">
                                                <div>
                                                    <canvas id="lineChart" height="400" data-colors='["rgba(81, 86, 190, 0.2)", "#5156be", "rgba(235, 239, 242, 0.2)", "#ebeff2"]'></canvas>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    
                                </div> -->
                                <!-- end card -->
                            </div>

                            <!-- end col -->
                        </div>


                        <div class="row">

                            <div class="col-xl-5">
                                <!-- card -->
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Reviews</h4>
                                        <div class="flex-shrink-0">
                                            <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs" role="tablist">
                                             
                                            </ul>
                                            <!-- end nav tabs -->
                                        </div>
                                    </div><!-- end card header -->

                                    <div class="card-body px-0">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="transactions-all-tab" role="tabpanel">
                                                <div class="table-responsive px-3" data-simplebar="init" style="max-height: 352px;"><div class="simplebar-wrapper" style="margin: 0px -16px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px 16px;">

                                                    <table class="table align-middle table-nowrap table-borderless">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <div class="font-size-22 text-success">
                                                                        <i class="bx bx-note"></i>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1 text-truncate">UAE weekends to mo...</h5>
                                                                        <p class="text-muted mb-0 font-size-12">#UAE52525 <span class="ml-2"><i class="bx bx-time"></i>2 hours ago</span> </p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <i class="bx bxs-star"></i>
                                                                        <i class="bx bxs-star"></i>
                                                                        <i class="bx bxs-star"></i>
                                                                        <i class="bx bxs-star"></i>
                                                                        <i class="bx bxs-star"></i>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="font-size-22 text-success">
                                                                        <i class="bx bx-note d-block"></i>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">One day left to ente...</h5>
                                                                        <p class="text-muted mb-0 font-size-12">#UAE52525 <span class="ml-2"><i class="bx bx-time"></i>2 hours ago</span> </p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <i class="bx bxs-star"></i>
                                                                        <i class="bx bxs-star"></i>
                                                                        <i class="bx bxs-star"></i>
                                                                        <i class="bx bx-star"></i>
                                                                        <i class="bx bx-star"></i>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="font-size-22 text-success">
                                                                        <i class="bx bx-note d-block"></i>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Dubai Tourism intro...</h5>
                                                                        <p class="text-muted mb-0 font-size-12">#UAE52525 <span class="ml-2"><i class="bx bx-time"></i>2 hours ago</span> </p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <div class="text-end">
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bxs-star-half"></i>
                                                                            <i class="bx bx-star"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="font-size-22 text-success">
                                                                        <i class="bx bx-note d-block"></i>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Dubai Tourism intro...</h5>
                                                                        <p class="text-muted mb-0 font-size-12">#UAE52525 <span class="ml-2"><i class="bx bx-time"></i>2 hours ago</span> </p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <div class="text-end">
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bxs-star-half"></i>
                                                                            <i class="bx bx-star"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="font-size-22 text-success">
                                                                        <i class="bx bx-note d-block"></i>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Dubai Tourism intro...</h5>
                                                                        <p class="text-muted mb-0 font-size-12">#UAE52525 <span class="ml-2"><i class="bx bx-time"></i>2 hours ago</span> </p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <div class="text-end">
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bxs-star-half"></i>
                                                                            <i class="bx bx-star"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="font-size-22 text-success">
                                                                        <i class="bx bx-note d-block"></i>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Dubai Tourism intro...</h5>
                                                                        <p class="text-muted mb-0 font-size-12">#UAE52525 <span class="ml-2"><i class="bx bx-time"></i>2 hours ago</span> </p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <div class="text-end">
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bxs-star-half"></i>
                                                                            <i class="bx bx-star"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>

                                                </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 267px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 271px; transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>
                                            </div>
                                            <!-- end tab pane -->
                                        </div>
                                        <a href="#" class="viewMore">View All <i class="bx bx-chevron-down"></i></a>
                                        <!-- end tab content -->
                                    </div>
                                    <!-- end card body -->
                                </div>

                                
                                <!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-xl-7">
                                <!-- card -->
                                <div class="card">
                               
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center mb-4">
                                            <h5 class="card-title me-2">Review Analysis</h5>
                                            <div class="ms-auto">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted font-size-12">Sort By:</span> <span class="fw-medium">Gender<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                                        <a class="dropdown-item" href="#">Gender</a>
                                                        <a class="dropdown-item" href="#">Age : 12 - 18</a>
                                                        <a class="dropdown-item" href="#">Age : 19 - 25</a>
                                                        <a class="dropdown-item" href="#">Age : 26 - 65</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="col-xl-12">
                                                <div>
                                                    <canvas id="lineChart" height="380" data-colors='["rgba(81, 86, 190, 0.2)", "#5156be", "rgba(235, 239, 242, 0.2)", "#ebeff2"]'></canvas>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row-->
                        </div>
                        
                        
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

                                    <button class="btn btn-primary w-100 mt-3 postAd" type="button">POST AD</button>
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

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <div class="flex-shrink-0">
                                            <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs offer" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#transactions-all-tab2" role="tab">
                                                        Offers 
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#transactions-buy-tab2" role="tab">
                                                        Events 
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#transactions-sell-tab2" role="tab">
                                                        News  
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- end nav tabs -->
                                        </div>
                                    </div><!-- end card header -->

                                    <div class="card-body px-0">
                                        <div class="tab-content">
                                            <div class="tab-pane active offerTab" id="transactions-all-tab2" role="tabpanel">
                                                <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                                    <table class="table align-middle table-nowrap table-borderless">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <div class="off" style="background-image: url('./assets/images/2.jpg');">
                                                                        30%
                                                                        <span>OFF</span>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Like, Comment,  Post, Tag, Share..</h5>
                                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <h5 class="font-size-14 mb-0">5000</h5>
                                                                        <p class="text-muted mb-0 font-size-12">People Availed</p>
                                                                    </div>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <div class="off" style="background-image: url('./assets/images/1.png');">
                                                                        40%
                                                                        <span>OFF</span>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Like, Comment,  Post, Tag, Share..</h5>
                                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <h5 class="font-size-14 mb-0">5000</h5>
                                                                        <p class="text-muted mb-0 font-size-12">People Availed</p>
                                                                    </div>
                                                                </td>

                                                            </tr>


                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <div class="off" style="background-image: url('./assets/images/3.jpg');">
                                                                        50%
                                                                        <span>OFF</span>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Like, Comment,  Post, Tag, Share..</h5>
                                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <h5 class="font-size-14 mb-0">5000</h5>
                                                                        <p class="text-muted mb-0 font-size-12">People Availed</p>
                                                                    </div>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <div class="off" style="background-image: url('./assets/images/4.jpg');">
                                                                        20%
                                                                        <span>OFF</span>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Like, Comment,  Post, Tag, Share..</h5>
                                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <h5 class="font-size-14 mb-0">5000</h5>
                                                                        <p class="text-muted mb-0 font-size-12">People Availed</p>
                                                                    </div>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <div class="off" style="background-image: url('./assets/images/5.jpg');">
                                                                        10%
                                                                        <span>OFF</span>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Like, Comment,  Post, Tag, Share..</h5>
                                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <h5 class="font-size-14 mb-0">5000</h5>
                                                                        <p class="text-muted mb-0 font-size-12">People Availed</p>
                                                                    </div>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <div class="off" style="background-image: url('./assets/images/6.jpg');">
                                                                        20%
                                                                        <span>OFF</span>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Like, Comment,  Post, Tag, Share..</h5>
                                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <h5 class="font-size-14 mb-0">5000</h5>
                                                                        <p class="text-muted mb-0 font-size-12">People Availed</p>
                                                                    </div>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <div class="off" style="background-image: url('./assets/images/7.jpg');">
                                                                        40%
                                                                        <span>OFF</span>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Like, Comment,  Post, Tag, Share..</h5>
                                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <h5 class="font-size-14 mb-0">5000</h5>
                                                                        <p class="text-muted mb-0 font-size-12">People Availed</p>
                                                                    </div>
                                                                </td>

                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- end tab pane -->
                                            <div class="tab-pane" id="transactions-buy-tab2" role="tabpanel">
                                                <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                                    <table class="table align-middle table-nowrap table-borderless">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <img src="./assets/images/2.jpg" alt="">
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Like, Comment,  Post, Tag, Share..</h5>
                                                                        <p class="text-muted mb-0 font-size-12">14 Jan, 2022 - <span> 14 Feb, 2022</span> </p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <button type="button" class="btn btn-light btn-sm">Read more</button>
                                                                    </div>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <img src="./assets/images/1.png" alt="">
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Like, Comment,  Post, Tag, Share..</h5>
                                                                        <p class="text-muted mb-0 font-size-12">14 Jan, 2022 - <span> 14 Feb, 2022</span> </p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <div class="text-end">
                                                                            <button type="button" class="btn btn-light btn-sm">Read more</button>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                            </tr>


                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <img src="./assets/images/3.jpg" alt="">
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Like, Comment,  Post, Tag, Share..</h5>
                                                                        <p class="text-muted mb-0 font-size-12">14 Jan, 2022 - <span> 14 Feb, 2022</span> </p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <div class="text-end">
                                                                            <button type="button" class="btn btn-light btn-sm">Read more</button>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <img src="./assets/images/4.jpg" alt="">
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Like, Comment,  Post, Tag, Share..</h5>
                                                                        <p class="text-muted mb-0 font-size-12">14 Jan, 2022 - <span> 14 Feb, 2022</span> </p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <div class="text-end">
                                                                            <button type="button" class="btn btn-light btn-sm">Read more</button>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <img src="./assets/images/5.jpg" alt="">
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Like, Comment,  Post, Tag, Share..</h5>
                                                                        <p class="text-muted mb-0 font-size-12">14 Jan, 2022 - <span> 14 Feb, 2022</span> </p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <div class="text-end">
                                                                            <button type="button" class="btn btn-light btn-sm">Read more</button>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <img src="./assets/images/6.jpg" alt="">
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Like, Comment,  Post, Tag, Share..</h5>
                                                                        <p class="text-muted mb-0 font-size-12">14 Jan, 2022 - <span> 14 Feb, 2022</span> </p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <div class="text-end">
                                                                            <button type="button" class="btn btn-light btn-sm">Read more</button>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <img src="./assets/images/7.jpg" alt="">
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Like, Comment,  Post, Tag, Share..</h5>
                                                                        <p class="text-muted mb-0 font-size-12">14 Jan, 2022 - <span> 14 Feb, 2022</span> </p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <div class="text-end">
                                                                            <button type="button" class="btn btn-light btn-sm">Read more</button>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- end tab pane -->
                                            <div class="tab-pane" id="transactions-sell-tab2" role="tabpanel">
                                                <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                                    <table class="table align-middle table-nowrap table-borderless">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <img src="./assets/images/2.jpg" alt="">
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Like, Comment,  Post, Tag, Share..</h5>
                                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                       <a href="#">Read more</a>
                                                                    </div>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <img src="./assets/images/1.png" alt="">
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Like, Comment,  Post, Tag, Share..</h5>
                                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <a href="#">Read more</a>
                                                                    </div>
                                                                </td>

                                                            </tr>


                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <img src="./assets/images/3.jpg" alt="">
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Like, Comment,  Post, Tag, Share..</h5>
                                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <a href="#">Read more</a>
                                                                    </div>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <img src="./assets/images/4.jpg" alt="">
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Like, Comment,  Post, Tag, Share..</h5>
                                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <a href="#">Read more</a>
                                                                    </div>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <img src="./assets/images/5.jpg" alt="">
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Like, Comment,  Post, Tag, Share..</h5>
                                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <a href="#">Read more</a>
                                                                    </div>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <img src="./assets/images/6.jpg" alt="">
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Like, Comment,  Post, Tag, Share..</h5>
                                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <a href="#">Read more</a>
                                                                    </div>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <img src="./assets/images/7.jpg" alt="">
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Like, Comment,  Post, Tag, Share..</h5>
                                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <a href="#">Read more</a>
                                                                    </div>
                                                                </td>

                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- end tab pane -->
                                        </div>
                                        <!-- end tab content -->
                                    </div>
                                    <!-- end card body -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex gallery">
                                   
                                        <div class="flex-shrink-0">
                                            <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#transactions-all-tab" role="tab">
                                                        Gallery
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#transactions-buy-tab" role="tab">
                                                        Banner
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
                                                    
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-6">
                                                            <div class="mt-4">
                                                                <a href="assets/images/1.png" class="image-popup">
                                                                    <img src="assets/images/1.png" class="img-fluid" alt="work-thumbnail">
                                                                </a>
                                                            </div>
                                                        </div>
            
                                                        <div class="col-lg-6 col-sm-6">
                                                            <div class="mt-4">
                                                                <a href="assets/images/small/img-2.jpg" class="image-popup">
                                                                    <img src="assets/images/2.jpg" class="img-fluid" alt="work-thumbnail">
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-sm-6">
                                                            <div class="mt-4">
                                                                <a href="assets/images/small/img-2.jpg" class="image-popup">
                                                                    <img src="assets/images/3.jpg" class="img-fluid" alt="work-thumbnail">
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-sm-6">
                                                            <div class="mt-4">
                                                                <a href="assets/images/small/img-2.jpg" class="image-popup">
                                                                    <img src="assets/images/4.jpg" class="img-fluid" alt="work-thumbnail">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6">
                                                            <div class="mt-4">
                                                                <a href="assets/images/small/img-2.jpg" class="image-popup">
                                                                    <img src="assets/images/5.jpg" class="img-fluid" alt="work-thumbnail">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6">
                                                            <div class="mt-4">
                                                                <a href="assets/images/small/img-2.jpg" class="image-popup">
                                                                    <img src="assets/images/6.jpg" class="img-fluid" alt="work-thumbnail">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="viewMore mt-3">View All <i class="bx bx-chevron-down"></i></a>
                                                </div>
                                            </div>
                                            <!-- end tab pane -->
                                            <div class="tab-pane" id="transactions-buy-tab" role="tabpanel">
                                        
                                            </div>
                                            <!-- end tab pane -->
                                            <div class="tab-pane" id="transactions-sell-tab" role="tabpanel">
                                                <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                            
                                                </div>
                                            </div>
                                            <!-- end tab pane -->
                                        </div>
                                        <!-- end tab content -->
                                    </div>
                                    <!-- end card body -->
                                </div>
                            </div>
                        </div>

                        <div class="onDemand">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-center">Book Professionals On Demand</h5>

                                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <div class="inner" style="background-image: url('./assets/images/ac.jpg');">
                                                <h5>Do you want to provide any Professionals Services ? - <button class="btn btn-primary" type="button">Post Your Requests</button> </h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="inner" style="background-image: url('./assets/images/new.jpg');">
                                                <h5>Do you want to provide any Professionals Services ? - <button class="btn btn-primary" type="button">Post Your Requests</button> </h5>
                                                </div>
                                            </div>
                                            <!-- <div class="carousel-item">
                                                <div class="inner" style="background-image: url('./assets/images/4.jpg');">
                                                <h5>Do you want to provide any Professionals Services ? - <button class="btn btn-primary" type="button">Post Your Requests</button> </h5>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div><!-- end carousel -->

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
        <script src="assets/js/pages/dashboard.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>


</html>