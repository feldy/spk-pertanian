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
<?php } else if ($_GET["hal"] == "crud_alternatif") { ?>

<?php } else if ($_GET["hal"] == "crud_kriteria") {} ?>