<?php 
	include 'header.php';
	include 'koneksi.php';
	$transaksi = mysqli_query($koneksi, "SELECT * FROM transaksi");
	if (isset($_GET['cari'])) {
		$key = $_GET['cari'];

		$cari = mysqli_query($koneksi, "SELECT * FROM transaksi where kode_transaksi like '%$key%'");
	}
	else {
		$cari = $transaksi;
	}	
?>
<div class="container" style="margin-top:40px">
	<h2>Rekap Perhitungan Transaksi</h2>
<?php
$sql = 'SELECT kode_transaksi, id_pulsa,id_pelanggan, proveder, QTY, harga_jual ,tgl_transaksi, 
harga_jual * QTY AS total 
		FROM transaksi';		
$query = mysqli_query($koneksi, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($koneksi));
}
echo '<table>
		<thead>
		<table class="table table-striped table-hover table-sm table-bordered">
			<main role="main" class="col-md-9 col-lg-12 px-3">
				<form method="get" class="ml-2 mt-3">
					<table class="table table-striped table-sm w-100 p-3 ml-1 mt-3">
					<thead class="thead-light">
			<tr>
				<th scope="col">Kode Transaksi</th>
				<th scope="col">ID Pelanggan</th>
				<th scope="col">ID Pulsa</th>
				<th scope="col">Proveder</th>
				<th scope="col">Tgl Transaksi</th>
				<th scope="col">Harga Jual</th>
				<th scope="col">QTY</th>
				<th scope="col">Total</th>
			</tr>
		</thead>
		<tbody>';		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
			<td>'.$row['kode_transaksi'].'</td>
			<td>'.$row['id_pelanggan'].'</td>
			<td>'.$row['id_pulsa'].'</td>
			<td>'.$row['proveder'].'</td>
			<td>'.$row['tgl_transaksi'].'</td>
			<td>'.$row['harga_jual'].'</td>
			<td>'.$row['QTY'].'</td>
			<td>'.number_format($row['total'], 0, ',', '.').'</td>
		</tr>';
}
echo '
	</tbody>
</table>';
?>
	</thead>
					<tbody> 
						<?php foreach($cari as $value):?>
						<tr>
							<th scope="row"><?php echo $value['id_pulsa']; ?></th>
							<td><?php echo $value['nama_pulsa']; ?></td>
							<td><?php echo $value['proveder'];?></td>
							<td><?php echo $value['deskripsi_pulsa'];?></td>
							<td><?php echo $value['stok'];?></td>
                            <td><?php echo $value['harga_pokok'];?></td>
                            <td><?php echo $value['harga_jual'];?></td>
							<td><?php echo $value['kode_kategori'];?></td>
							<td>
						
								<a href="hapus_pulsa.php?id=<?php echo $value['id_pulsa'] ?>" class="badge badge-danger">Hapus</a>
								<a href="tambah_pulsa.php" class ="badge badge-warning">Tambah Data</a>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				</br>  </br>  </br></br></br></br></br></br>
	  <footer class="container-fluid bg-4 text-center" style="background-color: #fffefe">
		<center><p>
		  	<strong>Copyright @ 2021 <a target="_blank" >TaraMaydita</a></strong>
		  	<br>
		 
			</main></div></div></div>