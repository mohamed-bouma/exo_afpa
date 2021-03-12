<?php
function notes()
{
    for ($i = 0; $i <= 8; $i++) {
        $notes[$i] = readline("Saisir une note : ");
    }
    return $notes;
}

function moyenne($notes)
{
    $somme = 0;
    for ($i = 0; $i < count($notes); $i++) {
        $somme = $somme + $notes[$i];
    }

    $moyenne = $somme / count($notes);
    echo "La moyenne est de : " . $moyenne;
}

moyenne(notes());
