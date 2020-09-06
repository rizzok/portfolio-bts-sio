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
                <li class="breadcrumb-item active" aria-current="page">PPE : GSB gestion de la clôture</li>
            </ol>
        </nav>
    </div>
</div>


<div class="container py-5 article-title-margin">
    <div class="row">
        <div class="col-xl-9">
            <h2 class="text-center">PPE : GSB gestion de la clôture</h2>
            <p class="text-center">APPLICATION C# : SERVICE WINDOWS</p>
            <div class="text-center">
                <img src="/img/projets/gsb-frais/gsb-logo.png" class="w-25 m-3" alt="Logo GSB">
            </div>
            <div class="mt-3 mb-5">
                <h3 id="item-1">Ressources et documents du projet</h3>
                <ul>
                    <li><a href="/pages/projets/gsb-gestion-cloture/e4-fiche-gsb-gestion-de-la-cloture.pdf" target="_blank">Fiche de situation professionelle</a> (PDF)</li>
                    <li><a href="https://github.com/rizzok/GsbGestionCloture/tree/master/Installation%20du%20service" target="_blank">Archive contenant l'exécutable et instructions d'installation</a> (sur GitHub)</li>
                    <li><a href="https://github.com/rizzok/GsbGestionCloture" target="_blank">Code source</a> (GitHub repository)</li>
                    <li><a href="https://github.com/rizzok/GsbFrais/tree/master/bdd" target="_blank">Base de données</a> (fichier .sql et instructions d'installation en local)</li>
                    <li><a href="https://gsb.ostyl.fr/service-doc/api/GsbGestionClotureService.html" target="_blank">Documentation technique</a></li>
                    <li><a href="#" target="_blank">Compte rendu du projet</a> (PDF)</li>
                </ul>
                <p>Ressources fournies : </p>
                <ul>
                    <li><a href="/pages/projets/gsb-gestion-cloture/gsb-mission-2-gestion-cloture.pdf" target="_blank">Description des tâches à réaliser</a> (PDF)</li>
                    <li><a href="/pages/projets/gsb-frais/gsb-organisation.docx" target="_blank">Contexte de l'entreprise GSB</a> (fichier Word)</li>
                    <li><a href="/pages/projets/gsb-frais/gsb-frais-cahier-des-charges.doc" target="_blank">Cahier des charges</a> (fichier Word)</li>
                </ul>
                <p>Compétences associées</p>
                <ul>
                    <li>A1.1.1 , Analyse du cahier des charges d'un service à produire</li>
                    <li>A1.2.4 , Détermination des tests nécessaires à la validation d'un service</li>
                    <li>A1.3.4 , Déploiement d'un service</li>
                    <li>A1.4.1 , Participation à un projet</li>
                    <li>A4.1.8 , Réalisation des tests nécessaires à la validation d'éléments adaptés ou développés</li>
                    <li>A4.1.9 , Rédaction d'une documentation technique</li>
                </ul>
            </div>
            <div class="mb-5">
                <h3 id="item-2">Présentation du projet</h3>
                <div class="m-3">
                    <h4>Contexte de la situation professionelle et description du besoin</h4>
                    <p class="text-justify">Le laboratoire Galaxy Swiss Bourdin (GSB) est issu de la fusion entre le géant américain Galaxy et le conglomérat européen Swiss Bourdin. Après avoir fait évoluer l'application web du laboratoire, servant pour la gestion de frais des visiteurs médicaux par les comptables, il faut intégrer un service mettant à jour l'état des fiches de manière automatique.</p>
                </div>
                <div class="m-3">
                    <h4>Description du besoin</h4>
                    <p class="text-justify">
                        Le cahier des charges de l’application Frais GSB stipule que la fiche d’un visiteur est clôturée au dernier jour du mois. Cette clôture sera réalisée par l’application selon la modalité suivante : au début de la campagne de validation des fiches par le service comptable, un script est lancé qui clôture toutes les fiches non clôturées du mois qui va être traité. D’autre part, il est dit que la mise en paiement est faite au 20 du mois suivant la saisie par les visiteurs.
                        <br>
                        <br>
                        Il faut répondre à ces deux objectifs en développant une application C# avec VS.Net, puis en créant un service s'exécutant à intervalle régulier en tâche de fond. Cette application va devoir permettre, au début de la campagne de validation, c’est-à-dire à partir du 1er jour du mois N, la clôture de toutes les fiches créées le mois N-1. Elle permettra, d’autre part, à partir du 20e jour du mois N la mise en remboursement des fiches créées le mois N-1.
                    </p>
                </div>
            </div>
            <div class="mb-5">
                <h3 id="item-3">Préparation du projet</h3>
                <p class="text-justify">
                    Création d'un nouveau projet C# de type application console, sous Visual Studio.
                    <br>
                    Installation de MySQL Installer, qui permet de bénéficier des frameworks utiles pour la connexion à la base données, puis ajout aux références du projet.
                </p>
                <div class="article-image text-center">
                    <a href="/img/projets/gsb-gestion-cloture/01-mysql-intaller.png" target="_blank"><img class="img-thumbnail" src="/img/projets/gsb-gestion-cloture/01-mysql-intaller.png" alt="Installation de MySQL Installer"></a>
                    <a href="/img/projets/gsb-gestion-cloture/01-mysql-intaller.png" target="_blank">
                        <p class="text-center">Installation de MySQL Installer</p>
                    </a>
                </div>
                <div class="article-image text-center">
                    <a href="/img/projets/gsb-gestion-cloture/02-framework-installation.png" target="_blank"><img class="img-thumbnail" src="/img/projets/gsb-gestion-cloture/02-framework-installation.png" alt="Ajout de MySQL aux références du projet"></a>
                    <a href="/img/projets/gsb-gestion-cloture/02-framework-installation.png" target="_blank">
                        <p class="text-center">Ajout de MySQL aux références du projet</p>
                    </a>
                </div>
            </div>
            <div class="mb-5">
                <h3 id="item-4">Classe d'accès aux données</h3>
                <p class="text-justify">
                    Création de la classe DataAccess qui est utile à l'accès et la modification des données d'un base MySQL. <br>
                    Le constructeur de cette classe instancie la classe MySqlConnection, permettant de gérer une connexion à un serveur MySQL. La classe DataAccess contient des méthodes qui permettent le lecture, la modification, la mise à jour et la suppression de données. <br>
                    Cette classe est réutilisable, elle a été conçue pour pouvoir être importée dans d'autres projets en relation avec une base de données MySQL.
                </p>
            </div>
            <div class="mb-5">
                <h3 id="item-5">Classe de gestion des dates</h3>
                <p class="text-justify">
                    Création de la classe abstraite DateGestion, qui comporte des méthodes statiques, ayant pour but de retourner des dates utiles à la gestion de la clôture des fiches de frais. <br>
                    Classe optimisée de manière à éviter les répétitions de code, par le biais d'une méthode privée "calculDate". Cette méthode calcule la date, par rapport à l'objet DateTime et le nombre passés en paramètre.
                </p>
            </div>
            <div class="mb-5">
                <h3 id="item-6">Réalisation de tests unitaires</h3>
                <p class="text-justify mb-4">
                    Ajout d'un nouveau projet NUnit à la solution, pour la réalisation de tests unitaires sur les méthodes de la classe DateGestion. <br>
                    La plupart des tests comportent plusieurs assertions afin de pourvoir tester différents cas de figure.
                </p>
                <div class="article-image text-center mb-4">
                    <a href="/img/projets/gsb-gestion-cloture/03-creation-projet-tests-nunit.png" target="_blank"><img class="img-thumbnail" src="/img/projets/gsb-gestion-cloture/03-creation-projet-tests-nunit.png" alt="Création du projet NUnit"></a>
                    <a href="/img/projets/gsb-gestion-cloture/03-creation-projet-tests-nunit.png" target="_blank">
                        <p class="text-center">Création du projet NUnit</p>
                    </a>
                </div>
                <div class="article-image text-center mb-4">
                    <a href="/img/projets/gsb-gestion-cloture/04-creation-classe-tests.png" target="_blank"><img class="img-thumbnail" src="/img/projets/gsb-gestion-cloture/04-creation-classe-tests.png" alt="Création des différents tests"></a>
                    <a href="/img/projets/gsb-gestion-cloture/04-creation-classe-tests.png" target="_blank">
                        <p class="text-center">Création des différents tests sur la classe DateGestion</p>
                    </a>
                </div>
                <div class="article-image text-center mb-4">
                    <a href="/img/projets/gsb-gestion-cloture/05-tests-sur-classe-dategestion.png" target="_blank"><img class="img-thumbnail" src="/img/projets/gsb-gestion-cloture/05-tests-sur-classe-dategestion.png" alt="Résultat des tests"></a>
                    <a href="/img/projets/gsb-gestion-cloture/05-tests-sur-classe-dategestion.png" target="_blank">
                        <p class="text-center">Résultat des tests</p>
                    </a>
                </div>
            </div>
            <div class="mb-5">
                <h3 id="item-7">Classe de gestion du Timer et des requêtes SQL</h3>
                <p class="text-justify">
                    Elle sert d'intermédiaire entre les classes d'accès aux données / de gestion des dates, et le "Main" qui est la fonction principale du programme. La classe GestionCloture instancie la classe "Timer" permettant de définir un intervalle de temps, qui lance automatiquement une méthode, et qui est donc utile dans le cadre du déploiement d'un service. <br>
                    Lorsque l'intervalle de temps défini est atteint, le "Timer" exécute une méthode qui à pour but de se connecter à la base de données MySQL et, selon la date du jour, envoie les requêtes mettant à jour l'état de fiches de frais.
                </p>
            </div>
            <div class="mb-5">
                <h3 id="item-8">Création et installation du service Windows</h3>
                <p class="text-justify mb-4">
                    Installation du package Topshelf permettant le déploiement d'un service Windows, via la classe "HostFatory".<br>
                    Package installé via le gestionnaire de package NuGet, intégré à Visual Studio.
                </p>
                <div class="article-image text-center mb-4">
                    <a href="/img/projets/gsb-gestion-cloture/06-installation-topshelf.png" target="_blank"><img class="img-thumbnail" src="/img/projets/gsb-gestion-cloture/06-installation-topshelf.png" alt="Installation du package Topshelf"></a>
                    <a href="/img/projets/gsb-gestion-cloture/06-installation-topshelf.png" target="_blank">
                        <p class="text-center">Installation du package Topshelf</p>
                    </a>
                </div>
                <p class="text-justify mb-4">
                    Codage du Main (fonction principale du programme), qui instancie la classe HostFatory, fait appel à la classe GestionCloture et défini les différents paramètres du service Windows. <br>
                    Création de l'exécutable et installation du service en ligne de commande, via la commande suivante : <br>
                    <kbd>GsbGestionClotureService.exe install start</kbd>
                </p>
                <div class="article-image text-center mb-4">
                    <a href="/img/projets/gsb-gestion-cloture/07-installation-du-service.png" target="_blank"><img class="img-thumbnail" src="/img/projets/gsb-gestion-cloture/07-installation-du-service.png" alt="Installation du service Windows en ligne de commande"></a>
                    <a href="/img/projets/gsb-gestion-cloture/07-installation-du-service.png" target="_blank">
                        <p class="text-center">Installation du service Windows en ligne de commande</p>
                    </a>
                </div>
                <div class="article-image text-center mb-4">
                    <a href="/img/projets/gsb-gestion-cloture/08-services1.png" target="_blank"><img class="img-thumbnail" src="/img/projets/gsb-gestion-cloture/08-services1.png" alt="Service en cours d'exécution"></a>
                    <a href="/img/projets/gsb-gestion-cloture/08-services1.png" target="_blank">
                        <p class="text-center">Service en cours d'exécution</p>
                    </a>
                </div>
            </div>
            <div class="mb-5">
                <h3 id="item-9">Conclusion</h3>
                <p class="text-justify">
                    Ce projet m'a permis de découvrir la création d'un service Windows et de me familiariser avec la création de classes et de tests unitaires. <br>
                    La création et le déploiement d'un tel service, automatisant des tâches répétitives, peut permettre à une entreprise de gagner en productivité.
                </p>
            </div>
        </div>
        <div class="article-nav col-xl-3 d-none d-xl-block bd-toc">
            <nav class="navbar navbar-light bg-light">
                <nav class="nav nav-pills flex-column mx-auto">
                    <a class="nav-link" href="#item-1">Ressources et documents du projet</a>
                    <a class="nav-link" href="#item-2">Présentation du projet</a>
                    <a class="nav-link" href="#item-3">Préparation du projet</a>
                    <a class="nav-link" href="#item-4">Classe d'accès aux données</a>
                    <a class="nav-link" href="#item-5">Classe de gestion des dates</a>
                    <a class="nav-link" href="#item-6">Réalisation de tests unitaires</a>
                    <a class="nav-link" href="#item-7">Classe de gestion du Timer et des requêtes SQL</a>
                    <a class="nav-link" href="#item-8">Création et installation du service Windows</a>
                    <a class="nav-link" href="#item-9">Conclusion</a>
                </nav>
            </nav>
        </div>
    </div>
</div>
<?php require '../../inc/footer.php'; ?>