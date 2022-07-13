<?php

require_once ("connection.php");


if ( isset($_GET['nik']) ){ $nik = $_GET['nik'];}
else{ $error = 1;}


$query = "SELECT * FROM `data_diri_karyawan` WHERE NIK = $nik";
$result = mysqli_query($mysqli,$query);
foreach($result as $pindah) {
    $nama = $pindah['Nama'];
    $alamat = $pindah['Alamat'];
}

$query = "INSERT INTO `daftar_karyawan_kontrak`(`No_Pers`, `Nama`, `Posisi`, `Alamat`, `tenggat_waktu`) 
VALUES ('','$nama','','$alamat','')";
$insert = mysqli_query($mysqli,$query);

if ( $insert == false ) {
    echo "Error dalam menambahkan data akun. <a href ='daftar-profil.php'>Kembali</a>";
}
else {
    header("Location: index.php");
}

?>