<?php include '../header.php';



?>





<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">

<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main style="--phoenix-scroll-margin-top: 1.2rem;">
        <?php include '../nav.php' ?>



        <div class="container py-10">
            <div class="row">
                <div class="card h-100">
                    <div class="card-body">
                        <form id ="myForm" method="POST" action="salvar.php">


                            <div class="form-group">
                                <label for="faturamento">
                                    <h4 class="text-900 mb-0" data-anchor="data-anchor" id="custom-styles-example">A
                                        MINHA EMPRESA É:</a></h4>
                                </label>
                                <div>

                                    <select class="form-control" id="faturamento" name="faturamento"
                                        data-choices="data-choices"
                                        data-options='{"removeItemButton":false,"placeholder":true}' required>
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
                                    data-options='{"removeItemButton":false,"placeholder":true}' required>
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
                                        TECNOLOGIA A SER DESENVOLVIDA É UMA INOVAÇÃO:</h4>
                                </label>
                                <div>
                                    <input type="radio" id="tecnologia1" name="tecnologia" value="2" checked>
                                    <label for="tecnologia1">Para minha empresa, já existe no mercado</label>
                                </div>
                                <div>
                                    <input type="radio" id="tecnologia2" name="tecnologia" value="4">
                                    <label for="tecnologia2">Para meu Estado</label>
                                </div>
                                <div>
                                    <input type="radio" id="tecnologia3" name="tecnologia" value="6">
                                    <label for="tecnologia3">Para meu país</label>
                                </div>
                                <div> <input type="radio" id="tecnologia4" name="tecnologia" value="8">
                                    <label for="tecnologia4">Inovação mundial</label>
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
                                    data-options='{"removeItemButton":false,"placeholder":true}' required>
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




                            <button type="submit" id="btnSubmit" class="btn btn-success w-100">Cadastrar
                                Questionario</button>

                        </form>



                    </div>




                </div>


            </div>
        </div>

















        <?php include '../footer.php' ?>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    <!-- <script>
    document.getElementById("btnSubmit").addEventListener("click", function (event) {
        event.preventDefault(); // impede que o formulário seja enviado imediatamente

        // Validar os campos obrigatórios
        const form = document.getElementById("myForm");
        if (!form.checkValidity()) {
            // Exibir o alerta caso o formulário não seja válido
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Por favor, preencha todos os campos obrigatórios!",
            });
            return;
        }

        // Exibir o prompt de confirmação do SweetAlert2
        Swal.fire({
            title: "Prosseguir com o cadastro?",
            text: "Tem certeza que deseja cadastrar esses dados?",
            icon: "question",
            showCancelButton: true,
            confirmButtonText: "Sim, pode prosseguir",
            cancelButtonText: "Não, cancelar",
        }).then((result) => {
            if (result.isConfirmed) {
                // Se o usuário confirmar o cadastro, envia o formulário
                document.getElementById("btnSubmit").disabled = true;
                document.querySelector("form").submit();
            }
        });
    });
</script> -->

<script>
    document.getElementById("btnSubmit").addEventListener("click", function (event) {
        event.preventDefault(); // impede que o formulário seja enviado imediatamente

        // Validar os campos obrigatórios
        const form = document.getElementById("myForm");
        if (!form.checkValidity()) {
            // Exibir o alerta caso o formulário não seja válido
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Por favor, preencha todos os campos obrigatórios!",
            });
            return;
        }

        // Exibir o prompt de confirmação do SweetAlert2
        Swal.fire({
            title: "Prosseguir com o cadastro?",
            text: "Tem certeza que deseja cadastrar esses dados?",
            icon: "question",
            showCancelButton: true,
            confirmButtonText: "Sim, pode prosseguir",
            cancelButtonText: "Não, cancelar",
        }).then((result) => {
            if (result.isConfirmed) {
                // Se o usuário confirmar o cadastro, envia os dados do formulário via AJAX
                const formData = new FormData(form);

                fetch("salvar_2.php", {
                    method: "POST",
                    body: formData,
                })
                .then((response) => {
                    if (response.ok) {
                        return response.text();
                    } else {
                        throw new Error("Ocorreu um erro ao salvar os dados. Tente novamente.");
                    }
                })
                .then((insertedId) => {
                    // Exibir mensagem de sucesso
                    Swal.fire({
                        icon: "success",
                        title: "Sucesso!",
                        text: "Cadastro realizado com sucesso!",
                        showConfirmButton: false,
                        timer: 2000,
                    }).then(() => {
                        // Redirecionar para outra página com o ID inserido na URL
                        window.location.href = `sucess.php?id=${insertedId}`;
                    });
                })
                .catch((error) => {
                    // Exibir um alerta de erro caso ocorra algum problema
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: error.message,
                    });
                });
            }
        });
    });
</script>






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

    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script> -->

    <!-- <script>
    // Chame a função swal para mostrar uma mensagem
    Swal.fire('Hello World!');
    </script> -->




    <!-- <script src="main.js"></script> -->










</body>

</html>