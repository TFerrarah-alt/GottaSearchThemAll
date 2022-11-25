<?php

main();
function main() {
    global $all_dim;
    $all_dim = array();
    $csv = array_map('str_getcsv', file('pokemon.csv')); //leggiamo il file csv
    foreach ($csv as $line) {
        formula($line[5], $line[6], $line[7], $line[8], $line[9], $line[10], $all_dim);
    }
  
    ricerca($all_dim, $csv);
}

function formula($hp, $attack, $defense, $sp_attack, $sp_defense, $speed, &$all_dim) {
    // applico la formula euclideana
    $dim1 = ((int)$_POST["hp"] - (int)$hp);
    $dim2 = ((int)$_POST["attack"] - (int)$attack);
    $dim3 = ((int)$_POST["defense"] - (int)$defense);
    $dim4 = ((int)$_POST["atkSp"] - (int)$sp_attack);
    $dim5 = ((int)$_POST["defSp"] - (int)$sp_defense);
    $dim6 = ((int)$_POST["speed"] - (int)$speed);
    $pd1 = pow($dim1, 2);
    $pd2 = pow($dim2, 2);
    $pd3 = pow($dim3, 2);
    $pd4 = pow($dim4, 2);
    $pd5 = pow($dim5, 2);
    $pd6 = pow($dim6, 2);
    $dim = sqrt($pd1+$pd2+$pd3+$pd4+$pd5+$pd6);

    // popolo array delle dimensioni ottenute
    array_push($all_dim, $dim);
}   


function ricerca($all_dim,$csv) {
    // Ricerca del valore minimo nell'array e della sua posizione ( KEY )
    $min = min($all_dim);
    $key = array_search($min, $all_dim);
    $n = 0;
    // stampo il risultato
    foreach ($csv as $line){
        if ($n == $key-2){
            echo $line[1]." ".$line[2]." ".$line[5]." ".$line[6]." ".$line[7]." ".$line[8]." ".$line[9]." ".$line[10]." ".$line[11]."<br>";
        }
        if ($n == $key-1){
            echo $line[1]." ".$line[2]." ".$line[5]." ".$line[6]." ".$line[7]." ".$line[8]." ".$line[9]." ".$line[10]." ".$line[11]."<br>";
        }
        if ($n == $key){
            echo $line[1]." ".$line[2]." ".$line[5]." ".$line[6]." ".$line[7]." ".$line[8]." ".$line[9]." ".$line[10]." ".$line[11]."<br>";
        }
        if ($n == $key+1){
            echo $line[1]." ".$line[2]." ".$line[5]." ".$line[6]." ".$line[7]." ".$line[8]." ".$line[9]." ".$line[10]." ".$line[11]."<br>";
        }
        if ($n == $key+2){
            echo $line[1]." ".$line[2]." ".$line[5]." ".$line[6]." ".$line[7]." ".$line[8]." ".$line[9]." ".$line[10]." ".$line[11]."<br>";
        }

        $n++;
    }

}