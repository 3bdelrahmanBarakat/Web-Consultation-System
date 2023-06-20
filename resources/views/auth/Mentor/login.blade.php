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
                    @if (session()->has('active'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>{{ session()->get('active') }}</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
                   @endif

					<!-- Login Tab Content -->
					<div class="account-content">
						<div class="account-box">
							<div class="login-right">
								<div class="login-header">
									<h3><span>MentorQuest</span> <span style="color: grey;"> || </span>Mentor Login</h3>
									<p class="text-muted">Access to our dashboard</p>
									<a href="{{route('mentee.login')}}" style="float: right">Login as Mentee</a>
								</div>
								<form method="POST" action="{{ route('login') }}">
                                    @csrf
									<div class="form-group">
										<label  class="form-control-label">Email Address</label>
										<input type="email" name="email" class="form-control" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
									<div class="form-group">
										<label  class="form-control-label">Password </label>
										<div class="pass-group">
											<input type="password" name="password" class="form-control pass-input" required>
											<span class="fas fa-eye toggle-password"></span>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
										</div>
									</div>
									<div class="text-end">
										<a class="forgot-link" href="{{ route('password.request') }}">Forgot Password ?</a>
									</div>
									<button class="btn btn-primary login-btn" type="submit">Login</button>
									<div  class="text-center dont-have">Don’t have an account? <a href="{{route('register')}}">Register</a></div>
								</form>
							</div>
						</div>
					</div>
					<!-- /Login Tab Content -->

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
