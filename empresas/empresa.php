<?php
// Conectar-se ao banco de dados
// include '../conexao/conexao.php';

include '../header.php';

// Verificar se a conexão foi estabelecida com sucesso
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Executar a consulta SQL para selecionar os dados
$sql = "SELECT setor,id FROM adm_setores";
$result = mysqli_query($conn, $sql);

// Processar os resultados da consulta e criar o array de opções do select
$options = array();
while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $nome = $row['setor'];
    $options[] = "<option value=\"$id\">$nome</option>";
}

// Criar o elemento select e adicionar as opções
$select = "<select class='form-control form-control-sm' id='setor' name='setor' data-choices='data-choices'
data-options='{'removeItemButton':true,'placeholder':true}' required>" . implode('', $options) . "</select>";

// Mostrar o select na página
// echo $select;

// Fechar a conexão com o banco de dados
mysqli_close($conn);





?>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">


<!-- <script>
// Verificar a força da senha em tempo real usando JavaScript
function verificarSenha() {
    var senha = document.getElementById("senha").value;
    var forca = document.getElementById("forca-senha");

    // Verificar o comprimento da senha
    if (senha.length < 8) {
        forca.innerHTML = "Pelo menos 8 digitos";
        forca.style.color = "red";
    } else {
        forca.innerHTML = "Senha forte";
        forca.style.color = "green";
    }

    // Verificar se a senha contém letras maiúsculas, minúsculas, números e caracteres especiais
    var pattern = /(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()\-_=+{};:,<.>])/;
    if (!pattern.test(senha)) {
        forca.innerHTML = "Senha fraca, por favor inserir pelo menos um numero e letras maisculas";
        forca.style.color = "red";
    }
}
</script> -->







<style>
#validacao-senha {
    margin-top: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 10px;
}

.item-requisito {
    color: #ccc;
    font-size: 14px;
    margin-bottom: 5px;
}

.item-requisito.ok {
    color: #28a745;
    font-weight: bold;
}
</style>

