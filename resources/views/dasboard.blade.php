<!--
    Item Name: Luxurious - Hotel Booking HTML Template + Admin Dashboard.
    Author: ashishmaraviya
    Version: 2.2.0
    Copyright 2024
	Author URI: https://themeforest.net/user/ashishmaraviya
-->
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/luxurious-html-v22/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Dec 2024 10:33:57 GMT -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Best Luxurious Hotel Booking Template.">
	<meta name="keywords"
		content="hotel, booking, business, restaurant, spa, resort, landing, agency, corporate, start up, site design, new business site, business template, professional template, classic, modern">
	<meta name="author" content="ashishmaraviya">

	<title>Luxurious - Hotel Booking HTML Template + Admin Dashboard</title>

	<!-- App favicon -->
	<link rel="shortcut icon" href="{{ asset('themes/admin/assets/img/favicon/favicon.ico') }}">

	<!-- Icon CSS -->
	<link href="{{ asset('themes/admin/assets/css/vendor/materialdesignicons.min.css') }}" rel="stylesheet">
	<link href="{{ asset('themes/admin/assets/css/vendor/remixicon.css') }}" rel="stylesheet">

	<!-- Vendor -->
	<link href="{{ asset('themes/admin/assets/css/vendor/datatables.bootstrap5.min.css') }}" rel='stylesheet'>
	<link href="{{ asset('themes/admin/assets/css/vendor/responsive.datatables.min.css') }}" rel='stylesheet'>
	<link href="{{ asset('themes/admin/assets/css/vendor/daterangepicker.css') }}" rel='stylesheet'>
	<link href="{{ asset('themes/admin/assets/css/vendor/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('themes/admin/assets/css/vendor/apexcharts.css') }}" rel="stylesheet">
	<link href="{{ asset('themes/admin/assets/css/vendor/simplebar.css') }}" rel="stylesheet">
	<link href="{{ asset('themes/admin/assets/css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">

	<!-- Main CSS -->
	<link id="mainCss" href="{{ asset('themes/admin/assets/css/style.css') }}" rel="stylesheet">
</head>

