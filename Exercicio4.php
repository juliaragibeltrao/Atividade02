<?php

$value = 11;
$ultimo = 1;
$penultimo = 0;

echo '1';

for($i = 1; $i <= $value -2; $i++) {
	$atual = $ultimo + $penultimo;
	echo $atual;
	
	$penultimo = $ultimo;
	$ultimo = $atual;
}