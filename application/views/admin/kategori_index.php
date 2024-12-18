<style>
	.table-responsive {
		width: 100%;
		overflow-x: auto; /* Tabel dapat digulir jika melebihi layar */
	}

	.table {
		width: 100%; /* Lebarkan tabel agar memenuhi lebar kontainer */
		table-layout: fixed; /* Mengontrol lebar kolom secara proporsional */
	}

	.table th,
	.table td {
		word-wrap: break-word; /* Pecah teks panjang jika melebihi kolom */
		text-align: left; /* Rata kiri konten */
		padding: 12px; /* Jarak antar konten */
	}

	.card {
		width: 100%; /* Lebar penuh untuk card */
	}

	.card-body {
		padding: 15px; /* Memberikan ruang internal */
	}
</style>

<div class="content">
	<div class="page-header">
		<div class="page-title">
			<h4>Data Kategori</h4>
		</div>

		<div class="card-content">
			<div class="card-body">
				<div class="form-group">
					<!-- Button trigger for login form modal -->
					<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#inlineForm">
						Tambah Kategori
					</button>
				</div>
			</div>
		</div>

		<!-- Login Form Modal -->
		<div class="modal fade text-left" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33" style="display: none;" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="myModalLabel33">Tambah Kategori</h4>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<i data-feather="x"></i>
						</button>
					</div>
					<form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
						<div class="modal-body">
							<label>Nama Kategori:</label>
							<div class="form-group">
								<input type="text" placeholder="Nama" class="form-control" name="nama_kategori">
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-dark" data-bs-dismiss="modal">
								<i class="bx bx-x d-block d-sm-none"></i>
								<span class="d-none d-sm-block">Close</span>
							</button>
							<button type="submit" class="btn btn-primary ml-1">
								<i class="bx bx-check d-block d-sm-none"></i>
								<span class="d-none d-sm-block">Simpan</span>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="card">
		<div class="card-body">
			<div class="table-top">
				<div class="search-set">
					<div class="search-path">
						<a class="btn btn-filter" id="filter_search">
							<img src="<?= base_url('template') ?>/assets/img/icons/filter.svg" alt="img">
							<span>
								<img src="<?= base_url('template') ?>/assets/img/icons/closes.svg" alt="img">
							</span>
						</a>
					</div>
					<div class="search-input">
						<a class="btn btn-searchset">
							<img src="<?= base_url('template') ?>/assets/img/icons/search-white.svg" alt="img">
						</a>
						<div id="DataTables_Table_0_filter" class="dataTables_filter">
							<label>
								<input type="search" class="form-control form-control-sm" placeholder="Search..." id="searchBox">
							</label>
						</div>
					</div>
				</div>
			</div>

			<div class="table-responsive">
				<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
					<table class="table datanew dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
						<thead>
							<tr role="row">
								<th style="width: 5%;">
									<label class="checkboxs">
										<input type="checkbox">
									</label>
								</th>
								<th style="width: 5%;">No</th>
								<th style="width: 20%;">Nama Kategori Konten</th>
								<th style="width: 15%;">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; foreach ($kategori as $aa): ?>
								<tr>
									<td>
										<label class="checkboxs">
											<input type="checkbox">
										</label>
									</td>
									<td><?= $no++; ?></td>
									<td><?= htmlspecialchars($aa['nama_kategori']); ?></td>
									<td>
										<div class="d-flex align-items-center">
											<a class="me-3" href="<?= site_url('admin/kategori/hapus/' . $aa['id_kategori']); ?>">
												<img src="<?= base_url('template') ?>/assets/img/icons/delete.svg" alt="img">
											</a>
											<button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#editUserModal<?= $aa['id_kategori']; ?>">
												<img src="<?= base_url('template') ?>/assets/img/icons/edit.svg" alt="img">
											</button>
										</div>
									</td>
								</tr>

								<!-- Modal Edit Kategori -->
								<div class="modal fade" id="editUserModal<?= $aa['id_kategori']; ?>" tabindex="-1" aria-labelledby="editUserModalLabel<?= $aa['id_kategori']; ?>" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="editUserModalLabel<?= $aa['id_kategori']; ?>">Perbarui Kategori</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
													<i data-feather="x"></i>
												</button>
											</div>
											<form action="<?= base_url('admin/kategori/update') ?>" method="post">
												<input type="hidden" name="id_kategori" value="<?= $aa['id_kategori']; ?>">
												<div class="modal-body">
													<label>Nama Kategori Konten:</label>
													<div class="form-group">
														<input type="text" class="form-control" name="nama_kategori" value="<?= $aa['nama_kategori']; ?>">
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Simpan</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	// Fungsi pencarian tabel
	document.getElementById('searchBox').addEventListener('input', function () {
		let filter = this.value.toLowerCase(); // Ambil teks dari kotak pencarian dan ubah menjadi huruf kecil
		let rows = document.querySelectorAll('#DataTables_Table_0 tbody tr'); // Semua baris di tabel

		// Loop setiap baris
		rows.forEach(row => {
			let cells = row.querySelectorAll('td'); // Semua sel dalam baris
			let found = false;

			// Periksa setiap sel dalam baris
			cells.forEach(cell => {
				if (cell.textContent.toLowerCase().includes(filter)) {
					found = true; // Jika ada teks yang cocok
				}
			});

			// Tampilkan baris jika ditemukan, sembunyikan jika tidak
			row.style.display = found ? '' : 'none';
		});
	});
</script>
