<?php
$title = "Job03";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DJob03</title>
</head>
<body>
<?php 
for ($x= 0; $x< 101; $x++)
 {
    if ($x % 15 == 0) {
        echo "FizzBuzz\n<br>";
    } elseif ($x % 3 == 0) {
        echo "Fizz\n<br>";
    } elseif ($x % 5 == 0) {
        echo "Buzz\n<br>";
    } else {
        echo $x . "\n<br>";
    }
}
?>
</body>
</html>