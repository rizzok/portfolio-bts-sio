### Qu'est ce que le développement web ?
Le développement Web désigne de manière générale les tâches associées au développement de sites Web destinés à être hébergés via un intranet ou Internet. Le processus de développement web comprend, entre autres, la conception de sites web, le développement de contenu web, l’élaboration de scripts côté client ou côté serveur et la configuration de la sécurité du réseau. <br>
Le développement Web est le codage ou la programmation qui permet de faire fonctionner un site Web, selon les exigences du propriétaire. Il traite principalement de l’aspect non conceptuel de la création de sites Web, qui comprend le codage et l’écriture du balisage.<br>
Le développement Web va de la création de pages en texte brut à des applications Web complexes, des applications de réseaux sociaux et des applications commerciales électroniques.



### Mon parcours professionnel en tant de développeur web

## Mes débuts dans l'entreprise Via Santé
J'ai été embauché par l'entreprise Via Santé en 2014, en tant que préparateur de commandes.<br>
L'entreprise Via Santé est une petite société de moins de 10 employés, dont la marque est La Boutique des Jambes. Elle vend des produits pour le bien-être des jambes : bas de contention, chaussettes sans élastiques, compléments alimentaires et accessoires.<br>
A mon arrivée, l'entreprise n'a pas de site internet, c'est une entreprise de vente à distance, qui envoie ses catalogues et offres promotionnelles par le biais La Poste, et fait de la publicité dans des magazines principalement.<br>
# Premiers pas en tant que développeur web, dans un contexte professionnel
En 2015, j'ai proposé de faire un site vitrine, car je trouvais dommage qu'une entreprise de vente à distance n'ait pas de visibilité sur internet. C'est à la fois important pour l'image de marque ainsi que pour la confiance des clients. Je développe donc un site que j'ai codé en HTML / CSS<br>
En 2016, je propose de développer un site de vente en ligne. Ma demande est acceptée, j'arrête la préparation de commandes pour me consacrer uniquement au développement et à la gestion du site de e-commerce.<br>

