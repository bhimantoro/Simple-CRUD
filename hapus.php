<?php
	if(isset($_GET['id']))
	{
		include 'koneksi.php';

		$id = $_GET['id'];

		$cek = mysqli_query($koneksi, "SELECT id_mhs FROM bio WHERE id_mhs = '$id'") or die(mysqli_error($cek));

		if(mysqli_num_rows($cek)==0)
		{
			echo "<script>window.histroy.back()</script>";
		}
		else
		{
			$del = mysqli_query($koneksi, "DELETE FROM bio WHERE id_mhs = '$id'");

			if($del)
			{
				echo "Berhasil Menghapus Data<br>";
				echo "<a href='index.php'>Back</a>";
			}
			else
			{
				echo "Gagal Menghapus Data<br>";
				echo "<a href='index.php'>Back</a>";	
			}
		}
	}
?>