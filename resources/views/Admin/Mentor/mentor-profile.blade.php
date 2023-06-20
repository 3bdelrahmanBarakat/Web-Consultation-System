<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>MentorQuest - Profile</title>

		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets2/img/favicon.png')}}">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets2/css/bootstrap.min.css')}}">

		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('assets2/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets2/plugins/fontawesome/css/all.min.css')}}">

		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{asset('assets2/css/feathericon.min.css')}}">

		<!-- Datatables CSS -->
		<link rel="stylesheet" href="{{asset('assets2/plugins/datatables/datatables.min.css')}}">

		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('assets2/css/style.css')}}">
    </head>
    <body>

		<!-- Main Wrapper -->
        <div class="main-wrapper">

			<!-- Header -->
            <div class="header">

				<!-- Logo -->
                <div class="header-left">
                    <a href="{{route('admin.dashboard')}}" class="logo">
						<img style="width: 150px;height:70px  " src="{{asset('assets2/img/logo final mohamed pnggggggg-01.png')}}" alt="Logo">
					</a>
					<a href="index.html" class="logo logo-small">
						<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
					</a>
                </div>
				<!-- /Logo -->

				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>

				<div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="Search here">
						<button class="btn" type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>

				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->

				<!-- Header Right Menu -->
				<ul class="nav user-menu">

					<!-- Notifications -->
					<li class="nav-item dropdown noti-dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
							<i class="fe fe-bell"></i> <span class="badge badge-pill">3</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="#">
											<div class="media d-flex">
												<span class="avatar avatar-sm flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="asset('assets/img/user/user.jpg')}}">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><span class="noti-title">Jonathan Doe</span> Schedule <span class="noti-title">his appointment</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media d-flex">
												<span class="avatar avatar-sm flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="{{asset('assets2/img/user/user1.jpg')}}">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><span class="noti-title">Julie Pennington</span> has booked her appointment to <span class="noti-title">Ruby Perrin</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media d-flex">
												<span class="avatar avatar-sm flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="{{asset('assets2/img/user/user2.jpg')}}">
												</span>
												<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">Tyrone Roberts</span> sent a amount of $210 for his <span class="noti-title">appointment</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media d-flex">
												<span class="avatar avatar-sm flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="{{asset('assets2/img/user/user4.jpg')}}">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><span class="noti-title">Patricia Manzi</span> send a message <span class="noti-title"> to his Mentee</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="#">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->

					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="{{asset('assets2/img/profiles/avatar-12.jpg')}}" width="31" alt="Ryan Taylor"></span>
						</a>
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="{{asset('assets2/img/profiles/avatar-12.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6>{{ Auth::user()->name }}</h6>
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							<a class="dropdown-item" href="profile.html">My Profile</a>
							<a class="dropdown-item" href="settings.html">Settings</a>
							<form  action="{{ route('admin.logout') }}" method="POST">
                                @csrf
                                 <button class="dropdown-item"> Logout</button>
                                 </form>
						</div>
					</li>
					<!-- /User Menu -->

				</ul>
				<!-- /Header Right Menu -->

            </div>
			<!-- /Header -->

			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>

							<li>
								<a href="{{route('admin.dashboard')}}"><span>Dashboard</span></a>
							</li>
							<li class="active">
								<a href="{{route('admin.mentor-list')}}"><span>Mentor</span></a>
							</li>
                            <li>
								<a href="{{route('admin.mentoring-applicants')}}"><span>Mentoring Applicants</span></a>
							</li>
							<li>
								<a href="{{route('admin.mentee-list')}}"><span>Mentee</span></a>
							</li>
							<li>
								<a href="{{route('admin.bookings')}}"><span>Booking List</span></a>
							</li>
							<li>
								<a href="categories.html"><span>Categories</span></a>
							</li>
							<li>
								<a href="transactions-list.html"><span>Transactions</span></a>
							</li>
							<!-- <li>
								<a href="settings.html"><span>Settings</span></a>
							</li> -->
							<!-- <li class="submenu">
								<a href="#"><span> Reports</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="invoices.html">Invoices List</a></li>
									<li><a href="invoice-grid.html">Invoices Grid</a></li>
									<li><a href="add-invoice.html">Add Invoices</a></li>
									<li><a href="edit-invoice.html">Edit Invoices</a></li>
									<li><a href="view-invoice.html">Invoice Details</a></li>
									<li><a href="invoices-settings.html">invoice settings</a></li>
								</ul>
							</li> -->


							<li>
								<a href="profile.html"><span>My Profile</span></a>
							</li>

						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
            
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Mentor Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item active">Mentor Profile</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-md-12">
							<div class="profile-header">
								<div class="row align-items-center">
									<div class="col-auto profile-image">
										<a href="#">

                                            <img src="{{asset('assets2/img/profiles/avatar-12.jpg')}}" alt="User Image" class="avatar-img">
										</a>
									</div>
									<div class="col ms-md-n2 profile-user-info">
										<h4 class="user-name mb-0">{{$mentor['fname']}} {{$mentor['lname']}}</h4>
										<h6 class="text-muted">{{$mentor['email']}}</h6>
										<div class="pb-3"><i class="fa fa-map-marker"></i> {{$mentor['about']['city']}}, {{$mentor['about']['country']}}</div>
										<div class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
									</div>
									<div class="col-auto profile-btn">
									</div>
								</div>
							</div>
							<div class="profile-menu">
								<ul class="nav nav-tabs nav-tabs-solid">
									<li class="nav-item">
										<a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#experience_tab">Experience</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#plans_tab">Plans</a>
									</li>
									{{-- <li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#password_tab">Password</a>
									</li> --}}
								</ul>
							</div>
							<div class="tab-content profile-tab-cont">

								<!-- Personal Details Tab -->
								<div class="tab-pane fade show active" id="per_details_tab">

									<!-- Personal Details -->
									<div class="row">
										<div class="col-lg-12">
											<div class="card">
												<div class="card-body">
													<h5 class="card-title d-flex justify-content-between">
														<span>Personal Details</span>
													</h5>
													<div class="row">
														<p class="col-sm-2 text-muted mb-0 mb-sm-3">Name</p>
														<p class="col-sm-10">{{$mentor['fname']}} {{$mentor['lname']}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted mb-0 mb-sm-3">Date of Birth</p>
														<p class="col-sm-10">{{$mentor['about']['date_of_birth']}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted mb-0 mb-sm-3">Email ID</p>
														<p class="col-sm-10">{{$mentor['email']}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted mb-0 mb-sm-3">Mobile</p>
														<p class="col-sm-10">{{$mentor['phone']}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted mb-0">Address</p>
														<p class="col-sm-10 mb-0">{{$mentor['about']['address']}},<br>
														{{$mentor['about']['city']}} - {{$mentor['about']['zip_code']}},<br>
														{{$mentor['about']['country']}}.</p>
													</div>
												</div>
											</div>


										</div>


									</div>
									<!-- /Personal Details -->

								</div>
								<!-- /Personal Details Tab -->

								<!-- Experience Tab -->
								<div class="tab-pane fade" id="experience_tab">

									<!-- Experience Details -->
									<div class="row">
										<div class="col-lg-12">
											<div class="card">
												<div class="card-body">
													<h5 class="card-title d-flex justify-content-between">
														<span>Experience Details</span>
													</h5>
													<div class="row">
														<p class="col-sm-2 text-muted mb-0 mb-sm-3">Company name</p>
														<p class="col-sm-10">{{$mentor['experience']['company_name']}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted mb-0 mb-sm-3">Start date</p>
														<p class="col-sm-10">{{$mentor['experience']['start_date']}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted mb-0 mb-sm-3">End date</p>
														<p class="col-sm-10">{{$mentor['experience']['end_date']}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted mb-0 mb-sm-3">Description</p>
														<p class="col-sm-10">{{$mentor['experience']['description']}}</p>
													</div>

												</div>
											</div>


										</div>


									</div>
									<!-- /Experience Details -->

								</div>
								<!-- /Experience Tab -->

								<!-- Plans Tab -->
                                <div class="tab-pane fade" id="plans_tab">
                                    <!-- Plans Details -->
                                    <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Standard Plan</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Price: ${{$mentor['plans'][0]['price']}}</h6>
                                            <h6 class="card-subtitle mb-2 text-muted">Number of sessions: ${{$mentor['plans'][0]['number_of_sessions']}}</h6>
                                            <h6 class="card-subtitle mb-2 text-muted">Response time: Within {{$mentor['plans'][0]['response_time']}} days</h6>
                                            @if ($mentor['plans'][0]['is_chat_allowed'] == null )
                                            <h6 class="card-subtitle mb-2 text-muted">Is chat allowed: No</h6>
                                            @else
                                            <h6 class="card-subtitle mb-2 text-muted">Is chat allowed: Yes</h6>
                                            @endif
                                            <p class="card-text">Description: {{$mentor['plans'][0]['description']}}.</p>
                                            <!-- Add any additional details or features -->
                                        </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Pro Plan</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Price: ${{$mentor['plans'][1]['price']}}</h6>
                                            <h6 class="card-subtitle mb-2 text-muted">Number of sessions: ${{$mentor['plans'][1]['number_of_sessions']}}</h6>
                                            <h6 class="card-subtitle mb-2 text-muted">Response time: Within {{$mentor['plans'][1]['response_time']}} days</h6>
                                            @if ($mentor['plans'][1]['is_chat_allowed'] == null )
                                            <h6 class="card-subtitle mb-2 text-muted">Is chat allowed: No</h6>
                                            @else
                                            <h6 class="card-subtitle mb-2 text-muted">Is chat allowed: Yes</h6>
                                            @endif
                                            <p class="card-text">Description: {{$mentor['plans'][1]['description']}}.</p>
                                            <!-- Add any additional details or features -->
                                        </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Per Session Plan</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Price: ${{$mentor['plans'][2]['price']}}</h6>
                                            @if ($mentor['plans'][2]['is_chat_allowed'] == null )
                                            <h6 class="card-subtitle mb-2 text-muted">Is chat allowed: No</h6>
                                            @else
                                            <h6 class="card-subtitle mb-2 text-muted">Is chat allowed: Yes</h6>
                                            @endif
                                            <p class="card-text">Description: {{$mentor['plans'][2]['description']}}.</p>
                                            <!-- Add any additional details or features -->
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- /Plans Details -->
                                </div>
                                <!-- /Plans Tab -->

								<!-- Change Password Tab -->
								<div id="password_tab" class="tab-pane fade">

									<div class="card">
										<div class="card-body">
											<h5 class="card-title">Change Password</h5>
											<div class="row">
												<div class="col-md-10 col-lg-6">
													<form>
														<div class="form-group">
															<label>Old Password</label>
															<input type="password" class="form-control">
														</div>
														<div class="form-group">
															<label>New Password</label>
															<input type="password" class="form-control">
														</div>
														<div class="form-group">
															<label>Confirm Password</label>
															<input type="password" class="form-control">
														</div>
														<button class="btn btn-primary" type="submit">Save Changes</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Change Password Tab -->

							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<!-- Edit Details Modal -->
		<div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document" >
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Personal Details</h5>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="row form-row">
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>First Name</label>
										<input type="text" class="form-control" value="Allen">
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>Last Name</label>
										<input type="text"  class="form-control" value="Davis">
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label>Date of Birth</label>
										<div class="cal-icon">
											<input type="text" class="form-control" value="24-07-1983">
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>Email ID</label>
										<input type="email" class="form-control" value="allendavis@example.com">
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>Mobile</label>
										<input type="text" value="+1 202-555-0125" class="form-control">
									</div>
								</div>
								<div class="col-12">
									<h5 class="form-title"><span>Address</span></h5>
								</div>
								<div class="col-12">
									<div class="form-group">
									<label>Address</label>
										<input type="text" class="form-control" value="4663 Agriculture Lane">
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>City</label>
										<input type="text" class="form-control" value="Miami">
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>State</label>
										<input type="text" class="form-control" value="Florida">
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>Zip Code</label>
										<input type="text" class="form-control" value="22434">
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>Country</label>
										<input type="text" class="form-control" value="United States">
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary btn-block w-100">Save Changes</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Details Modal -->

		<!-- jQuery -->
        <script src="{{asset('assets2/js/jquery-3.6.0.min.js')}}"></script>

		<!-- Bootstrap Core JS -->
		<script src="{{asset('assets2/js/bootstrap.bundle.min.js')}}"></script>

		<!-- Feather Icon JS -->
		<script src="{{asset('assets2/js/feather.min.js')}}"></script>

		<!-- Slimscroll JS -->
        <script src="{{asset('assets2/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

		<!-- Datatables JS -->
		<script src="{{asset('assets2/plugins/datatables/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('assets2/plugins/datatables/datatables.min.js')}}"></script>

		<!-- Custom JS -->
		<script src="{{asset('assets2/js/script.js')}}"></script>

    </body>
</html>
