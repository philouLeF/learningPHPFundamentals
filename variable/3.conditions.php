<?php

$now = date('H:i');

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
<p>

<?php
$hour=idate("H");
$minut=idate("i");

echo "The time is $hour:$minut<br>";
if($hour < 9 AND $hour > 5){
    echo "Good Morning";
}else if(($hour >= 9 AND $minut >=1) AND ($hour <= 12 AND $minut>=0)){
    echo 'Good day!';
}else if (($hour >=12 AND $minut>=1) AND ($hour <= 16 AND $minut>=0)){
    echo 'Good Afternoon!';
} else if (($hour >=16 AND $minut>=1) AND ($hour <= 21 AND $minut>=0)){
    echo 'Good evening!';
} else {
    echo 'Good night !';
}

?>
</p>
</body>
</html>