 

<!-- Skrypt służacy do wyswietlania wielksoci zegara live -->
<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Oswald:300|ZCOOL+XiaoWei" rel="stylesheet">
    <style>
    #txt{
            padding-left: 50px;
            padding-right: 50px;
            padding-top: 10px;
            padding-bottom: 10px;
            
        }
    </style>
</head>

<body>
    <?php
        $con = mysqli_connect('localhost','root','','noescape');

        if (!$con) 
        {
            die('Could not connect: ' . mysqli_error($con));
        }

        mysqli_select_db($con,"noescape");
        $sql="SELECT * FROM cmentarz";       
        $result = mysqli_query($con,$sql);

        $fontsize = "2.5vw";
        
        while($row = mysqli_fetch_array($result)) 
        {   
			$onT = $row['onstatus'];    	
            $rozmiar = $row['statuspodpowiedzi'];
            if ($rozmiar == 1){
                $path1 = "zegduzy.jpg";
			if($onT == 1) echo "<style>#ramka{ border: 5px solid green; border-radius: 25px;} </style>";
			else 		  echo "<style>#ramka{ border: 15px solid red; border-radius: 45px;} </style>";
                echo "<img id='ramka' src='$path1'>";
            }      
            else{
                $path2 = "zegmaly.jpg";
                echo "<style>#ramka{ border: 5px solid red; border-radius: 25px;animation-name: example;} </style>";
                echo "<img id='ramka' src='$path2'>";
            }
        }
        echo "</br>";
        
        mysqli_close($con);
    ?>
</body>

</html>
