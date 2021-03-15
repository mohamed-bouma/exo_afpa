<?php

function greatest()
{
    $array_size = readline("Entres le nombre de valeurs du tableau : ");

    for ($i = 0; $i < $array_size; $i++) {
        $tab[$i] = readline("Saisir la valeur ");
        if ($i == 0) {
            $max = $tab[$i];
            $max_index = 0;
        } elseif ($tab[$i] > $max) {
            $max = $tab[$i];
            $max_index = $i;
        }
    }
    echo "The greater number is " . $max . " is at " . $max_index;
}

greatest();
