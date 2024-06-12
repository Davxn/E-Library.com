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
$query="SELECT * FROM tbBuku";
$hasil=mysqli_query ($koneksi,$query);
?>
<h2 bgcolor="wheat" >Tabel Buku</h2>
    <table border="10" bgcolor="burlywood" cellspacing="10" cellpadding="10">
        <tr>
            <th>Nomor</th>
            <th>Kode Buku</th>
            <th>Nama buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>TahunTerbit</th>
            <th>Edisi</th>
            <th>Jumlah Halaman</th>
            <th>Jenis Buku</th>
            <th>Cover</th>
            <th>Aksi</th>
        
        </tr>
<?php
$nomor=0;
while ($data=mysqli_fetch_array($hasil)){
 $nomor=$nomor+1;
echo "<tr>";
echo "<td>" . $nomor . "</td>";
echo "<td>" . $data["KdBuku"] . "</td>";
echo "<td>" . $data["NmBuku"] . "</td>";
echo "<td>" . $data["Pengarang"] . "</td>";
echo "<td>" . $data["Penerbit"] . "</td>";
echo "<td>" . $data["ThnTerbit"] . "</td>";
echo "<td>" . $data["Edisi"] . "</td>";
echo "<td>" . $data["JmlHalaman"] . "</td>";
echo "<td>" . $data["JenisBuku"] . "</td>";
$foto=$data["Cover"];
?>
<td><img src="FileGambar/<?php print($foto); ?>" class="img-fluid" alt="Cover Buku" height="50" width="50">
<?php
$kode=$data["KdBuku"];
echo "<td><a href='FormEdit.php?KdBuku=$kode'>Edit</a> | <a href='hapusbuku.php?KdBuku=$kode'>Hapus</a></td>";
}
echo "</table></br>";
echo "<a href='addbuku.html'><input type='submit' value='Add Data Buku'></br></a>";
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