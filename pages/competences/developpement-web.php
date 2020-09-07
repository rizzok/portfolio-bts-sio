<?php
$page_title = "Développement web | Portfolio de Kévin RIZZO";
$page_description = "Présentation de ma compétence de developpeur web et de mes expériences dans ce domaine | Compétences BTS SIO";
$navbar_section = 'competences';
require '../../inc/header.php';
?>
<div id="page-top-section" class="p-3 p-md-5 text-center">
    <h1 class="display-4 font-weight-normal text-white">Compétences</h1>
</div>

<div class="breadcrumb-container d-none d-sm-block">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="breadcrumb-item-unactive">Accueil</a></li>
                <li class="breadcrumb-item"><a href="/pages/competences.php" class="breadcrumb-item-unactive">Compétences</a></li>
                <li class="breadcrumb-item active" aria-current="page">Développement web</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container py-5 article-title-margin">
    <div class="row">
        <div class="col-xl-9">

            <h2 class="text-center">Développement web</h2>

            <div>
                <img src="/img/competences/web-languages-w.jpg" class="card-img-top my-3" alt="Languages de programmation web">
            </div>

            <div class="my-5">
                <h3 id="item-1">Qu'est ce que le développement web ?</h3>
                <p class="text-justify m-3">
                    Le développement Web désigne de manière générale les tâches associées au développement de sites Web destinés à être hébergés via un intranet ou Internet. Le processus de développement web comprend, entre autres, la conception de sites web, le développement de contenu web, l’élaboration de scripts côté client ou côté serveur et la configuration de la sécurité du réseau.<br>
                    Le développement Web est le codage ou la programmation qui permet de faire fonctionner un site Web, selon les exigences du propriétaire. Il traite principalement de l’aspect non conceptuel de la création de sites Web, qui comprend le codage et l’écriture du balisage.<br>
                    Le développement Web va de la création de pages en texte brut à des applications Web complexes, des applications de réseaux sociaux et des applications commerciales électroniques.
                </p>
            </div>

            <div class="my-5">
                <h3 id="item-2">Mon parcours professionnel en tant de développeur web</h3>
                <div class="m-3">
                    <h4 class="h5">Mes débuts dans l'entreprise Via Santé</h4>
                    <p class="text-justify">
                        J'ai été embauché par l'entreprise Via Santé en 2014, en tant que préparateur de commandes.<br>
                        L'entreprise Via Santé est une petite société de moins de 10 employés, dont la marque est La Boutique des Jambes. Elle vend des produits pour le bien-être des jambes : bas de contention, chaussettes sans élastiques, compléments alimentaires et accessoires.<br>
                        A mon arrivée, l'entreprise n'a pas de site internet, c'est une entreprise de vente à distance, qui envoie ses catalogues et offres promotionnelles par le biais La Poste, et fait de la publicité dans des magazines principalement.
                    </p>
                </div>
                <div class="m-3">
                    <h4 class="h5">Premiers pas en tant que développeur web dans un contexte professionnel</h4>
                    <p class="text-justify">
                        En 2015, j'ai proposé de faire un site vitrine, car je trouvais dommage qu'une entreprise de vente à distance n'ait pas de visibilité sur internet. C'est à la fois important pour l'image de marque ainsi que pour la confiance des clients. Je développe donc un site que j'ai codé en HTML / CSS<br>
                        En 2016, je propose de développer un site de vente en ligne. Ma demande est acceptée, j'arrête la préparation de commandes pour me consacrer uniquement au développement et à la gestion du site de e-commerce.
                    </p>
                </div>
            </div>

            <div class="my-5">
                <h3 id="item-3">Création et gestion du site de e-commerce : <a href="https://www.laboutiquedesjambes.com/" target="_blank" rel="noopener noreferrer">www.laboutiquedesjambes.com</a></h3>
                <div class="article-image text-center mb-4">
                    <a href="https://www.laboutiquedesjambes.com/" target="_blank" rel="noopener noreferrer">
                        <img class="img-thumbnail" src="/img/projets/bj.jpg" alt="Logo La Boutique des Jambes">
                    </a>
                </div>
                <div class="m-3">
                    <h4 class="h5">Choix de la solution Prestashop</h4>
                    <P class="text-justify">
                        J'ai fait le choix de développer le site via le CMS (Gestionnaire de contenu) Prestashop, qui est une application web open source axée sur la création de boutique de vente en ligne, ce qui correspond parfaitement à mes attentes.<br>
                        D'autres CMS proposant plus ou moins les même services sont disponibles, mais le fait que Prestashop soit open source, dispose d'une grande communauté, de forums d'entraide et qu'il soit mis à jour régulièrement m'ont conforté dans ce choix.
                    </P>
                </div>
                <div class="m-3">
                    <h4 class="h5">Formation personnelle</h4>
                    <P class="text-justify">
                        Mes connaissances dans le développement web se limitaient au HTML / CSS en 2017, j'ai donc commencé à étudier les différentes technologies et languages qui me seraient utiles : PHP, JavaScript, approfondissement du HTML / CSS, étude de la documentation Prestashop et des fondamentaux lié à la mise en place d'un site.<br>
                        Vu que cela me passionnait et que je voulait avancer rapidement, j'étudiais également chez moi après le travail, pour me perfectionner.<br>
                        C'est à ce moment là que j'ai fait le choix m'inscrire à la formation à distance du BTS SIO option SLAM, par le biais du CNED. Parce que je me suis rendu compte qu'en étant débutant et en essayant de me former sur internet, l'apprentissage se faisait de manière destructuré et j'avais l'impression de ne pas évoluer rapidement.
                    </P>
                </div>
                <div class="m-3">
                    <h4 class="h5">Mise en place d'un site de test en local</h4>
                    <P class="text-justify">
                        Pour commencer, j'ai développé le site en local, grâce à l'IDE NetBeans et à WampServer, qui permet de faire fonctionner localement des scripts PHP, comprend aussi un serveur HTTP Apache et un Système de Gestion de Bases de Données MySQL.<br>
                        J'ai mis en place et me suis initié à l'utilisation de Git et GitHub, qui m'ont par la suite servi à de multiples reprises : pour récupération de fichiers après une mauvaise manipulation ou la création de branches secondaires pour faire des tests.
                    </P>
                </div>
                <div class="m-3">
                    <h4 class="h5">Mise en ligne du site</h4>
                    <P class="text-justify">
                        Le site local terminé et prêt à être mis en production, j'ai effectué la mise en ligne de celui-ci et le remplacement du site vitrine qu'il y avait auparavent.<br>
                        La mise en ligne consiste à :
                    </P>
                    <ul>
                        <li>Créer et importer la base de données</li>
                        <li>Mettre à jour la base de données avec des requêtes de type UPDATE</li>
                        <li>Copier les dossiers et fichiers dans le répertoire www sur l'hébergement web via FileZilla</li>
                        <li>Mettre à jour les fichiers qui comportent des information d'accès à la base de données</li>
                    </ul>
                    <P class="text-justify">Pour plus de détails, vous pouvez voir le fichier Word que j'avais fait, qui liste les différentes étapes pour copier le site en local (pour le mettre en ligne, il suffit de faire la manipulation inverse) :</P>
                    <div class="text-center mt-3">
                        <a href="/pages/competences/developpement-web/prestashop-passer-le-site-en-local.docx" class="button-icon-link">
                            <button type="button" class="btn btn-outline-primary mx-3">Voir le fichier</button>
                            <span style="color: blue; vertical-align: middle;">
                                <i class="far fa-file-word fa-2x"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="m-3">
                    <h4 class="h5">Configuration et tests de modules</h4>
                    <P class="text-justify">
                        Par la suite, il a fallu configurer et tester différents modules, comme les modules de paiement par carte bancaire, qui ne peuvent être testés qu'une fois mis en place sur le nom de domaine final. Dans notre cas, le module de paiement de la banque CIC et le module PayPal.<br>
                        Ces modules fonctionnent via des API (interface de programmation d'application), qui ont pour but de faire communiquer le site de vente avec le site proposant le service de paiement.
                    </P>
                </div>
                <div class="m-3">
                    <h4 class="h5">Perfectionnement du site et ajout de modules</h4>
                    <P class="text-justify">
                        Pour approfondir et perfectionner le site, j'ai dû étudier l'architecture et le fonctionnement de Prestashop.<br>
                        Prestashop utilise le framework PHP Symfony, qui sépare le code en trois couches, selon le modèle MVC (Modèle-Vue-Contrôleur).<br>
                        Ce CMS est évolutif grâce à l'ajout de modules. Il utilise les moteurs de templates Twig et Smarty, permettant la séparation entre la logique et la présentation, suivant la logique MVC.<br>
                        <br>
                        Avec ces connaissances, j'ai codé la plupart des pages du site en PHP et HTML pour plus de personnalisation et d'optimisation, plutôt que d'utiliser l'outil <a href="https://fr.wikipedia.org/wiki/What_you_see_is_what_you_get" target="_blank">WYSIWYG*</a> du back office, qui génère beaucoup de code inutile et qui pénalise le site pour le référencement.<br>
                        <br>
                        J'ai aussi créé un module pour la page de contact, car les options proposées par le module Prestashop étaient trop limitées, en y ajoutant notament une carte indiquant les coordonnées de l'entreprise et le module reCAPTCHA de Google pour limiter le SPAM.
                        Voici des captures d'écran du code et de la page de contact, avant et après création du module :
                        <div class="article-image text-center mb-4">
                            <a href="/img/competences/developpement-web/prestashop-contactform/01-contact-base.jpg" target="_blank"><img class="img-thumbnail" src="/img/competences/developpement-web/prestashop-contactform/01-contact-base.jpg" alt="Page contact Prestashop d'origine"></a>
                            <a href="/img/competences/developpement-web/prestashop-contactform/01-contact-base.jpg" target="_blank">
                                <p class="text-center">Page contact Prestashop d'origine</p>
                            </a>
                        </div>
                        <div class="article-image text-center mb-4">
                            <a href="/img/competences/developpement-web/prestashop-contactform/02-contact-modifie.jpg" target="_blank"><img class="img-thumbnail" src="/img/competences/developpement-web/prestashop-contactform/02-contact-modifie.jpg" alt="Page contact après création du module"></a>
                            <a href="/img/competences/developpement-web/prestashop-contactform/02-contact-modifie.jpg" target="_blank">
                                <p class="text-center">Page contact après création du module</p>
                            </a>
                        </div>
                        <div class="article-image text-center mb-4">
                            <a href="/img/competences/developpement-web/prestashop-contactform/03-code-contactform.png" target="_blank"><img class="img-thumbnail" src="/img/competences/developpement-web/prestashop-contactform/03-code-contactform.png" alt="Une partie du code du module créé"></a>
                            <a href="/img/competences/developpement-web/prestashop-contactform/03-code-contactform.png" target="_blank">
                                <p class="text-center">Une partie du code du module créé</p>
                            </a>
                        </div>
                    </P>
                </div>
                <div class="m-3">
                    <h4 class="h5">Migration vers une mise à jour majeure de Prestashop</h4>
                    <P class="text-justify">
                        Lors de la création du site, Prestashop était en version 1.6. Quelques mois plus tard, quand la version 1.7 est sortie, en me documentant, j'ai vu qu'elle corrigeait beaucoup de problèmes de la 1.6 et des failles de sécurité.<br>
                        J'ai d'abord fait la mise à jour en local pour tester / adapter les différents modules et la base de données à cette nouvelle version. Puis je l'ai mise en production, en changeant aussi la version de PHP sur l'hébergement OVH du site, en passant de la version 5.6 à la version 7.0, qui est plus performante et sécurisée.
                    </P>
                    <p class="text-justify">
                        Quelques jours après avoir mis le site en ligne, des clients se sont plaint d'une anomalie liée à un mauvais calcul des réductions lors du paiement.<br>
                        Le point commun entre ces clients est qu'ils avaient utilisés PayPal comme mode de paiement.<br>
                        Après avoir fait des recherches et analysé le code pas à pas sur l'IDE NetBeans, grâce à l'outil Xdebug, j'en ai déduit que le problème venait du fait que les remises sur différentes promotions cumulables, ne se cumulaient justement pas.<br>
                        Pour résoudre ce problème, j'ai ajouté la ligne de code suivante, à la méthode d'une classe du module PayPal :
                    </p>
                    <p>Avant résolution du problème : </p>
                    <div class="article-image text-center mb-4">
                        <a href="/img/competences/developpement-web/probleme-module-paypal/resolution-de-probleme-paypal-avant.png" target="_blank"><img class="img-thumbnail" src="/img/competences/developpement-web/probleme-module-paypal/resolution-de-probleme-paypal-avant.png" alt="Problème Paypal - avant"></a>
                    </div>
                    <p>Après résolution du problème (ajout de la ligne 293) : </p>
                    <a href="/img/competences/developpement-web/probleme-module-paypal/resolution-de-probleme-paypal-apres.png" target="_blank"><img class="img-thumbnail" src="/img/competences/developpement-web/probleme-module-paypal/resolution-de-probleme-paypal-apres.png" alt="Problème Paypal - après"></a>
                </div>
            </div>

            <div class="my-5">
                <h3 id="item-4">Création et gestion du site de e-commerce : <a href="https://www.surlesentierdesbergers.fr/fr/" target="_blank" rel="noopener noreferrer">www.surlesentierdesbergers.fr</a></h3>
                <div class="article-image text-center mb-4">
                    <a href="https://www.surlesentierdesbergers.fr/fr/" target="_blank" rel="noopener noreferrer">
                        <img class="img-thumbnail" src="/img/projets/ssb-b2c.jpg" alt="Logo Sur le Sentier des Bergers">
                    </a>
                </div>
                <P class="text-justify m-3">
                    Fin 2018, mes anciens employeurs m'ont demandé de créer un second site de vente en ligne, pour une société qu'ils sous-traitent, dont la marque est "Sur le Sentier des Bergers". Cette marque propose des produits d'épicerie fine et fait de la vente aux professionnel exclusivement (B2B). La création d'un site de e-commerce est une opportunité, pour cette entreprise, de se lancer dans la vente aux particuliers.<br>
                    Pour créer ce site, j'ai repris les mêmes bases que pour le site de "La Boutique des Jambes" : j'ai installé de Prestashop en local, créé le site, puis une fois prêt, je l'ai mis en ligne.
                </P>
            </div>

            <div class="my-5">
                <h3 id="item-5">Création et gestion du site de e-commerce B2B : <a href="https://pro.surlesentierdesbergers.fr/fr/" target="_blank" rel="noopener noreferrer">pro.surlesentierdesbergers.fr</a></h3>
                <div class="article-image text-center mb-4">
                    <a href="https://pro.surlesentierdesbergers.fr/fr/" target="_blank" rel="noopener noreferrer">
                        <img class="img-thumbnail" src="/img/projets/ssb-b2b.jpg" alt="Logo Sur le Sentier des Bergers Pro">
                    </a>
                </div>
                <P class="text-justify m-3">
                    En octobre 2019, la gérante de la société dont la marque est "Sur le Sentier des Bergers" m'a demandé de créer un site destiné à la vente aux professionnels (B2B), qui est le coeur de son activité.<br>
                    Ce site doit répondre à des besoins spécifiques, différents des site destinés à la vente aux particuliers que j'avais créé jusqu'à présent. Les modules intégrés à Prestashop étant limités, j'ai moi-même modifié des modules ou fichiers template, quand je le pouvais, sinon j'ai cherché des modules sur la plateforme de vente de Prestashop.<br>
                    Voici les différents cas d'utilisation auxquel le site répond :
                </P>
                <ul>
                    <li>Si un utilisateur se rend sur le site et n'est pas connecté, les prix doivent être masqués. Un message indique de se connecter ou de créer un compte si l'utilisateur est un professionnel, sinon de se rendre sur le site grand public : </li>
                    <div class="article-image text-center mt-2 mb-3">
                        <a href="/img/competences/developpement-web/ssb-prix-masque.png" target="_blank"><img class="img-thumbnail" src="/img/competences/developpement-web/ssb-prix-masque.png" alt="Affichage fiche produit site pro"></a>
                    </div>
                    <!-- ----------- AJOUTER CAPTURE OU LIEN VERS CODE ------------ -->
                    <li>Pour s'inscrire, un professionnel doit d'abord remplir le formulaire d'inscription, puis attendre de se faire accepter par un administrateur.</li>
                    <li>La vente ne peut se faire que par lot de produits. Le nombre d'unités par cartons est précisé sur chaque fiche produit et le prix est calculé en fontion des lots, en hors taxe, car destiné aux professionnels.</li>
                </ul>
            </div>

            <div class="my-5">
                <h3 id="item-6">Organisation des tâches et gestion du temps</h3>
                <p class="text-justify m-3">
                    Lorsque j'ai dû gérer et travailler sur 3 sites simultanément, j'ai très vite été débordé par les différentes demandes et tâches à effectuer.<br>
                    Je me suis alors remis en question concernant mon organisation et fait de recherches pour m'améliorer dans ce domaine.<br>
                    Mes recherches ont abouties sur la matrice d'Eisenhower, qui est un outil d'analyse et de gestion du temps très pratique, permettant de classer les tâches à faire, en fonction de leur urgence et de leur importance :
                </p>
                <div class="article-image text-center mt-2 mb-3">
                    <a href="/img/competences/developpement-web/matrice-eisenhower.png" target="_blank"><img class="img-thumbnail" src="/img/competences/developpement-web/matrice-eisenhower.png" alt="Matrice d'Eisenhower"></a>
                    <a href="/img/competences/developpement-web/matrice-eisenhower.png" target="_blank">
                        <p class="text-center">Matrice d'Eisenhower</p>
                    </a>
                </div>
                <p class="text-justify">
                    Pour mettre un place cette méthode, j'ai utilisé Trello pour le listing et l'organisation des tâches, selon leur degrès d'urgence/importance. Et pour ce qui est de la répartition de ces tâches dans le temps, j'ai utilisé Google Agenda.<br>
                    L'utilisation d'application web comme celles-ci est très pratique pour le travail collaboratif. Elles permettent à d'autres acteurs du projet, de pouvoir les visualiser et les modifier facilement.
                </p>
            </div>

            <div class="my-5">
                <h3 id="item-7">Améliorations, gestion des sites et tâches annexes</h3>
                <p class="m-3"><i>Je synthétise volontairement ce qui n'a pas attrait au développement web.</i></p>
                <div class="m-3">
                    <p class="text-justify">Améliorations : </p>
                    <ul>
                        <li>Réflexions et modifications liées à l'expérience utilisateur sur le site (UX), modification et réagencement de la plupart des pages du site pour améliorer la clarté. Surtout sur le site de La Boutique des Jambes, où l'age moyen des utilisateurs est élevé et il faut simplifier et aller à l'essentiel les intéractions des utilisateurs.</li>
                        <li>Personnalisation des factures : modification du code des factures pour un afficage personnalisé.</li>
                    </ul>
                </div>
                <div class="m-3">
                    <p class="text-justify">Sauvagardes et résolution de problèmes : </p>
                    <ul>
                        <li>Sauvegarde quotidienne du site et de la base de données, pour pouvoir restaurer les site en limitant la perte de données, en cas de problème.</li>
                        <li>Lors de certaines installations ou mise à jour de module, il est arrivé que des problèmes surviennent. Dans ce cas, j'essayais de résoudre ce problème par moi-même, sinon je contactais le développeur.</li>
                    </ul>
                </div>
                <div class="m-3">
                    <p class="text-justify">Gestion des utilisateurs du back-office (espace d'administration) :</p>
                    <ul>
                        <li>Création de comptes employés et attribution de différents droits selon le rôle de l'utilisateur : saisie de commande, préparation, comptable, direction.</li>
                    </ul>
                </div>
                <div class="m-3">
                    <p class="text-justify">Pour accroître les ventes des sites, il a fallu optimiser différentes parties :</p>
                    <ul>
                        <li>le référencement naturel (SEO) : création de parties blog et optimisation du contenu et du code HTML de toutes les pages :</li>
                        <p class="my-2"> → <a href="https://www.surlesentierdesbergers.fr/fr/content/20-le-blog-gourmand" target="_blank" rel="noopener noreferrer">Partie Blog du site Sur le Sentier des Bergers</a></p>
                        <p class="my-2"> → <a href="https://www.laboutiquedesjambes.com/conseils" target="_blank" rel="noopener noreferrer">Partie Conseils du site La Boutique des Jambes</a></p>
                        <li>le référencement payant (SEA) : création de campagnes via Google Ads, codage de pages d'attérissage vers des promos attrayantes, spécialement mises en place pour l'acquisition de nouveaux clients.</li>
                        <li>la visibilité sur les réseaux sociaux (SMO),</li>
                        <li>la création de campagnes e-mailing et de newsletter en se servant de notre base de données : modification du code des e-mails d'origine.</li>
                    </ul>
                </div>
                <div class="m-3">
                    <p class="text-justify">Création de documentations utilisateur : </p>
                    <ul>
                        <li>Guide pour l'envoi de notification aux clients :</li>
                        <div class="mt-2 mb-3">
                            <a href="/pages/competences/developpement-web/guide-notification-client.pdf" class="button-icon-link" target="_blank">
                                <button type="button" class="btn btn-outline-primary mx-3">Voir la documentation</button>
                                <span style="color: red; vertical-align: middle;">
                                    <i class="far fa-file-pdf fa-2x"></i>
                                </span>
                            </a>
                        </div>

                        <li>Guide expliquant comment changer de promo sur le site :</li>
                        <div class="my-2 mb-3">
                            <a href="/pages/competences/developpement-web/changement-promo-site-bj.pdf" class="button-icon-link" target="_blank">
                                <button type="button" class="btn btn-outline-primary mx-3">Voir la documentation</button>
                                <span style="color: red; vertical-align: middle;">
                                    <i class="far fa-file-pdf fa-2x"></i>
                                </span>
                            </a>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="my-5">
                <h3 id="item-8">Conclusion et futurs projets</h3>
                <p class="text-justify m-3">La participation à l'évolution informatique et digitale d'une entreprise pendant 5 ans, ainsi que mes années de formation, m'ont permis d'avoir une vision plus globale et approfondie du développement web.</p>
                <p class="text-justify m-3">
                    Cette expérience m'a également permis de me rendre compte du potentiel évolutif qu'une telle évolution peut engendrer pour une entreprise : amélioration des ventes, amélioration de l'image de la marque, mise en place d'un cercle vertueux avec le <a href="https://www.definitions-marketing.com/definition/sem/" target="_blank" rel="noopener noreferrer">SEM*</a> , meilleure communication et contact avec le client, gain de productivité, ...<br>
                    A titre personnel, cette expérience m'a permis de déterminer ce qui me plaisait le plus : le développement back-office (développement côté serveur), et plus particulièrement le language et les frameworks PHP.
                </p>
                <p class="text-justify m-3">Par la suite, j'ai pour projet de me lancer en tant qu'auto-entrepreneur, afin de proposer mes services dans ce domaine, tout en continuant à me former.</p>
            </div>
        </div>

        <div class="article-nav col-xl-3 d-none d-xl-block bd-toc">
            <nav class="navbar navbar-light bg-light">
                <nav class="nav nav-pills flex-column mx-auto">
                    <a class="nav-link" href="#item-1">Qu'est ce que le développement web ?</a>
                    <hr class="my-1">
                    <a class="nav-link" href="#item-2">Mon parcours professionnel en tant de développeur web</a>
                    <hr class="my-1">
                    <a class="nav-link" href="#item-3">Création et gestion du site de e-commerce : www.laboutiquedesjambes.com</a>
                    <hr class="my-1">
                    <a class="nav-link" href="#item-4">Création et gestion du site de e-commerce : www.surlesentierdesbergers.fr</a>
                    <hr class="my-1">
                    <a class="nav-link" href="#item-5">Création et gestion du site de e-commerce B2B : pro.surlesentierdesbergers.fr</a>
                    <hr class="my-1">
                    <a class="nav-link" href="#item-6">Organisation des tâches et gestion du temps</a>
                    <hr class="my-1">
                    <a class="nav-link" href="#item-7">Améliorations, gestion des sites et tâches annexes</a>
                    <hr class="my-1">
                    <a class="nav-link" href="#item-8">Conclusion et futurs projets</a>
                </nav>
            </nav>
        </div>

    </div>
</div>
<?php require '../../inc/footer.php' ?>