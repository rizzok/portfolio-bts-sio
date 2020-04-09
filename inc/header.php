<?php require_once 'db.php'; ?>
<!doctype html>
<html lang="fr" class="h-100">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151636424-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-151636424-2');
    </script>
    <!-- End Google Analytics -->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MW4WZ9N');</script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= $page_description ?>">
    <meta name="keywords" content="portfolio, cv, programmeur, developpeur, kevin, rizzo, kevin rizzo, bts, sio, slam, logiciel, application, web">
    <meta name="author" content="kevin">
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon" />
    
    <title><?= $page_title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap-411/bootstrap.min.css" rel="stylesheet">
    <!-- Black to top icon -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/css/style.css" rel="stylesheet" >
    
</head>

<body class="d-flex flex-column h-100">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MW4WZ9N"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

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
                        <li class="nav-item px-3<?php if(isset($navbar_section) && $navbar_section == "index") echo' active'; ?>">
                            <a class="nav-link" href="/">
                                Accueil
                                <?php if(isset($navbar_section) && $navbar_section=="index") echo' <span class="sr-only">(current)</span>'; ?>
                            </a>
                        </li>
                        <li class="nav-item px-3<?php if(isset($navbar_section) && $navbar_section=="competences") echo' active'; ?>">
                            <a class="nav-link" href="/pages/competences.php">
                                Compétences
                                <?php if(isset($navbar_section) && $navbar_section=="competences") echo' <span class="sr-only">(current)</span>'; ?>
                            </a>
                        </li>
                        <li class="nav-item px-3<?php if(isset($navbar_section) && $navbar_section=="projets") echo' active'; ?>">
                            <a class="nav-link" href="/pages/projets.php">
                                Projets
                                <?php if(isset($navbar_section) && $navbar_section=="projets") echo' <span class="sr-only">(current)</span>'; ?>
                            </a>
                        </li>
                        <li class="nav-item px-3<?php if(isset($navbar_section) && $navbar_section=="veilles") echo' active'; ?>">
                            <a class="nav-link" href="/pages/veilles.php">
                                Veilles
                                <?php if(isset($navbar_section) && $navbar_section=="veilles") echo' <span class="sr-only">(current)</span>'; ?>
                            </a>
                        </li>
                        <li class="nav-item px-3<?php if(isset($navbar_section) && $navbar_section=="contact") echo' active'; ?>">
                            <a class="nav-link" href="/pages/contact.php">
                                Contact
                                <?php if(isset($navbar_section) && $navbar_section=="contact") echo' <span class="sr-only">(current)</span>'; ?>
                            </a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </nav>
    </header>

    <main role="main" class="flex-shrink-0">