<?php include (dirname(__FILE__, 2) . "/assets/src/session.php") ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Handi'OS</title>
    <meta property="og:site_name" content="Handi'OS">
    <?php include (dirname(__FILE__, 2) . "/assets/src/header.php") ?>
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/buttons.css">
</head>

<body>
    <div class="main">
        <?php include (dirname(__FILE__, 2) . "/assets/src/panels-assets/tabs.php") ?>
        <div class="main-container">
            <div class="top">
                <div class="left">
                    <h1>Tableau de bord</h1>
                    <span class="material-symbols-rounded panel-top">
                        chevron_right
                    </span>
                    <div class="rounded_type_name handi">
                        <span class="material-symbols-rounded">accessible</span>
                        <h2><?php echo $_SESSION["ho_associated_firstname"] . " " . $_SESSION["ho_associated_name"] ?>
                        </h2>
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
                    <div class="frame-content content-rows">
                        <div class="rem-sleep">
                            <h3>01h04</h3>
                            <h4>Sommeil paradoxal</h4>
                        </div>
                        <div class="light-sleep">
                            <h3>03h49</h3>
                            <h4>Sommeil léger</h4>
                        </div>
                        <div class="total-sleep-time">
                            <h3>06h02</h3>
                            <h4>Temps de sommeil total</h4>
                        </div>
                        <div class="deep-sleep">
                            <h3>01h09</h3>
                            <h4>Sommeil profond</h4>
                        </div>
                        <div class="awake">
                            <h3>00h59</h3>
                            <h4>Eveillé</h4>
                        </div>
                    </div>
                </div>
                <div class="frame medication">
                    <h2>Médicaments</h2>
                    <div class="frame-content content-column">
                        <div class="content-rows">
                            <div class="morning">
                                <h3>Matin</h3>
                                <h4>Pris</h4>
                            </div>
                            <div class="lunch">
                                <h3>Midi</h3>
                                <h4>Pris</h4>
                            </div>
                            <div class="afternoon">
                                <h3>Après-midi</h3>
                                <h4>Pas pris</h4>
                            </div>
                            <div class="dinner">
                                <h3>Diner</h3>
                                <h4>A venir</h4>
                            </div>
                            <div class="night">
                                <h3>Nuit</h3>
                                <h4>A venir</h4>
                            </div>
                        </div>
                        <div class="content-rows">
                            <div class="empty-line"></div>
                            <div class="circle taken"></div>
                            <div class="line full taken"></div>
                            <div class="circle taken"></div>
                            <div class="line full taken"></div>
                            <div class="circle nottaken"></div>
                            <div class="line half nottaken"></div>
                            <div class="circle notyet"></div>
                            <div class="line full notyet"></div>
                            <div class="circle notyet"></div>
                            <div class="empty-line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>