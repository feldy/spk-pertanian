<!DOCTYPE html>
<html lang="en">
<head>
	<title>Aplikasi SPK</title>
	<link rel="stylesheet" href="lib/other/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="lib/other/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="lib/other/grid.css" type="text/css" media="screen">
	<link rel="stylesheet" href="lib/other/bootstrap.css" type="text/css" media="screen">
	<!-- <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css" type="text/css" media="screen"> -->
	<script src="lib/other/jquery-1.6.2.min.js" type="text/javascript"></script>
</head>
<?php 
	include 'config.php';
?>
<body id="page2">
	<!--==============================header=================================-->
	<header>

		<div class="row-2">
			<div class="main">
				<div class="container_12">
					<div class="grid_9">
						<h1>
							<!-- <span>spk</span> -->
							<a class="logo" href="./">
								 <strong>Coba-Coba ahh...</strong>
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
																	<a href="?hal=home">Halaman Depan</a>
																</li>
																<li>
																	<a href="?hal=data_daerah">Data Daerah</a>
																</li>
																<li>
																	<a href="?hal=data_alternatif">Data Alternatif</a>
																</li>
																<li>
																	<a href="?hal=data_kriteria">Data Kriteria</a>
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
															<?php include("content.php"); ?>
															<?php include("content_input.php"); ?>
														</div>
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
	</section>

	<!--==============================footer=================================-->
	<footer>
		<div class="main">
			<div class="container_12">
				<div class="wrapper">
					<div class="grid_4">
						<div>
							&copy; 2014 <br />
							Kelompok 1 <br />
							Sistem Pengambilan Keputusan
						</div>
						<div>
							<a href="#">@Universitas Mercubuana</a>
						</div>
						<!-- {%FOOTER_LINK} -->
					</div>

				</div>
			</div>
		</div>
	</footer>
</body>
</html>