<?php  
	include 'koneksi.php';

	$id = $_GET['id'];

	mysqli_query($koneksi, "DELETE FROM kategori WHERE kode_kategori = '$id'");

	header('location:kategori.php')
?>