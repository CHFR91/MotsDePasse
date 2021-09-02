<?php
session_start();
?>
<?php $valeur = 0 ?>
<?php require_once("0_en_tete.php") ?>
<?php require_once("0_fichier.php") ?>
<main>

    <?php
    if (isset($_SESSION['identifiant'])) {

        $user = $_SESSION['identifiant'];
        $key = idEmail($_SESSION['identifiant']);

        $partie = date("Y-m-j-siH");
        $element = $user . "-" . $partie . ".txt";
        $myfile = fopen($element, "w") or die("Unable to open file!");

        $dbsite = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);

        $connect = $dbsite->prepare("SELECT * FROM mdp WHERE user_id='$user' ORDER BY titre");
        $connect->execute();
        $compter = $connect->rowCount();

        if ($compter == 0) {
            // vérification de l'user_id (s'il ne le trouve pas, c'est 0)

            erreur('Aucun mot de passe dans le gestionnaire !');
        } else {

            $recupere = $connect->fetchAll(PDO::FETCH_ASSOC);
            $txt = "Titre;login;password;email;url;data1;data2;data3;text;date\n";

            foreach ($recupere as $valeur => $n) {
                $txt .= ucfirst($n['titre']) . ";" . $n['login'] . ";" . decrypt($key, $n['password']) . ";" . $n['email'] . ";" . $n['url'] . ";" . $n['data1'] . ";" . $n['data2'] . ";" . $n['data3'] . ";" . $n['text'] . ";" . $n['modified_at'] . "\n";
            }

            fwrite($myfile, $txt);
            fclose($myfile);
        }

        echo '<div class="alert alert--success my5">';
        echo 'Votre liste de mot de passe <a href="' . $element . '" target="_blank">a été exportée</a> !';
        echo '</div>';
    } else {
        erreur("Vous n\'êtes pas connecté.");
    }
    ?>
</main>

<?php require_once("0_pied.php") ?>