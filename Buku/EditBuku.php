<?php
//Load file koneksi.php
include "koneksi.php";
//Baca lokasi file sementara
$kdbuku=$_POST['tkdbuku'];
$nmbuku=$_POST['tnmbuku'];
$pengarang=$_POST['tpengarang'];
$penerbit=$_POST['tpenerbit'];
$thnterbit=$_POST['ttahun'];
$edisi=$_POST['tedisi'];
$jmlhalaman=$_POST['tjml'];
$jenisbuku=$_POST['tjenis'];

$query = "UPDATE tbbuku Set NmBuku='$nmbuku',Pengarang='$pengarang'
,Penerbit='$penerbit',ThnTerbit='$thnterbit',
Edisi='$edisi',JmlHalaman='$jmlhalaman',JenisBuku='$jenisbuku' Where KdBuku='$kdbuku'";
mysqli_query($koneksi,$query);
header ('location:viewdataedithapus.php');
?>