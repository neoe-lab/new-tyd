
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="soengsouy - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="soengsouy">
        <meta name="robots" content="noindex, nofollow">
        <title>Login HRMS</title>
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ base_url('assets/img/favicon.png') }}">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ base_url('assets/back/css/bootstrap.min.css') }}">
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ base_url('assets/back/css/font-awesome.min.css') }}">
        <!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{{ base_url('assets/back/css/line-awesome.min.css') }}">
        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{ base_url('assets/back/css/select2.min.css') }}">
        <!-- Datetimepicker CSS -->
        <link rel="stylesheet" href="{{ base_url('assets/back/css/bootstrap-datetimepicker.min.css') }}">

		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ base_url('assets/back/css/style.css') }}">
        {{-- message toastr --}}
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
        <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    </head>
    <body class="account-page error-page">
        <style>    
            .invalid-feedback{
                font-size: 14px;
            }
        </style>
		<!-- Main Wrapper -->
        @yield('content')
		<!-- /Main Wrapper -->
		<!-- jQuery -->
        <script src="{{ base_url('assets/back/js/jquery-3.5.1.min.js') }}"></script>
		<!-- Bootstrap Core JS -->
        <script src="{{ base_url('assets/back/js/popper.min.js') }}"></script>
        <script src="{{ base_url('assets/back/js/bootstrap.min.js') }}"></script>
        <!-- Slimscroll JS -->
		<script src="{{ base_url('assets/back/js/jquery.slimscroll.min.js') }}"></script>
		<!-- Select2 JS -->
		<script src="{{ base_url('assets/back/js/select2.min.js') }}"></script>
		<!-- Datetimepicker JS -->
		<script src="{{ base_url('assets/back/js/moment.min.js') }}"></script>
		<script src="{{ base_url('assets/back/js/bootstrap-datetimepicker.min.js') }}"></script>
		<!-- Custom JS -->
		<script src="{{ base_url('assets/back/js/app.js') }}"></script>
        @yield('script')
    </body>
</html>