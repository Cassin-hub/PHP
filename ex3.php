<?php 
if (isset($_GET['chiffre'])) {
$chiffre = ($_GET['chiffre']);
}
if ($chiffre > 0) {
echo 'Positif';
}
elseif ($chiffre < 0) {
    echo 'Négatif';
}
else {
    echo 'Nul';
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
    <form action="" method="get">
        <label for="chiffre">Entrez un nombre :</label>
        <input type="number" id="chiffre" name="chiffre">
        <button type="submit">Submit</button>
    </form>
</body>
</html>