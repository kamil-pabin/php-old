<html>

<head>
    <title>Weapon store</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300|ZCOOL+XiaoWei" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
            font-family: 'ZCOOL XiaoWei', serif;
        }

        .box {
            width: 1270px;
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

        .thumbnail:hover {
            border: 1px solid red;
        }

        @keyframes kpabin {
            0% {
                color: orange;
            }

            10% {
                color: purple;
            }

            20% {
                color: red;
            }

            30% {
                color: CadetBlue;
            }

            40% {
                color: yellow;
            }

            50% {
                color: coral;
            }

            60% {
                color: green;
            }

            70% {
                color: cyan;
            }

            80% {
                color: DeepPink;
            }

            90% {
                color: DodgerBlue;
            }

            100% {
                color: orange;
            }
        }

    </style>
    <script type="text/javascript">
        function hide() {

            document.getElementById('wyswietlacz').style.display = "none";
        }

        function showBigger(str) {
            document.getElementById('wyswietlacz').style.display = "inline";
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else { //dla uposledzonych przegladarek
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "getdata.php?q=" + str, true);
                xmlhttp.send();
            }
        }

    </script>
</head>

<body>
    <div class="container box">

        <h1>
            <center>Kamil Pabin</center>
        </h1>

    </div>

    <div class="container box">

        <div class="row">
            <div class="col-md-2">
                <div class="thumbnail">
                    <img src="ak47.jpg" alt="ak47" style="width:150px" name='5' onmouseover="showBigger(name)">
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <img src="beretta.jpg" alt="beretta" style="width:150px" name='2' onmouseover="showBigger(name)">
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <img src="glock19.jpg" alt="glock19" style="width:150px" name='3' onmouseover="showBigger(name)">
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <img src="Sajga.jpg" alt="sajga" style="width:150px" name='7' onmouseover="showBigger(name)">
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <img src="mossberg.jpg" alt="mossberg" style="width:150px" name='6' onmouseover="showBigger(name)">
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <img src="ar15.jpg" alt="ar15" style="width:150px" name='4' onmouseover="showBigger(name)">
                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-md-2">

                <div class="thumbnail">
                    <img src="aeg.jpg" alt="aeg" style="width:150px" name='8' onmouseover="showBigger(name)">
                </div>

                <div class="thumbnail">
                    <img src="troy.jpg" alt="troy" style="width:150px" name='9' onmouseover="showBigger(name)">
                </div>
            </div>


            <div class="col-md-8">
                <div class='xd'>
                    <center>
                        <div id="wyswietlacz" style="display: none;">
                            <div class="thumbnail" style='height:310px; width:66%;'>
                                <div id="txtHint" onclick='hide()'>Właściwości broni zostaną tutaj wyświetlone</div>
                            </div>
                        </div>
                    </center>
                </div>
            </div>

            <div class="col-md-2">

                <div class="thumbnail">
                    <img src="famas.jpg" alt="famas" style="width:150px" name='10' onmouseover="showBigger(name)">
                </div>

                <div class="thumbnail">
                    <img src="p1911.jpg" alt="1911" style="width:150px" name='11' onmouseover="showBigger(name)">
                </div>
            </div>

        </div>







        <div class="row">
            <div class="col-md-2">
                <div class="thumbnail">
                    <img src="g36.jpg" alt="g36" style="width:150px" name='12' onmouseover="fu(name)">
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <img src="p250.jpg" alt="p250" style="width:150px" name='13' onmouseover="fu(name)">
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <img src="mp7.jpg" alt="mp7" style="width:150px" name='14' onmouseover="fu(name)">
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <img src="mac10.jpg" alt="mac10" style="width:150px" name='15' onmouseover="fu(name)">
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <img src="mp5.jpg" alt="mp5" style="width:150px" name='16' onmouseover="fu(name)">
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <img src="aug.jpg" alt="aug" style="width:150px" name='17' onmouseover="fu(name)">
                </div>
            </div>
        </div>
    </div>



</body>




</html>
