<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstra</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Vendor CSS Files -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
                <div class="container px-5" >
                  @foreach($tampilberanda as $beranda)
                <img class="navi navbar-brand" src="gambar/{{$beranda->pict}}">
                    <a class="navbar-brand" href="beranda"><span class="fw-bolder text-primary">{{strtoupper($beranda->judul_beranda)}}</span></a>
                  @endforeach
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="beranda">Beranda</a></li>
                            <li class="nav-item"><a class="nav-link" href="profil">Profil</a></li>
                            <li class="nav-item"><a class="nav-link" href="ekstra">Ekstra</a></li>
                            <li class="nav-item"><a class="nav-link" href="kegiatan">Kegiatan</a></li>
                            <li class="nav-item"><a class="nav-link" href="galeri">Galeri</a></li>
                            <li class="nav-item"><a class="nav-link" href="kontak">Kontak</a></li>
                        </ul>
                    </div>
                </div>
                
            </nav>
    
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Ekstra</h2>
          <p>Ikuti ekstra Ekstrakulikuler yang menarik</p>
        </div>
        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
@foreach($tampilekstra as $ekstra)
          <div class="row gy-4 portfolio-container">
            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">{{$ekstra->nama_ekstra}}</a></h4>
                  <p>{{$ekstra->deskripsi_ekstra}}</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            @endforeach
          </div><!-- End Portfolio Container -->
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    @foreach($tampilberanda as $beranda)
    <!-- Footer-->
    <div class="futer">
    <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Lokasi</h4>
                        <p class="lead mb-0">
                           <b>{{$beranda->lokasi}}</b>
                        </p>
                    </div>
                    <!-- footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Sosial Media</h4>
                        <a href="{{$beranda->instagram}}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: rgba(88, 81, 219, 1);transform: ;msFilter:;"><path d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"></path></svg></a>
                        <a href="{{$beranda->youtube}}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: rgba(255, 0, 0, 1);transform: ;msFilter:;"><path d="M21.593 7.203a2.506 2.506 0 0 0-1.762-1.766C18.265 5.007 12 5 12 5s-6.264-.007-7.831.404a2.56 2.56 0 0 0-1.766 1.778c-.413 1.566-.417 4.814-.417 4.814s-.004 3.264.406 4.814c.23.857.905 1.534 1.763 1.765 1.582.43 7.83.437 7.83.437s6.265.007 7.831-.403a2.515 2.515 0 0 0 1.767-1.763c.414-1.565.417-4.812.417-4.812s.02-3.265-.407-4.831zM9.996 15.005l.005-6 5.207 3.005-5.212 2.995z"></path></svg></a>
                        <a href="{{$beranda->facebook}}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: rgba(0, 13, 255, 1);transform: ;msFilter:;"><path d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z"></path></svg></a>
                    </div>
                    <!-- footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Tentang</h4>
                        <p class="lead mb-0">
                            <b>{{$beranda->tentang}}</b>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        @endforeach
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white" style="background-color:black">
            <div class="container"><small>Copyright &copy; Moch Syarif 2023</small></div>
        </div>
        </div>









<!-- Vendor JS Files -->
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/aos/aos.js"></script>
<script src="vendor/glightbox/js/glightbox.min.js"></script>
<script src="vendor/purecounter/purecounter_vanilla.js"></script>
<script src="vendor/swiper/swiper-bundle.min.js"></script>
<script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="vendor/php-email-form/validate.js"></script>
<!-- Template Main JS File -->
<script src="js/main.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.6.3.min.js"></script>
</body>
</html>