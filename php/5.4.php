<?php

function table_multiplication()
{
    $n = readline("Entrez un nombre : ");

    for ($i = 1; $i <= 10; $i++) {
        $result = $n * $i;
        echo $n . " * " . $i . " = " . $result . "\n";
    }
}

table_multiplication();
