<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="TemplateMo">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

	<title><?= $judul_halaman ?></title>

	<!-- Bootstrap core CSS -->
	<link href="<?= base_url('front/')?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Additional CSS Files -->
	<link rel="stylesheet" href="<?= base_url('front/')?>assets/css/fontawesome.css">
	<link rel="stylesheet" href="<?= base_url('front/')?>assets/css/templatemo-edu-meeting.css">
	<link rel="stylesheet" href="<?= base_url('front/')?>assets/css/owl.css">
	<link rel="stylesheet" href="<?= base_url('front/')?>assets/css/lightbox.css">
	<!-- Pastikan hanya menggunakan satu link Bootstrap CSS -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">




	<!-- Custom CSS to fix background -->
	<style>
		.judul-website {
			font-family: 'Playfair Display', serif;
			/* Elegan dan modern */
			font-size: 2.5rem;
			/* Ukuran besar */
			color: #fff;
			/* Warna putih */
			text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
			/* Efek bayangan */
			font-weight: bold;
			/* Penebalan font */
			margin-bottom: 20px;
			text-align: center;
			/* Teks rata tengah */
		}

		/* Background fixed for the main section */
		.main-banner {
			background-image: url('<?= base_url('front/')?>assets/images/mhd.jpg');
			background-size: cover;
			background-position: center;
			background-attachment: fixed;
			/* Ensures background stays fixed */
			height: 100vh;
			/* Full viewport height */
			position: relative;
			overflow: hidden;
		}

		.carousel-item {
			height: 100%;
			/* Ensure carousel takes full height */
			display: flex;
			align-items: center;
			/* Center content vertically */
			justify-content: center;
			/* Center content horizontally */
		}

		.carousel-caption {
			position: absolute;
			bottom: 20%;
			left: 50%;
			transform: translateX(-50%);
			color: #fff;
			text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
		}

	</style>
</head>

