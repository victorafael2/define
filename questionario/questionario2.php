<!DOCTYPE html>
<html>

<head>
    <title>Minha Página de Landingscap</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



    <style>
    .form-page {
        display: none;
    }
    </style>
</head>

<body>

    <div class="container-fluid p-0">
        <div class="jumbotron jumbotron-fluid text-center bg-dark text-white">
            <h1 class="display-4">Define</h1>
            <p class="lead"></p>

        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <form method="POST" action="processar_questionario2.php">

                    <div class="form-group">
                        <label for="tecnologia">A TECNOLOGIA A SER DESENVOLVIDA É UMA INOVAÇÃO:</label>
                        <div>
                            <input type="radio" id="tecnologia-1" name="tecnologia" value="2">
                            <label for="tecnologia-1">Para minha empresa, já existe no mercado</label>
                        </div>
                        <div>
                            <input type="radio" id="tecnologia-2" name="tecnologia" value="4">
                            <label for="tecnologia-2">Para meu Estado</label>
                        </div>
                        <div>
                            <input type="radio" id="tecnologia-3" name="tecnologia" value="4">
                            <label for="tecnologia-3">Para meu país</label>
                        </div>
                        <div>
                            <input type="radio" id="tecnologia-4" name="tecnologia" value="5">
                            <label for="tecnologia-4">Inovação mundial</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="potencial-tecnologico">MEU PROJETO VISA DESENVOLVER:</label>
                        <div>
                            <input type="radio" id="potencial-tecnologico-1" name="potencial-tecnologico" value="5">
                            <label for="potencial-tecnologico-1">Inovação tecnológica: produto, processo ou
                                serviço</label>
                        </div>
                        <div>
                            <input type="radio" id="potencial-tecnologico-2" name="potencial-tecnologico" value="3">
                            <label for="potencial-tecnologico-2">Inovação em modelo de negócio</label>
                        </div>
                        <div>
                            <input type="radio" id="potencial-tecnologico-3" name="potencial-tecnologico" value="2">
                            <label for="potencial-tecnologico-3">Inovação de Método: Marketing e Organizacional</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tipologia-inovacao">MEU PROJETO APRESENTA DE UMA INOVAÇÃO:</label>
                        <div>
                            <input type="radio" id="tipologia-inovacao-1" name="tipologia-inovacao" value="4">
                            <label for="tipologia-inovacao-1">Incremental: Melhorias em produto ou processos</label>
                        </div>
                        <div>
                            <input type="radio" id="tipologia-inovacao-2" name="tipologia-inovacao" value="5">
                            <label for="tipologia-inovacao-2">Disruptiva: Cria novo produto e processo, sem alterar a
                                cadeia
                                de fornecedores existente associada à empresa</label>
                        </div>
                        <div>
                            <input type="radio" id="tipologia-inovacao-3" name="tipologia-inovacao" value="5">
                            <label for="tipologia-inovacao-3">Radical: Cria novo produto e processo que redefine toda a
                                cadeia de fornecedores bem como o mercado</label>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="risco-tecnologico">MEU PROJETO ESTÁ NO TRL:</label>
                        <select class="form-control" id="risco-tecnologico" name="risco-tecnologico">
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
                    <div class="form-group">
                        <label for="impacto_tecnologico">MEU PROJETO PODERÁ GERAR:</label>
                        <div>
                            <input type="radio" id="impacto_tecnologico-1" name="impacto_tecnologico" value="5">
                            <label for="impacto_tecnologico-1">Patente</label>
                        </div>
                        <div>
                            <input type="radio" id="impacto_tecnologico-2" name="impacto_tecnologico"
                                value="5">
                            <label for="impacto_tecnologico-2">Registro de Software</label>
                        </div>
                        <div>
                            <input type="radio" id="impacto_tecnologico-3" name="impacto_tecnologico"
                                value="4">
                            <label for="impacto_tecnologico-3">Desenhos industriais</label>
                        </div>
                        <div>
                            <input type="radio" id="impacto_tecnologico-4" name="impacto_tecnologico"
                                value="2">
                            <label for="impacto_tecnologico-4">Criações artísticas</label>
                        </div>
                        <div>
                            <input type="radio" id="impacto_tecnologico-5" name="impacto_tecnologico"
                                value="1">
                            <label for="impacto_tecnologico-5">Nenhuma alternativa</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="infraestrutura-empresa">MINHA EMPRESA POSSUI INFRA-ESTRUTURA PARA DESENVOLVER O
                            PROJETO:</label>
                        <div>
                            <input type="radio" id="infraestrutura-empresa-1" name="infraestrutura-empresa"
                                value="5">
                            <label for="infraestrutura-empresa-1">Sim, o projeto será desenvolvido na empresa</label>
                        </div>
                        <div>
                            <input type="radio" id="infraestrutura-empresa-2" name="infraestrutura-empresa"
                                value="5">
                            <label for="infraestrutura-empresa-2">Sim, porém apenas parte do projeto será desenvolvido
                                na
                                empresa</label>
                        </div>
                        <div>
                            <input type="radio" id="infraestrutura-empresa-3" name="infraestrutura-empresa"
                                value="4">
                            <label for="infraestrutura-empresa-3">Não, o projeto será desenvolvido na ICT (universidade,
                                instituto de pesquisa, laboratório público) parceira</label>
                        </div>
                        <div>
                            <input type="radio" id="infraestrutura-empresa-4" name="infraestrutura-empresa"
                                value="3">
                            <label for="infraestrutura-empresa-4">Não, o projeto será desenvolvido na empresa
                                contratada/parceira</label>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="parcerias">MEU PROJETO SERÁ DESENVOLVIDO:</label>
                        <div>
                            <input type="radio" id="parcerias-1" name="parcerias"
                                value="5">
                            <label for="parcerias-1">Em parceria com universidade ou instituto de pesquisa</label>
                        </div>
                        <div>
                            <input type="radio" id="parcerias-2" name="parcerias" value="4">
                            <label for="parcerias-2">Em parceria com Startup</label>
                        </div>
                        <div>
                            <input type="radio" id="parcerias-3" name="parcerias" value="4">
                            <label for="parcerias-3">Em parceria com empresa</label>
                        </div>
                        <div>
                            <input type="radio" id="parcerias-4" name="parcerias" value="1">
                            <label for="parcerias-4">Sem parceria</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="impactos-gerais">A APLICAÇÃO DA MINHA SOLUÇÃO TRARÁ IMPACTO PARA SEGUINTES ÁREAS NOS
                            GRAUS:</label>
                        <select class="form-control" id="impactos-gerais" name="impactos-gerais">
                            <option value="0">NÃO SE APLICA</option>
                            <option value="2">BAIXO</option>
                            <option value="4">MODERADO</option>
                            <option value="5">ALTO</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="equipe">MINHA EQUIPEPOSSUI QUALIFICAÇÃO PARA DESENVOLVER MEU PROJETO:</label>
                        <div>
                            <input type="radio" id="equipe-1" name="equipe"
                                value="5">
                            <label for="equipe-1">Sim, a equipe possui qualificação na área do projeto</label>
                        </div>
                        <div>
                            <input type="radio" id="equipe-2" name="equipe"
                                value="3">
                            <label for="equipe-2">Sim, parte da equipe possui qualificação na área do projeto, mas
                                precisaremos contratar outra empresa ou terceiros</label>
                        </div>
                        <div>
                            <input type="radio" id="equipe-3" name="equipe"
                                value="2">
                            <label for="equipe-3">Não, precisaremos contratar outra empresa ou terceiros para
                                desenvolver o
                                projeto</label>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="beneficio-inovacao">MINHA EMPRESA JÁ SE BENEFICIOU COM RECURSOS PÚBLICOS PARA
                            INOVAÇÃO:</label>
                        <div>
                            <input type="radio" id="beneficio-inovacao-1" name="beneficio-inovacao"
                                value="5">
                            <label for="beneficio-inovacao-1">Sim, Subvenção Econômica</label>
                        </div>
                        <div>
                            <input type="radio" id="beneficio-inovacao-2" name="beneficio-inovacao"
                                value="5">
                            <label for="beneficio-inovacao-2">Sim, recurso reembolsável</label>
                        </div>
                        <div>
                            <input type="radio" id="beneficio-inovacao-3" name="beneficio-inovacao"
                                value="5">
                            <label for="beneficio-inovacao-3">Sim, lei de incentivo fiscal para inovação</label>
                        </div>
                        <div>
                            <input type="radio" id="beneficio-inovacao-4" name="beneficio-inovacao"
                                value="3">
                            <label for="beneficio-inovacao-4">Não, mas já tentamos</label>
                        </div>
                        <div>
                            <input type="radio" id="beneficio-inovacao-5" name="beneficio-inovacao"
                                value="2">
                            <label for="beneficio-inovacao-5">Não, nunca tentamos</label>
                        </div>
                    </div>













                <button type="submit" class="btn btn-primary">Enviar</button>

            </form>




        </div>
    </div>

    <div class="container-fluid bg-dark text-white">
        <div class="row">
            <div class="col-md-12 text-center py-5">
                <h2>Assine nossa newsletter</h2>
                <p>Fique por dentro das novidades e promoções</p>
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Seu melhor e-mail">
                    </div>
                    <button type="submit" class="btn btn-primary">Assinar</button>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid bg-light py-3">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; 2023 Minha Página de Landingscap</p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>


<script>
const formPages = document.querySelectorAll('.form-page');
let currentPage = 0;

formPages[currentPage].style.display = 'block';

const nextButton = document.querySelectorAll('.next-button');
nextButton.forEach(button => {
    button.addEventListener('click', e => {
        formPages[currentPage].style.display = 'none';
        currentPage++;
        formPages[currentPage].style.display = 'block';
    });
});

const previousButton = document.querySelectorAll('.previous-button');
previousButton.forEach(button => {
    button.addEventListener('click', e => {
        formPages[currentPage].style.display = 'none';
        currentPage--;
        formPages[currentPage].style.display = 'block';
    });
});

const submitButton = document.querySelector('.submit-button');
submitButton.addEventListener('click', e => {
    // Submit the form data
});
</script>