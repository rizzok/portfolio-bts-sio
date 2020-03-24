<?php require '../inc/header.php';?>

        <div id="page-top-section" class="p-3 p-md-5 text-center">
            <h1 class="display-4 font-weight-normal text-white">Compétences</h1>
        </div>

        <div class="breadcrumb-container d-none d-sm-block">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" class="breadcrumb-item-unactive">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="/competences.php" class="breadcrumb-item-unactive">Compétences</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Outils de versioning : Git et GitHub</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container py-5 article-title-margin">
            <div class="row">



                <div class="col-lg-8 text-justify">
                    
                    <h2 class="text-center">Outils de versioning : Git et GitHub</h2>
                    
                    <div>
                        <img src="/img/competences/git-github.jpg" class="card-img-top" alt="Git et GitHub">
                    </div>

                    <div class="mt-3 mb-5">                    
                        <h3 id="item-1">A quoi servent Git et GitHub ?</h3>
                        <p>Git est un outil open source gratuit, qui permet à chaque utilisateur du projet de disposer en local de l’historique de son code. Git permet d’enregistrer des instantanés de fichiers, suivre l’évolution et l’historique des modifications effectuées, créer des branches secondaires dans un projet, afin de soumettre par la suite ses modifications à son équipe en vue de combiner le nouveau code dans la branche principale du projet.</p>
                        <p>GitHub est un service web d’hébergement utilisant Git, dans lequel on peut déposer ses projets. Il est particulièrement utile pour le travail collaboratif, offrant la possibilité aux développeurs de participer à des projets open source.</p>
                    </div>

                    <div class="my-5">                    
                        <h3 id="item-2">Vocabulaire relatif à Git et GitHub</h3>
                        <div class="ml-3">
                            <p><b>repository</b> : répertoire dans lequel s’effectue le dépôt du projet, il peut être local ou distant.</p>
                            <p><b>versioning</b> : contrôle de version, en français. Permet de conserver des instantanés de chaque point dans l’historique d’un projet.</p>
                            <p><b>commit</b> : enregistrer des instantanés de fichiers de façon permanente dans l’historique des versions.</p>
                            <p><b>branch</b> : permet de se détacher du projet principal, indispensable au travail collaboratif.</p>
                            <p><b>merge</b> : sert à combiner une branche du projet vers la branche principale du projet nommée "master".</p>
                            <p><b>push</b> : envoyer.</p>
                            <p><b>pull</b> : récupérer.</p>
                            <p><b>pull</b> request : proposer des changements à apporter à la branche principale</p>
                        </div>
                    </div>

                    <div class="my-5">
                        <h3 id="item-3">Principales commandes</h3>
                        <p>Voici les commandes de bases permettant de démarrer un projet en équipe sur GitHub :</p>

                        <table class="table table-borderless">
                            <thead>
                                <tr scope="col">Test table thead</tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>git init nomDuProjet</td>
                                    <td>Initialise / créé un dépôt local du projet</td>
                                </tr>
                                <tr>
                                    <td>cd nomDuProjet</td>
                                    <td>Entre dans le dossier qui va accueillir le projet</td>
                                </tr>
                                <tr>
                                    <td>git add nomDuFichier</td>
                                    <td>Ajoute un instantané du fichier, en préparation pour le suivi de version</td>
                                </tr>
                                <tr>
                                    <td>git commit -m "Résumé du commit"</td>
                                    <td>Enregistre des instantanés de fichiers de façon permanente dans l’historique des versions</td>
                                </tr>
                                <tr>
                                    <td>git log</td>
                                    <td>Liste l’historique des versions sur la branche courantes</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    <div class="my-5">
                        <h3 id="item-4">Pourquoi j’ai choisi ces outils plutôt que d’autres ?</h3>
                        <p>GitHub est un outil efficace et facile d’utilisation, ce qui fait gagner du temps. Il propose aussi une interface graphique. C’est l’outil de versioning le plus utilisé au monde. De ce fait, il dispose d’une très grande communauté avec laquelle nous pouvons participer à des projets.</p>
                        <p>Comparaison avec un autre outil de versioning populaire : Subversion. Contrairement à Git, l’utilisateur de Subversion doit être connecté en permanence au dépôt distant pour pouvoir travailler dessus. Le transfert de modifications est plus rapide avec Git, étant donné que le "repository" (dépôt) est d’abord téléchargé localement.</p>
                    </div>

                </div>
                

                <div class="article-nav col-lg-4 d-none d-lg-block bd-toc">
                    <nav class="navbar navbar-light bg-light">
                        <nav class="nav nav-pills flex-column mx-auto">
                            <a class="nav-link" href="#item-1">A quoi servent Git et GitHub ?</a>
                            <a class="nav-link" href="#item-2">Vocabulaire relatif à Git et GitHub</a>
                            <a class="nav-link" href="#item-3">Principales commandes</a>
                            <a class="nav-link" href="#item-4">Pourquoi j’ai choisi ces outils plutôt que d’autres ?</a>
                        </nav>
                    </nav>
                </div>


            </div>
        </div>

<?php require '../inc/footer.php';?>