<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<title>MentorQuest - Meetings</title>
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
						<a href="{{route('home')}}" class="navbar-brand logo">
							<img src="{{asset('assets/img/logo final mohamed pnggggggg-01.png')}}" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="{{route('home')}}" class="menu-logo">
								<img src="{{asset('assets/img/logo final mohamed pnggggggg-01.png')}}" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="has-submenu">
								<a href="{{route('home')}}">Home <i class="fas fa-chevron-down"></i></a>
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
							<li class="has-submenu">
								<a href="">Mentor <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="dashboard.html">Mentor Dashboard</a></li>
									<li><a href="bookings.html">Bookings</a></li>
									<li><a href="schedule-timings.html">Schedule Timing</a></li>
									<li><a href="mentee-list.html">Mentee List</a></li>
									<li><a href="profile-mentee.html">Mentee Profile</a></li>
									<li class="has-submenu">
										<a href="blog.html">Blog</a>
										<ul class="submenu">
											<li><a href="blog.html">Blog</a></li>
											<li><a href="blog-details.html">Blog View</a></li>
											<li><a href="add-blog.html">Add Blog</a></li>
											<li><a href="edit-blog.html">Edit Blog</a></li>
										</ul>
									</li>
									<li><a href="chat.html">Chat</a></li>
									<li><a href="invoices.html">Invoices</a></li>
									<li><a href="profile-settings.html">Profile Settings</a></li>
									<li><a href="reviews.html">Reviews</a></li>
									<li><a href="mentor-register.html">Mentor Register</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href="">Mentee <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="has-submenu">
										<a href="#">Mentors</a>
										<ul class="submenu">
											<li><a href="map-grid.html">Map Grid</a></li>
											<li><a href="map-list.html">Map List</a></li>
										</ul>
									</li>
									<li><a href="search.html">Search Mentor</a></li>
									<li><a href="profile.html">Mentor Profile</a></li>
									<li><a href="bookings-mentee.html">Bookings</a></li>
									<li><a href="checkout.html">Checkout</a></li>
									<li><a href="booking-success.html">Booking Success</a></li>
									<li><a href="dashboard-mentee.html">Mentee Dashboard</a></li>
									<li><a href="favourites.html">Favourites</a></li>
									<li><a href="chat-mentee.html">Chat</a></li>
									<li><a href="profile-settings-mentee.html">Profile Settings</a></li>
									<li><a href="change-password.html">Change Password</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href="">Pages <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="voice-call.html">Voice Call</a></li>
									<li><a href="video-call.html">Video Call</a></li>
									<li><a href="search.html">Search Mentors</a></li>
									<li><a href="components.html">Components</a></li>
									<li class="has-submenu">
										<a href="invoices.html">Invoices</a>
										<ul class="submenu">
											<li><a href="invoices.html">Invoices</a></li>
											<li><a href="invoice-view.html">Invoice View</a></li>
										</ul>
									</li>
									<li><a href="blank-page.html">Starter Page</a></li>
									<li><a href="login.html">Login</a></li>
									<li><a href="register.html">Register</a></li>
									<li><a href="forgot-password.html">Forgot Password</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href="">Blog <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="blog-list.html">Blog List</a></li>
									<li><a href="blog-grid.html">Blog Grid</a></li>
									<li><a href="blog-details.html">Blog Details</a></li>
								</ul>
							</li>
							<li>
								<a href="admin/index.html" target="_blank">Admin</a>
							</li>
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
									<img class="rounded-circle" src="{{ url('public/Image/'.$about->photo) }}" width="31" alt="Darren Elder">
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<div class="user-header">
									<div class="avatar avatar-sm">
										<img src="{{ url('public/Image/'.$about->photo) }}" alt="User Image" class="avatar-img rounded-circle">
									</div>
									<div class="user-text">
										<h6>{{ Auth::user()->fname }}</h6>
										<p class="text-muted mb-0">Mentor</p>
									</div>
								</div>
								<a class="dropdown-item" href="{{route('home')}}">Dashboard</a>
								<a class="dropdown-item" href="{{route('mentor.profile')}}">Profile</a>
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

			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Bookings</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Bookings</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

							<!-- Sidebar -->
							<div class="profile-sidebar">
								<div class="user-widget">
									<div class="pro-avatar">A</div>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
									</div>
									<div class="user-info-cont">
										<h4 class="usr-name">{{ Auth::user()->fname }}</h4>
										{{-- <p class="mentor-type">English Literature (M.A)</p> --}}
									</div>
								</div>
                                @if (auth::user()->status == 0)

								<div class="progress-bar-custom">
									<a href="{{route('mentor.payment.setup')}}"><h6>Complete your profiles ></h6></a>
                                    <span>To appear for mentees </span>
									<div class="pro-progress">
										<div class="tooltip-toggle" tabindex="0"></div>
										<div class="tooltip">80%</div>
									</div>
								</div>
                                @endif
								<div class="custom-sidebar-nav">
									<ul>
										<li><a href="{{route('home')}}" class="active"><i class="fas fa-home"></i>Dashboard <span><i class="fas fa-chevron-right"></i></span></a></li>
										<li><a href="{{route('bookings.index')}}"><i class="fas fa-clock"></i>Bookings <span><i class="fas fa-chevron-right"></i></span></a></li>
										<li><a href="{{route('schedule-timings.index')}}"><i class="fas fa-hourglass-start"></i>Schedule Timings <span><i class="fas fa-chevron-right"></i></span></a></li>
										<li><a href="{{route('mentor.appointments')}}"><i class="fas fa-calendar-check"></i>Appointments <span><i class="fas fa-chevron-right"></i></span></a></li>
                                        <li><a href="{{route('mentor.meetings')}}"><i class="fas fa-video"></i>Meetings <span><i class="fas fa-chevron-right"></i></span></a></li>
										<li><a href="{{route('mentor.chat.show')}}"><i class="fas fa-comments"></i>Messages <span><i class="fas fa-chevron-right"></i></span></a></li>
										<li><a href="{{route('mentor.reviews')}}"><i class="fas fa-eye"></i>Reviews <span><i class="fas fa-chevron-right"></i></span></a></li>
										<li><a href="{{route('profile-settings.edit')}}"><i class="fas fa-user-cog"></i>Profile <span><i class="fas fa-chevron-right"></i></span></a></li>
										<li>
                                            <form  action="{{ route('logout') }}" method="POST">
                                            @csrf
                                             <button style="background: none; color: inherit; border: none; padding: 0; font: inherit; cursor: pointer; outline: inherit;"  href="login.html"><i class="fas fa-sign-out-alt"></i> Logout</button>
                                             <span style="float: right"><i class="fas fa-chevron-right"></i></span>
                                             </form>
                                        </li>
									</ul>
								</div>
							</div>
							<!-- /Sidebar -->

						</div>

						<div class="col-md-7 col-lg-8 col-xl-9">
							<h3 class="pb-3">Meetings Summary</h3>
                            <a href="#" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details">
                                <i class="fas fa-plus"></i></i> Create Meeting
                            </a>

                            {{-- <div class="appointment-action">

                            </div> --}}
							<!-- Mentee List Tab -->
							<div class="tab-pane show active" id="mentee-list">
								<div class="card card-table">
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-hover table-center mb-0">
												<thead>
													<tr>
														<th>Mentee</th>
														<th>Meeting Date</th>
														<th class="text-center">Start Url</th>
														<th class="text-center">Join Url</th>
														<th class="text-center">Actions</th>
													</tr>
												</thead>
												<tbody>
													@foreach ($meetings as $meeting )
                                                    <tr>
														<td>
															<h2 class="table-avatar">
																<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{asset('assets/img/user/user2.jpg')}}" alt="User Image"></a>
																<a href="profile.html">{{$meeting['mentee']['name']}}<span>{{$meeting['mentee']['email']}}</span></a>
															</h2>
														</td>
														<td class="text-center" ><span>{{$meeting['start_at']}}</span></td>
														<td class="text-center"><span class="pending"><a href="{{$meeting['start_url']}}">Start Url</a></span></td>
														<td class="text-center"><span class="pending"><a href="{{$meeting['join_url']}}">Join Url</a></span></td>
														<td class="text-center"><a href="profile-mentee.html" class="btn btn-sm bg-danger"><i class="fas fa-trash" style="color: #ffffff;"></i></a></td>
													</tr>
                                                    @endforeach

												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>


                                <!-- Appointment List -->
								{{-- <div class="appointment-list">

									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>

									</div>
								</div> --}}
								<!-- /Appointment List -->





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


        <!-- Appointment Details Modal -->

        <div class="modal fade custom-modal" id="appt_details">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Create Meeting</h5>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>



					 <div class="modal-body">
						<form method="post" action="{{route('mentor.meetings.store')}}" autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="mentee_id">Mentee : <span
                                            class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="mentee_id">
                                        @foreach ($mentees as $mentee )
                                        <option value="{{$mentee['mentee_id']}}">{{$mentee['mentee']['name']}}</option>

                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Meeting Password: <span class="text-danger">*</span></label>
                                    <input class="form-control" name="password" type="password">
                                </div>
                            </div>


                        </div><br>

                        <div class="row">




                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Meeting Time: <span class="text-danger">*</span></label>
                                    <input class="form-control" type="datetime-local" name="start_time">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Meeting Duration: <span class="text-danger">*</span></label>
                                    <input  class="form-control"  name="duration" type="text">
                                </div>
                            </div>

                        </div>
                        <button class="btn btn-primary btn-sm nextBtn btn-lg pull-right"
                            type="submit">Create</button>
                    </form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Appointment Details Modal -->




		<!-- jQuery -->
		<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

		<!-- Bootstrap Core JS -->
		<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

		<!-- Sticky Sidebar JS -->
        <script src="{{asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
        <script src="{{asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>

		<!-- Custom JS -->
		<script src="{{asset('assets/js/script.js')}}"></script>

	</body>
</html>
