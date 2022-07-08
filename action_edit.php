<?php

require_once("connection.php");

require_once("session_check.php");


if ($sessionStatus == false) {
    header("Location: index.php");
}

// Mendapatkan data 
if ( isset($_POST["id"]) ) $id = $_POST["id"];
else {
    echo "Data id tidak Ditemukan! <a href='index.php'></a>";
    exit();
}

 $NamaP = $_POST["Nama"];
    $AlamatP = $_POST["Alamat"];
    $Jenis_kelaminP = $_POST["jenis_kelamin"];
    $tmp_lahirP = $_POST["tmp_lahir"];
    $tgl_lahirP = $_POST["tgl_lahir"];
    $no_hpP = $_POST["no_hp"];
    $NIKP = $_POST["NIK"];


// Query Get Data Barang
$query = "SELECT * FROM data_diri_karyawan WHERE id = '{$id}'";

// Eksekusi Query
$result = mysqli_query($mysqli, $query);
// var_dump($result);

// Fetching Data
$dataK = mysqli_fetch_assoc($result);
    $gambarLama = $dataK["scan_KTP"];


// Mengambil Data Diri Karyawan
$files = $_FILES['gambar'];
$path = "penyimpanan/";

// Menangani File Uplload
if ( !empty($files['name']) ) {
    $filepath = $path . $files["name"];
    
    $upload = move_uploaded_file($files["tmp_name"], $filepath);
    
    if (file_exists($gambarLama) ) {
        unlink($gambarLama);
    }
    
}else {
    $filepath = $gambarLama;
    $upload = false;
}

    $query = "UPDATE `data_diri_karyawan` SET `Nama` = '{$NamaP}', `Alamat` = '{$AlamatP}', `Jenis_kelamin` = '{$Jenis_kelaminP}', `tmp_lahir` = '{$tmp_lahirP}', `tgl_lahir` = '{$tgl_lahirP}', `no_hp` = '{$no_hpP}', `scan_KTP` = '{$filepath}' WHERE `id` = {$id}";
    // Mengeksekusi MySQL Query
    $insert = mysqli_query($mysqli,$query);

// Menangani ketika ada error ketika eksekusi query
if ( $insert == false ) {
    echo "Error dalam mengubah data. <a href='index.php'>Kembali</a>";
}
else {
    header("Location: index.php");
}
?>