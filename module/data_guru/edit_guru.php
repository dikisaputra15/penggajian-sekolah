<h3>Edit Data Guru</h3>
<?php
		$kd_guru = @$_GET['kd_guru'];
		$sql = mysql_query("select * from tb_guru where kd_guru='$kd_guru'") or die(mysql_error());
		$data = mysql_fetch_array($sql);
		$status = $data['status'];
?>
<form action="" method="post">
    <div class="form-group">
      <label for="nama">Nama Lengkap :</label>
      <input type="text" class="form-control" name="nama_guru" value="<?php echo $data['nama_guru']; ?>" required />
    </div> 
	<div class="form-group">
      <label for="jabatan">Jabatan :</label>
      <input type="text" class="form-control" name="jabatan" value="<?php echo $data['jabatan']; ?>" required />
    </div>
	<div class="form-group">
      <label for="status">Status :</label>
		<div> 
			<div class="radio-inline"> 
				<input type="radio" name="status" id="opsi1" value="GTY" <?php if($status == "GTY"){ echo "checked='true'"; } ?>> GTY 
				<input type="radio" name="status" id="opsi2" value="GTT" <?php if($status == "GTT"){ echo "checked='true'"; } ?>> GTT
			</div>
	  </div>
    </div>
	<input type="submit" class="btn btn-primary" name="edit" value="Edit">
</form>
<?php
$nama = $_POST['nama_guru'];
$jabatan = $_POST['jabatan'];
$status = $_POST['status'];

$edit = $_POST['edit'];

if($edit){
	mysql_query("update tb_guru set nama_guru='$nama', jabatan='$jabatan', status='$status' where kd_guru='$kd_guru'") or die(mysql_error());
	?>
		<script type="text/javascript"> alert("data Guru berhasil diedit");
			window.location.href="?page=data_guru";
		</script>
	<?php
}

?>