<?php
$name = "Philippe";
$age = 23;
$eyeColor = "blue green";
$family = array(
    0 => 'Yvette', 
    1 => 'Philippine', 
    2 => 'Christophe', 
    3 => 'Isabelle', 
    4 => 'Ludovic');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Hi! My name is <?php echo $name ?></p>
    <p>I am <?php echo $age ?> years old</p>
    <p>My eyes are <?php echo $eyeColor ?></p>
    <p>The first person in my family is <?php echo $family[0] ?></p>
</body>
</html>