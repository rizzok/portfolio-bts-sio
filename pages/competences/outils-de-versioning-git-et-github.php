<?php
$page_title = "Outils de versioning : Git et GitHub | Portfolio de Kévin RIZZO";
$page_description = "Présentation des outils de versioning : Git et GitHub | Compétences BTS SIO";
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
                        <li class="breadcrumb-item active" aria-current="page">Outils de versioning : Git et GitHub</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container py-5 article-title-margin">
            <div class="row">
                <div class="col-xl-9">
                    
                    <h2 class="text-center">Outils de versioning : Git et GitHub</h2>
                    
                    <div>
                        <img src="/img/competences/git-github.jpg" class="card-img-top" alt="Git et GitHub">
                    </div>

                    <div class="mt-3 mb-5">                    
                        <h3 id="item-1">À quoi servent Git et GitHub ?</h3>
                        <p class="text-justify"><b>Git</b> est un outil open source gratuit, qui permet à chaque utilisateur du projet de disposer de l’historique de son code. Git permet d’enregistrer des instantanés de fichiers, de suivre l’évolution et l’historique des modifications effectuées, de créer des branches secondaires dans un projet, afin de soumettre par la suite ses modifications à son équipe, en vue de combiner le nouveau code dans la branche principale du projet.</p>
                        <p class="text-justify"><b>GitHub</b> est un service web d’hébergement utilisant Git, qui permet de stocker ses projets en ligne. Il est utile pour le travail collaboratif. Disposant d'une grande communauté, GitHub offre la possibilité aux développeurs de participer à des projets open source ou simplement de s'entraider.</p>
                    </div>

                    <div class="mt-3 mb-5">                    
                        <h3 id="item-2">Utilisation dans mes projets</h3>
                        <p class="text-justify">J'associe l'utilisation de Git à l'IDE Netbeans, à partir duquel on peut gérer toutes les opérations de git, via une interface graphique.</p>
                        <p class="text-justify">C'est très pratique pour pouvoir observer, directement dans l'IDE, les changements effectués grâce à l'historique des versions :</p>
                        <div class="article-image">
                            <a href="/img/competences/git-github/git-history.png" target="_blank"><img class="img-thumbnail" src="/img/competences/git-github/git-history.png" alt="Git Historique"></a>
                            <a href="/img/competences/git-github/git-history.png" target="_blank"><p class="text-center">Afficher l'image</p></a>
                        </div>
                    </div>

                    <div class="my-5">
                        <h3 id="item-3">Pourquoi ces outils plutôt que d’autres ?</h3>
                        <p class="text-justify">Git et GitHub sont des outils efficaces et faciles d’utilisation, ce qui fait gagner du temps. GitHub propose aussi une interface graphique. C’est l’outil de versioning le plus utilisé au monde. De ce fait, il dispose d’une très grande communauté avec laquelle nous pouvons participer à des projets.</p>
                        <p class="text-justify">Comparaison avec un autre outil de versioning populaire : Subversion. Contrairement à Git, l’utilisateur de Subversion doit être connecté en permanence au dépôt distant pour pouvoir travailler dessus. Le transfert de modifications est plus rapide avec Git, étant donné que le "repository" (dépôt) est d’abord téléchargé localement.</p>
                    </div>

                    <div class="my-5">                    
                        <h3 id="item-4">Vocabulaire relatif à Git et GitHub</h3>

                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td class="td-article-defs"><b>repository</b></td>
                                    <td>répertoire dans lequel s’effectue le dépôt du projet, il peut être local ou distant</td>
                                </tr>
                                <tr>
                                    <td class="td-article-defs"><b>versioning</b></td>
                                    <td>contrôle de version, en français. Permet de conserver des instantanés de chaque point dans l’historique d’un projet</td>
                                </tr>
                                <tr>
                                    <td class="td-article-defs"><b>commit</b></td>
                                    <td>enregistrer des instantanés de fichiers de façon permanente dans l’historique des versions</td>
                                </tr>
                                <tr>
                                    <td class="td-article-defs"><b>branch</b></td>
                                    <td>permet de se détacher du projet principal, indispensable au travail collaboratif</td>
                                </tr>
                                <tr>
                                    <td class="td-article-defs"><b>merge</b></td>
                                    <td>sert à combiner une branche du projet vers la branche principale du projet</td>
                                </tr>
                                <tr>
                                    <td class="td-article-defs"><b>push</b></td>
                                    <td>envoyer</td>
                                </tr>
                                <tr>
                                    <td class="td-article-defs"><b>pull</b></td>
                                    <td>récupérer</td>
                                </tr>
                                <tr>
                                    <td class="td-article-defs"><b>pull request</b></td>
                                    <td>proposer des changements à apporter à la branche principale</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="my-5">
                        <h3 id="item-5">Principales commandes</h3>
                        <p>Voici les commandes de bases permettant de démarrer un projet en équipe sur GitHub :</p>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td class="td-article-code"><code>git init nomDuProjet</code></td>
                                    <td>Initialise / créé un dépôt local du projet</td>
                                </tr>
                                <tr>
                                    <td class="td-article-code"><code>cd nomDuProjet</code></td>
                                    <td>Entre dans le dossier qui va accueillir le projet</td>
                                </tr>
                                <tr>
                                    <td class="td-article-code"><code>git add nomDuFichier</code></td>
                                    <td>Ajoute un instantané du fichier, en préparation pour le suivi de version</td>
                                </tr>
                                <tr>
                                    <td class="td-article-code"><code>git commit -m "Résumé du commit"</code></td>
                                    <td>Enregistre des instantanés de fichiers de façon permanente dans l’historique des versions</td>
                                </tr>
                                <tr>
                                    <td class="td-article-code"><code>git log</code></td>
                                    <td>Liste l’historique des versions sur la branche courante</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr/>

                        <p>Branches : pour diviser et nommer une série de commits</p>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td class="td-article-code"><code>git branch nomDeLaBranche</code></td>
                                    <td>Crée une nouvelle branche locale</td>
                                </tr>
                                <tr>
                                    <td class="td-article-code"><code>git branch</code></td>
                                    <td>Liste les branches locales du projet</td>
                                </tr>
                                <tr>
                                    <td class="td-article-code"><code>git checkout nomDeLaBranche</code></td>
                                    <td>Bascule sur la branche choisie et met à jour le répertoire de travail</td>
                                </tr>
                                <tr>
                                    <td class="td-article-code"><code>git merge nomDeLaBranche</code></td>
                                    <td>Combine dans la branche courante l’historique de la branche spécifiée</td>
                                </tr>
                                <tr>
                                    <td class="td-article-code"><code>git branch -d nomDeLaBranche</code></td>
                                    <td>Supprime la branche spécifiée</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr/>

                        <p>Pour envoyer le dépôt local sur le dépôt distant GitHub :</p>
                        <p>Il faut d’abord créer un nouveau repository sur Github.com, puis</p>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td class="td-article-code"><code>git remote add origin urlDuRepository</code></td>
                                    <td>Crée un pont entre le dépôt local et le dépôt distant</td>
                                </tr>
                                <tr>
                                    <td class="td-article-code"><code>git push origin master</code></td>
                                    <td>Envoie le dépôt local sur GitHub</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr/>

                        <p>Pour que des collaborateurs puissent récupérer le projet :</p>
                        <p>Dans le Repository (projet) voulu, aller dans l’onglet "Settings" puis "Manage access", et "Invite a collaborator", puis :</p>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td class="td-article-code"><code>git pull origin master</code></td>
                                    <td>Récupère le dépôt</td>
                                </tr>
                            </tbody>
                        </table>

                        <hr/>
                        <div class="mt-4">
                            <p>Pour connaitre toutes les commandes, voici un lien vers l'aide-mémoire sur le site de GitHub :</p>
                            <a href="https://github.github.com/training-kit/downloads/fr/github-git-cheat-sheet/" target="_blank">https://github.github.com/training-kit/downloads/fr/github-git-cheat-sheet/</a>
                        </div>
                    </div>
                </div>
                
                <div class="article-nav col-xl-3 d-none d-xl-block bd-toc">
                    <nav class="navbar navbar-light bg-light">
                        <nav class="nav nav-pills flex-column mx-auto">
                            <a class="nav-link" href="#item-1">A quoi servent Git et GitHub ?</a>
                            <a class="nav-link" href="#item-2">Utilisation dans mes projets</a>
                            <a class="nav-link" href="#item-3">Pourquoi ces outils plutôt que d’autres ?</a>
                            <a class="nav-link" href="#item-4">Vocabulaire relatif à Git et GitHub</a>
                            <a class="nav-link" href="#item-5">Principales commandes</a>
                        </nav>
                    </nav>
                </div>

            </div>
        </div>

<?php require '../../inc/footer.php';?>