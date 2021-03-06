<?php
// $N: Nombre d'éléments composant la table d'association extension/type MIME
fscanf(STDIN, "%d", $N);

// $Q: Nombre Q de noms de fichiers à analyser.
fscanf(STDIN, "%d", $Q);

// $data : tableau associatif liant l'extension du fichier $EXT à son MIME $MT
$data = [];
for ($i = 0; $i < $N; $i++)
{
    // $EXT: Extension de fichier
    // $MT: type MIME
    fscanf(STDIN, "%s %s", $EXT, $MT);
    $data[strtolower($EXT)]=$MT;
}


// Boucle permettant de récupérer l'extension du fichier via son nom
// Pour chaque fichier : 
for ($i = 0; $i < $Q; $i++)
{
    $FNAME = stream_get_line(STDIN, 256 + 1, "\n");// 1 nom de fichier par ligne


    // Pour chaque nom de fichier : 
    // Tableau comprenant tous les caractères du nom du fichier
    $characterArray=[];
    for($j=0; $j < strlen($FNAME); $j++){
        $character = substr($FNAME, $j,1);
        $characterArray[]=$character;
    }

        // Si le tableau des caractères contient un '.' : 
        if (in_array('.',$characterArray)){

            // On rajoute l'extension au tableau :
            
            // Tableau comprenant chaque morceau du nom du fichier séparé par un point '.'
            $fileNames = explode('.',$FNAME);

            // On récupère le nombre d'éléments dans le tableau des morceaux du nom du fichier
            $nbfileNames = count($fileNames);

            // On définit l'extension comme étant le dernier élément du tableau des morceaux du nom de fichier
            $extension = strtolower($fileNames[$nbfileNames-1]);

            // On le rajoute dans le tableau des extensions
            $extensionArray[] = $extension;

        // Sinon on le définit comme vide
        } else {
            $extensionArray[] = " ";
        }
}

// Boucle permettant de savoir si l'extension du fichier a son type MIME associé.
for ($i = 0; $i < count($extensionArray); $i++){

    // On définit le résultat comme "UNKNOWN"
    $resultat = "UNKNOWN";

    // Si l'extension du fichier a son type MIME associé : 
    if (array_key_exists($extensionArray[$i],$data) == true){

        // On retourne le type MIME associé
        $resultat = $data[$extensionArray[$i]];
    }

    // On retourne le résultat (type MIME ou "UNKNOWN")        
    echo("$resultat\n");
}
