<?php

$servername = "localhost:3306";
$dBUsername = "mahs_minions";
$dBPassword = "mustangs";
$dBName = "mahs_minions";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}