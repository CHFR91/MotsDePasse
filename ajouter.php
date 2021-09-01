<?php
session_start();
?>
<?php $valeur = 6 ?>
<?php require_once("0_en_tete.php") ?>
<?php require_once("0_fichier.php") ?>
<main>

    <?php
    if (isset($_SESSION['identifiant'])) {
    ?>
        <div class="formule f80p">
            <h2><?= idEmail($_SESSION['identifiant']); ?> (ID: <?= $_SESSION['identifiant']; ?>)</h2>

            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <fieldset>

                    <label for="title">Titre du site :</label>
                    <div class="row">
                        <input type="text" name="title" id="title">
                    </div>

                    <label for="login">Login de connexion :</label>
                    <div class="row">
                        <input type="text" name="login" id="login">
                    </div>

                    <label for="password">Votre mot de passe :</label>
                    <div class="row">
                        <input type="text" name="password" id="password">
                    </div>

                    <label for="email">L'email utilisé :</label>
                    <div class="row">
                        <input type="email" name="email" id="email">
                    </div>

                    <label for="url">L'URL -l'adresse du site- :</label>
                    <div class="row">
                        <input type="text" name="url" id="url" placeholder="http://">
                    </div>

                    <label for="data1">Data 1 :</label>
                    <div class="row">
                        <input type="text" name="data1" id="data1">
                    </div>

                    <label for="data2">Data 2 :</label>
                    <div class="row">
                        <input type="text" name="data2" id="data2">
                    </div>

                    <label for="data3">Data 3 :</label>
                    <div class="row">
                        <input type="text" name="data3" id="data3">
                    </div>

                    <label for="texte">Du texte :</label>
                    <div class="row">
                        <textarea type="text" name="texte" id="texte"></textarea>
                    </div>


                    <div class="row my5">
                        <div class="col x8"><button type="submit" name="submit" <?= (ACTIF == 1) ? '' : ' disabled' ?>>Ajout d'un mot de passe dans le gestionnaire</button></div>
                        <div class="col x4"><input type="reset" class="button-outline" value="Réinitialiser le formulaire"></div>
                    </div>
                </fieldset>
            </form>

        </div>
    <?php
        if (isset($_POST['submit'])) {
            $titre = nettoyage($_POST['title']);
            $login = $_POST['login'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $url = $_POST['url'];
            $data1 = nettoyage($_POST['data1']);
            $data2 = nettoyage($_POST['data2']);
            $data3 = nettoyage($_POST['data3']);
            $texte = nettoyage($_POST['texte']);

            $user = $_SESSION['identifiant'];
            $key = idEmail($_SESSION['identifiant']);
            $tagada = encrypt($key, $password);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                erreur('Votre email n\'est pas valide !');
            } else {

                $dbsite = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);
                $dbsite->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $connect = $dbsite->prepare("INSERT mdp SET user_id='$user', titre='$titre', login='$login', password='$tagada', email='$email', url='$url', data1='$data1', data2='$data2', data3='$data3', text='$texte'");
                $connect->execute();

                echo '<div class="alert alert--success">';
                echo 'Votre mot de passe a été ajouté, <a href="interface.php">consultez-les !</a>.';
                echo '</div>';
            }
        }
    } else {
        erreur("Vous n\'êtes pas connecté.");
    }
    ?>
</main>

<?php require_once("0_pied.php") ?>