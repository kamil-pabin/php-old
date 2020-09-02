<?php
    $connect = mysqli_connect("localhost", "root", "", "testing");
    if(isset($_POST["ip"], $_POST["email"]))
    {
    $ip = mysqli_real_escape_string($connect, $_POST["ip"]);
    $email = mysqli_real_escape_string($connect, $_POST["email"]);
    $pass = mysqli_real_escape_string($connect, $_POST["pass"]);
    $sessionid = mysqli_real_escape_string($connect, $_POST["sessionid"]);
    $query = "INSERT INTO user(ip, email, pass, sessionid) VALUES('$ip', '$email', '$pass', '$sessionid')";
    if(mysqli_query($connect, $query))
    {
    echo 'Data Inserted';
    }
    }
?>