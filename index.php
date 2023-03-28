<?php
include 'conexao/conexao.php';

session_start();
$nome_logado = !empty($_SESSION['email']) ? $_SESSION['email'] : '';


if(!isset($_SESSION["email"]) || !isset($_SESSION["email"]))
{
// Usuário não logado! Redireciona para a página de login
$logado = "deslogado";
$esconder_ = "d-none";
$cadastrar = "empresas/empresa__.php";
$cadastrar_texto = "Cadastre-se";
// exit;
} else
{
    // logado
    $logado = "logado";
    $esconder_entrar = "d-none";
    $cadastrar = "questionario/questionario2_.php";
    $cadastrar_texto = "Responder Questionario";
}

if(isset($_SESSION['email'])) {
    $logado = "logado";
} else {
    // a sessão não está ativa, redirecione o usuário para a página de login
   $logado = "deslogado";
}


// $logadao = isset($_SESSION['email']) ?  $_SESSION['email'] : "deslogado";


// echo $logado;

// echo $logado;


$sql_nome = "select * from empresas where email = '$nome_logado'";
$result_nome = mysqli_query($conn, $sql_nome);
// Verificar se a consulta retornou algum resultado
if (mysqli_num_rows($result_nome) > 0) {
    // Exibir os resultados
    while($row = mysqli_fetch_assoc($result_nome)) {

        $nome = $row["nome"] ?? 'Valor padrão';


    }};


    // echo $sql_nome;

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
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon.png">
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

<?php include 'navbar.php' ?>



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
                                    src="assets/img/bg/bg-28.jpg" alt="hero-header" /><img
                                    class="w-100 shadow-lg d-light-none rounded-2" src="assets/img/bg/bg-28.jpg"
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
                                        src="assets/img/bg/bg-28.jpg" alt="hero-header" /><img
                                        class="pt-7 pt-md-0 w-100 shadow-lg d-light-none rounded-2"
                                        src="assets/img/bg/bg-29.jpg" alt="hero-header" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 text-lg-start text-center pt-8 pb-6 order-0 position-relative">
                        <h1 class="fs-5 fs-lg-6 fs-md-7 fs-lg-6 fs-xl-7 fs fw-black mb-4">Você <span
                                class="text-primary me-3">D.E.F.I.N.E.</span><br />o recurso que sua empresa vai
                            acessar.
                        </h1>
                        <p class="mb-5">E a MATECH te apóia</p><a class="btn btn-lg btn-primary rounded-pill me-3"
                            href="<?php echo $cadastrar ?>" role="button"><?php echo $cadastrar_texto ?></a>
                        <!-- <a
                            class="btn btn-link me-2 fs-0 p-0 text-decoration-none" href="#!" role="button">Check
                            Demo<span class="fa-solid fa-angle-right ms-2 fs--1"></span></a> -->
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
                            <img class="w-100" src="assets/img/brand2/netflix-n.png" alt="" />
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end-md">
                            <img class="w-100" src="assets/img/brand2/blender.png" alt="" />
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end border-end-md">
                            <img class="w-100" src="assets/img/brand2/upwork.png" alt="" />
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end-lg-0">
                            <img class="w-100" src="assets/img/brand2/facebook-f.png" alt="" />
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end border-bottom border-bottom-md-0">
                            <img class="w-100" src="assets/img/brand2/pocket.png" alt="" />
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end-md border-bottom border-bottom-md-0">
                            <img class="w-100" src="assets/img/brand2/mail-bluster-1.png" alt="" />
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end">
                            <img class="w-100" src="assets/img/brand2/discord.png" alt="" />
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end-lg-0">
                            <img class="w-100" src="assets/img/brand2/google-g.png" alt="" />
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
                <!-- <svg class="w-100 text-white" preserveAspectRatio="none" viewBox="0 0 1920 368" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M1920 0.44L0 367.74V0H1920V0.44Z" fill="currentColor"></path>
                </svg> -->


                <!-- ============================================-->
                <!-- <section> begin ============================-->
                <section style="padding-top:50px;">

                   <?php include 'footer.php' ?>
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