<?php 

?> 
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $pageTitle; ?></title>
		<meta charset="utf-8" />
		<meta type="description" content="<?php echo $description; ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							<div id="logo">
								<a href="index.html"><img src="assets/images/Weimer-Logo_Crest.png" alt="Weimer Insurance" width="100px"/></a>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li <?php if ($page == 'home') {echo 'class="current"'; ?>><a href="index.php">Home</a></li>
									<li <?php if ($page == 'services') {echo 'class="current"'; ?>>
										<a href="#">Services <i class="fa fa-arrow-down"></i></a>
										<ul>
											<li><a href="home-insurance.php">Home/Rental</a></li>
											<li><a href="auto-insurance.php">Auto</a></li>
											<li><a href="life-insurance.php">Life</a></li>
											<li><a href="commercial-insurance.php">Commercial</a></li>
										</ul>
									</li>
									<li <?php if ($page == 'partners') {echo 'class="current"'; ?>><a href="partners.php">Partners</a></li>
									<li <?php if ($page == 'quote') {echo 'class="current"'; ?>><a href="get-a-quote.php">Get a Quote</a></li>
									<li <?php if ($page == 'contact') {echo 'class="current"'; ?>><a href="contact.php">Contact</a></li>
								</ul>
							</nav>

					</header>
				</div>