<?php
include "koneksi.php";
header('Content-Type: text/xml');
$query = "SELECT * FROM pulsa";
$hasil = mysqli_query($koneksi,$query);
$jumField = mysqli_num_fields($hasil);
echo "<?xml version='1.0'?>";
echo "<data>";
while ($data = mysqli_fetch_array($hasil))
{
echo "<pulsa>";
echo"<id_pulsa>",$data['id_pulsa'],"</id_pulsa>";
echo"<nama_pulsa>",$data['nama_pulsa'],"</nama_pulsa>";
echo"<proveder>",$data['proveder'],"</proveder>";
echo"<deskripsi_pulsa>",$data['deskripsi_pulsa'],"</deskripsi_pulsa>";
echo"<stok>",$data['stok'],"</stok>";
echo"<harga_pokok>",$data['harga_pokok'],"</harga_pokok>";
echo"<harga_jual>",$data['harga_jual'],"</harga_jual>";
echo"<kode_kategori>",$data['kode_kategori'],"</kode_kategori>";


echo "</pulsa>";
}
echo "</data>";
?>