<?php
session_start();
?>
<?php $valeur = 3 ?>
<?php require_once("0_en_tete.php") ?>
<?php require_once("0_fichier.php") ?>

<main>
    <div class="formule f40">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <fieldset>
                <label for="email">Votre email :
                    <input type="email" name="email" id="email" placeholder="Votre email">
                </label>
                <label for="password">Votre mot de passe :
                    <input type="password" name="password" id="password" placeholder="Votre mot de passe">
                </label>
                <button type="submit" name="submit">Connexion à votre Gestionnaire de mots de passe</button>
            </fieldset>
        </form>
    </div>
    <div class="fc">
        <a class="button button-outline" href="ouvrir.php">Ouvrir un compte</a>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!$email || !$password) {

            erreur('Vous devez remplir les deux champs !');
        } else {

            $dbsite = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);

            $connect = $dbsite->prepare("SELECT * FROM users WHERE email='$email'");
            $connect->execute();
            $compter = $connect->rowCount();

            if ($compter == 0) {
                // vérification de l'email (s'il ne le trouve pas, c'est 0)

                erreur('Cet email n\'existe pas !');
            } else {
                $recupere = $connect->fetch(PDO::FETCH_ASSOC);

                session_destroy();

                if (password_verify($password, $recupere['password'])) {

                    if (session_status() === PHP_SESSION_NONE) {
                        session_start();
                        $_SESSION["identifiant"] = $recupere['id'];
                    }

                    return header('Location: interface.php');
                } else {
                    // vérification du mot de passe

                    erreur('Mot de passe incorrect !');
                }
            }
        }
    }
    ?>

</main>

<?php require_once("0_pied.php") ?>