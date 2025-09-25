<?php
$title = "Job01";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job01</title>
</head>
<body>
<?php
$nombre= [200, 204, 173, 98, 171, 404, 459];
for ($a= 0; $a< 7; $a++) {
    $x= $nombre[$a];

    if ($x% 2== 0) {
        echo $x . " est pair<br>";
    } else {
        echo $x . " est impair<br>";
    }
}
?>
</body>
</html>