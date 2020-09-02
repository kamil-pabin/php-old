<?php
    $wyborpodpowiedzi = intval($_GET['q']);
    include_once("db_connect.php");
    $podpowiedz = '';
    $zdjecie = 'bg.jpg';
    if ($wyborpodpowiedzi == 0){
        $podpowiedz = ' ';
        $zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == -1){
        $podpowiedz = 'POWODZENIA!';
        $zdjecie = 'bg.jpg';
    }
    else if ($wyborpodpowiedzi == 1){
        $podpowiedz = 'Przeszukajcie dokładnie pokój, jakieś elementy mogą być ukryte naprawdę wszędzie';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 2){
        $podpowiedz = 'Kod należy ustawić równo w zaznaczonym miejscu na kłódce a następnie za nią równomiernie pociągnąć';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 3){
        $podpowiedz = 'Zwróćcie uwagę na liście na linie która spadła <br> Na kartach są wskazówki na jakich wysokościach powiesić haki - 4 słowa klucze';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 4){
        $podpowiedz = ' ';
		$zdjecie = 'W4.jpg ';
    }
    else if ($wyborpodpowiedzi == 5){
        $podpowiedz = ' ';
		$zdjecie = 'W5.jpg';
    }
    else if ($wyborpodpowiedzi == 6){
        $podpowiedz = ' ';
		$zdjecie = 'W6.jpg';
    }
    else if ($wyborpodpowiedzi == 7){
        $podpowiedz = 'Potrzebujecie 4 słowa klucze, aby powiesić odpowiednio haki';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 8){
        $podpowiedz = 'Musicie powiesić haki na wysokościach słów KREW, POT, ŁZY i ŚMIERĆ tak jak na kartce ';
 		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 9){
        $podpowiedz = 'W dzienniku jest napisane czego musicie użyć, poszukajcie tego.';
 		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 10){
        $podpowiedz = 'Palma';       
  		$zdjecie = ' ';  
	}
    else if ($wyborpodpowiedzi == 11){
        $podpowiedz = 'Przed strzałem musicie przeładować pistolet i chwilę odczekać"';
 		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 12){
        $podpowiedz = 'Kokosy które wiszą';
 		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 13){
        $podpowiedz = 'Musicie strzelać do kokosów które wiszą';
 		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 14){
        $podpowiedz = 'Po drugiej stronie są kokosy z podświetlonymi punktami do których musicie celować';
 		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 15){
        $podpowiedz = 'To nie jest zwyczajna wyspa, tutaj nawet niektóre kamienie są wyjątkowe';
  		$zdjecie = ' ';  
	}
    else if ($wyborpodpowiedzi == 16){
        $podpowiedz = 'Zwróccie uwagę na muszle wokoło kamienia, układają się one w pewien znak';
  		$zdjecie = ' ';  
	}
    else if ($wyborpodpowiedzi == 17){
        $podpowiedz = ' ';
 		$zdjecie = 'W17.jpg ';   
	}
    else if ($wyborpodpowiedzi == 18){
        $podpowiedz = 'Przekręćcie kamień';
   		$zdjecie = ' '; 
	}
    else if ($wyborpodpowiedzi == 19){
        $podpowiedz = 'Zwyczajne rzeczy nawet jak liście mogą ukrywać jakiś kod';
   		$zdjecie = ' '; 
	}
    else if ($wyborpodpowiedzi == 20){
        $podpowiedz = 'Zwróćcie uwagę na liście na linie która spadła';
  		$zdjecie = ' ';  
	}
    else if ($wyborpodpowiedzi == 21){
        $podpowiedz = 'Na liściach jest kod 16347 do kija';
  		$zdjecie = ' ';  
	}
    else if ($wyborpodpowiedzi == 22){
        $podpowiedz = 'Pociągnijcie za line z liśćmi i przyciągnijcie skrzynie z drugiej części wyspy';
 		$zdjecie = ' ';   
	}
    else if ($wyborpodpowiedzi == 23){
        $podpowiedz = 'Musicie spojrzećll w dal';
  		$zdjecie = ' ';  
	}
    else if ($wyborpodpowiedzi == 24){
        $podpowiedz = 'Urzyjcie lunety i spójrzcie na słońce';
  		$zdjecie = ' ';  
	}
    else if ($wyborpodpowiedzi == 25){
        $podpowiedz = ' ';
   		$zdjecie = 'W25.jpg'; 
	}
    else if ($wyborpodpowiedzi == 26){
        $podpowiedz = 'Przeszukajcie wrak statku';
   		$zdjecie = ' '; 
	}
    else if ($wyborpodpowiedzi == 27){
        $podpowiedz = ' ';
  		$zdjecie = 'W27.jpg';  
	}
    else if ($wyborpodpowiedzi == 28){
        $podpowiedz = 'fretka z dziury ma kluczyk';
  		$zdjecie = ' ';  
	}
    else if ($wyborpodpowiedzi == 29){
        $podpowiedz = 'Rzecz z kokosa pozwoli wam otworzyć pudełko';
  		$zdjecie = ' ';  
	}
    else if ($wyborpodpowiedzi == 30){
        $podpowiedz = 'Musicie postawić pudełko na ziemie i wtedy przyłożyć magnes';
		$zdjecie = ' ';    
	}
    else if ($wyborpodpowiedzi == 31){
        $podpowiedz = 'Musicie stuknąć i przyłożyć magnes na kilka sekund do 4 nalepek N S W E na pudełku';
 		$zdjecie = ' ';   
	}
    else if ($wyborpodpowiedzi == 32){
        $podpowiedz = 'Musicie mieć 3 czeście mapy, aby przejść na drugą stronę';
		$zdjecie = ' ';    
	}
    else if ($wyborpodpowiedzi == 33){
        $podpowiedz = 'Trzy części mapy łączą się w całość i tworzą kod do kłódki na dole od przejścia';
 		$zdjecie = ' ';   
	}
    else if ($wyborpodpowiedzi == 34){
        $podpowiedz = '3 częście mapy tworzą razem kod 52571 do kłódki na dole, aby przejść na drugą stronę';
   		$zdjecie = ' '; 
	}
	
    else if ($wyborpodpowiedzi == 35){
        $podpowiedz = 'Przeszukajcie dokładnie wyspe, tutaj zwyczajne rzeczy i zwierzęta nie do końca muszą takie być';
   		$zdjecie = ' '; 
	}
    else if ($wyborpodpowiedzi == 36){
        $podpowiedz = 'Papuga może coś dla was mieć ';
  		$zdjecie = ' ';
	}
    else if ($wyborpodpowiedzi == 37){
        $podpowiedz = 'Papuga przy oknie ma klucz do dźwigni ';
  		$zdjecie = ' ';
	}

    else if ($wyborpodpowiedzi == 38){
        $podpowiedz = 'Do otwarcia skrzyni przyda wam się notatka pirata i tablica z wraku';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 39){
        $podpowiedz = 'Musicie pukać w odpowiedniej sekwencji morsa, którą poznacie z tablicy ';
  		$zdjecie = ' ';  
	}
    else if ($wyborpodpowiedzi == 40){
        $podpowiedz = 'Pukać należy w znak na skrzyni, ';
 		$zdjecie = ' ';   
	}
    else if ($wyborpodpowiedzi == 41){
        $podpowiedz = 'Kod to _ .. _ _ _ _ _   - 1 puknięcie, przerwa, 2 szybkie puknięcia, 5 wolnych';
		$zdjecie = ' ';    
	}

    else if ($wyborpodpowiedzi == 42){
        $podpowiedz = 'Uzyjcie kompasu do otwracia pudełka';
  		$zdjecie = ' ';
	}
    else if ($wyborpodpowiedzi == 43){
        $podpowiedz = 'Na puzzlach obok czaszki znajduje się cyfra 7';
 		$zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 44){
        $podpowiedz = 'Na puzzlach znajdują się 4 białe cyfry, przypatrzcie się im uważnie';
 		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 45){
        $podpowiedz = 'Przeszukajcie dokładnie drugą część wyspy';
  		$zdjecie = ' ';
	}
    else if ($wyborpodpowiedzi == 46){
        $podpowiedz = 'Za trzciną';
 		$zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 47){
        $podpowiedz = 'Za trzciną, na ziemi obok miejsca skąd podnosiliście skrzynie ukryta jest część z kłódką';
 		$zdjecie = ' ';
    }	

	
    else if ($wyborpodpowiedzi == 48){
        $podpowiedz = 'Trójkątną skrzynie musicie włożyć w odpowiednie miejsce ';
 		$zdjecie = ' '; 
    }	
		
    else if ($wyborpodpowiedzi == 49){
        $podpowiedz = 'Trójkątna skrzynia włożona w odpowiednie miejsce podświetla znaki na ścianie które musicie przetłumaczyć';
 		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 50){
        $podpowiedz = 'Znaki na ścianie i litery na kartce z kulki są w takich samych pozycjach, rozwiązanie tworzy słowo klucz';
		$zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 51){
        $podpowiedz = ' ';
		$zdjecie = 'W51.jpg';
    }
    else if ($wyborpodpowiedzi == 99){
        $podpowiedz = 'NIC NA SIŁE ';
		$zdjecie = ' ';
    }
    else{
        $podpowiedź = '';
    }



    $field = '';
    $field2 = '';

    if($podpowiedz == -4){
        $field2.= "Zdjecie='".$zdjecie."'";
        $sql2 = "UPDATE wyspa SET $field2 WHERE ID=1";
        mysqli_query($conn, $sql2) or die("database error:". mysqli_error($conn));
    }
    else{
        $field.= "Nazwa='".$podpowiedz."'";
        $sql = "UPDATE wyspa SET $field WHERE ID=1";
        mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
        
        $field2.= "Zdjecie='".$zdjecie."'";
        $sql2 = "UPDATE wyspa SET $field2 WHERE ID=1";
        mysqli_query($conn, $sql2) or die("database error:". mysqli_error($conn));
    }
    	    
?>    