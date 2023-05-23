<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<title>Mentoring</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        @livewireStyles

	</head>
	<body class="chat-page">

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
								<img src="{{asset('assets/img/logo final mohamed pnggggggg-01.png')}}" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="has-submenu">
								<a href="{{route('mentee.mentor_search')}}">Home </a>
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
							<li class="has-submenu">
								<a href="">Mentor <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="dashboard.html">Mentor Dashboard</a></li>
									<li><a href="bookings.html">Bookings</a></li>
									<li><a href="schedule-timings.html">Schedule Timing</a></li>
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
							<li class="has-submenu active">
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
									<li class="active"><a href="profile.html">Mentor Profile</a></li>
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
									<img class="rounded-circle" src="{{asset('assets/img/user/user.jpg')}}" width="31" alt="Darren Elder">
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<div class="user-header">
									<div class="avatar avatar-sm">
										<img src="{{asset('assets/img/user/user.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
									</div>
									<div class="user-text">
										<h6>{{ Auth::user()->name }}</h6>
										<p class="text-muted mb-0">Mentee</p>
									</div>
								</div>
                                <form  action="{{route('mentee.profile-settings')}}" method="GET">
                                    @csrf
                                    <button class="dropdown-item">Profile Settings</button>
                                </form>
                                <form  action="{{route('mentee.favourites')}}" method="GET">
                                    @csrf
                                    <button class="dropdown-item">Favourite Mentors</button>
                                </form>
                                <form  action="{{ route('mentee.logout') }}" method="POST">
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
			<div class="content">
				<div class="container-fluid">
					<div class="settings-back mb-3">
						<a href="dashboard.html">
							<i class="fas fa-long-arrow-alt-left"></i> <span>Back</span>
						</a>
					</div>
					<div class="row">
						<div class="col-sm-12 mb-4">
							<div class="chat-window">

								<!-- Chat Left -->
								<div class="chat-cont-left">
									<form class="chat-search d-flex align-items-center">
										<div class="avatar avatar-online me-3">
											<img src="{{asset('assets/img/user/user.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
										</div>
										<div class="input-group">
											<div class="input-group-prepend">
												<i class="fas fa-search"></i>
											</div>
											<input type="text" class="form-control rounded-pill" placeholder="Search">
										</div>
									</form>
									<div class="chat-header">
										<span>Chats</span>
									</div>
									<div class="chat-users-list">
										<div class="chat-scroll">
											@foreach ($mentors as $mentor )

											<a href="{{route('mentee.chat',$mentor['mentor_id'])}}" class="media d-flex">
												<div class="media-img-wrap flex-shrink-0">
													<div class="avatar avatar-away">
														<img src="{{ url('public/Image/'.$mentor['mentor']['about']['photo']) }}" alt="User Image" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body flex-grow-1">
													<div>
														<div class="user-name">{{$mentor['mentor']['fname']}}</div>
														{{-- <div class="user-last-chat">Hey, How are you?</div> --}}
													</div>
													<div>
														{{-- <div class="last-chat-time block">2 min</div> --}}
														<div class="badge badge-success badge-pill fill-blue rounded-pill">0</div>
													</div>
												</div>
											</a>
                                            @endforeach


										</div>
									</div>
								</div>
								<!-- /Chat Left -->

								<!-- Chat Right -->
								<div class="chat-cont-right">
									<div class="chat-header">
										<a id="back_user_list" href="javascript:void(0)" class="back-user-list">
											<i class="material-icons">chevron_left</i>
										</a>
										<div class="media d-flex">
											<div class="media-img-wrap flex-shrink-0">
												<div class="avatar avatar-online">
													<img src="{{ url('public/Image/'.$mentor_header['about']['photo']) }}" alt="User Image" class="avatar-img rounded-circle">
												</div>
											</div>
											<div class="media-body flex-grow-1">
												<div class="user-name">{{$mentor_header['fname']}}</div>
											</div>
										</div>

									</div>
									<div class="chat-body">
										<div class="chat-scroll">
											<ul class="list-unstyled" id="messages-list">
                                                @foreach ($messages as $message )

                                                @if ($message['type'] == 1)


												<li class="media sent">
													<div class="media-body">
														<div class="msg-box">
															<div id="messages-container">
																<p>{{$message['content']}}</p>
																<ul class="chat-msg-info">
																	<li>
																		<div class="chat-time">
																			<span>{{$message['created_at']}}</span>
																		</div>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</li>
                                                @endif
                                                @if ($message['type'] == 0)


												<li class="media received d-flex">
													<div class="avatar flex-shrink-0">
														<img src="{{asset('assets/img/user/user.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
													</div>
													<div class="media-body flex-grow-1">
														<div class="msg-box">
															<div>
																<p>{{$message['content']}}</p>
																{{-- <p>Will you tell me something about yourself?</p> --}}
																<ul class="chat-msg-info">
																	<li>
																		<div class="chat-time">
																			<span>{{$message['created_at'] }}</span>
																		</div>
																	</li>
																</ul>
															</div>
														</div>


													</div>
												</li>
                                                @endif
                                                @endforeach

											</ul>
										</div>
									</div>
                                    <form id="message-form" autocomplete="off">
                                        @csrf
									<div class="chat-footer">
										<div class="input-group">
                                            <input type="hidden" id="mentor_id" name="mentor_id" value="{{$mentor_id}}">
											<input type="text" id="message_content" name="message_content" required class="input-msg-send form-control" placeholder="Type something">
											<button type="submit" class="btn msg-send-btn">Send</button>
										</div>
									</div>
                                </form>
								</div>
								<!-- /Chat Right -->

							</div>
						</div>
					</div>
					<!-- /Row -->

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
										<img src="assets/img/logo.png" alt="logo">
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

		<!-- Voice Call Modal -->
		<div class="modal fade call-modal" id="voice_call">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body">

						<!-- Outgoing Call -->
						<div class="call-box incoming-box">
							<div class="call-wrapper">
								<div class="call-inner">
									<div class="call-user">
										<img alt="User Image" src="assets/img/user/user.jpg" class="call-avatar">
										<h4>Marvin Downey</h4>
										<span>Connecting...</span>
									</div>
									<div class="call-items">
										<a href="javascript:void(0);" class="btn call-item call-end" data-bs-dismiss="modal" aria-label="Close"><i class="material-icons">call_end</i></a>
										<a href="voice-call.html" class="btn call-item call-start"><i class="material-icons">call</i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Outgoing Call -->

					</div>
				</div>
			</div>
		</div>
		<!-- /Voice Call Modal -->

		<!-- Video Call Modal -->
		<div class="modal fade call-modal" id="video_call">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body">

						<!-- Incoming Call -->
						<div class="call-box incoming-box">
							<div class="call-wrapper">
								<div class="call-inner">
									<div class="call-user">
										<img class="call-avatar" src="assets/img/user/user.jpg" alt="User Image">
										<h4>Richard Wilson</h4>
										<span>Calling ...</span>
									</div>
									<div class="call-items">
										<a href="javascript:void(0);" class="btn call-item call-end" data-bs-dismiss="modal" aria-label="Close"><i class="material-icons">call_end</i></a>
										<a href="video-call.html" class="btn call-item call-start"><i class="material-icons">videocam</i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Incoming Call -->

					</div>
				</div>
			</div>
		</div>
		<!-- Video Call Modal -->

        @livewireScripts

        <script>
            // Send a message
            var form = document.getElementById('message-form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();


                            var xhr = new XMLHttpRequest();
                xhr.open('POST', '/mentee/chat/store');
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            // Request was successful
                            console.log('Message sent successfully.');
                            form.reset(); // Clear the form inputs
                        } else {
                            // Error occurred
                            console.error('Error:', xhr.status);
                            console.error('Response:', xhr.responseText);
                        }
                    }
                };

                var formData = new FormData(form);
                xhr.send(new URLSearchParams(formData).toString());

                // Retrieve messages periodically
