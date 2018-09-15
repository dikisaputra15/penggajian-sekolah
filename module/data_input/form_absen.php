<!DOCTYPE html>
<html lang="en">
<head>
	<title>halaman absen</title>
</head>
<body>
<h3>Absen Guru</h3>
<small>Silahkan Mengisi Form Daftar Hadir Guru</small><br><br>
<form action="" method="post">
    <div class="col-sm-4">
      <label for="nama">Nama Guru :</label>
      <select name="kd_guru" class="form-control">
		
		<?php
		include "koneksi.php"; 
		$db=mysql_query("SELECT * from tb_guru"); 
		while ($data=mysql_fetch_array($db)) {?>
			<option value="<?php echo $data['kd_guru']; ?>"><?php echo $data['nama_guru']; ?></option>
		<?php	
		}
		?>
			
	  </select>
    </div> 
	<div class="col-sm-4">
      <label for="jabatan">Tanggal :</label>
      <input type="date" class="form-control" name="tgl" required />
    </div>
	<div class="col-sm-4">
      <label for="status">Keterangan :</label>
		<div> 
			<div class="radio-inline"> 
				<input type="radio" name="keterangan" id="opsi1" value="hadir"> Hadir
				<input type="radio" name="keterangan" id="opsi2" value="sakit"> Sakit
				<input type="radio" name="keterangan" id="opsi3" value="izin"> Izin
				<input type="radio" name="keterangan" id="opsi4" value="alfa"> Alfa
			</div>
	  </div>
    </div>
	<div class="col-sm-4">
		<input type="submit" class="btn btn-primary" name="simpan" value="Kirim">
	</div>
</form>
</body>
</html>
<?php
$kd_guru = $_POST['kd_guru'];
$tgl = $_POST['tgl'];
$keterangan = $_POST['keterangan'];

$simpan = $_POST['simpan'];

if($simpan){
	mysql_query("insert into tb_absen values('', '$kd_guru', '$tgl', '$keterangan')") or die(mysql_error());
	?>
		<script type="text/javascript"> alert("Terima kasih sudah Absen klik ok untuk melanjutkan");
			window.location.href="?page=";
		</script>
	<?php
}

?>