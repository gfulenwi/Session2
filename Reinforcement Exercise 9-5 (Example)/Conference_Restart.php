<?php
session_start();
$_SESSION = array();
session_destroy();
header("location:Conference_Start.php");
?>
