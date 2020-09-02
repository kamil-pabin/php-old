<?php
    $ukr = intval($_GET['q']);
    include_once("db_connect.php");
    $field = '';
    $field.= "zegarukryj='".$ukr."'";
    $sql = "UPDATE kosmos SET $field WHERE ID=1";
    mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));	

    
?>    