<html>
<!-- Główna strona do zarzadzania pokojem wyspa -->
<head>
    <title>Wyspa manager</title>
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
            font-size:1vw;
			color:black;
			font-weight:300;
        }
        .btn{
            font-size:0.75vw;
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
    
        

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })   
		var zmianaczasu=0;
        var turne = 0;
        var myVar = setInterval(fu, 1000);  

		var startCzas= false;			
		var co_ile=1;
        var opoznienie=co_ile*1000;
        
		
		$(document).ready(function () {
		if 	(startCzas == false){
        //    timerOn();
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

        function ZmianaCzasu(){	    	
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

        	



        var myZeg = setInterval(sprawdzG, 1000);
        
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
                xmlhttp.open("GET", "getdatawyspamanager.php?q=" + '1', true);
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

        function zegarek(str, turn){ //skrypt do wyswietlania zegarka i jego aktualizacji
            document.getElementById('zegarekek').style.display = "inline";
            if (str == "") 
			{
                document.getElementById("czasomierz").innerHTML = "";
                return;
            } 
			else 
			{
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
                    xmlhttp.open("GET", "timerW.php", true);
                    xmlhttp.send();
                }
                else{
                    xmlhttp.open("GET", "timerwyspamng.php", true);
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
                xmlhttp.open("GET", "timerWupdate.php?q=" + czs, true);
                xmlhttp.send();
            }
        }
	    var dlugoscpostepu = 0;


	
        var wielkoscZegara = 0;
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
            
            xmlhttp.open("GET", "podpCheckWysp.php?q=" + 0, true);
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
            
            xmlhttp.open("GET", "podpCheckWysp.php?q=" + 1, true);
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
            
            xmlhttp.open("GET", "ukrCheckWysp.php?q=" + ukryj, true);
            xmlhttp.send();
			clearTimeout(ChowaniePodpowiedzi);
        }


        window.onbeforeunload = function(event)
        {
            if (turne==1){
                turne = 0; 
                timerOnOn()
            }
        };
        

        
  
        function postepplus(number){ //skrypt odpowiadajacy za zwiekszanie paska postępu 
            dlugoscpostepu +=100/15;
            var pop = document.getElementById('postep');
            pop.style.width = dlugoscpostepu + "%";
            pop.innerHTML = dlugoscpostepu.toFixed(1) + "%";
            document.getElementById(number).style="color:#ccc3a9";				
            document.getElementById(number).classList.remove('bg-light');
			document.getElementById(number).classList.add('bg-dark');
			var tytul = 'T'+number;
			document.getElementById(tytul).style="color:green";
        }
        function postepminus(number){ //skrypt odpowiadajacy za zmniejszanie paska postępu 
            dlugoscpostepu -=100/15;
            var pop = document.getElementById('postep');
            pop.style.width = dlugoscpostepu + "%";
            pop.innerHTML = dlugoscpostepu.toFixed(1) + "%";
            document.getElementById(number).style="color:black";				
			document.getElementById(number).classList.remove('bg-dark');
			document.getElementById(number).classList.add('bg-light');
			var tytul = 'T'+number;
			document.getElementById(tytul).style="color:red";
           // document.getElementById(W2).classList.remove('txtpodpowiedz');
        }



		var ChowaniePodpowiedzi;

        function podpowiedz(wyb){   
		    clearTimeout(ChowaniePodpowiedzi);
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
            xmlhttp.open("GET", "podpowiedzW.php?q=" + wyb, true);
            xmlhttp.send();  
            
        }

				
        function resetCele(){
	
			dlugoscpostepu = 0;
            
            document.getElementById('postep').style.width = dlugoscpostepu + "%";
            document.getElementById('postep').innerHTML = dlugoscpostepu + "%";
			$(".collapse").collapse('hide'); 								//- DO ZWIJANIA POZIOMÓW

			var i = 1;
			for (i=1;i<=15;i++){
				var krok = "zrobione"+i; 
				document.getElementById(krok).checked = false;
				    krok = "niezrobione"+i; 
				document.getElementById(krok).checked = true;
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
                <a href="wyspaekran.php" target="_blank"><center>Monitor wyspy</center> </a>
                </h1>
            </div>
        </div>
    </div>

<!-- progress bar -->
<div class="row"> 
        <div class="col-12">
            <div class="container-fluid box " >    
                <div class="progress">
                    <div class="progress-bar"  id="postep" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>
            </div>
        </div>
    </div>

<!-- lewy panel cały -->
    <div class="row">
        <div class="col-4">
            <div class="container-fluid box" style="text-align:center; font-size:2vw;">
            <button class="button button1" onclick="resetCele()" >Reset cele</button>
			Cele do zrobienia
			<button class="button button1"  data-toggle="tooltip" data-placement="top" title="Resetuje wszystkie ustawienia pokoju do 0" onclick="resetPokoj()">RESET</button>
                <div id="accordion">
                    <div class="card bg-light" id="1">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                            
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <span class="txtTytul" id="T1"> Ogólne/Kłoda</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione1" name="Pistolet" onchange="postepminus(1)">
                                        </label>
										</div> 
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione1" name="Pistolet" onchange="postepplus(1)">                                        
                                        </label>
										</div>                                    
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                W kłodzie jest kartka z 4 słowami klucz, aby powiesić haki na odpowiednich wysokościach                         
                                <br/>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(1)" data-toggle="tooltip" data-placement="top" title="Przeszukajcie dokładnie pokój, jakieś elementy mogą być ukryte naprawdę wszędzie">Ogólne</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(2)" data-toggle="tooltip" data-placement="top" title="Kod należy ustawić równo w zaznaczonym miejscu na kłódce a następnie za nią równomiernie pociągnąć">KŁÓDKI</button>  
									<button type="button" class="btn btn-primary" onclick="podpowiedz(3)" data-toggle="tooltip" data-placement="top" title="Zwróćcie uwagę na liście na linie która spadła, na kartach są wskazówki na jakich wysokościach powiesić haki, 4 słowa klucze">Haki i liście</button>
                                    <button type="button" class="btn btn-warning" onclick="podpowiedz(4)" data-toggle="tooltip" data-placement="top" title="[zdjęcie kłody]">Kłoda</button>
									<button type="button" class="btn btn-danger" onclick="podpowiedz(99)" data-toggle="tooltip" data-placement="top" title="NIC NA SIŁE">nic na siłe</button> 
								</div>
                            </div>
                        </div>
                    </div>


                    <div class="card bg-light" id="2">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span  class="txtTytul" id="T2"> Haki</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione2" name="Drzewo" onchange="postepminus(2)">
                                        </label>
										</div> 
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione2" name="Drzewo" onchange="postepplus(2)">                                        
                                        </label>
										</div>                                    
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                W kłodzie były hasła które wskazują na jakich wysokościach powiesić haki i otworzyć wrak statku  
                                </br>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example" >
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(5)" data-toggle="tooltip" data-placement="top" title="[zdjęcie haków]">Delikatna</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(6)" data-toggle="tooltip" data-placement="top" title="[zdjęcie haków z naniesionymi słowami]">Zwykła</button>
									<button type="button" class="btn btn-warning" onclick="podpowiedz(7)" data-toggle="tooltip" data-placement="top" title="Potrzebujecie 4 słowa klucze, aby powiesić odpowiednio haki">Słowna</button>
                                    <button type="button" class="btn btn-danger" onclick="podpowiedz(8)" data-toggle="tooltip" data-placement="top" title="Musicie powiesić haki na wysokościach słów KREW, POT, ŁZY i ŚMIERĆ tak jak na kartce ">0 IQ</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card bg-light" id="3">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="txtTytul" id="T3"> Pistolet</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione3" name="MagnesK" onchange="postepminus(3)">
                                        </label>
										</div> 
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione3" name="MagnesK" onchange="postepplus(3)">                                        
                                        </label>
										</div>                                    
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Pistolet jest ukryty przy palmie, trzeba go znaleźć i strzelić do kokosów
                                </br>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example" >
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(9)" data-toggle="tooltip" data-placement="top" title="W dzienniku jest napisane czego musicie użyć, poszukajcie tego.">Delikatna</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(10)" data-toggle="tooltip" data-placement="top" title="Palma">Zwykła</button>
                                    <button type="button" class="btn btn-danger" onclick="podpowiedz(11)" data-toggle="tooltip" data-placement="top" title="Przed strzałem musicie przeładować pistolet i chwilę odczekać">Odczekać przed strzałem</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="card bg-light"  id="4">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsehaki" aria-expanded="false" aria-controls="collapseThree">
                                <span class="txtTytul" id="T4"> Kokosy</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione4" name="haki" onchange="postepminus(4)">
                                        </label>
										</div> 
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione4" name="haki" onchange="postepplus(4)">                                        
                                        </label>
										</div>                                    
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapsehaki" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Trzeba strzlić z pistoletu do czerwonycch punktów kokosów, aby je otworzyć, wskażą one kod do lunety
                                </br>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(12)" data-toggle="tooltip" data-placement="top" title="Kokosy które wiszą">Delikatna</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(13)" data-toggle="tooltip" data-placement="top" title="Musicie strzelać do kokosów które wiszą">Zwykła</button>
                                    <button type="button" class="btn btn-danger" onclick="podpowiedz(14)" data-toggle="tooltip" data-placement="top" title="Po drugiej stronie są kokosy z podświetlonymi punktami do których musicie celować">0 IQ</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light" id="5">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFretka" aria-expanded="false" aria-controls="collapseThree">
                                <span class="txtTytul" id="T5">  Kamień</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione5" name="fretka" onchange="postepminus(5)">
                                        </label>
										</div> 
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione5" name="fretka" onchange="postepplus(5)">                                        
                                        </label>
										</div>                                    
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapseFretka" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Trzeba przekręcić kamień, spadnie lina na której jest kod do kija
                                </br>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(15)" data-toggle="tooltip" data-placement="top" title="To nie jest zwyczajna wyspa, tutaj nawet niektóre kamienie są wyjątkowe">Delikatna</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(16)" data-toggle="tooltip" data-placement="top" title="Zwróccie uwagę na muszle wokoło kamienia, układają się one w pewien znak">Zwykła</button>
                                    <button type="button" class="btn btn-warning" onclick="podpowiedz(17)" data-toggle="tooltip" data-placement="top" title="[zdjęcie kamienia]">Zdjęcie</button>
									<button type="button" class="btn btn-danger" onclick="podpowiedz(18)" data-toggle="tooltip" data-placement="top" title="Przekręćcie kamień">0 IQ</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light" id="6">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsePapuga" aria-expanded="false" aria-controls="collapseThree">
                                <span class="txtTytul" id="T6">  Liście i kij</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione6" name="ppg" onchange="postepminus(6)">
                                        </label>
										</div> 
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione6" name="ppg" onchange="postepplus(6)">                                        
                                        </label>
										</div>                                    
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapsePapuga" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Na liściach na linie która spadła jest kod do kija którym należy przyciągnąć skrzynie z drugiej części wyspy
                                </br>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(19)" data-toggle="tooltip" data-placement="top" title="Zwyczajne rzeczy nawet jak liście mogą ukrywać jakiś kod">Delikatna</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(20)" data-toggle="tooltip" data-placement="top" title="Zwróćcie uwagę na liście na linie która spadła">Zwykła</button>
                                    <button type="button" class="btn btn-warning" onclick="podpowiedz(21)" data-toggle="tooltip" data-placement="top" title="Na liściach jest kod 16347 do kija">0 IQ</button>
                                    <button type="button" class="btn btn-danger" onclick="podpowiedz(22)" data-toggle="tooltip" data-placement="top" title="Pociągnijcie za line z liśćmi i przyciągnijcie skrzynie z drugiej części wyspy">Pociągnijcie</button> 
                          </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light" id="7">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsePuzzle" aria-expanded="false" aria-controls="collapseThree">
                                <span class="txtTytul" id="T7"> Słońce</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione7" name="puzle" onchange="postepminus(7)">
                                        </label>
										</div> 
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione7" name="puzle" onchange="postepplus(7)">                                        
                                        </label>
										</div>                                    
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapsePuzzle" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Na słońcu jest kod który trzeba zobaczyć za pomocą lunety i otworzyć przyciągniętą skrzynie
                                </br>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(23)" data-toggle="tooltip" data-placement="top" title="Musicie spojrzećll w dal">Delikatna</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(24)" data-toggle="tooltip" data-placement="top" title="Urzyjcie lunety i spójrzcie na słońce">Zwykła</button>
                                    <button type="button" class="btn btn-danger" onclick="podpowiedz(25)" data-toggle="tooltip" data-placement="top" title="[zdjęcie słońca]">ZDJĘCIE</button>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card bg-light" id="8">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsepuz" aria-expanded="false" aria-controls="collapseThree">
                                <span class="txtTytul" id="T8"> Fretka</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione8" name="puz" onchange="postepminus(8)">
                                        </label>
										</div> 
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione8" name="puz" onchange="postepplus(8)">                                        
                                        </label>
										</div>                                    
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapsepuz" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Fretka ma klucz do ksiażki ze statku gdzie jest część mapy z liczbą 71
                                </br>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(26)" data-toggle="tooltip" data-placement="top" title="Przeszukajcie wrak statku">Delikatna</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(27)" data-toggle="tooltip" data-placement="top" title="[zdjęcie dziury z fretką">ZDJĘCIE</button>
                                    <button type="button" class="btn btn-danger" onclick="podpowiedz(28)" data-toggle="tooltip" data-placement="top" title="fretka z dziury ma kluczyk">0 IQ</button>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card bg-light" id="9">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsePuk" aria-expanded="false" aria-controls="collapseThree">
                                <span class="txtTytul" id="T9">   Skrzynka na magnes</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione9" name="Puk" onchange="postepminus(9)">
                                        </label>
										</div> 
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione9" name="Puk" onchange="postepplus(9)">                                        
                                        </label>
										</div>                                    
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapsePuk" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                W kokosie jest magnes do otwarcia skrzyni z częścią mapy z liczbą 5
                                </br>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(29)" data-toggle="tooltip" data-placement="top" title="Rzecz z kokosa pozwoli wam otworzyć pudełko">Delikatna</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(30)" data-toggle="tooltip" data-placement="top" title="Musicie postawić pudełko na ziemie i wtedy przyłożyć magnes">Pudełko na ziemie</button>
                                    <button type="button" class="btn btn-danger" onclick="podpowiedz(31)" data-toggle="tooltip" data-placement="top" title="Musicie stuknąć i przyłożyć magnes na kilka sekund do 4 nalepek N S W E na pudełku">0 IQ</button>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card bg-light" id="10">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsePuzzelki" aria-expanded="false" aria-controls="collapseThree">
                                <span class="txtTytul" id="T10"> Przejscie na druga strone (20min)</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione10" name="Puzzello" onchange="postepminus(10)">
                                        </label>
										</div> 
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione10" name="Puzzello" onchange="postepplus(10)">                                        
                                        </label>
										</div>                                    
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapsePuzzelki" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Po złożeniu 3 części mapy 52-5-71 wychodzi kod do przejścia
                                </br>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(32)" data-toggle="tooltip" data-placement="top" title="Musicie mieć 3 czeście mapy, aby przejść na drugą stronę">Delikatna</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(33)" data-toggle="tooltip" data-placement="top" title="Trzy części mapy łączą się w całość i tworzą kod do kłódki na dole od przejścia">Zwykła</button>
                                    <button type="button" class="btn btn-danger" onclick="podpowiedz(34)" data-toggle="tooltip" data-placement="top" title="3 częście mapy tworzą razem kod 52571 do kłódki na dole, aby przejść na drugą stronę">0 IQ (kod)</button>
                            </div>
                            </div>
                            
                        </div>
                    </div>
					
					
                    <div class="card bg-light" id="11">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsestukupuku" aria-expanded="false" aria-controls="collapseThree">
                                <span class="txtTytul" id="T11">  Papuga</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione11" name="Pukupuku" onchange="postepminus(11)">
                                        </label>
										</div> 
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione11" name="Pukupuku" onchange="postepplus(11)">                                        
                                        </label>
										</div>                                    
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapsestukupuku" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
							Papuga na parapecie ma klucz do dźwigni
                                </br>
                                <span class="txtpodpowiedz">Podpowiedź</span>
									<div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(35)" data-toggle="tooltip" data-placement="top" title="Przeszukajcie dokładnie wyspe, tutaj zwyczajne rzeczy i zwierzęta nie do końca muszą takie być">Delikatna</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(36)" data-toggle="tooltip" data-placement="top" title="Papuga może coś dla was mieć ">Zwykła</button>
                                    <button type="button" class="btn btn-danger" onclick="podpowiedz(37)" data-toggle="tooltip" data-placement="top" title="Papuga przy oknie ma klucz do dźwigni ">0 IQ</button>
                                </div>
                            </div>
                            </div>
                        
                    </div>
                    <div class="card bg-light" id="12">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsepapuga" aria-expanded="false" aria-controls="collapseThree">
                                <span class="txtTytul" id="T12"> Skrzynia na pukanie</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione12" name="Pukupapugu" onchange="postepminus(12)">
                                        </label>
										</div> 
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione12" name="Pukupapugu" onchange="postepplus(12)">                                        
                                        </label>
										</div>                                   
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapsepapuga" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Do otwarcia skrzyni trzeba wystukać odpowiedni kod
                                </br>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(38)" data-toggle="tooltip" data-placement="top" title="Do otwarcia skrzyni przyda wam się notatka pirata i tablica z wraku ">Delikatna</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(39)" data-toggle="tooltip" data-placement="top" title="Musicie pukać w odpowiedniej sekwencji morsa, którą poznacie z tablicy ">Zwykła</button>
                                    <button type="button" class="btn btn-warning" onclick="podpowiedz(40)" data-toggle="tooltip" data-placement="top" title="Pukać należy w znak na skrzyni, ">Pukać w znak</button>
                                    <button type="button" class="btn btn-danger" onclick="podpowiedz(41)" data-toggle="tooltip" data-placement="top" title="Kod to _ .. _ _ _ _ _   - 1 puknięcie, przerwa, 2 szybkie puknięcia, 5 wolnych puknięć">0 IQ(otworzyć jak będą pukać)</button> 
						        </div>	
                            </div>
                            
                        </div>
                    </div>
					
					
					
                    <div class="card bg-light" id="13">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapseThree">
                                <span class="txtTytul" id="T13"> Puzzle</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione13" name="Papu" onchange="postepminus(13)">
                                        </label>
										</div> 
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione13" name="Papu" onchange="postepplus(13)">                                        
                                        </label>
										</div>                                    
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapse13" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Papuga ma w głowie klucz do dźwigni
                                </br>
                                <span class="txtpodpowiedz">Podpowiedź</span>

							    <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(42)" data-toggle="tooltip" data-placement="top" title="Uzyjcie kompasu do otwracia pudełka">Uzyjcie kompasu</button>
								    <button type="button" class="btn btn-info" onclick="podpowiedz(43)" data-toggle="tooltip" data-placement="top" title="Na puzzlach obok czaszki znajduje się cyfra 7">cyfra 7</button>
                                    <button type="button" class="btn btn-danger" onclick="podpowiedz(44)" data-toggle="tooltip" data-placement="top" title="Na puzzlach znajdują się 4 białe cyfry, przypatrzcie się im uważnie">4 cyfry</button>

                            </div>	
                            </div>
                            
                        </div>
                    </div>
					
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->					
					   <div class="card bg-light" id="14">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapseThree">
                                <span class="txtTytul" id="T14"> Skrzynka z trójkątem</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione14" name="kropka14" onchange="postepminus(14)">
                                        </label>
										</div> 
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione14" name="kropka14" onchange="postepplus(14)">                                        
                                        </label>
										</div>                                    
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapse14" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">

								Za trzciną ukryta jest skrzynka którą trzeba włożyć do wzornika na ścianie
                                </br>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(45)" data-toggle="tooltip" data-placement="top" title="Przeszukajcie dokładnie drugą część wyspy">Drugą część</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(46)" data-toggle="tooltip" data-placement="top" title="Za trzciną">Za trzciną</button>
                                    <button type="button" class="btn btn-danger" onclick="podpowiedz(47)" data-toggle="tooltip" data-placement="top" title="Za trzciną, na ziemi obok miejsca skąd podnosiliście skrzynie ukryta jest część z kłódką">0 IQ</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
					
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->					
                    <div class="card bg-light" id="15">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapseThree">
                                <span class="txtTytul" id="T15"> Znaki ściana</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione15" name="kropka15" onchange="postepminus(15)">
                                        </label>
										</div> 
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione15" name="kropka15" onchange="postepplus(15)">                                        
                                        
										</label>
										</div>                                   
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapse15" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Trójkątna skrzynia podświetla znaki które po odczytaniu otwierają cryptex
                                </br>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(48)" data-toggle="tooltip" data-placement="top" title="Trójkątną skrzynie musicie włożyć w odpowiednie miejsce ">Delikatna</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(49)" data-toggle="tooltip" data-placement="top" title="Trójkątna skrzynia włożona w odpowiednie miejsce podświetla znaki na ścianie które musicie przetłumaczyć">Zwykła</button>
                                    <button type="button" class="btn btn-warning" onclick="podpowiedz(50)" data-toggle="tooltip" data-placement="top" title="Znaki na ścianie i litery na kartce z kulki są w takich samych pozycjach, rozwiązanie tworzy słowo klucz">0 IQ</button>
                                   <button type="button" class="btn btn-danger" onclick="podpowiedz(51)" data-toggle="tooltip" data-placement="top" title="[zdjęcie rozwiązania]">ROZWIĄZANIE</button>
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
                                <p><b>Kody wyspa:</b></p>    
                                <p><b>krew, pot, łzy, śmierć</b> – na kartke z kłody – słowa do powieszania haków na odpowiednich wysokościach</p>								
                                <p><b>7281</b> – z kokosów – otwiera wciskaną kłódkę od lunety</p>
                                <p><b>67582</b> – jest na słońcu – otwiera skrzynie którą przyciąga się linią</p>
                                <p><b>16347</b> – na liściach – otwiera kłódkę od kija</p>
                                <p><b>3712</b> – na puzzlach – otwiera kłódkę rowerową od skrzyni</p>
								<p><b>_ . . _ _ _ _ _</b> <b>(1 pukniecie, 2 szybkie, 5 wolnych)</b> - kod morsa z tablicy – po wystukaniu kodu otwiera się skrzynia 

                            </div>
                        </div>
                </div>             
            </div>
        </div>
	</div>

  

<!-- prawy panel cały -->

    <div class="col-8">
    <!-- ekran taki jak na wyspie -->
        <div class="container-fluid box" >
            <div class='xd'>
            <center>

            
         <!-- przyciski pomocnicze, zmiana czasu, zwiekszanie zegara, ukrywanie zegara -->                   
            <div class="form-group">
                <div id='zegarupdate'>
                                Zmiana czasu gry w sekundach
                    <input type="text" id="czs" name="czs">
                    <button type="button" class="btn btn-outline-primary" onclick="zegarekupdate()">Zatwierdz</button>
                    <button type="button" class="btn btn-success" id="wl" onclick="turne = 1; buttn(0);  timerOnOn()">Włącz timer</button>
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
                                <p id="demo"><h1>Wyspa Rozbitków</h1></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div id="zegarekek">
                                    <div id="czasomierz" style="font-size:100px; "></div>                               
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
                                <div id="ss" style="display: none; ">                              
                                    <div id="txtHint"  style="">tu wyswietlaja sie podpowiedzi</div>  
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
							
                            <!--    <button type="button" style="font-size:1vw;" class="btn btn-outline-danger" onclick="podpowiedz(-1)">Wyłącz zdjęcie</button>  -->
                            </div>
                         </th>
                    <!--    <th>Delay</th> -->
                    </tr>
                </thead>

                <tbody>
                    <?php
                        include_once("db_connect.php");
                        $sql_query = "SELECT ID, Zdjecie, Nazwa, delay FROM wyspa";
                        $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
                        while( $wyspa = mysqli_fetch_assoc($resultset) ) {
                        ?>
                        <tr id="<?php echo $wyspa ['ID']; ?>">
                        <td><?php echo $wyspa ['ID']; ?></td>
                        <td style="background:grey"><?php echo $wyspa ['Zdjecie']; ?></td>
                        <td><?php echo $wyspa ['Nazwa']; ?></td>
						
                      <!-- <td ><?php echo $wyspa ['delay']; ?></td> -->
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