<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main style="--phoenix-scroll-margin-top: 1.2rem;">
        <?php include '../nav.php' ?>




        <div class="container py-10">
            <div class="row">
                <div class="container py-1">
                    <h2>Cadastro de Empresa</h2>
                    <form id="empresa" onsubmit="confirmarEnvio(event)">

                        <!-- <div class="row md-12"> -->
                        <div class="col">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control form-control-sm" id="nome" name="nome" required>
                        </div>
                        <div class="col">
                            <label for="nome_empresa">Nome da Empresa:</label>
                            <input type="text" class="form-control form-control-sm" id="nome_empresa"
                                name="nome_empresa" required>
                        </div>
                        <!-- <div class="col">
                            <label for="cnpj">CNPJ:</label>
                            <input type="text" class="form-control form-control-sm" id="cnpj" name="cnpj"
                                placeholder="XX.XXX.XXX/YYYY-ZZ" required>
                        </div> -->
                        <div class="col">
                            <!-- <label for="cnpj">CPF ou CNPJ:</label>

                            <input type="text" id="cnpj" name="cnpj" placeholder="Digite um CPF ou CNPJ" class="form-control form-control-sm cnpj">
                            <small>Insira um CPF no formato xxx.xxx.xxx-xx ou um CNPJ no formato
                                xx.xxx.xxx/xxxx-xx</small> -->
                            <label for="cnpj">CPF ou CNPJ:</label>
                            <input type="text" id="cnpj" name="cnpj" placeholder="Digite um CPF ou CNPJ"
                                class="form-control form-control-sm input-cpf-cnpj">

                        </div>
                        <!-- </div> -->

                        <!-- <div class="row md-12"> -->

                        <div class="col">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control form-control-sm" id="email" name="email" required>
                        </div>
                        <div class="col">
                            <label for="whatsapp">Whatsapp:</label>
                            <input type="text" class="form-control form-control-sm" id="whatsapp" name="whatsapp"
                                placeholder="(XX) XXXXX-XXXX" required>
                        </div>


                        <!-- </div> -->



                        <!-- <div class="row md-12"> -->
                        <div class="col">
                            <label for="uf">UF:</label>
                            <select class="form-control form-control-sm" id="uf" name="uf" data-choices="data-choices"
                                data-options='{"removeItemButton":false,"placeholder":true}' required>
                                <option value="">Selecione</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>

                            </select>


                        </div>


                        <div class="col">
                            <label for="setor">Setor:</label>
                            <!-- <input type="text" class="form-control" id="setor" placeholder="Digite o setor" name="setor"> -->

                            <!-- <select class='form-control form-control-sm' id='setor' name='setor' data-choices='data-choices' value="">Selecione uma opção</select> -->
                            <!-- <?php echo $select ?> -->
                            <!-- <?php
                                                                // Executar a consulta SQL para selecionar os dados
                                $sql = "SELECT setor,id FROM adm_setores";
                                $result = mysqli_query($conn, $sql);

                                // Processar os resultados da consulta e criar o array de opções do select
                                $options = array();
                                while ($row = mysqli_fetch_array($result)) {
                                    $id = $row['id'];
                                    $nome = $row['setor'];
                                    $options[] = "<option value=\"$id\">$nome</option>";
                                }
                                echo "<select class='form-control form-control-sm' id='setor' name='setor' data-choices='data-choices'
                                data-options='{'removeItemButton':true,'placeholder':true}' required></select>";
                                // Criar o elemento select e adicionar as opções
                                echo "<select class='form-control form-control-sm' id='setor' name='setor' data-choices='data-choices'
                                data-options='{'removeItemButton':true,'placeholder':true}' required>" . implode('', $options) . "</select>";
                                ?> -->

                            <?php
                                            // Executar a consulta SQL para selecionar os dados
                                            $sql = "SELECT setor, id FROM adm_setores";
                                            $result = mysqli_query($conn, $sql);

                                            // Processar os resultados da consulta e criar o array de opções do select
                                            $options = array();
                                            while ($row = mysqli_fetch_array($result)) {
                                                $id = $row['id'];
                                                $nome = $row['setor'];
                                                $options[] = "<option value=\"$id\">$nome</option>";
                                            }

                                            // Criar o elemento select e adicionar as opções
                                            echo "<select class='form-control form-control-sm' id='setor' name='setor' data-choices='data-choices' data-options='{\"removeItemButton\":true, \"placeholder\":true}' required>";
                                            echo "<option value=''>Selecione um setor</option>";
                                            echo implode('', $options);
                                            echo "</select>";
                                            ?>


                        </div>

                        <!-- </div> -->
                        <div class=" form-group ">

                            <label for="setor">Senha:</label>

                            <!-- <input type="password" name="senha" id="senha" required onkeyup="verificarSenha()"> -->


                            <input class="form-control form-control-sm" id="senha" type="password" name="senha"
                                placeholder="Senha" required />
                            <!-- onkeyup="verificarSenha()" onkeyup="validarSenha()" -->

                            <p id="forca-senha"></p>

                            <div id="validacao-senha" class="bm-2">
                                <div class="item-requisito">Pelo menos 8 caracteres</div>
                                <div class="item-requisito">Pelo menos uma letra maiúscula</div>
                                <div class="item-requisito">Pelo menos um número</div>
                                <div class="item-requisito">Pelo menos um caractere especial</div>
                            </div>

                        </div>

                        <div class="form-check mb-3 mt-2">
                            <input class="form-check-input" id="termsService" type="checkbox"
                                onchange="toggleButton()" />
                            <label class="form-label fs--1 text-none" for="termsService">Concordo com o processamento
                                dos meus dados de acordo com a Lei 13.709/2018 LGPD. <a href="#!"
                                    onclick="openModal()">Ver Termos LGPD</a></label>
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary mt-2" id="cadastrarBtn"
                            onclick="confirmarEnvio()" disabled>Cadastrar</button>




                        <script>
                          document.addEventListener("DOMContentLoaded", function() {
                                var checkbox = document.getElementById("termsService");
                                var button = document.getElementById("cadastrarBtn");

                                button.disabled = !checkbox.checked;

                                checkbox.addEventListener("change", function() {
                                    button.disabled = !checkbox.checked;
                                });
                            });

                            function openModal() {
                                var modal = new bootstrap.Modal(document.getElementById("lgpdModal"));
                                modal.show();
                            }
                                            </script>





                        <!-- lgpdModalLabel -->
                        <div class="modal fade" id="lgpdModal" tabindex="-1" aria-labelledby="lgpdModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="lgpdModalLabel">Termo de LGPD</h5>
                                        <button class="btn p-1" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"><span class="fas fa-times fs--1"></span></button>
                                    </div>
                                    <div class="modal-body">

                                                <?php include '../lgpd_define.html' ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" type="button">Okay</button>
                                        <button class="btn btn-outline-primary" type="button"
                                            data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>




                </div>
            </div>
        </div>






















    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <?php include '../footer.php' ?>


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
    <script src="vendors/choices/choices.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-masker/1.2.0/vanilla-masker.min.js"></script>


    <!-- jQuery é necessário para inputmask -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- inputmask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>





    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var whatsappInput = document.getElementById('whatsapp');
        VMasker(whatsappInput).maskPattern('(99) 99999-9999');
    });

    // document.addEventListener('DOMContentLoaded', function() {
    //     var cnpjInput = document.getElementById('cnpj');
    //     VMasker(cnpjInput).maskPattern('99.999.999/9999-99');
    // });
    </script>

    <script>
    $(document).ready(function() {
        $('.input-cpf-cnpj').inputmask({
            mask: ['999.999.999-99', '99.999.999/9999-99'],
            keepStatic: true
        });
    });
    </script>







    <!-- <script>
    // Confirmar o envio do formulário usando SweetAlert2
    function confirmarEnvio() {
        var senha = document.getElementById("senha").value;

        // Verificar se a senha atende aos critérios de segurança
        if (senha.length >= 8 && /[A-Z]/.test(senha) && /[a-z]/.test(senha) && /\d/.test(senha) &&
            /[!@#$%^&*()\-_=+{};:,<.>]/.test(senha)) {
            Swal.fire({
                title: 'Confirmação',
                text: 'Tem certeza de que deseja prosseguir?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sim',
                cancelButtonText: 'Não'
            }).then((result) => {
                if (result.isConfirmed) {

                }
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'A senha deve ter pelo menos 8 caracteres, incluindo pelo menos uma letra maiúscula, um número e um caractere especial.',
            });
        }
    }
    </script> -->


    <!-- <script>
    function confirmarEnvio() {
        var senha = document.getElementById("senha").value;

        if (senha.length >= 8 && /[A-Z]/.test(senha) && /[a-z]/.test(senha) && /\d/.test(senha)) {
            Swal.fire({
                title: 'Confirmação',
                text: 'Tem certeza que deseja salvar o formulário?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim',
                cancelButtonText: 'Não'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Enviar formulário para ser salvo
                    document.getElementById("meuFormulario").submit();
                }
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'A senha deve ter pelo menos 8 caracteres, incluindo pelo menos uma letra maiúscula e um número.',
            });
        }
    }
