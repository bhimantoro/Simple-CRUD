<?php
	if(isset($_POST['nim']) && isset($_POST['nama']) && isset($_POST['jk']) && isset($_POST['alamat']) && isset($_POST['no_hp']) && isset($_POST['tambah']))
	{
		include 'koneksi.php';

		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$alamat = $_POST['alamat'];
		$no_hp = $_POST['no_hp'];

		$input = mysqli_query($koneksi, "INSERT INTO bio VALUES(NULL, '$nim', '$nama', '$jk', '$alamat', '$no_hp')") or die(mysqli_error($input));

		if($input)
		{
			echo "Berhasil Menambahkan Data<br>";
			echo "<a href='tambah.php'>Back</a>";
		}
		else
		{
			echo "Gagal Menambahkan Data<br>";
			echo "<a href='tambah.php'>Back</a>";
		}
	}
	else
	{
		echo "Ada data yang kurang<br>";
		echo "<a href='tambah.php'>Back</a>";
	}
?>