<?php

@session_start();
include "koneksi.php";

if(@$_SESSION['guru'] || @$_SESSION['tu'] ||@$_SESSION['kepalasekolah']){
	header("location: index.php");
	}else{
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input class="form-control" name="user" type="text" aria-describedby="emailHelp" placeholder="Enter Username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" name="password" type="password" placeholder="Password">
          </div>
         
          <input type="submit" class="btn btn-primary btn-block" name="login" value="Login">
        </form>
		
		<?php
				$user = @$_POST['user'];
				$password = @$_POST['password'];
				$login = @$_POST['login'];
				
				if($login){
					if($user=="" || $password==""){
						?> <script type="text/javascript"> alert("username / password tidak boleh kosong"); </script> <?php 
					}else{
						$sql=mysql_query("select * from tb_user where username='$user' and password='$password'") or die (mysql_error()); 
						$data=mysql_fetch_array($sql);
						$cek=mysql_num_rows($sql);
						
						if($cek >= 1){
							if($data['level']=="guru"){
								@$_SESSION['guru'] = $data['kd_user'];
								header("location: index.php");
							}else if($data['level']=="tu"){
								@$_SESSION['tu'] = $data['kd_user'];
								header("location: index.php"); 
							}else if($data['level']=="kepala sekolah"){
								@$_SESSION['kepalasekolah'] = $data['kd_user'];
								header("location: index.php"); 
							}else{
								echo "login gagal";
							}
						}else{
							?> <script type="text/javascript"> alert("username / password salah"); </script> <?php 
						}
					}
				}
			
			?>
			
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>

<?php
	}
?>	
