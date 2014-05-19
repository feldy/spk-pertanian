<!DOCTYPE html>
<html lang="en">
<head>
	<title>Aplikasi SPK</title>
	<link rel="stylesheet" href="../lib/other/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="../lib/other/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="../lib/other/grid.css" type="text/css" media="screen">
	<link rel="stylesheet" href="../lib/other/bootstrap.css" type="text/css" media="screen">
	<script src="../lib/other/jquery-1.6.2.min.js" type="text/javascript"></script>
</head>
<body id="page2">
	<!--==============================header=================================-->
	<header>

		<div class="row-2">
			<div class="main">
				<div class="container_12">
					<div class="grid_9">
						<h1>
							<span>spk</span>
							<a class="logo" href="./">
								Metode <strong>AHP</strong>
							</a>
						</h1>
					</div>

					<div class="clear"></div>
				</div>
			</div>
		</div>
	</header>
	<!-- content -->
	<section id="content">
		<div class="bg-top">
			<div class="bg-top-2">
				<div class="bg">
					<div class="bg-top-shadow">
						<div class="main">
							<div class="box p3">
								<div class="padding">
									<div class="container_12">
										<div class="wrapper">
											<div class="grid_12">
												<div class="wrapper">
													<article class="grid_4 alpha">
														<div class="indent">
															<h3 class="prev-indent-bot2">Menu Utama</h3>
															<ul class="list-2">
																<li>
																	<a href="./">Halaman Depan</a>
																</li>
																<li>
																	<a href="?hal=data_alternatif">Data Alternatif</a>
																</li>
																<li>
																	<a href="?hal=data_kriteria">Data Kriteria</a>
																</li>
																<li>
																	<a href="?hal=ubah_password">Ubah Password</a>
																</li>
																<li class="last-item">
																	<a href="logout.php">Sign Out</a>
																</li>
															</ul>
															<br>
															<h3 class="prev-indent-bot2">Analisa</h3>
															<ul class="list-2">
																<li>
																	<a href="?hal=nilai_kriteria">Nilai Kriteria</a>
																</li>
																<li>
																	<a href="?hal=nilai_alternatif">Nilai Alternatif</a>
																</li>
																<li class="last-item">
																	<a href="?hal=hasil_alternatif">Hasil Alternatif</a>
																</li>
															</ul>

														</div>
													</article>
													<article class="grid_8 omega">
														<div class="indent-right">
															<script language="javascript">
																function DeleteConfirm(url){
																	if (confirm("Anda yakin akan menghapus data ini ?")){
																		window.location.href=url;
																	}
																}
															</script>

															<h3 class="p2">Data Alternatif</h3>
															<a href="?hal=update_alternatif" class="btn blue" style="float:right"> <i class="icon-plus"></i>
																Tambah data alternatif
															</a>
															<br />
															<br />
															<table class="table table-striped table-hover table-bordered">
																<thead>
																	<tr>
																		<th width="40">No</th>
																		<th width="160">Kode</th>
																		<th>Nama Alternatif</th>
																		<th width="90" align="right">&nbsp;</th>
																	</tr>
																</thead>
																<tbody>

																	<tr>
																		<td valign="top">1</td>
																		<td valign="top">A01</td>
																		<td valign="top">Hendry Sudjana</td>
																		<td align="center" valign="top">
																			<a href="?hal=update_alternatif&amp;id=1&amp;action=edit" class="btn"> <i class="icon-edit"></i>
																			</a>
																			<a href="#" onclick="DeleteConfirm('?hal=update_alternatif&amp;id=1&amp;action=delete');return(false);" class="btn disabled">
																				<i class="icon-trash"></i>
																			</a>
																		</td>
																	</tr>

																	<tr>
																		<td valign="top">2</td>
																		<td valign="top">A02</td>
																		<td valign="top">Mario Gerungan</td>
																		<td align="center" valign="top">
																			<a href="?hal=update_alternatif&amp;id=2&amp;action=edit" class="btn">
																				<i class="icon-edit"></i>
																			</a>
																			<a href="#" onclick="DeleteConfirm('?hal=update_alternatif&amp;id=2&amp;action=delete');return(false);" class="btn disabled">
																				<i class="icon-trash"></i>
																			</a>
																		</td>
																	</tr>

																	<tr>
																		<td valign="top">3</td>
																		<td valign="top">A03</td>
																		<td valign="top">Riko Hantono</td>
																		<td align="center" valign="top">
																			<a href="?hal=update_alternatif&amp;id=3&amp;action=edit" class="btn">
																				<i class="icon-edit"></i>
																			</a>
																			<a href="#" onclick="DeleteConfirm('?hal=update_alternatif&amp;id=3&amp;action=delete');return(false);" class="btn disabled">
																				<i class="icon-trash"></i>
																			</a>
																		</td>
																	</tr>

																	<tr>
																		<td valign="top">4</td>
																		<td valign="top">A04</td>
																		<td valign="top">Rizky Effendi</td>
																		<td align="center" valign="top">
																			<a href="?hal=update_alternatif&amp;id=4&amp;action=edit" class="btn">
																				<i class="icon-edit"></i>
																			</a>
																			<a href="#" onclick="DeleteConfirm('?hal=update_alternatif&amp;id=4&amp;action=delete');return(false);" class="btn disabled">
																				<i class="icon-trash"></i>
																			</a>
																		</td>
																	</tr>

																	<tr>
																		<td valign="top">5</td>
																		<td valign="top">A05</td>
																		<td valign="top">Rony Gunawan</td>
																		<td align="center" valign="top">
																			<a href="?hal=update_alternatif&amp;id=5&amp;action=edit" class="btn">
																				<i class="icon-edit"></i>
																			</a>
																			<a href="#" onclick="DeleteConfirm('?hal=update_alternatif&amp;id=5&amp;action=delete');return(false);" class="btn disabled">
																				<i class="icon-trash"></i>
																			</a>
																		</td>
																	</tr>
																</tbody>
															</table>
														</article>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--==============================footer=================================-->
	<footer>
		<div class="main">
			<div class="container_12">
				<div class="wrapper">
					<div class="grid_4">
						<div>
							&copy; 2013
							<a class="link color-3" href="#">JOGJALAB.COM</a>
						</div>
						<div>
							<a target="_blank" href="http://www.jogjalab.com/program">Contoh perhitungan SPK metode AHP</a>
						</div>
						<!-- {%FOOTER_LINK} -->
					</div>

				</div>
			</div>
		</div>
	</footer>
</body>
</html>