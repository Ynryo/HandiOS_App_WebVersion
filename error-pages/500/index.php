<?php include(dirname(__FILE__, 3) . "/assets/src/session.php") ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Handi'OS</title>
    <meta property="og:site_name" content="Handi'OS">
    <?php include(dirname(__FILE__, 3) . "/assets/src/header.php") ?>
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/buttons.css">
</head>

<body>
    <div class="main beta">
        <h1>Erreur<br>serveur</h1>
        <p>Nous sommes désolés, mais le système Handi'OS a eu un petit problème de serveur.<br>
            Ne vous inquiétez pas, on est déjà sur le coup 😉</p>
        <a class="button" href="/assets/src/logout.php">Déconnexion</a>
    </div>
</body>

</html>