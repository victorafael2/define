<?php
include '../conexao/conexao.php';

session_start();
// echo $_SESSION['email'];
$nome_logado = $_SESSION['email'];

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


// echo $logado;

?>

<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>D.E.F.I.N.E</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicons/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../vendors/simplebar/simplebar.min.js"></script>
    <script src="../assets/js/config.js"></script>




    <style>
    .radio {
        text-align: center;
    }
    </style>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <link href="../vendors/choices/choices.min.css" rel="stylesheet" />
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
            <div class="container-small px-0 px-sm-3"><a class="navbar-brand flex-1 flex-lg-grow-0" href="../index.php">
                    <div class="d-flex align-items-center"><img src="../assets/img/icons/logo.png" alt="define"
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
                            class="btn btn-link text-900 order-1 order-lg-0 ps-3 me-2 <?php echo  $esconder_entrar; ?>"
                            href="pages/authentication/simple/sign-in.php">Entrar</a>
                        <!-- <a
                            class="btn btn-phoenix-primary order-0"
                            href="pages/authentication/simple/sign-up.html"><span class="fw-bold">Cadastrar</span></a> -->

                        <form class="<?php echo $esconder_ ?>" method="post" action="../encerrar_sessao.php">
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
        <!-- <section class="bg-white pb-8" id="home">
        <div class="container-small hero-header-container">
          <div class="row align-items-center">
            <div class="col-12 col-lg-auto order-0 order-md-1 text-end order-1">
              <div class="position-relative p-5 p-md-7 d-lg-none">
                <div class="bg-holder" style="background-image:url(../assets/img/bg/bg-23.png);background-size:contain;">
                </div>
                

                <div class="position-relative"><img class="w-100 shadow-lg d-dark-none rounded-2" src="assets/img/bg/bg-31.png" alt="hero-header" /><img class="w-100 shadow-lg d-light-none rounded-2" src="../assets/img/bg/bg-30.png" alt="hero-header" /></div>
              </div>
              <div class="hero-image-container position-absolute top-0 bottom-0 end-0 d-none d-lg-block">
                <div class="position-relative h-100 w-100">
                  <div class="position-absolute h-100 top-0 d-flex align-items-center end-0 hero-image-container-bg"><img class="pt-7 pt-md-0 w-100" src="../assets/img/bg/bg-1-2.png" alt="hero-header" /></div>
                  <div class="position-absolute h-100 top-0 d-flex align-items-center end-0"><img class="pt-7 pt-md-0 w-100 shadow-lg d-dark-none rounded-2" src="../assets/img/bg/bg-28.png" alt="hero-header" /><img class="pt-7 pt-md-0 w-100 shadow-lg d-light-none rounded-2" src="assets/img/bg/bg-29.png" alt="hero-header" /></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 text-lg-start text-center pt-8 pb-6 order-0 position-relative">
              <h1 class="fs-5 fs-lg-6 fs-md-7 fs-lg-6 fs-xl-7 fs fw-black mb-4"><span class="text-primary me-3">Elegance</span>for<br />your web app</h1>
              <p class="mb-5">Standard, modern and Elegant solution for your next web app so you don’t have to look further. Sign up or check the demo below.</p><a class="btn btn-lg btn-primary rounded-pill me-3" href="empresas/empresa.php" role="button">Cadastrar</a><a class="btn btn-link me-2 fs-0 p-0 text-decoration-none" href="#!" role="button">Check Demo<span class="fa-solid fa-angle-right ms-2 fs--1"></span></a>
            </div>
          </div>
        </div>
      </section> -->
        <!-- ,,, -->


        <div class="container py-5">
            <div class="row">
                <div class="card h-100">
                    <div class="card-body">
                        <form id="form">
                        <!-- method="POST" action="processar_questionario2.php" -->


                            <div class="form-group">
                                <label for="faturamento">
                                    <h4 class="text-900 mb-0" data-anchor="data-anchor" id="custom-styles-example">A
                                        MINHA EMPRESA É:</a></h4>
                                </label>
                                <div>

                                    <select class="form-control" id="faturamento" name="faturamento"
                                        data-choices="data-choices"
                                        data-options='{"removeItemButton":false,"placeholder":true}' require>
                                        <option value="">Selecione um tipo de empresa</option>
                                        <option value="early_stage">Startup early stage (sem faturamento)</option>
                                        <option value="startup">Startup (R$ 0 a R$ 4,8milhões)</option>
                                        <option value="microempresa">Microempresa (até R$ 360mil)</option>
                                        <option value="pequeno_porte">Empresa de pequeno porte (R$ 360.000,01mil a R$
                                            4,8milhões)</option>
                                        <option value="pequena_empresa">Pequena Empresa (De R$ 4.800.000,01 a R$
                                            16.000.000,00)</option>
                                        <option value="media_empresa">Media Empresa (De R$ 16.000.000,01 a R$
                                            90.000.000,00)
                                        </option>
                                        <option value="media_grande">Media Grande (De R$ 90.000.000,01 a R$
                                            300.000.000,00)
                                        </option>
                                        <option value="grande_empresa">Grande Empresa (Acima de R$ 300.000.000,01)
                                        </option>
                                    </select>
                                </div>


                            </div>

                            <br>


                            <div class="form-group">
                                <label for="regime_tributario">
                                    <h4 class="text-900 mb-0" data-anchor="data-anchor" id="custom-styles-example">
                                        EM RELAÇÃO AO REGIME TRIBUTÁRIO, MINHA EMPRESA OPERA EM:</a></h4>
                                </label>
                                <select id="regime_tributario" name="regime_tributario" data-choices="data-choices"
                                    data-options='{"removeItemButton":false,"placeholder":true}' require>
                                    <option value="">Selecionar Regime Tributário</option>
                                    <option value="lucro_real">Lucro Real</option>
                                    <option value="lucro_presumido">Lucro Presumido</option>
                                    <option value="simples_nacional">Simples Nacional</option>
                                </select>
                            </div>

                            <br>

                            <div class="form-group">
                                <label for="tecnologia">
                                    <h4 class="text-900 mb-0" data-anchor="data-anchor" id="custom-styles-example">A
                                        TECNOLOGIA A SER DESENVOLVIDA É UMA INOVAÇÃO:</a></h4>
                                </label>
                                <div>
                                    <input type="radio" id="tecnologia" name="tecnologia" value="2">
                                    <label for="tecnologia">Para minha empresa, já existe no mercado</label>
                                </div>
                                <div>
                                    <input type="radio" id="tecnologia" name="tecnologia" value="4">
                                    <label for="tecnologia">Para meu Estado</label>
                                </div>
                                <div>
                                    <input type="radio" id="tecnologia" name="tecnologia" value="4">
                                    <label for="tecnologia">Para meu país</label>
                                </div>
                                <div>
                                    <input type="radio" id="tecnologia" name="tecnologia" value="5">
                                    <label for="tecnologia">Inovação mundial</label>
                                </div>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="potencial-tecnologico">
                                    <h4 class="text-900 mb-0" data-anchor="data-anchor" id="custom-styles-example">MEU
                                        PROJETO VISA DESENVOLVER:</a></h4>
                                </label>
                                <div>
                                    <input type="radio" id="potencial-tecnologico-1" name="potencial-tecnologico"
                                        value="5">
                                    <label for="potencial-tecnologico-1">Inovação tecnológica: produto, processo ou
                                        serviço</label>
                                </div>
                                <div>
                                    <input type="radio" id="potencial-tecnologico-2" name="potencial-tecnologico"
                                        value="3">
                                    <label for="potencial-tecnologico-2">Inovação em modelo de negócio</label>
                                </div>
                                <div>
                                    <input type="radio" id="potencial-tecnologico-3" name="potencial-tecnologico"
                                        value="2">
                                    <label for="potencial-tecnologico-3">Inovação de Método: Marketing e
                                        Organizacional</label>
                                </div>
                            </div>

                            <br>

                            <div class="form-group">
                                <label for="tipologia-inovacao">
                                    <h4 class="text-900 mb-0" data-anchor="data-anchor" id="custom-styles-example">MEU
                                        PROJETO APRESENTA UMA INOVAÇÃO:</a></h4>
                                </label>
                                <div>
                                    <input type="radio" id="tipologia-inovacao-1" name="tipologia-inovacao" value="4">
                                    <label for="tipologia-inovacao-1">Incremental: Melhorias em produto ou
                                        processos</label>
                                </div>
                                <div>
                                    <input type="radio" id="tipologia-inovacao-2" name="tipologia-inovacao" value="5">
                                    <label for="tipologia-inovacao-2">Disruptiva: Cria novo produto e processo, sem
                                        alterar
                                        a
                                        cadeia
                                        de fornecedores existente associada à empresa</label>
                                </div>
                                <div>
                                    <input type="radio" id="tipologia-inovacao-3" name="tipologia-inovacao" value="5">
                                    <label for="tipologia-inovacao-3">Radical: Cria novo produto e processo que redefine
                                        toda a
                                        cadeia de fornecedores bem como o mercado</label>
                                </div>

                            </div>

                            <br>

                            <div class="form-group">
                                <label for="risco-tecnologico">
                                    <h4 class="text-900 mb-0" data-anchor="data-anchor" id="custom-styles-example">MEU
                                        PROJETO ESTÁ NO TRL:</a></h4>
                                </label>
                                <br>
                                <img src="../assets/img/maturidade-tecnologicablog.png">
                                <br>
                                <select class="form-control" id="risco-tecnologico" name="risco-tecnologico"
                                    data-choices="data-choices"
                                    data-options='{"removeItemButton":false,"placeholder":true}'>
                                    <option value="">Escolher</option>
                                    <option value="3">TRL0</option>
                                    <option value="5">TRL1</option>
                                    <option value="5">TRL2</option>
                                    <option value="5">TRL3</option>
                                    <option value="5">TRL4</option>
                                    <option value="4">TRL5</option>
                                    <option value="3">TRL6</option>
                                    <option value="3">TRL7</option>
                                    <option value="2">TRL8</option>
                                    <option value="2">TRL9</option>
                                </select>
                            </div>

                            <br>

                            <div class="form-group">
                                <label for="impacto_tecnologico">
                                    <h4 class="text-900 mb-0" data-anchor="data-anchor" id="custom-styles-example">MEU
                                        PROJETO PODERÁ GERAR:</a></h4>
                                </label>
                                <div>
                                    <input type="radio" id="impacto_tecnologico-1" name="impacto_tecnologico" value="5">
                                    <label for="impacto_tecnologico-1">Patente</label>
                                </div>
                                <div>
                                    <input type="radio" id="impacto_tecnologico-2" name="impacto_tecnologico" value="5">
                                    <label for="impacto_tecnologico-2">Registro de Software</label>
                                </div>
                                <div>
                                    <input type="radio" id="impacto_tecnologico-3" name="impacto_tecnologico" value="4">
                                    <label for="impacto_tecnologico-3">Desenhos industriais</label>
                                </div>
                                <div>
                                    <input type="radio" id="impacto_tecnologico-4" name="impacto_tecnologico" value="2">
                                    <label for="impacto_tecnologico-4">Criações artísticas</label>
                                </div>
                                <div>
                                    <input type="radio" id="impacto_tecnologico-5" name="impacto_tecnologico" value="1">
                                    <label for="impacto_tecnologico-5">Nenhuma alternativa</label>
                                </div>
                            </div>

                            <br>

                            <div class="form-group">
                                <label for="infraestrutura-empresa">
                                    <h4 class="text-900 mb-0" data-anchor="data-anchor" id="custom-styles-example">MINHA
                                        EMPRESA POSSUI INFRA-ESTRUTURA PARA DESENVOLVER O PROJETO:</a></h4>
                                </label>
                                <div>
                                    <input type="radio" id="infraestrutura-empresa-1" name="infraestrutura-empresa"
                                        value="5">
                                    <label for="infraestrutura-empresa-1">Sim, o projeto será desenvolvido na
                                        empresa</label>
                                </div>
                                <div>
                                    <input type="radio" id="infraestrutura-empresa-2" name="infraestrutura-empresa"
                                        value="5">
                                    <label for="infraestrutura-empresa-2">Sim, porém apenas parte do projeto será
                                        desenvolvido
                                        na
                                        empresa</label>
                                </div>
                                <div>
                                    <input type="radio" id="infraestrutura-empresa-3" name="infraestrutura-empresa"
                                        value="4">
                                    <label for="infraestrutura-empresa-3">Não, o projeto será desenvolvido na ICT
                                        (universidade,
                                        instituto de pesquisa, laboratório público) parceira</label>
                                </div>
                                <div>
                                    <input type="radio" id="infraestrutura-empresa-4" name="infraestrutura-empresa"
                                        value="3">
                                    <label for="infraestrutura-empresa-4">Não, o projeto será desenvolvido na empresa
                                        contratada/parceira</label>
                                </div>

                            </div>

                            <br>

                            <div class="form-group">
                                <label for="parcerias">
                                    <h4 class="text-900 mb-0" data-anchor="data-anchor" id="custom-styles-example">MEU
                                        PROJETO SERÁ DESENVOLVIDO:</a></h4>
                                </label>
                                <div>
                                    <input type="checkbox" id="parcerias-1" name="parcerias[]" value="5">
                                    <label for="parcerias-1">Em parceria com universidade ou instituto de
                                        pesquisa</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="parcerias-2" name="parcerias[]" value="4">
                                    <label for="parcerias-2">Em parceria com Startup</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="parcerias-3" name="parcerias[]" value="4">
                                    <label for="parcerias-3">Em parceria com empresa</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="parcerias-4" name="parcerias[]" value="1">
                                    <label for="parcerias-4">Sem parceria</label>
                                </div>
                            </div>

                            <br>

                            <div class="form-group">
                                <label for="impactos-gerais">
                                    <h4 class="text-900 mb-0" data-anchor="data-anchor" id="custom-styles-example">A
                                        APLICAÇÃO DA MINHA SOLUÇÃO TRARÁ IMPACTO PARA SEGUINTES ÁREAS NOS GRAUS:</a>
                                    </h4>
                                </label>
                                <!-- <select class="form-control" id="impactos-gerais" name="impactos-gerais">
                                    <option value="0">NÃO SE APLICA</option>
                                    <option value="2">BAIXO</option>
                                    <option value="4">MODERADO</option>
                                    <option value="5">ALTO</option>
                                </select> -->




                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th class="text-center">NÃO SE APLICA</th>
                                            <th class="text-center">BAIXO</th>
                                            <th class="text-center">MODERADO</th>
                                            <th class="text-center">ALTO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">SOCIEDADE</td>
                                            <td><input class="text-center" type="radio" name="impactos-gerais1"
                                                    value="0"></td>
                                            <td><input class="text-center" type="radio" name="impactos-gerais1"
                                                    value="2"></td>
                                            <td><input class="text-center" type="radio" name="impactos-gerais1"
                                                    value="4"></td>
                                            <td><input class="text-center" type="radio" name="impactos-gerais1"
                                                    value="5"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">MEIO AMBIENTE</td>
                                            <td><input type="radio" name="impactos-gerais2" value="0"></td>
                                            <td><input type="radio" name="impactos-gerais2" value="2"></td>
                                            <td><input type="radio" name="impactos-gerais2" value="4"></td>
                                            <td><input type="radio" name="impactos-gerais2" value="5"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">MERCADO</td>
                                            <td><input type="radio" name="impactos-gerais3" value="0"></td>
                                            <td><input type="radio" name="impactos-gerais3" value="2"></td>
                                            <td><input type="radio" name="impactos-gerais3" value="4"></td>
                                            <td><input type="radio" name="impactos-gerais3" value="5"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">GOVERNO</td>
                                            <td><input type="radio" name="impactos-gerais4" value="0"></td>
                                            <td><input type="radio" name="impactos-gerais4" value="2"></td>
                                            <td><input type="radio" name="impactos-gerais4" value="4"></td>
                                            <td><input type="radio" name="impactos-gerais4" value="5"></td>
                                        </tr>
                                    </tbody>
                                </table>


                            </div>

                            <br>

                            <div class="form-group">
                                <label for="equipe">
                                    <h4 class="text-900 mb-0" data-anchor="data-anchor" id="custom-styles-example">MINHA
                                        EQUIPE POSSUI QUALIFICAÇÃO PARA DESENVOLVER MEU PROJETO:</a></h4>
                                </label>
                                <div>
                                    <input type="radio" id="equipe-1" name="equipe" value="5">
                                    <label for="equipe-1">Sim, a equipe possui qualificação na área do projeto</label>
                                </div>
                                <div>
                                    <input type="radio" id="equipe-2" name="equipe" value="3">
                                    <label for="equipe-2">Sim, parte da equipe possui qualificação na área do projeto,
                                        mas
                                        precisaremos contratar outra empresa ou terceiros</label>
                                </div>
                                <div>
                                    <input type="radio" id="equipe-3" name="equipe" value="2">
                                    <label for="equipe-3">Não, precisaremos contratar outra empresa ou terceiros para
                                        desenvolver o
                                        projeto</label>
                                </div>

                            </div>

                            <br>

                            <div class="form-group">
                                <label for="beneficio-inovacao">
                                    <h4 class="text-900 mb-0" data-anchor="data-anchor" id="custom-styles-example">MINHA
                                        EMPRESA JÁ SE BENEFICIOU COM RECURSOS PÚBLICOS PARA INOVAÇÃO:</a></h4>
                                </label>
                                <div>
                                    <input type="checkbox" id="beneficio-inovacao-1" name="beneficio-inovacao[]"
                                        value="5">
                                    <label for="beneficio-inovacao-1">Sim, Subvenção Econômica</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="beneficio-inovacao-2" name="beneficio-inovacao[]"
                                        value="5">
                                    <label for="beneficio-inovacao-2">Sim, recurso reembolsável</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="beneficio-inovacao-3" name="beneficio-inovacao[]"
                                        value="5">
                                    <label for="beneficio-inovacao-3">Sim, lei de incentivo fiscal para inovação</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="beneficio-inovacao-4" name="beneficio-inovacao[]"
                                        value="3">
                                    <label for="beneficio-inovacao-4">Não, mas já tentamos</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="beneficio-inovacao-5" name="beneficio-inovacao[]"
                                        value="2">
                                    <label for="beneficio-inovacao-5">Não, nunca tentamos</label>
                                </div>
                            </div>






                            <br>


                            <input class="d-none" type="text" name="user" value="<?php echo $nome_logado ?>">




                            <button type="submit" class="btn btn-success w-100">Cadastrar Questionario</button>

                        </form>

                    </div>
                </div>


            </div>
        </div>

















        <div class="position-relative">
            <div class="bg-holder footer-bg"
                style="background-image:url(../assets/img/bg/bg-19.png);background-size:auto;">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder"
                style="background-image:url(../assets/img/bg/bg-right-20.png);background-position:right;background-size:auto;">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder"
                style="background-image:url(../assets/img/bg/bg-left-20.png);background-position:left;background-size:auto;">
            </div>
            <!--/.bg-holder-->

            <div class="position-relative">
                <svg class="w-100 text-white" preserveAspectRatio="none" viewBox="0 0 1920 368" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M1920 0.44L0 367.74V0H1920V0.44Z" fill="currentColor"></path>
                </svg>


                <!-- ============================================-->
                <!-- <section> begin ============================-->
                <section style="padding-top:50px;">

                    <div class="container-small">
                        <div class="row position-relative">
                            <div class="col-12 col-sm-12 col-lg-5 mb-4 order-0 order-sm-0"><a href="#"><img class="mb-3"
                                        src="assets/img/icons/logo-white.png" height="48" alt="" /></a>
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




    </a>


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../vendors/popper/popper.min.js"></script>
    <script src="../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../vendors/anchorjs/anchor.min.js"></script>
    <script src="../vendors/is/is.min.js"></script>
    <script src="../vendors/fontawesome/all.min.js"></script>
    <script src="../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../vendors/list.js/list.min.js"></script>
    <script src="../vendors/feather-icons/feather.min.js"></script>
    <script src="../vendors/dayjs/dayjs.min.js"></script>
    <script src="../assets/js/phoenix.js"></script>
    <script src="../vendors/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../vendors/isotope-packery/packery-mode.pkgd.min.js"></script>
    <script src="../vendors/bigpicture/BigPicture.js"></script>
    <script src="../vendors/countup/countUp.umd.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARdVcREeBK44lIWnv5-iPijKqvlSAVwbw&callback=initMap"
        async></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>

    <script src="../vendors/choices/choices.min.js"></script>




    <!-- <script>
    document.getElementById("form").addEventListener("submit", function(event) {
        event.preventDefault();

        const faturamento = document.getElementById("faturamento").value;
        const regime_tributario = document.getElementById("regime_tributario").value;
        const tecnologia = document.getElementById("tecnologia").value;


        if (faturamento === "" || regime_tributario === "" || tecnologia === "") {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Por favor, preencha todos os campos!",
            });
        } else {
            Swal.fire({
                icon: "success",
                title: "Sucesso!",
                text: "Formulário enviado com sucesso!",
            });

            // Execute a ação desejada, como enviar os dados do formulário para um servidor
        }
    });
    </script> -->


    <script src="main.js"></script>


</body>

</html>