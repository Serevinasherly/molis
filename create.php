<?php

include ("koneksi.php");

 $nama = $_POST['nama'];
 $email = $_POST['email'];
 $warna = $_POST['warna'];
 $jumlah = $_POST['jumlah'];

 
 $query = "insert into pesan (nama,email,warna,jumlah) values ('".$nama."','".$email."','".$warna."','".$jumlah."')";
 $create = mysql_query($query, $koneksi);

 if ($create) {
 	header("location:index.php");
 }else{
 	echo "input gagal";
 	echo "mysql_error()";
 }

 ?>