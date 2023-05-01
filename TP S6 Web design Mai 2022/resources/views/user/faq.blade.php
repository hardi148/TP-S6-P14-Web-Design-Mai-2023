<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Art</title>
  <meta content="" name="description">
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
          <li><a href="{{ url('/faq') }}">Faq</a></li>
          <li><a href="{{ url('/about') }}">A propos</a></li>
          <li><a href="single-post.html">Log Out</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
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


       <!-- ======= Post Grid Section ======= -->
       <section id="posts" class="posts">
        <div class="container" data-aos="fade-up">
         
          <div class="row">
            <h1>Posez une question</h1>
            <form action="{{ url('/insererFaq') }}" method="post">

                {{ csrf_field() }}
              
                <label for="article_title">Votre question:</label>
                <textarea type="text" id="article_title" name="question" ></textarea><br><br>

             
                  <div><button class="btn btn-primary d-block w-100" type="submit" style="background: var(--bs-gray);border-style: none;">ok</button></div>
              </form>            
          </div>  
  
        </div>
      </section> <!-- End Post Grid Section -->



    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
      <div class="container" data-aos="fade-up">
       
        <div class="row">
          @foreach($liste as $rows) <!-- boucle pour afficher 12 cartes -->
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title">Question : {{ $rows->question }}</h1>
                  @if($rows->reponse == null)
                  <h2 class="card-title">En attente...</h2>
                  @else
                  <h2 class="card-title">Reponse : {{ $rows->reponse }}</h2>
                  @endif
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
  <a class="page-link" href="{{ $currentPage == 1 ? '#' : url('/paginationFAQ') }}/{{ Str::random(10) }}.{{ $currentPage - 1 }}.paginationFAQ.html" aria-label="Précédent">
  <span aria-hidden="true">&laquo;</span>
  <span class="sr-only">Précédent</span>
  </a>
  </li>
  @foreach($listeNumeroPage as $rows)
  <li class="page-item {{ $rows == $currentPage ? 'active' : '' }}">
  <a class="page-link" href="{{ url('/paginationFAQ') }}/{{ Str::random(10) }}.{{ $rows }}.paginationFAQ.html">{{ $rows }}</a>
  </li>
  @endforeach
  <li class="page-item {{ $currentPage == $lastPage ? 'disabled' : '' }}">
  <a class="page-link" href="{{ $currentPage == $lastPage ? '#' : url('/paginationFAQ') }}/{{ Str::random(10) }}.{{ $currentPage + 1 }}.paginationFAQ.html" aria-label="Suivant">
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