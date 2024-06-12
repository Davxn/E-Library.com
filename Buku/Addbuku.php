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
$lokasi_foto=$_FILES['tcover']['tmp_name'];
$nama_foto=$_FILES['tcover']['name'];
//Tentukan Folder Untuk Menyimpan File
$folderfoto="FileGambar/$nama_foto";
//Apabila file berhasil di upload
move_uploaded_file ($lokasi_foto,"$folderfoto");
$query ="INSERT INTO tbbuku (Kdbuku,NmBuku,Pengarang,Penerbit,ThnTerbit,Edisi,JmlHalaman,JenisBuku,Cover) 
        Values ('$kdbuku','$nmbuku','$pengarang','$penerbit','$thnterbit','$edisi','$jmlhalaman','$jenisbuku','$nama_foto');";
mysqli_query($koneksi,$query);
header ('location:viewdataedithapus.php');
?>

