<?php
    $wyborpodpowiedzi = intval($_GET['q']);
    include_once("db_connect.php");
    $podpowiedz = '';
    $zdjecie = 'kosmos.jpg';
    if ($wyborpodpowiedzi == 0){
        $podpowiedz = ' ';
		$zdjecie = ' ';

	
       // 
    }
    else if ($wyborpodpowiedzi == -1){
        $podpowiedz = 'POWODZENIA!';
        $zdjecie = 'kosmos.jpg ';
    }
    else if ($wyborpodpowiedzi == 1){
        $podpowiedz = 'Postarajcie się utrzymać stabilny lot statkiem';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 2){
        $podpowiedz = 'Musicie balansować kulką żeby była nieruchomo';
        $zdjecie = ' ';		
    }
    else if ($wyborpodpowiedzi == 3){
        $podpowiedz = 'Musicie balansować kulką i na ścianie wyświetlą się strzałki, które tworzą kod do kłódki.';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 4){
        $podpowiedz = 'Po zbalansowaniu kłódki pojawiają sie strzałki ';
		$zdjecie = 'K4.jpg '; //zdjecie
    }
    else if ($wyborpodpowiedzi == 5){
        $podpowiedz = 'Przeszukajcie dokładnie pokój i wszystkie jego zakamarki';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 6){
        $podpowiedz = 'Poszukajcie w rogach pokoju';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 7){
        $podpowiedz = 'Samochodzik solarny';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 8){
        $podpowiedz = 'Zwróćcie uwagę, że latarka ma pare trybów świecenia';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 9){
        $podpowiedz = 'Sprawdźcie karte';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 10){
        $podpowiedz = 'Musicie nacisąć na tablecie na następnie powiedzieć głośno i wyraźnie hasło';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 11){
        $podpowiedz = 'Naciśnijcie na tablecie';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 12){
        $podpowiedz = 'Musicie nacinąć na tablecie przycisk "Analiza uszkodzeń"';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 13){
        $podpowiedz = 'Sprawdzcie czy macie wszystko dobrze ustawione';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 14){
        $podpowiedz = 'Wszystkie przełączniki muszą być ustawione w odpowiednich pozycjach';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 15){
        $podpowiedz = 'Radar wykrywa';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 16){
        $podpowiedz = 'Radar wykrywa osoby';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 17){
        $podpowiedz = 'Musicie się ukryć tak, aby radar was nie wykrył';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 18){
        $podpowiedz = 'R2D2 może wam coś pokazać';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 19){
        $podpowiedz = 'R2D2 ma wbudowany projektor';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 20){
        $podpowiedz = 'Musicie ustawić odpowiednio przełączniki';
		$zdjecie = 'K20.jpg '; //zdjecie
    }
    else if ($wyborpodpowiedzi == 21){
        $podpowiedz = 'Przeszukajcie dokładnie szafe i kombinezon';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 22){
        $podpowiedz = 'Przeszukajcie dokładnie kombinezon i buty';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 23){
        $podpowiedz = 'W kasku możecie zobaczyć więcej';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 24){
        $podpowiedz = 'Musicie wymienić uszkodzoną płytkę';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 25){
        $podpowiedz = 'W laboratorium jest instrukcja jak stworzyć hiperpaliwo ';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 26){
        $podpowiedz = 'Musicie stworzyć paliwo według instrukcji widocznej od boku laboratorium, wlejcie je potem do odpowiednich zbiorników.';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 27){
        $podpowiedz = 'Musicie ustawić odpowiednio planety na konsoli, jest tam specjalne miejsce, aby to zrobić';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 28){
        $podpowiedz = 'W kasku możecie zobaczyć więcej';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 29){
        $podpowiedz = 'Przeszukajcie laboratorium i skrzynkę z jej przewodami ';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 30){
        $podpowiedz = 'Przeszukajcie szafe, rękawice, tam gdzie leżał kask';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 31){
        $podpowiedz = 'Musicie ustawić 6 planet w pozycjach tak jak je widać przez buleje';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 32){
        $podpowiedz = 'Musicie odpowiednio ustawić współrzędne na globusie';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 33){
        $podpowiedz = 'Jedną współrzędną ma R2D2 a druga jest w laboratorium ustawcie dobrze globus';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 34){
        $podpowiedz = 'Poprawny cel znajduje sie na północy i zachodzie: 5N 75W';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 35){
        $podpowiedz = 'Musicie ustawić na globusie kraj: Kolumbia';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 36){
        $podpowiedz = 'Po której stronie wspinać się po drabinie jest pokazane na zdjęciu';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 37){
        $podpowiedz = 'Musicie otworzyć drewniane pudełko z generatora';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 38){
        $podpowiedz = 'Musicie pociągnąć za odpowiednie krawędzie pudełka, aby je otworzyć';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 39){
        $podpowiedz = ' ';
		$zdjecie = ' K39.jpg';  //zdjecie
    }
    else if ($wyborpodpowiedzi == 40){
        $podpowiedz = 'Musicie naładować jądro generatora';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 41){
        $podpowiedz = 'Jądro należy przyłożyć do tego samego znaku w pokoju co ma z tyłu, aby je naładować';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 42){
        $podpowiedz = 'Naładowane jądro musi zasilić generator, aby uruchomić statek';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 43){
        $podpowiedz = 'Musicie włożyć naładowane jądro z powrotem do generatora';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 44){
        $podpowiedz = 'Odsuncie panel z pod ściany i rozwiażcie zagadkę';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 45){
        $podpowiedz = 'Wykonajcie dokładnie obliczenia, równania zawierają pewne haczyki które mogą wam to ułątwić';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 46){
        $podpowiedz = 'Rozwiązanie: A=3 B=38 C=30';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 47){
        $podpowiedz = 'Jeżeli naciśniecie "HELP" mogę';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 48){
        $podpowiedz = 'W skrzynce narzędziowej były zegarki, mogą wam się przydać';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 49){
        $podpowiedz = 'Użyjcie opasek w odpowiednich miejscach, żeby dezaktywować lasery ';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 50){
        $podpowiedz = 'Musicie przyłożyć jednocześnie opaski w dobrych miejscach by wyłączyć lasery, jedna osoba na poczatku przy układzie zasilania a druga wyłącza każdy po kolei';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 51){
        $podpowiedz = 'Odpowiedzi do listy kontrolnej znajdziecie w pierwszej części statku, poszukajcie dokładnie';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 52){
        $podpowiedz = 'Szukajcie wszędzie, generatora szukajcie u góry, prawidłowy zakres ciśnienia zaznaczony jest na zielono';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 53){
        $podpowiedz = 'Lista kontrolna odp góra'; //dopisac
		$zdjecie = 'K53.jpg ';
    }
    else if ($wyborpodpowiedzi == 54){
        $podpowiedz = 'Lista kontrolna odp dół';  //dopisac
		$zdjecie = 'K54.jpg';
    }
    else if ($wyborpodpowiedzi == 55){
        $podpowiedz = 'Czerwony punkt na ścianie określa początek';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 56){
        $podpowiedz = 'Musicie współpracowac i przejść razem labirynt';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 57){
        $podpowiedz = 'Musicie przekazywać sobie kierunki i za pomocą magnesu wyciągnąć kluczyk z labiryntu';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 58){
        $podpowiedz = 'Instrukcje do panelu przydadzą się gdy aktywujecie panel';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 59){
        $podpowiedz = 'Do aktywacji panelu musicie mieć klucz z labiryntu';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 60){
        $podpowiedz = 'Musicie aktywować konsole i rozwiązać 3 zagadki na czas ';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 61){
        $podpowiedz = 'Poruszajcie się tylko w niebieski kierunek';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 62){
        $podpowiedz = 'Musicie trafiac w odpowiednie kierunki (podświetlane na niebiesko) i strzelać w dobrym momencie ';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 63){
        $podpowiedz = 'Musicie poruszać joystickiem tylko gdy są niebieskie strzałki, błędy spowalniają zjazd skrzyni na dół';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 64){
        $podpowiedz = 'Musicie podłączyć zasilanie w ten sposób, aby paliła się zielona dioda przy robocie';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 65){
        $podpowiedz = 'Jeżeli macie problem z ruchami robota sprawdźcie czy macie dobrze dopchnięta wtyczke od pilota';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 66){
        $podpowiedz = 'Musicie wyjąć jajko z komory, za pomocą robota, wykorzystajcie pełen zakres ruchów';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 67){
        $podpowiedz = 'Musicie przeciąć odpowiednie kable, macie na to ograniczony czas';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 68){
        $podpowiedz = 'Przetnijcie 2 kable, niebieski i brązowy z prawej strony';
		$zdjecie = ' ';
	}		
    else if ($wyborpodpowiedzi == 69){
        $podpowiedz = 'Sprawdźcie sobie wszystkie dźwięki a następnie powtórzcie odpowiednią sekwencje';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 70){
        $podpowiedz = 'Sejf z drugiej cześci statku';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 71){
        $podpowiedz = 'Przed wspisaniem kodu musicie nacisnąć przycisk "ZUGRIFF"';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 72){
        $podpowiedz = 'Sprawdźcie czy czasami nie wyjeliście baterii umieszczonych z prawej strony pod taśmą';
		$zdjecie = ' ';
    }
	
	
    else{
        $podpowiedź = '';
    }



    $field = '';
    $field2 = '';

    if($podpowiedz == -4){
        $field2.= "Zdjecie='".$zdjecie."'";
        $sql2 = "UPDATE kosmos SET $field2 WHERE ID=1";
        mysqli_query($conn, $sql2) or die("database error:". mysqli_error($conn));   

    }
    else{
        $field.= "Nazwa='".$podpowiedz."'";
        $sql = "UPDATE kosmos SET $field WHERE ID=1";
        mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
    
        $field2.= "Zdjecie='".$zdjecie."'";
        $sql2 = "UPDATE kosmos SET $field2 WHERE ID=1";
        mysqli_query($conn, $sql2) or die("database error:". mysqli_error($conn));   
    }



     
?>    