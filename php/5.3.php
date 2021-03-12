<?php

function getNumber()
{
    $n = readline("Entrez un nombre :");
    for ($i = 1; $i <= 10; $i++) {
        echo $n + $i . " ";
    }
}

getNumber();