<body>

	<!-- ***** Header Area Start ***** -->
	<header class="header-area header-sticky"
		style="background-color: #ffffff; position: fixed; top: 0; width: 100%; z-index: 1000; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="main-nav">
						<!-- ***** Logo Start ***** -->
						<a href="<?= base_url(''); ?>" class="logo">
							<img src="<?= base_url('template') ?>/assets/img/blu.png" alt=""
								style="width: 100px; height: auto;">
						</a>

						<!-- ***** Logo End ***** -->
						<!-- ***** Menu Start ***** -->
						<ul class="nav">
							<li><a href="<?= base_url('home/index'); ?>" class="active" style="color: #000;">Home</a>
							</li>
							<li><a href="<?= base_url('home/anime') ?>" style="color: #000;">Anime</a></li>
							<li class="has-sub">
								<a href="javascript:void(0)" style="color: #000;">Kategori</a>
								<ul class="sub-menu">
									<?php foreach ($kategori as $kate): ?>
									<li><a
											href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a>
									</li>
									<?php endforeach; ?>
								</ul>
							</li>
							<li class="scroll-to-section"><a href="#kaki" style="color: #000;">Contact Us</a></li>
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
							<li><a href="<?= base_url('registrasi') ?>"><i style="color: #000;"
										class="fa-solid fa-user-plus"></i></a></li>
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

	<!-- ***** Main Banner Area Start ***** -->
	<!-- ***** Main Banner Area Start ***** -->
	<section class="section main-banner" id="top" data-section="section1">
		<img src="assets/images/mhd.jpg" alt="Background Image" id="bg-image" />

		<div class="video-overlay header-text">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="caption">
							<h6>Hai Bung</h6>
							<h2>Selamat datang di AnimeSport</h2>
							<p>
								<?php if (!empty($konfigurasi->profil_website)): ?>
								<div class="profil-website">
									<p><?= htmlspecialchars($konfigurasi->profil_website); ?></p>
								</div>
								<?php endif; ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ***** Main Banner Area End ***** -->

	<!-- ***** Main Banner Area End ***** -->
	<section class="services">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="owl-carousel owl-theme">
						<?php foreach ($caraousel as $c) { ?>
						<?php 
                        // Cari konten yang judulnya mirip dengan judul carousel
                        $matchingContent = null;
                        foreach ($konten as $kont) {
                            // Gunakan similar_text atau strpos untuk mencari kecocokan judul
                            if (strpos(strtolower($kont['judul']), strtolower($c['judul'])) !== false) {
                                $matchingContent = $kont;
                                break;
                            }
                        }
                        ?>
						<a href="<?= $matchingContent ? base_url('home/artikel/'.$matchingContent['slug']) : '#' ?>">
							<div class="item"
								style="width: 350px; height: 150px; background-image: url('<?= base_url('template/upload/caraousel/' . $c['foto']) ?>');">
								<div class="down-content">
									<h4><?= $c['judul'] ?></h4>
								</div>
							</div>
						</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Tambahkan JavaScript di bawah ini -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				items: 3, // Menampilkan 3 item sekaligus
				margin: 20,
				loop: true,
				autoplay: true,
				autoplayTimeout: 2000,
				autoplayHoverPause: true,
				nav: false,
				dots: false,
				responsive: {
					0: {
						items: 1
					},
					600: {
						items: 2
					},
					1000: {
						items: 3
					}
				}
			});
		});

	</script>

	<style>
		.horizontal-konten {
			display: flex;
			gap: 20px;
			overflow-x: auto;
			padding: 10px 0;
			scrollbar-width: thin;
		}

		.horizontal-konten .item {
			flex: 0 0 auto;
			width: 350px;
			/* Ukuran sedikit lebih lebar */
			height: 150px;
			/* Ukuran lebih pendek */
			background-size: cover;
			background-position: center;
			border-radius: 10px;
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
			display: flex;
			align-items: flex-end;
			justify-content: center;
			color: #fff;
			text-align: center;
			position: relative;
			overflow: hidden;
		}

		.horizontal-konten .down-content {
			background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.7) 100%);
			padding: 10px;
			width: 100%;
			box-sizing: border-box;
			text-align: center;
		}

		.horizontal-konten .down-content h4 {
			margin: 0;
			font-size: 16px;
			font-weight: bold;
			color: #fff;
			text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.8);
		}

		.horizontal-konten::-webkit-scrollbar {
			height: 6px;
		}

		.horizontal-konten::-webkit-scrollbar-thumb {
			background: rgba(0, 0, 0, 0.5);
			border-radius: 3px;
		}

		.horizontal-konten::-webkit-scrollbar-track {
			background: rgba(0, 0, 0, 0.1);
		}

	</style>

	<section class="our-courses" id="courses">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-heading">
						<h2>List Anime</h2>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="owl-courses-item owl-carousel">
						<?php foreach ($konten as $kont) { ?>
						<div class="item">
							<a href="<?= base_url('home/artikel/'.$kont['slug']) ?>">
								<div class="animenibos"
									style="display: flex; flex-direction: column; margin-right: 30px; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
									<div class="thumb" style="width: 100%; height: 200px; overflow: hidden;">
										<img src="<?= base_url('template/upload/konten/'.$kont['foto'])?>"
											alt="Anime Thumbnail" style="width: 100%; height: 100%; object-fit: cover;">
									</div>
									<div class="down-content" style="padding: 10px; text-align: center;">
										<h4 class="sugimin"
											style="font-size: 16px; font-weight: bold; max-height: 115px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
											<?= $kont['judul'] ?>
										</h4>
										<?php 
									$category_name = ''; // Default value if no category is found
									foreach ($kategori as $kate) {
										if ($kate['id_kategori'] == $kont['id_kategori']) {
											$category_name = $kate['nama_kategori'];
											break;
										}
									}
									?>
										<p style="font-size: 14px; color: #666; line-height: 1.5; margin-bottom: 10px;">
											<?= $category_name; ?>
											<br><?= substr($kont['keterangan'], 0, 70) . (strlen($kont['keterangan']) > 70 ? '...' : '') ?>.
										</p>
									</div>
								</div>
							</a>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<style>
		.animenibos {
			width: 100%;
		}

		.sugimin {
			height: 105px;
		}

	</style>

	<section class="contact-us" id="contact">
		<?php if (!empty($konfigurasi)): ?>
		<div class="footer" id="kaki">
			<div class="footer-content">
				<div class="footer-section logo-profil">
					<a href="<?= base_url(''); ?>" class="logo">
						<img src="<?= base_url('template') ?>/assets/img/blu.png" alt="Logo"
							style="width: 170px; height: auto;">
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
							<div class="css-58">
								<iframe
									src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3954.8665393924443!2d110.9814990750029!3d-7.589501992425132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sen!2sid!4v1734433281528!5m2!1sen!2sid"
									referrerPolicy="no-referrer-when-downgrade" loading="lazy" height="200px"
									width="100%" allowfullscreen="" style="border-radius: 10px;"></iframe>
							</div>
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
				</div>
				<div class="footer-section saran" style="margin-top: 0px;">
					<p>
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Masukkan Saran</h5>
							</div>
							<div class="card-body">
								<form action="<?= base_url('saran') ?>" method="post">
									<div class="form-group row">
										<label class="col-form-label col-md-2">Saran</label>
										<div class="col-md-10">
											<textarea name="saran" rows="5" class="form-control"
												placeholder="Masukkan Saran"></textarea>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-md-2">Tanggal</label>
										<div class="col-md-10">
											<input type="date" name="tanggal" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-md-2">Nama</label>
										<div class="col-md-10">
											<input type="text" name="nama" class="form-control"
												placeholder="Masukkan Nama">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-md-2">Email</label>
										<div class="col-md-10">
											<input type="email" name="email" class="form-control"
												placeholder="Masukkan Email">
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
			color: #ffffff;
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
		$('.nav li:first').addClass('active');

		var showSection = function showSection(section, isAnimate) {
			var direction = section.replace(/#/, ''),
				reqSection = $('.section').filter('[data-section="' + direction + '"]'),
				reqSectionPos = reqSection.offset().top - 0;

			if (isAnimate) {
				$('body, html').animate({
					scrollTop: reqSectionPos
				}, 800);
			} else {
				$('body, html').scrollTop(reqSectionPos);
			}
		};

		var checkSection = function checkSection() {
			$('.section').each(function () {
				var $this = $(this),
					topEdge = $this.offset().top - 80,
					bottomEdge = topEdge + $this.height(),
					wScroll = $(window).scrollTop();
				if (topEdge < wScroll && bottomEdge > wScroll) {
					var currentId = $this.data('section'),
						reqLink = $('a').filter('[href*=\\#' + currentId + ']');
					reqLink.closest('li').addClass('active').siblings().removeClass('active');
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

</html>
