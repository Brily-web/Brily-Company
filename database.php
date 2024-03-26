<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'data_pelamar';

$conn = mysqli_connect($servername, $username, $password, $database);

// check
if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}
