<?php

fscanf(STDIN, "%d", $N);

// On introduit les valeurs dans un tableau :
$array=[];
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d", $pi);
    error_log(var_export($pi, true));
    $array[]=$pi;
}

// On déclare le plus petit écart : 
$plusPetitEcart = 100;

// On va comparer calculer dans une boucle la différence entre les 2 plus petites valeurs du tableau
for ($i = 0; $i < $N-1; $i++)
{
    // Première valeur à comparer, étant la plus petite du tableau
    $minValue1 = min($array);

    // On cherche à enlever cette dernière du tableau : 
    // - On récupère l'indice de cette dernière
    $keyMin1 = array_search($minValue1, $array);
    // - On l'enlève du tableau
    unset($array[$keyMin1]);
   
    // On définit la deuxième valeur à comparer avec la première, étant du coup la nouvelle valeur la plus petite du tableau
    $minValue2 = min($array);

    // Si la différence des deux vaut moins que le plus pletit écart ainsi renseigné, alors elle la remplacera : 
    if (($minValue2 - $minValue1) < $plusPetitEcart){
        $plusPetitEcart = $minValue2 - $minValue1;
    }
}

echo("$plusPetitEcart\n");
