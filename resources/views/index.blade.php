<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Airweb</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  @include('header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @include('hero-section')
  <!-- End Hero -->

  <main id="main">
    <!-- ======= Clients Section ======= -->
    @include('main.client-section')
    <!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    @include('main.about-us-section')
    <!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    @include('main.why-us-section')
    <!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    @include('main.skill-section')
    <!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    @include('main.service-section')
    <!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    @include('main.cta-section')
    <!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    @include('main.portfolio-section')
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    @include('main.team-section')
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    @include('main.pricing-section')
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    @include('main.frequently-asked-questions-section')
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    @include('main.contact-section')
    <!-- End Contact Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('footer')
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>

  <!-- Template Main JS File -->
  <script>
    const csrfToken = @json(csrf_token());
  </script>
  <script src="{{ asset('js/validate.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>