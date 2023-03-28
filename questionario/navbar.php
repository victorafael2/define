<?php
include '../conexao/conexao.php';

// session_start();
$nome_logado = !empty($_SESSION['email']) ? $_SESSION['email'] : '';


$sql_nome = "select * from empresas where email = '$nome_logado'";
$result_nome = mysqli_query($conn, $sql_nome);
// Verificar se a consulta retornou algum resultado
if (mysqli_num_rows($result_nome) > 0) {
    // Exibir os resultados
    while($row = mysqli_fetch_assoc($result_nome)) {

        $nome = $row["nome"] ?? 'Valor padrão';


    }};

?>




<nav class="navbar bg-white navbar-expand-lg sticky-top">
<div class="container-small px-0 px-sm-3"><a class="navbar-brand flex-1 flex-lg-grow-0" href="index.php">
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
            </div>
            <!-- <a class="text-500 px-2 d-none d-lg-inline me-2" href="#" data-bs-toggle="modal"
                data-bs-target="#searchBoxModal"><span data-feather="user"
                    style="height:12px;width:12px;"></span></a> -->
                    <a
                class="btn btn-link text-900 order-1 order-lg-0 ps-3 me-2 <?php echo  $esconder_entrar; ?>"
                href="../pages/authentication/simple/sign-in.php">Entrar</a>
            <!-- <a
                class="btn btn-phoenix-primary order-0"
                href="pages/authentication/simple/sign-up.html"><span class="fw-bold">Cadastrar</span></a> -->



            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser"
                        href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-l ">
                            <img class="rounded-circle " src="../assets/img/team/avatar-rounded.png" alt="" />

                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
                        aria-labelledby="navbarDropdownUser">
                        <div class="card position-relative border-0">
                            <div class="card-body p-0">
                                <div class="text-center pt-4 pb-3">
                                    <div class="avatar avatar-xl ">
                                        <img class="rounded-circle " src="../assets/img/team/avatar-rounded.png" alt="" />

                                    </div>
                                    <h6 class="mt-2 text-black"><?php echo $nome ?? 'Usuario'; ?></h6>
                                </div>
                                <div class="mb-3 mx-3">
                                    <input class="form-control form-control-sm" id="statusUpdateInput"
                                        type="text" placeholder="Update your status" />
                                </div>
                            </div>
                            <div class="overflow-auto scrollbar" style="height: 7rem;">
                                <ul class="nav d-flex flex-column mb-2 pb-1">
                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                                class="me-2 text-900"
                                                data-feather="user"></span><span>Meu Perfil</span></a></li>
                                                <li class="nav-item"><a class="nav-link px-3" href="../questionario/questionario2_.php"><span
                                                class="me-2 text-900"
                                                data-feather="file-plus"></span>Realizar Diagnostico
                                        </a></li>
                                    <li class="nav-item"><a class="nav-link px-3" href="#!"><span
                                                class="me-2 text-900"
                                                data-feather="pie-chart"></span>Meus Diagnosticos
                                        </a></li>
                                    <!-- <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                                class="me-2 text-900" data-feather="lock"></span>Posts &amp;
                                            Activity</a></li>
                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                                class="me-2 text-900"
                                                data-feather="settings"></span>Settings &amp; Privacy </a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                                class="me-2 text-900" data-feather="help-circle"></span>Help
                                            Center</a></li>
                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                                class="me-2 text-900"
                                                data-feather="globe"></span>Language</a></li> -->
                                </ul>
                            </div>
                            <div class="card-footer p-0 border-top">
                                <ul class="nav d-flex flex-column my-3">
                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                                class="me-2 text-900" data-feather="user-plus"></span>Add
                                            another account</a></li>
                                </ul>
                                <hr />
                                <!-- <div class="px-3"> <a
                                        class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                        href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign
                                        out</a></div> -->
                                        <div class="px-3">
                                <form class="<?php echo $esconder_ ?>" method="post"
                                    action="encerrar_sessao.php">
                                    <input type="hidden" name="encerrar_sessao" value="1">
                                    <input class="btn btn-phoenix-danger order-0 d-flex flex-center w-100" type="submit"
                                        value="Encerrar sessão">
                                </form>
                                        </div>
                                <div class="my-2 text-center fw-bold fs--2 text-600"><a
                                        class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a
                                        class="text-600 mx-1" href="#!">Terms</a>&bull;<a
                                        class="text-600 ms-1" href="#!">Cookies</a></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>


        </div>
    </div>
</div>
</nav>