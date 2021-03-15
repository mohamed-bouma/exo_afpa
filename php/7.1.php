<?php
$tab = array();

function tableau($tab)
{
    $array_size = readline("Entrez le nombre de valeurs : ");
    for ($i = 0; $i < $array_size; $i++) {
        $tab[$i] = readline("type the value : ");
    }
    echo is_consecutive($tab);
}

function is_consecutive($tab)
{

    for ($i = 1; $i < count($tab); $i++) {
        if ($tab[$i - 1] != $tab[$i] - 1) {
            return "numbers aren't consecutive";
        } else {
            return "numbers are consecutive";
        }
    }
}


tableau($tab);
