<?php  
	include 'koneksi.php';

	$id_pelanggan 	=$_POST['id_pelanggan'];
	$nama_pelanggan =$_POST['nama_pelanggan'];
    $alamat     	=$_POST['alamat'];
	$Jenis_Kelamin 	=$_POST['Jenis_Kelamin'];

	mysqli_query($koneksi, "UPDATE pelanggan SET nama_pelanggan= '$nama_pelanggan', Jenis_Kelamin = '$Jenis_Kelamin', alamat='$alamat' WHERE id_pelanggan = '$id_pelanggan'");

	header('location:pelanggan.php');
?>


