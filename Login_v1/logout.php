<?php
session_start();
include_once"dbconnect.php";
session_unset();
mysqli_close($conn);
header("location: login.php");
exit;
?>
