<?php



function notes($array)
{
    $array_size = readline("Entres le nombre de valeurs du tableau : ");
    $somme = 0;
    for ($i = 0; $i < $array_size; $i++) {

        $notes[$i] = readline("Saisir la valeur ");
        $somme += $notes[$i];
    }
    return $somme;
}

$somme = notes($notes[$i]);
$moyenneClasse = $somme / $array_size;

function greater($array, $moyenne)
{
    $count = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] >= $moyenne) {
            $count++;
        }
    }
}

function afficher($count)
{
    echo "There are " . $count, " marks greater then the classe mark average";
}

notes(greater($notes, $moyenneClasse));

afficher($count);
