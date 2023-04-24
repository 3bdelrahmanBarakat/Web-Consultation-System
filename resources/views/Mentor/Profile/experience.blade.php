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
                                    <h5>Step 2 - Experience</h5>
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
								<form action="{{route('experience.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
									<div class="row form-row">
                                        <div class="col-12">
                                            <div class="form-group">
                                            <label>Company name</label>
                                                <input name="mentor_id" type="hidden" value="{{ Auth::user()->id }}">
                                                <input type="text" name="company_name" class="form-control" value="Microsoft">
                                            </div>
                                        </div>

										<div class="col-12 col-md-6">
											<div class="form-group">
												<label>Start date</label>
												<div>

													<input name="start_date" type="date" class="form-control datetimepicker" value="24-07-1983">
												</div>
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="form-group">
												<label>End date</label>
												<div>

													<input name="end_date" type="date" class="form-control datetimepicker" value="24-07-1983">
												</div>
											</div>
										</div>

                                        <div class="col-12 col-md-6">
											<div class="form-group">
												<label>Years of experience</label>
												<select name="years_of_experience" class="form-control select">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
												</select>
											</div>
										</div>

                                        <div class="col-12">
                                            <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" cols="60" rows="5" placeholder="Write a short description about your experience"></textarea>
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
