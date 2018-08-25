<!DOCTYPE HTML>
<html>
<head>
	<title>Data Mahasiswa </title>
</head>
<body>

	<h2>Edit Data</h2>
	<p><a href="index.php">Home</a></p>
	<?php 
		include 'koneksi.php';
		$id = $_GET['id'];
		$show = mysqli_query($koneksi, "SELECT * FROM bio WHERE id_mhs='$id'");
		if(mysqli_num_rows($show) == 0)
		{
			echo "<script>window.history.back()</script>";
		}
		else
		{
			$data = mysqli_fetch_assoc($show);
		}
	?>
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<table cellpadding="5" cellspacing="0">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td>
					<input type="text" value="<?php echo $data['nim']; ?>" name="nim" required>
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<input type="text" value="<?php echo $data['nama']; ?>" name="nama" size="50" required>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jk" value="L" required <?php if($data['jk']=='L'){echo "checked";}?>>L<br>
					<input type="radio" name="jk" value="P" <?php if($data['jk']=='P'){echo "checked";}?>>P
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<textarea name="alamat" <?php echo $data['alamat']; ?> cols="40" rows="4" required></textarea>
				</td>
			</tr>
			<tr>
				<td>No. HP</td>
				<td>:</td>
				<td>
					<input type="text" value="<?php echo $data['no_hp']; ?>" name="no_hp" required>
				</td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td>
					<input type="submit" value="SIMPAN" name="simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>