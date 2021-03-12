<?php

function exo_6_5()
{
    $n[0] = 1;
    echo $n[0] . "\n";

    for ($i = 1; $i <= 5; $i++) {
        $n[$i] = $n[$i - 1] + 2;
        echo $n[$i] . "\n";
    }
}

exo_6_5();
