<?php
session_start();
session_unset();
session_destroy();

$rol == '';

header("location:home.php");
exit();
?>