<!DOCTYPE html>
<html>
<head>
	<title>Dosen</title>
</head>
<body>
<?php
include ('koneksi.php');
$id = $_GET['id'];
$mhs = mysqli_query ($koneksi, "SELECT * FROM dosen WHERE id = '$id'");
$data = mysqli_fetch_array ($mhs);
?>
<center><h2>Edit Data Dosen</h2></center>
<fieldset style="width: 50%; margin: auto;">
	<legend>Form Edit Biodata Dosen</legend>
	<form action="simpanedit.php" method="post">
		<input type="hidden" name="id" value="<?php echo $data['id'];?>">
		<p>
			Nama Lengkap Dosen <br>
			<input type="text" name="nama" class="form-control" value="<?php echo $data['nama'];?>" required>
		</p>
		<p>
			Nomor Induk Pengajar Dosen <br>
			<input type="text" name="nipd" class="form-control" value="<?php echo $data['nipd'];?>" required>
		</p>
		<p>
			<input type="submit" value="Simpan">
		</p>
	</form>
</fieldset>
<br><center><a href="lihatdata.php" class="btn btn primary">&Lt; Lihat Data</a></center>
</body>
</html>