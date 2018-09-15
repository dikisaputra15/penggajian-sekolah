<h3>Tambah Data Guru</h3>
<form action="" method="post">
    <div class="form-group">
      <label for="nama">Nama Lengkap :</label>
      <input type="text" class="form-control" name="nama_guru" required />
    </div> 
	<div class="form-group">
      <label for="jabatan">Jabatan :</label>
      <input type="text" class="form-control" name="jabatan" required />
    </div>
	<div class="form-group">
      <label for="status">Status :</label>
		<div> 
			<div class="radio-inline"> 
				<input type="radio" name="status" id="opsi1" value="GTY"> GTY 
				<input type="radio" name="status" id="opsi2" value="GTT"> GTT
			</div>
	  </div>
    </div>
	<input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
</form>
<?php
$nama = $_POST['nama_guru'];
$jabatan = $_POST['jabatan'];
$status = $_POST['status'];

$simpan = $_POST['simpan'];

if($simpan){
	mysql_query("insert into tb_guru values('', '$nama', '$jabatan', '$status')") or die(mysql_error());
	?>
		<script type="text/javascript"> alert("tambah data Guru baru berhasil");
			window.location.href="?page=data_guru";
		</script>
	<?php
}

?>