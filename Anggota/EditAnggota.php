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
$folderfoto="FileGambar/$nama_foto";
$nama_foto=$_FILES['tfoto']['name'];
move_uploaded_file ($lokasi_foto,"$folderfoto");
$query ="UPDATE tbanggota Set NIS='$nis',Nama='$nama',Alamat='$alamat',TmpLahir='$tmplahir',TglLahir='$tgllahir',Foto='$nama_foto' Where NoAnggota='$noanggota'";
mysqli_query($koneksi,$query);
header ('location:ViewAnggota.php');
?>