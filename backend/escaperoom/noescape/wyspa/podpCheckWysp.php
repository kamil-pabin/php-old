<!-- Skrypt służący do zmiany wartości 'podpowiedz' w bazie danych, odpowiadającej za ukrywanie innych rzeczy niż zegar -->
<?php
    $wielkosc = intval($_GET['q']);
    include_once("db_connect.php");
    $field = '';
    $field.= "statuspodpowiedzi='".$wielkosc."'";
    $sql = "UPDATE wyspa SET $field WHERE ID=1";
    mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));	
?>    