<body data-lh-mode="light">
	<main class="wrapper sb-default">
		<!-- Loader -->
		<div class="lh-loader">
			<span class="loader"></span>
		</div>

		<!-- Header -->
		<header class="lh-header">
			<div class="container-fluid">
				<div class="lh-header-items">
					<div class="left-header">
						<a href="javascript:void(0)" class="lh-toggle-sidebar">
							<span class="outer-ring">
								<span class="inner-ring"></span>
							</span>
						</a>
						<div class="header-search-box">
							<div class="header-search-drop">
								<a href="javascript:void(0)" class="open-search"><i class="ri-search-line"></i></a>
								<form class="lh-search">
									<input class="search-input" type="text" placeholder="Search...">
									<a href="javascript:void(0)" class="search-btn"><i class="ri-search-line"></i>
									</a>
								</form>
							</div>
						</div>
					</div>
					<div class="right-header">
						<div class="lh-right-tool lh-flag-drop language">
							<div class="lh-hover-drop">
								<div class="lh-hover-tool">
									<img class="flag" src="assets/img/flag/us.png" alt="flag">
								</div>
								<div class="lh-hover-drop-panel right">
									<ul>
										<li><a href="javascript:void(0)"><img class="flag" src="assets/img/flag/us.png"
													alt="flag">English</a></li>
										<li><a href="javascript:void(0)"><img class="flag" src="assets/img/flag/in.png"
													alt="flag">Hindi</a></li>
										<li><a href="javascript:void(0)"><img class="flag" src="assets/img/flag/de.png"
													alt="flag"> Deutsch</a></li>
										<li><a href="javascript:void(0)"><img class="flag" src="assets/img/flag/it.png"
													alt="flag">Italian</a></li>
										<li><a href="javascript:void(0)"><img class="flag" src="assets/img/flag/jp.png"
													alt="flag">Japanese</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="lh-right-tool apps">
							<div class="lh-hover-drop">
								<div class="lh-hover-tool">
									<i class="ri-apps-2-line"></i>
								</div>
								<div class="lh-hover-drop-panel right apps">
									<h6 class="title">Apps</h6>
									<ul>
										<li><a href="javascript:void(0)"><img class="app" src="assets/img/apps/1.png"
													alt="flag">Github</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="assets/img/apps/2.png"
													alt="flag">Dribbble</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="assets/img/apps/3.png"
													alt="flag">Dropbox</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="assets/img/apps/4.png"
													alt="flag">Figma</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="assets/img/apps/5.png"
													alt="flag">Meta</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="assets/img/apps/6.png"
													alt="flag">Adsense</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="lh-right-tool display-screen">
							<a class="lh-screen full" href="javascript:void(0)"><i class="ri-fullscreen-line"></i></a>
							<a class="lh-screen reset" href="javascript:void(0)"><i
									class="ri-fullscreen-exit-line"></i></a>
						</div>
						<div class="lh-right-tool">
							<a class="lh-notify" href="javascript:void(0)">
								<i class="ri-notification-2-line"></i>
								<span class="label"></span>
							</a>
						</div>
						<div class="lh-right-tool display-dark">
							<a class="lh-mode dark" href="javascript:void(0)"><i class="ri-moon-clear-line"></i></a>
							<a class="lh-mode light" href="javascript:void(0)"><i class="ri-sun-line"></i></a>
						</div>
						<div class="lh-right-tool lh-user-drop">
							<div class="lh-hover-drop">
								<div class="lh-hover-tool">
									<img class="user" src="assets/img/user/1.jpg" alt="user">
								</div>
								<div class="lh-hover-drop-panel right">
									<div class="details">
										<h6>Moris Waites</h6>
										<p>moris@example.com</p>
									</div>
									<ul class="border-top">
										<li><a href="team-profile.html">Profile</a></li>
										<li><a href="#">Help</a></li>
										<li><a href="#">Messages</a></li>
										<li><a href="team-update.html">Settings</a></li>
									</ul>
									<ul class="border-top">
										<li><a href="signin.html"><i class="ri-logout-circle-r-line"></i>Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- sidebar -->
		<div class="lh-sidebar-overlay"></div>
		<div class="lh-sidebar" data-mode="light">
			<div class="lh-sb-logo">
				<a href="index.html" class="sb-full"><img src="assets/img/logo/full-logo.png" alt="logo"></a>
				<a href="index.html" class="sb-collapse"><img src="assets/img/logo/collapse-logo.png" alt="logo"></a>
			</div>
			<div class="lh-sb-wrapper">
				<div class="lh-sb-content">
					<ul class="lh-sb-list">
						<li class="lh-sb-item sb-drop-item">
							<a href="javascript:void(0)" class="lh-drop-toggle">
								<i class="ri-dashboard-3-line"></i>
								<span class="condense">Dashboard<i class="drop-arrow ri-arrow-down-s-line"></i></span>
							</a>
							<ul class="lh-sb-drop condense">
								<li class="list"><a href="index.html" class="lh-page-link drop"><i
											class="ri-git-commit-line"></i>Report</a></li>
							</ul>
						</li>
						<li class="lh-sb-item-separator"></li>
						<li class="lh-sb-title condense">Apps</li>
						<li class="lh-sb-item sb-drop-item">
							<a href="javascript:void(0)" class="lh-drop-toggle">
								<i class="ri-shield-user-line"></i><span class="condense">Staff<i
										class="drop-arrow ri-arrow-down-s-line"></i></span></a>
							<ul class="lh-sb-drop condense">
								<li><a href="team-profile.html" class="lh-page-link drop"><i
											class="ri-git-commit-line"></i>Team Profile</a></li>
								<li><a href="team-add.html" class="lh-page-link drop"><i
											class="ri-git-commit-line"></i>Team Add</a></li>
								<li><a href="team-update.html" class="lh-page-link drop"><i
											class="ri-git-commit-line"></i>Team Update</a></li>
								<li><a href="team-list.html" class="lh-page-link drop"><i
											class="ri-git-commit-line"></i>Team List</a></li>
							</ul>
						</li>
						<li class="lh-sb-item-separator"></li>
						<li class="lh-sb-title condense">Hotel | Resort</li>
						<li class="lh-sb-item">
							<a href="guest.html" class="lh-page-link">
								<i class="ri-group-line"></i><span class="condense"><span
										class="hover-title">Guest</span> </span>
							</a>
						</li>
						<li class="lh-sb-item">
							<a href="guest-details.html" class="lh-page-link">
								<i class="ri-user-search-line"></i><span class="condense"><span
										class="hover-title">Guest
										Details</span> </span>
							</a>
						</li>
						<li class="lh-sb-item">
							<a href="rooms.html" class="lh-page-link">
								<i class="ri-home-8-line"></i><span class="condense"><span
										class="hover-title">Rooms</span> </span>
							</a>
						</li>
						<li class="lh-sb-item">
							<a href="bookings.html" class="lh-page-link">
								<i class="ri-contacts-book-line"></i><span class="condense"><span
										class="hover-title">Bookings</span> </span>
							</a>
						</li>
						<li class="lh-sb-item">
							<a href="invoice.html" class="lh-page-link">
								<i class="ri-bill-line"></i><span class="condense"><span
										class="hover-title">Invoice</span> </span>
							</a>
						</li>
						<li class="lh-sb-item-separator"></li>
						<li class="lh-sb-title condense">Restaurant</li>
						<li class="lh-sb-item">
							<a href="menu.html" class="lh-page-link">
								<i class="ri-restaurant-2-line"></i><span class="condense"><span
										class="hover-title">Menu</span> </span>
							</a>
						</li>
						<li class="lh-sb-item">
							<a href="menu-add.html" class="lh-page-link">
								<i class="ri-restaurant-2-line"></i><span class="condense"><span class="hover-title">Add
										Menu</span> </span>
							</a>
						</li>
						<li class="lh-sb-item">
							<a href="orders.html" class="lh-page-link">
								<i class="ri-bookmark-3-line"></i><span class="condense"><span
										class="hover-title">Orders</span> </span>
							</a>
						</li>
						<li class="lh-sb-item-separator"></li>
						<li class="lh-sb-title condense">Extra</li>
						<li class="lh-sb-item sb-drop-item">
							<a href="javascript:void(0)" class="lh-drop-toggle">
								<i class="ri-pages-line"></i><span class="condense">Authentication<i
										class="drop-arrow ri-arrow-down-s-line"></i></span></a>
							<ul class="lh-sb-drop condense">
								<li><a href="signin.html" class="lh-page-link drop"><i
											class="ri-git-commit-line"></i>Login</a></li>
								<li><a href="signup.html" class="lh-page-link drop"><i
											class="ri-git-commit-line"></i>Signup</a></li>
								<li><a href="forgot.html" class="lh-page-link drop"><i
											class="ri-git-commit-line"></i>Forgot password</a></li>
								<li><a href="reset-password.html" class="lh-page-link drop"><i
											class="ri-git-commit-line"></i>Reset password</a></li>
							</ul>
						</li>
						<li class="lh-sb-item sb-drop-item">
							<a href="javascript:void(0)" class="lh-drop-toggle">
								<i class="ri-service-line"></i><span class="condense">Service pages<i
										class="drop-arrow ri-arrow-down-s-line"></i></span></a>
							<ul class="lh-sb-drop condense">
								<li><a href="404-error-page.html" class="lh-page-link drop"><i
											class="ri-git-commit-line"></i>404 error</a></li>
								<li><a href="maintenance.html" class="lh-page-link drop"><i
											class="ri-git-commit-line"></i>Maintenance</a></li>
							</ul>
						</li>
						<li class="lh-sb-item-separator"></li>
						<li class="lh-sb-title condense">Elements</li>
						<li class="lh-sb-item">
							<a href="remix-icons.html" class="lh-page-link">
								<i class="ri-remixicon-line"></i><span class="condense"><span class="hover-title">remix
										icons</span></span></a>
						</li>
						<li class="lh-sb-item">
							<a href="material-icons.html" class="lh-page-link">
								<i class="mdi mdi-material-ui"></i><span class="condense"><span
										class="hover-title">Material icons</span></span></a>
						</li>
						<li class="lh-sb-item">
							<a href="alert-popup.html" class="lh-page-link">
								<i class="ri-file-warning-line"></i><span class="condense"><span
										class="hover-title">Alert Popup</span></span></a>
						</li>
						<li class="lh-sb-item-separator"></li>
						<li class="lh-sb-title condense">Settings</li>
						<li class="lh-sb-item">
							<a href="role.html" class="lh-page-link">
								<i class="ri-magic-line"></i><span class="condense"><span
										class="hover-title">Role</span></span></a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Notify sidebar -->
		<div class="lh-notify-bar-overlay"></div>
		<div class="lh-notify-bar">
			<div class="lh-bar-title">
				<h6>Notifications<span class="label">12</span></h6>
				<a href="javascript:void(0)" class="close-notify"><i class="ri-close-line"></i></a>
			</div>
			<div class="lh-bar-content">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link active" id="alert-tab" data-bs-toggle="tab" data-bs-target="#alert"
							type="button" role="tab" aria-controls="alert" aria-selected="true">Alert</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages"
							type="button" role="tab" aria-controls="messages" aria-selected="false">Messages</button>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="alert" role="tabpanel" aria-labelledby="alert-tab">
						<div class="lh-alert-list">
							<ul>
								<li>
									<div class="icon lh-alert">
										<i class="ri-alarm-warning-line"></i>
									</div>
									<div class="detail">
										<div class="title">Your final report is overdue</div>
										<p class="time">Just now</p>
										<p class="message">Please submit your quarterly report before - June 15.</p>
									</div>
								</li>
								<li>
									<div class="icon lh-warn">
										<i class="ri-error-warning-line"></i>
									</div>
									<div class="detail">
										<div class="title">Your Booking campaign is stop!</div>
										<p class="time">5:45AM - 25/05/2024</p>
										<p class="message">Please submit your quarterly report before Jun 15.</p>
									</div>
								</li>
								<li>
									<div class="icon lh-success">
										<i class="ri-check-double-line"></i>
									</div>
									<div class="detail">
										<div class="title">Your payment is successfully processed</div>
										<p class="time">9:20PM - 19/06/2024</p>
										<p class="message">Check your account wallet. if there is any issue, create
											support ticket.</p>
									</div>
								</li>
								<li>
									<div class="icon lh-warn">
										<i class="ri-error-warning-line"></i>
									</div>
									<div class="detail">
										<div class="title">Budget threshold exceeded!</div>
										<p class="time">4:15AM - 01/04/2024</p>
										<p class="message">Budget threshold was exceeded for project "Luxurious" B612
											elements.</p>
									</div>
								</li>
								<li>
									<div class="icon lh-warn">
										<i class="ri-close-line"></i>
									</div>
									<div class="detail">
										<div class="title">Booking was decline!</div>
										<p class="time">4:15AM - 01/04/2024</p>
										<p class="message">Your booking "B126" is declined by Theresa Mayeras.</p>
									</div>
								</li>
								<li>
									<div class="icon lh-success">
										<i class="ri-check-double-line"></i>
									</div>
									<div class="detail">
										<div class="title">Your payment is successfully processed</div>
										<p class="time">9:20PM - 19/06/2024</p>
										<p class="message">Check your account wallet. if there is any issue, create
											support ticket.</p>
									</div>
								</li>
								<li class="check"><a class="lh-primary-btn" href="#">View all</a></li>
							</ul>
						</div>
					</div>
					<div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab">
						<div class="lh-message-list">
							<ul>
								<li>
									<a href="#" class="reply">Reply</a>
									<div class="user">
										<img src="assets/img/user/9.jpg" alt="user">
										<span class="label online"></span>
									</div>
									<div class="detail">
										<a href="#" class="name">Boris Whisli</a>
										<p class="time">5:30AM, Today</p>
										<p class="message">Hello, Room 204 need to be clean.</p>
										<span class="download-files">
											<span class="download">
												<img src="assets/img/room/1.png" alt="image">
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
											<span class="download">
												<img src="assets/img/room/2.png" alt="image">
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
											<span class="download">
												<img src="assets/img/room/3.png" alt="image">
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
										</span>
									</div>
								</li>
								<li>
									<a href="#" class="reply">Reply</a>
									<div class="user">
										<img src="assets/img/user/8.jpg" alt="user">
										<span class="label offline"></span>
									</div>
									<div class="detail">
										<a href="#" class="name">Frank N. Stein</a>
										<p class="time">8:30PM, 05/12/2024</p>
										<p class="message">Please take a look and get order from table 06.</p>
									</div>
								</li>
								<li>
									<a href="#" class="reply">Reply</a>
									<div class="user">
										<img src="assets/img/user/7.jpg" alt="user">
										<span class="label busy"></span>
									</div>
									<div class="detail">
										<a href="#" class="name">Frank N. Stein</a>
										<p class="time">8:30PM, 05/12/2024</p>
										<p class="message">Room 65 AC repair service is done.</p>
										<span class="download-files">
											<span class="download">
												<img src="assets/img/facilities/1.png" alt="image">
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
										</span>
									</div>
								</li>
								<li>
									<a href="#" class="reply">Reply</a>
									<div class="user">
										<img src="assets/img/user/6.jpg" alt="user">
										<span class="label busy"></span>
									</div>
									<div class="detail">
										<a href="#" class="name">Paige Turner</a>
										<p class="time">4:30PM, 12/12/2024</p>
										<p class="message">Take a Spa trainer interview.</p>
									</div>
								</li>
								<li>
									<a href="#" class="reply">Reply</a>
									<div class="user">
										<img src="assets/img/user/5.jpg" alt="user">
										<span class="label busy"></span>
									</div>
									<div class="detail">
										<a href="#" class="name">Allie Grater</a>
										<p class="time">8:30PM, 05/12/2024</p>
										<p class="message">Take marketing module task.</p>
									</div>
								</li>
								<li class="check"><a class="lh-primary-btn" href="#">View all</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- main content -->
		<div class="lh-main-content">
			<div class="container-fluid">
				<!-- Page title & breadcrumb -->
				<div class="lh-page-title">
					<div class="lh-breadcrumb">
						<h5>Dashboard</h5>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>Dashboard</li>
						</ul>
					</div>
					<div class="lh-tools">
						<a href="javascript:void(0)" title="Refresh" class="refresh"><i class="ri-refresh-line"></i></a>
						<div id="pagedate">
							<div class="lh-date-range" title="Date">
								<span></span>
							</div>
						</div>
						<div class="filter">
							<div class="dropdown" title="Filter">
								<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
									data-bs-toggle="dropdown" aria-expanded="false">
									<i class="ri-sound-module-line"></i>
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
									<li><a class="dropdown-item" href="#">Booking</a></li>
									<li><a class="dropdown-item" href="#">Revenue</a></li>
									<li><a class="dropdown-item" href="#">Expence</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-3 col-md-6">
						<div class="lh-card lh-card-1">
							<div class="lh-card-content label-card">
								<div class="title">
									<div class="growth-numbers">
										<h4>Visitor</h4>
										<h5>698k</h5>
									</div>
									<span class="icon"><i class="ri-shield-user-line"></i></span>
								</div>
								<p class="card-groth up">
									<i class="ri-arrow-up-line"></i>
									25%
									<span>Last Month</span>
								</p>
								<div class="mini-chart">
									<div id="userNumbers"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="lh-card lh-card-2">
							<div class="lh-card-content label-card">
								<div class="title">
									<div class="growth-numbers">
										<h4>Bookings</h4>
										<h5>10.63k</h5>
									</div>
									<span class="icon"><i class="ri-shopping-bag-3-line"></i>
									</span>
								</div>
								<p class="card-groth down">
									<i class="ri-arrow-down-line"></i>
									.5%
									<span>Last Month</span>
								</p>
								<div class="mini-chart">
									<div id="bookingNumbers"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="lh-card lh-card-3">
							<div class="lh-card-content label-card">
								<div class="title">
									<div class="growth-numbers">
										<h4>Revenue</h4>
										<h5>$85420</h5>
									</div>
									<span class="icon"><i class="ri-money-dollar-circle-line"></i></span>
								</div>
								<p class="card-groth down">
									<i class="ri-arrow-down-line"></i>
									2.1%
									<span>Last Month</span>
								</p>
								<div class="mini-chart">
									<div id="revenueNumbers"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="lh-card lh-card-4">
							<div class="lh-card-content label-card">
								<div class="title">
									<div class="growth-numbers">
										<h4>Rooms</h4>
										<h5><span data-bs-toggle="tooltip" aria-label="Available"
												data-bs-original-title="Available">45</span>/365</h5>
									</div>
									<span class="icon"><i class="ri-exchange-dollar-line"></i></span>
								</div>
								<p class="card-groth up">
									<i class="ri-arrow-up-line"></i>
									9%
									<span>Last Month</span>
								</p>
								<div class="mini-chart">
									<div id="expensesNumbers"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-8 col-md-12">
						<div class="lh-card revenue-overview">
							<div class="lh-card-header header-575">
								<h4 class="lh-card-title">Revenue Overview</h4>
								<div class="header-tools">
									<a href="javascript:void(0)" class="m-r-10 lh-full-card">
										<i class="ri-fullscreen-line" title="Full Screen"></i></a>
									<div class="lh-date-range date" title="Date">
										<span></span>
									</div>
								</div>
							</div>
							<div class="lh-card-content">
								<div class="lh-chart-header">
									<div class="block">
										<h6>Bookings</h6>
										<h5>825
											<span class="up"><i class="ri-arrow-up-line"></i>24%</span>
										</h5>
									</div>
									<div class="block">
										<h6>Revenue</h6>
										<h5>$89k
											<span class="up"><i class="ri-arrow-up-line"></i>24%</span>
										</h5>
									</div>
									<div class="block">
										<h6>Expence</h6>
										<h5>$68k
											<span class="down"><i class="ri-arrow-down-line"></i>24%</span>
										</h5>
									</div>
									<div class="block">
										<h6>Profit</h6>
										<h5>$21k
											<span class="up"><i class="ri-arrow-up-line"></i>24%</span>
										</h5>
									</div>
								</div>
								<div class="lh-chart-content">
									<div id="overviewChart"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-12">
						<div class="lh-card" id="lhmap">
							<div class="lh-card-header">
								<h4 class="lh-card-title">Top Country</h4>
								<div class="header-tools">
									<div class="lh-date-range dots">
										<span></span>
									</div>
								</div>
							</div>
							<div class="lh-card-content">
								<div class="lh-map-view">
									<div id="world-map"></div>
								</div>
								<div class="lh-map-detail">
									<div class="lh-map-detail">
										<div class="title">
											<h5>Revenue</h5>
											<a href="#" class="visit" title="View all data">view <i
													class="ri-arrow-right-line"></i></a>
										</div>
										<div class="lh-detail-list">
											<div class="lh-label">
												<div>
													<label>India</label>
													<span class="down"><i class="ri-arrow-down-line"></i>2.6%</span>
												</div>
												<p>$958.5k</p>
											</div>
											<div class="progress">
												<div class="progress-bar bg-primary" role="progressbar"
													style="width: 95%" aria-valuenow="95" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</div>
										<div class="lh-detail-list">
											<div class="lh-label">
												<div>
													<label>Morocco</label>
													<span class="up"><i class="ri-arrow-up-line"></i>5.6%</span>
												</div>
												<p>$788.7k</p>
											</div>
											<div class="progress">
												<div class="progress-bar bg-secondary" role="progressbar"
													style="width: 84%" aria-valuenow="84" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</div>
										<div class="lh-detail-list">
											<div class="lh-label">
												<div>
													<label>Brazil</label>
													<span class="up"><i class="ri-arrow-up-line"></i>3.7%</span>
												</div>
												<p>$592.2k</p>
											</div>
											<div class="progress">
												<div class="progress-bar bg-secondary" role="progressbar"
													style="width: 76%" aria-valuenow="76" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="row">
					<div class="col-xl-12 col-md-12">
						<div class="lh-card" id="bookingtbl">
							<div class="lh-card-header">
								<h4 class="lh-card-title">Bookings</h4>
								<div class="header-tools">
									<a href="javascript:void(0)" class="m-r-10 lh-full-card"><i
											class="ri-fullscreen-line" title="Full Screen"></i></a>
									<div class="lh-date-range dots">
										<span></span>
									</div>
								</div>
							</div>
							<div class="lh-card-content card-default">
								<div class="booking-table">
									<div class="table-responsive">
										<table id="booking_table" class="table">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>CheckIn</th>
													<th>CheckOut</th>
													<th>Proof</th>
													<th>Payment</th>
													<th>Amount</th>
													<th>RoomNo</th>
													<th>Rooms</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="token">2650</td>
													<td><img class="cat-thumb" src="assets/img/user/1.jpg"
															alt="clients Image"><span class="name">Zara nails</span>
													</td>
													<td>15/01/2024</td>
													<td>20/01/2024</td>
													<td>Passport</td>
													<td class="active">Cash</td>
													<td>$550</td>
													<td class="type"><span>VIP : </span>101, 102</td>
													<td class="rooms">
														<span class="mem">6 Member</span> /
														<span class="room">2 Room</span>
													</td>
													<td>
														<div class="d-flex justify-content-center">
															<button type="button" class="btn btn-outline-success"><i
																	class="ri-information-line"></i></button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only"><i
																		class="ri-settings-3-line"></i></span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="token">2650</td>
													<td><img class="cat-thumb" src="assets/img/user/2.jpg"
															alt="clients Image"><span class="name">Zara nails
															Pvt.</span></td>
													<td>19/04/2024</td>
													<td>29/04/2024</td>
													<td>Pan Card</td>
													<td class="close">Cheque</td>
													<td>$200</td>
													<td class="type"><span>Junior : </span>105</td>
													<td class="rooms">
														<span class="mem">4 Member</span> /
														<span class="room">1 Room</span>
													</td>
													<td>
														<div class="d-flex justify-content-center">
															<button type="button" class="btn btn-outline-success"><i
																	class="ri-information-line"></i></button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only"><i
																		class="ri-settings-3-line"></i></span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="token">2365</td>
													<td><img class="cat-thumb" src="assets/img/user/3.jpg"
															alt="clients Image"><span class="name">Olive Yew</span></td>
													<td>01/07/2024</td>
													<td>02/07/2024</td>
													<td>Pan Card</td>
													<td class="pending">Pending</td>
													<td>$400</td>
													<td class="type"><span>VVIP : </span>107</td>
													<td class="rooms">
														<span class="mem">2 Member</span> /
														<span class="room">1 Room</span>
													</td>
													<td>
														<div class="d-flex justify-content-center">
															<button type="button" class="btn btn-outline-success"><i
																	class="ri-information-line"></i></button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only"><i
																		class="ri-settings-3-line"></i></span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="token">2205</td>
													<td><img class="cat-thumb" src="assets/img/user/4.jpg"
															alt="clients Image"><span class="name">Allie Grater</span>
													</td>
													<td>01/07/2024</td>
													<td>02/07/2024</td>
													<td>Adhar Card</td>
													<td class="success">Gpay</td>
													<td>$1200</td>
													<td class="type"><span>Premium :</span> 103, 104, <span>Delux :
														</span>106</td>
													<td class="rooms">
														<span class="mem">12 Member</span> /
														<span class="room">3 Room</span>
													</td>
													<td>
														<div class="d-flex justify-content-center">
															<button type="button" class="btn btn-outline-success"><i
																	class="ri-information-line"></i></button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only"><i
																		class="ri-settings-3-line"></i></span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="token">2187</td>
													<td><img class="cat-thumb" src="assets/img/user/5.jpg"
															alt="clients Image"><span class="name">Stanley Knife</span>
													</td>
													<td>22/03/2024</td>
													<td>05/04/2024</td>
													<td>Passport</td>
													<td class="active">Cash</td>
													<td>$1200</td>
													<td class="type"><span>Delux : </span>108</td>
													<td class="rooms">
														<span class="mem">1 Member</span> /
														<span class="room">1 Room</span>
													</td>
													<td>
														<div class="d-flex justify-content-center">
															<button type="button" class="btn btn-outline-success"><i
																	class="ri-information-line"></i></button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only"><i
																		class="ri-settings-3-line"></i></span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="token">2050</td>
													<td><img class="cat-thumb" src="assets/img/user/6.jpg"
															alt="clients Image"><span class="name">Zara nails</span>
													</td>
													<td>09/09/2022</td>
													<td>15/09/2022</td>
													<td>Adhar Card</td>
													<td class="close">Cheque</td>
													<td>$1560</td>
													<td class="type"><span>VIP : </span>203</td>
													<td class="rooms">
														<span class="mem">2 Member</span> /
														<span class="room">1 Room</span>
													</td>
													<td>
														<div class="d-flex justify-content-center">
															<button type="button" class="btn btn-outline-success"><i
																	class="ri-information-line"></i></button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only"><i
																		class="ri-settings-3-line"></i></span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="token">1995</td>
													<td><img class="cat-thumb" src="assets/img/user/7.jpg"
															alt="clients Image"><span class="name">Ivan Itchinos</span>
													</td>
													<td>16/08/2024</td>
													<td>20/08/2024</td>
													<td>Pan Card</td>
													<td class="success">Gpay</td>
													<td>$1560</td>
													<td class="type"><span>VIP : </span>204, <span>Junior : </span>401,
														402</td>
													<td class="rooms">
														<span class="mem">6 Member</span> /
														<span class="room">3 Room</span>
													</td>
													<td>
														<div class="d-flex justify-content-center">
															<button type="button" class="btn btn-outline-success"><i
																	class="ri-information-line"></i></button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only"><i
																		class="ri-settings-3-line"></i></span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="token">1985</td>
													<td><img class="cat-thumb" src="assets/img/user/8.jpg"
															alt="clients Image"><span class="name">Moris Waites</span>
													</td>
													<td>19/12/2021</td>
													<td>25/12/2021</td>
													<td>Pan Card</td>
													<td class="success">Gpay</td>
													<td>$1560</td>
													<td class="type"><span>Deluxe : </span>104, <span>Junior :
														</span>401, 402</td>
													<td class="rooms">
														<span class="mem">10 Member</span> /
														<span class="room">4 Room</span>
													</td>
													<td>
														<div class="d-flex justify-content-center">
															<button type="button" class="btn btn-outline-success"><i
																	class="ri-information-line"></i></button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only"><i
																		class="ri-settings-3-line"></i></span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="token">1945</td>
													<td><img class="cat-thumb" src="assets/img/user/9.jpg"
															alt="clients Image"><span class="name">Sarah Moanees</span>
													</td>
													<td>25/02/2024</td>
													<td>25/02/2024</td>
													<td>Pan Card</td>
													<td class="pending">pending</td>
													<td>$400</td>
													<td class="type"><span>VIP : </span>104</td>
													<td class="rooms">
														<span class="mem">1 Member</span> /
														<span class="room">1 Room</span>
													</td>
													<td>
														<div class="d-flex justify-content-center">
															<button type="button" class="btn btn-outline-success"><i
																	class="ri-information-line"></i></button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only"><i
																		class="ri-settings-3-line"></i></span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="token">1865</td>
													<td><img class="cat-thumb" src="assets/img/user/10.jpg"
															alt="clients Image"><span class="name">Anne Ortha</span>
													</td>
													<td>28/02/2024</td>
													<td>05/03/2024</td>
													<td>Passport</td>
													<td class="active">Cash</td>
													<td>$800</td>
													<td class="type"><span>Deluxe : </span>304, 305</td>
													<td class="rooms">
														<span class="mem">7 Member</span> /
														<span class="room">2 Room</span>
													</td>
													<td>
														<div class="d-flex justify-content-center">
															<button type="button" class="btn btn-outline-success"><i
																	class="ri-information-line"></i></button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only"><i
																		class="ri-settings-3-line"></i></span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
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
		</div>

		<!-- Footer -->
		<footer>
			<div class="container-fluid">
				<div class="copyright">
					<p><span id="copyright_year"></span> © Luxurious, All rights Reserved.</p>
					<p>Design by MaraviyaInfotech.</p>
				</div>
			</div>
		</footer>

		<!-- Feature tools -->
		<div class="lh-tools-sidebar-overlay"></div>
		<div class="lh-tools-sidebar">
			<a href="javascript:void(0)" class="lh-tools-sidebar-toggle in-out">
				<i class="ri-settings-4-line"></i>
			</a>
			<div class="lh-bar-title">
				<h6>Tools</h6>
				<a href="javascript:void(0)" class="close-tools"><i class="ri-close-line"></i></a>
			</div>
			<div class="lh-tools-detail">
				<div class="lh-tools-block">
					<h3>Modes</h3>
					<div class="lh-tools-info">
						<div class="lh-tools-item mode active" data-lh-mode-tool="light">
							<img src="assets/img/tools/light.png" alt="light">
							<p>light</p>
						</div>
						<div class="lh-tools-item mode" data-lh-mode-tool="dark">
							<img src="assets/img/tools/dark.png" alt="dark">
							<p>dark</p>
						</div>
					</div>
				</div>
				<div class="lh-tools-block">
					<h3>Sidebar</h3>
					<div class="lh-tools-info">
						<div class="lh-tools-item sidebar active" data-sidebar-mode-tool="light">
							<img src="assets/img/tools/side-light.png" alt="light">
							<p>light</p>
						</div>
						<div class="lh-tools-item sidebar" data-sidebar-mode-tool="dark">
							<img src="assets/img/tools/side-dark.png" alt="dark">
							<p>dark</p>
						</div>
						<div class="lh-tools-item sidebar" data-sidebar-mode-tool="bg-1">
							<img src="assets/img/tools/side-bg-1.png" alt="background">
							<p>Bg-1</p>
						</div>
						<div class="lh-tools-item sidebar" data-sidebar-mode-tool="bg-2">
							<img src="assets/img/tools/side-bg-2.png" alt="background">
							<p>Bg-2</p>
						</div>
						<div class="lh-tools-item sidebar" data-sidebar-mode-tool="bg-3">
							<img src="assets/img/tools/side-bg-3.png" alt="background">
							<p>Bg-3</p>
						</div>
						<div class="lh-tools-item sidebar" data-sidebar-mode-tool="bg-4">
							<img src="assets/img/tools/side-bg-4.png" alt="background">
							<p>Bg-4</p>
						</div>
					</div>
				</div>
				<div class="lh-tools-block">
					<h3>Header</h3>
					<div class="lh-tools-info">
						<div class="lh-tools-item header active" data-header-mode="light">
							<img src="assets/img/tools/header-light.png" alt="light">
							<p>light</p>
						</div>
						<div class="lh-tools-item header" data-header-mode="dark">
							<img src="assets/img/tools/header-dark.png" alt="dark">
							<p>dark</p>
						</div>
					</div>
				</div>
				<div class="lh-tools-block">
					<h3>Backgrounds</h3>
					<div class="lh-tools-info">
						<div class="lh-tools-item bg active" data-bg-mode="default">
							<img src="assets/img/tools/bg-0.png" alt="default">
							<p>Default</p>
						</div>
						<div class="lh-tools-item bg" data-bg-mode="bg-1">
							<img src="assets/img/tools/bg-1.png" alt="bg-1">
							<p>Bg-1</p>
						</div>
						<div class="lh-tools-item bg" data-bg-mode="bg-2">
							<img src="assets/img/tools/bg-2.png" alt="bg-2">
							<p>Bg-2</p>
						</div>
						<div class="lh-tools-item bg" data-bg-mode="bg-3">
							<img src="assets/img/tools/bg-3.png" alt="bg-3">
							<p>Bg-3</p>
						</div>
						<div class="lh-tools-item bg" data-bg-mode="bg-4">
							<img src="assets/img/tools/bg-4.png" alt="bg-4">
							<p>Bg-4</p>
						</div>
						<div class="lh-tools-item bg" data-bg-mode="bg-5">
							<img src="assets/img/tools/bg-5.png" alt="bg-5">
							<p>Bg-5</p>
						</div>
					</div>
				</div>
				<div class="lh-tools-block">
					<h3>Box Design</h3>
					<div class="lh-tools-info">
						<div class="lh-tools-item box active" data-box-mode-tool="default">
							<img src="assets/img/tools/box-0.png" alt="default">
							<p>Default</p>
						</div>
						<div class="lh-tools-item box" data-box-mode-tool="box-1">
							<img src="assets/img/tools/box-1.png" alt="box-1">
							<p>Box-1</p>
						</div>
						<div class="lh-tools-item box" data-box-mode-tool="box-2">
							<img src="assets/img/tools/box-2.png" alt="box-2">
							<p>Box-2</p>
						</div>
						<div class="lh-tools-item box" data-box-mode-tool="box-3">
							<img src="assets/img/tools/box-3.png" alt="box-3">
							<p>Box-3</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<!-- Vendor Custom -->
	<script src="asset('themes/admin/assets/js/vendor/jquery-3.6.4.min.js') }}"></script>
	<script src="asset('themes/admin/assets/js/vendor/simplebar.min.js') }}"></script>
	<script src="asset('themes/admin/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
	<script src="asset('themes/admin/assets/js/vendor/apexcharts.min.js') }}"></script>
	<script src="asset('themes/admin/assets/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
	<script src="asset('themes/admin/assets/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>
	<!-- Data Tables -->
	<script src="asset('themes/admin/assets/js/vendor/jquery.datatables.min.js') }}"></script>
	<script src="asset('themes/admin/assets/js/vendor/datatables.bootstrap5.min.js') }}"></script>
	<script src="asset('themes/admin/assets/js/vendor/datatables.responsive.min.js') }}"></script>
	<!-- Caleddar -->
	<script src="asset('themes/admin/assets/js/vendor/jquery.simple-calendar.js') }}"></script>
	<!-- Date Range Picker -->
	<script src="asset('themes/admin/assets/js/vendor/moment.min.js') }}"></script>
	<script src="asset('themes/admin/assets/js/vendor/daterangepicker.js') }}"></script>
	<script src="asset('themes/admin/assets/js/vendor/date-range.js') }}"></script>

	<!-- Main Custom -->
	<script src="asset('themes/admin/assets/js/main.js') }}"></script>
	<script src="asset('themes/admin/assets/js/data/dashboard-chart-data.js') }}"></script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/luxurious-html-v22/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Dec 2024 10:34:20 GMT -->

</html>
