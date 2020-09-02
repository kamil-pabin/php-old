<html>
<!-- Strona służąca do wyświetlania informacji w pokoju kosmos -->
<head>
    <title>Kosmos pokoj</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300|ZCOOL+XiaoWei" rel="stylesheet">  <!-- Czcionka -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Podstawy -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script> <!-- biblioteka jquery -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> <!-- bootstrap 3.0 css-->
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script> <!-- plugin datatable js -->
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script> <!-- plugin datatable bootstrap JS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" /> <!-- plugin datatable bootstrap, formatowanie zegara  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script> <!-- plugin datatable bootstrap, formatowanie zegara JS  -->
    <style>
        body {
            margin: 0;
            padding: 0;
			background: radial-gradient(#4d7b94, #3b448f);
            font-family: 'ZCOOL XiaoWei', serif;
            overflow: hidden;
        }
        .box {
            width: 1290px;
            padding: 5px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 7px;
            margin-top: 15px;
            box-sizing: border-box;

        } 
        .thumbnail {
            height: 150px;
            width: 100/6%;
            padding-right: 5px;
            padding-left: 5px;
            padding-bottom: 5px;
            padding-top: 5px;
            font-family: 'Oswald', sans-serif;
            border: 1px solid #888888;
            animation-name: kpabin;
            animation-duration: 5s;
            animation-iteration-count: infinite;

        }
        #podpowiedz{
            text-size: 80px;
            
        }
        .xd {
            
        }


        

    </style>
    <script type="text/javascript">
        var myVar = setInterval(fu, 1000);
        var myTime = setInterval(zegarek, 100);
        function fu() {
            document.getElementById('ss').style.display = "inline";
            if (window.XMLHttpRequest) 
            {
                xmlhttp = new XMLHttpRequest();
            } 
            else 
            { //dla uposledzonych przegladarek
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() 
            {
                if (this.readyState == 4 && this.status == 200) 
                {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "getdatakosmos.php?q=" + '1', true);
            xmlhttp.send();
        }
        function zegarek(str){
            document.getElementById('zegarekek').style.display = "inline";
            if (str == "") {
                document.getElementById("czasomierz").innerHTML = "";
                return;
            } else {
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else { //dla uposledzonych przegladarek
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {                       
                        document.getElementById("czasomierz").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "timerkosmos.php", true);
                xmlhttp.send();
            }
        }
    </script>
</head>

<body>

    <div id="mainscreen" style="color:#aed6ca; height:6000px;">
        <div class="row">           
            <div class="col">
                <div class='xd'>
                    <center>
                    <p id="demo"><h1>Podbój Kosmosu</h1></p>
                        <div id="zegarekek">
                            <div id="czasomierz"></div>                                
                        </div>

                        <div id="podpowiedz">
                            <div id="ss" style="display: none;">                              
                                <div id="txtHint" >tu wyswietlaja sie podpowiedzi</div>  
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>

</body>




</html>
