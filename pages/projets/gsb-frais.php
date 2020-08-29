<?php
$page_title = "PPE GSB frais | Portfolio de Kévin RIZZO";
$page_description = "Compte rendu de la création de la partie comptable de l'application web GSB frais | Projet BTS SIO";
$navbar_section = 'projets';
require '../../inc/header.php';
?>
<div id="page-top-section" class="p-3 p-md-5 text-center">
    <h1 class="display-4 font-weight-normal text-white">Mes projets</h1>
</div>
<div class="breadcrumb-container d-none d-sm-block">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="breadcrumb-item-unactive">Accueil</a></li>
                <li class="breadcrumb-item"><a href="/pages/projets.php" class="breadcrumb-item-unactive">Projets</a></li>
                <li class="breadcrumb-item active" aria-current="page">PPE : GSB frais</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container py-5 article-title-margin">
    <div class="row">
        <div class="col-xl-9">
            <h2 class="text-center">PPE : GSB frais</h2>
            <div class="text-center">
                <img src="/img/projets/gsb-frais/gsb-logo.png" class="w-25 m-3" alt="Logo GSB">
            </div>
            <div class="mt-3 mb-5">
                <h3 id="item-1">Ressources et documents du projet</h3>
                <p>L'application est accessible à l'adresse suivante : <a href="https://gsb.ostyl.fr/" target="_blank">https://gsb.ostyl.fr/</a></p>
                <ul>
                    <li><a href="https://github.com/rizzok/gsb-frais" target="_blank">Code source</a> (GitHub repository)</li>
                    <li><a href="https://phpmyadmin.cluster026.hosting.ovh.net/">Base de données du projet en ligne</a> (phpMyAdmin)</li>
                    <li><a href="https://github.com/rizzok/gsb-frais/tree/master/bdd" target="_blank">Base de données</a> (fichier SQL et instructions d'installation en local)</li>
                </ul>
                <p>Documents fournis : </p>
                <ul>
                    <li><a href="/pages/projets/gsb-frais/gsb-organisation.docx">Contexte de l'entreprise GSB</a> (fichier Word)</li>
                    <li><a href="/pages/projets/gsb-frais/gsb-frais-cahier-des-charges.doc">Cahier des charges</a> (fichier Word)</li>
                    <li><a href="/pages/projets/gsb-frais/gsb-frais-code-et-bdd-fournis.zip">Code et base de données fournis</a> (fichier .zip)</li>
                </ul>
            </div>
            <div class="mb-5">
                <h3 id="item-2">Présentation du projet</h3>
                <div class="m-3">
                    <h4>Contexte de la situation professionelle</h4>
                    <p class="text-justify">Le laboratoire Galaxy Swiss Bourdin (GSB) est issu de la fusion entre le géant américain Galaxy (spécialisé dans le secteur des maladies virales dont le SIDA et les hépatites) et le conglomérat européen Swiss Bourdin (travaillant sur des médicaments plus conventionnels), lui-même déjà union de trois petits laboratoires.</p>
                </div>
                <div class="m-3">
                    <h4>Description du besoin</h4>
                    <p class="text-justify">Le suivi des frais est actuellement géré de plusieurs façons selon le laboratoire d'origine des visiteurs. On souhaite uniformiser cette gestion.
                        <br>
                        L'application doit permettre d'enregistrer tout frais engagé, aussi bien pour l'activité directe (déplacement, restauration et hébergement) que pour les activités annexes (événementiel, conférences, autres), et de présenter un suivi daté des opérations menées par le service comptable (réception des pièces, validation de la demande de remboursement, mise en paiement, remboursement effectué).</p>
                </div>
                <div class="m-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Diagramme des cas d'utilisation</h4>
                            <p class="text-justify">L'application est fournie avec les cas d'utilisations liés aux visiteurs ; la partie comptable est à développer selon les cas d'utilisations suivants : </p>
                            <ul>
                                <li>Validation d'une fiche de frais</li>
                                <li>Suivi du paiement des fiches de frais</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="article-image text-center">
                                <a href="/img/projets/gsb-frais/diagramme-des-cas-d-utilisation.png" target="_blank"><img class="img-thumbnail" src="/img/projets/gsb-frais/diagramme-des-cas-d-utilisation.png" alt="Diagramme des cas d'utilisation"></a>
                                <a href="/img/projets/gsb-frais/diagramme-des-cas-d-utilisation.png" target="_blank">
                                    <p class="text-center">Diagramme des cas d'utilisation</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <h3 id="item-3">Préparation de l'environnement de développement</h3>
                <div class="m-3">
                    <div class="row my-5">
                        <div class="col-md-6">
                            <h4>Installation de WampServer</h4>
                            <p class="text-justify">WampServer est une plateforme de développement Web de type WAMP, permettant de faire fonctionner localement des scripts PHP. C'est un environnement comprenant trois serveurs, un interpréteur de script, ainsi que phpMyAdmin pour l'administration Web des bases MySQL.</p>
                        </div>
                        <div class="col-md-6">
                            <div class="article-image text-center">
                                <img class="img-thumbnail" src="/img/projets/gsb-frais/01-wamp.png" alt="Installation de WampServer">
                            </div>
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col-md-6">
                            <div class="article-image text-center">
                                <img class="img-thumbnail" src="/img/projets/gsb-frais/02-netbeans.png" alt="Installation de l'IDE NetBeans">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4>Installation de l'IDE NetBeans et création d'un nouveau projet</h4>
                            <p class="text-justify">NetBeans est un environnement de développement intégré open source. En plus de Java, NetBeans permet la prise en charge native de divers langages tels le C, le C++, le JavaScript, le XML, le Groovy, le PHP et le HTML, ou d'autres par l'ajout de greffons.</p>
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col-md-6">
                            <h4>Activation de Xdebug</h4>
                            <p class="text-justify">Xdebug est une bibliothèque logicielle, extension pour PHP apportant des fonctions de débogage et de profilage.</p>
                        </div>
                        <div class="col-md-6">
                            <div class="article-image text-center">
                                <a href="/img/projets/gsb-frais/04-wamp-activation-xdebug.png" target="_blank"><img class="img-thumbnail" src="/img/projets/gsb-frais/04-wamp-activation-xdebug.png" alt="Activation de Xdebug"></a>
                                <a href="/img/projets/gsb-frais/04-wamp-activation-xdebug.png" target="_blank">
                                    <p class="text-center">Activation de Xdebug</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col-md-8">
                            <h4>Initialisation de Git et création du repository sur GitHub</h4>
                            <p class="text-justify">
                                Git est un logiciel de gestion de versions décentralisé.<br>
                                GitHub est un service web d’hébergement utilisant Git.<br>
                                Pour plus de détails, rendez-vous sur la page que j'ai créé dédiée à ce sujet : <a href="/pages/competences/outils-de-versioning-git-et-github.php" target="_blank">Outils de versioning : Git et GitHub</a>
                            </p>
                            <div class="article-image text-center">
                                <a href="/img/projets/gsb-frais/07-github-premer-commit.png" target="_blank"><img class="img-thumbnail" src="/img/projets/gsb-frais/07-github-premer-commit.png" alt="Premier commit sur GitHub"></a>
                                <a href="/img/projets/gsb-frais/07-github-premer-commit.png" target="_blank">
                                    <p class="text-center">Premier commit sur GitHub</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="article-image text-center">
                                <a href="/img/projets/gsb-frais/06-netbeans-git-outils.png" target="_blank">
                                    <img class="img-thumbnail" src="/img/projets/gsb-frais/06-netbeans-git-outils.png" alt="Outils liés à Git sur NetBeans">
                                </a>
                                <a href="/img/projets/gsb-frais/06-netbeans-git-outils.png" target="_blank">
                                    <p class="text-center">Outils liés à Git sur NetBeans</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <h3 id="item-4">Import et modifications de la base de données</h3>
                <p class="text-justify">Import de la base de donnée, fichier .sql fourni avec l'application.</p>
                <div class="article-image text-center">
                    <a href="/img/projets/gsb-frais/09-creation-de-la-bdd-import-phpmyadmin.png" target="_blank"><img class="img-thumbnail" src="/img/projets/gsb-frais/09-creation-de-la-bdd-import-phpmyadmin.png" alt="Import de la base de données"></a>
                    <a href="/img/projets/gsb-frais/09-creation-de-la-bdd-import-phpmyadmin.png" target="_blank">
                        <p class="text-center">Import de la base de données</p>
                    </a>
                </div>
                <p class="text-justify">
                    Pour pouvoir répondre aux besoins du cahier des charges et au différents cas d'utilisation décrits, j'ai ajouté un champ booléen "estcomptable" à la table "visiteur", qui est à 0 (faux) si l'utilisateur est un visiteur et à 1 (vrai) si c'est est un comptable.<br>
                    Et ajouté de 2 nouvelles lignes à la table "visiteur". Ces lignes correspondent à l'ajout de 2 comptables, la valeur "estcomptable" est donc à 1 (true).
                </p>
                <p class="text-justify">
                    J'ai également ajouté à la table "etat", une ligne ayant les valeurs suivantes : <br>
                    id = 'MP'<br>
                    libelle = 'Mise en paiement'
                </p>
                <p class="text-justify">Cette modification à pour but de répondre aux différents états décrits dans le schéma suivant, visible dans le cahier des charges :</p>
                <div class="article-image text-center">
                    <a href="/img/projets/gsb-frais/etats-fiches-de-frais.png" target="_blank"><img class="img-thumbnail" src="/img/projets/gsb-frais/etats-fiches-de-frais.png" alt="Différents états d'une fiche de frais"></a>
                    <a href="/img/projets/gsb-frais/etats-fiches-de-frais.png" target="_blank">
                        <p class="text-center">Différents états d'une fiche de frais</p>
                    </a>
                </div>
                <p class="text-justify mt-4 mb-3">Modèle entité-association de la base de données après modification : </p>
                <div class="article-image text-center">
                    <a href="/img/projets/gsb-frais/gsb-mea.png" target="_blank"><img class="img-thumbnail" src="/img/projets/gsb-frais/gsb-mea.png" alt="Modèle entité-association"></a>
                    <a href="/img/projets/gsb-frais/gsb-mea.png" target="_blank">
                        <p class="text-center">Modèle entité-association</p>
                    </a>
                </div>
            </div>
            <div class="mb-5">
                <h3 id="item-5">Utilisation de Xdebug</h3>
                <p class="text-justify">L'extension Xdebug apporte de nombreuses fonctions de débogage et de profilage, comme : </p>
                <ul>
                    <li>l'exécutions du code PHP pas à pas, </li>
                    <li>la visualisation des variables et leurs assignations à un moment donné, </li>
                    <li>les traces d'appels (stack trace en anglais) qui représentent les piles d'exécution, </li>
                    <li>ou encore le profilage du code (analyse de l'exécution du code afin de connaître son comportement).</li>
                </ul>
                <div class="article-image text-center">
                    <a href="/img/projets/gsb-frais/12-utilisation-de-xdebug.png" target="_blank"><img class="img-thumbnail" src="/img/projets/gsb-frais/12-utilisation-de-xdebug.png" alt="Exemple d'utilisation de Xdebug"></a>
                    <a href="/img/projets/gsb-frais/12-utilisation-de-xdebug.png" target="_blank">
                        <p class="text-center">Exemple d'utilisation de Xdebug</p>
                    </a>
                </div>
            </div>
            <div class="mb-5">
                <h3 id="item-6">Projet respectant l'architecture MVC</h3>
                <p class="text-justify">
                    Le projet de base est fourni en respectant l'architecture MVC ou Modèle-Vue-Contrôleur. J'ai donc pris soin de continuer à respecter ce modèle qui profite à l'organisation du projet parce qu'elle permet de séparer les fichiers dans des répertoires différents selon leur utilisation.<br>
                    En effet, nous avons d'une part le(s) fichier(s) "modèle", qui contient les données et la logique en rapport avec les données : validation, lecture, enregistrement.<br>
                    La "vue" correspond à la partie visible d'une interface graphique. Une vue contient des éléments visuels ainsi que la logique nécessaire pour afficher les données provenant du modèle.<br>
                    Le "contrôleur" est un module qui traite les actions de l'utilisateur et modifie les données du modèle et de la vue.
                </p>
                <p class="text-justify">Voici un exemple de vue qui, comme on peut le voir, est un mélange de HTML et de PHP, qui se sert à la fois des données transmises par le modèle et le contrôleur : </p>
                <div class="article-image text-center">
                    <a href="/img/projets/gsb-frais/13-un-fichier-vue-php.png" target="_blank"><img class="img-thumbnail" src="/img/projets/gsb-frais/13-un-fichier-vue-php.png" alt="Fichier vue"></a>
                    <a href="/img/projets/gsb-frais/13-un-fichier-vue-php.png" target="_blank">
                        <p class="text-center">Fichier vue</p>
                    </a>
                </div>
                <p class="text-justify">Exemple de fichier contrôleur : </p>
                <div class="article-image text-center">
                    <a href="/img/projets/gsb-frais/14-un-fichier-controleur-php.png" target="_blank"><img class="img-thumbnail" src="/img/projets/gsb-frais/14-un-fichier-controleur-php.png" alt="Fichier contrôleur"></a>
                    <a href="/img/projets/gsb-frais/14-un-fichier-controleur-php.png" target="_blank">
                        <p class="text-center">Fichier contrôleur</p>
                    </a>
                </div>
            </div>
            <div class="mb-5">
                <h3 id="item-7">Description de la mise en production</h3>
                <p class="text-justify">Pour rendre cette application disponible en ligne, voici les différentes manipulations effectuées : </p>
                <ol>
                    <li>Ajout d'un sous domaine "gsb.ostyl.fr" ayant un dossier racine différent de celui de mon nom de domaine principal "ostyl.fr".</li>
                    <li>Régénération du certificat SSL pour disposer d'une connection sécurisés sur le sous domaine "gsb".</li>
                    <li>Modification des informations de connexion à la base de données dans les fichiers includes/class.pdogsb.inc.php et tests/gendatas/majGSB.php.</li>
                    <li>Copie des dossiers et fichiers vers le répertoire "gsb", via le logiciel FileZilla.</li>
                    <li>Modification du fichier SQL avant l'import : suppression de la partie "Administration de la base de données", qui est utile en local uniquement.</li>
                    <li>Création d'une nouvelle base de données liée à mon hébergement web.</li>
                    <li>Import de la base de données via phpMyAdmin.</li>
                    <li>Lancement du script tests/gendatas/majGSB.php permettant de générer des données fictives dans la base, puis suppression du dossier tests, afin que ce script ne soit pas malencontreusement à nouveau exécuté.</li>
                    <li>Création d'un fichier .htaccess permettant de rediriger automatiquement les utilisateurs vers le "https", et qui empêche l'accès aux répertoires et fichiers qui pourraient compromettre la sécurité de l'application.</li>
                </ol>
            </div>
            <div class="mb-5">
                <h3 id="item-8">Conclusion</h3>
                <p class="text-justify">
                    Grâce à ce projet, je me suis rendu compte de l'importance de travailler sur un IDE avec des extentions comme Xdebug qui permettent de déboguer le code de manière efficace.<br>
                    J'ai également pris conscience de la praticité de l'architecture MVC dans le développement web. Ce pattron de conception permet de mieux s'y retrouver, les fichiers sont bien organisés dans différents répertoires correspondant aux différentes parties logiques.
                </p>
            </div>
        </div>
        <div class="article-nav col-xl-3 d-none d-xl-block bd-toc">
            <nav class="navbar navbar-light bg-light">
                <nav class="nav nav-pills flex-column mx-auto">
                    <a class="nav-link" href="#item-1">Ressources et documents du projet</a>
                    <a class="nav-link" href="#item-2">Présentation du projet</a>
                    <a class="nav-link" href="#item-3">Préparation de l'environnement de développement</a>
                    <a class="nav-link" href="#item-4">Import et modifications de la base de données</a>
                    <a class="nav-link" href="#item-5">Utilisation de Xdebug</a>
                    <a class="nav-link" href="#item-6">Projet respectant l'architecture MVC</a>
                    <a class="nav-link" href="#item-7">Description de la mise en production</a>
                    <a class="nav-link" href="#item-8">Conclusion</a>
                </nav>
            </nav>
        </div>
    </div>
</div>
<?php require '../../inc/footer.php'; ?>