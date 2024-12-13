<?php 
if (isset($_POST['nom1'])) {
$nom1 = ($_POST['nom1']);
intval($nom1);
}
if (isset($_POST['nom2'])) {
    $nom2 = ($_POST['nom2']);
    intval($nom2);
    }
echo $nom1 + $nom2;
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
        <label for="nom1">Entrez un nombre :</label>
        <input type="number" id="nom1" name="nom1">
        <label for="nom2">Entrez un nombre :</label>
        <input type="number" id="nom2" name="nom2">
        <button type="submit">Submit</button>
    </form>
</body>
</html>