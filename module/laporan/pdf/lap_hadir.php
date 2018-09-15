<?php
include('fpdf.php');
include('../../../koneksi.php');

$pdf = new FPDF();
$pdf->AddPage();

$pdf->Image('logo.jpg',15,10,20);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,5,'Daftar Hadir Dewan Guru','0','1','C',false);
$pdf->Cell(0,5,'SMP Islam Al-Iqro','0','1','C',false);
$pdf->SetFont('Arial','i',8);
$pdf->Cell(0,5,'Ter-Akreditasi "c"','0','1','C',false);
$pdf->Cell(0,2,'Alamat : JL. Raya Labuan Km. 09 Kp. Kadulanggong Desa Cipicung Kec. Cikedal Pandeglang 42266 ','0','1','C',false);
$pdf->Ln(5);
$pdf->Cell(190,0.6,'','0','1','C',true);
$pdf->Ln(5);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(8,6,'NO.',1,0,'c');
$pdf->Cell(35,6,'Tanggal',1,0,'c');
$pdf->Cell(60,6,'Nama Guru',1,0,'c');
$pdf->Cell(60,6,'Keterangan',1,0,'c');
$pdf->Ln(2);

$tgl = @$_POST['tgl'];
$no=0;
$sql = mysql_query("select tgl, nama_guru, keterangan from tb_guru inner join tb_absen using (kd_guru) where tgl='$tgl'") or die(mysql_error());
while($data = mysql_fetch_array($sql)){
	$no++;
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(8,4,$no.".",1,0,'c');
	$pdf->Cell(35,4,$data['tgl'],1,0,'L');
	$pdf->Cell(60,4,$data['nama_guru'],1,0,'L');
	$pdf->Cell(60,4,$data['keterangan'],1,0,'L');
}

$pdf->Ln(20);
$pdf->SetFont('Arial','i',12);
$pdf->Cell(0,5,'Cikedal');
$pdf->Ln(4);
$pdf->Cell(0,5,'Kepala Sekolah');
$pdf->Ln(20);
$pdf->SetFont('Arial','u',12);
$pdf->Cell(0,5,'Astuti Handayani, M.Pd.I');

$pdf->Output();
?>