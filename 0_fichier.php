<?php
// constante connexion

define('DB_HOST', 'localhost');
define('DB_NAME', 'mdp_mill');
define('DB_USER', 'root');
define('DB_PASSWORD', '20juin02');

// constante ACTIF (1/0) site avec inscription et ajout de mdp (1) ou non (0)
define('ACTIF', 1);

// variable expediteur utilisée lors de la création d'un compte user pour l'envoi du lien, du login et du mot de passe
$expediteur = "admin@generateur.fr";

// génération d'un mdp de 24 caractères
$mdp = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!-\$_()&*+?%.<>:;.,^=";
$mdp = substr(str_shuffle($mdp), 0, 24);

// cryptage du mot de passe
function mdpCrypt(string $mot)
{
    return password_hash($mot, PASSWORD_DEFAULT);
}

// nettoyage des données reçues (nom + prenom dans la table users)

function nettoyage($donnees)
{
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = addslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}

// message d'erreur

function erreur(string $message)
{
    echo '<div class="alert alert--danger color-danger my5">';
    echo '<span class="alert--closebtn" onclick="this.parentElement.style.display=\'none\';">x</span>';
    echo $message;
    echo '</div>';
}

// mélangeage et démélangeage

function encrypt($key, $payload)
{
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted = openssl_encrypt($payload, 'aes-256-cbc', $key, 0, $iv);
    return base64_encode($encrypted . '::' . $iv);
}

function decrypt($key, $garble)
{
    list($encrypted_data, $iv) = explode('::', base64_decode($garble), 2);
    return openssl_decrypt($encrypted_data, 'aes-256-cbc', $key, 0, $iv);
}

// récupérer l'email utilisateur en fonction de l'ID

function idEmail(int $id)
{
    $dbsite = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);

    $connect = $dbsite->prepare("SELECT * FROM users WHERE id='$id'");
    $connect->execute();
    $recupere = $connect->fetch(PDO::FETCH_ASSOC);

    return $recupere['email'];
}

// mise en forme de la date en français avec heure

function dateC(array $n)
{
    setlocale(LC_TIME, "fr_FR");
    return strftime("%d %B %G à %H:%M", strtotime($n['created_at']));
}

function dateM(array $n)
{
    setlocale(LC_TIME, "fr_FR");
    return strftime("%d %B %G à %H:%M", strtotime($n['modified_at']));
}
