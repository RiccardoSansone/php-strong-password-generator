<?php

function passGenerator($length, $characters, $password){
    // ciclo for per iterare all'interno della stringa di caratteri n volte quante la lunghezza
    for($i = 0; $i <$length; $i++){
        $password = '';
        // salvo in una variabile il singolo carattere ottenuto randomicamente
        $car = $characters[rand(0,strlen($characters))];
        //dichiaro una variabile la quale avrá come valore la concatenazione dei singoli caratteri ottenuti dal ciclo
        $password .= $car;
        
        return $password;
    }
}