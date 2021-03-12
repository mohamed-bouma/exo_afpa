<?php

function getSomme()
{
    $somme = 0;
    do {
        $prix = readline("Saisir le prix : ");
        $somme = $somme + $prix;
    } while ($prix != 0);
    return $somme;
}

function afficher_coupons($rendu)
{
    while ($rendu > 0) {
        if ($rendu >= 10) {
            echo "10 €";
            $rendu = $rendu - 10;
        } elseif ($rendu >= 5) {
            echo "5 €";
            $rendu = $rendu - 5;
        } else {
            echo "1 €";
            $rendu = $rendu - 1;
        }
    }
}

$somme = getSomme();
echo "La somme des achats est de : " . $somme . "\n";

$paiement = readline("Saisir le paiement : ");
$rendu = $paiement - $somme;

afficher_coupons($rendu);
