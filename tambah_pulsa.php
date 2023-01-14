<?php 
	
    include 'header.php';
	include 'koneksi.php';
	$kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
?>

<div class="container" style="margin-top:40px">
	<h3>Tambah produk</h3>

	<form method="post" action="proses_pulsa.php" class="mt-3">
		<div class="form-group row">
			<label for="formGroupExampleInput" class="col-sm-2 col-form-label">ID Pulsa</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="formGroupExampleInput" name="id_pulsa" placeholder="pulsa">
			</div>
		</div>
		<div class="form-group row">
			<label for="formGroupExampleInput" class="col-sm-2 col-form-label">Nama Pulsa</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="formGroupExampleInput" name="nama_pulsa" placeholder="Nama Pulsa">
			</div>
		</div>
        <div class="form-group row">
        <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Proveder</label>
        <div class="col-sm-10">
		
      
                                    <select name="proveder" id="proveder" class="form-control" > 
                                        <option value="">- Pilih Proveder -</option> 
                                        <option value="INDOSAT"> INDOSAT</option>    
                                        <option value="XL">XL</option> 
                                        <option value="SMARTFREEN"> SMARTFREEN</option> 
                                        <option value="THREE"> THREE</option> 
                                        <option value="TELKOMSEL"> TELKOMSEL</option>      
                                        <option value="TELKOMSEL"> PLN</option>                         
                                        <?php
                                        if (!empty($proveder)) {
                                            foreach ($proveder as $row) {
                                                echo "<option value='$row->proveder'>" . $row->proveder . "</option>";
                                            }
                                        }
                                        ?>
                                    </select>                                     
                                </div>
		</div>
		<div class="form-group row">
			<label for="formGroupExampleInput" class="col-sm-2 col-form-label">Deskripsi Pulsa</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="formGroupExampleInput" name="deskripsi_pulsa" placeholder="Deskripsi Pulsa">
			</div>
		</div>
		<div class="form-group row">
			<label for="formGroupExampleInput" class="col-sm-2 col-form-label">Stok</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="formGroupExampleInput" name="stok" placeholder="Stok">
			</div>
		
		</div>
		<div class="form-group row">
			<label for="formGroupExampleInput" class="col-sm-2 col-form-label">Harga Pokok</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="formGroupExampleInput" name="harga_pokok" placeholder="Harga pokok">
			</div>
		</div>
     
		<div class="form-group row">
			<label for="formGroupExampleInput" class="col-sm-2 col-form-label">Harga Jual</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="formGroupExampleInput" name="harga_jual" placeholder="Harga jual">
			</div>
		</div>
        <div class="form-group row">
        <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Kategori</label>
        <div class="col-sm-10">
		
      
                                    <select name="kode_kategori" id="kode_kategori" class="form-control" > 
                                        <option value="">- Pilih Kode Kategori -</option> 
                                        <option value="K1-PULSA LISTRIK"> -K1-PULSA LISTRIK-</option>    
                                        <option value="K2-PULSA DATA">-K2-PULSA DATA-</option> 
                                        <option value="K3-ALL OPERATOR"> -K3 -ALL OPERATOR-</option>                           
                                        <?php
                                        if (!empty($kategori)) {
                                            foreach ($kategori as $row) {
                                                echo "<option value='$row->kode_kategori'>" . $row->kategori . "</option>";
                                            }
                                        }
                                        ?>
                                    </select>                                     
                                </div>
			</div>
		</div>
		<div class="col-sm-10">
			<input type="submit" name="submit" class="btn btn-primary" value="SAVE">
			<a href="produk.php" class="btn btn-warning">KEMBALI</a>
		</div>
	</form>
</div>

<?php 
	
	
?>