## Création et gestion du site de e-commerce : www.laboutiquedesjambes.com
------ https://www.laboutiquedesjambes.com/ -------
# Choix de la solution Prestashop
J'ai fait le choix de développer le site via le CMS (Gestionnaire de contenu) Prestashop, qui est une application web open source axée sur la création de boutique de vente en ligne, ce qui correspond parfaitement à mes attentes.<br>
D'autres CMS proposant plus ou moins les même services sont disponibles, mais le fait que Prestashop soit open source, dispose d'une grande communauté, de forums d'entraide et qu'il soit mis à jour régulièrement m'ont conforté dans ce choix.
# Formation personnelle
Mes connaissances dans le développement web se limitaient au HTML / CSS en 2017, j'ai donc commencé à étudier les différentes technologies et languages qui me seraient utiles : PHP, JavaScript, approfondissement du HTML / CSS, étude de la documentation Prestashop et des fondamentaux lié à la mise en place d'un site.<br>
Vu que cela me passionnait et que je voulait avancer rapidement, j'étudiais également chez moi après le travail, pour me perfectionner.<br>
C'est à ce moment là que j'ai fait le choix m'inscrire à la formation à distance du BTS SIO option SLAM, par le biais du CNED. Parce que je me suis rendu compte qu'en étant débutant et en essayant de me former sur internet, l'apprentissage se faisait de manière destructuré et j'avais l'impression de ne pas évoluer rapidement.<br>
# Mise en place d'un site de test en local
Pour commencer, j'ai développé le site en local, grâce à l'IDE NetBeans et à WampServer, qui permet de faire fonctionner localement des scripts PHP, comprend aussi un serveur HTTP Apache et un Système de Gestion de Bases de Données MySQL.<br>
J'ai mis en place et me suis initié à l'utilisation de Git et GitHub, qui m'ont par la suite servi à de multiples reprises : pour récupération de fichiers après une mauvaise manipulation ou la création de branches secondaires pour faire des tests.<br>
# Mise en ligne du site
Le site local terminé et prêt à être mis en production, j'ai effectué la mise en ligne de celui-ci et le remplacement du site vitrine qu'il y avait auparavent.<br>
La mise en ligne consiste à : 
- Créer et importer la base de données
- Mettre à jour la base de données avec des requêtes de type UPDATE
- Copier les dossiers et fichiers dans le répertoire www sur l'hébergement web via FileZilla
- Mettre à jour les fichiers qui comportent des information d'accès à la base de données
Pour plus de détails, vous pouvez voir le fichier Word que j'avais fait, qui liste les différentes étapes pour copier le site en local (pour le mettre en ligne, il suffit de faire la manipulation inverse) : 
--------- LIEN VERS /pages/competences/developpement-web/prestashop-passer-le-site-en-local.docx -----------
# Configuration et tests de modules
Par la suite, il a fallu configurer et tester différents modules, comme les modules de paiement par carte bancaire, qui ne peuvent être testés qu'une fois mis en place sur le nom de domaine final. Dans notre cas, le module de paiement de la banque CIC et le module PayPal.<br>
Ces modules fonctionnent via des API (interface de programmation d'application), qui ont pour but de faire communiquer le site de vente avec le site proposant le service de paiement.
# Perfectionnement du site et ajout de modules
Pour approfondir et perfectionner le site, j'ai étudié l'architecture et le fonctionnement de Prestashop.<br>
Prestashop utilise le framework PHP Symfony, qui sépare le code en trois couches, selon le modèle MVC (Modèle-Vue-Contrôleur).<br>
Ce CMS est évolutif grâce à l'ajout de modules. Il utilise les moteurs de templates Twig et Smarty, permettant la séparation entre la logique et la présentation, suivant la logique MVC.<br>
<br>
Avec ces connaissances, j'ai codé la plupart des pages du site en PHP et HTML pour plus de personnalisation et d'optimisation, plutôt que d'utiliser l'outil WYSIWYG -----LIEN VERS : https://fr.wikipedia.org/wiki/What_you_see_is_what_you_get ------- du back office, qui génère beaucoup de code inutile et qui pénalise le site pour le référencement.<br>
<br>
J'ai aussi créé un module pour la page de contact, car les options proposées par le module Prestashop étaient trop limitées, en y ajoutant notament une carte indiquant les coordonnées de l'entreprise et le module reCAPTCHA de Google pour limiter le SPAM.
Voici des captures d'écran du code et de la page de contact, avant et après création du module :
---------------- CAPTURES--------------------
img\competences\developpement-web\prestashop-contactform\01-contact-base.jpg
Page contact Prestashop d'origine
img\competences\developpement-web\prestashop-contactform\02-contact-modifie.jpg
Page contact après création du module
img\competences\developpement-web\prestashop-contactform\03-code-contactform.png
Une partie du code du module créé

# Migration du site vers une mise à jour majeure de Prestashop
Lors de la création du site, Prestashop était en version 1.6. Quelques mois plus tard, quand la version 1.7 est sortie, en me documentant, j'ai vu qu'elle corrigeait beaucoup de problèmes de la 1.6 et des failles de sécurité.<br>
J'ai d'abord fait la mise à jour en local pour tester / adapter les différents modules et la base de données à cette nouvelle version. Puis je l'ai mise en production, en changeant aussi la version de PHP sur l'hébergement OVH du site, en passant de la version 5.6 à la version 7.0.


## Création et gestion du site de e-commerce : www.surlesentierdesbergers.fr
----- https://www.surlesentierdesbergers.fr/fr/ -----
Fin 2018, mes anciens employeurs m'ont demandé de créer un second site de vente en ligne, pour une société qu'ils sous-traitent, dont la marque est "Sur le Sentier des Bergers". Cette marque propose des produits d'épicerie fine et fait de la vente aux professionnel exclusivement (B2B). La création d'un site de e-commerce est une opportunité, pour cette entreprise, de se lancer dans la vente aux particuliers.<br>
Pour créer ce site, j'ai repris les mêmes bases que pour le site de "La Boutique des Jambes" : j'ai installé de Prestashop en local, créé le site, puis une fois prêt, je l'ai mis en ligne.

## Création et gestion du site de e-commerce B2B : pro.surlesentierdesbergers.fr
----- https://pro.surlesentierdesbergers.fr/fr/ -----
En octobre 2019, la gérante de la société dont la marque est "Sur le Sentier des Bergers" m'a demandé de créer un site destiné à la vente aux professionnels (B2B), qui est le coeur de son activité.<br>
Ce site doit répondre à des besoins spécifiques, différents des site destinés à la vente aux particuliers que j'avais créé jusqu'à présent. Les modules intégrés à Prestashop étant limités, j'ai moi-même modifié des modules ou fichiers template, quand je le pouvais, sinon j'ai cherché des modules sur la plateforme de vente de Prestashop.<br> 

Voici les différents cas d'utilisation auxquel le site répond : 
- Si un utilisateur se rend sur le site et n'est pas connecté, les prix doivent être masqués. Un message indique de se connecter ou de créer un compte si l'utilisateur est un professionnel, sinon de se rendre sur le site grand public.<br>
------- img\competences\developpement-web\ssb-prix-masque.png
----------------------- CODE ? ----------------------

- Pour s'inscrire, un professionnel doit d'abord remplir le formulaire d'inscription, puis attendre de se faire accepter par un administrateur. 
- La vente ne peut se faire que par lot de produits. Le nombre d'unités par cartons est précisé sur chaque fiche produit et le prix est calculé en fontion des lots, en hors taxe, car destiné aux professionnels.

## Organisation des tâches et gestion dans le temps
Lorsque j'ai dû travailler et gérer 3 sites simultanément, j'ai très vite été débordé par les différentes demandes et tâches à effectuer.<br>
Je me suis alors remis en question concernant mon organisation et fait de recherches pour m'améliorer dans ce domaine.<br>
Mes recherches ont abouties sur la matrice d'Eisenhower, qui est un outil d'analyse et de gestion du temps très pratique permettant de classer les tâches à faire en fonction de leur urgence ainsi que de leur importance :
--------------- PHOTO : img\competences\developpement-web\matrice-eisenhower.png
Pour ce faire, j'ai utilisé Trello pour le listing et l'organisation des tâches, selon leur degrès d'urgence/importance.
Et pour ce qui est de la répartition de ces tâches dans le temps, j'ai utilisé Google Agenda.
L'avantage d'utiliser les applications web que sont Trello et Google Agenda, permettent à d'autres personnes d'y accéder et les modifier facilement.

## Gestion des sites en général et de ce qu'il y a autour
<i>Je détaille uniquement ce qui a attrait au développement, pour rester dans le cadre de ma spécialité</i>

Pour améliorer le site : 
- l'expérience utilisateur sur le site (UX), modification et réagencement de la plupart des pages du site pour améliorer la clarté. Surtout sur le site de La Boutique des Jambes, où l'age moyen des utilisateurs est élevé, donc le texte a été grossi, les bouttons disposés de manière pratique et allant à l'essentiel. 
- Personnalisation des factures : modification du code des factures pour un afficage personnalisé.

Sauvagardes et résolution de problèmes : 
- Sauvegarde quotidienne du site et de la base de données, pour pouvoir restaurer les site en limitant la perte de données, en cas de problème.
- Lors de certaines installations ou mise à jour de module, il est arrivé que des problèmes surviennent. Dans ce cas, j'essayais de résoudre ce problème par moi-même, sinon je contactais le développeur.

Gestion des utilisateurs du back-office (espace d'administration) :
- Création de comptes employés et attribution de différents droits selon le rôle de l'utilisateur : saisie de commande, préparation, comptable, direction.

Pour accroître les ventes des sites, il a fallu optimiser différentes parties :
- le référencement naturel (SEO) : création de parties blog et optimisation du contenu et du code HTML de toutes les pages : 
  Partie Blog du site Sur le Sentier des Bergers
  https://www.surlesentierdesbergers.fr/fr/content/20-le-blog-gourmand
  Partie Conseils du site La Boutique des Jambes
  https://www.laboutiquedesjambes.com/conseils
- le référencement payant (SEA) : création de campagnes via Google Ads, codage de pages d'attérissage vers des promos attrayantes, spécialement mises en place pour l'acquisition de nouveaux clients. 
- la visibilité sur les réseaux sociaux (SMO), 
- la création de campagnes e-mailing et de newsletter en se servant de notre base de données : modification du code des e-mails d'origine.

Création de documentations utilisateur : 
- Guide pour l'envoi de notification aux clients : 
pages\competences\developpement-web\guide-notification-client.pdf
- Guide expliquant comment changer de promo sur le site : 
pages\competences\developpement-web\changement-promo-site-bj.pdf


## Conclusion et futur projet
Mon expérience professionnelle et mes années de formations m'ont permis d'apprendre à développer et à gérer des sites dans leur ensemble.<br>
Cette expérience me permet d'avoir une vision plus approfondie et globale du développement web, et m'a permis de déterminer ce qui me plaisait le plus : le développement back-office (développement côté serveur), et plus particulièrement le language PHP et les frameworks PHP. <br>
Par la suite, j'ai d'ailleur comme projet de me lancer en tant qu'auto-entrepreneur, afin de proposer mes services dans ce domaine, tout en continuant à me former.
BROUILLON: 
Ce que je peux tirer de cette expérience professionnelle : 
La participation à l'évolution informatique et digitale d'une petite entreprise m'a permis d'avoir une vision globale du potentiel évolutif que cela peut avoir. Gain de productivité, amélioration des ventes, de l'image des marques, mise en place d'un cercle vertueux avec le SMO, de la communication, ... (chercher sur google, les différents atouts de la digitalisation).
L'inconvénient de travailler en tant que seul informaticien dans une petite entreprise est le fait de devoir gérer tout ce qui touche à l'informatique, allant de simples pannes d'imprimantes à de la création graphique ou de la création de campagnes Google Ads. Cela empêche de pouvoir évoluer rapidement dans une spécialité.
-RESTRUCTURER AVANTAGES ET INCONVENIENTS ?- 


VOIR INFOS COMPLEMENTAIRES :
C:\wamp64\www\portfolio\pages\competences\brouillon-devweb.md