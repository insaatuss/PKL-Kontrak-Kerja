<?php
$query = "SELECT level FROM user WHERE NIK = '$sessionNIK'";
$result = mysqli_query($mysqli,$query);
$dataU = mysqli_fetch_assoc($result);
$level = $dataU['level'];
?>