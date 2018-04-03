<?php

include "koneksi.php";
$koneksiObj=new Koneksi();
$koneksi= $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
	die("Konesi Gagal : " . $koneksi->connect_error);
}else{
	echo "Koneksi ke basis data sukses!";
}


//$query = "update data_mahasiswa " .
//        "set nama = '" . $_POST["nama"] . "'," .
//        "   harga = " . $_POST["harga"] . " " . 
//        "where nim = " . $_POST["nim"];
$query = "delete from data_mahasiswa where nim = " . 
        $_GET["nim"];
        
//echo $query

if($koneksi->query($query)==true){
    echo "<br>Data dengan nim " . $_GET["nim"] . 
    " sudah DIHAPUS. Data bisa dilihat " . 
    '<a href="main.php">disini</a>';
}else {
    echo "error : ".$query." -> ".$koneksi->error;
}

$koneksi->close();
?>