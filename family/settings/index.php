<?php include (dirname(__FILE__, 3) . "/assets/src/session.php") ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Handi'OS</title>
    <meta property="og:site_name" content="Handi'OS">
    <?php include (dirname(__FILE__, 3) . "/assets/src/header.php") ?>
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/buttons.css">
    <script type="importmap">
    {
        "imports": {
            "@material/web/": "https://esm.run/@material/web/"
        }
    }
    </script>
    <script type="module">
        import '@material/web/all.js';
        import { styles as typescaleStyles } from '@material/web/typography/md-typescale-styles.js';

        document.adoptedStyleSheets.push(typescaleStyles.styleSheet);
    </script>
</head>

<body>
    <div class="main">
        <?php include (dirname(__FILE__, 3) . "/assets/src/panels-assets/tabs.php") ?>
        <div class="main-container">
            <?php include (dirname(__FILE__, 3) . "/assets/src/panels-assets/top.php") ?>
            <div class="main-content param">
                <md-switch icons show-only-selected-icon selected></md-switch>
                <md-switch icons show-only-selected-icon selected class="default-switches"></md-switch>
            </div>
        </div>
    </div>
</body>

</html>