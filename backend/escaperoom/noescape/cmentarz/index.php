<html>
<!-- Główna strona do zarzadzania pokojem cmentarz -->
<head>
    <title>Cmentarz manager</title>
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
		.card-body .btn{
            font-size:1vw;
			color:black;
			font-weight:300;
        }
		.card .radio-green{
			font-size:1vw;
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

        $(document).ready(function () {
		if 	(startCzas == false){

			startCzas=true;
		}
        });


        var myVar = setInterval(fu, 1000); 
        var myZeg = setInterval(sprawdzG, 1000);

        var zmianaczasu=0;
        var turne = 0;
		var startCzas= false;			
		var co_ile=1;
        var opoznienie=co_ile*1000;

        

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
 		//window.setTimeout( timerOn, opoznienie);            
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
        
        function fu(str) { //skrypt do pobierania danych do głównego pola (obrazek i podpowiedz)
            document.getElementById('ss').style.display = "inline";
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "getdatacmentarzmanager.php?q=" + '1', true);
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
                } else { 
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("czasomierz").innerHTML = this.responseText;
                    }
                };
                if(turn == 1)
                {
                    xmlhttp.open("GET", "timerC.php", true);
                    xmlhttp.send();
                }
                else{
                    xmlhttp.open("GET", "timercmentarzmng.php", true);
                    xmlhttp.send();
                }
            }
        }

        function sprawdzG(){           
            document.getElementById('zega').style.display = "inline";
           
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else { 
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
        
        
        function zegarekupdate(str){ //skrypt do zmiany czasu na dowolna wartosc sekundowo
            var czs = document.getElementById('czs').value;
            if (str == "") {
                document.getElementById("czasomierz").innerHTML = "";
                return;
            } else {
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else { 
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("czasomierz").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "timerCupdate.php?q=" + czs, true);
                xmlhttp.send();
            }
        }
        

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
            { 
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            
            xmlhttp.open("GET", "podpCheckCmen.php?q=" + 0, true);
            xmlhttp.send();

        }
		function zwiekszZegar(){ //skrypt zmieniajacy wartosc wielkosci zegara, dzieki czemu na monitorze w pokoju wyswietla sie albo wielki albo zwykly
            if (window.XMLHttpRequest) 
            {
                xmlhttp = new XMLHttpRequest();
            } 
            else 
            { 
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            
            xmlhttp.open("GET", "podpCheckCmen.php?q=" + 1, true);
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
            { 
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            
            xmlhttp.open("GET", "ukrCheckCmen.php?q=" + ukryj, true);
            xmlhttp.send();
			clearTimeout(ChowaniePodpowiedzi);
        }


        var dlugoscpostepu = 0;
        function postepplus(number){ //skrypt odpowiadajacy za zwiekszanie paska postępu 
            dlugoscpostepu +=100/13;
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




        


        window.onbeforeunload = function(event)
        {
            if (turne==1){
                turne = 0; 
                timerOnOn()
            }
        };
		
		var ChowaniePodpowiedzi;		
        function podpowiedz(wyb){ 
		    if (wyb>0) {				
				zmniejszZegar();
				if (document.getElementById("AutoHidePodpowiedzi").checked == true)	ChowaniePodpowiedzi = setTimeout(zwiekszZegar, 120000); 				
			}				
            if (window.XMLHttpRequest) 
            {
                xmlhttp = new XMLHttpRequest();
            } 
            else 
            { 
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.open("GET", "podpowiedzC.php?q=" + wyb, true);
            xmlhttp.send();
            
        }
        function resetCele(){
	
			dlugoscpostepu = 0;
            
            document.getElementById('postep').style.width = dlugoscpostepu + "%";
            document.getElementById('postep').innerHTML = dlugoscpostepu + "%";
			$(".collapse").collapse('hide'); 							
         
			var i = 1;
			for (i=1;i<=13;i++){
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
                <h1 >
                    <a href="cmentarzekran.php" target="_blank"><center>Monitor cmentarza</center> </a>
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
            <button class="button button1" onclick="resetCele()" >Reset cele</button>
            Cele do zrobienia
			<button class="button button1"  data-toggle="tooltip" data-placement="top" title="Resetuje wszystkie ustawienia pokoju do 0" onclick="resetPokoj()">RESET</button>
                <div id="accordion">
                    <div class="card bg-light" id="1">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <span class="txtTytul" id="T1"> Ogólne/dziennik</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
                                         <label>   <span>Nie Zrobione  &nbsp;</span>
                                             <input type="radio" class="form-check-input" checked id="niezrobione1" name="swiatlo" onchange="postepminus(1)">
                                        </label>
										</div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
                                         <label><span>Zrobione&nbsp;</span>
                                        <input type="radio" class="form-check-input" id="zrobione1" name="swiatlo" onchange="postepplus(1)">                                    
                                        </label>
										</div>                                   
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Muszą na początku dokładnie przeszukać pokój, dziennik jest ukryty pod pająkiem
                                </br>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(1)" data-toggle="tooltip" data-placement="top" title="Przeszukajcie dokładnie pokój, jakieś elementy moga być ukryte naprawdę wszędzie">Przeszukajcie</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(2)" data-toggle="tooltip" data-placement="top" title="Kod należy wprowadzić równo i dokładnie w zaznaczonym miejcu przez kreske, następnie należy pociągnąć za kłódke">Kłódki</button>
                                    <button type="button" class="btn btn-primary" onclick="podpowiedz(3)" data-toggle="tooltip" data-placement="top" title="Przeszukajcie dokładnie pokój, sprawdzcie nawet pajęczyny">Dziennik</button>
						            <button type="button" class="btn btn-warning" onclick="podpowiedz(9)" data-toggle="tooltip" data-placement="top" title="NIC NA SIŁE">SIŁA</button>
                                    <button type="button" class="btn btn-danger" onclick="podpowiedz(99)" data-toggle="tooltip" data-placement="top" title="Trumna jest zamknięta na zamki, musicie zdobyć odpowiedni element, aby ją otworzyć - prosimy jej nie otwierać na siłe">siła trumna</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card bg-light" id="2">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="txtTytul" id="T2">  Zgasić światło -> środkowa trumna</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione2" name="pojemnik" onchange="postepminus(2)">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione2" name="pojemnik" onchange="postepplus(2)">                                        
                                        </label>
										</div>                                   
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                Po zgaszeniu światła ukaże się kod do środkowej trumny
                                </br>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(4)" data-toggle="tooltip" data-placement="top" title="[zdjęcie]">Zdjęcie</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(5)" data-toggle="tooltip" data-placement="top" title="Czasem w ciemności widać więcej">Delikatna</button>
                                    <button type="button" class="btn btn-warning" onclick="podpowiedz(6)" data-toggle="tooltip" data-placement="top" title="Musicie uzyskać ciemność, pozbyć się światła">Zwykła</button>
                                    <button type="button" class="btn btn-danger" onclick="podpowiedz(7)" data-toggle="tooltip" data-placement="top" title="Zgaście światło">0 IQ</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card bg-light" id="3">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="txtTytul" id="T3">  Obrotowa półka -> klucz do dziennika</span>
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
                                Na ścianie wisi półka otwierana kościaną ręką (przez przekręcenie), w środku jest klucz do dziennika
                                </br>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(8)" data-toggle="tooltip" data-placement="top" title="[zdjęcie]">Zdjęcie</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(9)" data-toggle="tooltip" data-placement="top" title="Kości na półce układają się w strzałki, sugerują co trzeba zrobić">0 IQ</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-light" id="4">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsekrew" aria-expanded="false" aria-controls="collapseThree">
                                <span class="txtTytul" id="T4">  Magnes -> 3 trumna</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
										
	                                          <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione4" name="krew" onchange="postepminus(4)">
                                        </label>
										</div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione4" name="krew" onchange="postepplus(4)">                                        
                                        </label>
										</div>                                   
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapsekrew" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                W środkowej trumnie jest magnes który służy do otwarcia trzeciej trumny (kod ALEX) (po niej wylatuje zjawa)
                                </br>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(10)" data-toggle="tooltip" data-placement="top" title="[zdjęcie]">Zdjęcie</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(11)" data-toggle="tooltip" data-placement="top" title="Zdjęcie z pentagramem">Pentagram</button>
                                    <button type="button" class="btn btn-warning" onclick="podpowiedz(12)" data-toggle="tooltip" data-placement="top" title="Użyjcie magnesu z pentagramem, aby wskazał wam odpowiednie litery na nagrobku które tworzą imie">0 IQ</button>
                                    <button type="button" class="btn btn-danger" onclick="podpowiedz(13)" data-toggle="tooltip" data-placement="top" title="Kod należy wprowadzić dokładnie na spodzie kłódki, prawidłowe imie a następnie pociągnąć za kłódke">Kłódka</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light" id="5">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsedrzewo" aria-expanded="false" aria-controls="collapseThree">
                                <span class="txtTytul" id="T5"> Kielich -> garnek</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione5" name="drzewo" onchange="postepminus(5)">
                                        </label>
										</div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione5" name="drzewo" onchange="postepplus(5)">                                        
                                        </label>
										</div>                                  
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapsedrzewo" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                W 3 trumnie jest kielich, w sordku jest krew i po wlaniu do garnka (przepis z dziennika), w garnku swieci sie napis z kodem do skrzynki z drzewa
                                </br>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(14)" data-toggle="tooltip" data-placement="top" title="Zależy wam na prawdzie, smak i przyprawy nie sa dla was tak istotne w eliksirze">Delikatna</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(15)" data-toggle="tooltip" data-placement="top" title="Stwórzcie eliksir prawdy, pamiętajcie, że na dnie kociołka była przyklejona kartka">Zwykła</button>
                                    <button type="button" class="btn btn-danger" onclick="podpowiedz(16)" data-toggle="tooltip" data-placement="top" title="Musicie wlać krew z kielicha do kotła (była tam kartka)">0 IQ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light" id="6">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsewaga" aria-expanded="false" aria-controls="collapseThree">
                                <span class="txtTytul" id="T6">  Drzewoskrzynia</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione6" name="waga" onchange="postepminus(6)">
                                        </label>
										</div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione6" name="waga" onchange="postepplus(6)">                                        
                                        </label>
										</div>                                  
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapsewaga" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                W drzewie ukryta jest skrzynia, do ktorej kod jest w garnku (na kartce po wlaniu krwi), w środku są metalowe pręciki do otwarcia szafy wg wzoru który wyświetla zjawa
                                <br/>
                                <span class="txtpodpowiedz">Podpowiedź</span>                                
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(17)" data-toggle="tooltip" data-placement="top" title="Przeszukajcie dobrze pokój, coś jest gdzieś ukryte ">Delikatna</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(18)" data-toggle="tooltip" data-placement="top" title="Drzewa skrywają wiele tajemnic i zaginionych rzeczy ">Zwykła</button>
                                    <button type="button" class="btn btn-danger" onclick="podpowiedz(19)" data-toggle="tooltip" data-placement="top" title="W drzewie jest skrzynia, do której kod macie w garnku ">0 iq</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light" id="7">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseszafa" aria-expanded="false" aria-controls="collapseThree">
                                <span class="txtTytul" id="T7"> Waga -> 1 trumna</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione7" name="szafa" onchange="postepminus(7)">
                                        </label>
										</div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione7" name="szafa" onchange="postepplus(7)">                                        
                                        </label>
										</div>                                  
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapseszafa" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                               Na parapecie jest waga, po zważeniu żaby, głowy, buta i szczura, powstaje kod do 1 trumny
                                <br/>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(20)" data-toggle="tooltip" data-placement="top" title="Przeczytajcie dokładnie pamiętnik młodej wiedźmy">Delikatna</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(21)" data-toggle="tooltip" data-placement="top" title="Słoik z głową, na wadze są wycieńcia tak, aby się na niej zmieściła">Głowa</button>
									<button type="button" class="btn btn-primary" onclick="podpowiedz(22)" data-toggle="tooltip" data-placement="top" title="[zdjęcie]">Noga</button>									
									<button type="button" class="btn btn-secondary" onclick="podpowiedz(23)" data-toggle="tooltip" data-placement="top" title="[zdjęcie]">Lampion</button>	
                                    <button type="button" class="btn btn-warning" onclick="podpowiedz(24)" data-toggle="tooltip" data-placement="top" title="Musicie zważyć żabe, lampion, głowe człowieka w słoiku i nogę w bucie">Zważcie</button>
								    <button type="button" class="btn btn-danger" onclick="podpowiedz(25)" data-toggle="tooltip" data-placement="top" title="Żabe = 7 Lampion = 5 Głowa = 1 Noga = 3">Rozwiązanie</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light" id="8">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsereka" aria-expanded="false" aria-controls="collapseThree">
                                <span class="txtTytul" id="T8">   Zjawa i szafka</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione8" name="reka" onchange="postepminus(8)">
                                        </label>
										</div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione8" name="reka" onchange="postepplus(8)">                                        
                                        </label>
										</div>                                  
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapsereka" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Zjawa która wyleciała ma UV, podświetla znak na ścianie, wykorzystując metalowe patyczki należy ustawić taki znak na szafce.
                                <br/>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(26)" data-toggle="tooltip" data-placement="top" title="Zjawa która wyleciała ma UV, wykorzystajcie to, spróbujcie odkryć co może wam pokazać">Zjawa</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(27)" data-toggle="tooltip" data-placement="top" title="Zjawa ma UV, możecie odkryć znak na ścianie">Zjawa ściana</button>
                                    <button type="button" class="btn btn-warning" onclick="podpowiedz(28)" data-toggle="tooltip" data-placement="top" title="Wszystkie elementy muszą się bardzo dokładnie stykać">Patyczki</button>
                                    <button type="button" class="btn btn-danger" onclick="podpowiedz(29)" data-toggle="tooltip" data-placement="top" title="[zdjęcie]">Zdjęcie</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light" id="9">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseksiazka" aria-expanded="false" aria-controls="collapseThree">
                                <span class="txtTytul" id="T9">    Serce</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione9" name="ksiazka" onchange="postepminus(9)">
                                        </label>
										</div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione9" name="ksiazka" onchange="postepplus(9)">                                        
                                        </label>
										</div>                                   
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapseksiazka" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                               Serce z szafki trzeba przyłożyć do nagrobka Malcolma(M do  M) wtedy odpala się "przepowiednia", aby dotknąć śmierć i śłońce.
                                <br/>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(30)" data-toggle="tooltip" data-placement="top" title="Sprawdźcie serce">Delikatna</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(31)" data-toggle="tooltip" data-placement="top" title="Serce ma na sobie literę, która symbolizuje nagrobek">Zwykła</button>
                                    <button type="button" class="btn btn-danger" onclick="podpowiedz(32)" data-toggle="tooltip" data-placement="top" title="M jak Malcolm">M jak Malcolm</button>
									<button type="button" class="btn btn-danger" onclick="podpowiedz(33)" data-toggle="tooltip" data-placement="top" title="Po przyłożeniu serca do M Malcolm powiedział wam przepowiednie">Już powiedział</button>
                                </div>
                            </div>
                        </div>
                    </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>					
					
					
                    <div class="card bg-light" id="13">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapseThree">
                                <span class="txtTytul" id="T13"> Gargulec</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                           <input type="radio" class="form-check-input" checked id="niezrobione11" name="kropka13" onchange="postepminus(13)">
                                        </label>
										</div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione13" name="kropka13" onchange="postepplus(13)">                                        
                                        </label>
										</div>                                   
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapse13" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Obok szafki jest gargulec z otwieraną głową, w szafce jest kluczyk do niego - po przekręceniu pozwala powtórzyć przepowiednie o słońcu i śmierci
                                <br/>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(46)" data-toggle="tooltip" data-placement="top" title="[zdjęcie]">Zdjęcie</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(47)" data-toggle="tooltip" data-placement="top" title="W szafce jest ukryty kluczyk">Kluczyk</button>
                                    <button type="button" class="btn btn-danger" onclick="podpowiedz(48)" data-toggle="tooltip" data-placement="top" title="Jeżeli znajdziecie kluczyk z szafki głowa gargulca pozwali powtórzyć wam przepowiednie o słońcu i śmierci">0 IQ</button>
                                </div>
                            </div>
                        </div>
                    </div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>					

                    <div class="card bg-light" id="10">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseslonce" aria-expanded="false" aria-controls="collapseThree">
                                <span class="txtTytul" id="T10"> Śmierć i Słońce</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione10" name="slonce" onchange="postepminus(10)">
                                        </label>
										</div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione10" name="slonce" onchange="postepplus(10)">                                        
                                        </label>
										</div>                                   
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapseslonce" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Trzeba przylozyc rece do słońca i śmirci na dwóch ścianach, następnie ręka wyrzuca klucz do kłódki od szuflady.
                                <br/>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(35)" data-toggle="tooltip" data-placement="top" title="Zwróćcie uwagę na ściany">Delikatna</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(36)" data-toggle="tooltip" data-placement="top" title="Słońce i śmierć mogą połączyć tylko osoby w których żyłach płynie czerwony płyn">Zwykła</button>
                                    <button type="button" class="btn btn-warning" onclick="podpowiedz(37)" data-toggle="tooltip" data-placement="top" title="Musicie znaleźć na ścianach słońce i śmierć i je przytrzymać">Mocna</button>
                                    <button type="button" class="btn btn-danger" onclick="podpowiedz(38)" data-toggle="tooltip" data-placement="top" title="Dotyk musi być wytrwały">Wytrwali</button>
                                </div>
                            </div>
                        </div>
                    </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>					
					
					
                    <div class="card bg-light" id="11">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsekuferek" aria-expanded="false" aria-controls="collapseThree">
                                <span class="txtTytul" id="T11">    Kuferek</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                           <input type="radio" class="form-check-input" checked id="niezrobione11" name="kuferek" onchange="postepminus(11)">
                                        </label>
										</div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione11" name="kuferek" onchange="postepplus(11)">                                        
                                        </label>
										</div>                                   
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapsekuferek" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Po uzyciu klucza do otwarcia szuflady maja ksiazke, ktora nalezy otworzyc na logike, w środku jest palec ktory otwiera trumne
                                <br/>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(39)" data-toggle="tooltip" data-placement="top" title="Wszystko czego potrzebujecie znajduje się w kuferku">Delikatna</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(40)" data-toggle="tooltip" data-placement="top" title="[zdjęcie]">Zdjęcie</button>
                                    <button type="button" class="btn btn-warning" onclick="podpowiedz(41)" data-toggle="tooltip" data-placement="top" title="Dolna częśc kuferka przesuwa się do tyłu">Dolna część</button>
                                    <button type="button" class="btn btn-danger" onclick="podpowiedz(42)" data-toggle="tooltip" data-placement="top" title="W elemencie który trzeba wyciągnąć z kuferka ukrywa się kluczyk">Kluczyk</button>
                                </div>
                            </div>
                        </div>
                    </div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>					
					
					
					               <div class="card bg-light" id="12">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsetrumna" aria-expanded="false" aria-controls="collapseThree">
                                <span class="txtTytul" id="T12">    Trumna</span>
                                </button>
                                <div class ="row">
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Nie Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" checked id="niezrobione12" name="trumna" onchange="postepminus(12)">
                                        </label>
										</div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check radio-green">
										<label>
                                            <span>Zrobione  &nbsp;</span>
                                            <input type="radio" class="form-check-input" id="zrobione12" name="trumna" onchange="postepplus(12)">                                        
                                        
										</label>
										</div>                                   
                                    </div>                             
                                </div>
                            </h5>
                        </div>
                        <div id="collapsetrumna" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Po otwarciu trumny nalezy wepchnac kołek w cialo wampira i wyleci klucz, koniec.
                                <br/>
                                <span class="txtpodpowiedz">Podpowiedź</span>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success" onclick="podpowiedz(43)" data-toggle="tooltip" data-placement="top" title="Przyłóżcie palec, podnieście i otwórzcie wieko trumny">Podnieście wieko</button>
                                    <button type="button" class="btn btn-info" onclick="podpowiedz(44)" data-toggle="tooltip" data-placement="top" title="Kołek">Kołek</button>
                                    <button type="button" class="btn btn-danger" onclick="podpowiedz(45)" data-toggle="tooltip" data-placement="top" title="Musicie wbić kołem w dracule, jest tam specjalne miejsce">0 IQ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        
        
            <div class="container-fluid box" style="text-align:center;">
            Help
                <div id="accordion">
                    <div class="card" >
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#pomoc" aria-expanded="false" aria-controls="collapseOne">
                                    POMOC
                                </button>
                                
                            </h5>
                        </div>
                        <div id="pomoc" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <p><b>Kody cmentarz:</b></p>                               
                                <p><b>1476</b> – po zgaszeniu światła – otwiera środkowy nagrobek</p>
                                <p><b>ALEX</b> – po przyłożeniu magnesu na nagrobek – otwiera 3 nagrobek</p>
                                <p><b>7513</b> – po zważaniu żaby, lampionu, głowy i nogi – otwiera 1 nagrobek</p>
								<p><b>27102</b> – po zalaniu kartki w kociołku krwią – otwiera skrzynkę z metalowymi patyczkami do szafki</p>

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
                                <p id="demo"><h1>Nawiedzony Cmentarz</h1></p>
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
                    <!--    <th>Delay</th>-->
                    </tr>
                </thead>

                <tbody>
                    <?php
                        include_once("db_connect.php");
                        $sql_query = "SELECT ID, Zdjecie, Nazwa, delay FROM cmentarz";
                        $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
                        while( $cmentarz = mysqli_fetch_assoc($resultset) ) {
                        ?>
                        <tr id="<?php echo $cmentarz ['ID']; ?>">
                        <td><?php echo $cmentarz ['ID']; ?></td>
                        <td style="background:grey"><?php echo $cmentarz ['Zdjecie']; ?></td>
                        <td><?php echo $cmentarz ['Nazwa']; ?></td>
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
