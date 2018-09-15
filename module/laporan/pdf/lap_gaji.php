<?php
include('fpdf.php');
include('../../../koneksi.php');

$pdf = new FPDF('L');
$pdf->AddPage();

$pdf->Image('logo.jpg',15,10,20);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,5,'Laporan Pembayaran Gaji','0','1','C',false);
$pdf->Cell(0,5,'SMP Islam Al-Iqro','0','1','C',false);
$pdf->SetFont('Arial','i',8);
$pdf->Cell(0,5,'Ter-Akreditasi "c"','0','1','C',false);
$pdf->Cell(0,2,'Alamat : JL. Raya Labuan Km. 09 Kp. Kadulanggong Desa Cipicung Kec. Cikedal Pandeglang 42266 ','0','1','C',false);
$pdf->Ln(5);
$pdf->Cell(265,0.6,'','0','1','C',true);
$pdf->Ln(5);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'Tanggal',1,0,'c');
$pdf->Cell(40,6,'Nama Guru',1,0,'c');
$pdf->Cell(45,6,'Jabatan',1,0,'c');
$pdf->Cell(35,6,'Uang Honor',1,0,'c');
$pdf->Cell(35,6,'Uang GTY',1,0,'c');
$pdf->Cell(40,6,'Uang Ekstrakurikuler',1,0,'c');
$pdf->Cell(35,6,'Total',1,0,'c');
$pdf->Ln(2);

$tgl = @$_POST['tgl'];
$sql = mysql_query("select tb_pembayaran.tgl, tb_pembayaran.uang_honor, tb_pembayaran.uang_insentif_gty,
tb_pembayaran.uang_insentif_ekstra, tb_guru.nama_guru, tb_jabatan.nama_jabatan FROM tb_guru JOIN 
tb_pembayaran ON tb_guru.kd_guru = tb_pembayaran.kd_guru JOIN tb_jabatan ON tb_jabatan.kd_jabatan =
tb_pembayaran.kd_jabatan where tgl='$tgl'") or die(mysql_error());
while($data = mysql_fetch_array($sql)){

$honor=$data['uang_honor'];
$gty=$data['uang_insentif_gty'];
$ekstra=$data['uang_insentif_ekstra'];
$total = $honor+$gty+$ekstra;
	
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(20,4,$data['tgl'],1,0,'L');
	$pdf->Cell(40,4,$data['nama_guru'],1,0,'L');
	$pdf->Cell(45,4,$data['nama_jabatan'],1,0,'L');
	$pdf->Cell(35,4,$data['uang_honor'],1,0,'L');
	$pdf->Cell(35,4,$data['uang_insentif_gty'],1,0,'L');
	$pdf->Cell(40,4,$data['uang_insentif_ekstra'],1,0,'L');
	$pdf->Cell(35,4,"$total",1,0,'L');
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