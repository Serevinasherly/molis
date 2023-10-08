<?php

$host="localhost";
$username="root";
$password="";
$database="molis";

$koneksi=mysql_connect($host, $username, $password);
$pilihdatabase=mysql_select_db($database, $koneksi);

if ($pilihdatabase) {
	
}else{
	echo "koneksi gagal";
}

?>