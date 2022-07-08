<?php

$mysqli = new mysqli ( "localhost", "root", "", "si_kontrak_kerja");

// Check connection
if ($mysqli -> connect_errno) {
    echo "Gagal menyambungkan ke MySQL: " > $mysqli -> connect_error;
    exit();
}

?>