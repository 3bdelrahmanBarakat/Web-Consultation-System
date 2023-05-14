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

        <!-- Link to Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;300;400;500&display=swap" rel="stylesheet">

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

        <style>
            body{
                font-family: 'Roboto Slab', serif;
            }
            .card {
              border-radius: 2rem;
              /* border: none; */

              box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
              border-left: 8px solid #007bff;
              transition: all 0.3s ease-out;
            }
            .card:hover {
              box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3);
              border-left: 12px solid #007bff;
              transform: translateY(-5px);
            }
            .card-title {
              font-size: 1.5rem;
              font-weight: bold;
            }
            .form-control {
              border-radius: 0.5rem;
              border: none;
              box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            }
            .form-label {
              font-weight: bold;
            }
            .btn-primary {
              background-color: #007bff;
              border: none;
              border-radius: 2rem;
              font-size: 1.5rem;
              font-weight: bold;
              padding: .3rem 2rem;
              transition: all 0.3s ease-out;
            }
            .btn-primary:hover {
              background-color: #0062cc;
              transform: translateY(-3px);
              box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            }
          </style>

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
						<a href="{{route('mentee.dashboard')}}" class="navbar-brand logo">
							<img src="{{asset('assets/img/logo final mohamed pnggggggg-01.png')}}" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="{{route('mentee.dashboard')}}" class="menu-logo">
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
				<div class="content" >

                    <div class="container py-5">
                        <h1 class="text-center mb-5">Select Your Plan</h1>

                                 @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                        <div class="row">
                            <div class="col-sm-4">
                              <form action="{{route('mentee.booking.timings')}}" method="GET">
                                  @csrf
                            <div class="card shadow-sm mb-4">
                              <div class="card-body">
                                <h2 class="card-title mb-4">Standard Plan</h2>
                                <div class="mb-3">
                                  <label for="standard-price" class="form-label">Price:</label>
                                  <div class="input-group">

                                    <h3>$ {{$plans[0]->price}}</h3>
                                    <input type="hidden" name="mentor_id" value="{{$plans[0]->mentor_id}}">
                                    <input type="hidden" name="plan_id" value="{{$plans[0]->id}}">
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <label for="standard-sessions" class="form-label">Number of Sessions:</label>
                                  <h3>{{$plans[0]->number_of_sessions}} Sessions</h3>
                                </div>
                                <div class="mb-3">
                                    <label for="per-session-chat" class="form-label">Answer via Chat:</label>
                                    <div class="form-check form-check-inline">
                                        @if ($plans[0]->is_chat_allowed == 1)
                                        <h4>Yes</h4>
                                        @else
                                        <label for="per-session-chat-yes" class="form-check-label">No</label>
                                        @endif
                                    </div>

                                  </div>
                                  <div class="mb-3">
                                      <label for="standard-response-time" class="form-label">Response Time (Days):</label>
                                      <h3>{{$plans[0]->response_time}} Days</h3>
                                    </div>
                                    <div class="mb-3">
                                        <label for="standard-description" class="form-label">Plan Description:</label>
                                        <h6>{{$plans[0]->description}}</h6>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary">Select</button>
                                      </div>
                                </div>
                            </div>
                        </div>

                    </form>
                    <div class="col-sm-4">
                              <form action="{{route('mentee.booking.timings')}}" method="GET">
                                @csrf
                            <div class="card shadow-sm mb-4">
                              <div class="card-body">
                                <h2 class="card-title mb-4">Pro Plan</h2>
                                <div class="mb-3">
                                  <label for="pro-price" class="form-label">Price:</label>
                                  <div class="input-group">

                                    <h3>$ {{$plans[1]->price}}</h3>
                                    <input type="hidden" name="mentor_id" value="{{$plans[1]->mentor_id}}">
                                    <input type="hidden" name="plan_id" value="{{$plans[1]->id}}">
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <label for="pro-sessions" class="form-label">Number of Sessions:</label>
                                  <h3>{{$plans[1]->number_of_sessions}} Sessions</h3>
                                </div>
                                <div class="mb-3">
                                    <label for="per-session-chat" class="form-label">Answer via Chat:</label>
                                    <div class="form-check form-check-inline">
                                        @if ($plans[1]->is_chat_allowed == 1)
                                        <h4>Yes</h4>
                                        @else
                                        <label for="per-session-chat-yes" class="form-check-label">No</label>
                                        @endif
                                    </div>

                                  </div>
                                <div class="mb-3">
                                  <label for="pro-response-time" class="form-label">Response Time (Days):</label>
                                  <h3>{{$plans[1]->response_time}} Days</h3>
                                </div>
                                <div class="mb-3">
                                <label for="pro-description" class="form-label">Plan Description:</label>
                                <h6>{{$plans[1]->description}}</h6>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">Select</button>
                                  </div>
                                </div>
                                </div>
                                </div>
                                </form>
                                <div class="col-sm-4">
                                      <form action="{{route('mentee.booking.timings')}}" method="GET">
                                        @csrf
                                    <div class="card shadow-sm mb-4">
                                      <div class="card-body">
                                        <h2 class="card-title mb-4">Per Session Plan</h2>
                                        <div class="mb-3">
                                          <label for="per-session-price" class="form-label">Price:</label>
                                          <div class="input-group">
                                            <h3>$ {{$plans[2]->price}}</h3>
                                            <input type="hidden" name="mentor_id" value="{{$plans[2]->mentor_id}}">
                                            <input type="hidden" name="plan_id" value="{{$plans[2]->id}}">
                                          </div>
                                        </div>
                                        <div class="mb-3">
                                          <label for="per-session-chat" class="form-label">Answer via Chat:</label>
                                          <div class="form-check form-check-inline">
                                            @if ($plans[1]->is_chat_allowed == 1)
                                            <h4>Yes</h4>
                                            @else
                                            <label for="per-session-chat-yes" class="form-check-label">No</label>
                                            @endif

                                          </div>

                                        </div>

                                        <div class="mb-3">
                                          <label for="per-session-description" class="form-label">Plan Description:</label>
                                          <h6>{{$plans[1]->description}}</h6>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary">Select</button>
                                          </div>
                                    </div>
                                    </div>
                                </div>


                                </form>
                                </div>
                            </div>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
