<meta charset="UTF-8">
<meta name="theme-color" content="#fff">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Ynryo">
<meta property="og:site_name" content="Handi'OS">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<link rel="icon" type="image/png" href="/assets/favicon/handios-favicon.png">
<!-- <link rel="manifest" href="/app.webmanifest"> -->

<?php
if ((str_contains($_SERVER["REQUEST_URI"], "/family/") || str_contains($_SERVER["REQUEST_URI"], "/nurse/") || str_contains($_SERVER["REQUEST_URI"], "/senior/") || str_contains($_SERVER["REQUEST_URI"], "/handicap/"))) {
    echo "<link rel=\"stylesheet\" href=\"/assets/css/panels/sidebar.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/panels/main-content.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200\" />
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js\"></script>";
} else {
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/beta.css\">";
}

// && $_SESSION["hos_user_type"] == "admin"
?>