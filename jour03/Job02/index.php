<?php
$title = "Job02";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job02</title>
</head>
<body>
    <?php
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$a= 0;
    while (isset($str[$a])) {
    if ($a % 2 == 0) {
        echo $str[$a];
}
$a++;
}
    ?>
</body>
</html>