setInterval(function() {
  var xhr = new XMLHttpRequest();
  xhr.open('GET', '/mentee/chat/latest/' + document.getElementById('mentor_id').value);
  xhr.setRequestHeader('Content-Type', 'application/json');
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        // Request was successful
        var messages = JSON.parse(xhr.responseText);

        // Clear existing messages
        var messagesList = document.getElementById('messages-list');
        var chatScroll = document.getElementById('chat-scroll');
        messagesList.innerHTML = '';

        // Update the chat window with the new messages
        messages.forEach(function(message) {
          var li = document.createElement('li');
          li.classList.add(message.type == 1 ? 'sent' : 'received', 'media');

          var createdAt = new Date(message.created_at);
          var time = createdAt.toLocaleString([], { year: 'numeric', month: '2-digit', day: '2-digit', hour: '2-digit', minute: '2-digit', second: '2-digit' });


          if (message.type == 0) {
            li.innerHTML = `
              <div class="avatar flex-shrink-0">
                <img src="{{asset('assets/img/user/user.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
              </div>
              <div class="media-body flex-grow-1">
                <div class="msg-box">
                  <div>
                    <p>${message.content}</p>
                    <ul class="chat-msg-info">
                      <li>
                        <div class="chat-time">
                            <span>${time}</span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            `;
          } else {
            li.innerHTML = `
              <div class="media-body">
                <div class="msg-box">
                  <div id="messages-container">
                    <p>${message.content}</p>
                    <ul class="chat-msg-info">
                      <li>
                        <div class="chat-time">
                            <span>${time}</span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            `;
          }

          messagesList.appendChild(li);
        });
        chatScroll.scrollTop = chatScroll.scrollHeight;
      } else {
        // Error occurred
        console.error('Error:', xhr.status);
        console.error('Response:', xhr.responseText);
      }
    }
  };
  xhr.send();
}, 1000); // Poll every 5 seconds (adjust as needed)

            });

            // ...
        </script>
		<!-- jQuery -->
		<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

		<!-- Bootstrap Core JS -->
		<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

		<!-- Custom JS -->
		<script src="{{asset('assets/js/script.js')}}"></script>

	</body>
</html>
