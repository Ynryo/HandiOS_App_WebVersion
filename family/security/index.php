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
    <div class="main">
        <?php include(dirname(__FILE__, 3) . "/assets/src/panels-assets/tabs.php") ?>
        <div class="main-container">
            <?php include (dirname(__FILE__, 3) . "/assets/src/panels-assets/top.php") ?>
            <div class="main-content security">
                <div class="cam-group">
                    <h2>Salle à manger</h2>
                    <video src="/assets/videos/cam-rushs-living-room.mp4" type="video/mp4" muted="muted" loop="loop" autoplay="autoplay" ></video>
                </div>
                <div class="cam-group">
                    <h2>Porte d'entrée</h2>
                    <video src="/assets/videos/cam-rushs-doorbell.mp4" type="video/mp4" muted="muted" loop="loop" autoplay="autoplay" ></video>
                </div>
                <div class="cam-group">
                    <h2>Cave</h2>
                    <video src="/assets/videos/cam-rushs-cellar.mp4" type="video/mp4" muted="muted" loop="loop" autoplay="autoplay" ></video>
            </div>
        </div>
    </div>
</body>

</html>