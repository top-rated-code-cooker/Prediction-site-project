<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="title" content="Raroin" />
		<meta name="description" content="Premium NFT marketplace theme" />
		<meta
			name="keywords"
			content="bootstrap, creabik, ThemeForest, bootstrap5, agency theme, saas
			theme, sass, html5"
			/>
		<meta name="robots" content="index, follow" />
		<meta name="language" content="English" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title> Home </title>
		<meta name="msapplication-TileColor" content="#da532c" />
		<meta name="theme-color" content="#ffffff" />
		<!-- 🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈 STYLES -->
		<link rel="stylesheet" href="assets/css/plugins/remixicon.css" />
		<link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
		<link rel="stylesheet" href="assets/css/toastr.css">
		<link rel="stylesheet" href="assets/css/style.css" />
		<link rel="stylesheet" href="assets/css/custom.css" />
	</head>
	<body class="body">
		<div class="overflow-hidden">
			<header class="header__1 js-header" id="header">
				<div class="container">
					<div class="wrapper js-header-wrapper">
						<div class="header__logo">
							<a href="/">
								<img class="header__logo" id="logo_js" src="assets/img/logos/Logo.svg" alt="logo" />
							</a>
						</div>
			
						<!-- ==================  -->
						<div class="header__menu">
							<ul class="d-flex space-x-20">
								<li> <a class="" href="{{ url('/home') }}"><i class="ri-home-3-line"></i>Home</a> </li>
								<li class="has_popup">
									<a class="" href="#"><i class="ri-line-chart-line"></i> Predictions</a>
									<ul class="menu__popup space-y-20">
										<li><a href="{{ url('/btc') }}"><i class="ri-line-chart-line"></i> BTC/USDT</a></li>
										<li><a href="{{ url('/bnb') }}"><i class="ri-line-chart-line"></i> BNB/USDT</a></li>
										<li><a href="{{ url('/eth') }}"><i class="ri-line-chart-line"></i> ETH/USDT</a></li>
									</ul>
								</li>
								<li> <a class="" href="{{ url('/events') }}"> <i class="ri-calendar-event-line"></i>Events</a> </li>
								<li> <a class="" href="{{ url('/referral') }}"> <i class="ri-user-follow-line"></i>Refferal</a> </li>
								<li class="has_popup2">
									<a class="" href="#"><i class="ri-contacts-line"></i>Social Media</i></a>
									<ul class="menu__popup2 space-y-20 social-box">
										<li>
											<a href="#"><i class="ri-contacts-line"></i> Telegram</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="header__btns">
							<a class="btn btn-grad btn-sm connect-wallet" href="javascript:"> <i class="ri-wallet-3-line"></i> Connect wallet</a>
						</div>
						<div class="header__burger js-header-burger"></div>
			
						<div class="header__mobile js-header-mobile">
							<div class="header__mobile__menu space-y-40">
								<div class="text-right">
									<a class="btn btn-grad btn-sm connect-wallet" href="javascript:">Connect wallet</a>
								</div>
								<ul class="d-flex space-y-20">
									<li><a class="" href="{{ url('/home') }}"> <i class="ri-home-3-line"></i>Home</a> </li>
									<li><a class="" href="{{ url('/btc') }}"> <i class="ri-line-chart-line"></i>BTC/USDT Prediction</a></li>
									<li><a class="" href="{{ url('/bnb') }}"> <i class="ri-line-chart-line"></i>BNB/USDT Prediction</a></li>
									<li><a class="" href="{{ url('/eth') }}"> <i class="ri-line-chart-line"></i>ETH/USDT Prediction</a></li>
									<li><a class="" href="{{ url('/events') }}"> <i class="ri-calendar-event-line"></i>Events</a> </li>
									<li><a class="" href="{{ url('/referral') }}"> <i class="ri-user-follow-line"></i>Refferal</a> </li>
									<li><a class="" href="#"> <i class="ri-contacts-line"></i>Telegram</a> </li>
								</ul>
								
							</div>
						</div>
					</div>
				</div>
			</header>