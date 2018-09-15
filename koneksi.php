<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db_penggajian";

mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("db_penggajian") or die(mysql_error());

?>