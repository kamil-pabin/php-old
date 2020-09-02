<!-- Skrypt służacy TYLKO do wyświetlania timera w pokoju cmentarz -->

<?php
    include_once("db_connect.php");
    $sql_query = "SELECT Czas, statuspodpowiedzi, zegarukryj FROM cmentarz";
    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
    while($cmentarz = mysqli_fetch_assoc($resultset) ) 
    {   
        $nowyczas = $cmentarz['Czas'];  
        $stat = $cmentarz['statuspodpowiedzi']; 
        $ukryj = $cmentarz['zegarukryj'];

        if ( $ukryj == 1)
        {
            echo " <style> #czasomierz{display:none;} ";
        }
        else
        {
            if ($stat == 1 )
            {
                echo " <style> #czasomierz{font-size: 450px;} #podpowiedz {display:none;}</style>  ";
                if ($nowyczas < 0 )
                {
                    echo '-'.gmdate("i:s", -$cmentarz['Czas']);
                }    
                else
                {
                    echo gmdate("i:s", $cmentarz['Czas']); 
                }                  
            }    

            else if ($stat == 0)
            {
                echo " <style> #czasomierz{font-size: 100px;} </style>  ";
                if ($nowyczas < 0 )
                {
                    echo '-'.gmdate("i:s", -$cmentarz['Czas']);
                }    
                else
                {
                    echo gmdate("i:s", $cmentarz['Czas']); 
                }                      
            }
        }
    }
    
?>