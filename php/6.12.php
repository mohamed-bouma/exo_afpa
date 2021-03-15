<?php

function exo_6_12()
{

    $array_size = readline("Type the number of cells :");
    for ($i = 0; $i < $array_size; $i++) {
        $value[$i] = readline("Enter the value : ");
    }
    for ($i = 0; $i < $array_size; $i++) {
        echo $value[$i] + 1 . "\n";
    }
}

exo_6_12();
