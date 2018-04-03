<h2>Formulir Edit data mahasiswa</h2>
<hr>
<form action="update.php" method="post"> 


<?php
include "koneksi.php";
$koneksiObj = new koneksi();
$koneksi = $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
    die("koneksi gagal : " . $koneksi->connect_error);
}

$qry ="select * from Data_Mahasiswa where nim='".
   $_GET["nim"]. "'";
$data = $koneksi ->query($qry);

if ($data->num_rows <= 0) {
    echo "Mas/Mba isi datanya sesuai prosedur ya!";
}else{
    while($hasil = $data->fetch_assoc()){
        global $nama;
        global $jurusan;
        $Nama = $hasil["nama"];
        $Jurusan = $hasil["jurusan"];
    }
}
?>

<table>
<tr>
    <td>nim</td>
    <td>: <input type = "text" name="nim" readonly="true"
     value=<?php echo $_GET["nim"]; ?>></td>
</tr>
<tr>
    <td>nama </td>
    <td>: <input type="text" name="Nama"
        value=<?php echo $Nama; ?>></td>

</tr>
<tr>
    <td>jurusan</td>
    <td>: <input type="text" name="jurusan"
        value=<?php echo $Jurusan; ?>></td>
</tr>
<tr>
    <td><input type="submit" value="simpan"></td>

</tr>
</table>
</form>