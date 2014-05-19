<?php

	if ($_GET['hal'] == "data_daerah") {	
?>
	<h3 class="p2">Data Daerah</h3>
	<a href="?hal=crud_daerah" class="btn blue" style="float:right"> <i class="icon-plus"></i>
		Tambah data daerah
	</a>
	<br />
	<br />
	<table class="table table-striped table-hover table-bordered">
		<thead>
			<tr>
				<th width="20">No</th>
				<th width="35">Kode</th>
				<th width="150">Nama Daerah</th>
				<th>Alamat</th>
				<th width="90" align="right">&nbsp;</th>
			</tr>
		</thead>
		<?php
			$x = mysql_query("select * from m_daerah") or die (mysql_error());
			$no = 0;
			while ($ax=mysql_fetch_array($x)) {
			$no++;
		?>
		<tbody>
			<tr>
				<td valign="top"><?php echo $no; ?></td>
				<td valign="top"><?php echo $ax['kode']; ?></td>
				<td valign="top"><?php echo $ax['nama']; ?></td>
				<td valign="top"><?php echo $ax['alamat']; ?></td>
				<td align="center" valign="top">
					<a href="?hal=crud_daerah&amp;id=<?php echo $ax['kode']; ?>&amp;action=edit" class="btn"> <i class="icon-edit"></i>
					</a>
					<a href="#" onclick="DeleteConfirm('?hal=crud_daerah&amp;id=<?php echo $ax['kode']; ?>&amp;action=delete');return(false);" class="btn disabled">
						<i class="icon-trash"></i>
					</a>
				</td>
			</tr>
		</tbody>
		<?php } ?>
	</table>
<?php
	} else if ($_GET['hal'] == "data_alternatif") {	
?>
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
		</tbody>
	</table>
<?php } else if ($_GET['hal'] == "data_kriteria") {  ?>
	<h3 class="p2">Data Kriteria</h3>
	<a href="?hal=update_alternatif" class="btn blue" style="float:right"> <i class="icon-plus"></i>
		Tambah data kriteria
	</a>
	<br />
	<br />
	<table class="table table-striped table-hover table-bordered">
		<thead>
			<tr>
				<th width="40">No</th>
				<th width="160">Kode</th>
				<th>Nama Kriteria</th>
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
		</tbody>
	</table>
<?php } else if ($_GET['hal'] == "home") {  ?>
	<h3 class="p2">Sekilas Tentang Aplikasi</h3>
	<div class="extra-wrap">
		<h6 class="prev-indent-bot">
			Test Aplikasi
		</h6>
	</div>
	<p>Penjelasan aplikasi ini</p>
<?php } ?>