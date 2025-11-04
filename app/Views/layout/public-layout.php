<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <base href="/public">
    <title>IEAT Data Exchange Gateway</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <!-- <link href="Theme/biz/img/favicon.ico" rel="icon"> -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="Theme/biz/lib/animate/animate.min.css" rel="stylesheet">
    <link href="Theme/biz/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="Theme/biz/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="dist/css/style.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="Theme/biz/css/style.css" rel="stylesheet">

</head>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- JavaScript Libraries -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="Theme/biz/lib/wow/wow.min.js"></script>
<script src="Theme/biz/lib/easing/easing.min.js"></script>
<script src="Theme/biz/lib/waypoints/waypoints.min.js"></script>
<script src="Theme/biz/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="Theme/biz/lib/counterup/counterup.min.js"></script>
<script src="plugins/sweetalert/sweetalert.min.js"></script>
<script src="plugins/jquery.blockUI.js"></script>
<script src="dist/js/site.js"></script>

<!-- Template Javascript -->
<script src="Theme/biz/js/main.js"></script>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & ddsapp Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="#" class="navbar-brand p-0">
                    <h4 class="app-name m-0">IEAT Data Exchange Gateway</h4>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="public" class="nav-item nav-link">หน้าหลัก</a>
                        <a href="public/services" class="nav-item nav-link">บริการเผยแพร่</a>
                        <a href="public/register" class="nav-item nav-link">ลงทะเบียน</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="feature.html" class="dropdown-item">Features</a>
                                <a href="quote.html" class="dropdown-item">Free Quote</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a> -->
                    </div>
                    <a href="login" class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5">เข้าสู่ระบบ</a>
                </div>
            </nav>

            <!-- <div class="container-xxl ddsapp-header"> -->
            <!-- <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">We Help To Push Your Business To The Top Level</h1>
                            <p class="text-white pb-3 animated zoomIn">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero ipsum clita lorem</p>
                            <a href="" class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">Learn More</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="Theme/biz/img/about.png" alt="">
                        </div>
                    </div>
                </div> -->
            <!-- </div> -->
        </div>
        <!-- Navbar & ddsapp End -->
        <div class="container-xxl py-6 p-0">
            <!-- <div class="container"> -->
            <?= $this->renderSection("content") ?>
            <!-- </div> -->
        </div>

        <!-- Footer Start -->
        <div class="container-fluid text-orange footer pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-5">
                    <div class="col-md-12 col-lg-12">
                        <!-- <h5 class="text-white mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope me-3"></i>info@example.com</p> -->
                        <!-- <p>สำนักการระบายน้ำ กรุงเทพมหานคร
                            ที่อยู่ 123 สำนักการระบายน้ำ ถนนมิตรไมตรี
                            แขวงดินแดง เขตดินแดง กทม. 10400
                            โทรศัพท์ 0-2203-2609
                            หรือโทร.2216
                        </p>
                        <p>
                            โทรสาร 0-2203-2610

                            ศูนย์ควบคุมระบบป้องกันน้ำท่วม กรุงเทพมหานคร
                            โทรศัพท์ 0-2246-0317-9
                            โทรศัพท์ 0-2248-5115
                        </p> -->
                        <div class="d-flex pt-2">
                            <!-- <a class="btn btn-outline-light btn-social" href="https://twitter.com/bkk_best"><i class="fab fa-twitter"></i></a> -->
                            <!-- <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/bkk.best" target="_blank"><i class="fab fa-facebook-f"></i></a> -->
                            <!-- <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/user/ddsbma" target="_blank"><i class="fab fa-youtube"></i></a> -->
                            <!-- <a class="btn btn-outline-light btn-social" href="" target="_blank"><i class="fab fa-instagram"></i></a> -->
                            <!-- <a class="btn btn-outline-light btn-social" href="https://twitter.com/bkk_best" target="_blank"><i class="fab fa-linkedin-in"></i></a> -->
                        </div>
                    </div>
                    <!-- <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Quick Link</h5>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Popular Link</h5>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div> -->
                    <!-- <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>


    <?= $this->renderSection("javascripts") ?>
</body>

</html>