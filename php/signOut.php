<?php
Session_start();
Session_destroy();
$_SESSION["login"] = false;
header("Location: ../pages/index.php");
?>