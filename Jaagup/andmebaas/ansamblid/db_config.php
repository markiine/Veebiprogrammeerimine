<?php
$server = "d113906.mysql.zonevs.eu";
$database = "d113906_tunniplaan";
$user = "d113906_tunnipla";
$password = "Veebirakendused";

$yhendus=new mysqli($server, $user, $password, $database);
if ($yhendus->connect_errno)
{
    echo "Failed to connect to database.";
    exit();
}

$yhendus->set_charset("utf8");