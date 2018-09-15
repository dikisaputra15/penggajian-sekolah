<h3>Edit Jabatan</h3>
<?php
		$kd_jabatan = @$_GET['kd_jabatan'];
		$sql = mysql_query("select * from tb_jabatan where kd_jabatan='$kd_jabatan'") or die(mysql_error());
		$data = mysql_fetch_array($sql);
?>
<form action="" method="post">
    <div class="form-group">
      <label for="nama">Nama Jabatan :</label>
      <input type="text" class="form-control" name="nama" value="<?php echo $data['nama_jabatan']; ?>" required />
    </div> 
	<div class="form-group">
      <label for="nama">Gaji Pokok :</label>
      <input type="text" class="form-control" name="gaji" value="<?php echo $data['gaji_pokok']; ?>" required />
    </div> 
	
	<input type="submit" class="btn btn-primary" name="edit" value="Edit">
</form>
<?php
$nama = $_POST['nama'];
$gaji = $_POST['gaji'];

$edit = $_POST['edit'];

if($edit){
	mysql_query("update tb_jabatan set nama_jabatan='$nama', gaji_pokok='$gaji' where kd_jabatan='$kd_jabatan'") or die(mysql_error());
	?>
		<script type="text/javascript"> alert("data Jabatan berhasil diedit");
			window.location.href="?page=jabatan";
		</script>
	<?php
}

?>