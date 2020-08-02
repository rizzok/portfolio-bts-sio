# ############################################# #
# Copie du site local vers hébergement en ligne #
# ############################################# #

- Ne pas copier les dossiers "git" et "nbproject", et les fichiers "transfer-local.md" et ".gitignore"

# DB #

Reprendre le précédent fichier

OU

- db.php : PDO connection : 
        modifier [host]
        changer [$user] et [$pass]
        supprimer [port]

infos bdd online dans \\DS218\dev\web-projets\portfolio-ostyl\infos.html


# ################################# #
# Copie du site en ligne vers local #
# ################################# #

- Voir manips précédentes et faire l'inverse

- db.php local : 

```
<?php
// db connection
$user = 'root';
$pass = '';

try {
    $db = new PDO('mysql:host=localhost;port=3306;dbname=espace_membre', $user, $pass);
} catch (PDOException $e) {
    print "Erreur : " . $e->getMessage() . "<br/>";
    die;
}
```