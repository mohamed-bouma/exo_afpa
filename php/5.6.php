<?php

function factorielle()
{

    $n = readline("Saisir un nombre : ");
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result = $result * $i;
    }
    echo $result;
}

factorielle();
