<!DOCTYPE HTML>
<html>
<head>
	<title>Data Mahasiswa </title>
</head>
<body>

	<h2>Tambah Data</h2>
	<p><a href="index.php">Home</a></p>
	<form action="tambah-proses.php" method="post">
		<table cellpadding="5" cellspacing="0">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td>
					<input type="text" name="nim" required>
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<input type="text" name="nama" size="50" required>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jk" value="L" required>L<br>
					<input type="radio" name="jk" value="P">P
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<textarea name="alamat" cols="40" rows="4" required></textarea>
				</td>
			</tr>
			<tr>
				<td>No. HP</td>
				<td>:</td>
				<td>
					<input type="text" name="no_hp" required>
				</td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td>
					<input type="submit" value="TAMBAH" name="tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>