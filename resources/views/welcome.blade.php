<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Vesperr Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('frontend/assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Vesperr
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">Vesperr</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home<br></a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="index.html#about">Get Started</a>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1>Layanan Informasi dan Pengaduan Online Masyarakat</h1>
                        <p>Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</p>
                        <div class="d-flex">
                            <a href="#about" class="btn-get-started">Laporkan<b>!</b></a>
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                class="glightbox btn-watch-video d-flex align-items-center"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img">
                        <img src="{{ asset('frontend/assets/img/hero-img.png') }}" class="img-fluid animated"
                            alt="">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section light-background">

            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('frontend/assets/img/clients/client-1.png') }}" class="img-fluid"
                            alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('frontend/assets/img/clients/client-2.png') }}" class="img-fluid"
                            alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('frontend/assets/img/clients/client-3.png') }}" class="img-fluid"
                            alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('frontend/assets/img/clients/client-4.png') }}" class="img-fluid"
                            alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('frontend/assets/img/clients/client-5.png') }}" class="img-fluid"
                            alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('frontend/assets/img/clients/client-6.png') }}" class="img-fluid"
                            alt="">
                    </div><!-- End Client Item -->

                </div>

            </div>

        </section><!-- /Clients Section -->

        <!-- Services Section -->
        <section id="about" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Tentang Kami</h2>
                <p>Dengan layanan kami, Anda dapat mengakses informasi terkini dan melaporkan berbagai masalah secara
                    langsung ke pihak berwenang.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <i class="bi bi-activity"></i>
                            <h4><a href="" class="stretched-link">Laporan Pengaduan</a></h4>
                            <p>Sampaikan laporan pengaduan masyarakat terkait pelayanan publik secara langsung.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <i class="bi bi-bounding-box-circles"></i>
                            <h4><a href="" class="stretched-link">Informasi Publik</a></h4>
                            <p>Peroleh informasi terkini tentang kebijakan dan program pemerintah yang relevan dengan
                                masyarakat.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <i class="bi bi-calendar4-week"></i>
                            <h4><a href="" class="stretched-link">Status Laporan</a></h4>
                            <p>Periksa status pengaduan Anda dan mendapatkan update perkembangan penanganannya.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <i class="bi bi-broadcast"></i>
                            <h4><a href="" class="stretched-link">Akses Cepat</a></h4>
                            <p>Mudah dan cepat untuk melaporkan masalah atau mencari informasi yang dibutuhkan.</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 align-items-center">

                    <div class="col-lg-5">
                        <img src="{{ asset('frontend/assets/img/stats-img.svg') }}" alt=""
                            class="img-fluid">
                    </div>

                    <div class="col-lg-7">

                        <div class="row gy-4">

                            <div class="col-lg-6">
                                <div class="stats-item d-flex">
                                    <i class="bi bi-emoji-smile flex-shrink-0"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="232"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p><strong>Happy Clients</strong> <span>consequuntur quae</span></p>
                                    </div>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-6">
                                <div class="stats-item d-flex">
                                    <i class="bi bi-journal-richtext flex-shrink-0"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="521"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p><strong>Projects</strong> <span>adipisci atque cum quia aut</span></p>
                                    </div>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-6">
                                <div class="stats-item d-flex">
                                    <i class="bi bi-headset flex-shrink-0"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="1453"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p><strong>Hours Of Support</strong> <span>aut commodi quaerat</span></p>
                                    </div>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-6">
                                <div class="stats-item d-flex">
                                    <i class="bi bi-people flex-shrink-0"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="32"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p><strong>Hard Workers</strong> <span>rerum asperiores dolor</span></p>
                                    </div>
                                </div>
                            </div><!-- End Stats Item -->

                        </div>

                    </div>

                </div>

            </div>

        </section><!-- /Stats Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row faq-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-5 d-flex">
                        <i class="bi bi-question-circle"></i>
                        <h4>Non consectetur a erat nam at lectus urna duis?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                            curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-5 d-flex">
                        <i class="bi bi-question-circle"></i>
                        <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit
                            laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium.
                            Est pellentesque elit ullamcorper dignissim.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-lg-5 d-flex">
                        <i class="bi bi-question-circle"></i>
                        <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar
                            elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus
                            pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="col-lg-5 d-flex">
                        <i class="bi bi-question-circle"></i>
                        <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Aperiam itaque sit optio et deleniti eos nihil quidem cumque. Voluptas dolorum accusantium
                            sunt sit enim. Provident consequuntur quam aut reiciendis qui rerum dolorem sit odio.
                            Repellat assumenda soluta sunt pariatur error doloribus fuga.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-lg-5 d-flex">
                        <i class="bi bi-question-circle"></i>
                        <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                            ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing
                            bibendum est. Purus gravida quis blandit turpis cursus in
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

            </div>

        </section><!-- /Faq Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-5">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>info@example.com</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-7">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="500">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Your Name" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Your Email" required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer">

        <div class="container">
            <div class="copyright text-center ">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">Vesperr</strong> <span>All Rights
                        Reserved</span></p>
            </div>
            <div class="social-links d-flex justify-content-center">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
