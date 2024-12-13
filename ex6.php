<?php
function functionText()
{
    if (isset($_GET['texte']) && strlen($_GET['texte'])) {
        $texte = $_GET['texte'];
        echo 'Longueur de la chaîne ' . strlen($texte) . '<br>';
        echo 'Les 5 premiers caractères sont ' . substr($texte, 0, 5) . '<br>';
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
    <form action="" method="get">
        <label for="text">Entrez un text :</label>
        <input type="text" id="texte" name="texte">
        <button type="submit">Submit</button>
    </form>
    <?php
    functionText();
    ?>
</body>

</html>