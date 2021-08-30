<?php

fscanf(STDIN, "%d", $r1);

$array = [];
for ($i=1; $i < $r1; $i++){

    if (!in_array($i, $array)){

        $result = $i;    
        // error_log(var_export($result, true));

            do {
            
                $sumDigit = 0;

                for ($j = 0; $j < strlen($result); $j++) {   
                // error_log(var_export($result, true));
                
                $digitValue = substr($result, $j, 1);
                // error_log(var_export($digitValue, true));                        

                $sumDigit += $digitValue;
            }
            // error_log(var_export($sumDigit, true));

            // On l'ajoute au nombre
            $result += $sumDigit;
            // error_log(var_export($result, true));

            if((!in_array($result, $array))&&($result<=$r1)){
            $array[]=$result;
            }
            // error_log(var_export($array, true));

        } while ($result < $r1);

    }        

}

if (in_array($r1, $array)){
        $finalResult = "YES";
        } else {
        $finalResult = "NO"; 
        }
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("$finalResult\n");
