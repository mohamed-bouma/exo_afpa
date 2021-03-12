<?php

function notes()
{
    for ($i = 0; $i <= 8; $i++) {
        $notes[$i] = readline("Saisir une note : ");
    }
    return $notes;
}

function total_notes($notes)
{
    $result = 0;
    for ($i = 0; $i <= 8; $i++) {
        $result = $result + $notes[$i];
    }
    echo "La somme des valeurs du tableau de notes est de : " . $result;
}

total_notes(notes());
