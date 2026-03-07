<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nabab - Compétences</title>
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
                    <a href="{{ route('competences') }}" class="nav-item nav-link active">Compétences</a>
                    <a href="{{ route('vitae') }}" class="nav-item nav-link">CV</a>
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
            <h1 class="display-3 mb-4 animated slideInDown">Compétences</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Compétences</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    
<!-- Section Formations Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="mb-3" style="font-weight: 700; font-size: 48px;">
                Les <span style="color:#3b56f5;">Technologies</span> maîtrisées
            </h1>
            <p class="mb-0" style="font-size: 18px; color: #333;">
                Découvrez l’alliance de savoir-faire et d’innovation, où chaque projet est conçu avec expertise, créativité et rigueur pour offrir des solutions sur mesure.
            </p>
        </div>
        <div class="row g-4 justify-content-center">

            <!-- HTML -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fab fa-html5" style="font-size: 32px; color: #e34f26; margin-right: 8px;"></i>
                            <h5 class="card-title mb-0" style="font-weight: 700;">HTML</h5>
                        </div>
                        <p class="card-text text-muted" style="font-size: 14px;">
                            Maîtriser HTML permet de structurer efficacement vos pages web et de poser une base solide pour tous vos projets front-end.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between text-muted" style="font-size: 13px;">
                        <span><i class="fas fa-list-ul me-1"></i>Niveau :</span>
                        <span><i class="far fa-clock me-1"></i>Excellent</span>
                    </div>
                </div>
            </div>

            <!-- CSS -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fab fa-css3-alt" style="font-size: 32px; color: #563d7c; margin-right: 8px;"></i>
                            <h5 class="card-title mb-0" style="font-weight: 700;">CSS</h5>
                        </div>
                        <p class="card-text text-muted" style="font-size: 14px;">
                            Le CSS permet de styliser vos pages web, de créer des mises en page modernes et responsives, et d’améliorer l’expérience utilisateur.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between text-muted" style="font-size: 13px;">
                        <span><i class="fas fa-list-ul me-1"></i>Niveau :</span>
                        <span><i class="far fa-clock me-1"></i>Excellent</span>
                    </div>
                </div>
            </div>

            <!-- JavaScript -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fab fa-js-square" style="font-size: 32px; color: #f7df1e; margin-right: 8px;"></i>
                            <h5 class="card-title mb-0" style="font-weight: 700;">JavaScript</h5>
                        </div>
                        <p class="card-text text-muted" style="font-size: 14px;">
                            JavaScript rend vos sites interactifs, permet de manipuler le DOM et de créer des expériences dynamiques côté client.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between text-muted" style="font-size: 13px;">
                        <span><i class="fas fa-list-ul me-1"></i>Niveau :</span>
                        <span><i class="far fa-clock me-1"></i>Excellent</span>
                    </div>
                </div>
            </div>

            <!-- React -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a7/React-icon.svg" alt="React" style="width: 32px; height: 32px; margin-right: 8px;">
                            <h5 class="card-title mb-0" style="font-weight: 700;">React</h5>
                        </div>
                        <p class="card-text text-muted" style="font-size: 14px;">
                            React vous permet de construire des interfaces utilisateurs dynamiques, modulaires et hautement performantes avec une approche déclarative.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between text-muted" style="font-size: 13px;">
                        <span><i class="fas fa-list-ul me-1"></i>Niveau :</span>
                        <span><i class="far fa-clock me-1"></i>Excellent</span>
                    </div>
                </div>
            </div>

            <!-- React Native -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://reactnative.dev/img/header_logo.svg" alt="React Native" style="width: 32px; height: 32px; margin-right: 8px;">
                            <h5 class="card-title mb-0" style="font-weight: 700;">React Native</h5>
                        </div>
                        <p class="card-text text-muted" style="font-size: 14px;">
                            Développez des applications mobiles natives performantes en utilisant vos connaissances JavaScript et React.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between text-muted" style="font-size: 13px;">
                        <span><i class="fas fa-list-ul me-1"></i>Niveau :</span>
                        <span><i class="far fa-clock me-1"></i>Excellent</span>
                    </div>
                </div>
            </div>

            <!-- Node.js & Express.js -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://cdn.worldvectorlogo.com/logos/nodejs-icon.svg" alt="Node.js" style="width: 32px; height: 32px; margin-right: 8px;">
                            <h5 class="card-title mb-0" style="font-weight: 700;">Node.js & Express.js</h5>
                        </div>
                        <p class="card-text text-muted" style="font-size: 14px;">
                            Node.js associé à Express.js vous permet de créer des serveurs rapides, scalables et des API REST performantes en JavaScript.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between text-muted" style="font-size: 13px;">
                        <span><i class="fas fa-list-ul me-1"></i>Niveau :</span>
                        <span><i class="far fa-clock me-1"></i>Excellent</span>
                    </div>
                </div>
            </div>

            <!-- PHP & Laravel -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel" style="width: 32px; height: 32px; margin-right: 8px;">
                            <h5 class="card-title mb-0" style="font-weight: 700;">PHP & Laravel</h5>
                        </div>
                        <p class="card-text text-muted" style="font-size: 14px;">
                            PHP reste incontournable pour le développement web backend, et Laravel facilite la création d’applications structurées, sécurisées et évolutives.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between text-muted" style="font-size: 13px;">
                        <span><i class="fas fa-list-ul me-1"></i>Niveau :</span>
                        <span><i class="far fa-clock me-1"></i>Excellent</span>
                    </div>
                </div>
            </div>

            <!-- Vue.js -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://vuejs.org/images/logo.png" alt="Vue.js" style="width: 32px; height: 32px; margin-right: 8px;">
                            <h5 class="card-title mb-0" style="font-weight: 700;">Vue.js</h5>
                        </div>
                        <p class="card-text text-muted" style="font-size: 14px;">
                            Framework JavaScript progressif, Vue.js facilite la création d’interfaces réactives et de composants modulaires, avec une courbe d’apprentissage douce.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between text-muted" style="font-size: 13px;">
                        <span><i class="fas fa-list-ul me-1"></i>Niveau :</span>
                        <span><i class="far fa-clock me-1"></i>Excellent</span>
                    </div>
                </div>
            </div>

            <!-- Angular -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://angular.io/assets/images/logos/angular/angular.svg" alt="Angular" style="width: 32px; height: 32px; margin-right: 8px;">
                            <h5 class="card-title mb-0" style="font-weight: 700;">Angular</h5>
                        </div>
                        <p class="card-text text-muted" style="font-size: 14px;">
                            Angular est idéal pour des applications web complexes et modulaires, avec un fort support pour TypeScript et une architecture solide.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between text-muted" style="font-size: 13px;">
                        <span><i class="fas fa-list-ul me-1"></i>Niveau :</span>
                        <span><i class="far fa-clock me-1"></i>Excellent</span>
                    </div>
                </div>
            </div>

            <!-- MySQL -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="1s">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://upload.wikimedia.org/wikipedia/en/d/dd/MySQL_logo.svg" alt="MySQL" style="width: 32px; height: 32px; margin-right: 8px;">
                            <h5 class="card-title mb-0" style="font-weight: 700;">MySQL</h5>
                        </div>
                        <p class="card-text text-muted" style="font-size: 14px;">
                            Base de données relationnelle largement utilisée pour stocker et organiser vos données de manière fiable et performante.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between text-muted" style="font-size: 13px;">
                        <span><i class="fas fa-list-ul me-1"></i>Niveau :</span>
                        <span><i class="far fa-clock me-1"></i>Excellent</span>
                    </div>
                </div>
            </div>

            <!-- PostgreSQL -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="1.1s">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/2/29/Postgresql_elephant.svg" alt="PostgreSQL" style="width: 32px; height: 32px; margin-right: 8px;">
                            <h5 class="card-title mb-0" style="font-weight: 700;">PostgreSQL</h5>
                        </div>
                        <p class="card-text text-muted" style="font-size: 14px;">
                            Système de gestion de bases de données relationnelles puissant et open source, adapté aux applications exigeantes et volumineuses.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between text-muted" style="font-size: 13px;">
                        <span><i class="fas fa-list-ul me-1"></i>Niveau :</span>
                        <span><i class="far fa-clock me-1"></i>Excellent</span>
                    </div>
                </div>
            </div>

            <!-- Python -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="1.2s">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://www.python.org/static/community_logos/python-logo.png" alt="Python" style="width: 32px; height: 32px; margin-right: 8px;">
                            <h5 class="card-title mb-0" style="font-weight: 700;">Python</h5>
                        </div>
                        <p class="card-text text-muted" style="font-size: 14px;">
                            Langage polyvalent et facile à apprendre, utilisé pour le développement web, le scripting, la data science et l’intelligence artificielle.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between text-muted" style="font-size: 13px;">
                        <span><i class="fas fa-list-ul me-1"></i>Niveau :</span>
                        <span><i class="far fa-clock me-1"></i>Excellent</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Section Formations End -->

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