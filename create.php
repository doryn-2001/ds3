<?php
include("conexiune.php");
$delete="DROP TABLE IF EXISTS users";
mysqli_query($conexiune, $delete);
$table="CREATE TABLE users (
    id int(4) NOT NULL AUTO_INCREMENT,
    nume varchar(20) NOT NULL ,
    prenume varchar(40) NOT NULL ,
    PRIMARY KEY (id)) TYPE=MyISAM";
    if(mysqli_query($conexiune, $table)){
        echo "Tabelul a fost creat!";
    } else {
        echo "Tabelul nu a fost creat!!";
    }
    mysqli_close($conexiune);


?>