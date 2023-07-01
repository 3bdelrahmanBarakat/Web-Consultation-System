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
			<div class="bg-pattern-style bg-pattern-style-register">
				<div class="content">

					<!-- Register Content -->
					<div class="account-content">
						<div class="account-box">
							<div class="login-right">
								<div class="login-header">
									<h3><span>MentorQuest</span> <span style="color: grey;"> || </span> Mentee Register</h3>
									<p class="text-muted">Access to our dashboard</p>
									<a id="Register-as-a-Mentee" href="{{route('register')}}">Register as a Mentor</a> <br>
								</div>


								<!-- Register Form -->
								<form method="POST" action="{{ route('mentee.register.submit') }}">
                                    @csrf
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<label  class="form-control-label">Name</label>
												<input id="first-name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" autofocus="" required>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
											</div>
										</div>

									</div>
									<div class="form-group">
										<label  class="form-control-label">Email Address</label>
										<input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
									<div class="form-group">
										<label  class="form-control-label">Username</label>
										<input id="Number" type="text" name="username" class="form-control @error('username') is-invalid @enderror" required>
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<label  class="form-control-label">Password</label>
												<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" minlength= "8" maxlength="14" required>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label  class="form-control-label">Confirm Password</label>
												<input id="password-confirm" type="password" class="form-control" name="password_confirmation" minlength= "8" maxlength="14" required>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="form-check form-check-xs custom-checkbox">
											<input type="checkbox" class="form-check-input" name="agreeCheckboxUser" id="agree_checkbox_user" required>
											<label class="form-check-label" for="agree_checkbox_user">I agree to MentorQuest</label> <a tabindex="-1" href="javascript:void(0);">Privacy Policy</a> &amp; <a tabindex="-1" href="javascript:void(0);" > Terms.</a>
										</div>
									</div>
									<button class="btn btn-primary login-btn" type="submit">Create Account</button>
									

									<div class="account-footer text-center mt-3">
										Already have an account? <a style="color:#1169b1" class="forgot-link mb-0" href="{{ route('mentee.login') }}">Login</a>
									</div>
								</form>
								<!-- /Register Form -->

							</div>
						</div>
					</div>
					<!-- /Register Content -->

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
