<?php

function getNumber()
{
    do {
        $n = readline("Entrez un nombre entre 10 et 20 :");

        if ($n > 20) {
            echo "Plus petit ! \n";
        } else if ($n < 10) {
            echo "Plus grand ! \n";
        }
    } while ($n < 10 || $n > 20);
    echo "c'est bon !";
}

getNumber();
