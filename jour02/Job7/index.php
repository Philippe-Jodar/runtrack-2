<?php
$title = "Job7";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job7</title>
</head>
<body>
<?php
$hauteur=5;
$d=$hauteur-1;
$c=1;
for($x=0 ; $x<$hauteur ; $x++)
{
for($a=1 ; $a<=$d ; $a++)
{
echo "";
}
for($b=1 ; $b<=$c ; $b++)
{
echo "*";
}
echo "<br/>";
$d--;
$c+=2;
} 
?>
</body>
</html>