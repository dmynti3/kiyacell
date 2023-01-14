<?php 
	include 'koneksi.php';

	$id_pulsa 		= $_POST['id_pulsa'];
	$nama_pulsa 	= $_POST['nama_pulsa'];
	$proveder 	    = $_POST['proveder'];
	$deskripsi_pulsa= $_POST['deskripsi_pulsa'];
	$stok		    = $_POST['stok'];
	$harga_pokok 	= $_POST['harga_pokok'];
	$harga_jual	    = $_POST['harga_jual'];
	$kode_kategori 	= $_POST['kode_kategori'];
  
	mysqli_query($koneksi, "INSERT INTO pulsa (id_pulsa, nama_pulsa, proveder, deskripsi_pulsa, stok, harga_pokok,harga_jual,kode_kategori) VALUES ('$id_pulsa', '$nama_pulsa', '$proveder', '$deskripsi_pulsa', '$stok', '$harga_pokok','$harga_jual','$kode_kategori')");
	

    header('location:pulsa.php');   

	
 ?>