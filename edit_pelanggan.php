<?php 
	
	include 'header.php';
	include 'koneksi.php';
    $id = $_GET['id'];
	$data = mysqli_query($koneksi, "SELECT * FROM pelanggan where id_pelanggan = '$id'");
	foreach($data as $value):

?>
	
<div class="container" style="margin-top:40px">
	<h3>Edit Data Pelanggan</h3>

	<form method="post" action="ubah_pelanggan.php" class="mt-3">
		<div class="form-group row">
			<label for="" class="col-sm-2 col-form-label">Id Pelanggan</label>
			<div class="col-sm-10">
				<input type="text" readonly class="form-control" id="" name="id_pelanggan" value="<?php echo $value['id_pelanggan'] ?>">
			</div>
		</div>
		<div class="form-group row">
			<label for="" class="col-sm-2 col-form-label">Nama Pelanggan</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="" name="nama_pelanggan" value="<?php echo $value['nama_pelanggan'] ?>">
			</div>
		</div>
		<div class="form-group row">
			<label for="" class="col-sm-2 col-form-label">Jenis Kelamin</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="" name="Jenis_Kelamin" value="<?php echo $value['Jenis_Kelamin'] ?>">
			</div>
		</div>
		<div class="form-group row">
			<label for="" class="col-sm-2 col-form-label">Nomor Telpon</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="" name="alamat" value="<?php echo $value['alamat'] ?>">
			</div>
		</div>
		<div class="col-sm-10">
			<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			<a href="pelanggan.php" class="btn btn-warning">Back</a>
		</div>
	</form>
</div>

<?php 
	endforeach;
?>