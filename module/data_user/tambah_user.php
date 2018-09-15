<h3>Tambah Data User</h3>
<form action="" method="post">
    <div class="form-group">
      <label for="nama">Nama Lengkap :</label>
      <input type="text" class="form-control" name="nama_lengkap" required />
    </div> 
	<div class="form-group">
      <label for="jabatan">Username :</label>
      <input type="text" class="form-control" name="username" required />
    </div>
	<div class="form-group">
      <label for="jabatan">Password :</label>
      <input type="password" class="form-control" name="password" required />
    </div>
	<div class="form-group">
      <label for="status">Level :</label>
		<div> 
			<div class="radio-inline"> 
				<input type="radio" name="level" id="opsi1" value="tu"> TU 
				<input type="radio" name="level" id="opsi2" value="pegawai"> Pegawai
				<input type="radio" name="level" id="opsi2" value="bendahara"> Bendahara
			</div>
	  </div>
    </div>
	<input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
</form>
<?php
$nama = $_POST['nama_lengkap'];
$user = $_POST['username'];
$pass = $_POST['password'];
$level = $_POST['level'];

$simpan = $_POST['simpan'];

if($simpan){
	mysql_query("insert into tb_user values('', '$nama', '$user', '$pass', '$level')") or die(mysql_error());
	?>
		<script type="text/javascript"> alert("tambah data User baru berhasil");
			window.location.href="?page=user";
		</script>
	<?php
}

?>