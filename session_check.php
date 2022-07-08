<?php

// Start session
session_start();

// Mengecek dan mendapatkan SESSION status
if ( isset($_SESSION["status"]) ) $sessionStatus = $_SESSION["status"];
else $sessionStatus = false;

// Mengecek dan mendapatkan data NIK
if ( isset($_SESSION["NIK"]) ) $sessionNIK = $_SESSION["NIK"];
else $sessionNIK = "";

?>