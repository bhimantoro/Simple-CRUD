<!DOCTYPE HTML>
<html>
<head>
	<title>Data Mahasiswa </title>
</head>
<body>

	<h2>Data Mahasiswa</h2>
	<p><a href="tambah.php">Tambah Data</a></p>
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#ddd">
			<th>No.</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>No. HP</th>
			<th>Aksi</th>
		</tr>
		<?php
			include 'koneksi.php';
			$query = mysqli_query($koneksi,"SELECT * FROM bio ORDER BY id_mhs") or die(mysqli_error($koneksi));
			if(mysqli_num_rows($query)==0){ ?>
				<tr>
					<td colspan="8">Tidak ada data</td>
				</tr>
				<?php
			}
			else{
				$no = 1;
				while($data = mysqli_fetch_assoc($query)){
				?>
				<tr>
					<td><?php echo $no?></td>
					<td><?php echo $data['nim']?></td>
					<td><?php echo $data['nama']?></td>
					<td><?php echo $data['jk']?></td>
					<td><?php echo $data['alamat']?></td>
					<td><?php echo $data['no_hp']?></td>
					<td><a href="edit.php?id=<?php echo $data['id_mhs']; ?>">Edit</a> <a href="hapus.php?id=<?php echo $data['id_mhs']; ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a></td>
				</tr>
				<?php
				$no++; 
				} 
			}			
		?>
	</table>
</body>
</html>