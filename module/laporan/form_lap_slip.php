<!DOCTYPE html>
<html>
<head>
	<title>laporan Cetak Slip Gaji</title>
</head>
<body>
<div class="container">
 <h3>cetak slip gaji guru</h3><br>
 <small>silahkan pilih nama dan tanggal untuk cetak slip gaji</small>
    <form class="form-inline my-2 my-lg-0 mr-lg-2" action="module/laporan/pdf/lap_slip.php" method="post" target="_blank">
		<div class="col-sm-3">
			<input type="text" class="form-control" name="nama_guru" placeholder="ketikkan nama guru" required />
		</div>
		
		<div class="input-group">
			<label for="tgl" class="col-sm-2 control-label">Tgl</label>
            <input class="form-control" type="date" name="tgl1"> s/d <input class="form-control" type="date" name="tgl2"> 
        </div>
		
		<input type="submit" class="btn btn-primary" name="lihat" value="Lihat">
		
    </form>
</div>
</body>
</html>
