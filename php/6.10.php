<?php

function tab3()
{
    for ($i = 0; $i < 8; $i++) {
        $tab1[$i] = readline("Inscrivez la valeur " . ($i + 1) . " dans le tableau 1 : ");
        $tab2[$i] = readline("Inscrivez la valeur " . ($i + 1) . " dans le tableau 2 : ");
    }
    for ($i = 0; $i < 8; $i++) {
        $tab3[$i] = $tab1[$i] + $tab2[$i];
    }

    for ($i = 0; $i < 8; $i++) {
        echo $tab3[$i] . "\n";
    }
}

tab3();
