# MotsDePasse
Générateur de mots de passe ainsi qu'un gestionnaire en ligne

Ce site est composé (pour l'instant) de deux parties :
- La première partie vous permet de générer des mots de passe totalement aléatoirement.
    * Le mot de passe doit faire entre 10 et 50 caractères de longueur
    * Le mot de passe doit avoir au moins des lettres minuscules, des lettres majuscules, des chiffres ou des symboles
- La seconde vous donne la possibilité de stocker vos mots de passe en ligne. Bien évidemment, la seconde partie est "dangereuse" dans le sens que si jamais une personne arrive à se connecter (d'une manière ou d'une autre) sur votre compte, c'est cuit.
    * Pour accéder à votre compte "Maître", vous devez le créer tout en sachant qu'il y a un mot de passe unique, imposé dont vous recevez une copie par email. Ce mot de passe est hashé et donc totalement irrécupérable d'une manière ou d'une autre si vous l'oubliez.
    * Dans le gestionnaire, vous pouvez ajouter des mots de passe, les modifier ou les supprimer.
    * Il est possible d'exporter vos mots de passe dans un fichier texte.
    * Pour chaque mot de passe, vous avez les champs suivants : id, id de l'utilisateur, login, mot de passe, mail, url, donnée 1, donnée 2, donnée 3, texte et un champs date pour la création et un autre pour la dernière modification
- Les choses qui restent à faire sur le gestionnaire sont :
    * Docker - si c'est applicable !
    * Possibilité de faire un "reset" du mot de passe "Maître"
- Le 2 septembre, les mises à jour sont :
    * "MotsDePasse" est disponible sur Github.
    * Le programme est développé avec Git même si je trouve cela inutile tout seul.
    * Personnalisation avec un chemin unique pour toutes les sauvegardes des données.
    * Correction de deux points au niveau de l'attribution du mot de passe 'Maître' lors de la création d'un compte utilisateur.
    * Un email est envoyé quand un compte utilisateur est créé (à vérifier en situation réelle).

Ce site est entièrement responsive (visible sur des appareils mobiles comme des ordinateurs portables ou fixes) et a été développé avec PHP uniquement pour le générateur de mots de passe et PHP/MySQL pour le gestionnaire.

Je tiens à préciser que j'ai utilisé pour les feuilles de style (CSS) le framework minimaliste, Milligram et aussi Milligram Plus (Mg+) dont j'ai récupéré des éléments.

Mise à jour du texte de la présentation le 2 septembre 2021

