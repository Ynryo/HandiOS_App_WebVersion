<?php
session_start(['cookie_lifetime' => 86400]);
if (!isset($_SESSION["hos_session_id"]) and !isset($_SESSION["hos_user_id"]) and $_SERVER["REQUEST_URI"] !== "/signup/" and $_SERVER["REQUEST_URI"] !== "/login/") {
    header("Location: /login/");
} else {
    if ($_SESSION["hos_user_type"] == "admin" and !str_contains($_SERVER["REQUEST_URI"], "/family/")) {
        header("Location: /family/");
    } else if ($_SESSION["hos_user_type"] !== "admin" and !str_contains($_SERVER["REQUEST_URI"], "/error-pages/")) {
        //si t'es connecté, pas admin et que t'as pas d'erreur
        header("Location: /error-pages/beta/");
    }
}