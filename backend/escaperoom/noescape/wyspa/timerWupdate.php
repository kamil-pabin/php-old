<?php
    $nowyczas = intval($_GET['q']);
    include_once("db_connect.php");
    $field = '';
    $field.= "Czas='".$nowyczas."'";
    $sql = "UPDATE wyspa SET $field WHERE ID=1";
    mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));	    
?>    