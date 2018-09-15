<h3>Tambah Data Jabatan</h3>
<form action="" method="post">
    <div class="form-group">
      <label for="nama">Nama Jabatan :</label>
      <input type="text" class="form-control" name="nama" required />
    </div>
	<div class="form-group">
      <label for="nama">Gaji Pokok :</label>
      <input type="text" class="form-control" name="gaji" required />
    </div> 
	
	<input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
</form>
<?php
$nama = $_POST['nama'];
$gaji = $_POST['gaji'];

$simpan = $_POST['simpan'];

if($simpan){
	mysql_query("insert into tb_jabatan values('', '$nama', '$gaji')") or die(mysql_error());
	?>
		<script type="text/javascript"> alert("tambah data jabatan baru berhasil");
			window.location.href="?page=jabatan";
		</script>
	<?php
}

?>