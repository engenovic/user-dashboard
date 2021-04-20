<!DOCTYPE html>
<html>

<head>
	<meta content="text/html; charset=utf-8" http-equiv="content-type"><!-- /Added by HTTrack -->
	<title>Accountant</title>
	<style>
	#loader{transition:all .3s ease-in-out;opacity:1;visibility:visible;position:fixed;height:100vh;width:100%;background:#fff;z-index:90000}#loader.fadeOut{opacity:0;visibility:hidden}.spinner{width:40px;height:40px;position:absolute;top:calc(50% - 20px);left:calc(50% - 20px);background-color:#333;border-radius:100%;-webkit-animation:sk-scaleout 1s infinite ease-in-out;animation:sk-scaleout 1s infinite ease-in-out}@-webkit-keyframes sk-scaleout{0%{-webkit-transform:scale(0)}100%{-webkit-transform:scale(1);opacity:0}}@keyframes sk-scaleout{0%{-webkit-transform:scale(0);transform:scale(0)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}
	</style>
	<link href="style.css" rel="stylesheet">
</head>
<body class="app">
	<div id="loader">
		<div class="spinner"></div>
	</div>
	<script type="text/javascript">
	window.addEventListener('load', () => {
	       const loader = document.getElementById('loader');
	       setTimeout(() => {
	         loader.classList.add('fadeOut');
	       }, 300);
	     });
	</script>
	<div>
		<div class="sidebar">
			<div class="sidebar-inner">
				<div class="sidebar-logo">
					<div class="peers ai-c fxw-nw">
						<div class="peer peer-greed">
							<a class="td-n" href="dashboard.php">
							<div class="peers ai-c fxw-nw">
								<div class="peer">
									<div class="logo"><img alt="" src="assets/static/images/logo.png"></div>
								</div>
								<div class="peer peer-greed">
									<h5 class="lh-1 mB-0 logo-text">Accountant</h5>
								</div>
							</div></a>
						</div>
						<div class="peer">
							<div class="mobile-toggle sidebar-toggle">
								<a class="td-n" href="#"><i class="ti-arrow-circle-left"></i></a>
							</div>
						</div>
					</div>
				</div>
				<ul class="sidebar-menu scrollable pos-r">
					<li class="nav-item mT-30 active">
						<a class="sidebar-link" href="dashboard.php"><span class="icon-holder"><i class="c-blue-500 ti-home"></i></span> <span class="title">Dashboard</span></a>
					</li>
				
					<li class="nav-item dropdown">
						<a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-orange-500 fa fa-users"></i></span> <span class="title">Students</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
						<ul class="dropdown-menu">
							<li>
								<a class="sidebar-link" href="addstudent.php">New Students</a>
							</li>
							<li>
								<a class="sidebar-link" href="viewstudent.php">Existing Students</a>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-purple-500 fa fa-money"></i></span> <span class="title">Fees</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
						<ul class="dropdown-menu">
							<li>
								<a href="payfees.php">Pay fees</a>
							</li>
							<li>
								<a href="viewfees.php">Payments</a>
							</li>
						</ul>
					</li>
				
				
				</ul>
			</div>
		</div>
		<div class="page-container">
			<div class="header navbar">
				<div class="header-container">
					<ul class="nav-left">
						<li>
							<a class="sidebar-toggle" href="javascript:void(0);" id="sidebar-toggle"><i class="ti-menu"></i></a>
						</li>
						<li class="search-box">
							<a class="search-toggle no-pdd-right" href="javascript:void(0);"><i class="search-icon ti-search pdd-right-10"></i> <i class="search-icon-close ti-close pdd-right-10"></i></a>
						</li>
						<li class="search-input"><input class="form-control" placeholder="Search..." type="text"></li>
					</ul>
					<ul class="nav-right">
			
					
						<li class="dropdown">
							<a class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown" href="#">
							<div class="peer mR-10"><img alt="" class="w-2r bdrs-50p" src="../../../randomuser.me/api/portraits/men/10.jpg"></div>
							<div class="peer">
								<span class="fsz-sm c-grey-900">Accountant</span>
							</div></a>
							<ul class="dropdown-menu fsz-sm">
								<li>
									<a class="d-b td-n pY-5 bgcH-grey-100 c-grey-700" href="#"><i class="ti-settings mR-10"></i> <span>Setting</span></a>
								</li>
								<li>
									<a class="d-b td-n pY-5 bgcH-grey-100 c-grey-700" href="#"><i class="ti-user mR-10"></i> <span>Profile</span></a>
								</li>
								<li>
									<a class="d-b td-n pY-5 bgcH-grey-100 c-grey-700" href="#"><i class="ti-email mR-10"></i> <span>Messages</span></a>
								</li>
								<li class="divider" role="separator"></li>
								<li>
									<a class="d-b td-n pY-5 bgcH-grey-100 c-grey-700" href="../Admin/logout.php"><i class="ti-power-off mR-10"></i> <span>Logout</span></a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<main class="main-content bgc-grey-100">
				<div id="mainContent">
					<div class="row gap-20 masonry pos-r">
						<div class="masonry-sizer col-md-6"></div>
						<div class="masonry-item w-100">
							<div class="row gap-20">
								<div class="col-md-3">
									<div class="layers bd bgc-white p-20">
										<div class="layer w-100 mB-10">
											<h6 class="lh-1">Registered Students</h6>
										</div>
										<div class="layer w-100">
											<div class="peers ai-sb fxw-nw">
												<div class="peer peer-greed">
													<span class="fa fa-users"></span>
												</div>
												<div class="peer">
													<span>10</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="layers bd bgc-white p-20">
										<div class="layer w-100 mB-10">
											<h6 class="lh-1">Transactions</h6>
										</div>
										<div class="layer w-100">
											<div class="peers ai-sb fxw-nw">
												<div class="peer peer-greed">
													<span class="c-purple-800 fa fa-money"></span>
												</div>
												<div class="peer">
													<span>7</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="layers bd bgc-white p-20">
										<div class="layer w-100 mB-10">
											<h6 class="lh-1">Total Billed</h6>
										</div>
										<div class="layer w-100">
											<div class="peers ai-sb fxw-nw">
												<div class="peer peer-greed">
												<span class="c-purple-800 fa fa-money"></span>
												</div>
												<div class="peer">
													<span>30</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="layers bd bgc-white p-20">
										<div class="layer w-100 mB-10">
											<h6 class="lh-1">Total Paid</h6>
										</div>
										<div class="layer w-100">
											<div class="peers ai-sb fxw-nw">
												<div class="peer peer-greed">
												<span class="c-purple-800 fa fa-money"></span>
												</div>
												<div class="peer">
													<span>33</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

				
					
						
			
		
					</div>
				</div>
			</main>
			<footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
				<span>Copyright © 2021</span>
				<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13">
				</script> 
				<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());

				gtag('config', 'UA-23581568-13');
				</script>
			</footer>
		</div>
	</div>
	<script src="vendor.js" type="text/javascript">
	</script>
	<script src="bundle.js" type="text/javascript">
	</script>
</body>
</html>