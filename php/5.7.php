<?php

function nombre_max()
{

    $NBR_NOMBRES = 20;
    for ($i = 1; $i <= $NBR_NOMBRES; $i++) {
        $n = readline("Saisir un nombre : ");
        if ($i == 1) {
            $max = $n;
            $indiceMax = 1;
        }
        if ($n > $max) {
            $max = $n;
            $indiceMax = $i;
        }
    }
    echo "La plus grande valeur est : " . $max;
}

nombre_max();
