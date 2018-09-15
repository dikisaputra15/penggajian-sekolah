<!DOCTYPE html>
<html>
<head>
	<title>laporan Cetak Slip Gaji</title>
</head>
<body>
<div class="container">
 <h3>Lihat Jurnal</h3><br>
 <small>silahkan pilih periode atau tanggal</small>
    <form class="form-inline my-2 my-lg-0 mr-lg-2" action="module/laporan/pdf/lap_jurnal.php" method="post" target="_blank">
		
		<div class="input-group">
			<label for="tgl" class="col-sm-2 control-label">Tgl</label>
            <input class="form-control" type="date" name="tgl1"> s/d Tgl <input class="form-control" type="date" name="tgl2"> 
        </div>
		
		<input type="submit" class="btn btn-primary" name="lihat" value="Lihat">
		
    </form>
</div>
</body>
</html>
