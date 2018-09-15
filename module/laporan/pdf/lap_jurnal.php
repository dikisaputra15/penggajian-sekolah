<?php
include('fpdf.php');
include('../../../koneksi.php');

$pdf = new FPDF('L');
$pdf->AddPage();

$pdf->Image('logo.jpg',15,10,20);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,5,'Laporan Jurnal','0','1','C',false);
$pdf->Cell(0,5,'SMP Islam Al-Iqro','0','1','C',false);
$pdf->SetFont('Arial','i',8);
$pdf->Cell(0,5,'Ter-Akreditasi "c"','0','1','C',false);
$pdf->Cell(0,2,'Alamat : JL. Raya Labuan Km. 09 Kp. Kadulanggong Desa Cipicung Kec. Cikedal Pandeglang 42266 ','0','1','C',false);
$pdf->Ln(5);
$pdf->Cell(265,0.6,'','0','1','C',true);
$pdf->Ln(5);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(23,6,'Kode Jurnal',1,0,'c');
$pdf->Cell(23,6,'Periode',1,0,'c');
$pdf->Cell(50,6,'Keterangan',1,0,'c');
$pdf->Cell(40,6,'Debit',1,0,'c');
$pdf->Cell(35,6,'Kredit',1,0,'c');
$pdf->Ln(2);

$tgl1 = @$_POST['tgl1'];
$tgl2 = @$_POST['tgl2'];
$sql = mysql_query("select * from tb_pembayaran where tgl between '$tgl1' and '$tgl2'") or die(mysql_error());
while($data = mysql_fetch_array($sql)){

$honor=$data['uang_honor'];
$gty=$data['uang_insentif_gty'];
$ekstra=$data['uang_insentif_ekstra'];
$debit = $honor+$gty+$ekstra;
$kredit = 0;
	
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(23,4,$data['kd_pembayaran'],1,0,'L');
	$pdf->Cell(23,4,$data['tgl'],1,0,'L');
	$pdf->Cell(50,4,$data['keterangan'],1,0,'L');
	$pdf->Cell(40,4,"$debit",1,0,'L');
	$pdf->Cell(35,4,"$kredit",1,0,'L');
}


$pdf->Ln(20);
$pdf->SetFont('Arial','i',12);
$pdf->Cell(0,5,'Mengetahui');
$pdf->Ln(4);
$pdf->Cell(0,5,'Kepala Sekolah');
$pdf->Ln(20);
$pdf->SetFont('Arial','u',12);
$pdf->Cell(0,5,'Astuti Handayani, M.Pd.I');

$pdf->Output();
?>