<?php 
	include 'header.php';
	include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM transaksi");
 ?>
 <div class="container">
	 	<div class="page-header">
	       <h3>Data Pembelian</h3>
	    </div>
	    <table class="table table-bordered table-striped">
	 	<tr>
	 		<td>Kode Transaksi</td>
	 		<td>Nomor Telpon</td>
	 		<td>Tanggal Transaksi</td>
	 		<td>Id Admin</td>
	 		<td>Id Pulsa</td>
	 		<td>Jumlah Pembelian</td>
	 		<td>Total Pembelian</td>
	 		<td>action</td>
	 	</tr>

	 	<?php foreach($data as $value): ?>
	 	<tr>
	 		<td><?php echo $value ['Id_Pembelian'] ?></td>
	 		<td><?php echo $value ['No_Tlp'] ?></td>
	 		<td><?php echo $value ['Tanggal_Transaksi'] ?></td>
	 		<td><?php echo $value ['Id_Admin'] ?></td>
	 		<td><?php echo $value ['Id_Pulsa'] ?></td>
	 		<td><?php echo $value ['Jumlah_Pembelian'] ?></td>
	 		<td><?php echo $value ['Total_Pembelian'] ?></td>
	 		<td> 
	 			<a href="hapus_pembelian.php?Id_Pembelian=<?php echo $value ['Id_Pembelian'] ?>"> Hapus </a> 
	 			<a href="edit_pembelian.php?Id_Pembelian=<?php echo $value ['Id_Pembelian'] ?>"> Edit </a>
	 		</td>

	 	</tr>
	 	<?php endforeach ?>
	 	<p></p>
	 	<a href="tambah_datapembelian.php">Tambah data </a>
	</table>
</div>

<?php include "footer.php"; ?>