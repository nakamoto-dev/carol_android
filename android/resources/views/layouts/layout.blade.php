<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Tutor Locator App" name="description">

		<meta name="keywords" content=""/>

		<!-- Title -->
		<title>{{ env('APP_NAME') }} </title>

		<!--Favicon -->
		
		<!--https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
		<link rel="icon" href="assets/images/brand/favicon.ico" type="image/x-icon"/>
         <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
		<!-- Bootstrap css -->
		<link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />

		<!-- Style css -->
		<link href="assets/css/style.css" rel="stylesheet" />

		<!-- Dark css -->
		<link href="assets/css/dark.css" rel="stylesheet" />
        <script src="https://unpkg.com/lightweight-charts/dist/lightweight-charts.standalone.production.js"></script>

		<!-- Skins css -->
		<link href="assets/css/skins.css" rel="stylesheet" />

		<!-- Animate css -->
		<link href="assets/css/animated.css" rel="stylesheet" />

		<!--Sidemenu css -->
        <link href="assets/css/sidemenu.css" rel="stylesheet">

		<!-- P-scroll bar css-->
		<link href="assets/plugins/p-scrollbar/p-scrollbar.css" rel="stylesheet" />

		<!---Icons css-->
		<link href="assets/css/icons.css" rel="stylesheet" />

		<!-- INTERNAl Select2 css -->
		<link href="assets/plugins/select2/select2.min.css" rel="stylesheet" />

		<!-- INTERNAL Morris Charts css -->
		<link href="assets/plugins/morris/morris.css" rel="stylesheet" />

		<!-- INTERNAL Data table css -->
		<link href="assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
		
		
		<style>
		    
		</style>

	</head>

	<body class="app sidebar-mini dark-mode">

		<!---Global-loader-->
		<div id="global-loader" >
			 <div class="spinner-grow text-primary justify-content-center mt-5" role="status">
                <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-secondary" role="status">
                <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-success" role="status">
                <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-danger" role="status">
                <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-warning" role="status">
                <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-info" role="status">
                <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-light" role="status">
                <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-dark" role="status">
                <span class="sr-only">Loading...</span>
                </div>
		</div>
		<!---/Global-loader-->

		<!-- Page -->
		<div class="page">
			<div class="page-main">

				<!--aside open-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar">
					<div class="app-sidebar__logo">
						<a class="header-brand" href="/home">
						
						</a>
					</div>
					<div class="app-sidebar3">
						<div class="app-sidebar__user">
							<div class="dropdown user-pro-body text-center">
								<div class="user-pic">
									<img src="assets/images/users/user.png" alt="user-img" class="avatar-xl rounded-circle mb-1">
								</div>
								<div class="user-info">
									<h5 class=" mb-0 font-weight-normal">{{Auth::user()->name}}</h5>
									<span class="text-muted app-sidebar__user-name text-sm">Welcome Onboard</span>
								</div>
							</div>
						</div>
						<ul class="side-menu">
							<li><h3>Wallet</h3></li>
							<li class="slide">
								<a class="side-menu__item"   href="/home">
									<span class="shape1"></span>
									<span class="shape2"></span>
									<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
									<span class="side-menu__label">Dashboard</span>
								</a>
							</li>
								<li class="slide">
								<a class="side-menu__item"   href="/tutors">
									<span class="shape1"></span>
									<span class="shape2"></span>
									<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
									<span class="side-menu__label">Check Tutors</span>
								</a>
							</li>	
						
							
							<li><h3>Manage Booking</h3></li>
								<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="#">
								<span class="shape1"></span>
								<span class="shape2"></span>
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
								<span class="side-menu__label">My Bookings</span><i class="angle fa fa-angle-right"></i></a>
								<ul class="slide-menu">
									<li><a href="/buy-oleum" class="slide-item">Check Bookings</a></li>
								    
								
								</ul>
							</li>
							



												
							


							<li><h3>My Chats</h3></li>
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="#">
								<span class="shape1"></span>
								<span class="shape2"></span>
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
								<span class="side-menu__label">My Chats </span><i class="angle fa fa-angle-right"></i></a>
								<ul class="slide-menu">
									<li><a href="/trades" class="slide-item">History</a></li>
									
								</ul>
							</li>
							<li><h3>My Account</h3></li>
								<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="#">
								<span class="shape1"></span>
								<span class="shape2"></span>
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
								<span class="side-menu__label">My Profile</span><i class="angle fa fa-angle-right"></i></a>
								<ul class="slide-menu">
									<li><a href="/profile" class="slide-item">Profile</a></li>
								
								</ul>
							</li>


							<li><h3>Logout</h3></li>
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="#">
								<span class="shape1"></span>
								<span class="shape2"></span>
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
								<span class="side-menu__label">Logout</span><i class="angle fa fa-angle-right"></i></a>
								<ul class="slide-menu">
									<li><a href="logout" class="slide-item" onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">Logout</a></li>
									
								</ul>
							</li>
					
						</ul>
					</div>
				</aside>
				<!--aside closed-->
				
					<div class="app-content">
					<div class="side-app">

						<!--app header-->
						<div class="app-header header">
							<div class="container-fluid">
								<div class="d-flex">
									
									<div class="app-sidebar__toggle" data-toggle="sidebar">
										<a class="open-toggle" href="#">
											<svg class="header-icon mt-1" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M21 11.01L3 11v2h18zM3 16h12v2H3zM21 6H3v2.01L21 8z"></path></svg>
										</a>
									</div>
									<div class="mt-1">
										<form class="form-inline">
											<div class="search-element">
												<input type="search" class="form-control header-search" placeholder="Search for everything…" aria-label="Search" tabindex="1">
												<button class="btn btn-primary-color" type="submit">
													<svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
														<path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
													</svg>
												</button>
											</div>
										</form>
									</div><!-- SEARCH -->
									<div class="d-flex order-lg-2 ml-auto">
										<a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch">
											<svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
												<path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
											</svg>
										</a>
										<div class="dropdown header-message">
											<a class="nav-link icon p-0" data-toggle="dropdown">
												<svg class="header-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 8l-8 5-8-5v10h16zm0-2H4l8 4.99z" opacity=".3"/><path d="M4 20h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM20 6l-8 4.99L4 6h16zM4 8l8 5 8-5v10H4V8z"/></svg>
												<span class="badge badge-success"><?php
												//get unread messages from the chat table
												$chats=App\Models\Chats::where('reciever_userid',Auth::user()->id)
												->where('status',1)
												->count();
												
												if($chats ==0){
												    echo "";
												}else{
												    echo $chats;
												}
												?></span>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow  animated p-0">
												<div class="message-menu">
												    
												    <?php
												    $chats=App\Models\Chats::where('reciever_userid',Auth::user()->id)
    												->where('status',1)
    												->orderBy('chatid','DESC')
    												->get();
												    ?>
												    
												    @foreach($chats as $chat)
													<a class="dropdown-item d-flex pb-3 border-bottom" href="https://oleumtrades.com/trade/{{$chat->tradecode}}">
														<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="../../assets/images/users/1.jpg"></span>
														<div>
															    <strong>
															    
															  
															    <?php
															    $senders=App\Models\User::where('id',$chat->sender_userid)->get();
															    
															    foreach ($senders as $sender){
															        echo $sender->username;
															    }
															    ?>
															    </strong> Has sent a message
															<div class="small text-muted">
															{{$chat->created_at}}
															</div>
														</div>
													</a>
													@endforeach
												
												</div>
												<a href="#" class="dropdown-item text-center">See all Messages</a>
											</div>
										</div>
										<div class="dropdown header-notify">
											<a class="nav-link icon p-0" data-toggle="dropdown">
												<svg class="header-icon" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false"><path opacity=".3" d="M12 6.5c-2.49 0-4 2.02-4 4.5v6h8v-6c0-2.48-1.51-4.5-4-4.5z"></path><path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-11c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2v-5zm-2 6H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6zM7.58 4.08L6.15 2.65C3.75 4.48 2.17 7.3 2.03 10.5h2a8.445 8.445 0 013.55-6.42zm12.39 6.42h2c-.15-3.2-1.73-6.02-4.12-7.85l-1.42 1.43a8.495 8.495 0 013.54 6.42z"></path></svg>
												<span class="pulse "></span>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow  animated p-0">
												<div class="notifications-menu">
													<a class="dropdown-item d-flex pb-4 border-bottom" href="#">
													
														<div>
															<span class="font-weight-bold"> We are constantly updating the ecosystem.</span>
															<div class="small text-muted d-flex">
															just now
															</div>
														</div>
													</a>
													
												</div>
												<a href="#" class="dropdown-item text-center">View all Notification</a>
											</div>
										</div>
										<div class="dropdown   header-fullscreen" >
											<a  class="nav-link icon full-screen-link p-0"  id="fullscreen-button">
												<svg class="header-icon" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false"><path d="M7,14 L5,14 L5,19 L10,19 L10,17 L7,17 L7,14 Z M5,10 L7,10 L7,7 L10,7 L10,5 L5,5 L5,10 Z M17,17 L14,17 L14,19 L19,19 L19,14 L17,14 L17,17 Z M14,5 L14,7 L17,7 L17,10 L19,10 L19,5 L14,5 Z"></path></svg>
											</a>
										</div>
										<div class="dropdown profile-dropdown">
											<a href="#" class="nav-link pr-0 pl-2 leading-none" data-toggle="dropdown">
												<span>
													<img src="/assets/images/users/user.png" alt="img" class="avatar avatar-md brround">
												</span>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated p-0">
												<div class="text-center border-bottom pb-4 pt-4">
													<a href="#" class="text-center user pb-0 font-weight-bold">{{Auth::user()->name}}</a>
													<p class="text-center user-semi-title mb-0">App user</p>
												</div>
												<a class="dropdown-item border-bottom" href="/profile">
													<i class="dropdown-icon mdi mdi-account-outline"></i> My Profile
												</a>
												
												<a class="dropdown-item border-bottom" href="#">
													<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
												</a>
												<a class="dropdown-item border-bottom" href="#">
													<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
												</a>
												<a class="dropdown-item border-bottom" href="">
													<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
												</a>
											
												<a class="dropdown-item border-bottom" href="#" onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
													<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
												</a>
													<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                 {{ csrf_field() }}
                                                </form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/app header-->

            @yield('content')
            
            </div>
            </div>
			<!-- end app-content-->
			</div>

			<!--Footer-->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
							Copyright © 2021 All rights reserved.
						</div>
					</div>
				</div>
			</footer>
			<!-- End Footer-->

		</div>
        

		<!-- Back to top -->
		<a href="#top" class="" id="back-to-top"><i class="fe fe-arrow-up "></i></a>

		<!-- Jquery js-->
		<script src="assets/js/jquery-3.5.1.min.js"></script>

		<!-- Bootstrap4 js-->
		<script src="assets/plugins/bootstrap/popper.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--Othercharts js-->
		<script src="assets/plugins/othercharts/jquery.sparkline.min.js"></script>

		<!-- Circle-progress js-->
		<script src="assets/js/circle-progress.min.js"></script>

		<!-- Jquery-rating js-->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>

		<!--Sidemenu js-->
		<script src="assets/plugins/sidemenu/sidemenu.js"></script>

		<!-- P-scroll js-->
		<script src="assets/plugins/p-scrollbar/p-scrollbar.js"></script>
		<script src="assets/plugins/p-scrollbar/p-scroll1.js"></script>

		<!-- INTERNAL ECharts js -->
		<script src="assets/plugins/echarts/echarts.js"></script>

		<!-- Peitychart js-->
		<script src="assets/plugins/peitychart/jquery.peity.min.js"></script>
		<script src="assets/plugins/peitychart/peitychart.init.js"></script>

		<!--INTERNAL  Apexchart js-->
		<script src="assets/js/apexcharts.js"></script>

		<!--Moment js-->
		<script src="assets/plugins/moment/moment.js"></script>

		<!-- INTERNAL Data tables js-->
		<script src="assets/plugins/datatable/js/jquery.dataTables.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.bootstrap4.js"></script>
		<script src="assets/plugins/datatable/dataTables.responsive.min.js"></script>
		<script src="assets/plugins/datatable/responsive.bootstrap4.min.js"></script>

		<!--INTERNAL Select2 js -->
		<script src="assets/plugins/select2/select2.full.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<!--INTERNAL Morris Charts js -->
		<script src="assets/plugins/morris/raphael-min.js"></script>
		<script src="assets/plugins/morris/morris.js"></script>

		<!--INTERNAL Chart js -->
		<script src="assets/plugins/chart/chart.bundle.js"></script>
		<script src="assets/plugins/chart/custom-chart.js"></script>

		<!-- INTERNAL Index js-->
		
		<script src="https://unpkg.com/lightweight-charts/dist/lightweight-charts.standalone.production.js"></script>
		<script src="assets/js/index1-dark.js"></script>
		<script src="https://oleumtrades.comchat/chat.js"></script>
	<script src="//code.tidio.co/gm9mgdz66mwvj1duzgqhrpa94rmpdesv.js" async></script>

		<!-- Loader js-->
	
		<script src="assets/js/loader.js"></script>

		<!-- Custom js -->
		<script src="assets/js/custom.js"></script>

	</body>
</html>

