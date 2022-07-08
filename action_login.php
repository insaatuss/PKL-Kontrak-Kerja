<?php

require_once ("connection.php");

// Status tidak error
$error = 0;

// Memvalidasi inputan
if ( isset($_POST['NIK']) ) $NIK = $_POST['NIK'];
else echo "Salah NIK";

if ( isset($_POST['password']) ) $password = $_POST['password'];
else echo "Salah password";


// Hashing Password
$password = hash ("sha256", $password);    

// Menyiapkan Query MySQL untuk dieksekusi
$query = "SELECT * FROM user WHERE NIK = '{$NIK}'";

// Mengeksekusi MySQL Query
$result = mysqli_query($mysqli, $query);

$data = mysqli_fetch_assoc($result); 

if ( is_null($data) ) {
    echo "Email tidak terdaftar <a href ='pages-login.php'>Kembali</a>";
    exit();
}
else if ( $data['password'] != $password ) {
    echo "Password salah <a href ='pages-login.php'>Kembali</a>";
    exit();
}

else {
    // Memulai fungsi SESSION
    session_start();

    $_SESSION["status"] = true;
    $_SESSION["NIK"] = $data["NIK"];
    
    header("Location: index.php");
}


?>