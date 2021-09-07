<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>เข้าสู่ระบบ | ระบบประเมิน</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href={{ base_url("assets/back/img/favicon.png")}}>
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href={{ base_url("assets/back/css/bootstrap.min.css")}}>
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href={{ base_url("assets/back/css/font-awesome.min.css")}}>
		
		<!-- Main CSS -->
        <link rel="stylesheet" href={{ base_url("assets/back/css/style.css")}}>
		
		{{-- <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src={{ base_url("assets/back/js/html5shiv.min.js")}}></script>
			<script src={{ base_url("assets/back/js/respond.min.js")}}></script>
		<![endif]--> --}}
    </head>
    <body class="account-page">
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				{{-- <a href="job-list.html" class="btn btn-primary apply-btn">Apply Job</a> --}}
				<div class="container">
				
					<!-- Account Logo -->
					{{-- <div class="account-logo">
						<a href="index.html"><img src={{ base_url("assets/back/img/logo.png")}} alt="Dreamguy's Technologies"></a>
					</div> --}}
					<!-- /Account Logo -->
					
					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">เข้าสู่ระบบ</h3>
							{{-- <p class="account-subtitle">Access to our dashboard</p> --}}
							<!-- Account Form -->
							<form action="home/auth" method="post">
								<div class="form-group">
									<label>ชื่อผู้ใช้</label>
									<input class="form-control" type="text" name="username">
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label>รหัสผ่าน</label>
										</div>
										<div class="col-auto">
											<a class="text-muted" href="forgot-password.html">
												Forgot password?
											</a>
										</div>
									</div>
									<input class="form-control" type="password" name="password">
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" type="submit">Login</button>
								</div>

								<div class="account-footer">
									{{-- <p>Don't have an account yet? <a href="register.html">Register</a></p> --}}
								</div>
							</form>
							<!-- /Account Form -->
							
						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src={{ base_url("assets/back/js/jquery-3.5.1.min.js")}}></script>
		
		<!-- Bootstrap Core JS -->
        <script src={{ base_url("assets/back/js/popper.min.js")}}></script>
        <script src={{ base_url("assets/back/js/bootstrap.min.js")}}></script>
		
		<!-- Custom JS -->
		<script src={{ base_url("assets/back/js/app.js")}}></script>
		
    </body>
</html>