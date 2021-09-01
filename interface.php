<?php
session_start();
?>
<?php $valeur = 5 ?>
<?php require_once("0_en_tete.php") ?>
<?php require_once("0_fichier.php") ?>
<main>

    <?php
    if (isset($_SESSION['identifiant'])) {
    ?>
        <div class="formule f80p">
            <a class="button button-outline right " href="export.php">Exporter la liste</a>
            <a class="button right mx1" href="ajouter.php">Ajouter un mot de passe</a>
            <h2><?= idEmail($_SESSION['identifiant']); ?></h2>

            <?php
            $user = $_SESSION['identifiant'];
            $key = idEmail($_SESSION['identifiant']);

            $dbsite = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);

            $connect = $dbsite->prepare("SELECT * FROM mdp WHERE user_id='$user' ORDER BY titre");
            $connect->execute();
            $compter = $connect->rowCount();

            if ($compter == 0) {
                // vérification de l'user_id (s'il ne le trouve pas, c'est 0)

                erreur('Aucun mot de passe dans le gestionnaire !');
            } else {
                $recupere = $connect->fetchAll(PDO::FETCH_ASSOC);
                $numero = 0;

                echo "<table>
                <thead>
                  <tr class=\"bgcolor-cinq\">
                    <th class=\"pl1\">Titre</th>
                    <th>Login</th>
                    <th>Mot de passe</th>
                    <th>Email utilisé</th>
                    <th>URL du site</th>
                    <th>Actions</th>
                  </tr>
                </thead>\n";
                echo "               <tbody>\n";
                foreach ($recupere as $valeur => $n) {
                    if ($numero == 0) {
                        echo "                  <tr>\n";
                    } else {
                        echo "                  <tr class=\"bgcolor-un\">\n";
                    }
                    echo "                    <td class=\"pl1\">" . ucfirst($n['titre']) . "</td>\n";
                    echo "                    <td>" . $n['login'] . "</td>\n";
                    echo "                    <td>" . decrypt($key, $n['password']) . "</td>\n";
                    echo "                    <td>" . $n['email'] . "</td>\n";
                    echo "                    <td><a href=\"" . $n['url'] . "\" target=\"_blank\">" . $n['url'] . "</a></td>\n";
                    echo "                    <td>
                        <form action=\"consultation.php\" method=\"post\" class=\"t0\">
                            <input type=\"hidden\" name=\"id\" id=\"id\" value=\"" . $n['id'] . "\">
                            <button type=\"submit\" name=\"submit\" class=\"button button-small t0\">Afficher / Modifier</button>
                            <a class=\"button button-small button-red t0\" onClick=\"javascript: return confirm('Etes-vous sûr de supprimer cette ligne ?');\" href='delete.php?id=" . $n['id'] . "'>Supprimer</a>
                        </form>
                    </td>\n";
                    echo "                  </tr>\n";
                    if ($numero == 0) {
                        $numero = 1;
                    } else {
                        $numero = 0;
                    }
                }
                echo "                </tbody>
            </table>\n";
            }
            ?>
        </div>

    <?php
    } else {

        erreur('Vous n\'êtes pas connecté.');
    }
    ?>
</main>

<?php require_once("0_pied.php") ?>