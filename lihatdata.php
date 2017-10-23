<!DOCTYPE html>
<html>
<head>
	<title>lihat data</title>
</head>
<body>
<center><h3>DOSEN</h3></center><br>
<center><a href="tambah.php">&plus; Tambah Data Dosen</a></center>
<br>
<center>
<table border="4">
	<th>Nomor</th>
	<th>Nama Dosen</th>
	<th>Nomor Induk Pengajar Dosen</th>
	<th colspan="3">Opsi</th>
	<?php
	include('koneksi.php');
	$ma = mysqli_query($koneksi,"SELECT * FROM dosen");
	$no = 1;
	foreach ($ma as $data) {
		echo "<tr>
		<td>$no</td>
		<td>".$data['nama']."</td>
		<td>".$data['nipd']."</td>
		<td><a href='show.php?id=$data[id]'>Show</a></td>
		<td><a href='edit.php?id=$data[id]'>Edit</a></td>
		<td><a href='delete.php?id=$data[id]'>Delete</a></td>
		</tr>";
		$no++;
	}
	?>
</table>
</center>
<br>
<br>
<center><h3>Wali</h3></center><br>
<center><a href="tambah2.php">&plus; Tambah Data Wali</a></center>
<br>
<center>
<table border="4">
	<th>Nomor</th>
	<th>Nama Wali</th>
	<th colspan="3">Opsi</th>
	<?php
	include('koneksi.php');
	$ma = mysqli_query($koneksi,"SELECT * FROM wali");
	$no = 1;
	foreach ($ma as $data) {
		echo "<tr>
		<td>$no</td>
		<td>".$data['nama']."</td>
		<td><a href='show2.php?id=$data[id]'>Show</a></td>
		<td><a href='edit2.php?id=$data[id]'>Edit</a></td>
		<td><a href='delete2.php?id=$data[id]'>Delete</a></td>
		</tr>";
		$no++;
	}
	?>
</table>
</body>
</html>