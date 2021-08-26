<?php
// $n: Le nombre de températures à analyser
fscanf(STDIN, "%d", $n);
$inputs = explode(" ", fgets(STDIN));

// On introduit chaque température dnas un tableau :
$arrayTemperature = [];
for ($i = 0; $i < $n; $i++)
{   
    $t = intval($inputs[$i]); // Une température exprimée via un entier allant de -273 à 5526
    $arrayTemperature[]=$t;
}

// S'il n'y a pas de température : 
if (empty($arrayTemperature)){
    $min = 0;

} else {
    // On définit la température la plus basse comme étant la première du tableau : 
    $min = $arrayTemperature[0];

    for ($i = 1; $i < $n; $i++){

        // Si les deux températures comparées ont la même valeur absolue, on garde la température positive : 
        if(abs($arrayTemperature[$i]) == abs($min)){
            if($arrayTemperature[$i] > $min){
                $min = $arrayTemperature[$i] ;
            }
        }

        // Si la valeur absolue de la température est inférieure à la valeur absolue de la température la plus basse en mémoire : 
        if (abs($arrayTemperature[$i]) < abs($min)){

            // Cette dernière sera remplacée :
            $min = $arrayTemperature[$i];
        }
    }
}

// On renvoie la valeur de la température la plus basse : 
echo("$min\n");
