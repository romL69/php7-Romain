<?php

// Je dois démarrer la session
// avant de pouvoir accéder à $_SESSION
session_start();
if (!isset($_SESSION['history'])) {
    $_SESSION['history'] = [];
}

$mail = 'Anonyme@mail.com';
if (isset($_GET['mail'])) {
    $mail = $_GET['mail'];
}

$_SESSION['history'][] = sprintf(
    'Heure : %s - %s',
    date('H:i:s'),
    $mail
);
//session_destroy();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Session</h1>

        <pre>
            <?php print_r($_SESSION); ?>
        </pre>
    </body>
</html>
