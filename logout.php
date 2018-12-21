<?php
session_start();
unset($_SESSION["nome"]);  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
header("Location: index.php");
$myfile1 = fopen('u1.html','w');
$myfile2 = fopen('u2.html','w');
fwrite($myfile1, "");
fwrite($myfile2, "");
fclose($myfile1);
fclose($myfile2);
?>