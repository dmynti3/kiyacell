<?php 
	include 'header.php';
	include 'koneksi.php';

	$kategori = mysqli_query($koneksi, "SELECT * FROM kategori");

	if (isset($_GET['cari'])) {
		$key = $_GET['cari'];
		$cari = mysqli_query($koneksi, "SELECT * FROM kategori where kode_kategori like '%$key%'");
	}
	else {
		$cari = $kategori;
	}
?>
<div class="container" style="margin-top:40px">
	<h2>Daftar Kategori </h2>
	<hr>	
	<table class="table table-striped table-hover table-sm table-bordered">
			<main role="main" class="col-md-9 col-lg-12 px-3">
				<form method="get" class="ml-2 mt-3">
					<label for="">Pencarian Kategori</label>
					<div class="input-group mb-3 w-100">
					    <input type="text" class="form-control" name="cari" placeholder="Cari">
					    <div class="input-group-apend">
						    <input type="submit"class="btn btn-primary">
						</div>
					</div>
					<table class="table table-striped table-sm w-100 p-3 ml-1 mt-3">
					<tr>
						<td>Total Data Kategori :</td>
						<td scope="row">
							<?php echo $total = mysqli_num_rows($cari);?>
						</td>
					</tr>
				</table>
				</form>
				<div class="container">
        <a href="tambah_kategori.php" class="btn btn-success mt-3">TAMBAH</a>
				<table class="table table-bordered w-100 p-3 ml-1 mt-3">
                <thead class="thead-light">
						<tr>
							<th scope="col">Kode Kategori</th>
							<th scope="col">Nama kategori</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($cari as $value):?>
						<tr>
							<th scope="row"><?php echo $value['kode_kategori']; ?></th>
							<td><?php echo $value['nama_kategori']; ?></td>
							<td>
								<a href="edit_kategori.php?id=<?php echo $value['kode_kategori'] ?>" class ="badge badge-warning">Edit</a>
								<a href="hapus_kategori.php?id=<?php echo $value['kode_kategori'] ?>" class="badge badge-danger">Hapus</a>
								<a href="tambah_kategori.php?id=" class ="badge badge-warning">Tambah Data</a>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				</br>  </br>  </br></br></br></br>
	  <footer class="container-fluid bg-4 text-center" style="background-color: #fffefe">
		<center><p>
		  	<strong>Copyright @ 2021 <a target="_blank" >TaraMaydita </a></strong>
		  	<br>
		 
			</main>
		</div>
	</div>
</div>

