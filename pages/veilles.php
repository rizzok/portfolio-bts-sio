<?php
$page_title = "Veilles - Portfolio de Kévin RIZZO | BTS SIO option SLAM";
$page_description = "Veilles de Kévin RIZZO, étudiant en BTS SIO SLAM";
$navbar_section = 'veilles';

require '../inc/header.php';
?>
<div id="page-top-section" class="p-3 p-md-5 text-center">
    <h1 class="display-4 font-weight-normal text-white">Veilles</h1>
</div>
<div class="breadcrumb-container d-none d-sm-block">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="breadcrumb-item-unactive">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Veilles</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 m-auto">
                <div class="mt-4">
                    <p class="text-center">L’objectif d'une veille est d'assurer un suivi de l’évolution du domaine concerné.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-8 mt-2">
            <div class="card text-center">
                <a href="/pages/veilles/veille-technologique.php">
                    <div class="card-body">
                        <h2 class="card-title h3">Veille technologique</h2>
                        <p class="card-text">Le cloud computing</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-8 my-4">
            <div class="card text-center">
                <a href="/pages/veilles/veille-juridique.php">
                    <div class="card-body">
                        <h2 class="card-title h3">Veille juridique</h2>
                        <p class="card-text">Les contrats de production et de fournitures de services informatiques</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<?php require '../inc/footer.php' ?>