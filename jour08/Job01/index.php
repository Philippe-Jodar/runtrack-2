<?php
session_start();
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}
if (isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites']++;
} else {
    $_SESSION['nbvisites'] = 1;
}
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre de visites</title>
</head>
<body>
    <p>Nombre de visites : <?php echo $_SESSION['nbvisites']; ?>
    </p>
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>