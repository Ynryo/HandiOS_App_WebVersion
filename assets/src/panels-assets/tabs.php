<div class="sidebar">
    <img src="/assets/favicon/handios-favicon.png" alt="" srcset="/assets/favicon/handios-favicon.png">
    <div class="tabs">
        <a href="/family/" <?php echo ($_SERVER["REQUEST_URI"] == "/family/")? "class=\"active\"" : "" ?>>
            <span class="material-symbols-rounded">
                health_metrics
            </span>
        </a>
        <a href="/family/home-automation/" <?php echo (str_contains($_SERVER["REQUEST_URI"], "/home-automation/"))? "class=\"active\"" : "" ?>>
            <span class="material-symbols-rounded">
                home
            </span>
        </a>
        <a href="/family/security/" <?php echo (str_contains($_SERVER["REQUEST_URI"], "/security/"))? "class=\"active\"" : "" ?>>
            <span class="material-symbols-rounded">
                vpn_key
            </span>
        </a>
        <a href="/family/settings/" <?php echo (str_contains($_SERVER["REQUEST_URI"], "/settings/"))? "class=\"active\"" : "" ?>>
            <span class="material-symbols-rounded">
                settings
            </span>
        </a>
    </div>
    <img class="account-picture" id="account-picture" src="/assets/users_assets/accounts_pictures/ewen_atide-klein.jpg" alt="" srcset="/assets/users_assets/accounts_pictures/ewen_atide-klein.jpg">
    <div class="account-modal" id="account-modal">
        <div class="rounded_type_name family">
            <span class="material-symbols-rounded">family_home</span>
            <h2><?php echo $_SESSION["ho_user_firstname"] . " " . $_SESSION["ho_user_name"] ?></h2>
        </div>
        <a class="button" href="/assets/src/logout.php">Déconnexion</a>
    </div>
    <script src="/assets/js/modals.js"></script>
</div>
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
        <div>
            <p>Grid 1</p>
        </div>
        <div>
            <p>Grid 2</p>
        </div>
        <div>
            <p>Grid 3</p>
        </div>
        <div>
            <p>Grid 4</p>
        </div>
    </div>
</div>