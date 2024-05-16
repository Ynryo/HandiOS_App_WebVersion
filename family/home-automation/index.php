<?php include (dirname(__FILE__, 3) . "/assets/src/session.php") ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Handi'OS</title>
    <meta property="og:site_name" content="Handi'OS">
    <?php include (dirname(__FILE__, 3) . "/assets/src/header.php") ?>
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/buttons.css">
</head>

<body>
    <div class="main">
        <?php include (dirname(__FILE__, 3) . "/assets/src/panels-assets/tabs.php") ?>
        <div class="main-container">
            <?php include (dirname(__FILE__, 3) . "/assets/src/panels-assets/top.php") ?>
            <div class="main-content dom">
                <div class="frame" item-type="door">
                    <div class="item-top">
                        <div class="dom-item-icon">
                            <span class="material-symbols-rounded">
                                lock
                            </span>
                        </div>
                        <div class="item-desc">
                            <h4>Porte d'entrée</h4>
                            <p>Verrouillée</p>
                        </div>
                    </div>
                    <div class="buttons">
                        <a href="" class="button">
                            <span class="material-symbols-rounded">
                                lock_open
                            </span>
                        </a>
                    </div>
                </div>
                <div class="frame" item-type="blind">
                    <div class="item-top">
                        <div class="dom-item-icon">
                            <span class="material-symbols-rounded">
                                roller_shades
                            </span>
                        </div>
                        <div class="item-desc">
                            <h4>Volet du salon</h4>
                            <p>Ouvert</p>
                        </div>
                    </div>
                    <div class="buttons">
                        <a href="" class="button">
                            <span class="material-symbols-rounded">
                                arrow_upward
                            </span>
                        </a>
                        <a href="" class="button">
                            <span class="material-symbols-rounded">
                                pause
                            </span>
                        </a>
                        <a href="" class="button">
                            <span class="material-symbols-rounded">
                                arrow_downward
                            </span>
                        </a>
                    </div>
                </div>
                <div class="frame" item-type="light">
                    <div class="item-top">
                        <div class="dom-item-icon">
                            <span class="material-symbols-rounded">
                                lightbulb
                            </span>
                        </div>
                        <div class="item-desc">
                            <h4>Lumière du salon</h4>
                            <p>Allumée</p>
                        </div>
                    </div>
                    <div class="buttons">
                        <a href="" class="button">
                            <span class="material-symbols-rounded">
                                light_off
                            </span>
                        </a>
                    </div>
                </div>
                <div class="frame" item-type="camera">
                    <video src="/assets/cameras-rushs/living-room.mp4" ></video>
                </div>
            </div>
        </div>
    </div>
</body>

</html>