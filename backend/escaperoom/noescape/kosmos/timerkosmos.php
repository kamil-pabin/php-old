<!-- Skrypt służacy TYLKO do wyświetlania timera w pokoju kosmos -->

<?php
    include_once("db_connect.php");
    $sql_query = "SELECT Czas, statuspodpowiedzi, zegarukryj FROM kosmos";
    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
    while($kosmos = mysqli_fetch_assoc($resultset) ) 
    {   
        $nowyczas = $kosmos['Czas'];  
        $stat = $kosmos['statuspodpowiedzi']; 
        $ukryj = $kosmos['zegarukryj'];

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
                    echo '-'.gmdate("i:s", -$kosmos['Czas']);
                }    
                else
                {
                    echo gmdate("i:s", $kosmos['Czas']); 
                }                  
            }    

            else if ($stat == 0)
            {
                echo " <style> #czasomierz{font-size: 100px;} </style>  ";
                if ($nowyczas < 0 )
                {
                    echo '-'.gmdate("i:s", -$kosmos['Czas']);
                }    
                else
                {
                    echo gmdate("i:s", $kosmos['Czas']); 
                }                      
            }
        }
    }
    
?>