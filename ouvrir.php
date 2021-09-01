<?php
session_start();
?>
<?php $valeur = 4 ?>
<?php require_once("0_en_tete.php") ?>
<?php require_once("0_fichier.php") ?>
<main>
    <div class="formule f80">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <fieldset>
                <label for="email">Votre email <span class="color-primaire">*</span> :</label>
                <div class="row">
                    <input type="email" name="email" id="email" placeholder="Votre email" required>
                </div>

                <label for="password">Votre mot de passe <span class="color-primaire">*</span> : <span class="color-danger right">!!! N'oubliez pas de noter le mot de passe !!!</span></label>
                <div class="row">
                    <input type="text" name="password" id="password" value="<?= $mdp ?>" disabled>
                </div>

                <label for="prenom">Votre prénom et nom :</label>
                <div class="row">
                    <div class="col x6"><input type="text" name="prenom" id="prenom" placeholder="Votre prénom"></div>
                    <div class="col x6"><input type="text" name="nom" id="nom" placeholder="Votre nom"></div>
                </div>

                <label for="pays">Votre pays <span class="color-primaire">*</span> :</label>
                <div class="row">
                    <select name="pays" id="pays">
                        <option value="France" selected="selected">France </option>

                        <option value="Afghanistan">Afghanistan </option>
                        <option value="Afrique_du_sud">Afrique du Sud </option>
                        <option value="Albanie">Albanie </option>
                        <option value="Algerie">Algérie </option>
                        <option value="Allemagne">Allemagne </option>
                        <option value="Andorre">Andorre </option>
                        <option value="Angola">Angola </option>
                        <option value="Arabie_Saoudite">Arabie Saoudite </option>
                        <option value="Argentine">Argentine </option>
                        <option value="Armenie">Arménie </option>
                        <option value="Australie">Australie </option>
                        <option value="Autriche">Autriche </option>
                        <option value="Azerbaidjan">Azerbaidjan </option>

                        <option value="Bangladesh">Bangladesh </option>
                        <option value="Bahrein">Bahrein </option>
                        <option value="Belgique">Belgique </option>
                        <option value="Benin">Benin </option>
                        <option value="Bielorussie">Biélorussie </option>
                        <option value="Bolivie">Bolivie </option>
                        <option value="Boznie_Herzegovine">Boznie Herzegovine </option>
                        <option value="Bresil">Brésil </option>
                        <option value="Bulgarie">Bulgarie </option>
                        <option value="Burkina_Faso">Burkina Faso </option>
                        <option value="Burundi">Burundi </option>

                        <option value="Cambodge">Cambodge </option>
                        <option value="Cameroun">Cameroun </option>
                        <option value="Canada">Canada </option>
                        <option value="Cap_vert">Cap Vert </option>
                        <option value="Chili">Chili </option>
                        <option value="Chine">Chine </option>
                        <option value="Chypre">Chypre </option>
                        <option value="Colombie">Colombie </option>
                        <option value="Comores">Comores </option>
                        <option value="Congo">Congo </option>
                        <option value="Coree">Corée </option>
                        <option value="Cote_d_Ivoire">Côte d'Ivoire </option>
                        <option value="Croatie">Croatie </option>
                        <option value="Cuba">Cuba </option>

                        <option value="Danemark">Danemark </option>
                        <option value="Djibouti">Djibouti </option>

                        <option value="Egypte">Egypte </option>
                        <option value="Emirats_Arabes_Unis">Emirats Arabes Unis </option>
                        <option value="Equateur">Equateur </option>
                        <option value="Erythree">Erythree </option>
                        <option value="Espagne">Espagne </option>
                        <option value="Estonie">Estonie </option>
                        <option value="Etats_Unis">Etats Unis </option>
                        <option value="Ethiopie">Ethiopie </option>

                        <option value="Finlande">Finlande </option>
                        <option value="France">France </option>

                        <option value="Gabon">Gabon </option>
                        <option value="Gambie">Gambie </option>
                        <option value="Georgie">Georgie </option>
                        <option value="Ghana">Ghana </option>
                        <option value="Grece">Grèce </option>
                        <option value="Groenland">Groenland </option>
                        <option value="Guadeloupe">Guadeloupe </option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinee">Guinee </option>
                        <option value="Guyana">Guyana </option>

                        <option value="Honduras">Honduras </option>
                        <option value="Hongrie">Hongrie </option>

                        <option value="Inde">Inde </option>
                        <option value="Indonesie">Indonesie </option>
                        <option value="Iran">Iran </option>
                        <option value="Iraq">Iraq </option>
                        <option value="Irlande">Irlande </option>
                        <option value="Islande">Islande </option>
                        <option value="Israel">Israel </option>
                        <option value="Italie">Italie </option>

                        <option value="Jamaique">Jamaique </option>
                        <option value="Japon">Japon </option>
                        <option value="Jordanie">Jordanie </option>

                        <option value="Kazakhstan">Kazakhstan </option>
                        <option value="Kenya">Kenya </option>
                        <option value="Kirghizstan">Kirghizistan </option>
                        <option value="Koweit">Koweit </option>

                        <option value="Laos">Laos </option>
                        <option value="Lesotho">Lesotho </option>
                        <option value="Lettonie">Lettonie </option>
                        <option value="Liban">Liban </option>
                        <option value="Liberia">Liberia </option>
                        <option value="Liechtenstein">Liechtenstein </option>
                        <option value="Lituanie">Lituanie </option>
                        <option value="Luxembourg">Luxembourg </option>
                        <option value="Lybie">Lybie </option>

                        <option value="Macedoine">Macedoine </option>
                        <option value="Madagascar">Madagascar </option>
                        <option value="Malaisie">Malaisie </option>
                        <option value="Mali">Mali </option>
                        <option value="Malte">Malte </option>
                        <option value="Maroc">Maroc </option>
                        <option value="Maurice">Maurice </option>
                        <option value="Mauritanie">Mauritanie </option>
                        <option value="Mexique">Mexique </option>
                        <option value="Moldavie">Moldavie </option>
                        <option value="Monaco">Monaco </option>
                        <option value="Mongolie">Mongolie </option>
                        <option value="Mozambique">Mozambique </option>

                        <option value="Namibie">Namibie </option>
                        <option value="Nicaragua">Nicaragua </option>
                        <option value="Niger">Niger </option>
                        <option value="Nigeria">Nigeria </option>
                        <option value="Norvege">Norvège </option>
                        <option value="Nouvelle_Caledonie">Nouvelle Calédonie </option>
                        <option value="Nouvelle_Zelande">Nouvelle Zélande </option>

                        <option value="Oman">Oman </option>
                        <option value="Ouganda">Ouganda </option>
                        <option value="Ouzbekistan">Ouzbekistan </option>

                        <option value="Pakistan">Pakistan </option>
                        <option value="Panama">Panama </option>
                        <option value="Paraguay">Paraguay </option>
                        <option value="Pays_Bas">Pays-Bas </option>
                        <option value="Perou">Pérou </option>
                        <option value="Philippines">Philippines </option>
                        <option value="Pologne">Pologne </option>
                        <option value="Portugal">Portugal </option>

                        <option value="Qatar">Qatar </option>

                        <option value="Republique_Dominicaine">République Dominicaine </option>
                        <option value="Republique_Tcheque">République Tchèque </option>
                        <option value="Roumanie">Roumanie </option>
                        <option value="Royaume_Uni">Royaume-Uni </option>
                        <option value="Russie">Russie </option>
                        <option value="Rwanda">Rwanda </option>

                        <option value="Salvador">Salvador </option>
                        <option value="Senegal">Senegal </option>
                        <option value="Sierra Leone">Sierra Leone </option>
                        <option value="Slovaquie">Slovaquie </option>
                        <option value="Slovenie">Slovenie</option>
                        <option value="Somalie">Somalie </option>
                        <option value="Soudan">Soudan </option>
                        <option value="Suede">Suéde </option>
                        <option value="Suisse">Suisse </option>
                        <option value="Syrie">Syrie </option>

                        <option value="Tadjikistan">Tadjikistan </option>
                        <option value="Taiwan">Taiwan </option>
                        <option value="Tanzanie">Tanzanie </option>
                        <option value="Tchad">Tchad </option>
                        <option value="Thailande">Thailande </option>
                        <option value="Togo">Togo </option>
                        <option value="Tunisie">Tunisie </option>
                        <option value="Turkmenistan">Turkmenistan </option>
                        <option value="Turquie">Turquie </option>

                        <option value="Ukraine">Ukraine </option>
                        <option value="Uruguay">Uruguay </option>

                        <option value="Venezuela">Venezuela </option>
                        <option value="Vietnam">Vietnam </option>

                        <option value="Yemen">Yemen </option>

                        <option value="Zambie">Zambie </option>
                        <option value="Zimbabwe">Zimbabwe </option>
                    </select>
                </div>

                <div class="row my5">
                    <div class="col x8"><button type="submit" name="submit" <?= (ACTIF == 1) ? '' : ' disabled' ?>>Création de votre compte utilisateur pour le Gestionnaire</button></div>
                    <div class="col x4"><input type="reset" class="button-outline" value="Réinitialiser le formulaire"></div>
                </div>
            </fieldset>
        </form>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $mdp;
        $nom = nettoyage($_POST['nom']);
        $prenom = nettoyage($_POST['prenom']);
        $pays = $_POST['pays'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            erreur('Votre email n\'est pas valide !');
        } else {

            $dbsite = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);
            $dbsite->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $connect = $dbsite->prepare("INSERT users SET email='$email', password='$mdpCrypt', prenom='$prenom', nom='$nom', pays='$pays'");
            $connect->execute();

            echo '<div class="alert alert--success">';
            echo 'Votre compte est bien créé, <a href="login.php">vous pouvez vous connecter</a>.';
            echo '</div>';
        }
    }
    ?>
</main>

<?php require_once("0_pied.php") ?>