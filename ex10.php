<?php


    $zero = 0;
    $one = 1;
    if (isset($_POST['chiffre'])) {
        $chiffre = (int) $_POST['chiffre'];
        for ($i = 0; $i < $chiffre; $i++) {
            if ($i === 0) {
                echo $zero . '<br>';
            }
            elseif ($i === 1) {
                echo $one . '<br>';
            } else {
                $total = $zero + $one;
                echo "total est maintenant à $total <br>" ;
                echo $total . '<br>';
                $zero = $one;
                echo "zero est maintenant égal à $zero <br>";
                $one = $total;
                echo "one est maintenant égal à $one <br>";
            }
        }
    }
?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="chiffre">Quel nombre n terme voulez vous voir ? :</label>
        <input type="number" id="chiffre" name="chiffre">
        <button type="submit">Submit</button>
    </form>
   
</body>

</html>