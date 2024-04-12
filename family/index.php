<?php include(dirname(__FILE__, 2) . "/assets/src/session.php") ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Handi'OS</title>
    <meta property="og:site_name" content="Handi'OS">
    <?php include(dirname(__FILE__, 2) . "/assets/src/header.php") ?>
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/buttons.css">
</head>

<body>
    <div class="main">
        <?php include(dirname(__FILE__, 2) . "/assets/src/panels-assets/tabs.php") ?>
        <div class="main-container">
            <div class="top">
                <div class="left">
                    <h1>Tableau de bord</h1>
                    <span class="material-symbols-rounded panel-top">
                        chevron_right
                    </span>
                    <div class="rounded_type_name handi">
                        <span class="material-symbols-rounded">accessible</span>
                        <h2><?php echo $_SESSION["ho_associated_firstname"] . " " . $_SESSION["ho_associated_name"] ?></h2>
                    </div>
                </div>
            </div>
            <div class="main-content">
                <div class="frame bpm">
                    <h2>Battement par minute (BPM)</h2>
                </div>
                <div class="frame sp02">
                    <h2>Taux d'oxygène dans le sang (Sp02)</h2>
                </div>
                <div class="frame sleep">
                    <h2>Sommeil</h2>
                </div>
                <div class="frame medication">
                    <h2>Médicaments</h2>
                </div>
            </div>
        </div>
    </div>
</body>

</html>