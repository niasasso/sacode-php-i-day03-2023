<?php 
	
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "db_sulenias";

	$koneksi = mysqli_connect($server, $username, $password, $database);

	$data = "SELECT * FROM `karyawan` ";
	$hasil = mysqli_query($koneksi, $data);

	// foreach($hasil as $tampilkan)
	// {
	// 	var_dump($tampilkan);
	// }

	// while($row = mysqli_fetch_assoc($hasil))
	// {
	// 	// var_dump($row['id_karyawan']);
	// 	echo ($row['nama_karyawan']);
	// }






	mysqli_close($koneksi);



 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.tailwindcss.com"></script>
	<title>PHP Day 03 - Belajar Database Manajement System (DBMS)</title>
</head>
<body>

	<div class="container mx-auto py-4">
		<div class="row">
			<div class="col">

				<h2>Data Karyawan</h2>

				<table class="border-collapse border border-slate-500 p-3">
					<tr>
						<th class="border border-slate-600">No</th>
						<th class="border border-slate-600">Nama</th>
						<th class="border border-slate-600">Email</th>
						<th class="border border-slate-600">Jenis</th>
						<th class="border border-slate-600">Alamat</th>
					</tr>
					<?php while($row = mysqli_fetch_assoc($hasil)) : ?>
					<tr>
						<td class="border border-slate-700">1</td>
						<td class="border border-slate-700"><?php echo $row['nama_karyawan'] ?></td>
						<td class="border border-slate-700"><?php echo $row['email'] ?></td>
						<td class="border border-slate-700"><?php echo $row['jk'] ?></td>
						<td class="border border-slate-700"><?php echo $row['alamat_jalan'] ?></td>
					</tr>
					<?php endwhile ?>
				</table>
				
			</div>
		</div>
	</div>

</body>
</html>