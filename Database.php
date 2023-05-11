<?php
$server = "d113917.mysql.zonevs.eu";
$database = "d113917_gachapon";
$username = "d113917_targe21";
$password = "akkakakk1234";

$yhendus = new mysqli($server, $username, $password, $database);
if ($yhendus -> connect_errno) {
    echo "Failed to connect to database.";
    exit();
}


$yhendus->set_charset("utf8");