<?php

function getX($n, $p)
{
    $np = $n - $p;
    $x = 1;
    for ($i = 1; $i <= $p; $i++) {
        $x = $x * ($np + $i);
    }
    return $x;
}

function factorielle($p)
{
    $factorielleP = 1;
    for ($i = 1; $i <= $p; $i++) {
        $factorielleP = $factorielleP * $i;
    }

    return $factorielleP;
}

function getY($x, $factorielleP)
{
    return $x / $factorielleP;
}

$n = readline("Nombre de chevaux partants :");
$p = readline("Nombre de chevaux joués :");
$x = getX($n, $p);
$factorielleP = factorielle($p);
$y = getY($x, $factorielleP);
// % y := getX(n, p) /  factorielle(p) %
echo "Dans l'ordre, une chance sur " . $x . " de gagner \n";
echo "Dans le désordre, une chance sur " . $y . " de gagner";
