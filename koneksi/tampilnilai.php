<!DOCTYPE html>
<html>
<head>
	<title>Read Database</title>
</head>
<body>
	<font face="Arial">
	<center>
		<h1>DATA NILAI MAHASISWA</h1>
		<table border="1">
			<tr>
				<td>Mata Kuliah</td>
				<td>sks</td>
			</tr>

			<?php
			include 'koneksi.php';
			$query = mysqli_query($connect, "SELECT * FROM nilai");

			while($data = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?= $data['mata_kuliah'];?></td>
					<td><?= $data['sks'];?></td>
				</tr>
				<?php
			}
			?>
		</table>
	</center>
</font>
</body>
</html>