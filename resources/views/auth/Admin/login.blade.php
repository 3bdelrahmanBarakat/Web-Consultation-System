<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>MentotQuest - Login</title>

		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets2/img/favicon.png')}}">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets2/css/bootstrap.min.css')}}">

		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('assets2/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets2/plugins/fontawesome/css/all.min.css')}}">

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('assets2/css/style.css')}}">
    </head>
    <body>

		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="{{asset('assets/img/logo final mohamed white.png')}}" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1><span style="color: #091c7b"> MentorQuest</span> <span style="color: gray;"> || </span>Login</h1>
								<p class="account-subtitle">Access to our dashboard</p>

								<!-- Form -->
								<form action="{{route('admin.login.submit')}}" method="POST">
                                    @csrf
									<div class="form-group">
										<input class="form-control" name="email" type="text" placeholder="Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
									<div class="form-group">
										<input class="form-control" name="password" type="password" placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
									<div class="form-group">
										<button class="btn btn-primary btn-block w-100" type="submit">Login</button>
									</div>
								</form>
								<!-- /Form -->


							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
		<script src="{{asset('assets2/js/jquery-3.6.0.min.js')}}"></script>

		<!-- Bootstrap Core JS -->
		<script src="{{asset('assets2/js/bootstrap.bundle.min.js')}}"></script>

		<!-- Feather Icon JS -->
		<script src="{{asset('assets2/js/feather.min.js')}}"></script>

		<!-- Custom JS -->
		<script src="{{asset('assets2/js/script.js')}}"></script>

    </body>
</html>
