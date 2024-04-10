<?php
include(dirname(__FILE__, 1) . "/assets/src/session.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Handi'OS</title>
    <link rel="stylesheet" href="/HandiOS-Plakat-Style/style.css" />
  </head>
  <body>
    <div class="vague-top">
      <div class="top">
        <img class="plakat" src="/HandiOS-Plakat-Style/handiOS-Plakat.png" />
        <a class="button" href="/assets/src/logout.php">Déconnexion</a> <!-- vers fichier de déco en php (redirect faite dans le fichier php) -->
      </div>
      <svg class="ttp" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#2f7cd3"
          fill-opacity="1"
          d="M0,160L48,165.3C96,171,192,181,288,181.3C384,181,480,171,576,192C672,213,768,267,864,282.7C960,299,1056,277,1152,250.7C1248,224,1344,192,1392,176L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
        ></path>
      </svg>
    </div>
    <div class="categories">
      <div class="Santé">
        <a href="https://specstech.fr/">
          <img class="tpmp" src="/HandiOS-Plakat-Style/Handi plakat.png" />
        </a>
      </div>
      <div class="Rappels">
        <img class="tpmp" src="/HandiOS-Plakat-Style/Handi plakat.png" />
      </div>
      <div class="Contacts">
        <img class="tpmp" src="/HandiOS-Plakat-Style/Handi plakat.png" />
      </div>
      <div class="Sécurité">
        <img class="tpmp" src="/HandiOS-Plakat-Style/Handi plakat.png" />
      </div>
    </div>
    <!-- #2f7cd3 pour le bg -->
    <div class="block">
      <div class="vague">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#2f7cd3"
            fill-opacity="1"
            d="M0,224L48,234.7C96,245,192,267,288,261.3C384,256,480,224,576,192C672,160,768,128,864,138.7C960,149,1056,203,1152,213.3C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
          ></path>
        </svg>
      </div>
      <div class="block">
        <section class="about"></section>
      </div>
    </div>
  </body>
</html>
