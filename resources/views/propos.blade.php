<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nabab - A propos</title>
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
                    <a href="{{ route('about') }}" class="nav-item nav-link active">A propos</a>
                    <a href="{{ route('competences') }}" class="nav-item nav-link ">Compétences</a>
                    <a href="{{ route('vitae') }}" class="nav-item nav-link  ">CV</a>
                    <a href="{{ route('realisation') }}" class="nav-item nav-link ">Réalisations</a>
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
            <h1 class="display-3 mb-4 animated slideInDown">A propos</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">A propos</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

<!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="images/Gemini_Generated_Image_f0ytqqf0ytqqf0yt.png">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">A propos</p>
                    <h1 class="display-5 mb-4">Qui sommes-nous ?</h1>
                    <p class="mb-4">Je suis <strong>Gilles ZINSOU</strong>, diplômé d’une Licence Professionnelle en <strong>Systèmes Informatiques et Logiciels (Génie Informatique)</strong>. Passionné par les technologies numériques et la création de solutions innovantes, je mets mon expertise au service des entreprises et des particuliers. Fort de plusieurs années d’expérience dans le développement, j’accompagne mes clients dans la conception, le développement et le déploiement d’applications performantes, fiables et parfaitement adaptées à leurs besoins. Mon objectif : transformer vos idées en solutions concrètes et efficaces.</p>
                    
                    <div class="border rounded p-4">
                        <nav>
                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                    aria-selected="true">Vision</button>
                                <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
                                    aria-selected="false">Missions</button>
                                <button class="nav-link fw-semi-bold" id="nav-vision-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"
                                    aria-selected="false">Expertises</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                                aria-labelledby="nav-story-tab">
                                <p>Devenir un partenaire de confiance pour les entreprises en matière de transformation numérique, en apportant des solutions innovantes et adaptées à leurs besoins.</p>
                                
                            </div>
                            <div class="tab-pane fade" id="nav-mission" role="tabpanel"
                                aria-labelledby="nav-mission-tab">
                                <p>Accompagner les entreprises et les particuliers dans toutes les étapes de leurs projets numériques, de la conception au déploiement, en garantissant des applications performantes, fiables et faciles à utiliser.</p>
                                
                            </div>
                            <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                <p>Développement d’applications web et mobiles, création de logiciels sur mesure, intégration de solutions numériques et optimisation de systèmes informatiques, avec un engagement constant pour l’innovation et la qualité.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Nos Services</p>
                <h1 class="display-5 mb-5">Ce que nous faisons</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Développement web</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Développement mobile</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Conception de logiciels</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-0"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Conseil en transformation digitale</h5>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/service-1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Solutions Web Modernes et Performantes</h3>
                                    <p class="mb-4">Nous concevons et développons des sites web et applications web modernes, rapides et sécurisés. Nos solutions sont adaptées aux besoins des entreprises et des particuliers afin d’améliorer leur visibilité et leur efficacité en ligne.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Création de sites web professionnels</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Applications web sur mesure</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Maintenance et optimisation</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/service-2.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Applications Mobiles Intuitives et Performantes</h3>
                                    <p class="mb-4">Nous développons des applications mobiles modernes et ergonomiques pour Android et iOS afin d’aider les entreprises à se rapprocher de leurs clients et à digitaliser leurs services.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Applications Android et iOS</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Interfaces simples et intuitives</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Maintenance et mises à jour</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/service-3.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Logiciels Sur Mesure pour Votre Entreprise</h3>
                                    <p class="mb-4">Nous concevons des logiciels personnalisés qui répondent précisément aux besoins de votre entreprise afin d’optimiser la gestion, automatiser les tâches et améliorer la productivité.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Logiciels de gestion</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Automatisation des processus</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Solutions adaptées à vos besoins</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/service-4.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Accompagnement en Transformation Digitale</h3>
                                    <p class="mb-4">Nous aidons les entreprises à moderniser leurs outils et leurs processus grâce aux technologies numériques afin d'améliorer leur performance et leur compétitivité.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Audit et stratégie digitale</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Digitalisation des processus</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Conseil et accompagnement technologique</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

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