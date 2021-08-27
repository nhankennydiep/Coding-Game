<?php
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    // Séquence de chiffres de la carte de crédit avec les espaces
    $card = stream_get_line(STDIN, 20 + 1, "\n");

    // Séquence de chiffres de la carte de crédit sans les espaces
    $newCard = str_replace(" ", "", $card);

    $firstSum = 0;
    $secondSum = 0;

    for ($j = 0; $j < strlen($newCard)/2; $j++){

        // Test sur les chiffres placés en position impaire
        $digit = substr($newCard, $j*2, 1)*2;
        
        if ($digit  > 9){
            $digit -= 9;
        }

        $firstSum += $digit;


        // Test sur les chiffres placés en position paire
        $digit = substr($newCard, $j*2 + 1, 1);
        
        $secondSum += $digit;
    }

    if (($firstSum + $secondSum) % 10 === 0){
        $result = "YES";
    } else {
        $result = "NO";
    }

    echo("$result\n");
}
