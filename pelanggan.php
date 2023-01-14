<?php 
	
	include 'header.php';
	include 'koneksi.php';

	$pelanggan = mysqli_query($koneksi, "SELECT * FROM pelanggan");

	if (isset($_GET['cari'])) {
		$key = $_GET['cari'];

		$cari = mysqli_query($koneksi, "SELECT * FROM pelanggan where nama_pelanggan like '%$key%'");
	}
	else {
		$cari = $pelanggan;
	}
?>
<div class="container" style="margin-top:40px">
	<h2>Pelanggan Kiya Cell</h2>
	<hr>	
	<table class="table table-striped table-hover table-sm table-bordered">
			<main role="main" class="col-md-9 col-lg-12 px-3">
				<form method="get" class="ml-2 mt-3">
					<label for="">Pencarian Nama Pelanggan</label>
					<div class="input-group mb-3 w-100">
					    <input type="text" class="form-control" name="cari" placeholder="Cari">
					    <div class="input-group-apend">
						    <input type="submit"class="btn btn-primary">
						</div>
					</div>

					<table class="table table-striped table-sm w-100 p-3 ml-1 mt-3">
					<tr>
						<td>Total Pelanggan :</td>
						<td scope="row">
							<?php echo $total = mysqli_num_rows($cari);?>
						</td>
					</tr>
				</table>
				<div class="container">
        <a href="tambah_pelanggan.php" class="btn btn-success mt-3">TAMBAH</a>
		<a href="lap_pulsa.php" class ="badge badge-warning">CETAK PELANGGAN</a>
				</form>
				<table class="table table-bordered w-100 p-3 ml-1 mt-3">
					<thead class="thead-dark">
						<tr>
							<th scope="col">ID Pelanggan</th>
							<th scope="col">Nama Pelanggan</th>
							<th scope="col">Alamat</th>
                            <th scope="col">Jenis Kelamin</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($cari as $value):?>
						<tr>
							<th scope="row"><?php echo $value['id_pelanggan']; ?></th>
							<td><?php echo $value['nama_pelanggan']; ?></td>
							<td><?php echo $value['alamat']; ?></td>
                            <td><?php echo $value['Jenis_Kelamin']; ?></td>
							
							
							<td>
								<a href="edit_pelanggan.php?id=<?php echo $value['id_pelanggan'] ?>" class ="badge badge-warning">Edit</a>
								<a href="hapus_pelanggan.php?id=<?php echo $value['id_pelanggan'] ?>" class="badge badge-danger">Hapus</a>
								<a href="tambah_pelanggan.php" class ="badge badge-warning">Tambah Data</a>
								
							</td>
						
						</tr>
          
		  <?php endforeach; ?>
		  </table>
						</br>  </br>  </br></br>
	  <footer class="container-fluid bg-4 text-center" style="background-color: #fffefe">
		<center><p>
		  	<strong>Copyright @ 2021 <a target="_blank" >TaraMaydita </a></strong>
		  	<br>
		 
           
          </div>
						
					</tbody>
			
				
			</main>
		</div>
	</div>
</div>
