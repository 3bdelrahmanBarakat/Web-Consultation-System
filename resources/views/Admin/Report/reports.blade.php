<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>MentorQuest - Reports</title>

		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets2/img/favicon.png')}}">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets2/css/bootstrap.min.css')}}">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('assets2/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets2/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets2/plugins/fontawesome/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets2/css/feather.css')}}">
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{asset('assets2/css/feathericon.min.css')}}">

		<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{asset('assets2/plugins/select2/css/select2.min.css')}}">

		<!-- Datatables CSS -->
		<link rel="stylesheet" href="{{asset('assets2/plugins/datatables/datatables.min.css')}}">

		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="{{asset('assets2/css/bootstrap-datetimepicker.min.css')}}">

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
                            <li>
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
                            <li class="active">
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

                    @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ session()->get('error') }}</strong>
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

					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Invoices</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item active">Invoices</li>
								</ul>
							</div>

						</div>
					</div>
					<!-- /Page Header -->

					<!-- Report Filter -->
					<div class="card report-card">
						<div class="card-body pb-0">
							<div class="row">
								<div class="col-md-12">
                                    <form action="{{ route('generate.report') }}" method="POST">
                                        @csrf
									<ul class="app-listing">
										<li>
											<div class="multipleSelection">
												<div class="selectBox">
													<p class="mb-0"><i data-feather="user-plus" class="me-1 select-icon"></i> Select User</p>
													<span class="down-icon"><i data-feather="chevron-down"></i></span>
												</div>
												<div id="checkBoxes">
                                                    <p class="checkbox-title">Customer Search</p>
                                                    <div class="form-custom">
                                                        <input type="text" id="mentor-search" class="form-control bg-grey" placeholder="Enter Mentor Name">
                                                    </div>
                                                    <div class="selectBox-cont" id="mentor-list">


                                                        <h4>Search...</h4>
                                                        
                                                        <!-- Mentor list will be dynamically populated here -->

                                                    </div>
                                                    <button type="reset" class="btn w-100 btn-grey">Reset</button>
                                                </div>
											</div>
										</li>
										<li>
											<div class="multipleSelection">
												<div class="selectBox">
													<p class="mb-0"><i data-feather="calendar" class="me-1 select-icon"></i> Select Date</p>
													<span class="down-icon"><i data-feather="chevron-down"></i></span>
												</div>
												<div id="checkBoxes">

														<p class="checkbox-title">Date Filter</p>
														<div class="selectBox-cont selectBox-cont-one h-auto">
															<div class="date-picker">
																<div class="form-custom cal-icon">
																	<input name="start_date" class="form-control datetimepicker" type="text" placeholder="Form">
																</div>
															</div>
															<div class="date-picker pe-0">
																<div class="form-custom cal-icon">
																	<input name="end_date" class="form-control datetimepicker" type="text" placeholder="To">
																</div>
															</div>
                                                            <button type="reset" class="btn w-100 btn-grey">Reset</button>
														</div>

												</div>
											</div>
										</li>
										<li>
											<div class="multipleSelection">
												<div class="selectBox">
													<p class="mb-0"><i data-feather="book-open" class="me-1 select-icon"></i> Select Status</p>
													<span class="down-icon"><i data-feather="chevron-down"></i></span>
												</div>
												<div id="checkBoxes">

														<p class="checkbox-title">By Status</p>
														<div class="selectBox-cont">
															<label class="custom_check w-100">
																<input type="checkbox" name="status">
																<span class="checkmark"></span> All Bookings
															</label>

															<label class="custom_check w-100">
																<input value="accepted" type="checkbox" name="status">
																<span class="checkmark"></span> Accepted
															</label>

															<label class="custom_check w-100">
																<input name="rejected" type="checkbox" name="status">
																<span class="checkmark"></span> Rejected
															</label>
														</div>

														<button type="reset" class="btn w-100 btn-grey">Reset</button>

												</div>
											</div>
										</li>

										<li>
											<div class="report-btn">
												<button type="submit" class="btn">
													<img src="{{asset('assets2/img/icons/invoices-icon5.svg')}}" alt="" class="me-2"> Generate report
												</button>
											</div>
										</li>
									</ul>
                                </form>
								</div>
							</div>
						</div>
					</div>
					<!-- /Report Filter -->

					<div class="card invoices-tabs-card">
						<div class="card-body card-body pt-0 pb-0">
							<div class="invoices-main-tabs">
								<div class="row align-items-center">
									<div class="col-lg-8 col-md-8">
										<div class="invoices-tabs">
											<ul>
												<li><a href="invoices.html" class="active">All Invoice</a></li>

												<li><a href="invoices-cancelled.html">Cancelled</a></li>
											</ul>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-4 col-sm-6 col-12">
							<div class="card inovices-card">
								<div class="card-body">
									<div class="inovices-widget-header">
										<span class="inovices-widget-icon">
											<img src="{{asset('assets2/img/icons/invoices-icon1.svg')}}" alt="">
										</span>
										<div class="inovices-dash-count">
											<div class="inovices-amount">$8,78,797</div>
										</div>
									</div>
									<p class="inovices-all">All Invoices <span>50</span></p>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-sm-6 col-12">
							<div class="card inovices-card">
								<div class="card-body">
									<div class="inovices-widget-header">
										<span class="inovices-widget-icon">
											<img src="{{asset('assets2/img/icons/invoices-icon2.svg')}}" alt="">
										</span>
										<div class="inovices-dash-count">
											<div class="inovices-amount">$4,5884</div>
										</div>
									</div>
									<p class="inovices-all">Paid Invoices <span>60</span></p>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-sm-6 col-12">
							<div class="card inovices-card">
								<div class="card-body">
									<div class="inovices-widget-header">
										<span class="inovices-widget-icon">
											<img src="{{asset('assets2/img/icons/invoices-icon4.svg')}}" alt="">
										</span>
										<div class="inovices-dash-count">
											<div class="inovices-amount">$8,8,797</div>
										</div>
									</div>
									<p class="inovices-all">Cancelled Invoices <span>80</span></p>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<div class="card card-table">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-stripped table-hover datatable">
											<thead class="thead-light">
												<tr>
												   <th>Mentee ID</th>
												   <th>Category</th>
												   <th>Created on</th>
												   <th>Mentee to</th>
												   <th>Amount</th>
												   <th>Due date</th>
												   <th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<label class="custom_check">
															<input type="checkbox" name="invoice">
															<span class="checkmark"></span>
														</label>
														<a href="view-invoice.html" class="invoice-link">IN093439#@09</a>
													</td>
													<td>PHP Developer</td>
													<td>16 Mar 2022</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{asset('assets2/img/profiles/avatar-04.jpg')}}" alt="User Image"> Barbara Moore</a>
														</h2>
													</td>
													<td class="text-primary">$1,54,220</td>
													<td>23 Mar 2022</td>
													<td><span class="badge bg-success-light">Paid</span></td>

												</tr>
												<tr>
													<td>
														<label class="custom_check">
															<input type="checkbox" name="invoice">
															<span class="checkmark"></span>
														</label>
														<a href="view-invoice.html" class="invoice-link">IN093439#@10</a>
													</td>
													<td>Ui Designer</td>
													<td>14 Mar 2022</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{asset('assets2/img/profiles/avatar-06.jpg')}}" alt="User Image"> Karlene Chaidez</a>
														</h2>
													</td>
													<td class="text-primary">$1,222</td>
													<td>18 Mar 2022</td>
													<td><span class="badge bg-danger-light">Overdue</span></td>

												</tr>
												<tr>
													<td>
														<label class="custom_check">
															<input type="checkbox" name="invoice">
															<span class="checkmark"></span>
														</label>
														<a href="view-invoice.html" class="invoice-link">IN093439#@11</a>
													</td>
													<td>Digital Marketer</td>
													<td>7 Mar 2022</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{asset('assets2/img/profiles/avatar-08.jpg')}}" alt="User Image"> Russell Copeland</a>
														</h2>
													</td>
													<td class="text-primary">$3,470</td>
													<td>10 Mar 2022</td>
													<td><span class="badge bg-primary-light">Cancelled</span></td>

												</tr>
												<tr>
													<td>
														<label class="custom_check">
															<input type="checkbox" name="invoice">
															<span class="checkmark"></span>
														</label>
														<a href="view-invoice.html" class="invoice-link">IN093439#@12</a>
													</td>
													<td>Project Manager</td>
													<td>24 Mar 2022</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{asset('assets2/img/profiles/avatar-10.jpg')}}" alt="User Image"> Joseph Collins</a>
														</h2>
													</td>
													<td class="text-primary">$8,265</td>
													<td>30 Mar 2022</td>
													<td><span class="badge bg-success-light">Paid</span></td>

												</tr>
												<tr>
													<td>
														<label class="custom_check">
															<input type="checkbox" name="invoice">
															<span class="checkmark"></span>
														</label>
														<a href="view-invoice.html" class="invoice-link">IN093439#@13</a>
													</td>
													<td>Web Developer</td>
													<td>17 Mar 2022</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{asset('assets2/img/profiles/avatar-11.jpg')}}" alt="User Image"> Jennifer Floyd</a>
														</h2>
													</td>
													<td class="text-primary">$5,200</td>
													<td>20 Mar 2022</td>
													<td><span class="badge bg-danger-light">Overdue</span></td>

												</tr>
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

        <script>
            // Get the mentor search input and mentor list container
            const mentorSearchInput = document.getElementById('mentor-search');
            const mentorListContainer = document.getElementById('mentor-list');

            // Attach an event listener to the mentor search input
            mentorSearchInput.addEventListener('input', function() {
                const searchQuery = mentorSearchInput.value;

                // Send an AJAX request to the server to fetch matching mentors
                fetch(`/admin/reports/search-mentors?query=${searchQuery}`)
                    .then(response => response.json())
                    .then(mentors => {
                        // Clear the mentor list container
                        mentorListContainer.innerHTML = '';

                        // Loop through the mentors and create the mentor checkboxes
                        mentors.forEach(mentor => {
                            const mentorCheckbox = document.createElement('label');
                            mentorCheckbox.classList.add('custom_check', 'w-100');

                            const checkbox = document.createElement('input');
                            checkbox.type = 'checkbox';
                            checkbox.value = mentor.id;
                            checkbox.name = 'mentor_ids[]';

                            const checkmark = document.createElement('span');
                            checkmark.classList.add('checkmark');

                            mentorCheckbox.appendChild(checkbox);
                            mentorCheckbox.appendChild(checkmark);
                            mentorCheckbox.appendChild(document.createTextNode(`${mentor.fname} ${mentor.lname}`));

                            mentorListContainer.appendChild(mentorCheckbox);
                        });
                    })
                    .catch(error => {
                        console.error(error);
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

		<!-- Select2 JS -->
		<script src="{{asset('assets2/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Datatables JS -->
		<script src="{{asset('assets2/plugins/datatables/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('assets2/plugins/datatables/datatables.min.js')}}"></script>

		<!-- Datepicker Core JS -->
		<script src="{{asset('assets2/js/moment.min.js')}}"></script>
		<script src="{{asset('assets2/js/bootstrap-datetimepicker.min.js')}}"></script>

		<!-- Custom JS -->
		<script src="{{asset('assets2/js/script.js')}}"></script>

	</body>
</html>
