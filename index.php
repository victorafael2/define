<?php include 'header.php' ?>

<style>
@keyframes typewriter {
    from {
        width: 0;
    }

    to {
        width: 100%;
    }
}

@keyframes blink {
    50% {
        border-color: transparent;
    }
}

.typewriter {
    display: inline-block;
    overflow: hidden;
    border-right: 2px solid;
    animation: blink 1s step-end infinite;
}

/* h1 {
  font-family: monospace;
  font-size: 24px;
} */

h1 .typewriter {
    white-space: nowrap;
    animation-name: typewriter;
    animation-duration: 10s;
    /* Ajuste a duração da animação */
    animation-timing-function: steps(10, end);
    /* Ajuste o número de 'steps' para controlar a velocidade da animação */
}
</style>

<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->

    <main class="main">
        <div class="container-fluid px-0">
            <?php include 'nav.php' ?>




            <!-- <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true"

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
        </div> -->
            <!-- <div class="content"> -->
            <section class="bg-white pb-1" id="home">
                <div class="container-small hero-header-container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-auto order-0 order-md-1 text-end order-1">
                            <div class="position-relative p-5 p-md-7 d-lg-none">
                                <div class="bg-holder"
                                    style="background-image:url(assets/img/bg/bg-23.png);background-size:contain;">
                                </div>
                                <!--/.bg-holder-->

                                <div class="position-relative">
                                <!-- <video class="w-100 shadow-lg d-dark-none rounded-2" src="assets/videos/define.mp4" width="720" height="405" autoplay loop muted>
                                            Seu navegador não suporta a tag de vídeo.
                                        </video> -->
                                    <!-- <iframe  src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                                        <video class="w-100  d-dark-none rounded-2" src="assets/videos/define.mp4" type="video/mp4" width="720" height="405" autoplay loop controls muted >
                                            Seu navegador não suporta a tag de vídeo.
                                        </video>
                                        <video class="w-100  d-light-none rounded-2" src="assets/videos/define.mp4" type="video/mp4" width="720" height="405" autoplay loop controls muted >
                                            Seu navegador não suporta a tag de vídeo.
                                        </video>

                                    <!-- <img class="w-100 shadow-lg d-dark-none rounded-2"
                                    src="assets/img/bg/matech_imag.jpg" alt="hero-header" />
                                    <img
                                    class="w-100 shadow-lg d-light-none rounded-2" src="assets/img/bg/matech_imag.jpg"
                                    alt="hero-header" /> -->
                                </div>
                            </div>
                            <div class="hero-image-container position-absolute top-0 bottom-0 end-0 d-none d-lg-block">
                                <div class="position-relative h-100 w-100">
                                    <div
                                        class="position-absolute h-100 top-0 d-flex align-items-center end-0 hero-image-container-bg">
                                        <img class="pt-7 pt-md-0 w-100" src="assets/img/bg/bg-1-2.png"
                                            alt="hero-header" />
                                    </div>
                                    <div class="position-absolute h-100 top-0 d-flex align-items-center end-0">
                                        <video class="pt-7 pt-md-0 w-100  d-dark-none rounded-2" src="assets/videos/define.mp4" type="video/mp4" width="720" height="405" muted  autoplay loop controls >
                                            Seu navegador não suporta a tag de vídeo.
                                        </video>
                                        <video class="pt-7 pt-md-0 w-100  d-light-none rounded-2" src="assets/videos/define.mp4" type="video/mp4" width="720" height="405" muted autoplay loop controls >
                                            Seu navegador não suporta a tag de vídeo.
                                        </video>

                                        <!-- <img
                                        class="pt-7 pt-md-0 w-100 shadow-lg d-dark-none rounded-2"
                                        src="assets/img/bg/matech_imag.jpg" alt="hero-header" />
                                        <img
                                        class="pt-7 pt-md-0 w-100 shadow-lg d-light-none rounded-2"
                                        src="assets/img/bg/matech_imag.jpg" alt="hero-header" /> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 text-lg-start text-center pt-0 pb-6 order-0 position-relative">
                            <h1 class="fs-5 fs-lg-6 fs-md-7 fs-lg-6 fs-xl-7 fs fw-black mb-4 pt-5">Você <br /><span
                                    class="text-primary me-3 " id="texto"></span><br />o recurso que sua empresa vai
                                acessar,
                            </h1>
                            <h4 class="mb-5" font-size: 1em !important>E a MATECH te apoia</h4>

                            <a class="btn btn-lg btn-primary rounded-pill me-3" href="<?php echo $cadastrar ?>"
                                role="button"><?php echo $cadastrar_texto ?></a>
                            <!-- <a
                            class="btn btn-link me-2 fs-0 p-0 text-decoration-none" href="#!" role="button">Check
                            Demo<span class="fa-solid fa-angle-right ms-2 fs--1"></span></a> -->
                        </div>
                    </div>
                </div>
            </section>


            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="py-5 pt-xl-0 bg-white">
                <div class="d-flex justify-content-center py-3">
                    <h3>Apoiadores</h3>
                </div>

                <div class="container-small">
                    <div class="row g-0">
                        <div class="col-6 col-md-3">
                            <div
                                class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end">
                                <img class="w-100" src="assets/img/brand2/centelha.png" alt="Centelha" />
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div
                                class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end-md">
                                <img class="w-100" src="assets/img/brand2/finep.png" alt="Finep" />
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div
                                class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end border-end-md">
                                <img class="w-100" src="assets/img/brand2/logo-footer.png"
                                    alt="Governo de Pernambuco" />
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div
                                class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end-lg-0">
                                <img class="w-100" src="assets/img/brand2/Logo-Pró-Startups.png" alt="Pró Startups" />
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div
                                class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end border-bottom border-bottom-md-0">
                                <img class="w-100" src="assets/img/brand2/logo_facepe.png" alt="Facepe" />
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div
                                class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end-md border-bottom border-bottom-md-0">
                                <img class="w-100" src="assets/img/brand2/logo_mcti_2023.png" alt="MCTI" />
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div
                                class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end">
                                <img class="w-100" src="assets/img/brand2/fast.png" alt="Fast Motion" />
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div
                                class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end-lg-0">
                                <img class="w-100" src="assets/img/brand2/PortoDigital_2019.png" alt="Porto Digital" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->





















            <?php include 'footer.php' ?>


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->





    <script>
    // Defina o texto a ser exibido
    var texto = "D.E.F.I.N.E.";

    // Selecione o elemento HTML onde o texto será exibido
    var textoElemento = document.getElementById("texto");

    // Defina a velocidade do efeito (em milissegundos)
    var velocidade = 90;

    // Inicialize a variável que será usada para controlar a posição atual do texto
    var posicao = 0;

    // Crie um intervalo que irá adicionar um caractere ao texto a cada "velocidade" milissegundos
    var intervalo = setInterval(function() {
        // Adicione o próximo caractere ao texto
        textoElemento.innerHTML += texto.charAt(posicao);

        // Avance para o próximo caractere
        posicao++;

        // Se chegamos ao final do texto, pare o intervalo
        if (posicao >= texto.length) {
            clearInterval(intervalo);
        }
    }, velocidade);
    </script>



</body>

</html>