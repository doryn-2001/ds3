<?php

include ("conexiune.php");
$user=$_POST['user'];if ($user=="") { echo "Campul nu este completat";} else {echo $user;}
$password=$_POST['password'];
if(($password=="") || (strlen($password)<5)) { echo "Campul nu este completat";} else { echo $password;}
$query="INSERT INTO users (user, password) VALUES ('$user','$password')";
if (!mysqli_query($conexiune, $query)) {
die(mysqli_connect_error());
} else {
echo "datele au fost introduse";
}
mysqli_close($conexiune);
?>