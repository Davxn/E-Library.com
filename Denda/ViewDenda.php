<?php
include ("Koneksi.php"); //atau include_once("Koneksi.php");
echo"<br/>";
$query=" SELECT a.* , b.Nama , (a.Jml_Hari * a.Denda_Hari) AS Total FROM tbdenda a LEFT JOIN tbanggota b ON a.NoAnggota = b.NoAnggota";
$hasil=mysqli_query ($koneksi,$query);
?>
<h2>Tabel Denda</h2>
    <table border="10" bgcolor="LightBlue" cellspacing="10" cellpadding="10">
        <tr>
            <th>Nomor</th>
            <th>Id Bayar</th>
            <th>Nomor Anggota</th>
            <th>Nama</th>
            <th>Tanggal Bayar</th>
            <th>Jumlah Hari</th>
            <th>Denda Hari</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
<?php
$nomor=0;
while ($data=mysqli_fetch_array($hasil)){
 $nomor=$nomor+1;
echo "<tr>";
echo "<td>" . $nomor . "</td>";
echo "<td>" . $data["Id_Bayar"] . "</td>";
echo "<td>" . $data["NoAnggota"] . "</td>";
echo "<td>" . $data["Nama"] ."</td>";
echo "<td>" . $data["Tgl_Bayar"] . "</td>";
echo "<td>" . $data["Jml_Hari"] . "</td>";
echo "<td>" . $data["Denda_Hari"] . "</td>";
echo "<td>" . $data["Total"] . "</td>";
?>
<?php
$kode=$data["Id_Bayar"];

echo "<th><a href='HapusDenda.php?Id_Bayar=$kode'>Hapus</a></th>";
}
echo "</table></br>";
echo "<a href='FormDenda.html'><input type='submit' value='Add Data Denda'></br></a>";
?>
