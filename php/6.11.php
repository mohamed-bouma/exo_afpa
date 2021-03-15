<?php

function tab1()
{
    $array_size1 = readline("Entrez le nombre de valeurs du tableau 1: ");
    for ($i = 0; $i < $array_size1; $i++) {
        $tab1[$i] = readline("entrez la valeur numero " . ($i + 1) . " : ");
    }
    return $tab1;
}

function tab2()
{
    $array_size2 = readline("Entrez le nombre de valeurs du tableau 2: ");
    for ($i = 0; $i < $array_size2; $i++) {
        $tab2[$i] = readline("entrez la valeur numero " . ($i + 1) . " : ");
    }
    return $tab2;
}

function schtroumpf($tab1, $tab2)
{
    $schtroumpf = 0;
    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 2; $j++) {
            $schtroumpf = $schtroumpf + $tab1[$i] * $tab2[$j];
        }
    }
    echo $schtroumpf;
}

schtroumpf(tab1(), tab2());
