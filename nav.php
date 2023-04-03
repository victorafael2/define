<?php



$url_base = htmlspecialchars(dirname($_SERVER['REQUEST_URI']), ENT_QUOTES, 'UTF-8');

$barra =  "/";

$diminuir = 2;

$url = $url_base.$barra;

$caractere = "/";

$stringParaRepetir = "../";

$contagem = substr_count($url, $caractere) - $diminuir;


$url = str_repeat($stringParaRepetir, $contagem);


$caminhobd = "conexao/conexao.php";

$caminho_full = $url.$caminhobd;


include($caminho_full);






?>

<style>
.user-avatar {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 50%;
    background-color: #f2f2f2;
    color: #333;
    text-align: center;
    font-size: 18px;
    font-weight: bold;
    margin-right: 10px;
}
</style>


<!--
<nav class="navbar bg-white navbar-expand-lg ">
    <div class="collapse navbar-collapse justify-content-between"><a class="navbar-brand flex-1 flex-lg-grow-0" href="<?php echo $url ?>">
            <div class="d-flex align-items-center"><img src="<?php echo $url ?>assets/img/icons/logo.png" alt="define"
                    width="27" />
                <p class="logo-text ms-2">define</p>
            </div>
        </a>
        <div class="d-lg-none">
            <div class="theme-control-toggle fa-icon-wait px-2">
                <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                    data-theme-control="phoenixTheme" value="dark" id="themeControlToggleSm" />
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggleSm"
                    data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon"
                        data-feather="moon"></span></label>
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggleSm"
                    data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon"
                        data-feather="sun"></span></label>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
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
                        href="<?php echo $url ?>">Home</a></li>

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
                </div>

                <a class="btn btn-link text-900 order-1 order-lg-0 ps-3 me-2 <?php echo  $esconder_entrar; ?>"
                    href="pages/authentication/simple/sign-in.php">Entrar</a>




                <a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="avatar avatar-l ">
                            <img class="rounded-circle " src="<?php echo $url ?>assets/img/team/57.png" alt="" />

                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
                        aria-labelledby="navbarDropdownUser">
                        <div class="card position-relative border-0">
                            <div class="card-body p-0">
                                <div class="text-center pt-4 pb-3">
                                    <div class="avatar avatar-xl ">
                                        <img class="rounded-circle " src="../assets/img/team/57.png" alt="" />

                                    </div>
                                    <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                                </div>
                                <div class="mb-3 mx-3">
                                    <input class="form-control form-control-sm" id="statusUpdateInput" type="text"
                                        placeholder="Update your status" />
                                </div>
                            </div>
                            <div class="overflow-auto scrollbar" style="height: 10rem;">
                                <ul class="nav d-flex flex-column mb-2 pb-1">
                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                                data-feather="user"></span><span>Profile</span></a></li>
                                    <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900"
                                                data-feather="pie-chart"></span>Dashboard</a></li>
                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                                data-feather="lock"></span>Posts &amp; Activity</a></li>
                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                                data-feather="settings"></span>Settings &amp; Privacy </a></li>
                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                                data-feather="help-circle"></span>Help Center</a></li>
                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                                data-feather="globe"></span>Language</a></li>
                                </ul>
                            </div>
                            <div class="card-footer p-0 border-top">
                                <ul class="nav d-flex flex-column my-3">
                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                                data-feather="user-plus"></span>Add another account</a></li>
                                </ul>
                                <hr />
                                <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                        href="#!"> <span class="me-2" data-feather="log-out"> </span>
                                        <form class="<?php echo $esconder_ ?>" method="post"
                                            action="encerrar_sessao.php">
                                            <input type="hidden" name="encerrar_sessao" value="1">
                                            <input class="btn btn-phoenix-danger order-0" type="submit"
                                                value="Encerrar sessão">
                                        </form>
                                    </a></div>
                                <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1"
                                        href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1"
                                        href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</nav> -->



<nav class="navbar navbar-top navbar-expand" id="navbarDefault">
    <div class="collapse navbar-collapse justify-content-between">
        <div class="navbar-logo">



            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span
                    class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="<?php echo $url ?>index.php">
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center"><img src="<?php echo $url ?>assets/img/icons/logo.png"
                            alt="define" width="27" />
                        <p class="logo-text ms-2 d-none d-sm-block">d.e.f.i.n.e</p>
                    </div>
                </div>
            </a>
        </div>

        <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item">
                <div class="theme-control-toggle fa-icon-wait px-2">
                    <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                        data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" />
                    <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon"
                            data-feather="moon"></span></label>
                    <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon"
                            data-feather="sun"></span></label>
                </div>
            </li>
            <li class="nav-item dropdown">

            </li>

            <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-l ">
                        <!-- <img class="rounded-circle " src="<?php echo $url ?>assets/img/team/57.png" alt="" /> -->
                        <div class="user-avatar">
                            <?php echo strtoupper(substr($nome_logado, 0, 1)); ?>
                        </div>

                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
                    aria-labelledby="navbarDropdownUser">
                    <div class="card position-relative border-0">
                        <div class="card-body p-0">
                            <div class="text-center pt-4 pb-3">
                                <div class="avatar avatar-xl ">
                                    <!-- <img class="rounded-circle " src="<?php echo $url ?>assets/img/team/57.png" alt="" /> -->
                                    <div class="user-avatar">
                                        <?php echo strtoupper(substr($nome_logado, 0, 1)); ?>
                                    </div>

                                </div>
                                <h6 class="mt-2 text-black"><?php echo $first_name ?></h6>
                            </div>
                            <!-- <div class="mb-3 mx-3">
                                <input class="form-control form-control-sm" id="statusUpdateInput" type="text"
                                    placeholder="Update your status" />
                            </div> -->
                        </div>
                        <div class="overflow-auto scrollbar <?php echo $v_logado ?>" style="height: 5rem;">
                            <ul class="nav d-flex flex-column mb-2 pb-1">
                                <li class="nav-item"><a class="nav-link px-3" href="<?php echo $url ?>adm/perfil.php">
                                        <span class="me-2 text-900" data-feather="user"></span><span>Profile</span></a>
                                </li>
                                <li class="nav-item"><a class="nav-link px-3"
                                        href="<?php echo $url ?>adm/questionarios_respondidos.php"><span
                                            class="me-2 text-900" data-feather="pie-chart"></span>Meus Relatórios</a>
                                </li>
                                <!-- <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="lock"></span>Posts &amp; Activity</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="help-circle"></span>Help Center</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="globe"></span>Language</a></li> -->
                            </ul>
                        </div>
                        <div class="card-footer p-0 border-top">
                            <!-- <ul class="nav d-flex flex-column my-3">
                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                            data-feather="user-plus"></span>Add another account</a></li>
                            </ul> -->
                            <!-- <hr /> -->
                            <div class="px-5 py-2">

                            <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                    href="<?php echo $url ?>pages/authentication/simple/sign-in.php"> <span class="me-2"
                                        data-feather="log-in"> </span>

                                    </form>
                                </a>

                                <form class="<?php echo $esconder_ ?>" method="post"
                                        action="<?php echo $url ?>encerrar_sessao.php">
                                        <input type="hidden" name="encerrar_sessao" value="1">
                                        <input class="btn btn-phoenix-danger order-0" type="submit"
                                            value="Encerrar sessão">

                              </div>
                            <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1"
                                    href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1"
                                    href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>





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