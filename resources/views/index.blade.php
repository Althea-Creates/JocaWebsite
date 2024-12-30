<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>JOCA Construction</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="assets/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3">
              <div class="site-logo d-flex align-items-center">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                <a href="{{ url('/') }}"><strong>JOCA</strong> Constr<span class="text-primary">.</span> </a>
              </div>
            </div>

            <div class="col-9  text-right">

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="/" class="nav-link">Home</a></li>
                  <li><a href="{{ route('about') }}" class="nav-link">About</a></li>
                  <li><a href="{{ route('services') }}" class="nav-link">Services</a></li>
                  <li><a href="{{ route('projects') }}" class="nav-link">Projects</a></li>
                  <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>

          </div>
        </div>

      </header>

      <div id="heroCarousel" class="carousel slide ftco-blocks-cover-1" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="ftco-cover-1 overlay" style="background-image: url('assets/images/hero_1.jpg')">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-6 col-12">
                                <h1 class="line-bottom">We build and construct with excellence.</h1>
                            </div>
                            <div class="col-lg-5 col-md-6 col-12 ml-auto text-white">
                              <p>We at JOCA Construction Services applies our management and professional proficiency.</p>
                              <a href="#get-quote" class="btn-get-quote">Get a Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="ftco-cover-1 overlay" style="background-image: url('assets/images/hero_2.jpg')"></div>
            </div>
            <div class="carousel-item">
                <div class="ftco-cover-1 overlay" style="background-image: url('assets/images/hero_3.jpg')"></div>
            </div>
        </div>
    
        <!-- Carousel controls -->
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
      </div>    
      {{-- get a quotation --}}
      <section id="get-quote">
      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-12 pr-md-5 mr-auto">
              <h2 class="line-bottom">If You Have Project In Mind. Get A Quotation</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim maiores mollitia qui quam labore hic asperiores provident maxime earum eum.</p>
            </div>
            <div class="col-md-6">
              <div class="quick-contact-form bg-white">
                  <h2>Get Quotation</h2>
                  <form action="#" method="">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <textarea name="" class="form-control" id="" cols="30" rows="5" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Send Message" class="btn btn-primary px-5">
                    </div>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
      </section>

      {{-- services --}}
      <div class="site-section" style="background-color: #dedffe;">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-4 mx-auto">
              <h2 class="line-bottom text-center">Services</h2>
            </div>
          </div>
          <div class="row align-items-stretch">
            <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
              <div class="service-2 h-100">
                <div class="svg">
                  <img src="assets/images/flaticon/svg/001-renovation.svg" alt="Image" class="">
                </div>

                <h3><span>Renovation</span></h3>
                <p>Consectetur adipisicing elit. Numquam repellendus aut labore</p>

              </div>
            </div>
            <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
              <div class="service-2 h-100">
                <div class="svg">
                  <img src="assets/images/flaticon/svg/002-shovel.svg" alt="Image" class="">
                </div>

                <h3><span>Finishing</span></h3>
                <p>Consectetur adipisicing elit. Numquam repellendus aut labore</p>

              </div>
            </div>
            <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
              <div class="service-2 h-100">
                <div class="svg">
                  <img src="assets/images/flaticon/svg/003-bulldozer.svg" alt="Image" class="">
                </div>

                <h3><span>Building Construction</span></h3>
                <p>Consectetur adipisicing elit. Numquam repellendus aut labore</p>

              </div>
            </div>


            <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
              <div class="service-2 h-100">
                <div class="svg">
                  <img src="assets/images/flaticon/svg/004-house-plan.svg" alt="Image" class="">
                </div>

                <h3><span>House Build</span></h3>
                <p>Consectetur adipisicing elit. Numquam repellendus aut labore</p>

              </div>
            </div>
            <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
              <div class="service-2 h-100">
                <div class="svg">
                  <img src="assets/images/flaticon/svg/005-fence.svg" alt="Image" class="">
                </div>

                <h3><span>Fence Construction</span></h3>
                <p>Consectetur adipisicing elit. Numquam repellendus aut labore</p>

              </div>
            </div>
            <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
              <div class="service-2 h-100">
                <div class="svg">
                  <img src="assets/images/flaticon/svg/006-wheelbarrow.svg" alt="Image" class="">
                </div>

                <h3><span>Bridge Construct</span></h3>
                <p>Consectetur adipisicing elit. Numquam repellendus aut labore</p>

              </div>
            </div>

          </div>
        </div>
      </div>

      {{-- projects --}}
      <div class="site-section">
        <div class="container">
          <div class="row mb-4">
            <div class="col-md-4 mx-auto">
              <h2 class="line-bottom text-center">Our Projects</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
              <div class="project-item">
                <img src="assets/images/img_1.jpg" alt="Image" class="img-fluid">
                <div class="project-item-overlay">
                  <a class="category" href="#">Renovate</a>
                  <span class="plus">
                    <span class="icon-plus"></span>
                  </span>
                  <a href="#" class="project-title"><span>Renovate the house</span></a>
                </div>
              </div>
            </div>

            <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
              <div class="project-item">
                <img src="assets/images/img_2.jpg" alt="Image" class="img-fluid">
                <div class="project-item-overlay">
                  <a class="category" href="#">Renovate</a>
                  <span class="plus">
                    <span class="icon-plus"></span>
                  </span>
                  <a href="#" class="project-title"><span>Renovate the house 2</span></a>
                </div>
              </div>
            </div>

            <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
              <div class="project-item">
                <img src="assets/images/img_3.jpg" alt="Image" class="img-fluid">
                <div class="project-item-overlay">
                  <a class="category" href="#">Renovate</a>
                  <span class="plus">
                    <span class="icon-plus"></span>
                  </span>
                  <a href="#" class="project-title"><span>Renovate the house 2</span></a>
                </div>
              </div>
            </div>

            <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
              <div class="project-item">
                <img src="assets/images/img_4.jpg" alt="Image" class="img-fluid">
                <div class="project-item-overlay">
                  <a class="category" href="#">Renovate</a>
                  <span class="plus">
                    <span class="icon-plus"></span>
                  </span>
                  <a href="#" class="project-title"><span>Renovate the house</span></a>
                </div>
              </div>
            </div>

            <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
              <div class="project-item">
                <img src="assets/images/img_1.jpg" alt="Image" class="img-fluid">
                <div class="project-item-overlay">
                  <a class="category" href="#">Renovate</a>
                  <span class="plus">
                    <span class="icon-plus"></span>
                  </span>
                  <a href="#" class="project-title"><span>Renovate the house 2</span></a>
                </div>
              </div>
            </div>

            <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
              <div class="project-item">
                <img src="assets/images/img_2.jpg" alt="Image" class="img-fluid">
                <div class="project-item-overlay">
                  <a class="category" href="#">Renovate</a>
                  <span class="plus">
                    <span class="icon-plus"></span>
                  </span>
                  <a href="#" class="project-title"><span>Renovate the house 2</span></a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="site-section bg-light">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-4 mx-auto">
              <h2 class="line-bottom text-center">Testimonials</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="testimonial-3">
                <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure id accusantium similique temporibus nihil blanditiis adipisci aperiam, sapiente suscipit vero.</blockquote>
                <div class="vcard d-flex align-items-center">
                  <div class="img-wrap mr-3">
                    <img src="{{ asset('assets/images/person.jpg') }}" alt="Image" class="img-fluid">
                  </div>
                  <div>
                    <span class="d-block">John Smith</span>
                    <span class="position">Client From Facebook</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="testimonial-3">
                <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure id accusantium similique temporibus nihil blanditiis adipisci aperiam, sapiente suscipit vero.</blockquote>
                <div class="vcard d-flex align-items-center">
                  <div class="img-wrap mr-3">
                    <img src="{{ asset('assets/images/person.jpg') }}" alt="Image" class="img-fluid">
                  </div>
                  <div>
                    <span class="d-block">John Smith</span>
                    <span class="position">Client From Facebook</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <h2 class="footer-heading mb-4">About Us</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis impedit, odit minima repellat, doloribus alias amet consequatur inventore.</p>
            </div>
            <div class="col-lg-8 ml-auto">
              <div class="row">
                <div class="col-lg-3">
                  <h2 class="footer-heading mb-4">Quick Links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
                <div class="col-lg-3">
                  <h2 class="footer-heading mb-4">Quick Links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
                <div class="col-lg-3">
                  <h2 class="footer-heading mb-4">Quick Links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
                <div class="col-lg-3">
                  <h2 class="footer-heading mb-4">Quick Links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <div class="border-top pt-5">
                <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
              </div>
            </div>

          </div>
        </div>
      </footer>

      </div>

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.animateNumber.min.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/aos.js"></script>

    <script src="assets/js/main.js"></script>

  </body>
</html>
