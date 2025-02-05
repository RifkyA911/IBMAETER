<!doctype html>
<html lang="id">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Website Item Warehouse Management Framework C">
	<meta name="author" content="Dev Cakra, Merdin Risal, RifkyA911">
	<title><?= $title; ?></title>
	<link rel="icon" href="<?= base_url('img/icon/favicon.ico') ?>">
	<!-- Google Fonts Roboto -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
	<link rel="stylesheet" href="<?= base_url('../vendor/bootstrap-4.0.0/dist/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('fontawesome/css/all.css') ?>">
	<link rel="stylesheet" href="<?= base_url('../css/content.css') ?>" /> <!-- include cakra --->
</head>

<body>
	<!--Main layout-->
	<main>
		<div class="container pt-4">
			<section class="mb-4">
				<table width="100%" style="vertical-align: middle; font-size: 12pt; color: #000000;page-break-inside:avoid">
					<tr>
						<td width="15%" style="text-align: right;"><img src="<?= base_url('../img/icon/favicon-32x32.png') ?>" style="width:4em;height:4em;" alt="Logo-IB"></td>
						<td width="100%" colspan="6" style="text-align: center;">
							<div style="font-size: 13pt; font-weight: bold;">IBMAETER INDONESIA</div>
							<div style="font-weight: 200;">Website Inventaris Barang Gudang dan Manajemen Pekerja Terpadu</div>
							<div style="font-weight: 200;">Telp. 031-4614099 Fax. 5619082 / Email : ibmaeter@ibweb.ac.id</div>
						</td>
					</tr>
				</table>

				<div class="card" style="margin-top: 58px">
					<div class="card-header text-center py-3">
						<h3 class="mb-0 text-center">
							<center><strong>Tabel Status Perizinan Barang</strong></center>
						</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col">
								<?php if (session('role') == 0) : ?>
									<table style="font-size: 14px; width:100%;" border="1">
										<thead>
											<tr>
												<th>Waktu</th>
												<th>Pekerja</th>
												<th>Barang</th>
												<th>Request</th>
												<th>Stok</th>
												<th>Status</th>
												<th>Keterangan</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($log_item as $log) : ?>
												<tr>
													<td><?= $log['tgl']; ?></td>
													<td><?= $log['nama']; ?></td>
													<td><?= $log['nama_item']; ?></td>
													<td>
														<?php if ($log['request'] == "Masuk") : ?>
															<?= $log['request']; ?>
														<?php else : ?>
															<?= $log['request']; ?>
														<?php endif; ?>
													</td>
													<td style="width: 75px;">
														<?= $log['ubah_stok']; ?>
													</td>
													<td>
														<?php
														if ($log['status'] == 'Diterima') {
															echo "DITERIMA";
														} elseif ($log['status'] == 'Ditolak') {
															echo "DITOLAK";
														} else {
															echo "PENDING";
														}
														?>
													</td>
													<td><?= $log['ket']; ?></td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
									<!-- for pekerja -->
								<?php else : ?>
									<table style="font-size: 14px; width:100%;" border="1">
										<thead>
											<tr>
												<th>Waktu</th>
												<th>Pekerja</th>
												<th>Barang</th>
												<th>Request</th>
												<th>Stok</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($log_item as $log) : ?>
												<tr>
													<td><?= $log['tgl']; ?></td>
													<td><?= $log['nama']; ?></td>
													<td><?= $log['nama_barang']; ?></td>
													<td>
														<?php if ($log['request'] == "Masuk") : ?>
															<?= $log['request']; ?>
														<?php else : ?>
															<?= $log['request']; ?>
														<?php endif; ?>
													</td>
													<td style="width: 75px;">
														<?= $log['ubah_stok']; ?>
													</td>
													<td>
														<?php
														if ($log['status'] == 'Diterima') {
															echo "DITERIMA";
														} elseif ($log['status'] == 'Ditolak') {
															echo "DITOLAK";
														} else {
															echo "PROSES";
														}
														?>
													</td>
													<td><?= $log['ket']; ?></td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div><br>

				<table width="100%" style="vertical-align: middle; font-size: 12pt; color: #000000;page-break-inside:avoid">
					<tr>
						<td width="70%" colspan="6" style="text-align: center;"></td>
						<td width="30%" style="text-align: right;">
							<h4 style="margin-bottom: 30px;">
								Founder Ibmaeter,
							</h4>
						</td>
					</tr>
					<tr>
						<td width="70%" colspan="6" style="text-align: center;"></td>
						<td width="30%" style="text-align: right;" height="30">
							<img src="<?= base_url('../img/TTD_FOUNDER.png') ?>" style="float:right;margin-bottom:10px;width:10em;height:6em;" alt="TTD-Founder">
						</td>
					</tr>
					<tr>
						<td width="70%" colspan="6" style="text-align: center;"></td>
						<td width="30%" style="text-align: right;">
							<u>
								<h5>Alfha Fierly Firdaus</h5>
							</u>
						</td>
					</tr>
				</table>
			</section>
		</div><br>
	</main>

	<script>
		window.print();
		window.onafterprint = function() {
			window.location.href = "<?= base_url('menu/kelolabarang') ?>";
		}
	</script>
</body>

</html>