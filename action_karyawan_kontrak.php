<?php

require_once("connection.php");

require_once("session_check.php");

if ($sessionStatus == false) {
    header("Location: index.php");
}

$opsi = (isset($_GET['opsi'])) ? $_GET['opsi'] : "";

if($opsi == "edit"){
    
if (isset($_POST["id"]) ) $id = $_POST["id"];
else {
    echo "Data id tidak ditemukan! <a href='index.php'></a>";
    exit();
}
if (isset($_POST["No_Pers"]) ) $nopers = $_POST["No_Pers"];
else {
    echo "Data No_Pers tidak ditemukan! <a href='index.php'></a>";
    exit();
}
if (isset($_POST["Posisi"]) ) $posisi = $_POST["Posisi"];
else {
    echo "Data Posisi tidak ditemukan! <a href='index.php'></a>";
    exit();
}
if (isset($_POST["tenggat_waktu"]) ) $tenggat_waktu = $_POST["tenggat_waktu"];
else {
    echo "Data tenggat_waktu tidak ditemukan! <a href='index.php'></a>";
    exit();
}

$query = " UPDATE `daftar_karyawan_kontrak` SET `No_Pers`='$nopers',`Posisi`='$posisi',`tenggat_waktu`='$tenggat_waktu' WHERE id = $id ";

$update = mysqli_query($mysqli,$query);

if ( $update == false ) {
    echo "Eror dalam edit data. <a href='index.php'>Kembali</a>";
}
else {
    header("Location: index.php");
}
}elseif($opsi == "delete"){

}




?>