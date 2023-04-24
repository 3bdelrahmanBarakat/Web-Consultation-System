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


			<!-- Page Content -->
			<div class="bg-pattern-style">
				<div class="content">

					<!-- Account Content -->
					<div class="account-content">
						<div class="account-box">
							<div class="login-right">
								<div class="login-header">
									<h3>Forgot Password?</h3>
									<p class="text-muted">Enter your email to get a password reset link</p>
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
								</div>

								<!-- Forgot Password Form -->
								<form method="POST" action="{{ route('password.email') }}">
                                @csrf
									<div class="form-group">
										<label class="form-control-label">Email Address</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
									<div class="text-end">
										<a class="forgot-link" href="{{route('login')}}">Remember your password?</a>
									</div>
									<button class="btn btn-primary login-btn" type="submit">Reset Password</button>
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
