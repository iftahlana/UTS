<?php

include "koneksi.php";
$koneksiObj=new Koneksi();
$koneksi= $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
	die("Konesi Gagal : " . $koneksi->connect_error);
}else{
	echo "Koneksi ke basis data sukses!";
}



$query = "update data_mahasiswa " .
        "set Nama = '" . $_POST["Nama"] . "'," .
        "   jurusan = '" . $_POST["jurusan"] . "' " . 
        "where nim = " . $_POST["nim"];

//echo $query

if($koneksi->query($query)==true){
    echo "<br>Data " . $_POST["Nama"] . 
    " sudah berubah. Data bisa dilihat " . 
    '<a href="main.php">disini</a>';
}else {
        echo "error : ".$query." -> ".$koneksi->error;
}

$koneksi->close();
?>