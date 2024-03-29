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
						<a href="index.html" class="navbar-brand logo">
							<img src="{{asset('assets/img/logo final mohamed pnggggggg-01.png')}}" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index.html" class="menu-logo">
								<img src="{{asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="has-submenu">
								<a href="index.html">Home </a>
								<!-- <ul class="submenu">
									<li><a href="index.html">Home</a></li>
									<li><a href="index-two.html">Home 2</a></li>
									<li><a href="index-three.html">Home 3</a></li>
									<li><a href="index-four.html">Home 4</a></li>
									<li><a href="index-five.html">Home 5</a></li>
									<li><a href="index-six.html">Home 6</a></li>
									<li><a href="index-seven.html">Home 7</a></li>
								</ul> -->
							</li>
							<li class="has-submenu active">
								<a href="">Mentor <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="dashboard.html">Mentor Dashboard</a></li>
									<li><a href="bookings.html">Bookings</a></li>
									<li class="active"><a href="schedule-timings.html">Schedule Timing</a></li>
									<li><a href="mentee-list.html">Mentee List</a></li>
									<li><a href="profile-mentee.html">Mentee Profile</a></li>
									<!-- <li class="has-submenu">
										<a href="blog.html">Blog</a>
										<ul class="submenu">
											<li><a href="blog.html">Blog</a></li>
											<li><a href="blog-details.html">Blog View</a></li>
											<li><a href="add-blog.html">Add Blog</a></li>
											<li><a href="edit-blog.html">Edit Blog</a></li>
										</ul>
									</li> -->
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
							<!-- <li class="has-submenu">
								<a href="">Blog <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="blog-list.html">Blog List</a></li>
									<li><a href="blog-grid.html">Blog Grid</a></li>
									<li><a href="blog-details.html">Blog Details</a></li>
								</ul>
							</li> -->
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
									<li class="breadcrumb-item active" aria-current="page">Schedule Timings</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Schedule Timings</h2>
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

                            @if (session()->has('Add'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('Add') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                             @endif

                            @if (session()->has('Delete'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('Delete') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                             @endif

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
								<div class="col-sm-12">
									<div class="card">
										<div class="card-body">
											<h4 class="card-title">Schedule Timings</h4>
											<div class="profile-box">
												<div class="row">

													{{-- <div class="col-lg-4">
														<div class="form-group">
															<label>Timing Slot Duration</label>
															<select class="select form-control">
																<option>Select</option>
																<option>15 mins</option>
																<option selected="selected">30 mins</option>
																<option>45 mins</option>
																<option>1 Hour</option>
															</select>
														</div>
													</div> --}}

                                                    <h4 class="card-title d-flex justify-content-between">
                                                        <span>Time Slots</span>
                                                        <a class="edit-link" data-bs-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
                                                    </h4>

												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="card schedule-widget mb-0">

															<!-- Schedule Header -->
															<div class="schedule-header">

																<!-- Schedule Nav -->
																<div class="schedule-nav">
																	<ul class="nav nav-tabs nav-justified">
																		<li class="nav-item">
																			<a class="nav-link" data-bs-toggle="tab" href="#slot_sunday">Sunday</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link active" data-bs-toggle="tab" href="#slot_monday">Monday</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link" data-bs-toggle="tab" href="#slot_tuesday">Tuesday</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link" data-bs-toggle="tab" href="#slot_wednesday">Wednesday</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link" data-bs-toggle="tab" href="#slot_thursday">Thursday</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link" data-bs-toggle="tab" href="#slot_friday">Friday</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link" data-bs-toggle="tab" href="#slot_saturday">Saturday</a>
																		</li>
																	</ul>
																</div>
																<!-- /Schedule Nav -->

															</div>
															<!-- /Schedule Header -->

															<!-- Schedule Content -->
															<div class="tab-content schedule-cont">

																<!-- Sunday Slot -->
																<div id="slot_sunday" class="tab-pane fade">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span>
																		{{-- <a class="edit-link" data-bs-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a> --}}
																	</h4>
																	<div class="user-times">
                                                                       @foreach ( $timings as $timing )
                                                                        @if ($timing['day'] == "sun")
                                                                        <div class="user-slot-list">
																			{{$timing['start_time']}} - {{$timing['end_time']}}
                                                                            <form action="{{route('schedule-timings.destroy', $timing['id'])}}" method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button style="all: unset; cursor: pointer;" type="submit" class="delete_schedule"><i class="fa fa-times"></i></button>
                                                                            </form>
																			{{-- <a href="javascript:void(0)" class="delete_schedule">
																				<i class="fa fa-times"></i>
																			</a> --}}
																		</div>
                                                                        @endif
                                                                       @endforeach
                                                                    </div>
																</div>
																<!-- /Sunday Slot -->

																<!-- Monday Slot -->
																<div id="slot_monday" class="tab-pane fade show active">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span>
																		{{-- <a class="edit-link" data-bs-toggle="modal" href="#edit_time_slot"><i class="fa fa-edit me-1"></i>Edit</a> --}}
																	</h4>

																	<!-- Slot List -->
																	<div class="user-times">
                                                                        @foreach ( $timings as $timing )
                                                                         @if ($timing['day'] == "mon")
                                                                         <div class="user-slot-list">
                                                                             {{$timing['start_time']}} - {{$timing['end_time']}}
                                                                             <form action="{{route('schedule-timings.destroy', $timing['id'])}}" method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button style="all: unset; cursor: pointer;" type="submit" class="delete_schedule"><i class="fa fa-times"></i></button>
                                                                            </form>
                                                                         </div>
                                                                         @endif
                                                                        @endforeach
                                                                     </div>
																	<!-- /Slot List -->

																</div>
																<!-- /Monday Slot -->

																<!-- Tuesday Slot -->
																<div id="slot_tuesday" class="tab-pane fade">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span>
																		{{-- <a class="edit-link" data-bs-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a> --}}
																	</h4>
																	<div class="user-times">
                                                                        @foreach ( $timings as $timing )
                                                                         @if ($timing['day'] == "tue")
                                                                         <div class="user-slot-list">
                                                                             {{$timing['start_time']}} - {{$timing['end_time']}}
                                                                             <form action="{{route('schedule-timings.destroy', $timing['id'])}}" method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button style="all: unset; cursor: pointer;" type="submit" class="delete_schedule"><i class="fa fa-times"></i></button>
                                                                            </form>
                                                                         </div>
                                                                         @endif
                                                                        @endforeach
                                                                     </div>
																</div>
																<!-- /Tuesday Slot -->

																<!-- Wednesday Slot -->
																<div id="slot_wednesday" class="tab-pane fade">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span>
																		{{-- <a class="edit-link" data-bs-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a> --}}
																	</h4>
																	<div class="user-times">
                                                                        @foreach ( $timings as $timing )
                                                                         @if ($timing['day'] == "wed")
                                                                         <div class="user-slot-list">
                                                                             {{$timing['start_time']}} - {{$timing['end_time']}}
                                                                             <form action="{{route('schedule-timings.destroy', $timing['id'])}}" method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button style="all: unset; cursor: pointer;" type="submit" class="delete_schedule"><i class="fa fa-times"></i></button>
                                                                            </form>
                                                                         </div>
                                                                         @endif
                                                                        @endforeach
                                                                     </div>
																</div>
																<!-- /Wednesday Slot -->

																<!-- Thursday Slot -->
																<div id="slot_thursday" class="tab-pane fade">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span>
																		{{-- <a class="edit-link" data-bs-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a> --}}
																	</h4>
																	<div class="user-times">
                                                                        @foreach ( $timings as $timing )
                                                                         @if ($timing['day'] == "thu")
                                                                         <div class="user-slot-list">
                                                                             {{$timing['start_time']}} - {{$timing['end_time']}}
                                                                             <form action="{{route('schedule-timings.destroy', $timing['id'])}}" method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button style="all: unset; cursor: pointer;" type="submit" class="delete_schedule"><i class="fa fa-times"></i></button>
                                                                            </form>
                                                                         </div>
                                                                         @endif
                                                                        @endforeach
                                                                     </div>
																</div>
																<!-- /Thursday Slot -->

																<!-- Friday Slot -->
																<div id="slot_friday" class="tab-pane fade">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span>
																		{{-- <a class="edit-link" data-bs-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a> --}}
																	</h4>
																	<div class="user-times">
                                                                        @foreach ( $timings as $timing )
                                                                         @if ($timing['day'] == "fri")
                                                                         <div class="user-slot-list">
                                                                             {{$timing['start_time']}} - {{$timing['end_time']}}
                                                                             <form action="{{route('schedule-timings.destroy', $timing['id'])}}" method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button style="all: unset; cursor: pointer;" type="submit" class="delete_schedule"><i class="fa fa-times"></i></button>
                                                                            </form>
                                                                         </div>
                                                                         @endif
                                                                        @endforeach
                                                                     </div>
																</div>
																<!-- /Friday Slot -->

																<!-- Saturday Slot -->
																<div id="slot_saturday" class="tab-pane fade">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span>
																		{{-- <a class="edit-link" data-bs-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a> --}}
																	</h4>
																	<div class="user-times">
                                                                        @foreach ( $timings as $timing )
                                                                         @if ($timing['day'] == "sat")
                                                                         <div class="user-slot-list">
                                                                             {{$timing['start_time']}} - {{$timing['end_time']}}
                                                                             <form action="{{route('schedule-timings.destroy', $timing['id'])}}" method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button style="all: unset; cursor: pointer;" type="submit" class="delete_schedule"><i class="fa fa-times"></i></button>
                                                                            </form>
                                                                         </div>
                                                                         @endif
                                                                        @endforeach
                                                                     </div>
																</div>
																<!-- /Saturday Slot -->

															</div>
															<!-- /Schedule Content -->

														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
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
											<p> Shourok academy<br> Cairo, Egypt </p>
										</div>
										<p>
											<i class="fas fa-phone-alt"></i>
											+201066689867
										</p>
										<p class="mb-0">
											<i class="fas fa-envelope"></i>
											themigsss0@gmail.com
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
										<p class="mb-0">&copy; 2023 MentorQuest. All rights reserved.</p>
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

		<!-- Add Time Slot Modal -->
		<div class="modal fade custom-modal" id="add_time_slot">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Time Slots</h5>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="{{route('schedule-timings.store')}}" method="POST">
                            @csrf
							<div class="hours-info">
								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
                                            <div class="col-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Day</label>
                                                    <select required name="day" class="form-control form-select">
                                                        <option>Select</option>
                                                        <option value="sat">Saturday</option>
                                                        <option value="sun">Sunday</option>
                                                        <option value="mon">Monday</option>
                                                        <option value="tue">Tuesday</option>
                                                        <option value="wed">Wednesday</option>
                                                        <option value="thu">Thursday</option>
                                                        <option value="fri">Friday</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Start Time</label>

													<select required name="start_time" class="form-control form-select">
														<option>Select</option>
														<option value="12:00">12.00 am</option>
														<option value="1:00">1.00 am</option>
														<option value="2:00">2.00 am</option>
														<option value="3:00">3.00 am</option>
														<option value="4:00">4.00 am</option>
														<option value="5:00">5.00 am</option>
														<option value="6:00">6.00 am</option>
														<option value="7:00">7.00 am</option>
														<option value="8:00">8.00 am</option>
														<option value="9:00">9.00 am</option>
														<option value="10:00">10.00 am</option>
														<option value="11:00">11.00 am</option>
														<option value="12:00">12.00 pm</option>
														<option value="13:00">1.00 pm</option>
														<option value="14:00">2.00 pm</option>
														<option value="15:00">3.00 pm</option>
														<option value="16:00">4.00 pm</option>
														<option value="17:00">5.00 pm</option>
														<option value="18:00">6.00 pm</option>
														<option value="19:00">7.00 pm</option>
														<option value="20:00">8.00 pm</option>
														<option value="21:00">9.00 pm</option>
														<option value="22:00">10.00 pm</option>
														<option value="23:00">11.00 pm</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>End Time</label>
													<select name="end_time" class="form-control form-select">
														<option>Select</option>
														<option value="12:00">12.00 am</option>
														<option value="1:00">1.00 am</option>
														<option value="2:00">2.00 am</option>
														<option value="3:00">3.00 am</option>
														<option value="4:00">4.00 am</option>
														<option value="5:00">5.00 am</option>
														<option value="6:00">6.00 am</option>
														<option value="7:00">7.00 am</option>
														<option value="8:00">8.00 am</option>
														<option value="9:00">9.00 am</option>
														<option value="10:00">10.00 am</option>
														<option value="11:00">11.00 am</option>
														<option value="12:00">12.00 pm</option>
														<option value="13:00">1.00 pm</option>
														<option value="14:00">2.00 pm</option>
														<option value="15:00">3.00 pm</option>
														<option value="16:00">4.00 pm</option>
														<option value="17:00">5.00 pm</option>
														<option value="18:00">6.00 pm</option>
														<option value="19:00">7.00 pm</option>
														<option value="20:00">8.00 pm</option>
														<option value="21:00">9.00 pm</option>
														<option value="22:00">10.00 pm</option>
														<option value="23:00">11.00 pm</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="add-more mb-3">
								{{-- <a href="javascript:void(0);" class="add-hours"><i class="fa fa-plus-circle"></i> Add More</a> --}}
							</div>
							<div class="submit-section text-center">
								<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Time Slot Modal -->

		<!-- Edit Time Slot Modal -->
		<div class="modal fade custom-modal" id="edit_time_slot">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Time Slots</h5>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="hours-info">
								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Start Time</label>
													<select class="form-control form-select">
														<option>Select</option>
														<option>12.00 am</option>
														<option>1.00 am</option>
														<option>2.00 am</option>
														<option>3.00 am</option>
														<option>4.00 am</option>
														<option>5.00 am</option>
														<option>6.00 am</option>
														<option>7.00 am</option>
														<option>8.00 am</option>
														<option>9.00 am</option>
														<option>10.00 am</option>
														<option>11.00 am</option>
														<option>12.00 pm</option>
														<option>1.00 pm</option>
														<option>2.00 pm</option>
														<option>3.00 pm</option>
														<option>4.00 pm</option>
														<option>5.00 pm</option>
														<option>6.00 pm</option>
														<option>7.00 pm</option>
														<option>8.00 pm</option>
														<option>9.00 pm</option>
														<option>10.00 pm</option>
														<option>11.00 pm</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>End Time</label>
													<select class="form-control form-select">
														<option>Select</option>
														<option>12.00 am</option>
														<option>1.00 am</option>
														<option>2.00 am</option>
														<option>3.00 am</option>
														<option>4.00 am</option>
														<option>5.00 am</option>
														<option>6.00 am</option>
														<option>7.00 am</option>
														<option>8.00 am</option>
														<option>9.00 am</option>
														<option>10.00 am</option>
														<option>11.00 am</option>
														<option>12.00 pm</option>
														<option>1.00 pm</option>
														<option>2.00 pm</option>
														<option>3.00 pm</option>
														<option>4.00 pm</option>
														<option>5.00 pm</option>
														<option>6.00 pm</option>
														<option>7.00 pm</option>
														<option>8.00 pm</option>
														<option>9.00 pm</option>
														<option>10.00 pm</option>
														<option>11.00 pm</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Start Time</label>
													<select class="form-control form-select">
														<option>Select</option>
														<option>12.00 am</option>
														<option>1.00 am</option>
														<option>2.00 am</option>
														<option>3.00 am</option>
														<option>4.00 am</option>
														<option>5.00 am</option>
														<option>6.00 am</option>
														<option>7.00 am</option>
														<option>8.00 am</option>
														<option>9.00 am</option>
														<option>10.00 am</option>
														<option>11.00 am</option>
														<option>12.00 pm</option>
														<option>1.00 pm</option>
														<option>2.00 pm</option>
														<option>3.00 pm</option>
														<option>4.00 pm</option>
														<option>5.00 pm</option>
														<option>6.00 pm</option>
														<option>7.00 pm</option>
														<option>8.00 pm</option>
														<option>9.00 pm</option>
														<option>10.00 pm</option>
														<option>11.00 pm</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>End Time</label>
													<select class="form-control form-select">
														<option>Select</option>
														<option>12.00 am</option>
														<option>1.00 am</option>
														<option>2.00 am</option>
														<option>3.00 am</option>
														<option>4.00 am</option>
														<option>5.00 am</option>
														<option>6.00 am</option>
														<option>7.00 am</option>
														<option>8.00 am</option>
														<option>9.00 am</option>
														<option>10.00 am</option>
														<option>11.00 am</option>
														<option>12.00 pm</option>
														<option>1.00 pm</option>
														<option>2.00 pm</option>
														<option>3.00 pm</option>
														<option>4.00 pm</option>
														<option>5.00 pm</option>
														<option>6.00 pm</option>
														<option>7.00 pm</option>
														<option>8.00 pm</option>
														<option>9.00 pm</option>
														<option>10.00 pm</option>
														<option>11.00 pm</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-2"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>
								</div>

								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Start Time</label>
													<select class="form-control form-select">
														<option>Select</option>
														<option>12.00 am</option>
														<option>1.00 am</option>
														<option>2.00 am</option>
														<option>3.00 am</option>
														<option>4.00 am</option>
														<option>5.00 am</option>
														<option>6.00 am</option>
														<option>7.00 am</option>
														<option>8.00 am</option>
														<option>9.00 am</option>
														<option>10.00 am</option>
														<option>11.00 am</option>
														<option>12.00 pm</option>
														<option>1.00 pm</option>
														<option>2.00 pm</option>
														<option>3.00 pm</option>
														<option>4.00 pm</option>
														<option>5.00 pm</option>
														<option>6.00 pm</option>
														<option>7.00 pm</option>
														<option>8.00 pm</option>
														<option>9.00 pm</option>
														<option>10.00 pm</option>
														<option>11.00 pm</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>End Time</label>
													<select class="form-control form-select">
														<option>Select</option>
														<option>12.00 am</option>
														<option>1.00 am</option>
														<option>2.00 am</option>
														<option>3.00 am</option>
														<option>4.00 am</option>
														<option>5.00 am</option>
														<option>6.00 am</option>
														<option>7.00 am</option>
														<option>8.00 am</option>
														<option>9.00 am</option>
														<option>10.00 am</option>
														<option>11.00 am</option>
														<option>12.00 pm</option>
														<option>1.00 pm</option>
														<option>2.00 pm</option>
														<option>3.00 pm</option>
														<option>4.00 pm</option>
														<option>5.00 pm</option>
														<option>6.00 pm</option>
														<option>7.00 pm</option>
														<option>8.00 pm</option>
														<option>9.00 pm</option>
														<option>10.00 pm</option>
														<option>11.00 pm</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-2"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>
								</div>

							</div>

							<div class="add-more mb-3">
								<a href="javascript:void(0);" class="add-hours"><i class="fa fa-plus-circle"></i> Add More</a>
							</div>
							<div class="submit-section text-center">
								<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Time Slot Modal -->

		<!-- jQuery -->
		<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

		<!-- Bootstrap Core JS -->
		<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

		<!-- Sticky Sidebar JS -->
        <script src="{{asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
        <script src="{{asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>

		<!-- Select2 JS -->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Custom JS -->
		<script src="{{asset('assets/js/script.js')}}"></script>

	</body>
</html>
