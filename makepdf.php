<?php  
require_once 'functions.php';
$dataVaksinasi = query("SELECT * FROM data_vaksinasi");
$title = 'Result';
?>

<?php
require_once 'fpdf.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial' , '' , '12');

$pdf->Cell(180,10,"Detail Lengkap",1,1,'C');

foreach ($dataVaksinasi as $data):
$Nama = $data['nama'];
$Usia = $data['usia'];
$StatusVax = $data['statusVax'];
$Alasan = $data['alasanVax'];
$JenisVaksin = $data['jenisVax'];
$OrangRumah = $data['orangRumah'];
$OrangRumahVax = $data['orangRumahVax'];
$Ratarata = $data['ratarata'];

$pdf->Cell(100,10,"Nama",1,0);
$pdf->Cell(80,10,$Nama,1,1);
$pdf->Cell(100,10,"Usia",1,0);
$pdf->Cell(80,10,$Usia,1,1);
$pdf->Cell(100,10,"Status",1,0);
$pdf->Cell(80,10,$StatusVax,1,1);
$pdf->Cell(100,10,"Alasan",1,0);
$pdf->Cell(80,10,$Alasan,1,1);
$pdf->Cell(100,10,"Jenis Vaksin",1,0);
$pdf->Cell(80,10,$JenisVaksin,1,1);
$pdf->Cell(100,10,"Jmlh Orang di Rmh",1,0);
$pdf->Cell(80,10,$OrangRumah,1,1);
$pdf->Cell(100,10,"Jmlh yang Tervaksin di Rmh",1,0);
$pdf->Cell(80,10,$OrangRumahVax,1,1);
$pdf->Cell(100,10,"Kontak Dengan Orang Luar",1,0);
$pdf->Cell(80,10,$Ratarata,1,1);
$pdf->Cell(180,10,"",1,1,'C');

endforeach;


$pdf->Output('');

?>
