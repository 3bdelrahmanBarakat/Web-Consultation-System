<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>MentorQuest - Mentor List</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
					<form >
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
													<img class="avatar-img rounded-circle" alt="User Image" src="{{asset('assets2/img/user/user.jpg')}}">
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
									<h6>{{ Auth::guard('admin')->user()->name }}</h6>
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
							<li>
								<a href="{{route('admin.mentor-list')}}"><span>Mentor</span></a>
							</li>
                            <li class="active">
								<a href="{{route('admin.mentoring-applicants')}}"><span>Mentoring Applicants</span></a>
							</li>
							<li>
								<a href="{{route('admin.mentee-list')}}"><span>Mentee</span></a>
							</li>
							<li>
								<a href="{{route('admin.bookings')}}"><span>Booking List</span></a>
							</li>
                            @if (auth()->guard('admin')->check() && auth()->guard('admin')->user()->email === 'm@m.com')
                                <li>
                                    <a href="{{route('admin.admin-list')}}"><span>Add Admin</span></a>
                                </li>
                            @endif
                            <li>
								<a href="{{route('admin.reports')}}"><span>Reports</span></a>
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
							<div class="col-sm-12">
								<h3 class="page-title">List of Mentor</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
									<li class="breadcrumb-item active">Mentor</li>
								</ul>
							</div>

						</div>
					</div>
					<!-- /Page Header -->
                    @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('message') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                             @endif
                    @if (session()->has('notfinished'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('notfinished') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                             @endif
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<div class="col-sm-12 col-md-6">
													<form>
														<input type="text" class="form-control" placeholder="Search here">
														<button class="btn" type="submit"><i class="fa fa-search"></i></button>
													</form>
												</div>
												<tr>
													<th>Mentor Name</th>
													<th>Email</th>
													{{-- <th>Field</th> --}}
													<th>Member Since</th>
													<th class="text-center">Account Status</th>

												</tr>
											</thead>
											<tbody>
                                                @foreach ($mentors as $mentor )

                                                <tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{route('admin.mentor.view_profile',$mentor['id'])}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{asset('assets2/img/profiles/avatar-08.jpg')}}" alt="User Image"></a>
															<a href="{{route('admin.mentor.view_profile',$mentor['id'])}}">{{$mentor['fname']}} {{$mentor['lname']}}</a>
														</h2>
													</td>
													<td>{{$mentor['email']}}</td>
													{{-- <td>Maths</td> --}}

													<td>{{$mentor['created_at']}}</td>


													<td>
                                                        <div class="justify-content-center d-flex">
                                                            <button class="btn btn-success" data-bs-toggle="modal" href="#acceptModal{{$mentor['id']}}">Accept</button>
                                                            <span style="margin: 5px;"></span> <!-- This creates a horizontal space of 10 pixels -->
                                                            <button class="btn btn-danger" data-bs-toggle="modal" href="#rejectModal{{$mentor['id']}}">Reject</button>
                                                          </div>

                                                    </td>
												</tr>

                                                @endforeach




											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

        @foreach ($mentors as $mentor )
            <!-- Accept Mentor Modal -->
		<div class="modal fade custom-modal" id="acceptModal{{$mentor['id']}}">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Accept mentor</h5>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">

							<div class="hours-info">
								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<h5>Are you sure of accept {{$mentor['fname']}}?</h5>
										</div>
									</div>
								</div>
							</div>


							<div class="submit-section text-center">
                                <form action="{{route('admin.applicant.accept', $mentor['id'])}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success submit-btn">Yes</button>
                                </form>
							</div>

					</div>
				</div>
			</div>
		</div>
		<!-- /Accept Mentor Modal -->
        @endforeach

       @foreach ($mentors as $mentor )
         <!-- Reject Mentor Modal -->
		<div class="modal fade custom-modal" id="rejectModal{{$mentor['id']}}">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Reject mentor</h5>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">

							<div class="hours-info">
								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<h5>Are you sure of rejecting {{$mentor['fname']}}?</h5>
										</div>
									</div>
								</div>
							</div>


							<div class="submit-section text-center">
                                <form action="{{route('admin.applicant.delete', $mentor['id'])}}" method="POST">
                                    @csrf
								<button type="submit" class="btn btn-danger submit-btn">Yes</button>
                                </form>
							</div>

					</div>
				</div>
			</div>
		</div>
		<!-- /Reject Mentor Modal -->
       @endforeach






        <script>
            var checkboxes = document.querySelectorAll('input.check');

            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    var mentorId = this.id.split('_')[1];
                    var isChecked = this.checked;

                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', '/admin/mentor/' + mentorId + '/status', true);
                    xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === XMLHttpRequest.DONE) {
                            if (xhr.status === 200) {
                                var response = JSON.parse(xhr.responseText);
                                if (response.success) {
                                    console.log('Status updated for mentor ' + mentorId + '!');
                                } else {
                                    console.log('Status update failed for mentor ' + mentorId + '.');
                                }
                            } else {
                                console.log('AJAX request failed for mentor ' + mentorId + '.');
                            }
                        }
                    };
                    xhr.send();
                });
            });
        </script>
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
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>
