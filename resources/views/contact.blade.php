<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nabab - Contact</title>
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
                
                <small class="ms-4">
    <i class="fa fa-clock text-primary me-2"></i>
    <span id="time-display"></span>
</small>
<script>
function updateTime() {
    const now = new Date();

    let gmtHours = now.getUTCHours();
    let minutes = now.getUTCMinutes();

    let gmt1Hours = (gmtHours + 1) % 24;

    minutes = minutes < 10 ? "0" + minutes : minutes;

    const text = gmtHours + ":" + minutes + " GMT | " + gmt1Hours + ":" + minutes + " GMT+1";

    document.getElementById("time-display").textContent = text;
}

updateTime();
setInterval(updateTime, 1000);
</script>
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
                    <a href="{{ route('vitae') }}" class="nav-item nav-link ">CV</a>
                    <a href="{{ route('realisation') }}" class="nav-item nav-link ">Réalisations</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link ">Contact</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="https://www.facebook.com/gilles.gilson.zinsou.2025#">
                        <small class="fab fa-facebook-f text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-twitter text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="www.linkedin.com/in/gilles-zinsou-775536385">
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
            <h1 class="display-3 mb-4 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">

            <!-- Formulaire -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Contact</p>
                <h1 class="display-5 mb-4">Une question ? Contactez-moi</h1>
                <p class="mb-4">
                    Vous avez un projet, une idée ou besoin d’un développeur pour réaliser votre application ou votre site web ?
                    N’hésitez pas à me contacter. Je vous répondrai dans les plus brefs délais.
                </p>

                <!-- Formulaire Contact -->
<form id="contact-form" action="https://formspree.io/f/mvzwojya" method="POST">
    <div class="row g-3">

        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" name="name" id="name" placeholder="Votre nom" required>
                <label for="name">Votre nom</label>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-floating">
                <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" required>
                <label for="email">Votre email</label>
            </div>
        </div>

        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
                <label for="subject">Sujet</label>
            </div>
        </div>

        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control" name="message" placeholder="Votre message" id="message" style="height: 120px" required></textarea>
                <label for="message">Votre message</label>
            </div>
        </div>

        <div class="col-12">
            <button class="btn btn-primary py-3 px-5" type="submit">
                Envoyer le message
            </button>
        </div>

    </div>
</form>

<!-- Modal succès -->
<div class="modal fade" id="successModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Message envoyé</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        Votre message a été envoyé avec succès.<br>
        Nous vous répondrons dans quelques instants.
      </div>

      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-dismiss="modal">OK</button>
      </div>

    </div>
  </div>
</div>

<!-- Script pour envoyer via Formspree et afficher le modal -->
<script>
const form = document.getElementById("contact-form");

form.addEventListener("submit", async function(e) {
    e.preventDefault(); // Empêche la redirection par défaut

    const data = new FormData(form);

    try {
        const response = await fetch(form.action, {
            method: form.method,
            body: data,
            headers: {
                'Accept': 'application/json'
            }
        });

        if (response.ok) {
            form.reset(); // Réinitialise le formulaire
            var myModal = new bootstrap.Modal(document.getElementById('successModal'));
            myModal.show(); // Affiche le modal
        } else {
            alert("Une erreur s'est produite. Veuillez réessayer.");
        }
    } catch (error) {
        alert("Une erreur réseau s'est produite. Veuillez réessayer.");
    }
});
</script>
            </div>

            <!-- Carte -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                <div class="position-relative rounded overflow-hidden h-100">
                    <iframe class="position-relative w-100 h-100"
                        src="https://www.google.com/maps?q=Cotonou,Benin&output=embed"
                        frameborder="0"
                        style="min-height:450px; border:0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Contact End -->

@include('whatsapp')


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