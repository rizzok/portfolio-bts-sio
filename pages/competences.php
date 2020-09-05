<?php
$page_title = "Compétences - Portfolio de Kévin RIZZO | BTS SIO option SLAM";
$page_description = "Compétences de Kévin RIZZO, étudiant en BTS SIO SLAM";
$navbar_section = 'competences';
require '../inc/header.php';
?>
        <div id="page-top-section" class="p-3 p-md-5 text-center">
            <h1 class="display-4 font-weight-normal text-white">Mes compétences</h1>
        </div>
        <div class="breadcrumb-container d-none d-sm-block">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" class="breadcrumb-item-unactive">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Compétences</li>
                    </ol>
                </nav>
            </div>
        </div>
		<div class="container">
			<div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="my-4 border rounded p-4">
                        <h2 class="h4">Tableau de synthèse pour le BTS</h2>
                        <div class="text-center mt-3">
                            <a href="/pages/competences/tableau-de-synthese-rizzo-kevin-A3.pdf" download="Tableau de synthèse RIZZO Kévin -  BTS SIO SLAM.pdf" class="button-icon-link">
                                <button type="button" class="btn btn-outline-primary mx-3">Télécharger</button>
                                <span style="color: red; vertical-align: middle;">
                                    <i class="far fa-file-pdf fa-2x"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
				<div class="col-lg-9 m-auto text-center">
                    <div class="mb-5">
                        <h2>Mes principales compétences</h2>
                        <p>Acquises lors de mon parcours professionnel et de ma formation au CNED</p>
                    </div>
                    <div class="card mb-5">
                        <a href="/pages/competences/developpement-web.php">
                            <img src="/img/competences/web-languages-w.jpg" class="card-img-top" alt="Languages de programmation web">
                        </a>
                        <div class="card-footer">
                            <h3 class="card-title">Développement web</h2>
                            <p class="card-text">Création de sites en PHP/MySQL, HTML, CSS et JavaScript</p>
                            <a href="/pages/competences/developpement-web.php" class="btn btn-primary">Afficher la page</a>
                        </div>
                    </div>
                    <div class="card mb-5">
                        <a href="/pages/competences/outils-de-versioning-git-et-github.php">
                            <img src="/img/competences/git-github.jpg" class="card-img-top" alt="Git et GitHub">
                        </a>
                        <div class="card-footer">
                            <h3 class="card-title">Outils de versioning : Git et GitHub</h2>
                            <p class="card-text">J’utilise les outils Git et GitHub pour la gestion des versions et le travail collaboratif.</p>
                            <a href="/pages/competences/outils-de-versioning-git-et-github.php" class="btn btn-primary">Afficher la page</a>
                        </div>
                    </div>
                    <div class="card mb-5">
                        <a href="#">
                            <img src="/img/competences/intellij-idea-android-studio.png" class="card-img-top" alt="Programmation Java desktop et mobile">
                        </a>
                        <div class="card-footer">
                            <h3 class="card-title">Développement d'applications</h2>
                            <p class="card-text">Programmation orientée objet desktop ou mobile en Java et C#</p>
                            <a href="#" class="btn btn-primary">Afficher la page</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 m-auto">
                    <div class="mb-4">
                        <h2>Autres compétences informatiques</h2>
                    </div>
                    <div class="mb-5">
                        <ul>
                            <li>Gestion de bases de données</li>
                            <li>Architecture MVC (Modèle – Vue – Contrôleur)</li>
                            <li>Modélisation UML</li>
                            <li>Méthode Agile</li>
                            <li>Virtualisation (Hyper-V, VirtualBox, VMware)</li>
                            <li>CMS Prestashop et Wordpress</li>
                            <li>Référencement et campagnes web : SEO, SEA, SMO</li>
                            <li>Création graphique</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<?php require '../inc/footer.php' ?>