</script> -->


    <!-- <script>
    // Adiciona uma pergunta de confirmação antes de executar o script
    $('#empresa').on('submit', function(event) {
        event.preventDefault();
        Swal.fire({
            icon: 'question',
            title: 'Você tem certeza?',
            text: 'Tem certeza de que deseja cadastrar esta empresa?',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, cadastrar!',
            cancelButtonText: 'Cancelar',
        }).then((result) => {
            if (result.isConfirmed) {
                // Executa o restante do script
                const formData = $(this).serialize();
                $.ajax({
                    url: 'salvar_2.php', // Substitua pelo caminho do seu arquivo PHP
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            // Mostrar uma mensagem de sucesso
                            Swal.fire({
                                icon: 'success',
                                title: 'Cadastro efetuado com sucesso!',
                                text: 'O cadastro da empresa foi concluído com êxito.',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK',
                            }).then(() => {
                                // Redirecionar para a página de sucesso
                                // window.location.href =
                                //     '../index.php';

                                // redireciona para a página de destino usando o email e senha cadastrados
                                var email = encodeURIComponent($('#email').val());
                                var password = encodeURIComponent($('#senha')
                                    .val());
                                var redirectUrl = 'empresa_log.php?email=' + email +
                                    '&password=' + password;
                                window.location.href = redirectUrl;
                            });
                        } else if (response.duplicateEmail) {
                            // Mostrar um alerta SweetAlert2 de e-mail duplicado
                            Swal.fire({
                                icon: 'error',
                                title: 'Erro',
                                text: 'E-mail já cadastrado. Por favor, insira um e-mail diferente.',
                            });
                        } else {
                            // Mostrar um alerta SweetAlert2 de erro genérico
                            Swal.fire({
                                icon: 'error',
                                title: 'Erro',
                                text: 'Houve um erro ao processar sua solicitação. Por favor, tente novamente.',
                            });
                        }
                    },
                    error: function() {
                        // Mostrar um alerta SweetAlert2 de erro ao se comunicar com o servidor
                        Swal.fire({
                            icon: 'error',
                            title: 'Erro',
                            text: 'E-mail já cadastrado. Por favor, insira um e-mail diferente.',
                        });
                    },
                });
            }

        });
    });
    </script> -->


    <script>
