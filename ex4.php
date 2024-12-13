<?php
$notes = [1, 2, 3, 4, 5];
$zero = 0;

for ($i = 0; $i < count($notes); $i ++) {
    $zero = $notes[$i];
}
    echo 'La somme de la boucle est de ' . $zero . '<br>';
    
    $moyenne = $zero / count($notes);

   echo 'La moyenne du tableau est ' . $moyenne . '<br>';
?>