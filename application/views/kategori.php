<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Template Mo">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<title><?= $judul_halaman; ?></title>
	<!-- Bootstrap core CSS -->
	<link href="<?= base_url('front/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<!-- Additional CSS Files -->
	<link rel="stylesheet" href="<?= base_url('front/') ?>assets/css/fontawesome.css">
	<link rel="stylesheet" href="<?= base_url('front/') ?>assets/css/templatemo-edu-meeting.css">
	<link rel="stylesheet" href="<?= base_url('front/') ?>assets/css/owl.css">
	<link rel="stylesheet" href="<?= base_url('front/') ?>assets/css/lightbox.css">
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
						<a href="<?= base_url('home/index'); ?>" class="logo">
							<img src="<?= base_url('template') ?>/assets/img/blu.png" alt=""
								style="width: 100px; height: auto;">
						</a>
						<!-- ***** Logo End ***** -->
						<!-- ***** Menu Start ***** -->
						<ul class="nav">
							<li><a href="<?= base_url('home/index'); ?>" style="color: #000;">Home</a></li>
							<li><a href="<?= base_url('home/anime') ?>" style="color: #000;">Anime</a>
							</li>
							<li class="has-sub">
								<a href="javascript:void(0)"  class="active" style="color: #000;">Kategori</a>
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
								<div class="input-group">
									<input type="text" id="searchInput" class="form-control" placeholder="Search"
										oninput="searchNews();" style="border-radius: 50px;">
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

	<section class="meetings-page" id="meetings">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-12">
							<div class="filters">
								<ul>
									<li class="active"><?= $nama_kategori; ?></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="row grid">
								<?php
                                $items_per_page = 9;
                                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                                $offset = ($current_page - 1) * $items_per_page;

                                $konten = array_slice($konten, $offset, $items_per_page); // Slice konten for the current page
                                foreach ($konten as $kont) {
                                ?>
								<div class="col-lg-4 templatemo-item-col all att soon">
									<div class="meeting-item">
										<a href="<?= base_url('home/artikel/'.$kont['slug']) ?>">
											<div class="thumb" style="width: 100%; height: 200px; overflow: hidden;">
												<img src="<?= base_url('template/upload/konten/'.$kont['foto']) ?>"
													alt="Anime Thumbnail"
													style="width: 100%; height: 100%; object-fit: cover;">
											</div>
											<div class="down-content">
												<h4 class="sugimin"
													style="height: 50px; font-size: 16px; font-weight: bold; max-height: 115px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
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
												<p
													style="font-size: 14px; color: #000; line-height: 1.5; margin-bottom: 10px; text-align: left;">
													<span
														style="color: #8B0000;"><strong><em><?= $category_name; ?></em></strong></span><br>
													<?= substr($kont['keterangan'], 0, 70) . (strlen($kont['keterangan']) > 70 ? '...' : '') ?>.
												</p>
											</div>
										</a>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>

						<div class="col-lg-12">
							<div class="pagination">
								<ul>
									<?php
                                    $total_items = count($konten);
                                    $total_pages = ceil($total_items / $items_per_page);

                                    for ($page = 1; $page <= $total_pages; $page++) {
                                    ?>
									<li class="<?= $current_page == $page ? 'active' : '' ?>">
										<a href="?page=<?= $page ?>"><?= $page ?></a>
									</li>
									<?php } ?>
									<li><a href="?page=<?= $current_page + 1 ?>"><i class="fa fa-angle-right"></i></a>
									</li>
								</ul>
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
											<textarea rows="5" class="form-control"
												placeholder="Masukkan Saran"></textarea>
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

	<script src="<?= base_url('front/') ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('front/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('front/') ?>assets/js/custom.js"></script>
	<script>
		function searchNews() {
			var input, filter, news, titles, i, txtValue;
			input = document.getElementById('searchInput');
			filter = input.value.toUpperCase();
			news = document.getElementsByClassName('templatemo-item-col');
			for (i = 0; i < news.length; i++) {
				titles = news[i].getElementsByClassName('sugimin')[0];
				txtValue = titles.textContent || titles.innerText;
				if (txtValue.toUpperCase().indexOf(filter) > -1) {
					news[i].style.display = "";
				} else {
					news[i].style.display = "none";
				}
			}
		}

	</script>
</body>

</html>
