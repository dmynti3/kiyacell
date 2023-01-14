<?php 
include 'header.php';
include 'koneksi.php';

	$id = $_GET['id'];
	$data = mysqli_query($koneksi, "SELECT * FROM pulsa where id_pulsa = '$id'");

	foreach($data as $value):

?>
<div class="container" style="margin-top:40px">
	<h3>Ubah Data Pulsa</h3>

	<form method="post" action="ubah_pulsa.php" class="mt-3">
		<div class="form-group row">
			<label for="formGroupExampleInput" class="col-sm-2 col-form-label">ID Pulsa</label>
			<div class="col-sm-10">
				<input type="text" readonly class="form-control" id="formGroupExampleInput" name="id_pulsa" value="<?php echo $value['id_pulsa'] ?>">
			</div>
		</div>
		<div class="form-group row">
			<label for="formGroupExampleInput" class="col-sm-2 col-form-label">Nama Pulsa</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="formGroupExampleInput" name="nama_pulsa" value="<?php echo $value['nama_pulsa'] ?>">
			</div>
		</div>
        
		<div class="form-group row">
			<label for="formGroupExampleInput" class="col-sm-2 col-form-label">Proveder</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="formGroupExampleInput" name="proveder" value="<?php echo $value['proveder'] ?>">
			</div>
		</div>
		<div class="form-group row">
			<label for="formGroupExampleInput" class="col-sm-2 col-form-label">Deskripsi pulsa</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="formGroupExampleInput" name="deskripsi_pulsa" value="<?php echo $value['deskripsi_pulsa'] ?>">
			</div>
		</div>
		<div class="form-group row">
			<label for="formGroupExampleInput" class="col-sm-2 col-form-label">Stok</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="formGroupExampleInput" name="stok" value="<?php echo $value['stok'] ?>">
			</div>
		</div>
		<div class="form-group row">
			<label for="formGroupExampleInput" class="col-sm-2 col-form-label">Kode Kategori</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="formGroupExampleInput" name="kode_kategori" value="<?php echo $value['kode_kategori'] ?>">
			</div>
		</div>
        <div class="form-group row">
			<label for="formGroupExampleInput" class="col-sm-2 col-form-label">Harga Pokok</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="formGroupExampleInput" name="harga_pokok" value="<?php echo $value['harga_pokok'] ?>">
			</div>
		</div>
		<div class="col-sm-10">
			<input type="submit" name="submit" class="btn btn-primary" value="SAVE">
			<a href="pulsa.php" class="btn btn-warning">KEMBALI</a>
		</div>
	</form>
</div>
<?php 
	endforeach;
	
	

?>