<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nabab - Realisations</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt text-primary me-2"></i>Abomey-Calavi, Bénin</small>
                <small class="ms-4"><i class="fa fa-clock text-primary me-2"></i>9.00 am - 9.00 pm</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small><i class="fa fa-envelope text-primary me-2"></i>gilleszinsou529@gmail.com</small>
                <small class="ms-4"><i class="fa fa-phone-alt text-primary me-2"></i>+229 0157918646</small>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="sitename">Gilles ZINSOU</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{ route('home') }}" class="nav-item nav-link">Accueil</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link ">A propos</a>
                    <a href="{{ route('competences') }}" class="nav-item nav-link ">Compétences</a>
                    <a href="{{ route('vitae') }}" class="nav-item nav-link  ">CV</a>
                    <a href="{{ route('realisation') }}" class="nav-item nav-link active">Réalisations</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link ">Contact</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-facebook-f text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-twitter text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-linkedin-in text-primary"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Réalisations</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Réalisations</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


 <!-- Projects Start -->
<div class="container-xxl py-5">
<div class="container">

<div class="text-center mx-auto wow fadeInUp mb-5" data-wow-delay="0.1s" style="max-width: 600px;">
<p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Mes Projets</p>
<h1 class="display-5">Quelques réalisations récentes</h1>
</div>

<div class="row g-4">

<!-- Projet 1 -->
<div class="col-lg-4 col-md-6">
<a href="https://github.com/Nabab10" target="_blank">
<div class="position-relative overflow-hidden rounded project-card">
<img class="img-fluid w-100" src="https://images.unsplash.com/photo-1551288049-bebda4e38f71" alt="">
<div class="project-overlay">
<h4 class="text-white text-center px-3">
Système de pointage des employés (Web & Mobile)
</h4>
<div class="d-flex justify-content-between align-items-center px-4 mt-4 text-white small">
<span><i class="fa fa-user me-2"></i>Gilles ZINSOU</span>
<span><i class="fa fa-star me-1"></i>4.8</span>
</div>
</div>
</div>
</a>
</div>

<!-- Projet 2 -->
<div class="col-lg-4 col-md-6">
<a href="https://github.com/Nabab10" target="_blank">
<div class="position-relative overflow-hidden rounded project-card">
<img class="img-fluid w-100" src="https://images.unsplash.com/photo-1560518883-ce09059eeffa" alt="">
<div class="project-overlay">
<h4 class="text-white text-center px-3">
Plateforme de gestion immobilière (Location - Vente - Achat)
</h4>
<div class="d-flex justify-content-between align-items-center px-4 mt-4 text-white small">
<span><i class="fa fa-user me-2"></i>Gilles ZINSOU</span>
<span><i class="fa fa-star me-1"></i>4.7</span>
</div>
</div>
</div>
</a>
</div>

<!-- Projet 3 -->
<div class="col-lg-4 col-md-6">
<a href="https://github.com/Nabab10" target="_blank">
<div class="position-relative overflow-hidden rounded project-card">
<img class="img-fluid w-100" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c" alt="">
<div class="project-overlay">
<h4 class="text-white text-center px-3">
Site E-Commerce complet
</h4>
<div class="d-flex justify-content-between align-items-center px-4 mt-4 text-white small">
<span><i class="fa fa-user me-2"></i>Gilles ZINSOU</span>
<span><i class="fa fa-star me-1"></i>4.8</span>
</div>
</div>
</div>
</a>
</div>

<!-- Projet 4 -->
<div class="col-lg-4 col-md-6">
<a href="https://github.com/Nabab10" target="_blank">
<div class="position-relative overflow-hidden rounded project-card">
<img class="img-fluid w-100" src="https://images.unsplash.com/photo-1521791136064-7986c2920216" alt="">
<div class="project-overlay">
<h4 class="text-white text-center px-3">
Plateforme de mise en relation artisans et particuliers
</h4>
<div class="d-flex justify-content-between align-items-center px-4 mt-4 text-white small">
<span><i class="fa fa-user me-2"></i>Gilles ZINSOU</span>
<span><i class="fa fa-star me-1"></i>4.9</span>
</div>
</div>
</div>
</a>
</div>

<!-- Projet 5 -->
<div class="col-lg-4 col-md-6">
<a href="https://github.com/Nabab10" target="_blank">
<div class="position-relative overflow-hidden rounded project-card">
<img class="img-fluid w-100" src="https://images.unsplash.com/photo-1555774698-0b77e0d5fac6" alt="">
<div class="project-overlay">
<h4 class="text-white text-center px-3">
Application mobile de gestion des tâches
</h4>
<div class="d-flex justify-content-between align-items-center px-4 mt-4 text-white small">
<span><i class="fa fa-user me-2"></i>Gilles ZINSOU</span>
<span><i class="fa fa-star me-1"></i>4.7</span>
</div>
</div>
</div>
</a>
</div>

