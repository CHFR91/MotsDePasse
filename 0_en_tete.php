<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <?php
    if ($valeur == 1) {
        echo "<title>Générateur de mots de passe</title>\n";
    } elseif ($valeur == 2) {
        echo "<title>Les mots de passe : Présentation</title>\n";
    } elseif ($valeur == 3) {
        echo "<title>Gestionnaire de mots de passe : Connexion</title>\n";
    } elseif ($valeur == 4) {
        echo "<title>Gestionnaire de mots de passe : Ouvrir un compte</title>\n";
    } elseif ($valeur == 5) {
        echo "<title>Interface de gestion des mots de passe</title>\n";
    } elseif ($valeur == 6) {
        echo "<title>Ajouter un mot de passe</title>\n";
    }
    ?>
</head>

<body>

    <nav class="nav nav-inline">
        <ul>
            <?= ($valeur == 1) ? '<li class="active"' : '<li' ?>><a href="mdpgen.php">Générateur de mots de passe</a></li>
            <?= ($valeur == 2) ? '<li class="active"' : '<li' ?>><a href="presentation.php">Au sujet de ce site</a></li>
            <?= ($valeur == 3) ? '<li class="active"' : '<li' ?>><a href="login.php">Gestionnaire de mots de passe</a></li>
            <?php
            if (isset($_SESSION["identifiant"])) {
                echo '<li class="right"><a href="logout.php">Deconnexion</a></li>';
                echo '<li class="right"><a href="interface.php">Admin du Gestionnaire</a></li>';
            }
            ?>
        </ul>
    </nav>

    <?php
    if ($valeur == 0) {
        echo "\n";
    } elseif ($valeur == 1) {
        echo "<header>\n";
        echo "        <h1>Générateur de mots de passe</h1>\n";
        echo "    </header>\n";
        echo "\n";
    } elseif ($valeur == 2) {
        echo "<header>\n";
        echo "        <h1>Les mots de passe : Présentation</h1>\n";
        echo "    </header>\n";
        echo "\n";
    } elseif ($valeur == 3) {
        echo "<header>\n";
        echo "        <h1>Gestionnaire de mots de passe : Connexion</h1>\n";
        echo "    </header>\n";
        echo "\n";
    } elseif ($valeur == 4) {
        echo "<header>\n";
        echo "        <h1>Gestionnaire de mots de passe : Ouvrir un compte</h1>\n";
        echo "    </header>\n";
        echo "\n";
    } elseif ($valeur == 5) {
        echo "<header>\n";
        echo "        <h1>Interface de gestion des mots de passe</h1>\n";
        echo "    </header>\n";
        echo "\n";
    } elseif ($valeur == 6) {
        echo "<header>\n";
        echo "        <h1>Ajouter un mot de passe</h1>\n";
        echo "    </header>\n";
        echo "\n";
    }
