<?php
session_start();
if (isset($_POST['reset'])) {
    setcookie('nbvisites', '', time() -3600);
$nbvisites = 0;
    echo "Nombre de visites : " . $nbvisites;
    exit;
}else{
}
if (isset($_COOKIE['nbvisites'])) {
     $nbvisites = (int)$_COOKIE['nbvisites']+1;
} else {
    $nbvisites = 1;
}
//setcookie("nom", valeur, expiration)
setcookie('nbvisites',$nbvisites, time() + 3600);
echo  "Nombre de visites : " . $nbvisites;
?>
<!DOCTYPE html> 
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour08-Job02(Cookie)</title>
</head>
<body>
    <form method="post">
        <button type="submit" name="reset">Reset</button>
</body>
</html>