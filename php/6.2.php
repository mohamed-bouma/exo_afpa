<?php

function voyelles()
{

    $voyelles[0] = "A";
    $voyelles[1] = "O";
    $voyelles[2] = "E";
    $voyelles[3] = "I";
    $voyelles[4] = "U";
    $voyelles[5] = "Y";
    for ($i = 0; $i <= 5; $i++) {
        echo $voyelles[$i] . "\n";
    }
}

voyelles();
