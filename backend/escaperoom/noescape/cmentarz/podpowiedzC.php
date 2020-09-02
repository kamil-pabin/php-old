<?php
    $wyborpodpowiedzi = intval($_GET['q']);
    include_once("db_connect.php");
    $podpowiedz = '';
    $zdjecie = 'cmentarz.jpg';
    if ($wyborpodpowiedzi == 0){
        $podpowiedz = '  ';
        $zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == -1){
        $podpowiedz = 'POWODZENIA!';
        $zdjecie = 'cmentarz.jpg';
    }
    else if ($wyborpodpowiedzi == 1){
        $podpowiedz = 'Przeszukajcie dokładnie pokój, jakieś elementy moga być ukryte naprawdę wszędzie';
        $zdjecie = ' '; 
	}
    else if ($wyborpodpowiedzi == 2){
        $podpowiedz = 'Kod należy wprowadzić równo i dokładnie w zaznaczonym miejcu przez kreske, następnie należy pociągnąć za kłódke';
        $zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 3){
        $podpowiedz = 'Przeszukajcie dokładnie pokój, sprawdzcie nawet pajęczyny';
        $zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 4){
        $podpowiedz = '';
        $zdjecie = ' C4.jpg';  //nagrobek1.jpg
	}
    else if ($wyborpodpowiedzi == 5){
        $zdjecie = ' ';
        $podpowiedz = 'Czasem w ciemności widać więcej';
        
    }
    else if ($wyborpodpowiedzi == 6){
        $podpowiedz = 'Musicie uzyskać ciemność, pozbyć się światła';
        $zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 7){
        $podpowiedz = 'Zgaście światło';
        $zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 8){
        $podpowiedz = ' '; 
        $zdjecie = 'C8.jpg '; //polka.jpg
    }
    else if ($wyborpodpowiedzi == 9){
        $podpowiedz = 'Kości na półce układają się w strzałki, sugerują co trzeba zrobić';
        $zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 10){
        $podpowiedz = ' ';
        $zdjecie = ' C10.jpg'; //3 nagrobek
    }
    else if ($wyborpodpowiedzi == 11){
        $podpowiedz = ' ';
        $zdjecie = 'C11.jpg '; 
    }
    else if ($wyborpodpowiedzi == 12){
        $podpowiedz = 'Użyjcie magnesu z pentagramem, aby wskazał wam odpowiednie litery na nagrobku które tworzą imie';
        $zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 13){
        $podpowiedz = 'Kod należy wprowadzić dokładnie na spodzie kłódki, prawidłowe imie a następnie pociągnąć za kłódke';
        $zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 14){
        $podpowiedz = 'Zależy wam na prawdzie, smak i przyprawy nie sa dla was tak istotne w eliksirze';
        $zdjecie = ' ';  
	}
    else if ($wyborpodpowiedzi == 15){
        $podpowiedz = 'Stwórzcie eliksir prawdy, pamiętajcie, że na dnie kociołka była przyklejona kartka';
        $zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 16){
        $podpowiedz = 'Musicie wlać krew z kielicha do kotła (była tam kartka)';
        $zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 17){
        $podpowiedz = 'Przeszukajcie dobrze pokój, coś jest gdzieś ukryte';
        $zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 18){
        $podpowiedz = 'Drzewa skrywają wiele tajemnic i zaginionych rzeczy ';
        $zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 19){
        $podpowiedz = 'W drzewie jest skrzynia, do której kod macie w garnku ';
        $zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 20){
        $podpowiedz = 'Przeczytajcie dokładnie pamiętnik młodej wiedźmy';
        $zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 21){
        $podpowiedz = 'Słoik z głową, na wadze są wycieńcia tak, aby się na niej zmieściła';
        $zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 22){
        $podpowiedz = ' ';
        $zdjecie = 'C22.jpg '; //noga
    }
    else if ($wyborpodpowiedzi == 23){
        $podpowiedz = ' ';
        $zdjecie = 'C23.jpg ';   //lampion
    }
    else if ($wyborpodpowiedzi == 24){
        $podpowiedz = 'Musicie zważyć żabe, lampion, głowe człowieka w słoiku i nogę w bucie';
        $zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 25){
        $podpowiedz = 'Żabe = 7 Lampion = 5 Głowa = 1 Noga = 3';
        $zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 26){
        $podpowiedz = 'Zjawa która wyleciała ma UV, wykorzystajcie to, spróbujcie odkryć co może wam pokazać';
        $zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 27){
        $podpowiedz = 'Zjawa ma UV, możecie odkryć znak na ścianie';
        $zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 28){
        $podpowiedz = 'Wszystkie elementy muszą się bardzo dokładnie stykać';
        $zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 29){
        $podpowiedz = ' ';
        $zdjecie = 'C29.jpg ';  //szafka
    }
    else if ($wyborpodpowiedzi == 30){
        $podpowiedz = 'Sprawdźcie serce';
        $zdjecie = ' '; 
   }
     else if ($wyborpodpowiedzi == 31){
        $podpowiedz = 'Serce ma na sobie literę, która symbolizuje nagrobek';
        $zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 32){
        $podpowiedz = 'M jak Malcolm';
        $zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 33){
        $podpowiedz = 'Po przyłożeniu serca do M Malcolm powiedział wam przepowiednie';
        $zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 34){
        $podpowiedz = 'W szafce jest ukryty kluczyk do gargulca ';
        $zdjecie = 'C34.jpg ';  //zdjecie
    }	 
    else if ($wyborpodpowiedzi == 35){
        $podpowiedz = 'Zwróćcie uwagę na ściany';
        $zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 36){
        $podpowiedz = 'Słońce i śmierć mogą połączyć tylko osoby w których żyłach płynie czerwony płyn';
        $zdjecie = ' ';  
    }
    else if ($wyborpodpowiedzi == 37){
        $podpowiedz = 'Musicie znaleźć na ścianach słońce i śmierć i je przytrzymać';
        $zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 38){
        $podpowiedz = 'Dotyk musi być wytrwały';
        $zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 39){
        $podpowiedz = 'Wszystko czego potrzebujecie znajduje się w kuferku';
        $zdjecie = ' '; 
    }
    else if ($wyborpodpowiedzi == 40){
        $podpowiedz = ' ';
        $zdjecie = 'C40.jpg '; //kuferek
    }
    else if ($wyborpodpowiedzi == 41){
        $podpowiedz = 'Dolna częśc kuferka przesuwa się do tyłu';
        $zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 42){
        $podpowiedz = 'W elemencie który trzeba wyciągnąć z kuferka ukrywa się kluczyk';
        $zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 43){
        $podpowiedz = 'Przyłóżcie palec, podnieście i otwórzcie wieko trumny';
        $zdjecie = ' '; 
   }  
     else if ($wyborpodpowiedzi == 44){
        $podpowiedz = 'Kołek';
        $zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 45){
        $podpowiedz = 'Musicie wbić kołem w dracule, jest tam specjalne miejsce';
        $zdjecie = ' '; 
   } 

    else if ($wyborpodpowiedzi == 46){
        $podpowiedz = ' ';
        $zdjecie = 'C46.jpg ';  //zdjecie
   }  
     else if ($wyborpodpowiedzi == 47){
        $podpowiedz = 'W szafce jest ukryty kluczyk';
        $zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 48){
        $podpowiedz = 'Jeżeli znajdziecie kluczyk z szafki głowa gargulca pozwali powtórzyć wam przepowiednie o słońcu i śmirci';
        $zdjecie = ' '; 
   } 

     else if ($wyborpodpowiedzi == 98){
        $podpowiedz = 'NIC NA SIŁE';
        $zdjecie = ' ';
    }
    else if ($wyborpodpowiedzi == 99){
        $podpowiedz = 'Trumna jest zamknięta na zamki, musicie zdobyć odpowiedni element, aby ją otworzyć - prosimy jej nie otwierać na siłe';
        $zdjecie = ' '; 
   }  

   
    else{
        $podpowiedź = 'Powodzenia!';
        $zdjecie = ' ';
    }



    $field = '';
    $field2 = '';


    if($podpowiedz == -4){
        $field2.= "Zdjecie='".$zdjecie."'";
        $sql2 = "UPDATE cmentarz SET $field2 WHERE ID=1";
        mysqli_query($conn, $sql2) or die("database error:". mysqli_error($conn));
    }
    else{
        $field.= "Nazwa='".$podpowiedz."'";
        $sql = "UPDATE cmentarz SET $field WHERE ID=1";
        mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
        
        $field2.= "Zdjecie='".$zdjecie."'";
        $sql2 = "UPDATE cmentarz SET $field2 WHERE ID=1";
        mysqli_query($conn, $sql2) or die("database error:". mysqli_error($conn));
    }
    

    
?>    