<?php  
	include 'koneksi.php';

	$kode_kategori = $_POST['kode_kategori'];
	$nama_kategori = $_POST['nama_kategori'];

	mysqli_query($koneksi, "INSERT INTO kategori (kode_kategori, nama_kategori) VALUES ('$kode_kategori', '$nama_kategori')");

	header('location:kategori.php');
?>

