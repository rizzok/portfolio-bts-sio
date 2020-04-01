<?php
$page_title = "CV - Portfolio de Kévin RIZZO | BTS SIO option SLAM";
$page_description = "Curriculum Vitae de Kévin RIZZO, étudiant en BTS SIO SLAM";

require '../inc/header.php';
?>

        <div id="page-top-section" class="p-3 p-md-5 text-center">
            <h1 class="display-4 font-weight-normal text-white">Curriculum Vitae</h1>
        </div>

        <div class="breadcrumb-container d-none d-sm-block">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" class="breadcrumb-item-unactive">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Curriculum Vitae</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container my-5">
            <div class="m-auto text-center">
                <a href="/pages/cv/cv-rizzo-kevin.pdf" download="CV RIZZO Kévin.pdf"><button type="button" class="btn btn-outline-primary">Télécharger mon CV</button></a>
            </div>
        </div>

        <div class="container mb-5">
            <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item" src="/pages/cv/cv-rizzo-kevin.pdf"></iframe>
            </div>
        </div>

<?php require '../inc/footer.php';?>