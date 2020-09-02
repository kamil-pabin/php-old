
<?php
        $con = mysqli_connect('localhost','root','','noescape');

        if (!$con) 
        {
            die('Could not connect: ' . mysqli_error($con));
        }

        mysqli_select_db($con,"noescape");
        $sql="SELECT * FROM kosmos";       
        $result = mysqli_query($con,$sql);
        
        while($row = mysqli_fetch_array($result)) 
        {        
			$del = $row['delay'];                
			echo $del;
			
        }
        
        
        mysqli_close($con);
?>

