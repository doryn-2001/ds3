<?php

include("conexiune.php");
$sql=mysqli_query($conexiune, "SELECT * FROM users");
echo "<table border=1>";
echo "<tr><td>id</td><td>username</td><td>password</td></tr>";
while ($row=mysqli_fetch_row($sql)) {
    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
}
echo "</table>";
mysqli_close($conexiune);

?>