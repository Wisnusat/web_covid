<?php
session_start();

session_destroy();
setcookie('tujuan','');
header("Location: http://localhost/web_covid/index.php");

?>