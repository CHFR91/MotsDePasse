<?php
session_start();
?>
<?php require_once("0_fichier.php") ?>

<?php

if (isset($_SESSION['identifiant'])) {

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $dbsite = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);

        $connect = $dbsite->prepare("DELETE FROM mdp WHERE id='$id'");
        $connect->execute();

        header("Location: interface.php");
        die();
    }
} else {
    erreur("Vous n\'êtes pas connecté.");
}
