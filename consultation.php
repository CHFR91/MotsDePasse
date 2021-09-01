<?php
session_start();
?>
<?php $valeur = 0 ?>
<?php require_once("0_en_tete.php") ?>
<?php require_once("0_fichier.php") ?>
<main>

    <?php
    if (isset($_SESSION['identifiant'])) {

        $identite = $_POST['id'];
        $key = idEmail($_SESSION['identifiant']);

        $dbsite = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);

        $connect = $dbsite->prepare("SELECT * FROM mdp WHERE id='$identite'");
        $connect->execute();
        $recupere = $connect->fetch(PDO::FETCH_ASSOC);
    ?>
        <div class="formule f80p">

            <h6>créé le <?= dateC($recupere) ?> et modifié le <?= dateC($recupere) ?></h6>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <fieldset>
                    <input type="hidden" name="id" id="id" value="<?= $identite; ?>">
                    <input type="hidden" name="partie" id="partie" value="2">

                    <label for="title">Titre du site :</label>
                    <div class="row">
                        <input type="text" name="title" id="title" value="<?= $recupere['titre'] ?>">
                    </div>

                    <label for="login">Login de connexion :</label>
                    <div class="row">
                        <input type="text" name="login" id="login" value="<?= $recupere['login'] ?>">
                    </div>

                    <label for="password">Votre mot de passe :</label>
                    <div class="row">
                        <input type="text" name="password" id="password" value="<?= decrypt($key, $recupere['password']) ?>">
                    </div>

                    <label for="email">L'email utilisé :</label>
                    <div class="row">
                        <input type="email" name="email" id="email" value="<?= $recupere['email'] ?>">
                    </div>

                    <label for="url">L'URL -l'adresse du site- :</label>
                    <div class="row">
                        <input type="text" name="url" id="url" value="<?= $recupere['url'] ?>">
                    </div>

                    <label for="data1">Data 1 :</label>
                    <div class="row">
                        <input type="text" name="data1" id="data1" value="<?= $recupere['data1'] ?>">
                    </div>

                    <label for="data2">Data 2 :</label>
                    <div class="row">
                        <input type="text" name="data2" id="data2" value="<?= $recupere['data2'] ?>">
                    </div>

                    <label for="data3">Data 3 :</label>
                    <div class="row">
                        <input type="text" name="data3" id="data3" value="<?= $recupere['data3'] ?>">
                    </div>

                    <label for="texte">Du texte :</label>
                    <div class="row">
                        <textarea type="text" name="texte" id="texte"><?= $recupere['text'] ?></textarea>
                    </div>


                    <div class="row my5">
                        <div class="col x8"><button type="submit" name="submit" <?= (ACTIF == 1) ? '' : ' disabled' ?>>Modifier les éléments du mot de passe dans le gestionnaire</button></div>
                        <div class="col x4"><a class="button button-outline" href="interface.php">Revenir à la liste</a></div>
                    </div>
                </fieldset>
            </form>

        </div>
    <?php
        if ((isset($_POST['submit'])) && (isset($_POST['partie']))) {
            $id = $_POST['id'];
            $titre = $_POST['title'];
            $login = $_POST['login'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $url = $_POST['url'];
            $data1 = $_POST['data1'];
            $data2 = $_POST['data2'];
            $data3 = $_POST['data3'];
            $texte = $_POST['texte'];

            $key = idEmail($_SESSION['identifiant']);
            $tagada = encrypt($key, $password);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                erreur('Attention à votre email !');
            } else {

                $dbsite = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);
                $dbsite->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $connect = $dbsite->prepare("UPDATE mdp SET titre='$titre', login='$login', password='$tagada', email='$email', url='$url', data1='$data1', data2='$data2', data3='$data3', text='$texte' WHERE id=$id");
                $connect->execute();

                header("Location: interface.php");
                die();
            }
        }
    } else {
        erreur("Vous n\'êtes pas connecté.");
    }
    ?>
</main>

<?php require_once("0_pied.php") ?>