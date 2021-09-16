<?php
fscanf(STDIN, "%d %d %d %d", $w, $h, $countX, $countY);


// Liste des mesures sur la longueur
$inputsX = explode(" ", fgets(STDIN));
$inputsX[] = $w;
for ($i = 0; $i < $countX; $i++) {
    for ($j = $i; $j < ($countX); $j++) {

        $inputsX[] = intval($inputsX[$j + 1]) - intval($inputsX[$i]);
    }
}


// Liste des mesures sur la hauteur
$inputsY = explode(" ", fgets(STDIN));
$inputsY[] = $h;

for ($i = 0; $i < $countY; $i++) {
    for ($j = $i; $j < ($countY); $j++) {

        $inputsY[] = intval($inputsY[$j + 1]) - intval($inputsY[$i]);
    }
}

// On défini la variable égale au nombre de carrés présents : 
$nbCarre = 0;

// On comparr chaque valeur des mesures sur la longueur avec chacune des valeurs des mesures sur la hauteur : 
for ($i = 0; $i < count($inputsX); $i++) {

    for ($j = 0; $j < count($inputsY); $j++) {

        if ($inputsX[$i] == $inputsY[$j]) {
            $nbCarre += 1;
        }
    }
}

// On renvoie le nombre de carrés : 
echo ("$nbCarre\n");
