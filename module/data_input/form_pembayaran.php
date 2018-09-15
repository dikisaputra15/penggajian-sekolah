<?php
	include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>form bayar gaji</title>
</head>
<body>
<h3>form pembayaran Gaji Guru</h3>
<form action="" method="post">
	<div class="col-sm-6">
      <label for="jabatan">Tanggal :</label>
      <input type="date" class="form-control" name="tgl" required />
    </div>
    <div class="col-sm-6">
      <label for="nama">Nama Guru :</label>
      <select name="kd_guru" class="form-control">
		
		<?php
		$db=mysql_query("SELECT * from tb_guru"); 
		while ($data=mysql_fetch_array($db)) {?>
			<option value="<?php echo $data['kd_guru']; ?>"><?php echo $data['nama_guru']; ?></option>
		<?php	
		}
		?>
			
	  </select>
    </div>
	<div class="col-sm-6">
      <label for="nama">Jabatan :</label>
      <select name="kd_jabatan" class="form-control">
		
		<?php
		$db=mysql_query("SELECT * from tb_jabatan"); 
		while ($data=mysql_fetch_array($db)) {?>
			<option value="<?php echo $data['kd_jabatan']; ?>"><?php echo $data['nama_jabatan']; ?></option>
		<?php	
		}
		?>
			
	  </select>
    </div>
	<div class="col-sm-4">
      <label for="jabatan">Jumlah Uang Honor Rp:</label>
      <input type="text" class="form-control" name="uang_honor" required />
    </div>
	<div class="col-sm-6">
      <label for="jabatan">Jumlah Insentif Uang GTY Rp:</label><br>
	  <small>silahkan isi angka 0 jika tidak ada gaji insentif GTY</small>
      <input type="text" class="form-control" name="uang_gty" required />
    </div>
	<div class="col-sm-6">
      <label for="jabatan">Jumlah Insentif Uang Ekstrakurikuler Rp:</label><br>
	  <small>silahkan isi angka 0 jika tidak ada gaji insentif Ekstrakurikuler</small>
      <input type="text" class="form-control" name="uang_ekstra" required />
    </div> 
	<div class="col-sm-6">
		<label for="status">Keterangan :</label>
		<input type="text" class="form-control" name="keterangan" required />
    </div> <br>
	
	<div class="col-sm-6">
		<input type="submit" class="btn btn-primary" name="selesai" value="Selesai">
	</div>
</form>
</body>
</html>
<?php
$kd_guru = $_POST['kd_guru'];
$kd_jabatan = $_POST['kd_jabatan'];
$tgl = $_POST['tgl'];
$uang_honor = $_POST['uang_honor'];
$uang_gty= $_POST['uang_gty'];
$uang_ekstra= $_POST['uang_ekstra'];
$keterangan= $_POST['keterangan'];

$selesai = $_POST['selesai'];

if($selesai){
	mysql_query("insert into tb_pembayaran values('', '$kd_guru', '$kd_jabatan', '$tgl', '$uang_honor', '$uang_gty', '$uang_ekstra', '$keterangan')") or die(mysql_error());
	?>
		<script type="text/javascript"> alert("Terima kasih pembayaran berhasil klik ok untuk melanjutkan");
			window.location.href="?page=";
		</script>
	<?php
}

?>