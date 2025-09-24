<?php
$title = "Job04";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job04</title>
</head>
<body>
<?php 
for ($x= 0; $x< 101; $x++)
 {
    if ($x % 15 == 0) {
        echo "FizzBuzz<br>";
    } elseif ($x % 3 == 0) {
        echo "Fizz<br>";
    } elseif ($x % 5 == 0) {
        echo "Buzz<br>";
    } else {
        echo $x . "<br>";
    }
}
?>
</body>
</html>