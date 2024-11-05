<?php

function conectarDB()
{
    $host = 'localhost:8889';
    $user = 'root';
    $port = '8889';
    $password = 'root';
    $dbname = 'sys';
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    return new mysqli($host, $user, $password, $dbname);
}

?>