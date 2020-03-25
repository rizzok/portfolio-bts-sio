<?php
// Recupere l'URL de la page pour ensuite affecter class="active" aux liens de nav
$page = $_SERVER['PHP_SELF'];
?>
<!doctype html>
<html lang="fr" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Kévin RIZZO - Étudiant en BTS SIO SLAM">
    <meta name="keywords" content="portfolio, cv, programmeur, developpeur, kevin, rizzo, kevin rizzo, bts, sio, slam, logiciel, application, web">
    <meta name="author" content="kevin">
    <link rel="icon" href="/img/faviconR.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/img/faviconR.ico" type="image/x-icon" />
    
    <title>Portfolio de Kévin RIZZO | BTS SIO option SLAM</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap-411/bootstrap.min.css" rel="stylesheet">
    <!-- Black to top icon -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/css/style.css" rel="stylesheet" >
</head>

<body class="d-flex flex-column h-100">

    <!-- Back to top button -->
    <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>

    <header>
        <nav id="menu-nav" class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">

                <a class="navbar-brand" href="/">
                    <img src="/img/logoBleu.png" height="30" class="d-inline-block align-top" alt="Logo Kévin RIZZO">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item px-3 text-light<?php if($page=="/index.php") echo' active'; ?>">
                            <a class="nav-link" href="/">Accueil<?php if($page=="/index.php") echo' <span class="sr-only">(current)</span>'; ?></a>
                        </li>
                        <li class="nav-item px-3<?php if($page=="/profil.php" || dirname($page)=="/profil") echo' active'; ?>">
                            <a class="nav-link" href="/profil.php">Profil<?php if($page=="/profil.php" || dirname($page)=="/profil") echo' <span class="sr-only">(current)</span>'; ?></a>
                        </li>
                        <li class="nav-item px-3<?php if($page=="/competences.php" || dirname($page)=="/competences") echo' active'; ?>">
                            <a class="nav-link" href="/competences.php">Compétences<?php if($page=="/competences.php" || dirname($page)=="/competences") echo' <span class="sr-only">(current)</span>'; ?></a>
                        </li>
                        <li class="nav-item px-3<?php if($page=="/projets.php" || dirname($page)=="/projets") echo' active'; ?>">
                            <a class="nav-link" href="/projets.php">Projets<?php if($page=="/projets.php" || dirname($page)=="/projets") echo' <span class="sr-only">(current)</span>'; ?></a>
                        </li>
                        <li class="nav-item px-3<?php if($page=="/veilles.php" || dirname($page)=="/veilles") echo' active'; ?>">
                            <a class="nav-link" href="/veilles.php">Veilles<?php if($page=="/veilles.php" || dirname($page)=="/veilles") echo' <span class="sr-only">(current)</span>'; ?></a>
                        </li>
                        <li class="nav-item px-3<?php if($page=="/cv.php" || dirname($page)=="/cv") echo' active'; ?>">
                            <a class="nav-link" href="/cv.php">CV<?php if($page=="/cv.php" || dirname($page)=="/cv") echo' <span class="sr-only">(current)</span>'; ?></a>
                        </li>
                        <li class="nav-item px-3<?php if($page=="/contact.php" || dirname($page)=="/contact") echo' active'; ?>">
                            <a class="nav-link" href="/contact.php">Contact<?php if($page=="/contact.php" || dirname($page)=="/contact") echo' <span class="sr-only">(current)</span>'; ?></a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </nav>
    </header>

    <main role="main" class="flex-shrink-0">
