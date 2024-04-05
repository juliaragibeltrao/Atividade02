<?php

function cowsay($message) {
    $cow = <<<COW
        < $message >
         \   ^__^
          \  (oo)_______
             (__)\       )\
                 ||----w|| \\
                   
COW;
    echo $cow . PHP_EOL;
}

cowsay("olá, boraa Julia!");

?>