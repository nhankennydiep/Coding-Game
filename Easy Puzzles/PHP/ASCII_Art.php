<?php

fscanf(STDIN, "%d", $L);
fscanf(STDIN, "%d", $H);
$T = stream_get_line(STDIN, 256 + 1, "\n");

$letters = [];

for ($i = 0; $i < $H; $i++)
{
    $ROW = stream_get_line(STDIN, 1024 + 1, "\n");

    // Création du tableau contenant les lettres
    for ($j = 0; $j < 27; $j++) {
        $letters[$j][$i] = substr($ROW, $L * $j, $L);
    }
}

$sentence = strtoupper($T);
$rows = array_fill(0, $H, '');

// Parcours du texte à transformer en ASCII ART
foreach (str_split($sentence) as $char) {
    // Correspondance entre le numéro de la lettre et l'index du tableau
    $index = ord($char) - 65;

    // Si ce n'est pas une lettre on remplace par un ?
    $letter = $letters[$index] ?? $letters[26];

    // Création de toutes les lignes
    for ($i = 0; $i < $H; $i++) {
        $rows[$i] .= $letter[$i];
    }
}

// Assemblage de toutes les lignes avec le caractère passage à la ligne
echo implode("\n", $rows) . "\n";
