<?php

// $age = readline ("Saisir l'age : ");

// if($age >= 12){
// 	    echo("cadet");
//     }
//     elseif ($age > 9){
//         echo "minime";
//     }
//     elseif($age > 7){
//         echo "pupille";
//     }
//     elseif ($age > 5){
//         echo "poussin";
//     }
// else{
//     echo "Hors catégorie";
//     }
	

//     $heures = readline ("Saisir l'heure :");
//     $minutes = readline ("Saisir la minute :");	
//     $secondes = readline ("Saisir la seconde :");
	
// 	if($secondes == 59 && $minutes == 59 && $heures == 23){
// 			$secondes = 0;
// 			$minutes = 0;
// 			$heures = 0;
// 		}
// 		elseif ($secondes == 59 && $minutes == 59){
// 				$secondes = 0;
// 				$minutes = 0;
// 				$heures += 1;
// 			}
// 			elseif($secondes == 59){
// 					$secondes = 0;
// 					$minutes += 1;
// 				}
// 				else{
// 					$secondes += 1;
//                 }
                
//    echo "Dans une seconde il sera : ". $heures .":". $minutes.":". $secondes;

// $copies = readline ("nombre de copies :");

// if($copies < 11) {
// 	$prix = 0.1 * $copies;
// } elseif ($copies < 31) {
// 			$prix = 1 + ($copies - 10) * 0.09; 
// 		} 
//         else {
// 				$prix = 1 + (20 * 0.09) + ($copies - 30) * 0.08;
// 			}
// echo $prix

// function estImposable($age, $sexe){
	
// 	$estFemmeImposable = $sexe == "F" && $age > 18 && $age < 35;
// 	$estHommeImposable = $sexe == "H" && $age > 20;
	
// 	if($estFemmeImposable || $estHommeImposable) {
// 		return true;
// 	} 
//     else {
// 		return false;
// 	}
// }

// 	$age = readline ("Saisissez l'age :");
// 	$sexe = readline ("Saisissez le sexe :");
	
//     if(estImposable($age, $sexe)){
// 		echo "Imposable";
// 	} 
//     else {
// 		echo "Non imposable";
// 	}

// function election($c1,$c2,$c3,$c4) {
//     $estElimine = $c2 > 50 || $c3 > 50 || $c4 > 50 || $c1 < 12.5;
//     $estFavorable = $c1 > $c2 && $c1 > $c3 && $c1 > $c4;
//     if ($estElimine){
//         echo "Candidat 1 battu";
//     } else if ($c1 > 50){
//                 echo "Candidat 1 élu";
//             } else if($c1 >= 12.5 && $estFavorable){
//                         echo "Candidat 1 au deuxieme tour en ballottage favorable";
//                     } else if ($c1 >= 12.5){
//                         echo "Candidat 1 au deuxieme tour en ballottage défavorable";
//                             }
// }

// $c1= readline("saisir le scrore candidat 1 :");
// $c2= readline("saisir le scrore candidat 2 :");
// $c3= readline("saisir le scrore candidat 3 :");
// $c4= readline("saisir le scrore candidat 4 :");
// election($c1,$c2,$c3,$c4);

