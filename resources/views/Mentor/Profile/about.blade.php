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

					<!-- Register Content -->
					<div class="account-content">
						<div class="account-box">
							<div class="login-right">
								<div class="login-header">
									<h3><span>MentorQuest</span> <span style="color: grey;"> || </span> Profile setup</h3>
                                    <br>
                                    <h5>Step 1 - About You</h5>
								</div>

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif


								<!-- Register Form -->
								<form action="{{route('about.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
									<div class="row form-row">
										<div class="col-12 col-md-12">
											<div class="form-group">
												<div class="change-avatar">
													<div class="profile-img">
														<img src="{{asset('assets/img/user/user.jpg')}}" alt="User Image">
													</div>
													<div class="upload-img">
														<div class="change-photo-btn">
															<span><i class="fa fa-upload"></i> Upload Photo</span>
															<input type="file" name="photo" class="upload">
														</div>
														<small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="form-group">
												<label>Gender</label>
												<select name="gender" class="form-control select">
													<option>Male</option>
													<option>Female</option>
													<option>Prefer Not To Say</option>
												</select>
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="form-group">
												<label>Date of Birth</label>
												<div>
                                                    <input name="mentor_id" type="hidden" value="{{ Auth::user()->id }}">
													<input name="date_of_birth" type="date" class="form-control datetimepicker" value="24-07-1983">
												</div>
											</div>
										</div>

										<div class="col-12">
											<div class="form-group">
											<label>Address</label>
												<input type="text" name="address" class="form-control" value="806 Twin Willow Lane">
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="form-group">
												<label>Country</label>
												<input type="text" name="country" class="form-control" value="USA">
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="form-group">
												<label>City</label>
												<input type="text" name="city" class="form-control" value="Newyork">
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="form-group">
												<label>Zip Code</label>
												<input type="text" name="zip_code" class="form-control" value="13420">
											</div>
										</div>

									</div>

									<div class="submit-section">
										<button style="float: right;" type="submit" class="btn btn-primary submit-btn">Next</button>

									</div>
								</form>
								<!-- /Register Form -->

							</div>
						</div>
					</div>
					<!-- /Register Content -->


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
