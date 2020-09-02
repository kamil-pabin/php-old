<!-- Skrypt służący do liczenia i aktualizowania czasu (włącznie z 'wydłużeniem sekundy') w pokoju kosmos, oraz wyświetlający go na ekranie zarzadznia pokojem kosmos -->
<?php
    function msleep($time)
    {
        usleep($time * 1000000);
    }
    $nowyczas = '';
    include_once("db_connect.php");
    $sql_query = "SELECT Czas, zegarukryj, onstatus, delay FROM kosmos";
    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
    while($kosmos = mysqli_fetch_assoc($resultset) ) 
    {           
        $on = $kosmos['onstatus'];
		$ukryj = $kosmos['zegarukryj'];
        $nowyczas = $kosmos['Czas'];  
        $delayy = $kosmos['delay'];
		if ($ukryj == 1 )
            {
                if($on == 1){
                    echo " <style> #czasomierz{color:blue }</style>  ";   
                }
                else if ($on == 0){
                    echo " <style> #czasomierz{color:black }</style>  "; 

                }                            
            }
		else
			{
				if($on == 1){
                    echo " <style> #czasomierz{color:green }</style>  ";   
                }
                else if ($on == 0){
                    echo " <style> #czasomierz{color:red }</style>  "; 

                } 
			}

        if ($nowyczas < 0 )
        {
            echo " <style> #czasomierz{font-size: 30px;} </style>  ";
            echo '-'.gmdate("i:s", -$kosmos['Czas']);
        }
        else
        {
            echo " <style> #czasomierz{font-size: 30px;} </style>  ";
            echo gmdate("i:s", $kosmos['Czas']);  
        }          
    }

    if ($delayy > 0)
    {
        $updateczas = $nowyczas - 1;
        $field = '';
        $field.= "Czas='".$updateczas."'";
        $sql = "UPDATE kosmos SET $field WHERE ID=1";
        mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));	

    }
    else if ($delayy == 0)
    {
        $updateczas = $nowyczas - 1;
        $field = '';
        $field.= "Czas='".$updateczas."'";
        $sql = "UPDATE kosmos SET $field WHERE ID=1";
        mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));	
    }
  
    
?>         