<!DOCTYPE html>
<html>
<head>
	<title>laporan pembayaran</title>
</head>
<body>
<div class="container">
 <h3>Laporan pembayaran gaji guru</h3><br>
 <small>silahkan lihat laporan pembayaran gaji berdasarkan tanggal</small>
    <form class="form-inline my-2 my-lg-0 mr-lg-2" action="module/laporan/pdf/lap_gaji.php" method="post" target="_blank">
        <div class="input-group">
			<label for="tgl" class="col-sm-2 control-label">Tgl</label>
            <input class="form-control" type="date" name="tgl">
            <span class="input-group-append">
              <input type="submit" class="btn btn-primary" value="Lihat">
            </span>
        </div>
    </form>
</div>
</body>
</html>
