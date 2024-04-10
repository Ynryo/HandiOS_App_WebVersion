<?php
if ($_SESSION["hos_user_type"] !== "admin") {
    echo "<div class=\"beta\">
    <h2>En cours de développement</h2>
    <p>Nous sommes désolés, mais Handi'OS est en cours de développement pour encore mieux vous servir.<br>
        Ne vous inquiétez pas, on arrive bientôt sur vos écrans 😉</p>
</div>
<a class=\"button\" href=\"/assets/src/logout.php\">Déconnexion</a>";
} else {
    include(str_replace("/", "", $_SERVER["REQUEST_URI"]) . "-page.php");
}
