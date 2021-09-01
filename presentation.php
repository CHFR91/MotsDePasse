<?php
session_start();
?>
<?php $valeur = 2 ?>
<?php require_once("0_en_tete.php") ?>

<main>
    <div class="formule f80p">
        <dl>

            <dt>Ce site est composé (pour l'instant) de deux parties :</dt>
            <dd>- La première partie vous permet de générer des mots de passe totalement aléatoirement.
                <ul>
                    <li>Le mot de passe doit faire entre 10 et 50 caractères de longueur</li>
                    <li>Le mot de passe doit avoir au moins des lettres minuscules, des lettres majuscules, des chiffres ou des symboles</li>
                </ul>
            </dd>
            <dd>- La seconde vous donne la possibilité de stocker vos mots de passe en ligne. Bien évidemment, la seconde partie est "dangereuse" dans le sens que si jamais une personne arrive à se connecter (d'une manière ou d'une autre) sur votre compte, c'est cuit.
                <ul>
                    <li>Pour accéder à votre compte "Maître", vous devez le créer tout en sachant qu'il y a un mot de passe unique, imposé dont vous recevez une copie par email. Ce mot de passe est hashé et donc totalement irrécupérable d'une manière ou d'une autre si vous l'oubliez.</li>
                    <li>Dans le gestionnaire, vous pouvez ajouter des mots de passe, les modifier ou les supprimer.</li>
                    <li>Il est possible d'exporter vos mots de passe dans un fichier texte.</li>
                    <li>Pour chaque mot de passe, vous avez les champs suivants : id, id de l'utilisateur, login, mot de passe, mail, url, donnée 1, donnée 2, donnée 3, texte et un champs date pour la création et un autre pour la dernière modification</li>
                </ul>
            </dd>
            <dd>- Les choses qui restent à faire (en vert, important et en rouge, secondaire) sur le gestionnaire sont :
                <ul>
                    <li class="color-vert">des tests supplémentaires autour du mot de passe "Maître" et mettre en place l'envoie de celui-ci par email.</li>
                    <li class="color-vert">Git - si c'est applicable !</li>
                    <li class="color-vert">Docker - si c'est applicable !</li>
                    <li class="color-danger">Possibilité de faire un "reset" du mot de passe "Maître"</li>
                    <li class="color-danger">Création d'une url unique pour chaque utilisateur pour l'exportation de sa liste</li>
                </ul>
            </dd>
        </dl>

        <p>Ce site est entièrement responsive (visible sur des appareils mobiles comme des ordinateurs portables ou fixes) et a été développé avec PHP uniquement pour le générateur de mots de passe et PHP/MySQL pour le gestionnaire.</p>

        <p>Je tiens à préciser que j'ai utilisé pour les feuilles de style (CSS) le framework minimaliste, <a href="https://milligram.io/" target="_blank">Milligram</a> et aussi Milligram Plus (Mg+) dont j'ai récupéré des éléments.</p>

        <p class="color-cinq">Mise à jour du texte de la présentation le 1er septembre 2021</p>
    </div>
</main>

<?php require_once("0_pied.php") ?>