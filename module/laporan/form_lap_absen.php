<!DOCTYPE html>
<html>
<head>
	<title>laporan kehadiran guru</title>
</head>
<body>
<div class="container">
 <h3>Laporan Kehadiran Guru</h3><br>
 <small>silahkan lihat kehadiran guru berdasarkan tanggal</small>
    <form class="form-inline my-2 my-lg-0 mr-lg-2" action="module/laporan/pdf/lap_hadir.php" method="post" target="_blank">
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
