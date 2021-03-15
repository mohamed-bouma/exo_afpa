<?php
$tab = [];

function tableau($tab)
{
    $array_size = readline("Entrez le nombre de valeurs : ");
    for ($i = 0; $i < $array_size; $i++) {
        $tab[$i] = readline("type the value : ");
    }
}


function tri($t, $is_ascendent)
{

    for ($i = 0; $i < count($t); $i++) {
        $selectedElement = $t[$i];
        $selectedIndex = $i;
        for ($j = $i + 1; $j < count($t); $j++) {
            if (($is_ascendent && $t[$j] < $selectedElement) || (!$is_ascendent && $t[$j] > $selectedElement)) {
                $selectedIndex = $j;
            }
        }
        if ($i != $selectedIndex) {
            $temp = $t[$i];
            $t[$i] = $t[$selectedIndex];
            $t[$selectedIndex] = $temp;
        }
    }
    echo tableau($t);
}

tri($tab, true);

// $tab = array();

// function tableau($tab)
// {
//     $array_size = readline("Entrez le nombre de valeurs : ");
//     for ($i = 0; $i < $array_size; $i++) {
//         $tab[$i] = readline("type the value : ");
//     }
// }


// function tri($array)
// {
//     for ($i = 0; $i < count($array); $i++) {
//         $min = $array($i);
//         $indexMin = $i;
//         for ($j = $i + 1; $j < count($array); $j++) {
//             if ($array($j) < $min) {
//                 $indexMin = $j;
//             }
//         }
//         if ($i != $indexMin) {
//             $temp = $array[$i];
//             $array[$i] = $array[$indexMin];
//             $array[$indexMin] = $temp;
//         }
//     }
// }

// // function print_tab($array)
// // {
// //     for ($i = 0; $i < count($array); $i++) {
// //         echo $array[$i] . "\n";
// //     }
// // }

// tableau($tab);

// // print_tab($tab);
