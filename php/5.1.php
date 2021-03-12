<?php

function getNumber()
{

    do {
        $n = readline("Entrez un nombre entre 1 et 3 :");
    } while ($n > 3 || $n < 1);
    echo "c'est bon !";
}

getNumber();
