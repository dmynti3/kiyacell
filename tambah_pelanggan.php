<?php 
	include 'header.php';
	include 'koneksi.php';
?>
 
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color:  #FFA07A;
      }
    button {
          background-color:  #FFA07A;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    td {
    border: solid 1px #DDEEEE;
       
         color: #336B6B;
        padding: 10px;
            background-color: #DDEFEF;
        text-shadow: 1px 1px 1px #fff;
    }


    </style>
<div class="container" style="margin-top:40px">
	<center><h3>Tambah pelanggan</h3></center>

	<form method="POST" action="proses_pelanggan.php" enctype="multipart/form-data" >
    <table align="center"  border="0">
	<tr> 
        <td>ID Pelanggan</td>
        <td><input type="text" name="id_pelanggan" autofocus="" required="" /></td>
      </tr>
      <tr> 
        <td>Nama Pelanggan</td>
        <td><input type="text" name="nama_pelanggan"required=""  ></td>
      </tr>
      <tr> 
        <td>Alamat</td>
        <td><input type="text" name="alamat" required="" ></td>
      </tr>
     
	  <tr>



	<td>Jenis Kelamin 	:</td>
	<td><input type="radio" name="Jenis_Kelamin" value="laki-laki" checked />laki-laki
	<input type="radio" name="Jenis_Kelamin" value="perempuan"  /> perempuan</td> 
				
<br />
	</tr>
		<center><td colspan="2" >
			<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			<a href="pelanggan.php" class="btn btn-warning">Back</a>
			</center>
		</div>
	</form>
</div>