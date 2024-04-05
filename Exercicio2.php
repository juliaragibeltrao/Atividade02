<?php
$numero = 20; 

echo "Os divisores de $numero são: ";
for ($i = 1; $i <= $numero; $i++) {
    if ($numero % $i == 0) {
        echo "$i ";
    }
}
echo "\n";
?>