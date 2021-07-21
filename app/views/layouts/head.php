<?php

use App\Core\App;
use App\Core\Auth;
?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' href='<?= public_url('/favicon.ico') ?>' type='image/ico' />
	<title>
		<?= ucfirst($pageTitle) . " | " . App::get('config')['app']['name'] ?>
	</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
	<!-- Icons -->
	<link rel="stylesheet" href="<?= public_url('/assets/argon/vendor/nucleo/css/nucleo.css') ?>" type="text/css">
	<link rel="stylesheet" href="<?= public_url('/assets/argon/vendor/@fortawesome/fontawesome-free/css/all.min.css') ?>" type="text/css">

	<!-- Argon CSS -->
	<link rel="stylesheet" href="<?= public_url('/assets/argon/css/argon.css?v=1.2.0') ?>" type="text/css">
	<link rel="stylesheet" href="<?= public_url('/assets/argon/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') ?>" type="text/css">

	<style>
		body {
			background-color: #eef1f4;
			font-weight: 350;
		}

		.footer {
			background-color: #eef1f4;
		}

		.bg-primary {
			background-color: #0a9e6e !important;
		}

		.dataTables_wrapper {
			padding: 17px 0px 17px 0px;
		}

		.navbar-brand-img {
			max-height: 3rem !important;
		}
	</style>


	<script src="<?= public_url('/assets/argon/vendor/jquery/dist/jquery.min.js') ?>"></script>
	<!-- Core -->
	<script src="<?= public_url('/assets/argon/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?= public_url('/assets/argon/vendor/js-cookie/js.cookie.js') ?>"></script>
	<script src="<?= public_url('/assets/argon/vendor/jquery.scrollbar/jquery.scrollbar.min.js') ?>"></script>
	<script src="<?= public_url('/assets/argon/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') ?>"></script>
	<script src="<?= public_url('/assets/argon/vendor/datatables.net-bs4/js/jquery.dataTables.min.js') ?>"></script>
	<script src="<?= public_url('/assets/argon/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>

	<!-- Optional JS -->
	<script src="<?= public_url('/assets/argon/vendor/chart.js/dist/Chart.min.js') ?>"></script>
	<script src="<?= public_url('/assets/argon/vendor/chart.js/dist/Chart.extension.js') ?>"></script>

	<?php
	// this will auto include filepond css/js when adding filepond in public/assets
	if (file_exists('public/assets/filepond')) {
		require_once 'public/assets/filepond/filepond.php';
	}
	?>

</head>

<body>

	<!-- Sidenav -->
	<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
		<div class="scrollbar-inner">
			<!-- Brand -->
			<div class="sidenav-header  align-items-center">
				<a class="navbar-brand" href="javascript:void(0)">
					<?= App::get('config')['app']['name'] ?>
				</a>
			</div>
			<div class="navbar-inner">
				<!-- Collapse -->
				<div class="collapse navbar-collapse" id="sidenav-collapse-main">
					<!-- Nav items -->
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="<?= route('/home') ?>">
								<i class="ni ni-tv-2 text-primary"></i>
								<span class="nav-link-text">Dashboard</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= route('/project') ?>">
								<i class="ni ni-planet text-orange"></i>
								<span class="nav-link-text">Projects</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<!-- Main content -->
	<div class="main-content" id="panel">
		<!-- Topnav -->
		<nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom" style="position: sticky;top: 0;z-index: 100;">
			<div class="container-fluid">
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!-- Navbar links -->
					<ul class="navbar-nav align-items-center  ml-md-auto ">
						<li class="nav-item d-xl-none">
							<!-- Sidenav toggler -->
							<div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
								<div class="sidenav-toggler-inner">
									<i class="sidenav-toggler-line"></i>
									<i class="sidenav-toggler-line"></i>
									<i class="sidenav-toggler-line"></i>
								</div>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
						<li class="nav-item dropdown">
							<a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<div class="media align-items-center">
									<div class="media-body  ml-2  d-none d-lg-block">
										<span class="mb-0 text-sm  font-weight-bold"><?= Auth::user('fullname') ?> <i class="fas fa-caret-down ml-2"></i></span>
									</div>
								</div>
							</a>
							<div class="dropdown-menu  dropdown-menu-right ">
								<div class="dropdown-header noti-title">
									<h6 class="text-overflow m-0">Welcome!</h6>
								</div>
								<a href="<?= route('/profile') ?>" class="dropdown-item">
									<i class="ni ni-single-02"></i>
									<span>My profile</span>
								</a>
								<div class="dropdown-divider"></div>
								<a href="<?= route('/logout') ?>" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
									<i class="ni ni-user-run"></i>
									<span>Logout</span>
								</a>

								<form id="logout-form" action="<?= route('/logout') ?>" method="POST" style="display:none;">
									<?= csrf() ?>
								</form>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- Header -->
		<div class="header pb-6" style="z-index: -1;background-color: #eef1f4;">
			<div class="container-fluid">
				<div class="header-body">
					<div class="row align-items-center py-4">
						<div class="col-lg-6 col-7">
							<h6 class="h2 d-inline-block mb-0"><?= $pageTitle ?></h6>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Page content -->
		<div class="container-fluid mt--6">