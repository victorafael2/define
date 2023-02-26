<?php
include 'conexao/conexao.php';

session_start();
// echo $_SESSION['email'];



?>



<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>D.E.F.I.N.E</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/simplebar/simplebar.min.js"></script>
    <script src="assets/js/config.js"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
    var phoenixIsRTL = JSON.parse(localStorage.getItem('phoenixIsRTL'));
    if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
    } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
    }
    </script>
</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main style="--phoenix-scroll-margin-top: 1.2rem;">
        <nav class="navbar bg-white navbar-expand-lg sticky-top">
            <div class="container-small px-0 px-sm-3"><a class="navbar-brand flex-1 flex-lg-grow-0" href="index.html">
                    <div class="d-flex align-items-center"><img src="assets/img/icons/logo.png" alt="phoenix"
                            width="27" />
                        <p class="logo-text ms-2">define</p>
                    </div>
                </a>
                <div class="d-lg-none">
                    <div class="theme-control-toggle fa-icon-wait px-2">
                        <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                            data-theme-control="phoenixTheme" value="dark" id="themeControlToggleSm" />
                        <label class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                            for="themeControlToggleSm" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Switch theme"><span class="icon" data-feather="moon"></span></label>
                        <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                            for="themeControlToggleSm" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Switch theme"><span class="icon" data-feather="sun"></span></label>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="border-bottom border-bottom-lg-0 mb-2">
                        <div class="search-box d-inline d-lg-none">
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                                <input class="form-control search-input search rounded-pill my-4" type="search"
                                    placeholder="Search" aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>

                            </form>
                        </div>
                    </div>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item border-bottom border-bottom-lg-0"><a
                                class="nav-link lh-1 py-0 fs--1 fw-bold py-3 active" aria-current="page"
                                href="#">Home</a></li>
                        <!-- <li class="nav-item border-bottom border-bottom-lg-0"><a class="nav-link lh-1 py-0 fs--1 fw-bold py-3" href="#feature">Features</a></li>
              <li class="nav-item border-bottom border-bottom-lg-0"><a class="nav-link lh-1 py-0 fs--1 fw-bold py-3" href="#blog">Blog</a></li>
              <li class="nav-item"><a class="nav-link lh-1 py-0 fs--1 fw-bold py-3" href="#team">Team</a></li> -->
                    </ul>
                    <div class="d-grid d-lg-flex align-items-center">
                        <div class="nav-item d-flex align-items-center d-none d-lg-block pe-2">
                            <div class="theme-control-toggle fa-icon-wait px-2">
                                <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                                    data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" />
                                <label class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                    for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="Switch theme"><span class="icon" data-feather="moon"></span></label>
                                <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                    for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="Switch theme"><span class="icon" data-feather="sun"></span></label>
                            </div>
                        </div><a class="text-500 px-2 d-none d-lg-inline me-2" href="#" data-bs-toggle="modal"
                            data-bs-target="#searchBoxModal"><span data-feather="search"
                                style="height:12px;width:12px;"></span></a><a
                            class="btn btn-link text-900 order-1 order-lg-0 ps-3 me-2" href="login.php">Entrar</a><a
                            class="btn btn-phoenix-primary order-0"
                            href="pages/authentication/simple/sign-up.html"><span class="fw-bold">Cadastrar</span></a>

                        <form method="post" action="encerrar_sessao.php">
                            <input type="hidden" name="encerrar_sessao" value="1">
                            <input class="btn btn-phoenix-danger order-0" type="submit" value="Encerrar sessão">
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true"
            data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
            <div class="modal-dialog">
                <div class="modal-content mt-15">
                    <div class="modal-body p-0">
                        <div class="chat-search-box">
                            <div class="form-icon-container">
                                <input class="form-control py-3 form-icon-input rounded-1" type="text"
                                    autofocus="autofocus" placeholder="Search People, Groups and Messages" /><span
                                    class="fa-solid fa-magnifying-glass fs--1 form-icon"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="bg-white pb-8" id="home">
            <div class="container-small hero-header-container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-auto order-0 order-md-1 text-end order-1">
                        <div class="position-relative p-5 p-md-7 d-lg-none">
                            <div class="bg-holder"
                                style="background-image:url(assets/img/bg/bg-23.png);background-size:contain;">
                            </div>
                            <!--/.bg-holder-->

                            <div class="position-relative"><img class="w-100 shadow-lg d-dark-none rounded-2"
                                    src="assets/img/bg/bg-31.png" alt="hero-header" /><img
                                    class="w-100 shadow-lg d-light-none rounded-2" src="assets/img/bg/bg-30.png"
                                    alt="hero-header" /></div>
                        </div>
                        <div class="hero-image-container position-absolute top-0 bottom-0 end-0 d-none d-lg-block">
                            <div class="position-relative h-100 w-100">
                                <div
                                    class="position-absolute h-100 top-0 d-flex align-items-center end-0 hero-image-container-bg">
                                    <img class="pt-7 pt-md-0 w-100" src="assets/img/bg/bg-1-2.png" alt="hero-header" />
                                </div>
                                <div class="position-absolute h-100 top-0 d-flex align-items-center end-0"><img
                                        class="pt-7 pt-md-0 w-100 shadow-lg d-dark-none rounded-2"
                                        src="assets/img/bg/bg-28.png" alt="hero-header" /><img
                                        class="pt-7 pt-md-0 w-100 shadow-lg d-light-none rounded-2"
                                        src="assets/img/bg/bg-29.png" alt="hero-header" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 text-lg-start text-center pt-8 pb-6 order-0 position-relative">
                        <h1 class="fs-5 fs-lg-6 fs-md-7 fs-lg-6 fs-xl-7 fs fw-black mb-4"><span
                                class="text-primary me-3">Elegance</span>for<br />your web app</h1>
                        <p class="mb-5">Standard, modern and Elegant solution for your next web app so you don’t have to
                            look further. Sign up or check the demo below.</p><a
                            class="btn btn-lg btn-primary rounded-pill me-3" href="empresas/empresa__.php"
                            role="button">Cadastrar</a><a class="btn btn-link me-2 fs-0 p-0 text-decoration-none"
                            href="questionario/questionario2_.php" role="button">Ir para questionario<span
                                class="fa-solid fa-angle-right ms-2 fs--1"></span></a>
                    </div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-5 pt-xl-13 bg-white">

            <div class="container-small">
                <div class="row g-0">
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end">
                            <img class="w-100" src="assets/img/brand2/netflix-n.png" alt="" /></div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end-md">
                            <img class="w-100" src="assets/img/brand2/blender.png" alt="" /></div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end border-end-md">
                            <img class="w-100" src="assets/img/brand2/upwork.png" alt="" /></div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end-lg-0">
                            <img class="w-100" src="assets/img/brand2/facebook-f.png" alt="" /></div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end border-bottom border-bottom-md-0">
                            <img class="w-100" src="assets/img/brand2/pocket.png" alt="" /></div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end-md border-bottom border-bottom-md-0">
                            <img class="w-100" src="assets/img/brand2/mail-bluster-1.png" alt="" /></div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end">
                            <img class="w-100" src="assets/img/brand2/discord.png" alt="" /></div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end-lg-0">
                            <img class="w-100" src="assets/img/brand2/google-g.png" alt="" /></div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-15 pb-0" id="feature">

            <div class="container-small">
                <div class="position-relative z-index-2">
                    <div class="row">
                        <div class="col-lg-6 text-center text-lg-start pe-xxl-3">
                            <h4 class="text-primary fw-bolder mb-4">Features</h4>
                            <h2 class="mb-3 text-black lh-base">A fully integrated suite<br />of payments products</h2>
                            <p class="mb-5">With the power of Phoenix, you can now focus only on functionaries for your
                                digital products, while leaving the UI design on us!With the power of Phoenix, you can
                                now focus only on functionaries for your digital products, while leaving the UI design
                                on us!</p><a class="btn btn-lg btn-outline-primary rounded-pill me-2" href="#!"
                                role="button">Find out more<i class="fa-solid fa-angle-right ms-2"></i></a>
                        </div>
                        <div class="col-sm-6 col-lg-3 mt-7 text-center text-lg-start">
                            <div class="h-100 d-flex flex-column justify-content-between">
                                <div class="border-start-lg border-dashed ps-4"><img class="mb-4"
                                        src="assets/img/icons/illustrations/bolt.png" width="48" height="48" alt="" />
                                    <div>
                                        <h5 class="fw-bolder mb-2">Lightning Speed</h5>
                                        <p class="fw-semi-bold lh-sm">Present everything you need in one place within
                                            minutes! Grow with Phoenix!</p>
                                    </div>
                                    <div><a class="btn btn-link me-2 p-0 fs--1" href="#!" role="button">Check Demo<span
                                                class="fa-solid fa-angle-right ms-2"></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mt-7 text-center text-lg-start">
                            <div class="h-100 d-flex flex-column">
                                <div class="border-start-lg border-dashed ps-4"><img class="mb-4"
                                        src="assets/img/icons/illustrations/pie.png" width="48" height="48" alt="" />
                                    <div>
                                        <h5 class="fw-bolder mb-2">All-in-one solution</h5>
                                        <p class="fw-semi-bold lh-sm">Show your production and growth graph in one place
                                            with Phoenix!</p>
                                    </div>
                                    <div><a class="btn btn-link me-2 p-0 fs--1" href="#!" role="button">Check Demo<i
                                                class="fa-solid fa-angle-right ms-2"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="row mt-12 align-items-center justify-content-between text-center text-lg-start mb-6 mb-lg-0">
                        <div class="col-lg-5"><img class="img-fluid mb-9 mb-lg-0 d-dark-none"
                                src="assets/img/spot-illustrations/22_2.png" alt="" /><img
                                class="img-fluid mb-9 mb-lg-0 d-light-none"
                                src="assets/img/spot-illustrations/dark_22.png" alt="" /></div>
                        <div class="col-lg-6">
                            <h6 class="text-primary mb-2 ls-2">SIGNAL</h6>
                            <h3 class="fw-bolder mb-3">Recieve the signals instantly</h3>
                            <p class="mb-4 px-md-7 px-lg-0">Phoenix makes it possible for you to quickly and effectively
                                receive every signal. No need for drawn-out waiting.</p><a
                                class="btn btn-link me-2 p-0 fs--1" href="#!" role="button">Check Demo<i
                                    class="fa-solid fa-angle-right ms-2"></i></a>
                        </div>
                    </div>
                    <div
                        class="row mt-2 align-items-center justify-content-between text-center text-lg-start mb-6 mb-lg-0">
                        <div class="col-lg-5 order-0 order-lg-1"><img class="img-fluid mb-9 mb-lg-0 d-dark-none"
                                src="assets/img/spot-illustrations/23_2.png" height="394" alt="" /><img
                                class="img-fluid mb-9 mb-lg-0 d-light-none"
                                src="assets/img/spot-illustrations/dark_23.png" height="394" alt="" /></div>
                        <div class="col-lg-6">
                            <h6 class="text-primary mb-2 ls-2">REVENUE</h6>
                            <h3 class="fw-bolder mb-3">See Your Revenue Grow</h3>
                            <p class="mb-4 px-md-7 px-lg-0">Grow with Phoenix. We help you with everything you might
                                need., We make it easy and keep it simple.</p><a class="btn btn-link me-2 p-0 fs--1"
                                href="#!" role="button">Check Demo<i class="fa-solid fa-angle-right ms-2"></i></a>
                        </div>
                    </div>
                    <div
                        class="row mt-2 align-items-center justify-content-between text-center text-lg-start mb-6 mb-lg-0">
                        <div class="col-lg-5"><img class="img-fluid mb-9 mb-lg-0 d-dark-none"
                                src="assets/img/spot-illustrations/24_2.png" height="394" alt="" /><img
                                class="img-fluid mb-9 mb-lg-0 d-light-none"
                                src="assets/img/spot-illustrations/dark_24.png" height="394" alt="" /></div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <h6 class="text-primary mb-2 ls-2">REPORTS</h6>
                            <h3 class="fw-bolder mb-3">Get Reports Ready</h3>
                            <p class="mb-4 px-md-7 px-lg-0">With Phoenix, you can get ready reports on your growth
                                analysis anytime. This dashboard also has all filters accessible according to your
                                needs.</p><a class="btn btn-link me-2 p-0 fs--1" href="#!" role="button">Check Demo<i
                                    class="fa-solid fa-angle-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <div class="position-relative">
            <div class="bg-holder z-index-2 d-none d-md-block"
                style="background-image:url(assets/img/bg/13.png);background-size:auto;background-position:right;">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder z-index-2 d-none d-md-block d-lg-none d-xl-block"
                style="background-image:url(assets/img/bg/bg-12.png);background-size:auto;background-position:left;">
            </div>
            <!--/.bg-holder-->

            <div class="bottom-0 start-0 end-0 bg-white">
                <svg class="w-100 text-soft" viewBox="0 0 1920 368" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1920 0.44L0 367.74V0H1920V0.44Z" fill="currentColor"></path>
                </svg>
            </div>
            <section class="pb-0 bg-white overflow-hidden position-static">
                <div class="container-small">
                    <div class="row">
                        <div class="col-lg-6 mb-6 text-center text-lg-start z-index-2">
                            <h4 class="text-primary fw-bolder mb-3">Testimonial</h4>
                            <h2 class="mb-3 text-black">More than 2 Millions happy<br />Customers and counting</h2>
                            <p class="mb-5">You may now concentrate on the functionality and other <br
                                    class="d-none d-sm-block" />aspects of your web products thanks to Phoenix's
                                strength<br class="d-none d-sm-block" />before leaving the UI design to us. It is simple
                                to complete<br class="d-none d-sm-block" />the work after checking and double-checking.
                            </p>
                        </div>
                        <div class="col-lg-6 z-index-2">
                            <div class="carousel slide" id="carouselExampleIndicators" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row g-1 g-lg-0 g-xl-1 pb-lg-3 pb-xl-0 ps-lg-1 ps-xl-0">
                                            <div class="col-lg-6 col-xl-5 text-center">
                                                <div
                                                    class="testimonial-avatar-container d-inline-block position-relative">
                                                    <div class="bg-holder"
                                                        style="background-image:url(assets/img/bg/bg-2.png);background-size:contain;">
                                                    </div>
                                                    <!--/.bg-holder-->
                                                    <img class="rounded-3 mb-lg-0 opacity-100 position-relative"
                                                        src="assets/img/team/61.png" width="153" height="153" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-7 text-center text-lg-start">
                                                <div class="mb-4 light"><span
                                                        class="fa fa-star text-primary"></span><span
                                                        class="fa fa-star text-primary"></span><span
                                                        class="fa fa-star text-primary"></span><span
                                                        class="fa fa-star text-primary"></span><span
                                                        class="fa fa-star text-primary"></span>
                                                </div>
                                                <h3 class="fs-1 fs-xl-2 mb-5 lh-sm me-md-7 me-lg-0">Brilliant app! Will
                                                    definitely going to be my first choice starting from today</h3>
                                                <h6>Monica Gomez</h6>
                                                <h6 class="fw-normal">UX designer, Google</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row g-1 g-lg-0 g-xl-1 pb-lg-3 pb-xl-0 ps-lg-1 ps-xl-0">
                                            <div class="col-lg-6 col-xl-5 text-center">
                                                <div
                                                    class="testimonial-avatar-container d-inline-block position-relative">
                                                    <div class="bg-holder"
                                                        style="background-image:url(assets/img/bg/bg-2.png);background-size:contain;">
                                                    </div>
                                                    <!--/.bg-holder-->
                                                    <img class="rounded-3 mb-lg-0 opacity-100 position-relative"
                                                        src="assets/img/team/8.png" width="154" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-7 text-center text-lg-start">
                                                <div class="mb-4 light"><span
                                                        class="fa fa-star text-primary"></span><span
                                                        class="fa fa-star text-primary"></span><span
                                                        class="fa fa-star text-primary"></span><span
                                                        class="fa fa-star text-primary"></span><span
                                                        class="fa fa-star text-primary"></span>
                                                </div>
                                                <h3 class="fs-1 fs-xl-2 mb-5 lh-sm me-md-7 me-lg-0">“Excellent to work
                                                    with and comfortable to customize. This is what I was looking for
                                                    till the date!”</h3>
                                                <h6>Marc Chiasson</h6>
                                                <h6 class="fw-normal">UX designer, Adobe</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row g-1 g-lg-0 g-xl-1 pb-lg-3 pb-xl-0 ps-lg-1 ps-xl-0">
                                            <div class="col-lg-6 col-xl-5 text-center">
                                                <div
                                                    class="testimonial-avatar-container d-inline-block position-relative">
                                                    <div class="bg-holder"
                                                        style="background-image:url(assets/img/bg/bg-2.png);background-size:contain;">
                                                    </div>
                                                    <!--/.bg-holder-->
                                                    <img class="rounded-3 mb-lg-0 opacity-100 position-relative"
                                                        src="assets/img/team/35.png" width="154" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-7 text-center text-lg-start">
                                                <div class="mb-4 light"><span
                                                        class="fa fa-star text-primary"></span><span
                                                        class="fa fa-star text-primary"></span><span
                                                        class="fa fa-star text-primary"></span><span
                                                        class="fa fa-star text-primary"></span><span
                                                        class="fa fa-star text-primary"></span>
                                                </div>
                                                <h3 class="fs-1 fs-xl-2 mb-5 lh-sm me-md-7 me-lg-0">“Phoenix is all you
                                                    can ask for. This is perfect fit for everything you might want to
                                                    work on!”</h3>
                                                <h6>Axel Barry</h6>
                                                <h6 class="fw-normal">UX designer, Apple</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="position-relative">
            <div class="bg-holder world-map-bg" style="background-image:url(assets/img/bg/bg-13.png);">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder z-index-2 opacity-25"
                style="background-image:url(assets/img/bg/bg-right-21.png);background-size:auto;background-position:right;">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder z-index-2 mt-9 opacity-25"
                style="background-image:url(assets/img/bg/bg-left-21.png);background-size:auto;background-position:left;">
            </div>
            <!--/.bg-holder-->

            <svg class="w-100 text-white position-relative" preserveAspectRatio="none" viewBox="0 0 1920 368"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1920 0.44L0 367.74V0H1920V0.44Z" fill="currentColor"></path>
            </svg>
            <section class="overflow-hidden z-index-2">
                <div class="container-small light">
                    <div class="position-relative">
                        <div class="row mb-6">
                            <div class="col-xl-6 text-center text-md-start">
                                <h2 class="text-white mb-2">Being used by millions of users</h2>
                                <h1 class="fs-md-5 fs-xl-6 fw-black text-gradient-info text-uppercase mb-4 mb-md-0">
                                    WORLDWIDE</h1>
                            </div>
                            <div class="col-xl-6 text-center text-md-start">
                                <p class="text-white">You can get all the reports, data analysis, and growth maps you
                                    need with the help of Phoenix's power, and you may review and modify them whenever
                                    you want. These features make this dashboard outstanding.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8 text-center text-md-start mb-6 mb-xl-0">
                                <div class="d-md-flex justify-content-md-between">
                                    <div class="mb-6 mb-md-0 me-4">
                                        <h1 class="display-1 text-white fw-bolder"
                                            data-countup='{"endValue":125,"duration":10,"suffix":"+"}'>0 <span>+</span>
                                        </h1>
                                        <p class="text-white">Every month, there are more<br
                                                class="d-md-none d-lg-block" />than 125+ sales.</p>
                                    </div>
                                    <div class="mb-6 mb-md-0 me-4">
                                        <h1 class="display-1 text-white fw-bolder"
                                            data-countup='{"endValue":308,"duration":10,"suffix":"k"}'>0</h1>
                                        <p class="text-white">We have 308+ active paid.<br
                                                class="d-md-none d-lg-block" />subscribers.</p>
                                    </div>
                                    <div class="mb-6 mb-md-0 me-4">
                                        <h1 class="display-1 text-white fw-bolder"
                                            data-countup='{"endValue":12,"duration":0.5}'>0</h1>
                                        <p class="text-white">We have won 12 awards so<br
                                                class="d-md-none d-lg-block" />far with great success. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 text-center text-md-start"><img class="img-fluid"
                                    src="assets/img/generic/capterra.png" alt="" /></div>
                        </div>
                    </div>
                </div>
            </section>
            <svg class="text-white w-100 position-relative" viewBox="0 0 1920 368" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M0 368L1920 0.730011L1920 368L0 368Z" fill="currentColor"></path>
            </svg>
        </div>
        <section class="bg-white">
            <div class="bg-holder d-dark-none"
                style="background-image:url(assets/img/bg/bg-5.png);background-size:auto;">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder d-light-none"
                style="background-image:url(assets/img/bg/bg-dark-5.png);background-size:auto;">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder"
                style="background-image:url(assets/img/bg/bg-left-5.png);background-position:left;background-size:auto;">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder"
                style="background-image:url(assets/img/bg/bg-right-6.png);background-position:right;background-size:auto;">
            </div>
            <!--/.bg-holder-->

            <div class="container-small position-relative">
                <div class="row mb-8 text-center text-sm-start">
                    <div class="col-12 mb-4">
                        <h4 class="text-primary fw-bolder mb-3">Gallery</h4>
                        <h2>Some of Our Best Works</h2>
                    </div>
                    <div class="col-lg-6">
                        <p>Rise like Phoenix focusing only on functionalities for your digital products leaving the
                            design for us. Show what you do, with our latest admin dashboard. Check our best works and
                            let us know what you want to find.</p>
                    </div>
                    <div class="col-lg-6">
                        <p>Want to tell your customers about the details of how and what? Tell them with all the posts
                            at one place without them ridirecting to another page or site.</p>
                    </div>
                </div>
                <ul class="nav font-sans-serif mb-6 justify-content-center justify-content-sm-start w-max-content"
                    data-filter-nav="data-filter-nav">
                    <li class="nav-item"><a class="isotope-nav active" href="#!" data-filter="*">First</a></li>
                    <li class="nav-item"><a class="isotope-nav" href="#!" data-filter=".second">Second</a></li>
                    <li class="nav-item"><a class="isotope-nav" href="#!" data-filter=".third">Third</a></li>
                    <li class="nav-item"> <a class="isotope-nav" href="#!" data-filter=".fourth">Fourth</a></li>
                </ul>
                <div class="row g-3" id="image_gallery" style="min-height: 948px"
                    data-sl-isotope='{"layoutMode":"packery"}'>
                    <div class="col-6 col-md-4 col-lg-3 px-2 isotope-item fourth"><a href="#!" data-caption="caption"
                            data-bigpicture='{"gallery":"#image_gallery"}' data-bp="assets/img/gallery/1.png"><img
                                class="rounded img-fluid w-100" src="assets/img/gallery/1.png" alt="" /></a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 px-2 isotope-item third"><a href="#!" data-caption="caption"
                            data-bigpicture='{"gallery":"#image_gallery"}' data-bp="assets/img/gallery/2.png"><img
                                class="rounded img-fluid w-100" src="assets/img/gallery/2.png" alt="" /></a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 px-2 isotope-item second"><a href="#!" data-caption="caption"
                            data-bigpicture='{"gallery":"#image_gallery"}' data-bp="assets/img/gallery/3.png"><img
                                class="rounded img-fluid w-100" src="assets/img/gallery/3.png" alt="" /></a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 px-2 isotope-item third"><a href="#!" data-caption="caption"
                            data-bigpicture='{"gallery":"#image_gallery"}' data-bp="assets/img/gallery/5.png"><img
                                class="rounded img-fluid w-100" src="assets/img/gallery/5.png" alt="" /></a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 px-2 isotope-item third"><a href="#!" data-caption="caption"
                            data-bigpicture='{"gallery":"#image_gallery"}' data-bp="assets/img/gallery/4.png"><img
                                class="rounded img-fluid w-100" src="assets/img/gallery/4.png" alt="" /></a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 px-2 isotope-item second"><a href="#!" data-caption="caption"
                            data-bigpicture='{"gallery":"#image_gallery"}' data-bp="assets/img/gallery/6.png"><img
                                class="rounded img-fluid w-100" src="assets/img/gallery/6.png" alt="" /></a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 px-2 isotope-item second"><a href="#!" data-caption="caption"
                            data-bigpicture='{"gallery":"#image_gallery"}' data-bp="assets/img/gallery/7.png"><img
                                class="rounded img-fluid w-100" src="assets/img/gallery/7.png" alt="" /></a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-6 px-2 isotope-item second"><a href="#!" data-caption="caption"
                            data-bigpicture='{"gallery":"#image_gallery"}' data-bp="assets/img/gallery/9.png"><img
                                class="rounded img-fluid w-100" src="assets/img/gallery/9.png" alt="" /></a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 px-2 isotope-item fourth"><a href="#!" data-caption="caption"
                            data-bigpicture='{"gallery":"#image_gallery"}' data-bp="assets/img/gallery/8.png"><img
                                class="rounded img-fluid w-100" src="assets/img/gallery/8.png" alt="" /></a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-6 px-2 isotope-item second"><a href="#!" data-caption="caption"
                            data-bigpicture='{"gallery":"#image_gallery"}' data-bp="assets/img/gallery/10.png"><img
                                class="rounded img-fluid w-100" src="assets/img/gallery/10.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white">
            <div class="bg-holder d-none d-md-block"
                style="background-image:url(assets/img/bg/bg-left-15.png);background-position:left;background-size:auto;">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder d-none d-md-block"
                style="background-image:url(assets/img/bg/bg-right-15.png);background-position:right;background-size:auto;">
            </div>
            <!--/.bg-holder-->

            <div class="container-small position-relative">
                <div class="row">
                    <div class="col-12 mb-4 text-center text-sm-start">
                        <h4 class="text-primary fw-bolder mb-3">Pricing</h4>
                        <h2>Choose the best deal for you</h2>
                    </div>
                    <div class="col-md-6 text-center text-sm-start">
                        <p>Entice your customers with Phoenix admin dashboard. Show your best deal in this section to
                            help customers choose from your best offers and place them all in one place with this
                            efficient template. If you are availing more than one </p>
                    </div>
                    <div class="col-md-6 text-center text-sm-start">
                        <p>offer to your customers, let them compare among them and search for what they need to get.
                            Show offer details here and entice them to buy.</p>
                    </div>
                </div>
                <div class="row pt-9 g-3 g-xl-0">
                    <div class="col-md-6 col-xl-3">
                        <div class="card h-100 rounded-xl-end-0 rounded-start">
                            <div class="card-body px-6">
                                <div class="px-5">
                                    <div class="text-center pt-5"><img src="assets/img/icons/illustrations/pie.png"
                                            width="48" height="48" alt="" />
                                        <h3 class="fw-semi-bold my-4">Starter</h3>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="fw-semi-bold text-primary">$<span class="fw-bolder">6</span><span
                                                class="text-black fs-1 ms-1 fw-bolder">USD</span></h1>
                                        <h5 class="mb-4 text-900"></h5>
                                        <button class="btn btn-lg mb-6 w-100 btn-outline-primary">Buy</button>
                                    </div>
                                </div>
                                <ul class="fa-ul pricing-list">
                                    <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                class="fas fa-check text-primary"></span></span><span class="text-800"
                                            style="--phoenix-text-opacity:1;">Timeline</span>
                                    </li>
                                    <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                class="fas fa-check text-primary"></span></span><span class="text-800"
                                            style="--phoenix-text-opacity:1;">Advanced Search</span>
                                    </li>
                                    <li class="mb-4 d-flex align-items-center"><span class="text-800"
                                            style="--phoenix-text-opacity:.5;">Custom fields</span><span
                                            class="badge badge-phoenix badge-phoenix-warning ms-2 fs--2 opacity-50">New</span>
                                    </li>
                                    <li class="mb-4 d-flex align-items-center"><span class="text-800"
                                            style="--phoenix-text-opacity:.5;">Task dependencies</span>
                                    </li>
                                    <li class="mb-4 d-flex align-items-center"><span class="text-800"
                                            style="--phoenix-text-opacity:.5;">Private teams &amp; projects</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div
                            class="card h-100  rounded-top-0 rounded-xl-0 border border-2 border-primary dark__border-primary mt-5 mt-md-0">
                            <div
                                class="position-absolute d-flex flex-center bg-primary-100 rounded-top py-1 end-0 start-0 badge-pricing">
                                <p class="text-primary-600 mb-0 dark__text-primary-200">Most popular</p>
                            </div>
                            <div class="card-body px-6">
                                <div class="px-5">
                                    <div class="text-center pt-5"><img src="assets/img/icons/illustrations/bolt.png"
                                            width="48" height="48" alt="" />
                                        <h3 class="fw-semi-bold my-4">Team</h3>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="fw-semi-bold text-primary">$<span class="fw-bolder">12</span><span
                                                class="text-black fs-1 ms-1 fw-bolder">USD</span></h1>
                                        <h5 class="mb-4 text-900"></h5>
                                        <button class="btn btn-lg mb-6 w-100 btn-primary">Buy</button>
                                    </div>
                                </div>
                                <ul class="fa-ul pricing-list">
                                    <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                class="fas fa-check text-primary"></span></span><span class="text-800"
                                            style="--phoenix-text-opacity:1;">Timeline</span>
                                    </li>
                                    <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                class="fas fa-check text-primary"></span></span><span class="text-800"
                                            style="--phoenix-text-opacity:1;">Advanced Search</span>
                                    </li>
                                    <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                class="fas fa-check text-primary"></span></span><span class="text-800"
                                            style="--phoenix-text-opacity:1;">Custom fields</span><span
                                            class="badge badge-phoenix badge-phoenix-warning ms-2 fs--2">New</span>
                                    </li>
                                    <li class="mb-4 d-flex align-items-center"><span class="text-800"
                                            style="--phoenix-text-opacity:.5;">Task dependencies</span>
                                    </li>
                                    <li class="mb-4 d-flex align-items-center"><span class="text-800"
                                            style="--phoenix-text-opacity:.5;">Private teams &amp; projects</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card h-100 rounded-start rounded-xl-start-0 mt-5 mt-md-0">
                            <div class="card-body px-6">
                                <div class="px-5">
                                    <div class="text-center pt-5"><img src="assets/img/icons/illustrations/edit.png"
                                            width="48" height="48" alt="" />
                                        <h3 class="fw-semi-bold my-4">Business</h3>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="fw-semi-bold text-primary">$<span class="fw-bolder">23</span><span
                                                class="text-black fs-1 ms-1 fw-bolder">USD</span></h1>
                                        <h5 class="mb-4 text-900"></h5>
                                        <button class="btn btn-lg mb-6 w-100 btn-outline-primary">Buy</button>
                                    </div>
                                </div>
                                <ul class="fa-ul pricing-list">
                                    <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                class="fas fa-check text-primary"></span></span><span class="text-800"
                                            style="--phoenix-text-opacity:1;">Timeline</span>
                                    </li>
                                    <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                class="fas fa-check text-primary"></span></span><span class="text-800"
                                            style="--phoenix-text-opacity:1;">Advanced Search</span>
                                    </li>
                                    <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                class="fas fa-check text-primary"></span></span><span class="text-800"
                                            style="--phoenix-text-opacity:1;">Custom fields</span><span
                                            class="badge badge-phoenix badge-phoenix-warning ms-2 fs--2">New</span>
                                    </li>
                                    <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                class="fas fa-star text-primary"></span></span><span class="text-800"
                                            style="--phoenix-text-opacity:1;">Task dependencies</span>
                                    </li>
                                    <li class="mb-4 d-flex align-items-center"><span class="text-800"
                                            style="--phoenix-text-opacity:.5;">Private teams &amp; projects</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3 ps-xl-3">
                        <div class="row g-0 h-100 justify-content-center">
                            <div class="col-xl-12">
                                <div class="card h-100 mt-5 mt-md-0">
                                    <div class="card-body">
                                        <div class="px-5">
                                            <div class="text-center pt-5"><img
                                                    src="assets/img/icons/illustrations/shield.png" width="48"
                                                    height="48" alt="" />
                                                <h3 class="fw-semi-bold my-4">Enterprise</h3>
                                            </div>
                                            <div class="text-center">
                                                <h1 class="fw-semi-bold text-primary">$<span
                                                        class="fw-bolder">40</span><span
                                                        class="text-black fs-1 ms-1 fw-bolder">USD</span></h1>
                                                <h5 class="mb-4 text-900"></h5>
                                                <button class="btn btn-lg mb-6 w-100 btn-outline-primary">Buy</button>
                                            </div>
                                        </div>
                                        <ul class="fa-ul pricing-list">
                                            <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                        class="fas fa-check text-primary"></span></span><span
                                                    class="text-800" style="--phoenix-text-opacity:1;">Timeline</span>
                                            </li>
                                            <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                        class="fas fa-check text-primary"></span></span><span
                                                    class="text-800" style="--phoenix-text-opacity:1;">Advanced
                                                    Search</span>
                                            </li>
                                            <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                        class="fas fa-check text-primary"></span></span><span
                                                    class="text-800" style="--phoenix-text-opacity:1;">Custom
                                                    fields</span><span
                                                    class="badge badge-phoenix badge-phoenix-warning ms-2 fs--2">New</span>
                                            </li>
                                            <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                        class="fas fa-star text-primary"></span></span><span
                                                    class="text-800" style="--phoenix-text-opacity:1;">Task
                                                    dependencies</span>
                                            </li>
                                            <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                        class="fas fa-star text-primary"></span></span><span
                                                    class="text-800" style="--phoenix-text-opacity:1;">Private teams
                                                    &amp; projects</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-8">
                        <p>For Enterprise Solution with Managed SMTP, Custom API setup, Dedicated Support, and more - <a
                                href="#!"> Contact us</a></p>
                    </div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-white" id="blog">

            <div class="container-small">
                <div class="row">
                    <div class="col-12 mb-4 text-center text-sm-start">
                        <h4 class="text-primary fw-bolder mb-3">Blog</h4>
                        <h2>Latest articles</h2>
                    </div>
                    <div class="col-lg-6 text-center text-sm-start">
                        <p>See the latest articles we published with this dashboard. Your customers will be happy to
                            find all the latest posts in one place. This menu efficiently shows all related topics from
                            search filters and provides the customers with what</p>
                    </div>
                    <div class="col-lg-6 text-center text-sm-start">
                        <p>they need. Also you can just educate your customers about everything they need to know and
                            follow to avail a service with you. This menu is the one to show them that.</p>
                    </div>
                </div>
                <div class="row h-100 g-3 justify-content-center">
                    <div class="col-sm-6 col-lg-3 mb-3 mb-md-0">
                        <div class="card text-white h-100"><img class="rounded-top h-100 fit-cover"
                                src="assets/img/blog/blog-1.png" alt="..." />
                            <div class="card-body rounded-top">
                                <div class="d-flex align-items-cente mb-4">
                                    <div class="d-flex align-items-center me-2"><a class="btn-link text-decoration-none"
                                            href="#!"><span class="fa-solid fa-eye text-500"></span><span
                                                class="text-900 fs--2 ms-1 lh-1">2563</span></a></div>
                                    <div class="d-flex align-items-center me-2"><a class="btn-link text-decoration-none"
                                            href="#!"><span class="fa-solid fa-heart text-500"></span><span
                                                class="text-900 ms-1 fs--2 lh-1">125</span></a></div>
                                    <div class="d-flex align-items-center me-2"><a class="btn-link text-decoration-none"
                                            href="#!"><span class="fa-solid fa-comment text-500"></span><span
                                                class="text-900 ms-1 fs--2 lh-1">125</span></a></div>
                                </div><span class="badge badge-phoenix badge-phoenix-primary mb-2">SEO</span>
                                <h4 class="fw-bold mb-3 lh-sm line-clamp-2">Top 10 ways to Ace SEO for your business
                                </h4><a class="btn-link px-0 d-flex align-items-center fs--1 fw-bold" href="#!"
                                    role="button">Read more<span class="fa-solid fa-angle-right ms-2"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-3 mb-md-0">
                        <div class="card text-white h-100"><img class="rounded-top h-100 fit-cover"
                                src="assets/img/blog/blog-2.png" alt="..." />
                            <div class="card-body rounded-top">
                                <div class="d-flex align-items-cente mb-4">
                                    <div class="d-flex align-items-center me-2"><a class="btn-link text-decoration-none"
                                            href="#!"><span class="fa-solid fa-eye text-500"></span><span
                                                class="text-900 fs--2 ms-1 lh-1">1256</span></a></div>
                                    <div class="d-flex align-items-center me-2"><a class="btn-link text-decoration-none"
                                            href="#!"><span class="fa-solid fa-heart text-500"></span><span
                                                class="text-900 ms-1 fs--2 lh-1">325</span></a></div>
                                    <div class="d-flex align-items-center me-2"><a class="btn-link text-decoration-none"
                                            href="#!"><span class="fa-solid fa-comment text-500"></span><span
                                                class="text-900 ms-1 fs--2 lh-1">32</span></a></div>
                                </div><span class="badge badge-phoenix badge-phoenix-primary mb-2">Marketing</span>
                                <h4 class="fw-bold mb-3 lh-sm line-clamp-2">Top 12 Marketing strategies you can take
                                </h4><a class="btn-link px-0 d-flex align-items-center fs--1 fw-bold" href="#!"
                                    role="button">Read more<span class="fa-solid fa-angle-right ms-2"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-3 mb-md-0">
                        <div class="card text-white h-100"><img class="rounded-top h-100 fit-cover"
                                src="assets/img/blog/blog-3.png" alt="..." />
                            <div class="card-body rounded-top">
                                <div class="d-flex align-items-cente mb-4">
                                    <div class="d-flex align-items-center me-2"><a class="btn-link text-decoration-none"
                                            href="#!"><span class="fa-solid fa-eye text-500"></span><span
                                                class="text-900 fs--2 ms-1 lh-1">142</span></a></div>
                                    <div class="d-flex align-items-center me-2"><a class="btn-link text-decoration-none"
                                            href="#!"><span class="fa-solid fa-heart text-500"></span><span
                                                class="text-900 ms-1 fs--2 lh-1">123</span></a></div>
                                    <div class="d-flex align-items-center me-2"><a class="btn-link text-decoration-none"
                                            href="#!"><span class="fa-solid fa-comment text-500"></span><span
                                                class="text-900 ms-1 fs--2 lh-1">22</span></a></div>
                                </div><span class="badge badge-phoenix badge-phoenix-primary mb-2">Marketing</span>
                                <h4 class="fw-bold mb-3 lh-sm line-clamp-2">The top 7 methods to improve as a marketer
                                </h4><a class="btn-link px-0 d-flex align-items-center fs--1 fw-bold" href="#!"
                                    role="button">Read more<span class="fa-solid fa-angle-right ms-2"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-3 mb-md-0">
                        <div class="card text-white h-100"><img class="rounded-top h-100 fit-cover"
                                src="assets/img/blog/blog-4.png" alt="..." />
                            <div class="card-body rounded-top">
                                <div class="d-flex align-items-cente mb-4">
                                    <div class="d-flex align-items-center me-2"><a class="btn-link text-decoration-none"
                                            href="#!"><span class="fa-solid fa-eye text-500"></span><span
                                                class="text-900 fs--2 ms-1 lh-1">2563</span></a></div>
                                    <div class="d-flex align-items-center me-2"><a class="btn-link text-decoration-none"
                                            href="#!"><span class="fa-solid fa-heart text-500"></span><span
                                                class="text-900 ms-1 fs--2 lh-1">325</span></a></div>
                                    <div class="d-flex align-items-center me-2"><a class="btn-link text-decoration-none"
                                            href="#!"><span class="fa-solid fa-comment text-500"></span><span
                                                class="text-900 ms-1 fs--2 lh-1">112</span></a></div>
                                </div><span class="badge badge-phoenix badge-phoenix-primary mb-2">Tech</span>
                                <h4 class="fw-bold mb-3 lh-sm line-clamp-2">Best places for a tech job in U.S</h4><a
                                    class="btn-link px-0 d-flex align-items-center fs--1 fw-bold" href="#!"
                                    role="button">Read more<span class="fa-solid fa-angle-right ms-2"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-6"><a class="btn btn-outline-primary" href="#!">View All<span
                            class="fa-solid fa-angle-right ms-2"></span></a></div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-white">

            <div class="container-small">
                <div class="row mb-3 text-center text-sm-start">
                    <div class="col-12 mb-4">
                        <h4 class="text-primary fw-bolder mb-3">Address</h4>
                        <h2>If you need to find us:</h2>
                    </div>
                    <div class="col-md-6">
                        <p>Do not lose your potential customers to others. Tell them exactly where you are with
                            Geolocation enabled Phoenix admin dashboard, No need to take the burden of communicating
                            directly.</p>
                    </div>
                    <div class="col-md-6">
                        <p>You can easily tell your customers where to find you with precise location map. Getting
                            closer was never easier!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-15">
                        <div class="googlemap" data-googlemap="data-googlemap" data-gmap="data-gmap"
                            data-latlng="40.7228022,-74.0020158" data-scrollwheel="false" data-zoom="15"
                            style="height: 381px; border-radius:1.5rem;">
                            <div class="marker-content py-3">
                                <h5>Google map</h5>
                                <p>A nice template for your site.<br />Customize it as you want.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-md-4 g-lg-5">
                    <div class="col-md-6 mb-5 mb-md-0">
                        <h3 class="mb-3">Stay connected</h3>
                        <p class="mb-5">Stay connected with Phoenix's Help Center; Phoenix is available for your
                            necessities at all times.</p>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center icon-wrapper shadow-info"><span
                                    class="uil uil-phone text-primary light fs-4 z-index-1 ms-2"></span>
                                <div class="flex-1 ms-3"><a class="link-900" href="tel:+871406-7509">(871) 406-7509</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center icon-wrapper shadow-info"><span
                                    class="uil uil-envelope text-primary light fs-4 z-index-1 ms-2"></span>
                                <div class="flex-1 ms-3"><a class="fw-semi-bold text-900"
                                        href="mailto:phoenix@email.com">phoenix@email.com</a></div>
                            </div>
                            <div class="d-flex align-items-center icon-wrapper shadow-info mb-6"><span
                                    class="uil uil-map-marker text-primary light fs-4 z-index-1 ms-2"></span>
                                <div class="flex-1 ms-3"><a class="fw-semi-bold text-900" href="#!">39163 Amir Drive
                                        Suite 802</a></div>
                            </div>
                            <div class="d-flex"><a href="#!"><span
                                        class="fa-brands fa-facebook fs-2 text-primary me-3"></span></a><a
                                    href="#!"><span class="fa-brands fa-twitter fs-2 text-primary me-3"></span></a><a
                                    href="#!"><span class="fa-brands fa-linkedin-in fs-2 text-primary"></span></a></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="mb-3">Drop us a line</h3>
                        <p class="mb-7">If you have any query or suggestion , we are open to learn from you, Lets talk,
                            reach us anytime.</p>
                        <form class="row g-4">
                            <div class="col-12">
                                <input class="form-control bg-white" type="text" name="name" placeholder="Name"
                                    required="required" />
                            </div>
                            <div class="col-12">
                                <input class="form-control bg-white" type="email" name="email" placeholder="Email"
                                    required="required" />
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-white" rows="6" name="message" placeholder="Message"
                                    required="required"></textarea>
                            </div>
                            <div class="col-12 d-grid">
                                <button class="btn btn-outline-primary" type="submit">Submit</button>
                            </div>
                            <div class="feedback"></div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <section id="team">
            <div class="bg-holder z-index-2"
                style="background-image:url(assets/img/bg/bg-left-17.png);background-size:auto;background-position:left center;">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder z-index-2"
                style="background-image:url(assets/img/bg/bg-right-17.png);background-size:auto;background-position:right center;">
            </div>
            <!--/.bg-holder-->

            <div class="position-absolute top-0 end-0 start-0">
                <svg class="w-100 text-white" preserveAspectRatio="none" viewBox="0 0 1920 368" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M1920 0.44L0 367.74V0H1920V0.44Z" fill="currentColor"></path>
                </svg>
            </div>
            <div class="position-absolute bottom-0 end-0 start-0">
                <svg class="text-white w-100" viewBox="0 0 1920 368" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 368L1920 0.730011L1920 368L0 368Z" fill="currentColor"></path>
                </svg>
            </div>
            <div class="container-small position-relative py-1" style="z-index:10">
                <div class="row">
                    <div class="col-12 mb-4 text-center text-sm-start">
                        <h4 class="text-primary fw-bolder mb-3">Team</h4>
                        <h2>Our small team behind our success</h2>
                    </div>
                    <div class="col-md-6 text-center text-sm-start">
                        <p>We have a small but strong development team to follow up on the development process. Reach
                            out to us for further information.</p>
                    </div>
                    <div class="col-md-6 text-center text-sm-start">
                        <p>The team is ready to answer all your questions within minutes. The efficient team is always
                            at your beck and call.</p>
                    </div>
                </div>
                <div class="row align-items-center ps-lg-11 pe-lg-9">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="text-center mt-5 position-relative">
                            <div class="team-avatar-container d-inline-block position-relative">
                                <div class="bg-holder"
                                    style="background-image:url(assets/img/bg/bg-21.png);background-size:contain;">
                                </div>
                                <!--/.bg-holder-->
                                <img class="img-fluid rounded mb-3 position-relative" src="assets/img/team/62.png"
                                    alt="..." />
                            </div>
                            <h4>John Smith</h4>
                            <h6 class="mb-3 fw-semi-bold">CEO, Global Cheat</h6><a href="#!"><span
                                    class="fa-brands fa-facebook text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-twitter text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-linkedin-in text-primary"></span></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="text-center mt-5 position-relative">
                            <div class="team-avatar-container d-inline-block position-relative">
                                <div class="bg-holder"
                                    style="background-image:url(assets/img/bg/bg-21.png);background-size:contain;">
                                </div>
                                <!--/.bg-holder-->
                                <img class="img-fluid rounded mb-3 position-relative" src="assets/img/team/63.png"
                                    alt="..." />
                            </div>
                            <h4>Marc Chiasson</h4>
                            <h6 class="mb-3 fw-semi-bold">Vice President</h6><a href="#!"><span
                                    class="fa-brands fa-facebook text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-twitter text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-linkedin-in text-primary"></span></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="text-center mt-5 position-relative">
                            <div class="team-avatar-container d-inline-block position-relative">
                                <div class="bg-holder"
                                    style="background-image:url(assets/img/bg/bg-21.png);background-size:contain;">
                                </div>
                                <!--/.bg-holder-->
                                <img class="img-fluid rounded mb-3 position-relative" src="assets/img/team/64.png"
                                    alt="..." />
                            </div>
                            <h4>Lilah Lola</h4>
                            <h6 class="mb-3 fw-semi-bold">Marketing Manager</h6><a href="#!"><span
                                    class="fa-brands fa-facebook text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-twitter text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-linkedin-in text-primary"></span></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="text-center mt-5 position-relative">
                            <div class="team-avatar-container d-inline-block position-relative">
                                <div class="bg-holder"
                                    style="background-image:url(assets/img/bg/bg-21.png);background-size:contain;">
                                </div>
                                <!--/.bg-holder-->
                                <img class="img-fluid rounded mb-3 position-relative" src="assets/img/team/65.png"
                                    alt="..." />
                            </div>
                            <h4>Thomas Doe</h4>
                            <h6 class="mb-3 fw-semi-bold">UX Designer</h6><a href="#!"><span
                                    class="fa-brands fa-facebook text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-twitter text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-linkedin-in text-primary"></span></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="text-center mt-5 position-relative">
                            <div class="team-avatar-container d-inline-block position-relative">
                                <div class="bg-holder"
                                    style="background-image:url(assets/img/bg/bg-21.png);background-size:contain;">
                                </div>
                                <!--/.bg-holder-->
                                <img class="img-fluid rounded mb-3 position-relative" src="assets/img/team/66.png"
                                    alt="..." />
                            </div>
                            <h4>Alan Casey</h4>
                            <h6 class="mb-3 fw-semi-bold">Front End Developer</h6><a href="#!"><span
                                    class="fa-brands fa-facebook text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-twitter text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-linkedin-in text-primary"></span></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="text-center mt-5 position-relative">
                            <div class="team-avatar-container d-inline-block position-relative">
                                <div class="bg-holder"
                                    style="background-image:url(assets/img/bg/bg-21.png);background-size:contain;">
                                </div>
                                <!--/.bg-holder-->
                                <img class="img-fluid rounded mb-3 position-relative" src="assets/img/team/67.png"
                                    alt="..." />
                            </div>
                            <h4>Narokin Hijita</h4>
                            <h6 class="mb-3 fw-semi-bold">CEO, Global Cheat</h6><a href="#!"><span
                                    class="fa-brands fa-facebook text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-twitter text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-linkedin-in text-primary"></span></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="text-center mt-5 position-relative">
                            <div class="team-avatar-container d-inline-block position-relative">
                                <div class="bg-holder"
                                    style="background-image:url(assets/img/bg/bg-21.png);background-size:contain;">
                                </div>
                                <!--/.bg-holder-->
                                <img class="img-fluid rounded mb-3 position-relative" src="assets/img/team/68.png"
                                    alt="..." />
                            </div>
                            <h4>Narokin Hijita</h4>
                            <h6 class="mb-3 fw-semi-bold">CEO, Global Cheat</h6><a href="#!"><span
                                    class="fa-brands fa-facebook text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-twitter text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-linkedin-in text-primary"></span></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="text-center mt-5 position-relative">
                            <div class="team-avatar-container d-inline-block position-relative">
                                <div class="bg-holder"
                                    style="background-image:url(assets/img/bg/bg-21.png);background-size:contain;">
                                </div>
                                <!--/.bg-holder-->
                                <img class="img-fluid rounded mb-3 position-relative" src="assets/img/team/69.png"
                                    alt="..." />
                            </div>
                            <h4>Narokin Hijita</h4>
                            <h6 class="mb-3 fw-semi-bold">CEO, Global Cheat</h6><a href="#!"><span
                                    class="fa-brands fa-facebook text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-twitter text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-linkedin-in text-primary"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-white pb-0">

            <div class="container-small">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="card py-md-9 px-md-13 border-0 z-index-1 shadow-lg cta-card">
                            <div class="bg-holder"
                                style="background-image:url(assets/img/bg/bg-18.png);background-position:right;background-size:auto;">
                            </div>
                            <!--/.bg-holder-->

                            <div class="card-body position-relative"><img class="img-fluid mb-5 d-dark-none"
                                    src="assets/img/spot-illustrations/27.png" width="210" alt="..." /><img
                                    class="img-fluid mb-5 d-light-none" src="assets/img/spot-illustrations/dark_27.png"
                                    width="210" alt="..." />
                                <p class="fw-bold">2008 Premium Icons <span class="text-primary fs-2">.</span> Included
                                    FREE with it</p>
                                <h1 class="fs-2 fs-sm-4 fs-lg-6 fw-bolder lh-sm mb-3">Join<span
                                        class="gradient-text-primary mx-2">Phoenix</span><span>Today</span></h1>
                                <form class="d-flex justify-content-center mb-3 px-xxl-12">
                                    <div class="d-grid d-sm-block"></div>
                                    <input class="form-control me-3" id="ctaEmail1" type="email" placeholder="Email"
                                        aria-describedby="ctaEmail1" />
                                    <button class="btn btn-primary" type="submit">Subscribe</button>
                                </form>
                                <p>Best support in the world, Only Phoenix can ensure </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <div class="position-relative">
            <div class="bg-holder footer-bg"
                style="background-image:url(assets/img/bg/bg-19.png);background-size:auto;">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder"
                style="background-image:url(assets/img/bg/bg-right-20.png);background-position:right;background-size:auto;">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder"
                style="background-image:url(assets/img/bg/bg-left-20.png);background-position:left;background-size:auto;">
            </div>
            <!--/.bg-holder-->

            <div class="position-relative">
                <svg class="w-100 text-white" preserveAspectRatio="none" viewBox="0 0 1920 368" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M1920 0.44L0 367.74V0H1920V0.44Z" fill="currentColor"></path>
                </svg>


                <!-- ============================================-->
                <!-- <section> begin ============================-->
                <section style="padding-top:250px;">

                    <div class="container-small">
                        <div class="row position-relative">
                            <div class="col-12 col-sm-12 col-lg-5 mb-4 order-0 order-sm-0"><a href="#"><img class="mb-3"
                                        src="assets/img/icons/logo-white.png" height="48" alt="" /></a>
                                <h3 class="text-white light">phoenix</h3>
                                <p class="text-white opacity-50 light">All over the world. Alice in <br />wonderland and
                                    other places.</p>
                            </div>
                            <div class="col-lg-7">
                                <div class="row justify-content-between">
                                    <div class="col-6 col-sm-4 col-lg-3 mb-3 order-2 order-sm-1">
                                        <div class="border-dashed border-start border-primary-300 ps-3"
                                            style="--phoenix-border-opacity: .2;">
                                            <h5 class="fw-bolder mb-2 text-light light">Help</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">About</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Contact</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Developers</a></li>
                                            </ul>
                                        </div>
                                        <div class="border-dashed border-start border-primary-300 ps-3"
                                            style="--phoenix-border-opacity: .2;">
                                            <h5 class="lh-lg fw-bolder mb-2 text-light light">Follow</h5>
                                            <ul class="list-unstyled mb-2">
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Facebook</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Twitter</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Linkedin</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 mb-3 order-3 order-sm-2">
                                        <div class="border-dashed border-start border-primary-300 ps-3"
                                            style="--phoenix-border-opacity: .2;">
                                            <h5 class="lh-lg fw-bold text-light mb-2 light">Support</h5>
                                            <ul class="list-unstyled mb-md-2">
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Privacy</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Community</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Contact</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Blog</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">FAQ</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Project</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Team</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 mb-3 order-3 order-sm-2">
                                        <div class="border-dashed border-start border-primary-300 ps-3"
                                            style="--phoenix-border-opacity: .2;">
                                            <h5 class="lh-lg fw-bold text-light mb-2 light"> Info</h5>
                                            <ul class="list-unstyled mb-md-2">
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Personal</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">NFT System</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Agency</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Contact</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">About</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of .container-->

                </section>
                <!-- <section> close ============================-->
                <!-- ============================================-->


            </div>
        </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1"
        aria-labelledby="settings-offcanvas">
        <div class="offcanvas-header align-items-start border-bottom flex-column">
            <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
                <div>
                    <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-0"></span>Theme Customizer</h5>
                    <p class="mb-0 fs--1">Explore different styles according to your preferences</p>
                </div>
                <button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span
                        class="fas fa-times fs-0"> </span></button>
            </div>
            <button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span
                    class="fas fa-arrows-rotate me-2 fs--2"></span>Reset to default</button>
        </div>
        <div class="offcanvas-body scrollbar px-card" id="themeController">
            <div class="setting-panel-item mt-0">
                <h5 class="setting-panel-item-title">Color Scheme</h5>
                <div class="row gx-2">
                    <div class="col-6">
                        <input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light"
                            data-theme-control="phoenixTheme" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                    src="assets/img/generic/default-light.png" alt="" /></span><span
                                class="label-text">Light</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark"
                            data-theme-control="phoenixTheme" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                    src="assets/img/generic/default-dark.png" alt="" /></span><span class="label-text">
                                Dark</span></label>
                    </div>
                </div>
            </div>
            <div class="border rounded-3 p-4 setting-panel-item bg-white">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="setting-panel-item-title mb-1">RTL </h5>
                    <div class="form-check form-switch mb-0">
                        <input class="form-check-input" type="checkbox" data-theme-control="phoenixIsRTL" />
                    </div>
                </div>
                <p class="mb-0 text-700">Change text direction</p>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Navigation Type</h5>
                <div class="row gx-2">
                    <div class="col-6">
                        <input class="btn-check" id="navbarPositionVertical" name="navigation-type" type="radio"
                            value="vertical" data-theme-control="phoenixNavbarPosition"
                            data-page-url="documentation/layouts/vertical-navbar.html" disabled="disabled" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionVertical"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                                    src="assets/img/generic/default-light.png" alt="" /><img
                                    class="img-fluid img-prototype d-light-none"
                                    src="assets/img/generic/default-dark.png" alt="" /></span><span
                                class="label-text">Vertical</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbarPositionHorizontal" name="navigation-type" type="radio"
                            value="horizontal" data-theme-control="phoenixNavbarPosition"
                            data-page-url="documentation/layouts/horizontal-navbar.html" disabled="disabled" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionHorizontal"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                                    src="assets/img/generic/top-default.png" alt="" /><img
                                    class="img-fluid img-prototype d-light-none"
                                    src="assets/img/generic/top-default-dark.png" alt="" /></span><span
                                class="label-text"> Horizontal</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbarPositionCombo" name="navigation-type" type="radio"
                            value="combo" data-theme-control="phoenixNavbarPosition" disabled="disabled"
                            data-page-url="documentation/layouts/combo-navbar.html" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionCombo"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                                    src="assets/img/generic/nav-combo-light.png" alt="" /><img
                                    class="img-fluid img-prototype d-light-none"
                                    src="assets/img/generic/nav-combo-dark.png" alt="" /></span><span
                                class="label-text"> Combo</span></label>
                    </div>
                </div>
                <p class="text-warning-500 font-medium"> <span
                        class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update navigation
                    type in this page</p>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
                <div class="row gx-2">
                    <div class="col-6">
                        <input class="btn-check" id="navbar-style-default" type="radio" name="config.name"
                            value="default" data-theme-control="phoenixNavbarVerticalStyle" disabled="disabled" />
                        <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-default"> <img
                                class="img-fluid img-prototype d-dark-none" src="assets/img/generic/default-light.png"
                                alt="" /><img class="img-fluid img-prototype d-light-none"
                                src="assets/img/generic/default-dark.png" alt="" /><span class="label-text d-dark-none">
                                Default</span><span class="label-text d-light-none">Default</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbar-style-dark" type="radio" name="config.name" value="darker"
                            data-theme-control="phoenixNavbarVerticalStyle" disabled="disabled" />
                        <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-dark"> <img
                                class="img-fluid img-prototype d-dark-none" src="assets/img/generic/vertical-darker.png"
                                alt="" /><img class="img-fluid img-prototype d-light-none"
                                src="assets/img/generic/vertical-lighter.png" alt="" /><span
                                class="label-text d-dark-none"> Darker</span><span
                                class="label-text d-light-none">Lighter</span></label>
                    </div>
                </div>
                <p class="text-warning-500 font-medium"> <span
                        class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update vertical
                    navbar appearance type in this page</p>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
                <div class="row gx-2">
                    <div class="col-6">
                        <input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio"
                            value="default" data-theme-control="phoenixNavbarTopShape"
                            data-page-url="documentation/layouts/horizontal-navbar.html" disabled="disabled" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarShapeDefault"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                                    src="assets/img/generic/top-default.png" alt="" /><img
                                    class="img-fluid img-prototype d-light-none mb-0"
                                    src="assets/img/generic/top-default-dark.png" alt="" /></span><span
                                class="label-text">Default</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio" value="slim"
                            data-theme-control="phoenixNavbarTopShape"
                            data-page-url="documentation/layouts/vertical-navbar.html#horizontal-navbar-slim"
                            disabled="disabled" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarShapeSlim"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                                    src="assets/img/generic/top-slim.png" alt="" /><img
                                    class="img-fluid img-prototype d-light-none mb-0"
                                    src="assets/img/generic/top-slim-dark.png" alt="" /></span><span class="label-text">
                                Slim</span></label>
                    </div>
                </div>
                <p class="text-warning-500 font-medium"> <span
                        class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update vertical
                    navbar appearance type in this page</p>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
                <div class="row gx-2">
                    <div class="col-6">
                        <input class="btn-check" id="navbarTopDefault" name="navbar-top-style" type="radio"
                            value="default" data-theme-control="phoenixNavbarTopStyle" disabled="disabled" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarTopDefault"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                                    src="assets/img/generic/top-default.png" alt="" /><img
                                    class="img-fluid img-prototype d-light-none mb-0"
                                    src="assets/img/generic/top-style-darker.png" alt="" /></span><span
                                class="label-text">Default</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio"
                            value="darker" data-theme-control="phoenixNavbarTopStyle" disabled="disabled" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarTopDarker"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                                    src="assets/img/generic/navbar-top-style-light.png" alt="" /><img
                                    class="img-fluid img-prototype d-light-none mb-0"
                                    src="assets/img/generic/top-style-lighter.png" alt="" /></span><span
                                class="label-text d-dark-none">Darker</span><span
                                class="label-text d-light-none">Lighter</span></label>
                    </div>
                </div>
                <p class="text-warning-500 font-medium"> <span
                        class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update vertical
                    navbar appearance type in this page</p>
            </div><a class="bun btn-primary d-grid mb-3 text-white dark__text-100 mt-5 btn btn-primary"
                href="https://themes.getbootstrap.com/product/phoenix-admin-dashboard-webapp-template/"
                target="_blank">Purchase template</a>
        </div>
    </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
        <div class="card-body d-flex align-items-center px-2 py-1">
            <div class="position-relative rounded-start" style="height:34px;width:28px">
                <div class="settings-popover"><span class="ripple"><span
                            class="fa-spin position-absolute all-0 d-flex flex-center"><span
                                class="icon-spin position-absolute all-0 d-flex flex-center">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="#ffffff"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z"
                                        fill="#2A7BE4"></path>
                                </svg></span></span></span></div>
            </div><small class="text-uppercase text-700 fw-bold py-2 pe-2 ps-1 rounded-end">customize</small>
        </div>
    </a>


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="vendors/feather-icons/feather.min.js"></script>
    <script src="vendors/dayjs/dayjs.min.js"></script>
    <script src="assets/js/phoenix.js"></script>
    <script src="vendors/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="vendors/isotope-packery/packery-mode.pkgd.min.js"></script>
    <script src="vendors/bigpicture/BigPicture.js"></script>
    <script src="vendors/countup/countUp.umd.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARdVcREeBK44lIWnv5-iPijKqvlSAVwbw&callback=initMap"
        async></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>

</body>

</html>