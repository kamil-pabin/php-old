<?php
/* Skrypt łączący się z bazą danych */
$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "noescape";
$conn = mysqli_connect($serverName, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>