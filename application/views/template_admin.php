<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="POS - Bootstrap Admin Template">
	<meta name="keywords"
		content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
	<meta name="author" content="Dreamguys - Bootstrap Admin Template">
	<meta name="robots" content="noindex, nofollow">
	<title><?= $judul_halaman ?></title>

	<link rel="shortcut icon" type="image/x-icon"
		href="<?= base_url('template') ?>/assets/img/favicon.jpg">

	<link rel="stylesheet" href="<?= base_url('template') ?>/assets/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?= base_url('template') ?>/assets/css/animate.css">

	<link rel="stylesheet" href="<?= base_url('template') ?>/assets/css/dataTables.bootstrap4.min.css">

	<link rel="stylesheet" href="<?= base_url('template') ?>/assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?= base_url('template') ?>/assets/plugins/fontawesome/css/all.min.css">

	<link rel="stylesheet" href="<?= base_url('template') ?>/assets/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</head>

<body>
	<!-- <div id="global-loader">
		<div class="whirly-loader"> </div>
	</div> -->

	<div class="main-wrapper">

		<div class="header">

			<div class="header-left active">
				<a href="<?= base_url(''); ?>" class="logo">
					<img src="<?= base_url('template') ?>/assets/img/blu.png" alt="">
				</a>
				<a href="<?= base_url(''); ?>" class="logo-small">
					<img src="<?= base_url('template') ?>/assets/img/oo.png" alt="">
				</a>
				<a id="toggle_btn" href="javascript:void(0);">
				</a>
			</div>

			<a id="mobile_btn" class="mobile_btn" href="#sidebar">
				<span class="bar-icon">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</a>

			<ul class="nav user-menu">
				<li class="nav-item">
					<div class="top-nav-search">
						<a href="javascript:void(0);" class="responsive-search">
							<i class="fa fa-search"></i>
						</a>
						<form action="#">
							<div class="searchinputs">
								<input type="text" placeholder="Search Here ...">
								<div class="search-addon">
									<span><img src="<?= base_url('template') ?>/assets/img/icons/closes.svg"
											alt="img"></span>
								</div>
							</div>
							<a class="btn" id="searchdiv"><img
									src="<?= base_url('template') ?>/assets/img/icons/search.svg" alt="img"></a>
						</form>
					</div>
				</li>

				<li class="nav-item dropdown has-arrow main-drop">
					<a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
						<span class="user-img"><img src="<?= base_url('template') ?>/assets/img/profiles/avator1.jpg"
								alt="">
							<span class="status online"></span></span>
					</a>
					<div class="dropdown-menu menu-drop-user">
						<div class="profilename">
							<div class="profileset">
								<span class="user-img"><img
										src="<?= base_url('template') ?>/assets/img/profiles/avator1.jpg" alt="">
									<span class="status online"></span></span>
								<div class="profilesets">
									<h6><?= $this->session->userdata('nama'); ?></h6>
									<h5><?= $this->session->userdata('level'); ?></h5>
								</div>
							</div>
							<hr class="m-0">
							<a class="dropdown-item logout pb-0" href="<?= base_url('admin/home/logout'); ?>"><img
									src="<?= base_url('template') ?>/assets/img/icons/log-out.svg" class="me-2"
									alt="img">Logout</a>
						</div>
					</div>
				</li>
			</ul>



			<div class="dropdown mobile-user-menu">
				<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
					aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
				<div class="dropdown-menu dropdown-menu-right">
					<a class="dropdown-item" href="profile.html">My Profile</a>
					<a class="dropdown-item" href="generalsettings.html">Settings</a>
					<a class="dropdown-item" href="signin.html">Logout</a>
				</div>
			</div>

		</div>


		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="<?= ($this->uri->segment(2) == 'home') ? 'active' : '' ?>">
							<a href="<?= base_url('admin/home') ?>">
								<i class="bi bi-house-door"></i><span>Dashboard</span>
							</a>
						</li>
						<li class="<?= ($this->uri->segment(2) == 'caraousel') ? 'active' : '' ?>">
							<a href="<?= base_url('admin/caraousel') ?>">
								<i class="bi bi-calendar-event"></i><span>Carousel</span>
							</a>
						</li>
						<li class="<?= ($this->uri->segment(2) == 'kategori') ? 'active' : '' ?>">
							<a href="<?= base_url('admin/kategori') ?>">
								<i class="bi bi-basket3"></i><span>Kategori Konten</span>
							</a>
						</li>
						<li class="<?= ($this->uri->segment(2) == 'konten') ? 'active' : '' ?>">
							<a href="<?= base_url('admin/konten') ?>">
								<i class="bi bi-cup-straw"></i><span>Konten</span>
							</a>
						</li>
						<?php if($this->session->userdata('level')=='Admin'){ ?>
						<li class="<?= ($this->uri->segment(2) == 'user') ? 'active' : '' ?>">
							<a href="<?= base_url('admin/user') ?>">
								<i class="bi bi-people"></i><span>User</span>
							</a>
						</li>
						
						<li class="<?= ($this->uri->segment(2) == 'makanan') ? 'active' : '' ?>">
							<a href="<?= base_url('admin/konfigurasi') ?>">
								<i class="bi bi-bag"></i><span>Konfigurasi</span>
							</a>
						</li>
						<?php } ?> 
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="page-wrapper">
		<div class="content">
			<div class="row">
				<div>
					<?= $contents; ?>
				</div>
			</div>
		</div>
	</div>

	<script src="<?= base_url('template') ?>/assets/js/jquery-3.6.0.min.js"></script>

	<script src="<?= base_url('template') ?>/assets/js/feather.min.js"></script>

	<script src="<?= base_url('template') ?>/assets/js/jquery.slimscroll.min.js"></script>

	<script src="<?= base_url('template') ?>/assets/js/jquery.dataTables.min.js"></script>
	<script src="<?= base_url('template') ?>/assets/js/dataTables.bootstrap4.min.js"></script>

	<script src="<?= base_url('template') ?>/assets/js/bootstrap.bundle.min.js"></script>

	<script src="<?= base_url('template') ?>/assets/plugins/apexchart/apexcharts.min.js"></script>
	<script src="<?= base_url('template') ?>/assets/plugins/apexchart/chart-data.js"></script>

	<script src="<?= base_url('template') ?>/assets/js/script.js"></script>

	<script>
		$('#ngilang').delay('slow').slideDown('slow').delay(10000).slideUp(600);

	</script>
</body>

</html>
