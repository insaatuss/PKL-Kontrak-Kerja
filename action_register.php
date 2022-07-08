<?php

require_once ("connection.php");


// if ($sessionStatus == false) {
//     header("Location: index.php");
// }

// Status tidak error
$error = 0;

// Memvalidasi inputan
if ( isset($_POST['NIK']) ) $NIK = $_POST['NIK'];
else $error = 1;

if ( isset($_POST['password']) ) $password = $_POST['password'];
else $error = 1;

if ( isset($_POST['level']) ) $level = $_POST['level'];
else $error = 1;



// Mengatasi jika terjadi error pada inputan
if ( $error == 1 )  {
    echo "Terjadi kesalahan pada proses input data <a href='registration.php>Kembali</a>'";
    exit();
}

//Enkripsi Password
    $password = hash ("sha256", $password);    

if($level == 'Karyawan'){
  // Menyiapkan Query MySQL untuk dieksekusi
    $query = "INSERT INTO user
    (NIK, password, level)
    VALUES
    ('{$NIK}', '{$password}', '{$level}' )
";

// Mengeksekusi MySQL Query
$insert = mysqli_query($mysqli, $query);



// Menangani ketika ada error pada saat eksekusi query
if ( $insert == false ) {
    echo "Error dalam menambahkan data akun. <a href ='pages-register.php'>Kembali</a>";
}

// batas

$query2 = "INSERT INTO `data_diri_karyawan` (`Nama`, `Alamat`, `Jenis_kelamin`, `tmp_lahir`, `tgl_lahir`, `no_hp`, `scan_KTP`, `NIK`) VALUES ('', '', '', '', '', '', '', '{$NIK}')
";

// Mengeksekusi MySQL Query
$insert2 = mysqli_query($mysqli, $query2);



// Menangani ketika ada error pada saat eksekusi query
if ( $insert2 == false ) {
    echo "Error dalam menambahkan data diri karyawan. <a href ='pages-register.php'>Kembali</a>";
}
else {
    header("Location: pages-login.php");
}


}

// kueri selain karyawan

// Menyiapkan Query MySQL untuk dieksekusi
$query = "INSERT INTO user
    (NIK, password, level)
    VALUES
    ('{$NIK}', '{$password}', '{$level}' );
";

// Mengeksekusi MySQL Query
$insert = mysqli_query($mysqli, $query);



// Menangani ketika ada error pada saat eksekusi query
if ( $insert == false ) {
    echo "Error dalam menambahkan data. <a href ='pages-register.php'>Kembali</a>";
}
else {
    header("Location: pages-login.php");
}

?>