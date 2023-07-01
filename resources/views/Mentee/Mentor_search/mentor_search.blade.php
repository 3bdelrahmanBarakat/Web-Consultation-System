<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<title>MentorQuest - Mentors</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">

		<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

	</head>
	<body>

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
						<a href="/" class="navbar-brand logo">
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
							<li class="has-submenu">
								<a href="index.html">Home <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="index.html">Home</a></li>
									<li><a href="index-two.html">Home 2</a></li>
									<li><a href="index-three.html">Home 3</a></li>
									<li><a href="index-four.html">Home 4</a></li>
									<li><a href="index-five.html">Home 5</a></li>
									<li><a href="index-six.html">Home 6</a></li>
									<li><a href="index-seven.html">Home 7</a></li>
								</ul>
							</li>

							<li class="has-submenu active">
								<a href="">Mentee <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="active"><a href="search.html">Search Mentor</a></li>
									<li><a href="bookings-mentee.html">Bookings</a></li>
									<li><a href="dashboard-mentee.html">Mentee Dashboard</a></li>
									<li><a href="favourites.html">Favourites</a></li>
									<li><a href="chat-mentee.html">Chat</a></li>
									<li><a href="profile-settings-mentee.html">Profile Settings</a></li>

								</ul>
							</li>



							<li class="login-link">
								<a href="login.html">Login / Signup</a>
							</li>
						</ul>
					</div>
					<ul class="nav header-navbar-rht">
                        @if (auth()->guard('mentee')->check())
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
										<h6>{{ auth()->guard('mentee')->user()->name }}</h6>
										<p class="text-muted mb-0">Mentee</p>
									</div>

								</div>
								{{-- <a class="dropdown-item" href="dashboard.html">Dashboard</a> --}}
								{{-- <a class="dropdown-item" href="profile-settings.html">Profile Settings</a> --}}

                                <form  action="{{route('mentee.favourites')}}" method="GET">
                                    @csrf
                                    <button class="dropdown-item">Favourite Mentors</button>
                                </form>
                                <form  action="{{route('mentee.profile-settings')}}" method="GET">
                                    @csrf
                                    <button class="dropdown-item">Profile Settings</button>
                                </form>
								<form  action="{{ route('mentee.logout') }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item">Logout</button>
                                </form>
							</div>
						</li>
						<!-- /User Menu -->
                        @elseif (auth()->guard('web')->check())

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}">Dashboard</a>
                            <form  action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item">Logout</button>
                            </form>
                        </li>
                        @else
                        <!-- Display login and register buttons for unauthenticated users -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link header-login" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif

					</ul>
				</nav>
				</div>
			</header>
			<!-- /Header -->

			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-8 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Search</li>
								</ol>
							</nav>
							{{-- <h2 class="breadcrumb-title">2245 matches found for : Mentors In  Florida</h2> --}}

						</div>


						<div class="col-md-4 col-12 d-md-block d-none">
							<div class="sort-by">
								<span class="sort-title">Sort by</span>
								<span class="sortby-fliter">
									<select class="select">
										<option>Select</option>
										<option class="sorting">Rating</option>
										<option class="sorting">Popular</option>
										<option class="sorting">Latest</option>
										<option class="sorting">Free</option>
									</select>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">



							<!-- Search Filter -->
							<div class="card search-filter">


								<div class="card-header">

									<h4 class="card-title mb-0">Search Filter</h4>

								</div>
								<div class="card-body">

                                    <!-- Search -->

							<form action="{{route('mentee.mentor_search')}}">
								<div class="form-group search-info">
									<input type="text" name="query" class="form-control" value="{{$query}}" placeholder="Search Mentors, Consultation Type, etc">
								</div>
								<button type="submit" hidden class="btn btn-primary search-btn"><i><img src="assets/img/search-submit.png" alt=""></i> <span>Search</span></button>
							</form>

						<!-- /Search -->
								<div class="filter-widget">
									<div class="cal-icon">
										<input type="text" class="form-control datetimepicker" placeholder="Select Date">
									</div>
								</div>
								<div class="filter-widget">
									<h4>Gender</h4>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="gender_type" checked>
											<span class="checkmark"></span> Male
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="gender_type">
											<span class="checkmark"></span> Female
										</label>
									</div>
								</div>
								<div class="filter-widget">
									<h4>Select Courses</h4>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist" checked>
											<span class="checkmark"></span> Digital Marketer

										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist" checked>
											<span class="checkmark"></span> UNIX, Calculus, Trigonometry
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> Computer Programming
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> ASP.NET,Computer Gaming
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> HTML, Css
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> VB, VB.net
										</label>
									</div>
								</div>
									<div class="btn-search">
										<button type="button" class="btn btn-block w-100">Search</button>
									</div>
								</div>
							</div>
							<!-- /Search Filter -->

						</div>

						<div class="col-md-12 col-lg-8 col-xl-9">

							<!-- Mentor Widget -->
                            @if (count($results) > 0)
                            @foreach ($results as $result )


							<div class="card">
								<div class="card-body">
									<div class="mentor-widget">
										<div class="user-info-left">
											<div class="mentor-img">
												<a href="{{route('mentee.mentor_profile', $result->mentor_id)}}">
													<img  src="{{ url('public/Image/'.$result->photo) }}" class="img-fluid" alt="User Image">
												</a>
											</div>
											<div class="user-info-cont">
												<h4 class="usr-name"><a href="{{route('mentee.mentor_profile', $result->mentor_id)}}">{{$result->fname}} {{$result->lname}}</a></h4>
												<p class="mentor-type">{{$result->company_name}}</p>
												<div class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													{{-- <span class="d-inline-block average-rating">(17)</span> --}}
												</div>
												<div class="mentor-details">
													<p class="user-location"><i class="fas fa-map-marker-alt"></i> {{$result->city}}, {{$result->country}}</p>
												</div>
											</div>
										</div>
										<div class="user-info-right">
											<div class="user-infos">
												{{-- <ul>
													<li><i class="far fa-comment"></i> 17 Feedback</li>
													<li><i class="fas fa-map-marker-alt"></i> Florida, USA</li>
													<li><i class="far fa-money-bill-alt"></i> $300 - $1000 <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i> </li>
												</ul> --}}
											</div>
											<div class="mentor-booking">
												<a class="apt-btn" href="{{route('mentee.mentor_profile', $result->mentor_id)}}">View Profile</a>
											</div>
										</div>
									</div>
								</div>
							</div>

                            @endforeach
                            @else
                            <h1>No results found</h1>
                            @endif
							<!-- /Mentor Widget -->



							<div class="load-more text-center">
								<a class="btn btn-primary btn-sm" href="javascript:void(0);">Load More</a>
							</div>
						</div>
					</div>

				</div>

			</div>
			<!-- /Page Content -->

			<!-- Footer -->
			<footer class="footer">

				<!-- Footer Top -->
				<div class="footer-top">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-3 col-md-6">

								<!-- Footer Widget -->
								<div class="footer-widget footer-about">
									<div class="footer-logo">
										<img src="{{asset('assets/img/logo final mohamed pnggggggg-01.png')}}" alt="logo">
									</div>
									<div class="footer-about-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<div class="social-icon">
											<ul>
												<li>
													<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Footer Widget -->

							</div>

							<div class="col-lg-3 col-md-6">

								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Mentee</h2>
									<ul>
										<li><a href="search.html">Search Mentors</a></li>
										<li><a href="login.html">Login</a></li>
										<li><a href="register.html">Register</a></li>
										<li><a href="booking.html">Booking</a></li>
										<li><a href="dashboard-mentee.html">Mentee Dashboard</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->

							</div>

							<div class="col-lg-3 col-md-6">

								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Mentors</h2>
									<ul>
										<li><a href="appointments.html">Appointments</a></li>
										<li><a href="chat.html">Chat</a></li>
										<li><a href="login.html">Login</a></li>
										<li><a href="register.html">Register</a></li>
										<li><a href="dashboard.html">Mentor Dashboard</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->

							</div>

							<div class="col-lg-3 col-md-6">

								<!-- Footer Widget -->
								<div class="footer-widget footer-contact">
									<h2 class="footer-title">Contact Us</h2>
									<div class="footer-contact-info">
										<div class="footer-address">
											<span><i class="fas fa-map-marker-alt"></i></span>
											<p> 3556  Beech Street, San Francisco,<br> California, CA 94108 </p>
										</div>
										<p>
											<i class="fas fa-phone-alt"></i>
											+1 315 369 5943
										</p>
										<p class="mb-0">
											<i class="fas fa-envelope"></i>
											mentoring@example.com
										</p>
									</div>
								</div>
								<!-- /Footer Widget -->

							</div>

						</div>
					</div>
				</div>
				<!-- /Footer Top -->

				<!-- Footer Bottom -->
			    <div class="footer-bottom">
					<div class="container-fluid">

						<!-- Copyright -->
						<div class="copyright">
							<div class="row">
								<div class="col-12 text-center">
									<div class="copyright-text">
										<p class="mb-0">&copy; 2020 Mentoring. All rights reserved.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- /Copyright -->

					</div>
				</div>
				<!-- /Footer Bottom -->

			</footer>
			<!-- /Footer -->

		</div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
		<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

		<!-- Bootstrap Core JS -->
		<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

		<!-- Sticky Sidebar JS -->
        <script src="{{asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
        <script src="{{asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>

		<!-- Select2 JS -->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Datetimepicker JS -->
		<script src="{{asset('assets/js/moment.min.js')}}"></script>
		<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>

		<!-- Custom JS -->
		<script src="{{asset('assets/js/script.js')}}"></script>

	</body>
</html>
