<?php
$continua = true;
$sorteio = rand(1,100);
$tentativa = 0;

while ($continua){
    $tentativa = readline("Tente adivinhar o valor: ");
    if($tentativa == $sorteio){
        echo "parabens!!!" . PHP_EOL;
        $continua = false;
        break;
    }
    if ($tentativa > $sorteio) {
        echo "é menor" . PHP_EOL;
    }else {
        echo "é maior" . PHP_EOL;
    }
}
echo "Terminou..."  . PHP_EOL;