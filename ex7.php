<?php 
function functionAge() {
$ages = ['Nicolas' => 33, 'Marc' => 28, 'Samuel' => 20];
asort($ages);
foreach ($ages as $key => $value) {
    echo $key . ' a ' . $value . ' ans<br>';
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
    <?php
    functionAge();
    ?>
</body>
</html>