<?php

fscanf(STDIN, "%d", $r1);
fscanf(STDIN, "%d", $r2);

while ($r1 != $r2){

    if ($r1 > $r2){

        $sumDigit = 0;

        for ($i=0; $i < strlen($r2); $i++){
            $digitValue = substr($r2, $i, 1);
            $sumDigit += $digitValue;
        } 

        $r2 += $sumDigit;

    } elseif ($r1 < $r2) {

        $sumDigit = 0;
        
        for ($i=0; $i < strlen($r1); $i++){
            $digitValue = substr($r1, $i, 1);
            $sumDigit += $digitValue;
        }

        $r1 += $sumDigit;
    }

}

echo("$r1\n");