function confirmarEnvio(e) {
    e.preventDefault(); // Impede a ação padrão do botão de envio
    var checkbox = document.getElementById("termsService");
    if (checkbox.checked) {
        console.log("Botão clicado"); // Adicione este log
        Swal.fire({
            icon: 'question',
            title: 'Você tem certeza?',
            text: 'Tem certeza de que deseja cadastrar esta empresa?',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, cadastrar!',
            cancelButtonText: 'Cancelar',
        }).then((result) => {
            if (result.isConfirmed) {
                console.log("Confirmação confirmada"); // Adicione este log
                document.getElementById("cadastrarBtn").disabled = true; // Desabilita o botão
                const formData = $("#empresa").serialize();
                $.ajax({
                    url: 'salvar_2.php', // Substitua pelo caminho do seu arquivo PHP
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            // Mostrar uma mensagem de sucesso
                            console.log("Cadastro bem-sucedido");
                            Swal.fire({
                                icon: 'success',
                                title: 'Cadastro efetuado com sucesso!',
                                text: 'O cadastro da empresa foi concluído com êxito.',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK',
                            }).then(() => {
                                console.log("Redirecionando...");
                                // redireciona para a página de destino usando o email e senha cadastrados
                                var email = encodeURIComponent($('#email').val());
                                var password = encodeURIComponent($('#senha')
                                    .val());
                                var redirectUrl = 'empresa_log.php?email=' + email +
                                    '&password=' + password;
                                window.location.href = redirectUrl;
                            });
                        } else if (response.duplicateEmail) {
                            // Mostrar um alerta SweetAlert2 de e-mail duplicado
                            Swal.fire({
                                icon: 'error',
                                title: 'Erro',
                                text: 'E-mail já cadastrado. Por favor, insira um e-mail diferente.',
                            });
                        } else {
                            // Mostrar um alerta SweetAlert2 de erro genérico
                            Swal.fire({
                                icon: 'error',
                                title: 'Erro',
                                text: 'Houve um erro ao processar sua solicitação. Por favor, tente novamente.',
                            });
                        }
                    },
                    error: function() {
                        // Mostrar um alerta SweetAlert2 de erro ao se comunicar com o servidor
                        Swal.fire({
                            icon: 'error',
                            title: 'Erro',
                            text: 'Houve um erro ao se comunicar com o servidor.',
                        });
                    },
                });
            }
        });
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Erro',
            text: 'Você deve concordar com os termos para prosseguir.',
        });
    }
}
</script>




    <script>
    // Seleciona os elementos HTML relevantes
    const senhaInput = document.getElementById('senha');
    const validacaoSenha = document.getElementById('validacao-senha');
    const requisitosSenha = validacaoSenha.querySelectorAll('.item-requisito');

    // Define as regras de validação da senha
    const requisitos = [{
            descricao: 'Pelo menos 8 caracteres',
            valida: function(senha) {
                return senha.length >= 8;
            }
        },
        {
            descricao: 'Pelo menos uma letra maiúscula',
            valida: function(senha) {
                return /[A-Z]/.test(senha);
            }
        },
        {
            descricao: 'Pelo menos um número',
            valida: function(senha) {
                return /\d/.test(senha);
            }
        },
        {
            descricao: 'Pelo menos um caractere especial',
            valida: function(senha) {
                return /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(senha);
            }
        }
    ];

    // Função para atualizar a exibição dos requisitos de validação da senha
    function atualizaValidacaoSenha() {
        let validaTudo = true;
        requisitos.forEach(function(requisito, index) {
            const requisitoHTML = requisitosSenha[index];
            const valido = requisito.valida(senhaInput.value);
            if (valido) {
                requisitoHTML.classList.add('ok');
            } else {
                validaTudo = false;
                requisitoHTML.classList.remove('ok');
            }
        });

        if (validaTudo && senhaInput.value !== '') {
            validacaoSenha.style.borderColor = '#28a745';
            document.getElementById("cadastrarBtn").disabled = false;
        } else {
            validacaoSenha.style.borderColor = '#ddd';
            document.getElementById("cadastrarBtn").disabled = true;
        }
    }

    // Adiciona um ouvinte de eventos para a entrada do campo de senha
    senhaInput.addEventListener('input', function() {
        atualizaValidacaoSenha();
    });
    </script>

    </script>

</body>

</html>