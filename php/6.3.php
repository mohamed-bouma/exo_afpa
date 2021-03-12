<?php

function notes()
{
    for ($i = 0; $i <= 8; $i++) {
        $notes[$i] = readline("Saisir une note : ");
    }
    for ($i = 0; $i <= 8; $i++) {
        echo $notes[$i] . "\n";
    }
}

notes();
