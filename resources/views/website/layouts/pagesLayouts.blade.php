<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LinAlp Medya</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('website') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('website') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('website') }}/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('website') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('website') }}/css/style.css" rel="stylesheet">
    @yield('css')

</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            @include('website.layouts.header')

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">@yield('page-name')</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">@yield('page-adres1')</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">@yield('page-adres2')</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                @yield('content')
              </div>
            </div>
        </div>




        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
          <div class="container py-5">
                       <div class="row g-5">
                        <div class="col-lg-3 col-md-6">
                             @include('website.layouts.footer')
                        </div>
                        <div class="col-lg-3 col-md-6">
                           @include('website.layouts.footer-2')
                        </div>
                        <div class="col-lg-3 col-md-6">
                          @include('website.layouts.footer-3')
                        </div>
                        <div class="col-lg-3 col-md-6">
                          @include('website.layouts.footer-4')
                        </div>
                       </div>
                   </div>
                   <div class="container">
                       <div class="copyright">
                           <div class="row">
                               <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                 @include('website.layouts.copy-right')
                               </div>
                            </div>
                        </div>
                  </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('website') }}/lib/wow/wow.min.js"></script>
    <script src="{{ asset('website') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('website') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('website') }}/lib/counterup/counterup.min.js"></script>
    <script src="{{ asset('website') }}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('website') }}/lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{ asset('website') }}/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{ asset('website') }}/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('website') }}/js/main.js"></script>
    @yield('js')
</body>

</html>
