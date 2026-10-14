<?php
    require_once(__DIR__ . '\config\config.php');
    require_once(__DIR__ . '\config\auth.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <a href="<?= BASE_URL ?>/views/auth/logout.php">Log out</a>
   <ul>
    <li>
        <h1>Korisnik</h1>
        <ol>
            <li><a href="views/klijenti/list.php">Lista klijenata</a></li>
            <li><a href="views/klijenti/add.php">Dodaj klijenta</a></li>
        </ol>
    </li>
   </ul>
</body>
</html>