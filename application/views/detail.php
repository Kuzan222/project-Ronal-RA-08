<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Template Mo">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

	<title><?= $judul; ?></title>

	<!-- Bootstrap core CSS -->
	<link href="<?= base_url('front/')?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


	<!-- Additional CSS Files -->
	<link rel="stylesheet" href="<?= base_url('front/')?>assets/css/fontawesome.css">
	<link rel="stylesheet" href="<?= base_url('front/')?>assets/css/templatemo-edu-meeting.css">
	<link rel="stylesheet" href="<?= base_url('front/')?>assets/css/owl.css">
	<link rel="stylesheet" href="<?= base_url('front/')?>assets/css/lightbox.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

	<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
</head>

<body>



	<!-- Sub Header -->
	<div class="sub-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-sm-8">
					<div class="left-content">
						<p><?= $judul; ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ***** Header Area Start ***** -->
	<header class="header-area header-sticky">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="main-nav">
						<!-- ***** Logo Start ***** -->
						<a href="<?= base_url('home/index'); ?>" class="logo">
							<img src="<?= base_url('template') ?>/assets/img/blu.png" alt="" style="width: 100px; height: auto;">
						</a>
						<!-- ***** Logo End ***** -->
						<!-- ***** Menu Start ***** -->
						<ul class="nav">
							<li><a href="<?= base_url('home/index'); ?>" style="color: #000;">Home</a></li>
							<li><a href="<?= base_url('home/anime') ?>" class="active" style="color: #000;">Anime</a></li>
							<li class="has-sub">
								<a href="javascript:void(0)" style="color: #000;">Kategori</a>
								<ul class="sub-menu">
									<?php foreach ($kategori as $kate): ?>
									<li><a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a>
									</li>
									<?php endforeach; ?>
								</ul>
							</li>
							<li class="scroll-to-section"><a href="#kaki" style="color: #000;">Contact Us</a></li>
							<li>
								<div class="input-group">
									<input type="text" id="searchInput" class="form-control" placeholder="Search" oninput="searchNews();"
										style="border-radius: 50px;">
								</div>
							</li>
							<li>
								<?php if($this->session->userdata('username')): ?>
							<li class="dropdown" style="cursor: pointer;">
								<a href="javascript:void(0);" style="color: #000;" onclick="toggleDropdown()"> <i
										class="fa-solid fa-user"></i> <?= $this->session->userdata('username') ?></a>
								<ul class="dropdown-menu" id="dropdownMenu" style="display: none;">
									<li><a href="<?= base_url('home/logout') ?>">Logout</a></li>
								</ul>
							</li>
							<?php else: ?>
							<li><a href="<?= base_url('registrasi') ?>"><i style="color: #000;" class="fa-solid fa-user-plus"></i></a>
							</li>
							<?php endif; ?>
							</li>
						</ul>

						<script>
							function toggleDropdown() {
								var menu = document.getElementById('dropdownMenu');
								if (menu.style.display === 'none' || menu.style.display === '') {
									menu.style.display = 'block';
								} else {
									menu.style.display = 'none';
								}
							}

						</script>

						<a class='menu-trigger'>
							<span>Menu</span>
						</a>
						<!-- ***** Menu End ***** -->
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ***** Header Area End ***** -->

	<section class="heading-page header-text" id="top">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2><?= $konten->judul; ?></h2>
				</div>
			</div>
		</div>
	</section>

	<section class="meetings-page" id="meetings">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-12">
							<div class="meeting-single-item">
								<div class="thumb">
									<img src="<?= base_url('template/upload/konten/'.$konten->foto)?>">
								</div>
								<div class="down-content">
									<h1><?= $konten->judul; ?></h1>
									<p><?= $konten->nama_kategori; ?></p>
									<p class="description">
										<?= $konten->keterangan; ?>
									</p>
									<div class="col-lg-12">
										<div class="share">
											<h5>Link Streaming HD:</h5>
											<ul>
												<li><a href="<?= $konten->link; ?>">Kuronime</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="main-button-red">
								<a href="<?= base_url('home/index') ?>">Back To Meetings List</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="contact-us" id="contact">
		<?php if (!empty($konfigurasi)): ?>
		<div class="footer" id="kaki">
			<div class="footer-content">
				<div class="footer-section logo-profil">
					<a href="<?= base_url(''); ?>" class="logo">
						<img src="<?= base_url('template') ?>/assets/img/blu.png" alt="Logo" style="width: 170px; height: auto;">
					</a>
					<?php if (!empty($konfigurasi->profil_website)): ?>
					<div class="profil-website">
						<p><?= htmlspecialchars($konfigurasi->profil_website); ?></p>
					</div>
					<?php endif; ?>
				</div>
				<div class="footer-section kontak">
					<p class="footer-section alamat">
						<?php if (!empty($konfigurasi->alamat)): ?>
						<p>
							<strong>Alamat Kami:</strong><br>
							<?= htmlspecialchars($konfigurasi->alamat); ?>
						</p>
						<?php endif; ?>
					</p>
					<p>
						<?php if (!empty($konfigurasi->email) || !empty($konfigurasi->no_wa)): ?>
						<strong>Kontak Kami:</strong><br>
						<?php if (!empty($konfigurasi->email)): ?>
						Email: <a
							href="mailto:<?= htmlspecialchars($konfigurasi->email); ?>"><?= htmlspecialchars($konfigurasi->email); ?></a><br>
						<?php endif; ?>
						<?php if (!empty($konfigurasi->no_wa)): ?>
						WhatsApp: <a href="https://wa.me/<?= preg_replace('/\D/', '', $konfigurasi->no_wa); ?>"
							target="_blank"><?= htmlspecialchars($konfigurasi->no_wa); ?></a><br>
						<?php endif; ?>
						<?php endif; ?>
					</p>
					<?php if (!empty($konfigurasi->facebook) || !empty($konfigurasi->instagram)): ?>
					<p class="social-media">
						<strong>Sosial Media:</strong><br>
						<?php if (!empty($konfigurasi->facebook)): ?>
						<a href="<?= htmlspecialchars($konfigurasi->facebook); ?>" target="_blank" title="Facebook">
							<i class="fa-brands fa-facebook-f" style="font-size: 1.5rem;"></i>
						</a>
						<?php endif; ?>
						<?php if (!empty($konfigurasi->instagram)): ?>
						<a href="<?= htmlspecialchars($konfigurasi->instagram); ?>" target="_blank" title="Instagram">
							<i class="fa-brands fa-instagram" style="font-size: 1.5rem;"></i>
						</a>
						<?php endif; ?>
					</p>
					<?php endif; ?>
					<p>
						<div class="css-58">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3954.8665393924443!2d110.9814990750029!3d-7.589501992425132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sen!2sid!4v1734433281528!5m2!1sen!2sid"
								referrerPolicy="no-referrer-when-downgrade" loading="lazy" height="200px" width="100%"
								allowfullscreen="" style="border-radius: 10px;"></iframe>
						</div>
					</p>
				</div>
				<div class="footer-section saran" style="margin-top: 0px;">
					<p>
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Masukkan Saran</h5>
							</div>
							<div class="card-body">
								<form action="#" method="post">
									<div class="form-group row">
										<label class="col-form-label col-md-2">Saran</label>
										<div class="col-md-10">
											<textarea rows="5" class="form-control" placeholder="Masukkan Saran"></textarea>
										</div>
									</div> <br>
									<div class="form-group row">
										<label class="col-form-label col-md-2">Tanggal</label>
										<div class="col-md-10">
											<input type="date" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-md-2">Nama</label>
										<div class="col-md-10">
											<input type="text" class="form-control" placeholder="Masukkan Nama">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-md-2">Email</label>
										<div class="col-md-10">
											<input type="email" class="form-control" placeholder="Masukkan Email">
										</div>
									</div>
									<button type="submit" class="btn btn-primary">Kirim</button>
								</form>
							</div>
						</div>
					</p>
				</div>
			</div>
		</div>
		<?php else: ?>
		<p>Data konfigurasi tidak tersedia.</p>
		<?php endif; ?>
	</section>

	<style>
		.profil-website p {
			color: #cccccc;
			font-size: 0.85rem;
			line-height: 1.6;
			font-family: 'Roboto', sans-serif;
			text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
		}

		.footer {
			background-color: rgb(29, 42, 54);
			color: rgb(0, 0, 0);
			padding: 20px;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
		}

		.footer-content {
			display: flex;
			justify-content: space-between;
			align-items: flex-start;
			flex-wrap: wrap;
			gap: 20px;
		}

		.footer-section {
			flex: 1;
			min-width: 200px;
			margin-bottom: 20px;
		}

		.logo-profil {
			text-align: center;
		}

		.logo img {
			margin-bottom: 10px;
		}

		.footer a {
			color: #00aced;
			text-decoration: none;
			transition: color 0.3s;
		}

		.footer a:hover {
			color: #ffd700;
		}

		.footer p {
			margin: 0;
			line-height: 1.8;
			font-family: 'Open Sans', sans-serif;
			text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
		}

		.footer strong {
			color: #ffd700;
			font-weight: bold;
			font-family: 'Open Sans', sans-serif;
			text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
		}

		.social-media {
			display: flex;
			gap: 2%;
			justify-content: center;
			margin-top: 70px;
			/* Memberikan jarak sekitar 70px ke bawah */
		}

		.social-media a {
			display: inline-block;
		}

		.footer-section.saran {
			margin-top: 20px;
		}

		.card {
			width: 100%;
			margin: 0 auto;
			border-radius: 10px;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
		}

		.card-body {
			display: flex;
			flex-direction: column;
			gap: 15px;
		}

		.form-group.row {
			display: flex;
			align-items: center;
			margin-bottom: 15px;
		}

		.col-md-2 {
			flex: 2;
		}

		.col-md-10 {
			flex: 8;
		}

	</style>


	<!-- Scripts -->
	<!-- Bootstrap core JavaScript -->
	<script src="<?= base_url('front/')?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('front/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<script src="<?= base_url('front/')?>assets/js/isotope.min.js"></script>
	<script src="<?= base_url('front/')?>assets/js/owl-carousel.js"></script>
	<script src="<?= base_url('front/')?>assets/js/lightbox.js"></script>
	<script src="<?= base_url('front/')?>assets/js/tabs.js"></script>
	<script src="<?= base_url('front/')?>assets/js/video.js"></script>
	<script src="<?= base_url('front/')?>assets/js/slick-slider.js"></script>
	<script src="<?= base_url('front/')?>assets/js/custom.js"></script>
	<script>
		//according to loftblog tut
		$('.nav li:first').addClass('active');

		var showSection = function showSection(section, isAnimate) {
			var
				direction = section.replace(/#/, ''),
				reqSection = $('.section').filter('[data-section="' + direction + '"]'),
				reqSectionPos = reqSection.offset().top - 0;

			if (isAnimate) {
				$('body, html').animate({
						scrollTop: reqSectionPos
					},
					800);
			} else {
				$('body, html').scrollTop(reqSectionPos);
			}

		};

		var checkSection = function checkSection() {
			$('.section').each(function () {
				var
					$this = $(this),
					topEdge = $this.offset().top - 80,
					bottomEdge = topEdge + $this.height(),
					wScroll = $(window).scrollTop();
				if (topEdge < wScroll && bottomEdge > wScroll) {
					var
						currentId = $this.data('section'),
						reqLink = $('a').filter('[href*=\\#' + currentId + ']');
					reqLink.closest('li').addClass('active').
					siblings().removeClass('active');
				}
			});
		};

		$('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
			e.preventDefault();
			showSection($(this).attr('href'), true);
		});

		$(window).scroll(function () {
			checkSection();
		});

	</script>
</body>


</body>

</html>
