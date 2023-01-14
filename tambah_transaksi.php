<?php 
	include 'header.php';
	include 'koneksi.php';

	$pulsa = mysqli_query($koneksi, "SELECT * FROM pulsa");
	$pelanggan = mysqli_query($koneksi, "SELECT * FROM pelanggan");
?>
<div class="container" style="margin-top:40px">
	<h3>Pemesanan Pulsa</h3>
	<form method="post" action="proses_transaksi.php">
		<div class="form-group row">
			<label for="" class="col-sm-2 col-form-label">ID Transaksi</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="" name="kode_transaksi" placeholder="Id Transaksi">
			</div>
		</div>
		<div class="form-group row">
			<label for="" class="col-sm-2 col-form-label">ID Pulsa</label>
			<div class="col-sm-10">
				<select class="form-control" name="pulsa">
					<?php foreach ($pulsa as $value): ?>
						<option value="<?=$value['id_pulsa'];?>">
							<?=$value['id_pulsa'];?> - <?=$value['nama_pulsa'];?>
						</option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label for="formGroupExampleInput" class="col-sm-2 col-form-label">ID Pelanggan</label>
			<div class="col-sm-10">
				<select class="form-control" name="pelanggan">
					<?php foreach ($pelanggan as $value): ?>
						<option value="<?=$value['id_pelanggan'];?>">
							<?=$value['id_pelanggan'];?> - <?=$value['nama_pelanggan'];?>
						</option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label for="" class="col-sm-2 col-form-label">Tanggal Pesan</label>
			<div class="col-sm-10">
				<input type="date" name="tgl_transaksi" class="form-control">
			</div>
		</div>
		<div class="form-group row">
			<label for="" class="col-sm-2 col-form-label">Total</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="" name="total_hargabeli" placeholder="total bayar">
			</div>
			<div class="form-group row">
        <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
		
      
                                    <select name="proveder" id="status" class="form-control" > 
                                       
                                        <option value="HUTANG"> HUTANG</option>    
                                        <option value="LUNAS">LUNAS</option> 
                                                              
                                        <?php
                                        if (!empty($status)) {
                                            foreach ($status as $row) {
                                                echo "<option value='$row->status'>" . $row->status . "</option>";
                                            }
                                        }
                                        ?>
                                    </select>                                     
                                </div>      
			</div>
		</div>
		<div class="col-sm-10">
			<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			<a href="transaksi.php" class="btn btn-warning">Back</a>
		</div>
	</form>


