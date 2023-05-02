<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="Tojo va vous aider a decouvrir l'intelligence artificielle : Définition,articles et FAQ">
  <title>L'intelligence artificielle par Tojo - Définition,articles et FAQ</title>
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets2/assets/img/favicon.png" rel="icon">
  <link href="assets2/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets2/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets2/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets2/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets2/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets2/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets2/assets/css/variables.css" rel="stylesheet">
  <link href="assets2/assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets2/assets/img/logo.png" alt=""> -->
        <h1>E-Art</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ url('/faq') }}">FAQ</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        <a  class="mx-2"><span class="bi-facebook"></span></a>
        <a  class="mx-2"><span class="bi-twitter"></span></a>
        <a  class="mx-2"><span class="bi-instagram"></span></a>

        <a class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                
                @foreach($listeInfo as $rows)
                <div class="swiper-slide">
                <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image:url({{ $rows->img }});">
                      <div class="img-bg-inner">
                        <h2>{{ $rows->titre }}</h2>
                        <p>{{ $rows->resumer }}</p>
                      </div>
                    </a>
                  </div>
                @endforeach

              </div>

              <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
              </div>
              <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
              </div>

              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Hero Slider Section -->


    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
      <div class="container" data-aos="fade-up">
       
        <h1>Liste des articles et les actualites publiees</h1>
        <form action="{{ url('/searchFront') }}" class="search-form" method="post">
          {{ csrf_field() }}
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Entrer un mot cle" class="form-control">
            <input type="text" name="motcle" placeholder="Entrer un mot cle" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        <div class="row">
      @foreach($listePub as $rows) <!-- boucle pour afficher 12 cartes -->
            <div class="col-md-3">
              <div class="card">
                <img src="{{ $rows->img }}" width="100px" height="300px" class="card-img-top" alt="...">
                <div class="card-body">
                  <h1 class="card-title">{{ $rows->titre }}</h1>
                  <h2 class="my-3">Auteur : {{ $rows->auteur }}</h2>
                  <a href="{{ url('/article') }}/{{Str::slug($rows->titre) }}-{{ $rows->idarticle }}-index.html" class="btn btn-primary">Voir plus</a>
                </div>
              </div>
            </div>
      @endforeach
        </div>  

      </div>
    </section> <!-- End Post Grid Section -->

    
  <nav aria-label="Page navigation example">
    <ul class="pagination">
  <li class="page-item {{ $currentPage == 1 ? 'disabled' : '' }}">
  <a class="page-link" href="{{ $currentPage == 1 ? '#' : url('/paginationFront') }}/{{ Str::random(10) }}.{{ $currentPage - 1 }}.paginationFront.html" aria-label="Précédent">
  <span aria-hidden="true">&laquo;</span>
  <span class="sr-only">Précédent</span>
  </a>
  </li>
  @foreach($listeNumeroPage as $rows)
  <li class="page-item {{ $rows == $currentPage ? 'active' : '' }}">
  <a class="page-link" href="{{ url('/paginationFront') }}/{{ Str::random(10) }}.{{ $rows }}.paginationFront.html">{{ $rows }}</a>
  </li>
  @endforeach
  <li class="page-item {{ $currentPage == $lastPage ? 'disabled' : '' }}">
  <a class="page-link" href="{{ $currentPage == $lastPage ? '#' : url('/paginationFront') }}/{{ Str::random(10) }}.{{ $currentPage + 1 }}.paginationFront.html" aria-label="Suivant">
  <span aria-hidden="true">&raquo;</span>
  <span class="sr-only">Suivant</span>
  </a>
  </li>
  </ul>
  
  </nav>
    

<footer>
    <div class="footer-legal">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <div class="copyright">
              © Copyright <strong><span>ZenBlog</span></strong>. All Rights Reserved
            </div>

            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>

          </div>

          <div class="col-md-6">
            <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

        </div>

      </div>
    </div>

  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets2/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets2/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets2/assets/vendor/aos/aos.js"></script>
  <script src="assets2/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets2/assets/js/main.js"></script>

</body>

</html>