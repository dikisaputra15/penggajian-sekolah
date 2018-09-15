<?php

@session_start();
session_destroy();

header("location: /penggajian/login.php"); 
?>