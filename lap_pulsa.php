
  <?php
 
  require('fpdf/fpdf.php');

  $pdf = new FPDF('l','mm','A5');
 
  $pdf->AddPage();

  $pdf->SetFont('Arial','B',16);

  $pdf->Cell(190,7,'KIYA CELL',0,1,'C');
  $pdf->SetFont('Arial','B',12);
  $pdf->Cell(190,7,'DAFTAR PELANGGAN KONTER PULSA ',0,1,'C');

 
  $pdf->Cell(10,7,'',0,1);

  $pdf->SetFont('Arial','B',10);
  $pdf->Cell(30,6,'ID Pelanggan',1,0);
  $pdf->Cell(50,6,'Nama Pelanggan',1,0);
  $pdf->Cell(30,6,'Alamat',1,0);
  $pdf->Cell(50,6,'Jenis Kelamin',1,1);



  $pdf->SetFont('Arial','',10);

  include 'koneksi.php';
  $pelanggan = mysqli_query($koneksi, "select * from pelanggan");
  while ($row = mysqli_fetch_array($pelanggan)){
    $pdf->Cell(30,6,$row['id_pelanggan'],1,0);
    $pdf->Cell(50,6,$row['nama_pelanggan'],1,0);
    $pdf->Cell(30,6,$row['alamat'],1,0);
    $pdf->Cell(50,6,$row['Jenis_Kelamin'],1,1);
    
  }
  
  $pdf->Output();