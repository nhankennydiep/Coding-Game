<?php

fscanf(STDIN, "%d", $r1);
fscanf(STDIN, "%d", $r2);

// Tant que les deux nombres sont différents : 
while ($r1 != $r2){

    // Si le nombre 1 est supérieur au nombre 2
    if ($r1 > $r2){

        // On déclare la somme des chiffres du nombre
        $sumDigit = 0;

        for ($i=0; $i < strlen($r2); $i++){
            $digitValue = substr($r2, $i, 1);
            $sumDigit += $digitValue;
        } 

        // On l'ajoute au nombre 2
        $r2 += $sumDigit;

    } elseif ($r1 < $r2) {

        // On déclare la somme des chiffres du nombre
        $sumDigit = 0;
        
        for ($i=0; $i < strlen($r1); $i++){
            $digitValue = substr($r1, $i, 1);
            $sumDigit += $digitValue;
        }

        // On l'ajoute au nombre 1
        $r1 += $sumDigit;
    }

}

// On affiche le nombre 1 (ou le nombre 2)
echo("$r1\n");
