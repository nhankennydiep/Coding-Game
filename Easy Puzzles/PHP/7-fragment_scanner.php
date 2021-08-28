<?php

$line1 = stream_get_line(STDIN, 900 + 1, "\n");
$line2 = stream_get_line(STDIN, 900 + 1, "\n");
$line3 = stream_get_line(STDIN, 900 + 1, "\n");

// On récupère chaque chiffre en ASCII au sein d'un tableau, où chaque segement d'un même chiffre se suit sur 3 index
for ($i = 0; $i < strlen($line1)/3; $i++){
    $array[]= substr($line1, $i*3,3);
    $array[]= substr($line2, $i*3,3);
    $array[]= substr($line3, $i*3,3);
}

// On déclare le chiffre à trouver à la fin :
$number = '';

// On génère une boucle qui va itérer jusqu'à le nombre d'éléments du tableau/3
for ($i = 0; $i < count($array)/3; $i++){

    // On déclare une variable pour chaque index de chaque chiffre transcrit en ASCII
    $firstIndex = $i * 3;  
    $secondIndex = $i * 3 + 1;  
    $thirdIndex = $i * 3 + 2;  

    // On déclare les conditions en fonction des 3 index afin de trouver le chiffre correspondant : 
    if ($array[$firstIndex] == ' _ ' && $array[$secondIndex] == '| |' && $array[$thirdIndex] == '|_|'){
        $number .= 0;
    } 
    elseif ($array[$firstIndex] === '   ' && $array[$secondIndex] ==='  |' && $array[$thirdIndex] === '  |'){
        $number .= 1;
    }
    elseif ($array[$firstIndex] === ' _ ' && $array[$secondIndex] ===' _|' && $array[$thirdIndex] === '|_ '){
        $number .= 2;
    }
    elseif ($array[$firstIndex] === ' _ ' && $array[$secondIndex] ===' _|' && $array[$thirdIndex] === ' _|'){
        $number .= 3;
    }
    elseif ($array[$firstIndex] === '   ' && $array[$secondIndex] ==='|_|' && $array[$thirdIndex] === '  |'){
        $number .= 4;
    }
    elseif ($array[$firstIndex] === ' _ ' && $array[$secondIndex] ==='|_ ' && $array[$thirdIndex] === ' _|'){
        $number .= 5;
    }
    elseif ($array[$firstIndex] === ' _ ' && $array[$secondIndex] ==='|_ ' && $array[$thirdIndex] === '|_|'){
        $number .= 6;
    }
    elseif ($array[$firstIndex] === ' _ ' && $array[$secondIndex] ==='  |' && $array[$thirdIndex] === '  |'){
        $number .= 7;
    }
    elseif ($array[$firstIndex] === ' _ ' && $array[$secondIndex] ==='|_|' && $array[$thirdIndex] === '|_|'){
        $number .= 8;
    }
    elseif ($array[$firstIndex] === ' _ ' && $array[$secondIndex] ==='|_|' && $array[$thirdIndex] === ' _|'){
        $number .= 9;
    }
}

// On renvoie le chiffre
echo("$number\n");
