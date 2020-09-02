<!-- Skrypt służacy TYLKO do wyświetlania timera w pokoju wyspa -->

<?php
    include_once("db_connect.php");
    $sql_query = "SELECT Czas, statuspodpowiedzi, zegarukryj FROM wyspa";
    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
    while($wyspa = mysqli_fetch_assoc($resultset) ) 
    {   
        $nowyczas = $wyspa['Czas'];  
        $stat = $wyspa['statuspodpowiedzi']; 
        $ukryj = $wyspa['zegarukryj'];

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
                    echo '-'.gmdate("i:s", -$wyspa['Czas']);
                }    
                else
                {
                    echo gmdate("i:s", $wyspa['Czas']); 
                }                  
            }    

            else if ($stat == 0)
            {
                echo " <style> #czasomierz{font-size: 100px;} </style>  ";
                if ($nowyczas < 0 )
                {
                    echo '-'.gmdate("i:s", -$wyspa['Czas']);
                }    
                else
                {
                    echo gmdate("i:s", $wyspa['Czas']); 
                }                      
            }
        }
    }
    
?>