<?php 
	include 'header.php';
	include 'koneksi.php';
	$pulsa = mysqli_query($koneksi, "SELECT * FROM pulsa");

	if (isset($_GET['cari'])) {
		$key = $_GET['cari'];
		$cari = mysqli_query($koneksi, "SELECT * FROM pulsa where id_pulsa like '%$key%'");
	}
	else {
		$cari = $pulsa;
	}
?>
<div class="container" style="margin-top:40px">
	<h2>Pulsa Kiya Cell</h2>	
    <table class="table table-bordered table-striped">
		    	<form method="post" enctype="multipart/form-data">
            <div class="form-group row mt-2">
                    <div class="col-sm-10">
                      <input type="text" name="keyword" class="form-control" id="Pencarian nama pulsa"></div>
                    <button type="submit" class="btn btn-sm btn-success" name="cari">Cari Pulsa</button></div>
					<tr>
						<td>Total Data Pulsa    :</td>
						<td >
							<?php echo $total = mysqli_num_rows($cari);?>
						</td></tr>
				</table>
				</form>
				<div class="container">
        <a href="tambah_pulsa.php" class="btn btn-success mt-3">TAMBAH</a>
		<a href="pulsa_json.php" class ="badge badge-warning">JSON</a>
		<a href="pulsa_xml.php" class ="badge badge-warning">XML</a>
				<table class="table table-bordered w-100 p-3 ml-1 mt-3">
					<thead class="thead-light">
						<tr>
							<th scope="col">ID Pulsa</th>
							<th scope="col">Nama Pulsa</th>
							<th scope="col">Proveder</th>
							<th scope="col">Deskripsi Pulsa</th>
							<th scope="col">Stok</th>
							<th scope="col">Harga Pokok</th>
                            <th scope="col">Harga Jual</th>	
                            <th scope="col">Kode Kategori</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody> 
						<?php foreach($cari as $value):?>
						<tr>
							<th scope="row"><?php echo $value['id_pulsa']; ?></th>
							<td><?php echo $value['nama_pulsa']; ?></td>
							<td><?php echo $value['proveder'];?></td>
							<td><?php echo $value['deskripsi_pulsa'];?></td>
							<td><?php echo $value['stok'];?></td>
                            <td><?php echo $value['harga_pokok'];?></td>
                            <td><?php echo $value['harga_jual'];?></td>
							<td><?php echo $value['kode_kategori'];?></td>
							<td>
						
								<a href="hapus_pulsa.php?id=<?php echo $value['id_pulsa'] ?>" class="badge badge-danger">Hapus</a>
								<a href="tambah_pulsa.php" class ="badge badge-warning">Tambah Data</a>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				</br>  </br>  </br></br></br></br></br>  </br>  </br></br></br></br>
	  <footer class="container-fluid bg-4 text-center" style="background-color: #fffefe">
		<center><p>
		  	<strong>Copyright @ 2021 <a target="_blank" >TaraMaydita </a></strong>
		  	<br>
		 
              </div>
          </footer>
			</main>
		</div>
	</div>
</div>
<?php 
//
?>