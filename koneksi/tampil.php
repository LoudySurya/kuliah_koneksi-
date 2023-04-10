<!DOCTYPE html>
<html>
<head>
	<title>Read Database</title>
</head>
<body>
	<font face="Arial">
	<center>
		<h1>DATA MAHASISWA</h1>
		<table border="1">
			<tr>
				<td>Nama</td>
				<td>NIM</td>
				<td>Alamat</td>
				<td>Nilai</td>
			</tr>
			<?php
			include 'koneksi.php';
			$query = mysqli_query($connect, "SELECT * FROM mhs");

			while($data = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?= $data['nama'];?></td>
					<td><?= $data['nim'];?></td>
					<td><?= $data['alamat'];?></td>
					<td><?= $data['nilai'];?></td>
				</tr>
				<?php
			}
			?>
		</table>
	</center>
</font>
</body>
</html>