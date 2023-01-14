<?php   include 'koneksi.php';

	$id = $_GET['id'];

	mysqli_query($koneksi, "DELETE FROM pulsa WHERE id_pulsa = '$id'");

	header('location:pulsa.php')
?>