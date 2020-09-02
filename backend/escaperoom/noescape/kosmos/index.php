<html>
<!-- Główna strona do zarzadzania pokojem kosmos -->
<head>
    <title>Kosmos manager</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300|ZCOOL+XiaoWei" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  <!-- boostrap 3.3.7 -->
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script> <!-- plugin -->
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script> <!-- plugin -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" /> <!-- plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script> <!-- plugin -->
    <script type="text/javascript" src="dist/jquery.tabledit.js"></script> <!-- zarzadzanie tabelka (plugin) -->
    <script type="text/javascript" src="custom_table_edit.js"></script> <!-- skrypt zarzadzajcy tabelka -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <!-- ten i kolejne 2 to bootstrap 4.0 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        @keyframes example 
        {
            0% 
            {
                border-color: red;
            }
            10%
            {
                border-color: blue;
            }
            60%
            {
                border-color: yellow;
            }
            100%
            {
                border-color: red;
            }
            
        }
        #ramka{
            
            animation-duration: 1s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }
        body {
            transform: scale(1.0);
            transform-origin: 0 0;
            max-width: 100%;
            margin: auto;
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 15px;
            padding-bottom: 15px;
            background-color: #f1f1f1;
            font-family: 'ZCOOL XiaoWei', serif;
        }
        .box {
            width: 100%;
            padding: 5px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 7px;
            margin-top: 15px;
            margin-right: 15px;
            box-sizing: border-box;
            font-size: 1vw;
        }   
        .txtpodpowiedz{
            font-weight: bold;
			color:green;
        }    
		.txtTytul{
            font-weight: bold;
		    font-size: 1.5vw;
			color:red;
        }  
        .card{
            font-size: 1vw;
        }  
        .card .btn{
            font-size:1vw;
			color:green;
			font-weight:bold;
        }
		.card .radio-green{
			font-size:1vw;
		}
		.card-body .btn{
            font-size:0.8vw;
			color:black;
			font-weight:300;
			
        }
        .input-sm{
            font-size:1.5vw;
            font-weight:bold;
        }
        .tooltip{
            font-size:0.7vw;
        }
		.button1 {
			position: relative;
			background-color: grey;
			border: red;
			
			
			font-size: 16px;
			color: yellow;

			
			text-align: center;
			transition-duration: 0.4s;
			text-decoration: none;
			overflow: hidden;
			cursor: pointer;
		}

		.button1:after {
			content: "";
			background: #f1f1f1;
			display: block;
			position: absolute;
			padding-top: 300%;
			padding-left: 350%;
			margin-left: -20px !important;
			margin-top: -120%;
			opacity: 0;
			transition: all 0.8s
		}

		.button1:active:after {
			padding: 0;
			margin: 0;
			opacity: 1;
			transition: 0s
		}		
		label {
			height: 35px;
			width: 500px;
			text-align: center;
			padding-top:5px;
		}		
		
    </style>
    <script type="text/javascript">

		var myVar = setInterval(fu, 1000); 			
        var myZeg = setInterval(sprawdzG, 1000);
        var turne = 0;
		var poziomWybrany= false;
		var startCzas= false;			
		var co_ile=1;
        var opoznienie=co_ile*1000;
        $(document).ready(function () {
		if 	(startCzas == false){

			startCzas=true;
		}
        });


		
		
		
        function szybciej(){
			if (co_ile<=1 && co_ile>=0.50)co_ile -= 0.05;
            else if (co_ile>1)co_ile -= 0.1;
			ZmianaCzasu();
            if (co_ile==1){
                document.getElementById("predk").style.color='black';
				document.getElementById("predk").innerHTML=co_ile.toFixed(1);
            }
            else if (co_ile<1){
                document.getElementById("predk").style.color='red';
				document.getElementById("predk").innerHTML=co_ile.toFixed(2);
            }
            else{
                document.getElementById("predk").style.color='green';
		        document.getElementById("predk").innerHTML=co_ile.toFixed(1);		
            }


          
        }
        function wolniej(){
			if (co_ile<1 && co_ile>=0.45)co_ile += 0.05;
			else if	(co_ile<4)co_ile += 0.1;

			ZmianaCzasu();		
			
            if (co_ile==1){
                document.getElementById("predk").style.color='black';
				document.getElementById("predk").innerHTML=co_ile.toFixed(1);
            }
            else if (co_ile<1){
                document.getElementById("predk").style.color='red';
				document.getElementById("predk").innerHTML=co_ile.toFixed(2);
            }
            else{
                document.getElementById("predk").style.color='green';
				document.getElementById("predk").innerHTML=co_ile.toFixed(1);
            }

        }
        function ZmianaCzasu()
        { 	
            clearInterval(UstalanieIntervalu);
            opoznienie=co_ile*1000;
            UstalanieIntervalu = setInterval(timerOn, opoznienie);
            if (co_ile==1)
            {
                document.getElementById("predk").innerHTML=co_ile.toFixed(1);
                document.getElementById("predk").style.color='black';
            }
            console.log(opoznienie);			
        }
		
	
      
        function timerOnOn()
        {

            if (window.XMLHttpRequest) 
            {
                xmlhttp = new XMLHttpRequest();
            } 
            else 
            { //dla uposledzonych przegladarek
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            
            xmlhttp.open("GET", "timeron.php?q=" + turne, true);
            xmlhttp.send();
        }
        function zmianaDelay(moderacja)
        {

            if (window.XMLHttpRequest) 
            {
                xmlhttp = new XMLHttpRequest();
            } 
            else 
            { //dla uposledzonych przegladarek
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            
            xmlhttp.open("GET", "zmianaDelay.php?q=" + moderacja, true);
            xmlhttp.send();
        }


        var UstalanieIntervalu = setInterval(timerOn, opoznienie);
        function timerOn(){
            if (turne == 1)
            {
                zegarek(" ", 1);
                
            }
            else
            {
                zegarek(" ", 0);
                
            }
	//	window.setTimeout( timerOn, opoznienie); 	
            
        }
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

        function fu(str) { //skrypt do pobierania danych do głównego pola (obrazek i podpowiedz)
            document.getElementById('ss').style.display = "inline";
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
                xmlhttp.open("GET", "getdatakosmosmanager.php?q=" + '1', true);
                xmlhttp.send();
            }
        }
        function zegarek(str, turn){ //skrypt do wyswietlania zegarka i jego aktualizacji
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
                if(turn == 1)
                {
                    xmlhttp.open("GET", "timerK.php", true);
                    xmlhttp.send();
                }
                else{
                    xmlhttp.open("GET", "timerkosmosmng.php", true);
                    xmlhttp.send();
                }
            }
        }
        function zegarekupdate(str){ //skrypt do zmiany czasu na dowolna wartosc sekundowo
            var czs = document.getElementById('czs').value;
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
                xmlhttp.open("GET", "timerKupdate.php?q=" + czs, true);
                xmlhttp.send();
            }
        }

        function sprawdzG(){           
            document.getElementById('zega').style.display = "inline";
           
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else { //dla uposledzonych przegladarek
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("wielkosczeg").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "checkzeg.php", true);
            xmlhttp.send();
            
        }
        
        
		
        function duzyZegar(){ //skrypt zmieniajacy wartosc wielkosci zegara, dzieki czemu na monitorze w pokoju wyswietla sie albo wielki albo zwykly
            if(document.getElementById("zegg").checked == true){
                zwiekszZegar();
            }
            else
            {
                zmniejszZegar();
            }

        }
		
		function zmniejszZegar(){ //skrypt zmieniajacy wartosc wielkosci zegara, dzieki czemu na monitorze w pokoju wyswietla sie albo wielki albo zwykly
            if (window.XMLHttpRequest) 
            {
                xmlhttp = new XMLHttpRequest();
            } 
            else 
            { //dla uposledzonych przegladarek
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            
            xmlhttp.open("GET", "podpCheckKosmos.php?q=" + 0, true);
            xmlhttp.send();

        }
		function zwiekszZegar(){ //skrypt zmieniajacy wartosc wielkosci zegara, dzieki czemu na monitorze w pokoju wyswietla sie albo wielki albo zwykly
            if (window.XMLHttpRequest) 
            {
                xmlhttp = new XMLHttpRequest();
            } 
            else 
            { //dla uposledzonych przegladarek
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            
            xmlhttp.open("GET", "podpCheckKosmos.php?q=" + 1, true);
            xmlhttp.send();
			clearTimeout(ChowaniePodpowiedzi);
        }
        var ukryj = 0;
        function ukryjZegar(){ //skrypt chowajacy zegar calkowicie
            if(document.getElementById("ukr").checked == true){
                ukryj = 1;
            }
            else
            {
                ukryj = 0;
            }

            if (window.XMLHttpRequest) 
            {
                xmlhttp = new XMLHttpRequest();
            } 
            else 
            { //dla uposledzonych przegladarek
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            
            xmlhttp.open("GET", "ukrCheckKosmos.php?q=" + ukryj, true);
            xmlhttp.send();
			clearTimeout(ChowaniePodpowiedzi);
        }

        function buttn(num){
            if (num == 0){
                document.getElementById('wyl').style.display = 'inline'; 
                document.getElementById('wl').style.display = 'none';
            }
            else{
                document.getElementById('wl').style.display = 'inline';
                document.getElementById('wyl').style.display = 'none';
            }
        }

        var dlugoscpostepu = 0;
        function postepplus(number){ //skrypt odpowiadajacy za zwiekszanie paska postępu 
            if ((number==4 && poziomWybrany == false) || number!=4){
				if (number==4) poziomWybrany=true;
				dlugoscpostepu +=100/13;
			}
			
            var pop = document.getElementById('postep');
            pop.style.width = dlugoscpostepu + "%";
            pop.innerHTML = dlugoscpostepu.toFixed(1) + "%";
            if (number!=4)document.getElementById(number).style="color:#ccc3a9";				
            document.getElementById(number).classList.remove('bg-light');
			document.getElementById(number).classList.add('bg-dark');
			var tytul = 'T'+number;
			document.getElementById(tytul).style="color:green";
        }
        function postepminus(number){ //skrypt odpowiadajacy za zmniejszanie paska postępu 
            dlugoscpostepu -=100/13;
            var pop = document.getElementById('postep');
            pop.style.width = dlugoscpostepu + "%";
            pop.innerHTML = dlugoscpostepu.toFixed(1) + "%";
            document.getElementById(number).style="color:black";				
			document.getElementById(number).classList.remove('bg-dark');
			document.getElementById(number).classList.add('bg-light');
			var tytul = 'T'+number;
			document.getElementById(tytul).style="color:red";
        }
	
		var ChowaniePodpowiedzi;
        function podpowiedz(wyb){   
            if (wyb>0){
                zmniejszZegar();
				if (document.getElementById("AutoHidePodpowiedzi").checked == true)	ChowaniePodpowiedzi = setTimeout(zwiekszZegar, 120000); 
            } 	
            if (window.XMLHttpRequest) 
            {
                xmlhttp = new XMLHttpRequest();
            } 
            else 
            { //dla uposledzonych przegladarek
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.open("GET", "podpowiedzK.php?q=" + wyb, true);
            xmlhttp.send();  
        }


        
        function levelunlock(){           

            document.getElementById('zrobione4').disabled = false;
            document.getElementById('niezrobione4').disabled = false;   
        }
        function levellock(){           
            document.getElementById('zrobione4').disabled = true;
            document.getElementById('niezrobione4').disabled = true;   
        }
        function levelcheck(){
            var first = document.getElementById('zrobione1').checked;
            var second = document.getElementById('zrobione2').checked;
            var third = document.getElementById('zrobione3').checked;
            if (first && second && third == true){
                levelunlock();
            }
            else{
                levellock();
            }
            
        }
        window.onbeforeunload = function(event)
        {
            if (turne==1){
                turne = 0; 
                timerOnOn()
            }
        };



        function resetCele(){
			poziomWybrany=false;
			dlugoscpostepu = 0;
        
            document.getElementById('postep').style.width = dlugoscpostepu + "%";
            document.getElementById('postep').innerHTML = dlugoscpostepu + "%";
			levellock();
			$(".collapse").collapse('hide'); 								//- DO ZWIJANIA POZIOMÓW

			var i = 1;
			for (i=1;i<=22;i++){
				var krok = "zrobione"+i; 
				document.getElementById(krok).checked = false;
				    krok = "niezrobione"+i; 
				if (i!=4)document.getElementById(krok).checked = true;
				else document.getElementById(krok).checked = false;
				document.getElementById(i).classList.remove('bg-dark');
				document.getElementById(i).classList.add('bg-light');
			var tytul = 'T'+i;
			document.getElementById(tytul).style="color:red";
			document.getElementById(i).style="color:black";			
			}
	

		}		
        function resetPokoj(){
			document.getElementById('czs').value = '3599';
			zegarekupdate();	
			zmniejszZegar();
			resetCele();
			podpowiedz(-1);	
			turne = 0; 
			buttn(1);
			timerOnOn();
            co_ile=1;
		    ZmianaCzasu();
			clearTimeout(ChowaniePodpowiedzi);			
            
		}	
		


		
    </script>
</head>

<body>


<div class = "container-fluid">   

<!-- naglowek -->

    <div class="row"> 
        <div class="col-12">
            <div class="container-fluid box">
                <h1>
                <a href="kosmosekran.php" target="_blank"><center>Monitor kosmos</center> </a>
                </h1>
            </div>
        </div>
    </div>

<!-- progress bar -->
<div class="row"> 
        <div class="col-12">
            <div class="container-fluid box">    
                <div class="progress">
                    <div class="progress-bar" id="postep" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>
            </div>
        </div>
    </div>

<!-- lewy panel cały -->
    <div class="row">
        <div class="col-4">
            <div class="container-fluid box" style="text-align:center; font-size:2vw;">
            <button class="button button1"  onclick="resetCele()" >Reset cele</button>			
            Cele do zrobienia
 			<button class="button button1"  data-toggle="tooltip" data-placement="top" title="Resetuje wszystkie ustawienia pokoju do 0" onclick="resetPokoj()">RESET</button>
			<div id="accordion">
                    <div class="card bg-light" id="1">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                            
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                  <span class="txtTytul" id="T1"> Balansowanie</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
											<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione1" name="Pistolet" onchange="postepminus(1);levelcheck()">
                                        </label>
										</div> 
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
											<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione1" name="Pistolet" onchange="postepplus(1);levelcheck()">                                        
                                        </label>
										</div>                                    
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Muszą balansować samolotem żeby zdobyć kierunki do otwarcia kłódki do skrzynki serwisowej                              
                                <br/>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(1)" data-toggle="tooltip" data-placement="top" title="Postarajcie się utrzymać stabilny lot statkiem">Delikatna</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(2)" data-toggle="tooltip" data-placement="top" title="Musicie balansować kulką żeby była nieruchomo" >Zwykła</button>
                                    <button type="button" class="btn btn-warning" onclick="podpowiedz(3)" data-toggle="tooltip" data-placement="top" title="Musicie balansować kulką i na ścianie wyświetlą się strzałki, które tworzą kod do kłódki. ">0 IQ</button>
                                     <button type="button" class="btn btn-danger" onclick="podpowiedz(4)" data-toggle="tooltip" data-placement="top" title="Po zbalansowaniu kłódki pojawiają sie strzałki [zdjęcie] ">Rozwiązanie</button>
								</div>
                            </div>
                        </div>
                    </div>


                    <div class="card bg-light"  id="2">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                   <span class="txtTytul" id="T2"> Latarka/samochodzik</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
											<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione2" name="Drzewo" onchange="postepminus(2);levelcheck()">
                                        </label>
										</div> 
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
											<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione2" name="Drzewo" onchange="postepplus(2);levelcheck()">                                        
                                        </label>
										</div>                                    
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                Latarka za r2d2 służy do napędzenia samochodziku solarnego
                                </br>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example" >
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(5)" data-toggle="tooltip" data-placement="top" title="Przeszukajcie dokładnie pokój i wszystkie jego zakamarki">Delikatna</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(6)" data-toggle="tooltip" data-placement="top" title="Poszukajcie w rogach pokoju">Rogi pokoju</button>
                                    <button type="button" class="btn btn-warning" onclick="podpowiedz(7)" data-toggle="tooltip" data-placement="top" title="Samochodzik solarny">Samochodzik solarny</button>
                                    <button type="button" class="btn btn-danger" onclick="podpowiedz(8)" data-toggle="tooltip" data-placement="top" title="Zwróćcie uwagę, że latarka ma pare trybów świecenia ">Latarka tryby</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card bg-light" id="3">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  <span class="txtTytul" id="T3"> Tablet</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
											<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione3" name="MagnesK" onchange="postepminus(3);levelcheck()">
                                        </label>
										</div> 
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
											<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione3" name="MagnesK" onchange="postepplus(3);levelcheck()">                                        
                                        </label>
										</div>                                    
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Po wpisaniu kodu z karty, muszą powiedzeniu głośno hasła 'hello'a następnie wybrać poziom trudności
                                </br>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example" >
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(9)" data-toggle="tooltip" data-placement="top" title="Sprawdźcie karte">Karta</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(10)" data-toggle="tooltip" data-placement="top" title="Musicie nacisąć na tablecie na następnie powiedzieć głośno i wyraźnie hasło">Hasło</button>
                                    <button type="button" class="btn btn-warning" onclick="podpowiedz(11)" data-toggle="tooltip" data-placement="top" title="Naciśnijcie na tablecie">Analiza</button>
									<button type="button" class="btn btn-danger" onclick="podpowiedz(12)" data-toggle="tooltip" data-placement="top" title="Musicie nacinąć na tablecie przycisk 'Analiza uszkodzeń'">Analiza 0IQ</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="card bg-light" id="4">
                        <div class="card-header" id="headingThree" >
                            <h5 class="mb-0" style="font-size:0.75vw">
                                  <span class="txtTytul" id="T4">   Wybór poziomu    </span>          
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
											<label>
                                            <span >Łatwy  &nbsp;</span>
                                            <input type="radio"  class="form-check-input" disabled data-toggle="collapse"  data-target="#collapselatwy" id="niezrobione4" name="poziom" onchange="postepplus(4)">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
									<label>
                                            <span>Trudny  &nbsp;</span>
                                            <input type="radio"  class="form-check-input" disabled data-toggle="collapse"  data-target="#collapsetrudny" id="zrobione4" name="poziom" onchange="postepplus(4)">                                        
                                        </div>                                   
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapselatwy" class="collapse"  aria-labelledby="headingThree" data-parent="#accordion2">
                            <div class="card-body">
                                
                                Łatwy poziom

                                <div class="card bg-light" id="5">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsesrodek" aria-expanded="false" aria-controls="collapseThree">
                                               <span class="txtTytul" id="T5"> Konsola lewa strona</span>
                                            </button>
                                            <div class ="row">
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Nie Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" checked id="niezrobione5" name="srodek" onchange="postepminus(5)">
                                                    </label>
										</div> 
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" id="zrobione5" name="srodek" onchange="postepplus(5)">                                        
                                                    </label>
										</div>                                    
                                                </div>                             
                                            </div>
                                        </h5>
                                    </div>
                                    <div id="collapsesrodek" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                                        <div class="card-body">
                                            Musza ustawić wszystkie przełączniki poprawnie według opisu z tableta - aktywuje się radar
                                            </br>
                                            <span class="txtpodpowiedz">Podpowiedź</span>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success" onclick="podpowiedz(13)" data-toggle="tooltip" data-placement="top" title="Sprawdzcie czy macie wszystko dobrze ustawione">Delikatna</button>
                                                <button type="button" class="btn btn-danger" onclick="podpowiedz(14)" data-toggle="tooltip" data-placement="top" title="Wszystkie przełączniki muszą być ustawione w odpowiednich pozycjach">0 iq(rozwiązać im ręcznie jak cokolwiek ustawią)</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card bg-light" id="6">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapselabo" aria-expanded="false" aria-controls="collapseThree">
                                               <span class="txtTytul" id="T6"> Radar</span>
                                            </button>
                                            <div class ="row">
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Nie Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" checked id="niezrobione6" name="lab" onchange="postepminus(6)">
                                                    </label>
										</div> 
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" id="zrobione6" name="lab" onchange="postepplus(6)">                                        
                                                    </label>
													</div>                                    
                                                </div>                             
                                            </div>
                                        </h5>
                                    </div>
                                    <div id="collapselabo" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                                        <div class="card-body">
                                            Po rozwiązaniu konsoli wysuwa się radar, grupa musi się ukryć po rogach pokoju - 'niewykrywanie' jest aktywowane ręcznie przez MG przez przyciski. Po dezaktywacji wyjeźdza R2D2
                                            </br>
                                            <span class="txtpodpowiedz">Podpowiedź</span>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success" onclick="podpowiedz(15)" data-toggle="tooltip" data-placement="top" title="Radar wykrywa">Delikatna</button>
                                                <button type="button" class="btn btn-info" onclick="podpowiedz(16)" data-toggle="tooltip" data-placement="top" title="Radar wykrywa osoby">Zwykła</button>
                                                <button type="button" class="btn btn-danger" onclick="podpowiedz(17)" data-toggle="tooltip" data-placement="top" title="Musicie się ukryć tak, aby radar was nie wykrył">0 iq</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <div class="card bg-light" id="7">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseglobus" aria-expanded="false" aria-controls="collapseThree">
                                              <span class="txtTytul" id="T7"> R2D2/konsola prawa strona</span>
                                            </button>
                                            <div class ="row">
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Nie Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" checked id="niezrobione7" name="glo" onchange="postepminus(7)">
                                                    </label>
													</div>  
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" id="zrobione7" name="glo" onchange="postepplus(7)">                                        
                                                    </label>
													</div>                                     
                                                </div>                             
                                            </div>
                                        </h5>
                                    </div>
                                    <div id="collapseglobus" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                                        <div class="card-body">
                                            Wyjeżdźa R2D2 który wskazuje leje (później sterowanie ręczne z pilota), muszą ustawić odpowiednio przyciski odpowiadające temu obrazkowi z książki
                                            </br>
                                            <span class="txtpodpowiedz">Podpowiedź</span>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success" onclick="podpowiedz(18)" data-toggle="tooltip" data-placement="top" title="R2D2 może wam coś pokazać">Delikatna</button>
                                                <button type="button" class="btn btn-info" onclick="podpowiedz(19)" data-toggle="tooltip" data-placement="top" title="R2D2 ma wbudowany projektor">Projektor</button>
                                                <button type="button" class="btn btn-danger" onclick="podpowiedz(20)" data-toggle="tooltip" data-placement="top" title="Musicie ustawić odpowiednio przełączniki [zdjęcie leji]">Leja</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                                <div class="card bg-light" id="8">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseplanety" aria-expanded="false" aria-controls="collapseThree">
                                              <span class="txtTytul" id="T8"> Szafa</span>
                                            </button>
                                            <div class ="row">
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Nie Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" checked id="niezrobione8" name="pln" onchange="postepminus(8)">
                                                    </label>
													</div>  
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" id="zrobione8" name="pln" onchange="postepplus(8)">                                        
                                                    </label>
													</div>                                     
                                                </div>                             
                                            </div>
                                        </h5>
                                    </div>
                                    <div id="collapseplanety" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                                        <div class="card-body">
                                            W szafie poukrywane są planety, w bucie jest kluczyk do laboratorium, kask pozwala patrzeć przez buleje
                                            </br>
                                            <span class="txtpodpowiedz">Podpowiedź</span>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success" onclick="podpowiedz(21)" data-toggle="tooltip" data-placement="top" title="Przeszukajcie dokładnie szafe i kombinezon">Przeszukajcie</button>
                                                <button type="button" class="btn btn-info" onclick="podpowiedz(22)" data-toggle="tooltip" data-placement="top" title="Przeszukajcie dokładnie kombinezon i buty">W bucie</button>
                                                <button type="button" class="btn btn-danger" onclick="podpowiedz(23)" data-toggle="tooltip" data-placement="top" title="W kasku możecie zobaczyć więcej">Kask</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <div class="card bg-light" id="9">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapseThree">
                                              <span class="txtTytul" id="T9">  Laboratorium</span>
                                            </button>
                                            <div class ="row">
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Nie Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" checked id="niezrobione9" name="pudd" onchange="postepminus(9)">
                                                    </label>
													</div>  
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" id="zrobione9" name="pudd" onchange="postepplus(9)">                                        
                                                    </label>
													</div>                                     
                                                </div>                             
                                            </div>
                                        </h5>
                                    </div>
                                    <div id="collapse9" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                                        <div class="card-body">
                                            Po otworzeniu laboratorium kluczykiem trzeba wymienić uszkodzona płytke i odpowiednio podłączyc nową. Odblokuje się górna część gdzie trzeba przelać płyny (rozwiązuje się gdy w każdym zbiorniku będzie po prostu jakikolwiek płyn)
                                            </br>
                                            <span class="txtpodpowiedz">Podpowiedź</span>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success" onclick="podpowiedz(24)" data-toggle="tooltip" data-placement="top" title="Musicie wymienić uszkodzoną płytkę">Płytka</button>
                                                <button type="button" class="btn btn-info" onclick="podpowiedz(25)" data-toggle="tooltip" data-placement="top" title="W laboratorium jest instrukcja jak stworzyć hiperpaliwo ">Instrukcja</button>
                                                <button type="button" class="btn btn-danger" onclick="podpowiedz(26)" data-toggle="tooltip" data-placement="top" title="Musicie stworzyć paliwo według instrukcji widocznej od boku laboratorium, wlejcie je potem do odpowiednich zbiorników.">Wlać płyny</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                                <div class="card bg-light" id="10">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapseThree">
                                               <span class="txtTytul" id="T10">  Planety</span>
                                            </button>
                                            <div class ="row">
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Nie Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" checked id="niezrobione10" name="jdr" onchange="postepminus(10)">
                                                    </label>
													</div>  
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" id="zrobione10" name="jdr" onchange="postepplus(10)">                                        
                                                    </label>
													</div>                                     
                                                </div>                             
                                            </div>
                                        </h5>
                                    </div>
                                    <div id="collapse10" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                                        <div class="card-body">
                                            6 planet musi być ustawione w odpowiedni sposób na konsoli, ustawienie planet widac przez buleje - jedna włącza się po ustawieniu leji drugą widać w kasku, aktywuje się wtedy globus
                                            </br>
                                            <span class="txtpodpowiedz">Podpowiedź</span>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success" onclick="podpowiedz(27)" data-toggle="tooltip" data-placement="top" title="Musicie ustawić odpowiednio planety na konsoli, jest tam specjalne miejsce, aby to zrobić">Delikatna</button>
                                                <button type="button" class="btn btn-info" onclick="podpowiedz(28)" data-toggle="tooltip" data-placement="top" title="W kasku możecie zobaczyć więcej">Kask</button>
                                                <button type="button" class="btn btn-primary" onclick="podpowiedz(29)" data-toggle="tooltip" data-placement="top" title="Przeszukajcie laboratorium i skrzynkę z jej przewodami ">planety w lab</button>
                                                <button type="button" class="btn btn-warning" onclick="podpowiedz(30)" data-toggle="tooltip" data-placement="top" title="Przeszukajcie szafe, rękawice, tam gdzie leżał kask">planety w szafa</button>
                                                 <button type="button" class="btn btn-danger" onclick="podpowiedz(31)" data-toggle="tooltip" data-placement="top" title="Musicie ustawić 6 planet w pozycjach tak jak je widać przez buleje">6 planet</button>
											</div>

                                        </div>
                                    </div>
                                </div> 
								
                               <div class="card bg-light" id="11">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapseThree">
                                               <span class="txtTytul" id="T11">  Globus</span>
                                            </button>
                                            <div class ="row">
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Nie Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" checked id="niezrobione11" name="jdra" onchange="postepminus(11)">
                                                    </label>
													</div>  
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" id="zrobione11" name="jdra" onchange="postepplus(11)">                                        
                                                    </label>
													</div>                                     
                                                </div>                             
                                            </div>
                                        </h5>
                                    </div>
                                    <div id="collapse11" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                                        <div class="card-body">
                                            Współrzędne z laboratorium 75W i z głowy R2D2 5N wskazują poprawny cel - Kolumbie, otwiera się wtedy generator
                                            </br>
                                            <span class="txtpodpowiedz">Podpowiedź</span>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success" onclick="podpowiedz(32)" data-toggle="tooltip" data-placement="top" title="Musicie odpowiednio ustawić współrzędne na globusie">Delikatna</button>
                                                <button type="button" class="btn btn-info" onclick="podpowiedz(33)" data-toggle="tooltip" data-placement="top" title="Jedną współrzędną ma R2D2 a druga jest w laboratorium ustawcie dobrze globus">Zwykła</button>
                                                <button type="button" class="btn btn-warning" onclick="podpowiedz(34)" data-toggle="tooltip" data-placement="top" title="Poprawny cel znajduje sie na północy i zachodzie: 5N 75W">5N75W</button>
                                                <button type="button" class="btn btn-danger" onclick="podpowiedz(35)" data-toggle="tooltip" data-placement="top" title="Musicie ustawić na globusie kraj: Kolumbia">Kolumbia</button>

											</div>

                                        </div>
                                    </div>
                                </div> 
                               <div class="card bg-light" id="12">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapseThree">
                                               <span class="txtTytul" id="T12">  Pudełko</span>
                                            </button>
                                            <div class ="row">
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Nie Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" checked id="niezrobione12" name="jdrb" onchange="postepminus(12)">
                                                    </label>
													</div>  
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" id="zrobione12" name="jdrb" onchange="postepplus(12)">                                        
                                                    </label>
													</div>                                     
                                                </div>                             
                                            </div>
                                        </h5>
                                    </div>
                                    <div id="collapse12" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                                        <div class="card-body">
                                            Jak otworzy się generator trzeba wspiąć się po drabinie, otworzyć pudełko które daje kluczyk do włazu z kłódka na ścianie
                                            </br>
                                            <span class="txtpodpowiedz">Podpowiedź</span>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success" onclick="podpowiedz(36)" data-toggle="tooltip" data-placement="top" title="Po której stronie wspinać się po drabinie jest pokazane na zdjęciu">Drabina</button>
                                                <button type="button" class="btn btn-info" onclick="podpowiedz(37)" data-toggle="tooltip" data-placement="top" title="Musicie otworzyć drewniane pudełko z generatora">Delikatna</button>
                                                <button type="button" class="btn btn-warning" onclick="podpowiedz(38)" data-toggle="tooltip" data-placement="top" title="Musicie pociągnąć za odpowiednie krawędzie pudełka, aby je otworzyć">Zwykła</button>
                                                <button type="button" class="btn btn-danger" onclick="podpowiedz(39)" data-toggle="tooltip" data-placement="top" title="[zdjęcie]">Zdjęcie</button>

											</div>

                                        </div>
                                    </div>
                                </div>         
                                <div class="card bg-light" id="13">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapseThree">
                                               <span class="txtTytul" id="T13">  Jądro</span>
                                            </button>
                                            <div class ="row">
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Nie Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" checked id="niezrobione13" name="jdrc" onchange="postepminus(13)">
                                                    </label>
													</div>  
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" id="zrobione13" name="jdrc" onchange="postepplus(13)">                                        
                                                    </label>
													</div>                                     
                                                </div>                             
                                            </div>
                                        </h5>
                                    </div>
                                    <div id="collapse13" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                                        <div class="card-body">
                                            Jądro trzeba wyciągnąć z generatora, przyłożyc do takiego samego znaku we włazie który został otwarty kluczykiem z pudeła a nastepnie zanieść z powrotem do góry do generatora - wypadnie wtedy kluczyk
                                            </br>
                                            <span class="txtpodpowiedz">Podpowiedź</span>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success" onclick="podpowiedz(40)" data-toggle="tooltip" data-placement="top" title="Musicie naładować jądro generatora">Delikatna</button>
                                                <button type="button" class="btn btn-info" onclick="podpowiedz(41)" data-toggle="tooltip" data-placement="top" title="Jądro należy przyłożyć do tego samego znaku w pokoju co ma z tyłu, aby je naładować">Naładować</button>
                                                <button type="button" class="btn btn-warning" onclick="podpowiedz(42)" data-toggle="tooltip" data-placement="top" title="Naładowane jądro musi zasilić generator, aby uruchomić statek">Zasilić generator</button>
                                                <button type="button" class="btn btn-danger" onclick="podpowiedz(43)" data-toggle="tooltip" data-placement="top" title="Musicie włożyć naładowane jądro z powrotem do generatora">Z powrotem</button>

											</div>

                                        </div>
                                    </div>
                                </div> 





                            </div>
                        </div>
                        <div id="collapsetrudny" class="collapse" aria-labelledby="headingThree" data-parent="#accordion3">
                            <div class="card-body">
<!----------------------------------------------------------------------------------------------------------------------------------------------->                            
                                trudny poziom!!

                                <div class="card bg-light" id="14">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapseThree">
                                              <span class="txtTytul" id="T14"> Właz</span>
                                            </button>
                                            <div class ="row">
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Nie Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" checked id="niezrobione14" name="sejf" onchange="postepminus(14)">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" id="zrobione14" name="sejf" onchange="postepplus(14)">                                        
                                                    </div>                                   
                                                </div>                             
                                            </div>
                                        </h5>
                                    </div>
                                    <div id="collapse14" class="collapse" aria-labelledby="headingThree" data-parent="#accordion3">
                                        <div class="card-body">
                                            Muszą odusnąć zabudowę i rozwiązać równania i za pomocą kodu otworzyć właz
                                            </br>
                                            <span class="txtpodpowiedz">Podpowiedź</span>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success" onclick="podpowiedz(44)" data-toggle="tooltip" data-placement="top" title="Odsuncie panel z pod ściany i rozwiażcie zagadkę ">Zasłona</button>
                                                <button type="button" class="btn btn-info" onclick="podpowiedz(45)" data-toggle="tooltip" data-placement="top" title="Wykonajcie dokładnie obliczenia, równania zawierają pewne haczyki które mogą wam to ułątwić">Obliczenia</button>
                                                <button type="button" class="btn btn-warning" onclick="podpowiedz(46)" data-toggle="tooltip" data-placement="top" title="Rozwiązanie: A=3 B=38 C=30">Wyniki ABC</button>
                                                <button type="button" class="btn btn-danger" onclick="podpowiedz(47)" data-toggle="tooltip" data-placement="top" title="Jeżeli naciśniecie 'HELP' mogę ">HELP</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-light" id="15">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapseThree">
                                              <span class="txtTytul" id="T15">Opaski/Lasery</span>
                                            </button>
                                            <div class ="row">
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Nie Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" checked id="niezrobione15" name="sejf15" onchange="postepminus(15)">
                                                    </label>
													</div>  
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" id="zrobione15" name="sejf15" onchange="postepplus(15)">                                        
                                                    </label>
													</div>                                     
                                                </div>                             
                                            </div>
                                        </h5>
                                    </div>
                                    <div id="collapse15" class="collapse" aria-labelledby="headingThree" data-parent="#accordion3">
                                        <div class="card-body">
                                            Musza uŹyć opasek żeby dezaktywować lasery, jedna osoba musi być przy układzie zasilania a druga zdezaktywować 4 czujniki
                                            </br>
                                            <span class="txtpodpowiedz">Podpowiedź</span>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success" onclick="podpowiedz(48)" data-toggle="tooltip" data-placement="top" title="W skrzynce narzędziowej były zegarki, mogą wam się przydać">Zegarki w skrzynce</button>
                                                <button type="button" class="btn btn-info" onclick="podpowiedz(49)" data-toggle="tooltip" data-placement="top" title="Użyjcie opasek w odpowiednich miejscach, żeby dezaktywować lasery ">Zwykła</button>
                                                <button type="button" class="btn btn-danger" onclick="podpowiedz(50)" data-toggle="tooltip" data-placement="top" title="Musicie przyłożyć jednocześnie opaski w dobrych miejscach by wyłączyć lasery, jedna osoba na poczatku przy układzie zasilania a druga wyłącza każdy po kolei">0 IQ</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-light" id="16">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapseThree">
                                              <span class="txtTytul" id="T16"> Lista kontrolna</span>
                                            </button>
                                            <div class ="row">
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Nie Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" checked id="niezrobione16" name="magn" onchange="postepminus(16)">
                                                    </label>
													</div>  
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" id="zrobione16" name="magn" onchange="postepplus(16)">                                        
                                                    </label>
													</div>                                     
                                                </div>                             
                                            </div>
                                        </h5>
                                    </div>
                                    <div id="collapse16" class="collapse" aria-labelledby="headingThree" data-parent="#accordion3">
                                        <div class="card-body">
                                            Musza odpowiedziec na pytania z listy i odpowiednio poprzestawiać zapadki pudełka
                                            </br>
                                            <span class="txtpodpowiedz">Podpowiedź</span>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success" onclick="podpowiedz(51)" data-toggle="tooltip" data-placement="top" title="Odpowiedzi do listy kontrolnej znajdziecie w pierwszej części statku, poszukajcie dokładnie">Delikatna</button>
                                                <button type="button" class="btn btn-info" onclick="podpowiedz(52)" data-toggle="tooltip" data-placement="top" title="Szukajcie wszędzie, generatora szukajcie u góry, prawidłowy zakres ciśnienia zaznaczony jest na zielono">Ciśnienie,generator</button>
                                                <button type="button" class="btn btn-warning" onclick="podpowiedz(53)" data-toggle="tooltip" data-placement="top" title="Lista kontrolna odp góra">Odp góra</button>
                                                <button type="button" class="btn btn-danger" onclick="podpowiedz(54)" data-toggle="tooltip" data-placement="top" title="Lista kontrolna odp dół">Odp dół</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card bg-light" id="17">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapseThree">
                                              <span class="txtTytul" id="T17"> Magnes/Labirynt</span>
                                            </button>
                                            <div class ="row">
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Nie Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" checked id="niezrobione17" name="laser" onchange="postepminus(17)">
                                                    </label>
													</div>  
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" id="zrobione17" name="laser" onchange="postepplus(17)">                                        
                                                    </label>
													</div>                                     
                                                </div>                             
                                            </div>
                                        </h5>
                                    </div>
                                    <div id="collapse17" class="collapse" aria-labelledby="headingThree" data-parent="#accordion3">
                                        <div class="card-body">
                                            Muszą współpracować i przesunąć magnesem kluczyk przez labirynt podając sobie kierunki w które maja się poruszać
                                            </br>
                                            <span class="txtpodpowiedz">Podpowiedź</span>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success" onclick="podpowiedz(55)" data-toggle="tooltip" data-placement="top" title="Czerwony punkt na ścianie określa początek"> Początek</button>
                                                <button type="button" class="btn btn-info" onclick="podpowiedz(56)" data-toggle="tooltip" data-placement="top" title="Musicie współpracowac i przejść razem labirynt ">Zwykła</button>
                                                <button type="button" class="btn btn-danger" onclick="podpowiedz(57)" data-toggle="tooltip" data-placement="top" title="Musicie przekazywać sobie kierunki i za pomocą magnesu wyciągnąć kluczyk z labiryntu">0 IQ</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card bg-light" id="18">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse18" aria-expanded="false" aria-controls="collapseThree">
                                              <span class="txtTytul" id="T18"> Panel druga strona</span>
                                            </button>
                                            <div class ="row">
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Nie Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" checked id="niezrobione18" name="kons" onchange="postepminus(18)">
                                                    </label>
													</div>  
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" id="zrobione18" name="kons" onchange="postepplus(18)">                                        
                                                    </label>
													</div>                                     
                                                </div>                             
                                            </div>
                                        </h5>
                                    </div>
                                    <div id="collapse18" class="collapse" aria-labelledby="headingThree" data-parent="#accordion3">
                                        <div class="card-body">
                                            Muszą włożyć kluczyk i rozwiązać 3 zagadki w 5 min, po 3 błędach panel się resetuje i losują się nowe zagadki 
                                            </br>
                                            <span class="txtpodpowiedz">Podpowiedź</span>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success" onclick="podpowiedz(58)" data-toggle="tooltip" data-placement="top" title="Instrukcje do panelu przydadzą się gdy aktywujecie panel">instukcja na później</button>
                                                <button type="button" class="btn btn-info" onclick="podpowiedz(59)" data-toggle="tooltip" data-placement="top" title="Do aktywacji panelu musicie mieć klucz z labiryntu">Klucz</button>
                                                <button type="button" class="btn btn-warning" onclick="podpowiedz(60)" data-toggle="tooltip" data-placement="top" title="Musicie aktywować konsole i rozwiązać 3 zagadki na czas ">Zwykła</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card bg-light" id="19"> 
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse19" aria-expanded="false" aria-controls="collapseThree">
                                              <span class="txtTytul" id="T19">    Joystick</span>
                                            </button>
                                            <div class ="row">
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Nie Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" checked id="niezrobione19" name="joy" onchange="postepminus(19)">
                                                    </label>
													</div>  
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" id="zrobione19" name="joy" onchange="postepplus(19)">                                        
                                                    </label>
													</div>                                     
                                                </div>                             
                                            </div>
                                        </h5>
                                    </div>
                                    <div id="collapse19" class="collapse" aria-labelledby="headingThree" data-parent="#accordion3">
                                        <div class="card-body">
                                            Muszą kodem otworzyć kłodke i joystickiem poruszać w odpowiednie strony gdy palą sie niebieskie diody tak, aby zjechać skrzynią w dół
                                            </br>
                                            <span class="txtpodpowiedz">Podpowiedź</span>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success" onclick="podpowiedz(61)" data-toggle="tooltip" data-placement="top" title="Poruszajcie się tylko w niebieski kierunek">Delikatna</button>
                                                <button type="button" class="btn btn-info" onclick="podpowiedz(62)" data-toggle="tooltip" data-placement="top" title="Musicie trafiac w odpowiednie kierunki (podświetlane na niebiesko) i strzelać w dobrym momencie ">Zwykła</button>
                                                <button type="button" class="btn btn-danger" onclick="podpowiedz(63)" data-toggle="tooltip" data-placement="top" title="Musicie poruszać joystickiem tylko gdy są niebieskie strzałki, błędy spowalniają zjazd skrzyni na dół">0 IQ</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card bg-light" id="20">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse20" aria-expanded="false" aria-controls="collapseThree">
                                              <span class="txtTytul" id="T20"> Robot</span>
                                            </button>
                                            <div class ="row">
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Nie Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" checked id="niezrobione20" name="robo" onchange="postepminus(20)">
                                                    </label>
													</div>  
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" id="zrobione20" name="robo" onchange="postepplus(20)">                                        
                                                    </label>
													</div>                                     
                                                </div>                             
                                            </div>
                                        </h5>
                                    </div>
                                    <div id="collapse20" class="collapse" aria-labelledby="headingThree" data-parent="#accordion3">
                                        <div class="card-body">
                                            Musza robotem wyjąć jajko z kluczem
                                            </br>
                                            <span class="txtpodpowiedz">Podpowiedź</span>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success" onclick="podpowiedz(64)" data-toggle="tooltip" data-placement="top" title="Musicie podłączyć zasilanie w ten sposób, aby paliła się zielona dioda przy robocie">Zasilanie</button>
                                                <button type="button" class="btn btn-info" onclick="podpowiedz(65)" data-toggle="tooltip" data-placement="top" title="Jeżeli macie problem z ruchami robota sprawdźcie czy macie dobrze dopchnięta wtyczke od pilota">Wtyczka</button>
                                                <button type="button" class="btn btn-danger" onclick="podpowiedz(66)" data-toggle="tooltip" data-placement="top" title="Musicie wyjąć jajko z komory, za pomocą robota, wykorzystajcie pełen zakres ruchów">Ruchy</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card bg-light" id="21">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse21" aria-expanded="false" aria-controls="collapseThree">
                                               <span class="txtTytul" id="T21"> Bezpieczniki</span>
                                            </button>
                                            <div class ="row">
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Nie Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" checked id="niezrobione21" name="elek" onchange="postepminus(21)">
                                                    </label>
													</div>  
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" id="zrobione21" name="elek" onchange="postepplus(21)">                                        
                                                    </label>
													</div>                                     
                                                </div>                             
                                            </div>
                                        </h5>
                                    </div>
                                    <div id="collapse21" class="collapse" aria-labelledby="headingThree" data-parent="#accordion3">
                                        <div class="card-body">
                                            Muszą przeciąć odpowiednio kable na czas, jeden z koloru który się nie powtarza - niebieski oraz drugi brązowy z prawej strony niebieskiego
                                            </br>
                                            <span class="txtpodpowiedz">Podpowiedź</span>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-info" onclick="podpowiedz(67)" data-toggle="tooltip" data-placement="top" title="Musicie przeciąć odpowiednie kable, macie na to ograniczony czas">Zwykła</button>
                                                <button type="button" class="btn btn-danger" onclick="podpowiedz(68)" data-toggle="tooltip" data-placement="top" title="Przetnijcie 2 kable, niebieski i brązowy z prawej strony">0 IQ</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card bg-light" id="22">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse22" aria-expanded="false" aria-controls="collapseThree">
                                              <span class="txtTytul" id="T22">    Karny panel</span>
                                            </button>
                                            <div class ="row">
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Nie Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" checked id="niezrobione22" name="pankon" onchange="postepminus(22)">
                                                    </label>
													</div>  
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" id="zrobione22" name="pankon" onchange="postepplus(22)">                                        
                                                    </label>
													</div>                                     
                                                </div>                             
                                            </div>
                                        </h5>
                                    </div>
                                    <div id="collapse22" class="collapse" aria-labelledby="headingThree" data-parent="#accordion3">
                                        <div class="card-body">
                                            Jeżeli nie uda im się przeciąć odpowiednich przewodów na czas aktywuje się karna zagadka w której do powtórzenia jest sekwencja dźwięków - po rozwiązaniu wypowiadany jest kod do sejfu
                                            </br>
                                            <span class="txtpodpowiedz">Podpowiedź</span>
                                           <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-info" onclick="podpowiedz(69)" data-toggle="tooltip" data-placement="top" title="Sprawdźcie sobie wszystkie dźwięki a następnie powtórzcie odpowiednią sekwencje">Zwykła</button>

                                            </div>                                                
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-light" id="23">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse23" aria-expanded="false" aria-controls="collapseThree">
                                              <span class="txtTytul" id="T23"> Sejf</span>
                                            </button>
                                            <div class ="row">
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Nie Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" checked id="niezrobione23" name="trudny23" onchange="postepminus(23)">
                                                    </label>
													</div>  
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check radio-green">
													<label>
                                                        <span>Zrobione  &nbsp;</span>
                                                        <input type="radio" class="form-check-input" id="zrobione23" name="trudny23" onchange="postepplus(23)">                                        
                                                    </label>
													</div>                                     
                                                </div>                             
                                            </div>
                                        </h5>
                                    </div>
                                    <div id="collapse23" class="collapse" aria-labelledby="headingThree" data-parent="#accordion3">
                                        <div class="card-body">
                                            Muszą otworzyć niemiecki sejf w którym jest klucz do drzwi
                                            </br>
                                            <span class="txtpodpowiedz">Podpowiedź</span>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success" onclick="podpowiedz(70)" data-toggle="tooltip" data-placement="top" title="Sejf z drugiej cześci statku">Sejf</button>
                                                <button type="button" class="btn btn-info" onclick="podpowiedz(71)" data-toggle="tooltip" data-placement="top" title="Przed wspisaniem kodu musicie nacisnąć przycisk 'ZUGRIFF'">Zugriff</button>												
                                                <button type="button" class="btn btn-danger" onclick="podpowiedz(72)" data-toggle="tooltip" data-placement="top" title="Sprawdźcie czy czasami nie wyjeliście baterii umieszczonych z prawej strony pod taśmą">Baterie</button>
                                            </div>                                               
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    
                </div>
            </div>
        
        
        
            <div class="container-fluid box" style="text-align:center;">
            Help
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#pomoc" aria-expanded="false" aria-controls="collapseOne">
                                    POMOC
                                </button>
                                
                            </h5>
                        </div>
                        <div id="pomoc" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <p><b>Kody kosmos:</b></p>                               
                                <p><b>lewo dół dół prawo góra</b> – po zbalansowaniu kulki – otwiera skrzynkę serwisową</p>
                                <p><b>A=3 B=38 C=30</b> – po obliczeniu równań w poz. Trudnym – otwiera właz i przejście na drugą strone</p>
                                <p><b>7624</b> – po rozwiązaniu panelu w poz. Trudnym – otwiera pudełko z joystickiem</p>								
								<p><b>ZUGRIFF 3312</b> – po przecięcu odpowiednich przewodów na wyświetlaczu lub po wciśnięciu odpowiednich przycisków na panelu LED – otwiera sejf z kluczem poz. trudny </p>
                            </div>
                        </div>
                </div>      
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#pomoc2" aria-expanded="false" aria-controls="collapseOne">
                                Klawiatura kosmos 
                                </button>
                                
                            </h5>
                        </div>
                            <div id="pomoc2" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
									<p><b>*125# - hasło do wejścia do trybu serwisowego</b></p>
                                    <p><b>1</b> – otwarcie pokrywy od tableta</p>                               
                                    <p><b>2</b>- odbezpieczenie blokady od pokrywy tableta</p>
                                    <p><b>3</b>-wysłanie sygnału startu do R2D2</p>
                                    <p><b>4</b>-uruchomieniue testu alarmu</p>
                                    <p><b>5</b>-otwarcie włazu</p>
                                    <p><b>6</b>-uruchomienie laboratorium</p>
                                    <p><b>7</b>-uruchomienie czarnego panelu (poz. Trudny)</p>
                                    <p><b>8</b>-włączenie wykrywanie przez czujniki laserowe (poz. Trudny)</p>
                                    <p><b>9</b>- wł/wył zasilanie żarówka </p>
                                    <p><b>A</b>-elektrozawór R2D2</p>
                                    <p><b>B</b>-elektrozawór szafa</p>
                                    <p><b>C</b>-elektrozawór pokrywa od przejścia</p>
                                    <p><b>D</b>- wł/wył zasilanie ledów</p>
                                    <p><b>*</b>-start/stop odtwarzania muzyki</p>									
                                    <p><b>#</b>-uruchomienie KONSOLI</p>
                                    <p><b>0 - Wyjście z trybu serwisowego</b></p>

                                </div>
                            </div>
                    </div>
                </div>             
            </div>
        </div>



        
    </div>

<!-- prawy panel cały -->

    <div class="col-8">
    <!-- ekran taki jak na wyspie -->
        <div class="container-fluid box">
            <div class='xd'>
            <center>

            
         <!-- przyciski pomocnicze, zmiana czasu, zwiekszanie zegara, ukrywanie zegara -->                   
            <div class="form-group">
                <div id='zegarupdate'>
                                Zmiana czasu gry w sekundach
                    <input type="text" id="czs" name="czs">
                    <button type="button" class="btn btn-outline-primary" onclick="zegarekupdate()">Zatwierdz</button>
                    <button type="button" class="btn btn-success" id="wl" onclick="turne = 1; buttn(0); timerOnOn()">Włącz timer</button>
                    <button type="button" class="btn btn-warning" id="wyl" style="display:none;" onclick="turne = 0; buttn(1); timerOnOn()">Wyłącz timer</button>
					<button type="button" class="btn btn-primary" id="szybci" onclick="szybciej()">+</button>   
                    <button type="button" class="btn btn-danger" id="wolni" onclick="wolniej()">-</button> 
                    <span id="predk" style="border: 2px solid black;border-radius: 25px; padding:4px;">predkosc</span>
					<button class="btn btn-primary" style="margin-left:5px" onclick="co_ile=1; ZmianaCzasu()" >Reset opoznienia</button>  	
                    
                </div>
                
                <div class="row">
                    <div class="col">
                        <div id='podp'>
                            Duży zegar
                            <input type="checkbox" id="zegg" name="zegg" >        
                            <button type="button" class="btn btn-outline-primary" onclick="duzyZegar()">Zatwierdz</button>
                        </div>
                    </div>
                    <div class="col">
                        <div id='ukryjzegar'>
                            Ukryj zegar
                            <input type="checkbox" id="ukr" name="ukr" >        
                            <button type="submit" class="btn btn-outline-primary" onclick="ukryjZegar()">Zatwierdz</button>
                        </div>
                    </div>
                    
                </div>
            </div>
            </center>   

			   <center>
                    <div class="row">
                        <div class="col">
                            <p id="demo"><h1>Podbój Kosmosu</h1></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div id="zegarekek">
                                <div id="czasomierz" style="font-size:100px;"></div>                               
                            </div>
                        </div>
                        <div class="col">
                            <div id="zega">
                                
                                <div id="wielkosczeg">
                                
                                </div>

                                                               
                            </div>
                        </div>
                    </div>
                    <div class="row container-fluid">
                        <div id="podpowiedz">
                            <div id="ss" style="display: none;">                              
                                <div id="txtHint" >tu wyswietlaja sie podpowiedzi</div>  
                            </div>
                        </div>
                    </div>
                </center>
                  
            </div>            
        </div>

        <!--tabelka do zmiany zdjecia podpowiedzi i delay -->
        <div class="container-fluid box">
            <table id="data_table" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Zdjecie</th>
                        <th>Podpowiedz tekstowa
                            <div class="btn-group" role="group" aria-label="Basic example" style="margin-left:25px; ">
                                <button type="button" style="font-size:1vw;" class="btn btn-outline-danger" onclick="zwiekszZegar(); podpowiedz(0)">Wyczyść podpowiedź</button>
								<label style="font-size:1vw"  > Autoukrywanie podpowiedzi  <input type="checkbox" checked id="AutoHidePodpowiedzi" > </label>
                            </div>
                        </th>
                        <!-- <td> <th>Delay</th>  -->
                    </tr>
                </thead>

                <tbody>
                    <?php
                        include_once("db_connect.php");
                        $sql_query = "SELECT ID, Zdjecie, Nazwa, delay FROM kosmos";
                        $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
                        while( $kosmos = mysqli_fetch_assoc($resultset) ) {
                        ?>
                        <tr id="<?php echo $kosmos ['ID']; ?>">
                        <td><?php echo $kosmos ['ID']; ?></td>
                        <td style="background:grey"><?php echo $kosmos ['Zdjecie']; ?></td>
                        <td><?php echo $kosmos ['Nazwa']; ?></td>
                       <!-- <td><?php echo $kosmos ['delay']; ?></td>-->
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            
        </div>
        
    </div>
    </div>
    </div>




       

</body>

 <!-- stopka -->

<footer>
    <p>Autor: Kamil Pabin</p>
    <p><a href="mailto:kamilxpabin@gmail.com">kamilxpabin@gmail.com</a></p>
</footer>
     


</html>
