<?php 
	include 'koneksi.php';

	$id_pelanggan 	=$_POST['id_pelanggan'];
	$nama_pelanggan =$_POST['nama_pelanggan'];
    $alamat 	=$_POST['alamat'];
	$Jenis_Kelamin 	=$_POST['Jenis_Kelamin'];


	mysqli_query($koneksi, "INSERT INTO pelanggan (id_pelanggan, nama_pelanggan,alamat, Jenis_Kelamin) VALUES ('$id_pelanggan', '$nama_pelanggan', '$alamat','$Jenis_Kelamin')");

	header('location:pelanggan.php');   
    ?>

