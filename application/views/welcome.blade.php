<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Dashboard - HRMS admin template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href={{ base_url("assets/back/img/favicon.png")}}>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{ base_url("assets/back/css/bootstrap.min.css")}}>

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ base_url("assets/back/css/font-awesome.min.css")}}">
    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href={{ base_url("assets/back/css/line-awesome.min.css")}}>

    <!-- Chart CSS -->
    <link rel="stylesheet" href={{ base_url("assets/back/plugins/morris/morris.css")}}>

    <!-- Main CSS -->
    <link rel="stylesheet" href={{ base_url("assets/back/css/style.css")}}>
    {{-- <link rel="stylesheet" href="assets/back/css/style.css"> --}}


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <div class="header">

            <!-- Logo -->
            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src={{ base_url("assets/back/img/logo.png")}} width="50" height="40" alt="">
                </a>
            </div>
            <!-- /Logo -->

            <a id="toggle_btn" href="javascript:void(0);">
                <span class="bar-icon">
						<span></span>
                <span></span>
                <span></span>
                </span>
            </a>

            <!-- Header Title -->
            <div class="page-title-box">
                <h3>โรงพยาบาลทุ่งยางแดง</h3>
            </div>
            <!-- /Header Title -->

            <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

            <!-- Header Menu -->
            <ul class="nav user-menu">
                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img"><img src={{ base_url("assets/back/img/profiles/avatar-21.jpg")}} alt="">
							<span class="status online"></span></span>
                        <span>นายอิควรรณ หะยีดือราเฮง</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="settings.html">Settings</a>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
            <!-- /Header Menu -->

            <!-- Mobile Menu -->
            <div class="dropdown mobile-user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </div>
            <!-- /Mobile Menu -->

        </div>
        <!-- /Header -->

        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>หน้าหลัก</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-dashboard"></i> <span> เดชบอร์ด</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class="active" href="index.html">แอดมิน Dashboard</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->




        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <!-- Page Content -->
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">ยินดีตอนรับ </h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->




            </div>
            <!-- /Page Content -->

        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src={{ base_url("assets/back/js/jquery-3.5.1.min.js")}}></script>

    <!-- Bootstrap Core JS -->
    <script src={{ base_url("assets/back/js/popper.min.js") }}></script>
    <script src={{ base_url("assets/back/js/bootstrap.min.js") }}></script>

    <!-- Slimscroll JS -->
    <script src={{ base_url("assets/back/js/jquery.slimscroll.min.js")}}></script>

    <!-- Chart JS -->
    <script src={{ base_url("assets/back/plugins/morris/morris.min.js")}}></script>
    <script src={{ base_url("assets/back/plugins/raphael/raphael.min.js")}}></script>
    <script src={{ base_url("assets/back/js/chart.js")}}></script>

    <!-- Custom JS -->
    <script src={{ base_url("assets/back/js/app.js")}}></script>

</body>

</html>