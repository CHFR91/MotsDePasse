<?php
session_start();
?>
<?php $valeur = 1 ?>
<?php require_once("0_en_tete.php") ?>

<main>
    <div class="formule f20">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <fieldset>
                <label for="minuscules">
                    <input type="checkbox" value="true" name="minuscules" id="minuscules" checked>
                    lettres minuscules (a à z)
                </label>
                <label for="majuscules">
                    <input type="checkbox" value="true" name="majuscules" id="majuscules">
                    lettres majuscules (A à Z)
                </label>
                <label for="chiffres">
                    <input type="checkbox" value="true" name="chiffres" id="chiffres">
                    chiffres (0 à 9)
                </label>
                <label for="symboles">
                    <input type="checkbox" value="true" name="symboles" id="symboles">
                    symboles (& à =)
                </label>
                <label for="nombre">Longueur du mot de passe :
                    <input type="number" name="nombre" id="nombre" min="10" max="50" value="12">
                </label>
                <button type="submit" name="submit">Génération du mot de passe</button>
            </fieldset>
        </form>
    </div>

    <?php

    if (isset($_POST['submit'])) {
        $minuscules = isset($_POST['minuscules']);
        $majuscules = isset($_POST['majuscules']);
        $chiffres = isset($_POST['chiffres']);
        $symboles = isset($_POST['symboles']);
        $nombre = $_POST['nombre'];
        $motDePasse = "";

        if (!$minuscules && !$majuscules && !$chiffres && !$symboles) {

            erreur('Vous devez sélectionner au moins un des éléments !');
        } else {
            if ($minuscules) {
                $motDePasse .= "abcdefghijklmnopqrstuvwxyz";
            }
            if ($majuscules) {
                $motDePasse .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            }
            if ($chiffres) {
                $motDePasse .= "0123456789";
            }
            if ($symboles) {
                $motDePasse .= "!-\$_()&*+?%.<>:;.,^=";
            }

            echo '<div class="alert alert--success">';
            echo 'mot de passe : <strong>' . substr(str_shuffle($motDePasse), 0, $nombre) . '</strong>';
            echo '</div>';
        }
    }

    ?>

</main>

<?php require_once("0_pied.php") ?>