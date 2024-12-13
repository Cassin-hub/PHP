<?php 
session_start();

if (!isset($_SESSION['mystère'])) {
    $_SESSION['mystère'] = rand(1, 10);
}

if (isset($_POST['chiffre'])) {
    $chiffre = intval($_POST['chiffre']);
}

if ($chiffre === ($_POST['chiffre'])) {
    echo 'Bravo vous avez trouvé !' . '<br>';
    unset($_SESSION['mystère']);
}

elseif ($chiffre < ($_SESSION['mystère'])) {
echo 'Plus grand !' . '<br>';
}

if ($chiffre > ($_SESSION['mystère'])) {
    echo 'Plus petit !' . '<br>';
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
        <label for="chiffre">devinez le chiffre entre 1 à 10 :</label>
        <input type="number" id="chiffre" name="chiffre">
        <button type="submit">Submit</button>
    </form>
</body>
</html>