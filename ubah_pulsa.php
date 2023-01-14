<?php  
	include 'koneksi.php';

	$id_pulsa 		= $_POST['id_pulsa'];
	$nama_pulsa 	= $_POST['nama_pulsa'];
	$proveder 	= $_POST['proveder'];
	$deskripsi_pulsa		= $_POST['deskripsi_pulsa'];
	$stok		= $_POST['stok'];
	$harga_pokok 	= $_POST['harga_pokok'];
	$harga_jual	= $_POST['harga_jual'];
	$kode_kategori 	= $_POST['kode_kategori'];
	mysqli_query($koneksi, "UPDATE pulsa SET nama_pulsa = '$nama_pulsa', proveder = '$proveder',deskripsi_pulsa = '$deskripsi_pulsa', stok = '$stok', harga_pokok = '$harga_pokok',harga_jual = '$harga_jual', kode_kategori= '$kode_kategori 'WHERE id_pulsa = '$id_pulsa'");

	header('location:pulsa.php');
?>