<?php
    if (intval($_GET['q']) == 0){
        include_once("db_connect.php");
        $field = '';
        $field.= "delay=1";
        $sql = "UPDATE kosmos SET $field";
        mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
    }
    else{
        $delaynumber = intval($_GET['q']) / 100;
        include_once("db_connect.php");
        $field = '';
        $field.= "delay=delay+'".$delaynumber."'";
        $sql = "UPDATE kosmos SET $field";
        mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
    }
    	    
?>    