<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour07-Job07</title>
</head>
<body>
<form method="POST">
    <label>Texte : </label>
    <input type="text" name="str" required>
    <label>Transformation :</label>
    <select name="fonction">
        <option value="gras">Gras</option>
        <option value="cesar">César</option>
        <option value="plateforme">Plateforme</option>
    </select>
    <label>Décalage (pour César) :</label>
    <input type="number" name="decalage" value="2">
    <button type="submit">Transformer</button>
</form>
<?php
$alphabetMin = [
    'a','b','c','d','e','f','g','h','i','j','k','l','m',
    'n','o','p','q','r','s','t','u','v','w','x','y','z'
];
$alphabetMaj = [
    'A','B','C','D','E','F','G','H','I','J','K','L','M',
    'N','O','P','Q','R','S','T','U','V','W','X','Y','Z'
];
function estMajuscule($lettre) {
    return $lettre >= 'A' && $lettre <= 'Z';
}
function longueur($str) {
    $i = 0;
    while (isset($str[$i])) {
        $i++;
    }
    return $i;
}
// Fonction 1 : GRAS
function gras($str) {
    $i = 0;
    $mot = '';
    $res = '';
    while (isset($str[$i])) {
        $c = $str[$i];
        if ($c === ' ') {
            if (isset($mot[0]) && estMajuscule($mot[0])) {
                $res .= '<b>' . $mot . '</b>';
            } else {
                $res .= $mot;
            }
            $res .= ' ';
            $mot = '';
        } else {
            $mot .= $c;
        }
        $i++;
    }
    // Dernier mot
    if ($mot !== '') {
        if (estMajuscule($mot[0])) {
            $res .= '<b>' . $mot . '</b>';
        } else {
            $res .= $mot;
        }
    }
    return $res;
}
function cesar($str, $decalage = 2) {
    global $alphabetMin, $alphabetMaj;
    $res = '';
    $i = 0;
    while (isset($str[$i])) {
        $c = $str[$i];
        $trouve = false;
        $j = 0;
        while (isset($alphabetMin[$j])) {
            if ($c === $alphabetMin[$j]) {
                $index = ($j + $decalage) % 26;
                $res .= $alphabetMin[$index];
                $trouve = true;
                break;
            }
            $j++;
        }
        // Majuscule
        if (!$trouve) {
            $j = 0;
            while (isset($alphabetMaj[$j])) {
                if ($c === $alphabetMaj[$j]) {
                    $index = ($j + $decalage) % 26;
                    $res .= $alphabetMaj[$index];
                    $trouve = true;
                    break;
                }
                $j++;
            }
        }
        // Autre caractère
        if (!$trouve) {
            $res .= $c;
        }
        $i++;
    }
    return $res;
}
function plateforme($str) {
    $i = 0;
    $mot = '';
    $res = '';
    while (isset($str[$i])) {
        $c = $str[$i];
        if ($c === ' ') {
            $len = longueur($mot);
            if ($len >= 2 && $mot[$len - 2] === 'm' && $mot[$len - 1] === 'e') {
                $mot .= '_';
            }
            $res .= $mot . ' ';
            $mot = '';
        } else {
            $mot .= $c;
        }
        $i++;
    }
    if ($mot !== '') {
        $len = longueur($mot);
        if ($len >= 2 && $mot[$len - 2] === 'm' && $mot[$len - 1] === 'e') {
            $mot .= '_';
        }
        $res .= $mot;
    }
    return $res;
}
if (isset($_POST['str']) && isset($_POST['fonction'])) {
    $str = $_POST['str'];
    $fonction = $_POST['fonction'];
    $decalage = isset($_POST['decalage']) ? $_POST['decalage'] : 2;
    echo "<h2>Résultat :</h2>";
    if ($fonction === 'gras') {
        echo gras($str);
    } elseif ($fonction === 'cesar') {
        echo cesar($str, $decalage);
    } elseif ($fonction === 'plateforme') {
        echo plateforme($str);
    } else {
        echo "Fonction inconnue.";
    }
}
?>
</body>
</html>
