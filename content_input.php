<?php if ($_GET["hal"] == "crud_daerah") { 
	$id = "";
	$action = "";
	$kode = "";
	$nama = "";
	$alamat = "";
	if (isset($_POST["save"])) {
		$id = $_POST["id"];
		$action = $_POST["action"];
		$kode = $_POST["kode"];
		$nama = $_POST["nama"];
		$alamat = $_POST["alamat"];
		if ($id == "") { //add new
			$x = mysql_query("INSERT INTO m_daerah VALUES ('$kode','$nama','$alamat')") or die (mysql_error());
		} else {
			$x = mysql_query("UPDATE m_daerah SET nama = '$nama', alamat = '$alamat' where kode = '$kode'") or die (mysql_error());			
		}
		echo "<script> window.location.href='?hal=data_daerah'</script>";
	} else if ($_GET["action"] == "edit") {
		$action = "";
		$kode = $_GET["id"];

		$s = mysql_query("SELECT * FROM m_daerah where kode = '$kode'") or die (mysql_error());
		$as = mysql_fetch_array($s);
		$nama = $as['nama'];
		$alamat = $as['alamat'];
	} else if ($_GET["action"] == "delete") { 
		$kode = $_GET["id"];
		$x = mysql_query("DELETE FROM m_daerah where kode = '$kode'") or die (mysql_error());
		echo "<script> window.location.href='?hal=data_daerah'</script>";
	}


?>
<form action="?hal=crud_daerah" name="" method="post" enctype="multipart/form-data">
	<input name="id" type="hidden" value="<?php echo $kode;?>">
	<input name="action" type="hidden" value="add">

	<table width="100%" border="0" cellspacing="4" cellpadding="4" class="tabel_reg">
		<tr>
			<td width="120">
				Kode
				<span class="required">*</span>
			</td>
			<td>
				<input name="kode" type="text" size="40" value="<?php echo $kode;?>" maxlength="5" uppercase="true" class="m-wrap large"></td>
		</tr>
		<tr>
			<td>
				Nama Daerah
				<span class="required">*</span>
			</td>
			<td>
				<input name="nama" type="text" size="40" value="<?php echo $nama;?>" class="m-wrap large"></td>
		</tr>
		<tr>
			<td>
				Alamat
				<span class="required">*</span>
			</td>
			<td>
				<textarea name="alamat" style="height: 200px;" class="m-wrap large"><?php echo $alamat;?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type="submit" name="save" class="btn blue"> <i class="icon-ok"></i>
					Simpan
				</button>
				<button type="button" name="cancel" class="btn" onclick="location.href='?hal=data_daerah'">Batal</button>
			</td>
		</tr>
	</table>
</form>
<?php } else if ($_GET["hal"] == "nilai_daerah") { 
	$kode = $_POST['kode_daerah'];
?>
	<form action="?hal=nilai_daerah" name="" method="post" enctype="multipart/form-data">
		<!-- <input name="id" type="hidden" value=""> -->
		<input name="action" type="hidden" value="add">
		
		<hr />
		<table width="100%" border="0" cellspacing="4" cellpadding="4" class="tabel_reg">
			<tr>
				<td width="200">
					Pilih Daerah :
					<span class="required">*</span>
				</td>
				<td>
					<select name="kode_daerah" onchange="submit()">
						<option value='' selected='selected'>Pilih</option>
						<?php
							$x = mysql_query("SELECT * FROM m_daerah") or die(mysql_error());
							while ($ax=mysql_fetch_array($x)) {
								$str = "";
								if ($kode == $ax["nama"]) {
									$str = "selected=selected";
								}
								echo '<option '.$str.'value="'.$ax['nama'].'">'.$ax['nama'].'</option>';
							}
						?>
					</select>	
				</td>
			</tr>
			<tr>
				<td colspan="2"><hr /></td>
			</tr>
			<?php 
				if ($kode == "") {
					
				} else {
					if (isset($_POST['save'])) {
					
						// $suhu = $_POST['suhu'];
						// $drainase = $_POST['drainase'];
						// $tekstur = $_POST['tekstur'];
						// $kedalaman = $_POST['kedalaman'];
						// $ph = $_POST['ph'];
						// $p205 = $_POST['p205'];
						// $k20 = $_POST['k20'];
						// $salinitas = $_POST['salinitas'];
						// $kemiringan = $_POST['kemiringan'];
						// $batuan = $_POST['batuan'];
						// $singkapan = $_POST['singkapan'];
						// mysql_query("INSERT INTO m_nilai_daerah VALUES ('$kode','$suhu','$drainase','$tekstur','$kedalaman','$ph','$p205','$k20','$salinitas','$kemiringan','$batuan','$singkapan')") or die(mysql_error());
						
						$arrField = array("suhu","drainase","tekstur","kedalaman","ph","p205","k20","salinitas","kemiringan","batuan","singkapan");
						for ($i = 0; $i < count($arrField); $i++) {
							if ($_POST[$arrField[$i]] != "" && $_POST[$arrField[$i]] != "0") {
								// echo $arrField[$i]."->";
								$kriteria = $arrField[$i];
								$value = $_POST[$arrField[$i]];
								$countSimpan++;
								mysql_query("INSERT INTO m_nilai_daerah2 VALUES ('$kode','$kriteria', $value, '')") or die(mysql_error());
							}
						}

						echo "<script> window.location.href='?hal=nilai_daerah'</script>";
					} else {
						$xx = mysql_query("SELECT * FROM m_nilai_daerah2 where kode_daerah = '$kode'") or die(mysql_error());
						// $arrField = array("suhu","drainase","tekstur","kedalaman","ph","p205","k20","salinitas","kemiringan","batuan","singkapan");
						while ($axx = mysql_fetch_array($xx)) {
							switch ($axx['kriteria']) {
								case 'suhu':
									$suhu = $axx['nilai'];
									break;
								case 'drainase':
									$drainase = $axx['nilai'];
									break;
								case 'tekstur':
									$tekstur = $axx['nilai'];
									break;
								case 'kedalaman':
									$kedalaman = $axx['nilai'];
									break;
								case 'ph':
									$ph = $axx['nilai'];
									break;
								case 'p205':
									$p205 = $axx['nilai'];
									break;
								case 'k20':
									$k20 = $axx['nilai'];
									break;
								case 'salinitas':
									$salinitas = $axx['nilai'];
									break;
								case 'kemiringan':
									$kemiringan = $axx['nilai'];
									break;
								case 'batuan':
									$batuan = $axx['nilai'];
									break;
								case 'singkapan':
									$singkapan = $axx['nilai'];
									break;
								default:
									break;
							}
							// echo $axx['kriteria']." - ".$axx['nilai']."<br>";
						};
						
						// $suhu = $axx['suhu'];
						// $drainase = $axx['drainase'];
						// $tekstur = $axx['tekstur'];
						// $kedalaman = $axx['kedalaman'];
						// $ph = $axx['ph'];
						// $p205 = $axx['p205'];
						// $k20 = $axx['k20'];
						// $salinitas = $axx['salinitas'];
						// $kemiringan = $axx['kemiringan'];
						// $batuan = $axx['batuan'];
						// $singkapan = $axx['singkapan'];
					}
			?>
			<tr>
				<td>Suhu Udara (Celcius)</td>
				<td>
					<input name="suhu" value="<?php echo $suhu; ?>" type="text" size="40" uppercase="true" class="m-wrap large">
				</td>
			</tr>
			<tr>
				<td>Drainase Tanah</td>
				<td>
					<select name="drainase">
						<option <?php echo ($drainase == "0") ? "selected='selected'" : "";?> value="0">Tidak Tersedia</option>
						<option <?php echo ($drainase == "1") ? "selected='selected'" : "";?> value="1">Cepat</option>
						<option <?php echo ($drainase == "2") ? "selected='selected'" : "";?> value="2">Agak Cepat</option>
						<option <?php echo ($drainase == "3") ? "selected='selected'" : "";?> value="3">Baik</option>
						<option <?php echo ($drainase == "4") ? "selected='selected'" : "";?> value="4">Jelek</option>
						<option <?php echo ($drainase == "5") ? "selected='selected'" : "";?> value="5">Sangat Jelek</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Tekstur Tanah Atas</td>
				<td>
					<select name="tekstur">
						<option <?php echo ($tekstur == "0") ? "selected='selected'" : "";?> value="0">Tidak Tersedia</option>
						<option <?php echo ($tekstur == "1") ? "selected='selected'" : "";?> value="1">Halus</option>
						<option <?php echo ($tekstur == "2") ? "selected='selected'" : "";?> value="2">Kasar</option>
						<option <?php echo ($tekstur == "3") ? "selected='selected'" : "";?> value="3">Pasir</option>
						<option <?php echo ($tekstur == "4") ? "selected='selected'" : "";?> value="4">Kerikil</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Kedalaman Efektif (cm)</td>
				<td>
					<input name="kedalaman" value="<?php echo $kedalaman; ?>" type="text" size="40" uppercase="true" class="m-wrap large">
				</td>
			</tr>
			<tr>
				<td>pH Lapisan Atas</td>
				<td>
					<input name="ph" value="<?php echo $ph; ?>" type="text" size="40" uppercase="true" class="m-wrap large">
				</td>
			</tr>
			<tr>
				<td>P205 tersedia lapisan atas</td>
				<td>
					<select name="p205">
						<option <?php echo ($p205 == "0") ? "selected='selected'" : "";?> value="0">Tidak Tersedia</option>
						<option <?php echo ($p205 == "1") ? "selected='selected'" : "";?> value="1">Sangat Tinggi</option>
						<option <?php echo ($p205 == "2") ? "selected='selected'" : "";?> value="2">Tinggi</option>
						<option <?php echo ($p205 == "3") ? "selected='selected'" : "";?> value="3">Sedang</option>
						<option <?php echo ($p205 == "4") ? "selected='selected'" : "";?> value="4">Rendah</option>
						<option <?php echo ($p205 == "5") ? "selected='selected'" : "";?> value="5">Sangat Rendah</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>K20 tersedia lapisan atas</td>
				<td>
					<select name="k20">
						<option <?php echo ($k20 == "0") ? "selected='selected'" : "";?> value="0">Tidak Tersedia</option>
						<option <?php echo ($k20 == "1") ? "selected='selected'" : "";?> value="1">Sangat Tinggi</option>
						<option <?php echo ($k20 == "2") ? "selected='selected'" : "";?> value="2">Tinggi</option>
						<option <?php echo ($k20 == "3") ? "selected='selected'" : "";?> value="3">Sedang</option>
						<option <?php echo ($k20 == "4") ? "selected='selected'" : "";?> value="4">Rendah</option>
						<option <?php echo ($k20 == "5") ? "selected='selected'" : "";?> value="5">Sangat Rendah</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Salinitas lapisan bawah (%)</td>
				<td>
					<input name="salinitas" value="<?php echo $salinitas; ?>" type="text" size="40" uppercase="true" class="m-wrap large">
				</td>
			</tr>
			<tr>
				<td>Kemiringan Lereng (%)</td>
				<td>
					<input name="kemiringan" value="<?php echo $kemiringan; ?>" type="text" size="40" uppercase="true" class="m-wrap large">
				</td>
			</tr>
			<tr>
				<td>Batuan permukaan (%)</td>
				<td>
					<input name="batuan" value="<?php echo $batuan; ?>" type="text" size="40" uppercase="true" class="m-wrap large">
				</td>
			</tr>
			<tr>
				<td>Singkapan batuan (%)</td>
				<td>
					<input name="singkapan"  value="<?php echo $singkapan; ?>" type="text" size="40" uppercase="true" class="m-wrap large">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<button type="submit" name="save" class="btn blue"> <i class="icon-ok"></i>
						Simpan
					</button>
					<button type="button" name="cancel" class="btn" onclick="location.href='?hal=data_daerah'">Batal</button>
				</td>
			</tr>
			<? } ?>
		</table>
	</form>
<?php } else if ($_GET["hal"] == "crud_tanaman") { 
	$id = "";
	$action = "";
	$kode = "";
	$nama = "";
	$jenis = "";
	if (isset($_POST["save"])) {
		$id = $_POST["id"];
		$action = $_POST["action"];
		$kode = $_POST["kode"];
		$nama = $_POST["nama"];
		$jenis = $_POST["jenis"];
		if ($id == "") { //add new
			$x = mysql_query("INSERT INTO m_tanaman VALUES ('$kode','$nama','$jenis')") or die (mysql_error());
		} else {
			$x = mysql_query("UPDATE m_tanaman SET nama = '$nama', jenis = '$jenis' where kode = '$kode'") or die (mysql_error());			
		}
		echo "<script> window.location.href='?hal=data_tanaman'</script>";
	} else if ($_GET["action"] == "edit") {
		$action = "";
		$kode = $_GET["id"];

		$s = mysql_query("SELECT * FROM m_tanaman where kode = '$kode'") or die (mysql_error());
		$as = mysql_fetch_array($s);
		$nama = $as['nama'];
		$jenis = $as['jenis'];
	} else if ($_GET["action"] == "delete") { 
		$kode = $_GET["id"];
		$x = mysql_query("DELETE FROM m_tanaman where kode = '$kode'") or die (mysql_error());
		echo "<script> window.location.href='?hal=data_tanaman'</script>";
	}
?>
<form action="?hal=crud_tanaman" name="" method="post" enctype="multipart/form-data">
	<input name="id" type="hidden" value="<?php echo $kode;?>">
	<input name="action" type="hidden" value="add">

	<table width="100%" border="0" cellspacing="4" cellpadding="4" class="tabel_reg">
		<tr>
			<td width="120">
				Kode
				<span class="required">*</span>
			</td>
			<td>
				<input name="kode" type="text" size="40" value="<?php echo $kode;?>" maxlength="5" uppercase="true" class="m-wrap large"></td>
		</tr>
		<tr>
			<td>
				Nama Tanaman
				<span class="required">*</span>
			</td>
			<td>
				<input name="nama" type="text" size="40" value="<?php echo $nama;?>" class="m-wrap large"></td>
		</tr>
		<tr>
			<td>
				Jenis
				<span class="required">*</span>
			</td>
			<td>
				<input name="jenis" type="text" size="40" value="<?php echo $jenis;?>" class="m-wrap large">
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type="submit" name="save" class="btn blue"> <i class="icon-ok"></i>
					Simpan
				</button>
				<button type="button" name="cancel" class="btn" onclick="location.href='?hal=data_tanaman'">Batal</button>
			</td>
		</tr>
	</table>
</form>
<?php } else if ($_GET["hal"] == "nilai_tanaman") { 
	$kode = $_POST['kode_tanaman'];
?>
<form action="?hal=nilai_tanaman" name="" method="post" enctype="multipart/form-data">
	<!-- <input name="id" type="hidden" value=""> -->
	<input name="action" type="hidden" value="add">
	
	<hr />
	<table width="100%" border="0" cellspacing="4" cellpadding="4" class="tabel_reg">
		<tr>
			<td width="200">
				Pilih Tanaman :
				<span class="required">*</span>
			</td>
			<td>
				<select name="kode_tanaman" onchange="submit()">
					<option value='' selected='selected'>Pilih</option>
					<?php
						$x = mysql_query("SELECT * FROM m_tanaman") or die(mysql_error());
						while ($ax=mysql_fetch_array($x)) {
							$str = "";
							if ($kode == $ax["nama"]) {
								$str = "selected=selected";
							}
							echo '<option '.$str.'value="'.$ax['nama'].'">'.$ax['nama'].'</option>';
						}
					?>
				</select>	
			</td>
		</tr>
		<tr>
			<td colspan="2"><hr /></td>
		</tr>
		<?php 
			if ($kode == "") {
				
			} else {
				if (isset($_POST['save'])) {
				
					$score = $_POST['score'];

					$suhuMin = $_POST['suhuMin'];
					$drainaseMin = $_POST['drainaseMin'];
					$teksturMin = $_POST['teksturMin'];
					$kedalamanMin = $_POST['kedalamanMin'];
					$phMin = $_POST['phMin'];
					$p205Min = $_POST['p205Min'];
					$k20Min = $_POST['k20Min'];
					$salinitasMin = $_POST['salinitasMin'];
					$kemiringanMin = $_POST['kemiringanMin'];
					$batuanMin = $_POST['batuanMin'];
					$singkapanMin = $_POST['singkapanMin'];

					$suhuMax = $_POST['suhuMax'];
					$drainaseMax = $_POST['drainaseMax'];
					$teksturMax = $_POST['teksturMax'];
					$kedalamanMax = $_POST['kedalamanMax'];
					$phMax = $_POST['phMax'];
					$p205Max = $_POST['p205Max'];
					$k20Max = $_POST['k20Max'];
					$salinitasMax = $_POST['salinitasMax'];
					$kemiringanMax = $_POST['kemiringanMax'];
					$batuanMax = $_POST['batuanMax'];
					$singkapanMax = $_POST['singkapanMax'];

					$arrField = array("suhu","drainase","tekstur","kedalaman","ph","p205","k20","salinitas","kemiringan","batuan","singkapan");
					// echo "?".$suhuMin."<br>";
					// echo "??".$_POST[$arrField[0]."Min"]."<br>";
					$countSimpan = 0;
					for ($i = 0; $i < count($arrField); $i++) {
						if (($_POST[$arrField[$i]."Min"] != "" && $_POST[$arrField[$i]."Max"] != "") && ($_POST[$arrField[$i]."Min"] != "0" && $_POST[$arrField[$i]."Max"] != "0")) {
							// echo $arrField[$i]."->";
							$kriteria = $arrField[$i];
							$minValue = $_POST[$arrField[$i]."Min"];
							$maxValue = $_POST[$arrField[$i]."Max"];
							$countSimpan++;
							mysql_query("INSERT INTO m_nilai_tanaman VALUES ('','$kode','$kriteria', $minValue, $maxValue,'$score')") or die(mysql_error());
						}
					}
					echo "<script> window.location.href='?hal=nilai_tanaman'</script>";
				} else {
					// select 
					// 	nt.kode_tanaman as tanaman,
					// 	(sum(nt.score) / (count(*) * 100)) * 100 as percentage
					// from m_nilai_tanaman nt
					// where (select dae.nilai FROM m_nilai_daerah2 dae where dae.kode_daerah = 'DEPOK' and dae.kriteria = nt.kriteria) between nt.min_value and nt.max_value
					// group by nt.kode_tanaman
					// order by nt.kode_tanaman, id
					// 
				// 	$xx = mysql_query("SELECT * FROM m_nilai_daerah where kode_daerah = '$kode'") or die(mysql_error());
				// 	$axx = mysql_fetch_array($xx);

				// 	$suhu = $axx['suhu'];
				// 	$drainase = $axx['drainase'];
				// 	$tekstur = $axx['tekstur'];
				// 	$kedalaman = $axx['kedalaman'];
				// 	$ph = $axx['ph'];
				// 	$p205 = $axx['p205'];
				// 	$k20 = $axx['k20'];
				// 	$salinitas = $axx['salinitas'];
				// 	$kemiringan = $axx['kemiringan'];
				// 	$batuan = $axx['batuan'];
				// 	$singkapan = $axx['singkapan'];
				}
		?>
		<tr>
			<td>Suhu Udara (Celcius)</td>
			<td>
				<input name="suhuMin" type="text" size="40" style="width: 120px" uppercase="true" class="m-wrap large">
				s/d
				<input name="suhuMax" type="text" size="40" style="width: 120px" uppercase="true" class="m-wrap large">
			</td>
		</tr>
		<tr>
			<td>Drainase Tanah</td>
			<td>
				<select name="drainaseMin" style="width: 135px" >
					<option <?php echo ($drainase == "0") ? "selected='selected'" : "";?> value="0">Tidak Tersedia</option>
					<option <?php echo ($drainase == "1") ? "selected='selected'" : "";?> value="1">Cepat</option>
					<option <?php echo ($drainase == "2") ? "selected='selected'" : "";?> value="2">Agak Cepat</option>
					<option <?php echo ($drainase == "3") ? "selected='selected'" : "";?> value="3">Baik</option>
					<option <?php echo ($drainase == "4") ? "selected='selected'" : "";?> value="4">Jelek</option>
					<option <?php echo ($drainase == "5") ? "selected='selected'" : "";?> value="5">Sangat Jelek</option>
				</select>
				s/d
				<select name="drainaseMax" style="width: 135px" >
					<option <?php echo ($drainase == "0") ? "selected='selected'" : "";?> value="0">Tidak Tersedia</option>
					<option <?php echo ($drainase == "1") ? "selected='selected'" : "";?> value="1">Cepat</option>
					<option <?php echo ($drainase == "2") ? "selected='selected'" : "";?> value="2">Agak Cepat</option>
					<option <?php echo ($drainase == "3") ? "selected='selected'" : "";?> value="3">Baik</option>
					<option <?php echo ($drainase == "4") ? "selected='selected'" : "";?> value="4">Jelek</option>
					<option <?php echo ($drainase == "5") ? "selected='selected'" : "";?> value="5">Sangat Jelek</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Tekstur Tanah Atas</td>
			<td>
				<select name="teksturMin" style="width: 135px" >
					<option <?php echo ($tekstur == "0") ? "selected='selected'" : "";?> value="0">Tidak Tersedia</option>
					<option <?php echo ($tekstur == "1") ? "selected='selected'" : "";?> value="1">Halus</option>
					<option <?php echo ($tekstur == "2") ? "selected='selected'" : "";?> value="2">Kasar</option>
					<option <?php echo ($tekstur == "3") ? "selected='selected'" : "";?> value="3">Pasir</option>
					<option <?php echo ($tekstur == "4") ? "selected='selected'" : "";?> value="4">Kerikil</option>
				</select>
				s/d
				<select name="teksturMax" style="width: 135px" >
					<option <?php echo ($tekstur == "0") ? "selected='selected'" : "";?> value="0">Tidak Tersedia</option>
					<option <?php echo ($tekstur == "1") ? "selected='selected'" : "";?> value="1">Halus</option>
					<option <?php echo ($tekstur == "2") ? "selected='selected'" : "";?> value="2">Kasar</option>
					<option <?php echo ($tekstur == "3") ? "selected='selected'" : "";?> value="3">Pasir</option>
					<option <?php echo ($tekstur == "4") ? "selected='selected'" : "";?> value="4">Kerikil</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Kedalaman Efektif (cm)</td>
			<td>
				<input name="kedalamanMin" value="<?php echo $kedalaman; ?>" style="width: 120px" type="text" size="40" uppercase="true" class="m-wrap large">
				s/d
				<input name="kedalamanMax" value="<?php echo $kedalaman; ?>" style="width: 120px" type="text" size="40" uppercase="true" class="m-wrap large">
			</td>
		</tr>
		<tr>
			<td>pH Lapisan Atas</td>
			<td>
				<input name="phMin" value="<?php echo $ph; ?>" type="text" style="width: 120px" size="40" uppercase="true" class="m-wrap large">
				s/d
				<input name="phMax" value="<?php echo $ph; ?>" type="text" style="width: 120px" size="40" uppercase="true" class="m-wrap large">
			</td>
		</tr>
		<tr>
			<td>P205 tersedia lapisan atas</td>
			<td>
				<select name="p205Min" style="width: 135px">
					<option <?php echo ($p205 == "0") ? "selected='selected'" : "";?> value="0">Tidak Tersedia</option>
					<option <?php echo ($p205 == "1") ? "selected='selected'" : "";?> value="1">Sangat Tinggi</option>
					<option <?php echo ($p205 == "2") ? "selected='selected'" : "";?> value="2">Tinggi</option>
					<option <?php echo ($p205 == "3") ? "selected='selected'" : "";?> value="3">Sedang</option>
					<option <?php echo ($p205 == "4") ? "selected='selected'" : "";?> value="4">Rendah</option>
					<option <?php echo ($p205 == "5") ? "selected='selected'" : "";?> value="5">Sangat Rendah</option>
				</select>
				s/d
				<select name="p205Max" style="width: 135px">
					<option <?php echo ($p205 == "0") ? "selected='selected'" : "";?> value="0">Tidak Tersedia</option>
					<option <?php echo ($p205 == "1") ? "selected='selected'" : "";?> value="1">Sangat Tinggi</option>
					<option <?php echo ($p205 == "2") ? "selected='selected'" : "";?> value="2">Tinggi</option>
					<option <?php echo ($p205 == "3") ? "selected='selected'" : "";?> value="3">Sedang</option>
					<option <?php echo ($p205 == "4") ? "selected='selected'" : "";?> value="4">Rendah</option>
					<option <?php echo ($p205 == "5") ? "selected='selected'" : "";?> value="5">Sangat Rendah</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>K20 tersedia lapisan atas</td>
			<td>
				<select name="k20Min" style="width: 135px">
					<option <?php echo ($k20 == "0") ? "selected='selected'" : "";?> value="0">Tidak Tersedia</option>
					<option <?php echo ($k20 == "1") ? "selected='selected'" : "";?> value="1">Sangat Tinggi</option>
					<option <?php echo ($k20 == "2") ? "selected='selected'" : "";?> value="2">Tinggi</option>
					<option <?php echo ($k20 == "3") ? "selected='selected'" : "";?> value="3">Sedang</option>
					<option <?php echo ($k20 == "4") ? "selected='selected'" : "";?> value="4">Rendah</option>
					<option <?php echo ($k20 == "5") ? "selected='selected'" : "";?> value="5">Sangat Rendah</option>
				</select>
				s/d
				<select name="k20Max" style="width: 135px">
					<option <?php echo ($k20 == "0") ? "selected='selected'" : "";?> value="0">Tidak Tersedia</option>
					<option <?php echo ($k20 == "1") ? "selected='selected'" : "";?> value="1">Sangat Tinggi</option>
					<option <?php echo ($k20 == "2") ? "selected='selected'" : "";?> value="2">Tinggi</option>
					<option <?php echo ($k20 == "3") ? "selected='selected'" : "";?> value="3">Sedang</option>
					<option <?php echo ($k20 == "4") ? "selected='selected'" : "";?> value="4">Rendah</option>
					<option <?php echo ($k20 == "5") ? "selected='selected'" : "";?> value="5">Sangat Rendah</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Salinitas lapisan bawah (%)</td>
			<td>
				<input name="salinitasMin" value="<?php echo $salinitas; ?>" style="width: 120px" type="text" size="40" uppercase="true" class="m-wrap large">
				s/d
				<input name="salinitasMax" value="<?php echo $salinitas; ?>" style="width: 120px" type="text" size="40" uppercase="true" class="m-wrap large">
			</td>
		</tr>
		<tr>
			<td>Kemiringan Lereng (%)</td>
			<td>
				<input name="kemiringanMax" value="<?php echo $kemiringan; ?>" style="width: 120px" type="text" size="40" uppercase="true" class="m-wrap large">
				s/d
				<input name="kemiringanMin" value="<?php echo $kemiringan; ?>" style="width: 120px" type="text" size="40" uppercase="true" class="m-wrap large">
			</td>
		</tr>
		<tr>
			<td>Batuan permukaan (%)</td>
			<td>
				<input name="batuanMin" value="<?php echo $batuan; ?>" style="width: 120px" style="width: 120px" type="text" size="40" uppercase="true" class="m-wrap large">
				s/d
				<input name="batuanMax" value="<?php echo $batuan; ?>" style="width: 120px" style="width: 120px" type="text" size="40" uppercase="true" class="m-wrap large">
			</td>
		</tr>
		<tr>
			<td>Singkapan batuan (%)</td>
			<td>
				<input name="singkapanMin"  value="<?php echo $singkapan; ?>" style="width: 120px" type="text" size="40" uppercase="true" class="m-wrap large">
				s/d
				<input name="singkapanMax"  value="<?php echo $singkapan; ?>" style="width: 120px" type="text" size="40" uppercase="true" class="m-wrap large">
			</td>
		</tr>
		<tr>
			<td>Score</td>
			<td>
				<input name="score" style="width: 120px" type="text" size="40" uppercase="true" class="m-wrap large">
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type="submit" name="save" class="btn blue"> <i class="icon-ok"></i>
					Simpan
				</button>
				<button type="button" name="cancel" class="btn" onclick="location.href='?hal=data_daerah'">Batal</button>
			</td>
		</tr>
		<? } ?>
	</table>
</form>
<?php } else if ($_GET["hal"] == "hasil_analisa") { 
	$kode = $_POST['kode_daerah'];
?>
<form action="?hal=hasil_analisa" name="" method="post" enctype="multipart/form-data">
	<!-- <input name="id" type="hidden" value=""> -->
	<input name="action" type="hidden" value="add">
	
	<hr />
	<table width="100%" border="0" cellspacing="4" cellpadding="4" class="tabel_reg">
		<tr>
			<td width="200">
				Pilih Daerah :
				<span class="required">*</span>
			</td>
			<td>
				<select name="kode_daerah" onchange="submit()">
					<option value='' selected='selected'>Pilih</option>
					<?php
						$x = mysql_query("SELECT * FROM m_daerah") or die(mysql_error());
						while ($ax=mysql_fetch_array($x)) {
							$str = "";
							if ($kode == $ax["nama"]) {
								$str = "selected=selected";
							}
							echo '<option '.$str.'value="'.$ax['nama'].'">'.$ax['nama'].'</option>';
						}
					?>
				</select>	
			</td>
		</tr>
		<tr>
			<td colspan="2"><hr /></td>
		</tr>
		
		<tr>
			<td colspan="2">
				<?php if ($kode != "") { ?>
				<!-- <canvas id="myChart" width="400" height="400"></canvas> -->
				<table border="1" width="100%" cellpadding="3" cellspacing="3" class="tabel_reg"> 
					<tr align="center">
						<td colspan='3'><h3 class="p2">Tanaman yang tumbuh subur di daerah anda</h3></td>
					</tr>
					<tr >
						<td valign="middle" align="right" width="2px"><div style="-webkit-transform: rotate(270deg);"><h4 class="p2">Percentase</h4></div></td>
						<td width="0" align="center"><div id="myChart" style="margin-top:20px; margin-left:20px; width:100%; height:100%;"></div></td>
						<td valign="middle" width="10PX"><div style="-webkit-transform: rotate(90deg);">&nbsp;</div></td>
					</tr>
					<tr align="center">
						<td colspan='3'><h4 class="p2">Nama Tumbuhan</h4></td>
					</tr>
				</table>
				<!-- <div id="myChart" style="margin-top:20px; margin-left:20px; width:300px; height:300px;"></div> -->
				<?php 
					
						$newArrayTanaman = array();
						$newArrayScore = array();
						$query = mysql_query("select 
							nt.kode_tanaman as tanaman,
							(sum(nt.score) / (count(*) * 100)) * 100 as percentage
						from m_nilai_tanaman nt
						where (select dae.nilai FROM m_nilai_daerah2 dae where dae.kode_daerah = '$kode' and dae.kriteria = nt.kriteria) between nt.min_value and nt.max_value
						group by nt.kode_tanaman
						order by nt.kode_tanaman") or die (mysql_error());
						while ($arra = mysql_fetch_array($query)) {
							array_push($newArrayTanaman, $arra['tanaman']);
							array_push($newArrayScore, $arra['percentage']);
						}
						$finalArr1 = json_encode($newArrayTanaman);
						$finalArr2 = json_encode($newArrayScore);
						echo "<script>createChart($finalArr1, $finalArr2)</script>";
						// echo $finalArr2;
					}
				?>
			</td>
		</tr>
	</table>
</form>
<? } ?>