<!-- Skrypt służacy TYLKO do wyświetlania timera w pokoju kosmos mng-->

<?php
    include_once("db_connect.php");
    $sql_query = "SELECT Czas, statuspodpowiedzi, onstatus, zegarukryj FROM kosmos";
    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
    while($kosmos = mysqli_fetch_assoc($resultset) ) 
    {   
        $nowyczas = $kosmos['Czas'];  
        $stat = $kosmos['statuspodpowiedzi']; 
        $ukryj = $kosmos['zegarukryj'];
        $on = $kosmos['onstatus'];
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
                    echo '-'.gmdate("i:s", -$kosmos['Czas']);
                }    
                else
                {
                    echo gmdate("i:s", $kosmos['Czas']); 
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