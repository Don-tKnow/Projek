<?php
//Kalo pake laptop ubah 127.0.0.1 ke localhost.
 $servername = "127.0 0.1";
 $dbname = "data_user";
 $username = "root";
 $pass = "root";
 
 $conn = new mysqli_connect($servername, $dbname, $username, $pass);
 
 if (!$conn) {
  die("Koneksi Gagal: " . mysqli_error());
 } else {
   echo "Koneksi Berhaail";
 }
?>