<?php

$hostname="localhost";
$username="root";
$password="";
$database="login";
$conexiune=mysqli_connect($hostname,$username,$password) or die ("Nu ma pot conecta la baza de date!!!");
mysqli_select_db($conexiune,$database) or die("Nu gasesc baza de date!!!");

mysqli_close($conexiune);

?>