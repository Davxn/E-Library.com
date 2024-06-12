<?php
//Load file koneksi.php
include "koneksi.php";
//Baca lokasi file sementara
$noanggota=$_POST['tnoanggota'];
$nis=$_POST['tnis'];
$nama=$_POST['tnama'];
$alamat=$_POST['talamat'];
$tmplahir=$_POST['ttempat'];
$tgllahir=$_POST['tlahir'];
$lokasi_foto=$_FILES['tfoto']['tmp_name'];
$nama_foto=$_FILES['tfoto']['name'];
//Tentukan Folder Untuk Menyimpan File
$folderfoto="FileGambar/$nama_foto";
//Apabila file berhasil di upload
move_uploaded_file ($lokasi_foto,"$folderfoto");
$query ="INSERT INTO tbanggota (NoAnggota,NIS,Nama,Alamat,TmpLahir,TglLahir,Foto) 
        Values ('$noanggota','$nis','$nama','$alamat','$tmplahir','$tgllahir','$nama_foto');";
mysqli_query($koneksi,$query);
header ('location:ViewAnggota.php');
?>

