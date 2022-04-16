<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur d'excuses</title>
</head>
<body>

    <form action="" method="get">

        Nom de l'enfant : <input type="text" name="name"><br>
        Fille ou garçon : <input type="radio" name="gender" value="girl">Fille <input type="radio" name="gender" value="boy">Garçon <br>
        Nom du/de la professeur.e : <input type="text" name="teacher"><br>
        Cause : <br>
        <input type="radio" name="cause" value="gatro">Gastro <br>
        <input type="radio" name="cause" value="fièvre">Fièvre <br>
        <input type="radio" name="cause" value="covid">Covid <br>

        <input type="submit">
    </form>

<?php

    $name = $_GET['name'];
    $gender = $_GET['gender'];
    $teacher = $_GET['teacher'];
    $reason = $_GET['cause'];

    echo '<p>pour cause de '. $reason .'</p>'

?>

</body>
</html>