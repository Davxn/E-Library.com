
<?php
$host='localhost';
$user='root';
$pwd='';
$db='dbperpustakaan';
$koneksi=mysqli_connect($host,$user,$pwd,$db);
//Cek Koneksi
if($koneksi){ //echo "Koneksi Database Berhasil"
    ;}
else {echo"Koneksi Database Gagal";}
?>