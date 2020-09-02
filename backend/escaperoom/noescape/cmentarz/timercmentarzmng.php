<!-- Skrypt służacy TYLKO do wyświetlania timera w pokoju cmentarz mng-->

<?php
    include_once("db_connect.php");
    $sql_query = "SELECT Czas, statuspodpowiedzi, onstatus, zegarukryj FROM cmentarz";
    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
    while($cmentarz = mysqli_fetch_assoc($resultset) ) 
    {   
        $nowyczas = $cmentarz['Czas'];  
        $stat = $cmentarz['statuspodpowiedzi']; 
        $ukryj = $cmentarz['zegarukryj'];
        $on = $cmentarz['onstatus'];
        if ( $ukryj == 1)
        {
            if($on == 1){
                echo " <style> #czasomierz{color:blue }</style>  ";   
            }
            else {
                echo " <style> #czasomierz{color:black }</style>  "; 

            }         
			if ($nowyczas < 0 )
                {
                    echo '-'.gmdate("i:s", -$cmentarz['Czas']);
                }    
                else
                {
                    echo gmdate("i:s", $cmentarz['Czas']); 
                }  
        }
        else
        {
            if($on == 1){
                echo " <style> #czasomierz{color:green }</style>  ";   
            }
            else {
                echo " <style> #czasomierz{color:red }</style>  "; 

            }         
            if ($stat == 1 )
            {
                echo " <style> #czasomierz{font-size: 450px; }</style>  ";
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