<?php

$host = "localhost";
$dbname = "taskmanager";
$username = "root";
$password = "";

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    die("Connection Failed"  . mysqli->connect_error);
}

return $mysqli;