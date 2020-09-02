<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Oswald:300|ZCOOL+XiaoWei" rel="stylesheet">
    <style>


    </style>
</head>

<body>

    <?php
        $q = intval($_GET['q']);

        $con = mysqli_connect('localhost','root','','sklep');
        if (!$con) {
            die('Could not connect: ' . mysqli_error($con));
        }

        mysqli_select_db($con,"sklep");
        $sql="SELECT * FROM bronie INNER JOIN rodzaje ON bronie.Rodzaj=rodzaje.ID WHERE bronie.ID = '".$q."' ";
        $result = mysqli_query($con,$sql);

        echo "<br>";

        while($row = mysqli_fetch_array($result)) {
            echo "<img src='" .$row['Zdjecie']."' style='max-width: 100%; height:200px'  >" . "</br>";  
            echo "Nazwa: <b>".$row['Nazwa']. "</b>";  
            echo "<br> Rodzaj: " . $row['nazwax'];
            echo "<br> Cena: " . $row['Cena'];
            echo "<br>Ilość: " . $row['Ilosc'];
            
        }
        echo "</br>";
        mysqli_close($con);
    ?>
</body>

</html>
