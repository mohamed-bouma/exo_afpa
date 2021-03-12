<?php

function nombre_max()
{
    $i = 1;
    do {
        $n = readline("Saisir un nombre : ");
        if ($n != 0) {
            if ($i == 1) {
                $max = $n;
                $indiceMax = 1;
            }
            if ($n > $max) {
                $max = $n;
                $indiceMax = $i;
            }
            $i++;
        }
    } while ($n != 0);
    if ($n == 0) {
        echo "Vous avez quittez le programme. \n";

        echo "La plus grande valeur est : " . $max;
    }
}

nombre_max();
