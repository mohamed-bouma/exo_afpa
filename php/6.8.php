<?php

function is_negative()
{

    $negativeCount = 0;
    $positiveCount = 0;
    $array_size = readline("Type the number of cells :");
    for ($i = 0; $i < $array_size; $i++) {
        $value = readline("Enter the value : ");
        if ($value > 0) {
            $positiveCount++;
        } elseif ($value < 0) {
            $negativeCount++;
        }
    }
    echo "There are " . $positiveCount . " positive numbers.\n";
    echo "There are " . $negativeCount . " negative numbers.";
}

is_negative();
