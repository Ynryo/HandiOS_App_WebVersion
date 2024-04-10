<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Handi'OS - Connexion</title>
    <?php include(dirname(__FILE__, 2) . "/assets/src/header.php") ?>
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/inputs.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/buttons.css">
</head>

<body>
    <div class="form-frame">
        <img src="/assets/logo/handios-main.png" alt="Logo" srcset="/assets/logo/handios-main.png">
        <h1>Connexion</h1>
        <h2>Utilisez les services de Handi'OS</h2>
        <?php
        session_start();
        if (!isset($_SESSION["hos_session_id"])) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $email_input = strip_tags($_POST["email"]);
                $password_input = strip_tags($_POST["password"]);
                include(dirname(__FILE__, 2) . "/assets/src/connection.php");

                $sql = "SELECT * FROM users WHERE email = '$email_input'";
                $result = $conn->query($sql);
                $ip_adress = get_client_ip();
                $date = date("Y-m-d");
                $time = date("H:i:s");

                if ($result->num_rows == 1) {
                    // Utilisateur trouvé, vérifier le mot de passe
                    $row = $result->fetch_assoc();
                    $email = $row["email"];
                    $user_id = $row["id"];
                    $user_type = $row["user_type"];
                    if (password_verify($password_input, $row["password"])) {
                        session_start(['cookie_lifetime' => 86400]);
                        $_SESSION["hos_session_id"] = bin2hex(random_bytes(32));
                        $_SESSION["hos_user_id"] = $row["id"];
                        $_SESSION["hos_user_type"] = $row["user_type"];
                        $_SESSION["ho_user_name"] = $row["name"];
                        $_SESSION["ho_user_firstname"] = $row["firstname"];
                        $_SESSION["association_code"] = $row["association_code"];
                        $sql = "SELECT * FROM `users` WHERE association_code = \"" . $_SESSION["association_code"] . "\" AND (user_type = \"senior\" OR user_type = \"handicap\");";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        $_SESSION["ho_associated_name"] = $row["name"];
                        $_SESSION["ho_associated_firstname"] = $row["firstname"];
                        $sql = "INSERT INTO `connections_logs`(`email`, `user_id`, `ip_adress`, `date`, `time`, `success`) VALUES ('$email','$user_id','$ip_adress','$date','$time',true)";
                        $conn->query($sql);
                        // if ($user_type == "nurse" || $user_type == "family") {
                        echo "<p class=\"success\">Connected</p>";
                        if ($user_type == "admin") {
                            header("Location: https://handios-app.specstech.fr/family/", true);
                        } else {
                            header("Location: https://handios-app.specstech.fr/" . $user_type . "/", true);
                        }
                        // } else {
                        //     echo "<p class=\"warning\">Vous ne pouvez pas utiliser ce type de compte.<br>Vous pouvez uniquement l'utiliser sur la tablette connectée Handi'OS.</p>";
                        // }
                    } else {
                        // Mot de passe incorrect
                        $sql = "INSERT INTO `connections_logs`(`email`, `user_id`, `ip_adress`, `date`, `time`, `success`) VALUES ('$email','$user_id','$ip_adress','$date','$time',false)";
                        $conn->query($sql);
                        echo "<p class=\"error\">Informations d'identification incorrectes.</p>";
                    }
                } else {
                    // Utilisateur non trouvé
                    $sql = "INSERT INTO `connections_logs`(`email`, `user_id`, `ip_adress`, `date`, `time`, `success`) VALUES (NULL,NULL,'$ip_adress','$date','$time',false)";
                    $conn->query($sql);
                    echo "<p class=\"error\">Informations d'identification incorrectes.</p>";
                }

                $conn->close();
            }
        } else {
            if ($_SESSION["hos_user_type"] == "admin") {
                header("Location: https://handios-app.specstech.fr/family/", true);
            } else {
                header("Location: /" . $_SESSION["hos_user_type"] . "/");
            }
        }
        ?>
        <form action="/login/" method="post">
            <div class="form__group">
                <input type="email" id="email" class="form__field" placeholder="" name="email" required>
                <label for="email" class="form__label">E-mail</label>
            </div>
            <div class="form__group">
                <input type="password" id="password" class="form__field" placeholder="" name="password" required>
                <label for="password" class="form__label">Mot de passe</label>
            </div>
            <div class="bottom-buttons-form">
                <a href="/signup/" class="button secondary-button">Je n'ai pas de compte</a>
                <input type="submit" value="Se connecter" class="button">
            </div>
        </form>
    </div>
</body>

</html>