<!-- Projet 6 -->
<div class="col-lg-4 col-md-6">
<a href="#">
<div class="position-relative overflow-hidden rounded project-card">
<img class="img-fluid w-100" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085" alt="">
<div class="project-overlay">
<h4 class="text-white text-center px-3">
Contribution au site officiel DELCOM GROUP
</h4>
<div class="d-flex justify-content-between align-items-center px-4 mt-4 text-white small">
<span><i class="fa fa-user me-2"></i>DELCOM GROUP</span>
<span><i class="fa fa-star me-1"></i>4.8</span>
</div>
</div>
</div>
</a>
</div>

<!-- Projet 7 -->
<div class="col-lg-4 col-md-6">
<a href="#">
<div class="position-relative overflow-hidden rounded project-card">
<img class="img-fluid w-100" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c" alt="">
<div class="project-overlay">
<h4 class="text-white text-center px-3">
Contribution au site officiel URPHORAN
</h4>
<div class="d-flex justify-content-between align-items-center px-4 mt-4 text-white small">
<span><i class="fa fa-user me-2"></i>DELCOM GROUP</span>
<span><i class="fa fa-star me-1"></i>4.8</span>
</div>
</div>
</div>
</a>
</div>

<!-- Projet 8 -->
<div class="col-lg-4 col-md-6">
<a href="#">
<div class="position-relative overflow-hidden rounded project-card">
<img class="img-fluid w-100" src="https://images.unsplash.com/photo-1552664730-d307ca884978" alt="">
<div class="project-overlay">
<h4 class="text-white text-center px-3">
Participation aux projets internes de DELCOM GROUP
</h4>
<div class="d-flex justify-content-between align-items-center px-4 mt-4 text-white small">
<span><i class="fa fa-user me-2"></i>Gilles ZINSOU</span>
<span><i class="fa fa-star me-1"></i>4.7</span>
</div>
</div>
</div>
</a>
</div>

<!-- Projet 9 -->
<div class="col-lg-4 col-md-6">
<a href="#">
<div class="position-relative overflow-hidden rounded project-card">
<img class="img-fluid w-100" src="images/feuille-de-pointage.webp" alt="">
<div class="project-overlay">
<h4 class="text-white text-center px-3">
Participation aux projets internes de POLE G
</h4>
<div class="d-flex justify-content-between align-items-center px-4 mt-4 text-white small">
<span><i class="fa fa-user me-2"></i>Gilles ZINSOU</span>
<span><i class="fa fa-star me-1"></i>4.6</span>
</div>
</div>
</div>
</a>
</div>

</div>

</div>
</div>
<!-- Projects End -->


    <!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">

            <!-- Coordonnées -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Contact</h4>

                <p class="mb-2">
                    <i class="fa fa-map-marker-alt me-3"></i>
                    Abomey-Calavi, Bénin
                </p>

                <p class="mb-2">
                    <i class="fa fa-phone-alt me-3"></i>
                    +229 01 57 91 86 46
                </p>

                <p class="mb-2">
                    <i class="fa fa-envelope me-3"></i>
                    gilleszinsou529@gmail.com
                </p>

                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href="#">
                        <i class="fab fa-twitter"></i>
                    </a>

                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>

                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href="#">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>

            <!-- Services -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Mes Services</h4>

                <a class="btn btn-link" href="#">Développement Web</a>
                <a class="btn btn-link" href="#">Création de Sites Web</a>
                <a class="btn btn-link" href="#">Applications Web</a>
                <a class="btn btn-link" href="#">Maintenance de Sites</a>
                <a class="btn btn-link" href="#">Conseil Informatique</a>
            </div>

            <!-- Liens rapides -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Liens rapides</h4>

                <a class="btn btn-link" href="{{ route('home') }}">Accueil</a>
                <a class="btn btn-link" href="{{ route('about') }}">À propos</a>
                <a class="btn btn-link" href="{{ route('competences') }}">Compétences</a>
                <a class="btn btn-link" href="{{ route('realisation') }}">Réalisations</a>
                <a class="btn btn-link" href="{{ route('contact') }}">Contact</a>
            </div>

            <!-- Newsletter / message -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Newsletter</h4>

                <p>
                    Recevez des informations sur mes nouveaux projets,
                    mes réalisations et mes services.
                </p>

                <div class="position-relative w-100">
                    <input class="form-control bg-white border-0 w-100 py-3 ps-4 pe-5"
                        type="email"
                        placeholder="Votre email">

                    <button type="button"
                        class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                        S'inscrire
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Copyright -->
<div class="container-fluid copyright py-4">
    <div class="container text-center">
        <p class="mb-0">
            &copy; <span id="year"></span>
            <strong>Gilles ZINSOU</strong> - Tous droits réservés
        </p>
    </div>
</div>

<script>
document.getElementById("year").textContent = new Date().getFullYear();
</script>
<!-- Footer End -->


    
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>