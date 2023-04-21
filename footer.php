<?php
// $url_base = htmlspecialchars(dirname($_SERVER['REQUEST_URI']), ENT_QUOTES, 'UTF-8');

// $barra =  "/";

// $diminuir = 2;

// $url = $url_base.$barra;

// $caractere = "/";

// $stringParaRepetir = "../";

// $contagem = substr_count($url, $caractere) - $diminuir;


// $url = str_repeat($stringParaRepetir, $contagem);



$url_base = htmlspecialchars(dirname($_SERVER['REQUEST_URI']), ENT_QUOTES, 'UTF-8');

$barra =  "/";

$diminuir = 2;

$url = $url_base.$barra;

$caractere = "/";

$stringParaRepetir = "../";

$contagem = substr_count($url, $caractere) - $diminuir;


// $url = str_repeat($stringParaRepetir, $contagem);

if ($contagem > 0) {
    $url = str_repeat($stringParaRepetir, $contagem);
  } else {

    $url = "";
  }




?>

<div class="position-relative">
            <div class="bg-holder footer-bg"
                style="background-image:url(<?php echo $url ?>assets/img/bg/bg-19.png);background-size:auto;">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder"
                style="background-image:url(<?php echo $url ?>assets/img/bg/bg-right-20.png);background-position:right;background-size:auto;">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder"
                style="background-image:url(<?php echo $url ?>assets/img/bg/bg-left-20.png);background-position:left;background-size:auto;">
            </div>
            <!--/.bg-holder-->

            <div class="position-relative">
                <!-- <svg class="w-100 text-white" preserveAspectRatio="none" viewBox="0 0 1920 368" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M1920 0.44L0 367.74V0H1920V0.44Z" fill="currentColor"></path>
                </svg> -->


                <!-- ============================================-->
                <!-- <section> begin ============================-->
                <section style="padding-top:50px;">

                    <div class="container-small">
                        <div class="row position-relative">
                            <div class="col-4 col-sm-4 col-lg-5 mb-4 order-0 order-sm-0"><a href="#"><img class="mb-3"
                                        src="<?php echo $url ?>assets/img/icons/logo-white.png" height="48" alt="" /></a>
                                <h3 class="text-white light">define</h3>
                                <!-- <p class="text-white opacity-50 light">All over the world. Alice in <br />wonderland and
                                    other places.</p> -->
                                <p class="text-white opacity-50 light"><b>D</b>iagnostico
                                    <br /> <b>E</b>stratégico de
                                    <br /><b>F</b>omento à
                                    <br /><b>I</b>novação
                                    <br /><b>N</b>as
                                    <br /><b>E</b>mpresas

                            </div>
                            <div class="col-lg-7">
                                <div class="row justify-content-between">

                                    <div class="col-6 col-sm-4 col-lg-3 mb-3 order-3 order-sm-2">
                                    <div class="border-dashed border-start border-primary-300 ps-3"
                                            style="--phoenix-border-opacity: .2;">
                                            <h5 class="fw-bolder mb-2 text-light light">Ajuda</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Sobre</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Contato</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Developers</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 mb-3 order-3 order-sm-2">
                                    <div class="border-dashed border-start border-primary-300 ps-3"
                                            style="--phoenix-border-opacity: .2;">
                                            <h5 class="lh-lg fw-bolder mb-2 text-light light">Redes Sociais</h5>
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



            <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="<?php echo $url ?>vendors/popper/popper.min.js"></script>
    <script src="<?php echo $url ?>vendors/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo $url ?>vendors/anchorjs/anchor.min.js"></script>
    <script src="<?php echo $url ?>vendors/is/is.min.js"></script>
    <script src="<?php echo $url ?>vendors/fontawesome/all.min.js"></script>
    <script src="<?php echo $url ?>vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="<?php echo $url ?>vendors/list.js/list.min.js"></script>
    <script src="<?php echo $url ?>vendors/feather-icons/feather.min.js"></script>
    <script src="<?php echo $url ?>vendors/dayjs/dayjs.min.js"></script>
    <script src="<?php echo $url ?>assets/js/phoenix.js"></script>
    <script src="<?php echo $url ?>vendors/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo $url ?>vendors/isotope-packery/packery-mode.pkgd.min.js"></script>
    <script src="<?php echo $url ?>vendors/bigpicture/BigPicture.js"></script>
    <script src="<?php echo $url ?>vendors/countup/countUp.umd.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARdVcREeBK44lIWnv5-iPijKqvlSAVwbw&callback=initMap"
        async></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>


    <script src="<?php echo $url ?>vendors/popper/popper.min.js"></script>
    <script src="<?php echo $url ?>vendors/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo $url ?>vendors/anchorjs/anchor.min.js"></script>
    <script src="<?php echo $url ?>vendors/is/is.min.js"></script>
    <script src="<?php echo $url ?>vendors/fontawesome/all.min.js"></script>
    <script src="<?php echo $url ?>vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="<?php echo $url ?>vendors/list.js/list.min.js"></script>
    <script src="<?php echo $url ?>vendors/feather-icons/feather.min.js"></script>
    <script src="<?php echo $url ?>vendors/dayjs/dayjs.min.js"></script>
    <script src="<?php echo $url ?>assets/js/phoenix.js"></script>
    <script src="<?php echo $url ?>vendors/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo $url ?>vendors/isotope-packery/packery-mode.pkgd.min.js"></script>
    <script src="<?php echo $url ?>vendors/bigpicture/BigPicture.js"></script>
    <script src="<?php echo $url ?>vendors/countup/countUp.umd.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARdVcREeBK44lIWnv5-iPijKqvlSAVwbw&callback=initMap"
        async></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>

    <script src="<?php echo $url ?>vendors/choices/choices.min.js"></script>
