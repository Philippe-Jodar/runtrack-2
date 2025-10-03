<?php
session_start();

function initGrille() {
    return [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
}
function checkVictory($grille) {
    $lines = [];
    for ($i = 0; $i < 3; $i++) {
        $lines[] = $grille[$i];
    }
    for ($i = 0; $i < 3; $i++) {
        $lines[] = [$grille[0][$i], $grille[1][$i], $grille[2][$i]];
    }
    $lines[] = [$grille[0][0], $grille[1][1], $grille[2][2]];
    $lines[] = [$grille[0][2], $grille[1][1], $grille[2][0]];

    foreach ($lines as $line) {
        if ($line[0] !== '-' && $line[0] === $line[1] && $line[1] === $line[2]) {
            return $line[0];
        }
    }
    return null;
}
function isFull($grille) {
    foreach ($grille as $ligne) {
        foreach ($ligne as $case) {
            if ($case === '-') {
                return false;
            }
        }
    }
    return true;
}
if (!isset($_SESSION['grille']) || isset($_POST['reset'])) {
    $_SESSION['grille'] = initGrille();
    $_SESSION['joueur'] = 'X';
    $_SESSION['message'] = "";
}
if (isset($_POST['case'])) {
    list($ligne, $col) = explode(',', $_POST['case']);
    if ($_SESSION['grille'][$ligne][$col] === '-') {
        $_SESSION['grille'][$ligne][$col] = $_SESSION['joueur'];
        $gagnant = checkVictory($_SESSION['grille']);
        if ($gagnant) {
            $_SESSION['message'] = "$gagnant a gagné !";
            $_SESSION['grille'] = initGrille();
            $_SESSION['joueur'] = 'X';
        } elseif (isFull($_SESSION['grille'])) {
            $_SESSION['message'] = "Match nul !";
            $_SESSION['grille'] = initGrille();
            $_SESSION['joueur'] = 'X';
        } else {
            $_SESSION['joueur'] = $_SESSION['joueur'] === 'X' ? 'O' : 'X';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Jeu du Morpion</title>
    <style>
        body {
            background-color: #ffffff;
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            margin-bottom: 10px;
            border: 4px solid #008000; /* bordure verte autour du tableau */
            border-radius: 6px;
            background-color: #ffffff; /* fond blanc */
        }
        td {
            width: 60px;
            height: 60px;
            text-align: center;
            vertical-align: middle;
            border: 3px solid #008000; /* bordure verte des cases */
            background-color: #f9fff9; /* très léger fond vert pâle pour les cases */
        }
        button {
            width: 100%;
            height: 100%;
            font-size: 28px;
            background-color: #ffffff; /* fond blanc des boutons */
            border: none;
            cursor: pointer;
            font-weight: bold;
            color: #008000; /* par défaut vert (on affiche '-' ici) */
        }
        button:hover {
            background-color: #ddffdd; /* survol vert clair */
        }
        .joueur-x {
            color: green; /* X en vert */
            font-weight: bold;
            font-size: 28px;
        }
        .joueur-o {
            color: black; /* O en noir */
            font-weight: bold;
            font-size: 28px;
        }
        #message {
            font-weight: bold;
            margin-bottom: 10px;
            font-size: 18px;
            color: #006600;
        }
        #reset {
            padding: 8px 16px;
            font-size: 16px;
            background-color: #008000;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        #reset:hover {
            background-color: #006600;
        }
    </style>
</head>
<body>
    <h1>Jeu du Morpion</h1>
    <p>Joueur en cours : <strong><?= $_SESSION['joueur'] ?></strong></p>
    <form method="post">
        <table>
            <?php for ($i=0; $i<3; $i++): ?>
            <tr>
                <?php for ($j=0; $j<3; $j++):
                    $val = $_SESSION['grille'][$i][$j]; ?>
                    <td>
                        <?php if ($val === '-'): ?>
                            <button type="submit" name="case" value="<?= "$i,$j" ?>">-</button>
                        <?php elseif ($val === 'X'): ?>
                            <span class="joueur-x"><?= $val ?></span>
                        <?php else: ?>
                            <span class="joueur-o"><?= $val ?></span>
                        <?php endif; ?>
                    </td>
                <?php endfor; ?>
            </tr>
            <?php endfor; ?>
        </table>
        <button id="reset" type="submit" name="reset" value="1">Réinitialiser la partie</button>
    </form>
    <div id="message"><?= $_SESSION['message'] ?></div>
</body>
</html>