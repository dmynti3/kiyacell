<?php
include "koneksi.php";
$sql="select * from pulsa order by id_pulsa";
$tampil = mysqli_query($koneksi,$sql);
if (mysqli_num_rows($tampil) > 0) {
$no=1;
$response = array();
$response["data"] = array();
while ($r = mysqli_fetch_array($tampil)) {
$h['id_pulsa'] = $r['id_pulsa'];
$h['nama_pulsa'] = $r['nama_pulsa'];
$h['proveder'] = $r['proveder'];
$h['deskripsi_pulsa'] = $r['deskripsi_pulsa'];
$h['stok'] = $r['stok'];
$h['harga_pokok'] = $r['harga_pokok'];
$h['harga_jual'] = $r['harga_jual'];
$h['kode_kategori'] = $r['kode_kategori'];



array_push($response["data"], $h);
}
echo json_encode($response);
}
else {
$response["message"]="tidak ada data";
echo json_encode($response);
}
?>