<?php

$dbhost = '';
$dbname = '';
$dbusername = '';
$dbpassword = '';


foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
        continue;
    }

    $dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}

//6#vWHD_$
//localdb

$conn = new mysqli_connect($dbhost, $dbusername, $dbpassword, 'localdb');



$conn->close();

header('https://portalif.iftm.edu.br');