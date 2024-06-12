<html>
	<head>
	<title>Perpustakaan SMAS Kartika XIX-3</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
<body style="background-image: url('images/a.jpg')">
	<div class="batas">
	<div class="header">
        <h1 style="padding: 1%;">E-Library SMAS Kartika XIX-3 Bandung</h1>
	</div>
	<div class="isiweb">
	<div class="sidebar">
	</div>
	<div class="konten">
    <?php
include ("Koneksi.php"); //atau include_once("Koneksi.php");
echo"<br/>";
$query="SELECT * FROM tbanggota";
$hasil=mysqli_query ($koneksi,$query);
?>
<h2 bgcolor="burlywood">Tabel Anggota</h2>
    <table border="10" bgcolor="burlywood" cellspacing="10" cellpadding="10">
        <tr>
            <th>Nomor</th>
            <th>NomorAnggota</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        <?php
$nomor=0;
while ($data=mysqli_fetch_array($hasil)){
 $nomor=$nomor+1;
echo "<tr>";
echo "<td>" . $nomor . "</td>";
echo "<td>" . $data["NoAnggota"] . "</td>";
echo "<td>" . $data["NIS"] . "</td>";
echo "<td>" . $data["Nama"] . "</td>";
echo "<td>" . $data["Alamat"] . "</td>";
echo "<td>" . $data["TmpLahir"] . "</td>";
echo "<td>" . $data["TglLahir"] . "</td>";
$foto=$data["Foto"];

?>
<td><img src="FileGambar/<?php print($foto); ?>" class="img-fluid" alt="Foto" height="50" width="50">
<?php
$kode=$data["NoAnggota"];
echo "<td><a href='FormEditAnggota.php?NoAnggota=$kode'>Edit</a> | <a href='hapusanggota.php?NoAnggota=$kode'>Hapus</a><a href='cetak-kartu-anggota.php?NoAnggota=$kode'>| Cetak</a></td>";}

echo "</table></br>";
echo "<a href='formanggota.html'><input type='submit' value='Input'></br></a>";
?>

<p1>Dibuat oleh Davin Nugraha Bulan Juni 2024</p1><br></br>
	<p3>Perpustakaan SMAS Kartika XIX-3 adalah perpustakaan yang menyediakan koleksi buku-buku, majalah, dan lainnya untuk digunakan oleh seluruh anggota perpustakaan SMA Negeri Situraja</p3><br></br>
	<p3>Perpustakaan SMAS Kartika XIX-3 buka dari hari senin-jumat jam 08.30-15.00 WIB</p3><br></br>
	<div class="footer">
    <marquee><p style="background-color: peru;">2024 Davin Nugraha</p></marquee>
	</div>
	</div>
	</div>
	</div>
	</body>
	</html>