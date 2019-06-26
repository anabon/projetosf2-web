<?php
session_start();
include("conexion.php");
session_destroy();
header("location: principal.php");
?>
