<?php
    $nowyczas = intval($_GET['q']);
    include_once("db_connect.php");
    $field = '';
    $field.= "onstatus='".$nowyczas."'";
    $sql = "UPDATE cmentarz SET $field WHERE ID=1";
    mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));	    
?>    