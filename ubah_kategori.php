<?php  
	include 'koneksi.php';

	$kode_kategori = $_POST['kode_kategori'];
	$nama_kategori = $_POST['nama_kategori'];
	mysqli_query($koneksi, "UPDATE kategori SET nama_kategori = '$nama_kategori' WHERE kode_kategori = '$kode_kategori'");

	header('location:kategori.php');
?>