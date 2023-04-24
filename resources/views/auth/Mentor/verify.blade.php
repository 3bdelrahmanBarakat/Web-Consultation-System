<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<title>Mentoring</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

	</head>
	<body class="account-page">

		<!-- Main Wrapper -->
		<div class="main-wrapper">

            <!-- Header -->
			<header class="header">
				<div class="header-fixed">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="index.html" class="navbar-brand logo">
							<img src="{{asset('assets/img/logo final mohamed pnggggggg-01.png')}}" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index.html" class="menu-logo">
								<img src="{{asset('assets/img/logo final mohamed pnggggggg-01.png')}}" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">


							<li class="login-link">
								<a href="login.html">Login / Signup</a>
							</li>
						</ul>
					</div>
					<ul class="nav header-navbar-rht">

						<!-- User Menu -->
						<li class="nav-item dropdown has-arrow logged-item">
							<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
								<span class="user-img">
									<img class="rounded-circle" src="{{asset('assets/img/user/user.jpg')}}" width="31" alt="Darren Elder">
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<div class="user-header">
									<div class="avatar avatar-sm">
										<img src="{{asset('assets/img/user/user.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
									</div>
									<div class="user-text">
										<h6>{{ Auth::user()->fname }}</h6>
										<p class="text-muted mb-0">Mentor</p>
									</div>
								</div>
								
                                <form  action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item">Logout</button>
                                </form>
							</div>
						</li>
						<!-- /User Menu -->

					</ul>
				</nav>
				</div>
			</header>
			<!-- /Header -->


			<!-- Page Content -->
			<div class="bg-pattern-style">
				<div class="content">

					<!-- Account Content -->
					<div class="account-content">
						<div class="account-box">
							<div class="login-right">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('A fresh verification link has been sent to your email address.') }}
                                    </div>
                                @endif
								<div class="login-header">
									<h3>Verify your email address</h3>

								</div>

								<!-- Forgot Password Form -->
								<form method="POST" action="{{ route('verification.resend') }}">
									<div class="form-group">
										<label class="form-control-label">Before proceeding, please check your email for a verification link. If you did not receive the email</label>

									</div>

									<button class="btn btn-primary login-btn" type="submit">Resend verification again</button>
								</form>
								<!-- /Forgot Password Form -->

							</div>
						</div>
					</div>
					<!-- /Account Content -->
				</div>
			</div>
			<!-- /Page Content -->

		</div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
		<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

		<!-- Bootstrap Core JS -->
		<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

		<!-- Custom JS -->
		<script src="{{asset('assets/js/script.js')}}"></script>

	</body>
</html>
