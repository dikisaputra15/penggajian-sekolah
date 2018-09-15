<h3>Edit Data User</h3>
<?php
		$kd_user = @$_GET['kd_user'];
		$sql = mysql_query("select * from tb_user where kd_user='$kd_user'") or die(mysql_error());
		$data = mysql_fetch_array($sql);
		$status = $data['level'];
?>
<form action="" method="post">
    <div class="form-group">
      <label for="nama">Nama Lengkap :</label>
      <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $data['nama_lengkap']; ?>" required />
    </div>  
	<div class="form-group">
      <label for="nama">Username :</label>
      <input type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>" required />
    </div> 
	<div class="form-group">
      <label for="nama">Password :</label>
      <input type="password" class="form-control" name="password" value="<?php echo $data['password']; ?>" required />
    </div> 
	<div class="form-group">
      <label for="status">Level:</label>
		<div> 
			<div class="radio-inline"> 
				<input type="radio" name="level" id="opsi1" value="tu" <?php if($status == "tu"){ echo "checked='true'"; } ?>> TU 
				<input type="radio" name="level" id="opsi2" value="pegawai" <?php if($status == "pegawai"){ echo "checked='true'"; } ?>> Pegawai
				<input type="radio" name="level" id="opsi2" value="bendahara" <?php if($status == "bendahara"){ echo "checked='true'"; } ?>> Bendahara
			</div>
	  </div>
    </div>
	
	<input type="submit" class="btn btn-primary" name="edit" value="Edit">
</form>
<?php
$nama = $_POST['nama_lengkap'];
$user = $_POST['username'];
$pass = $_POST['password'];
$level = $_POST['level'];

$edit = $_POST['edit'];

if($edit){
	mysql_query("update tb_user set nama_lengkap='$nama', username='$user', password='$pass', level='$level' where kd_user='$kd_user'") or die(mysql_error());
	?>
		<script type="text/javascript"> alert("data ekstrakurikuler berhasil diedit");
			window.location.href="?page=user";
		</script>
	<?php
}

?>