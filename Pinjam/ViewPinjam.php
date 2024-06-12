<?php
include ("Koneksi.php"); //atau include_once("Koneksi.php");
echo"<br/>";
$query="SELECT * FROM tbpinjam";
$hasil=mysqli_query ($koneksi,$query);
?>
<h2>Tabel Pinjam</h2>
    <table border="10" bgcolor="tomato" cellspacing="10" cellpadding="10">
        <tr>
            <th>Nomor</th>
            <th>Id Pinjam</th>
            <th>Nomor Anggota</th>
            <th>Kode Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Jumlah Pinjam</th>
            <th>Status</th>
            <th>Aksi</th>
            <th>Pengembalian</th>
        </tr>
<?php
$nomor=0;
while ($data=mysqli_fetch_array($hasil)){
 $nomor=$nomor+1;
echo "<tr>";
echo "<td>" . $nomor . "</td>";
echo "<td>" . $data["Id_Pinjam"] . "</td>";
echo "<td>" . $data["NoAnggota"] . "</td>";
echo "<td>" . $data["KdBuku"] . "</td>";
echo "<td>" . $data["Tgl_Pinjam"] . "</td>";
echo "<td>" . $data["Tgl_Kembali"] . "</td>";
echo "<td>" . $data["Jml_Pinjam"] . "</td>";
echo "<td>" . $data["Status"] . "</td>";
?>
<?php
$kode=$data["Id_Pinjam"];
echo "<td><a href='FormEditPinjam.php?Id_Pinjam=$kode'>Edit</a> | 
<a href='HapusPinjam.php?Id_Pinjam=$kode'>Hapus</a>";
echo"<th></td><a href='FormCari.php?Id_Pinjam=$kode'>Pengembalian</a></th>";
}
echo "</table></br>";
echo "<a href='FormPinjam.html'><input type='submit' value='Add Data Pinjam'></br></a>";
?>
