<?php

@session_start();
include "koneksi.php";
ob_start();

if(@$_SESSION['guru'] || @$_SESSION['tu'] || @$_SESSION['kepalasekolah']){
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Aplikasi Penggajian</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="datatables/datatables.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Aplikasi Penggajian</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
		
		<?php
		if(@$_SESSION['tu']){ ?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Master</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="?page=data_guru">Mengelola Data Guru</a>
            </li>
            <li>
              <a href="?page=jabatan">Mengelola Data Jabatan</a>
            </li>
			<li>
              <a href="?page=user">Mengelola Data Pengguna</a>
            </li>
          </ul>
        </li> 
		<?php
			}
		?>
		
		<?php
		if(@$_SESSION['guru']){ ?>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="?page=absen">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Form Absen Guru</span>
          </a>
        </li>
		<?php
			}
		?>
		
		<?php
		if(@$_SESSION['tu']){ ?>
		 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="?page=pembayaran">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Form pembayaran gaji</span>
          </a>
        </li>
		<?php
			}
		?>
		
		<?php
		if(@$_SESSION['tu']){ ?>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Laporan</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="?page=form_lap_absen">Laporan Kehadiran Guru</a>
            </li>
			<li>
              <a href="?page=lap_gaji">Laporan Pembayaran Gaji Seluruh Guru</a>
            </li>
            <li>
              <a href="?page=lap_slip">Lihat dan Cetak Slip Gaji</a>
            </li>
			<li>
              <a href="?page=lap_jurnal">Lihat Jurnal</a>
            </li>
          </ul>
        </li>

	  <?php
			}else if(@$_SESSION['guru']){ ?>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Laporan</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="?page=form_lap_absen">Laporan Kehadiran Guru</a>
            </li>
			<li>
              <a href="?page=lap_gaji">Laporan Pembayaran Gaji Seluruh Guru</a>
            </li>
            <li>
              <a href="?page=lap_slip">Lihat dan Cetak Slip Gaji</a>
            </li>
			<li>
              <a href="?page=lap_jurnal">lihat Jurnal</a>
            </li>
          </ul>
        </li>
      
	  <?php
		}else if(@$_SESSION['kepalasekolah']){ ?>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Laporan</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="?page=form_lap_absen">Laporan Kehadiran Guru</a>
            </li>
			<li>
              <a href="?page=lap_gaji">Laporan Pembayaran Gaji Seluruh Guru</a>
            </li>
            <li>
              <a href="?page=lap_slip">Lihat dan Cetak Slip Gaji Guru</a>
            </li>
			<li>
              <a href="?page=lap_jurnal">Lihat Jurnal</a>
            </li>
          </ul>
        </li>
		<?php
		}
		?>
		<?php
		if(@$_SESSION['tu']){ ?>
		 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Help</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="?page=backup">Backup Database</a>
            </li>
          </ul>
        </li>
		<?php
		}
		?>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="logout.php" class="nav-link">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <!-- /.container-fluid-->
	<div class="container-fluid">
	<?php
	  
		$page=@$_GET['page'];
		$action=@$_GET['action'];
		if($page == "data_guru"){
			if($action == ""){
				include "module/data_guru/list_guru.php";
			}else if($action == "tambah_guru"){
				include "module/data_guru/tambah_guru.php";
			}else if($action == "edit"){
				include "module/data_guru/edit_guru.php";
			}else if($action=="hapus"){
				$kd_guru = @$_GET[kd_guru];
				mysql_query("delete from tb_guru where kd_guru = '$kd_guru'") or die(mysql_error());
				echo '<script type="text/javascript">window.location.href="?page=data_guru";</script>';
			}
		}
		else if($page == "jabatan"){
			if($action == ""){
				include "module/data_jabatan/list_jabatan.php";
			}else if($action == "tambah_jabatan"){
				include "module/data_jabatan/tambah_jabatan.php";
			}else if($action == "edit"){
				include "module/data_jabatan/edit_jabatan.php";
			}else if($action == "hapus"){
				$kd_jabatan = @$_GET[kd_jabatan];
				mysql_query("delete from tb_jabatan where kd_jabatan = '$kd_jabatan'") or die(mysql_error());
				echo '<script type="text/javascript">window.location.href="?page=jabatan";</script>';
			}
		}
		else if($page == "user"){
			if($action == ""){
				include "module/data_user/list_user.php";
			}else if($action == "tambah_user"){
				include "module/data_user/tambah_user.php";
			}else if($action == "edit"){
				include "module/data_user/edit_user.php";
			}else if($action == "hapus"){
				$kd_user = @$_GET[kd_user];
				mysql_query("delete from tb_user where kd_user = '$kd_user'") or die(mysql_error());
				echo '<script type="text/javascript">window.location.href="?page=user";</script>';
			}
		}
		else if($page == "absen"){
				include "module/data_input/form_absen.php";
		}
		else if($page == "pembayaran"){
				include "module/data_input/form_pembayaran.php";
		}
		else if($page == "form_lap_absen"){
				include "module/laporan/form_lap_absen.php";
		}
		else if($page == "lap_gaji"){
				include "module/laporan/form_lap_gaji.php";
		}
		else if($page == "lap_slip"){
				include "module/laporan/form_lap_slip.php";
		}
		else if($page == "lap_jurnal"){
				include "module/laporan/form_lap_jurnal.php";
		}
		else if($page == "backup"){
				include "module/data_input/backup.php";
		}
		else if($page == ""){
			include "halaman_utama.php";
		}else{
			echo "404! halaman tidak di temukan";
		}
		
	  ?>
	</div>
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
	<script src="datatables/datatables.min.js"></script>
	<script type="text/javascript">
		$(document).ready( function () {
		$('#datatables').DataTable();
		} );
	</script>
  </div>
</body>

</html>

<?php

}else{
	header("location: login.php");
}

?>
