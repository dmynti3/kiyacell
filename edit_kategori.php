<?php
include 'header.php';
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM kategori where kode_kategori = '$id'");

foreach($data as $value):

?>
<div class="container" style="margin-top:40px">
<h3>Edit Data Kategori</h3>
<form method="post" action="ubah_kategori.php" class="mt-3">
<div class="form-group row">
	<label for="" class="col-sm-2 col-form-label">Kode Kategori</label>
	<div class="col-sm-10">
	<input type="text" class="form-control" id="" name="kode_kategori" value="<?php echo $value['kode_kategori'] ?>">
			</div>
		</div>
    <div class="form-group row">
        <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Nama Kategori</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="formGroupExampleInput" name="nama_kategori" value="<?php echo $value['nama_kategori'] ?>">
        </div>
    </div>
    <div class="col-sm-10">
        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
        <a href="kategori.php" class="btn btn-warning">Back</a>
    </div>
</form>
</div>
<?php 
	endforeach;
?>