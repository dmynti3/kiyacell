<?php 	
	include 'header.php';
	include 'koneksi.php';
?>
  <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
    td {
    border: solid 1px #DDEEEE;
         color: #336B6B;
        padding: 10px;
		 background-color: #DDEFEF;
        text-shadow: 3px 3px 3px #fff;
    }
    </style>

<div class="container" style="margin-top:40px">

	<center><h3>Tambah Kategori</h3></center>
	<form method="POST" action="proses_kategori.php" enctype="multipart/form-data" >
    <table align="center"  border="0">
	<tr> 
        <td>Kode Kategori</td>
        <td><input type="text" name="kode_kategori" autofocus="" required="" placeholder="Kode Kategori" /></td>
      </tr>
      <tr> 
        <td>Nama Kategori</td>
        <td><input type="text" name="nama_kategori"required="" placeholder="Nama Kategori"  ></td>
      
      </tr>
		</div>

<center><td colspan="2" >
			<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			<a href="kategori.php" class="btn btn-warning">Back</a>
			</center>
		</div>
	</form>
</div>