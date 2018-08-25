<?php
	if(isset($_POST['nim']) && isset($_POST['nama']) && isset($_POST['jk']) && isset($_POST['alamat']) && isset($_POST['no_hp']) && isset($_POST['simpan']))
	{
		include 'koneksi.php';

		$id = $_POST['id'];
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$alamat = $_POST['alamat'];
		$no_hp = $_POST['no_hp'];

		$input = mysqli_query($koneksi, "UPDATE bio SET nim = '$nim', nama = '$nama', jk = '$jk', alamat = '$alamat', no_hp = '$no_hp' WHERE id_mhs = '$id'") or die(mysqli_error($input));

		if($input)
		{
			echo "Berhasil Mengubah Data<br>";
			echo "<a href='index.php'>Back</a>";
		}
		else
		{
			echo "Gagal Mengubah Data<br>";
			echo "<a href='index.php'>Back</a>";
		}
	}
	else
	{
		echo "Ada data yang kurang<br>";
		echo "<a href='index.php'>Back</a>";
	}
?>