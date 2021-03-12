<?php

function addition()
{

	$n = readline("Saisir un nombre : ");
	$result = 0;
	for ($i = 1; $i <= $n; $i++) {
		$result = $result + $i;
	}
	echo $result;
}

addition();
