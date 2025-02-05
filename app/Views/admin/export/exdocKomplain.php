<?php

header('Content-Type: application/vnd.ms-word');
header('Content-Disposition: attachment; filename="Data-Komplain.doc"');

$tdStyle = "white-space: -moz-pre-wrap !important; white-space: -pre-wrap; white-space: -o-pre-wrap; white-space: pre-wrap; word-wrap: break-word; white-space: -webkit-pre-wrap; word-break: break-word; white-space: normal;"

?>

<!--Main layout-->
<main>
	<div class="container pt-4">
		<section class="mb-4">
			<table width="100%" style="vertical-align: middle; font-size: 12pt; color: #000000;page-break-inside:avoid">
				<tr>
					<td width="15%" style="text-align: right;"><img src="<?= base_url('../img/icon/favicon-32x32.png') ?>" style="width:4em;height:4em;" alt="Logo-IB"></td>
					<td width="100%" colspan="3" style="text-align: center;">
						<div style="font-size: 13pt; font-weight: bold;">IBMAETER INDONESIA</div>
						<div style="font-weight: 200;">Website Inventaris Barang Gudang dan Manajemen Pekerja Terpadu</div>
						<div style="font-weight: 200;">Telp. 031-4614099 Fax. 5619082 / Email : ibmaeter@ibweb.ac.id</div>
					</td>
				</tr>
			</table>

			<div class="card" style="margin-top: 58px">
				<div class="card-header text-center py-3">
					<h3 class="mb-0 text-center">
						<center><strong>Tabel Data Komplain User</strong></center>
					</h3>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col">
							<table style="font-size: 14px; width:100%;" border="1">
								<thead>
									<tr>
										<th>Pekerja</th>
										<th>Perihal Komplain</th>
										<th>Bukti</th>
										<th>Waktu Komplain</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($komplain as $k) : ?>
										<tr>
											<td><?= $k['nama']; ?></td>
											<td><?= $k['judul_komplain']; ?></td>
											<td>
												<?php if ($k['foto_komplain'] == "-") : ?>
													<b class="center">-</b>
												<?php else : ?>
													<a href="<?= base_url('../img/komplain/' . $k['foto_komplain']); ?>" target="_blank">
														<img src="<?= base_url('../img/komplain/' . $k['foto_komplain']); ?>" width="150" height="auto">
													</a>
												<?php endif; ?>
											</td>
											<td><?= $k['waktu_komplain']; ?></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div><br>

			<table width="100%" style="vertical-align: middle; font-size: 12pt; color: #000000;page-break-inside:avoid">
				<tr>
					<td width="70%" colspan="3" style="text-align: center;"></td>
					<td width="30%" style="text-align: right;">
						<h4 style="margin-bottom: 30px;">
							Founder Ibmaeter,
						</h4>
					</td>
				</tr>
				<tr>
					<td width="70%" colspan="3" style="text-align: center;"></td>
					<td width="30%" style="text-align: right;" height="30">
						<img src="<?= base_url('../img/TTD_FOUNDER.png') ?>" style="float:right;margin-bottom:10px;width:10em;height:6em;" alt="TTD-Founder">
					</td>
				</tr>
				<tr>
					<td width="70%" colspan="3" style="text-align: center;"></td>
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