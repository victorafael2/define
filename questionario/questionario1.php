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
</head>

<body>

    <div class="container-fluid p-0">
        <div class="jumbotron jumbotron-fluid text-center bg-dark text-white">
            <h1 class="display-4">Define</h1>
            <p class="lead"></p>
            <!-- <a class="btn btn-primary btn-lg" href="cliente.php" role="button">Cadastrar Minha Empresa</a> -->
        </div>
    </div>

    <div class="container py-5">
        <div class="row">

            <div class="container py-5">
                <h2>Cadastro de Cliente</h2>
                <form action="" method="post">

                    <div class="card">
                        <div class="card-header">
                            <legend>Informações da Minha Empresa</legend>
                        </div>
                        <div class="card-body">
                            <p>
                                <label for="startup_early_stage">Startup early stage (sem faturamento):</label>
                                <input type="radio" name="tamanho_empresa" id="startup_early_stage"
                                    value="startup_early_stage" />
                            </p>
                            <p>
                                <label for="startup">Startup (R$ 0 a R$ 4,8milhões):</label>
                                <input type="radio" name="tamanho_empresa" id="startup" value="startup" />
                            </p>
                            <p>
                                <label for="microempresa">Microempresa (até R$ 360mil):</label>
                                <input type="radio" name="tamanho_empresa" id="microempresa" value="microempresa" />
                            </p>
                            <p>
                                <label for="empresa_pequeno_porte">Empresa de pequeno porte (R$ 360.000,01 mil a R$
                                    4,8milhões):</label>
                                <input type="radio" name="tamanho_empresa" id="empresa_pequeno_porte"
                                    value="empresa_pequeno_porte" />
                            </p>
                            <p>
                                <label for="pequena_empresa">Pequena Empresa (De R$ 4.800.000,01 a R$
                                    16.000.000,00):</label>
                                <input type="radio" name="tamanho_empresa" id="pequena_empresa"
                                    value="pequena_empresa" />
                            </p>
                            <p>
                                <label for="media_empresa">Media Empresa (De R$ 16.000.000,01 a R$
                                    90.000.000,00):</label>
                                <input type="radio" name="tamanho_empresa" id="media_empresa" value="media_empresa" />
                            </p>
                            <p>
                                <label for="media_grande">Media Grande (De R$ 90.000.000,01 a R$
                                    300.000.000,00):</label>
                                <input type="radio" name="tamanho_empresa" id="media_grande" value="media_grande" />
                            </p>
                            <p>
                                <label for="grande_empresa">Grande Empresa (Acima de R$ 300.000.000,01):</label>
                                <input type="radio" name="tamanho_empresa" id="grande_empresa" value="grande_empresa" />
                            </p>
                        </div>
                    </div>


<br>

                    <div class="card">
                        <div class="card-header">
                            <legend>Inovação Técnológica</legend>
                        </div>
                        <div class="card-body">
                            <label>
                                <input type="radio" name="regime_tributario" value="Lucro Real"> Lucro Real
                            </label>

                            <label>
                                <input type="radio" name="regime_tributario" value="Lucro Presumido"> Lucro Presumido
                            </label>

                            <label>
                                <input type="radio" name="regime_tributario" value="Simples Nacional"> Simples Nacional
                            </label>
                        </div>
                    </div>
                    <br>


                    <div class="card">
                        <div class="card-header">
                            <legend>Inovação Técnológica</legend>
                        </div>
                        <div class="card-body">
                            <p>
                                <label for="mercado">Para minha empresa, já existe no mercado:</label>
                                <input type="radio" name="inovacao" id="mercado" value="mercado" />
                            </p>
                            <p>
                                <label for="estado">Para meu Estado:</label>
                                <input type="radio" name="inovacao" id="estado" value="estado" />
                            </p>
                            <p>
                                <label for="pais">Para meu país:</label>
                                <input type="radio" name="inovacao" id="pais" value="pais" />
                            </p>
                            <p>
                                <label for="mundial">Inovação mundial:</label>
                                <input type="radio" name="inovacao" id="mundial" value="mundial" />
                            </p>
                        </div>
                    </div>


                    <br>

                    <div class="card">
                        <div class="card-header">
                            <legend>Desenvolvimento</legend>
                        </div>
                        <div class="card-body">
                            <label>Meu projeto visa desenvolver:</label><br>
                            <input type="radio" name="innovation" value="technology" />Inovação tecnológica: produto,
                            processo ou serviço<br />
                            <input type="radio" name="innovation" value="business" />Inovação em modelo de negócio<br />
                            <input type="radio" name="innovation" value="method" />Inovação de Método: Marketing e
                            Organizacional<br />
                        </div>
                    </div>


                    <br>


                    <div class="card">
                        <div class="card-header">
                            <legend>Inovação</legend>
                        </div>
                        <div class="card-body">
                            <label>Meu projeto apresenta de uma inovação:</label><br>
                            <input type="radio" name="innovation" value="incremental" />Incremental: Melhorias em
                            produto ou processos<br />
                            <input type="radio" name="innovation" value="disruptive" />Disruptiva: Cria novo produto e
                            processo, sem alterar a cadeia de fornecedores existente associada à empresa<br />
                            <input type="radio" name="innovation" value="radical" />Radical: Cria novo produto e
                            processo que redefine toda a cadeia de fornecedores bem como o mercado<br />
                        </div>
                    </div>




                    <br>



                    <div class="card">
                        <div class="card-header">
                            <legend>Inovação</legend>
                        </div>
                        <div class="card-body">
                            <label for="trl">Meu projeto está no TRL:</label><br>
                            <select id="trl" name="trl">
                                <option value="trl0">TRL0</option>
                                <option value="trl1">TRL1</option>
                                <option value="trl2">TRL2</option>
                                <option value="trl3">TRL3</option>
                                <option value="trl4">TRL4</option>
                                <option value="trl5">TRL5</option>
                                <option value="trl6">TRL6</option>
                                <option value="trl7">TRL7</option>
                                <option value="trl8">TRL8</option>
                                <option value="trl9">TRL9</option>
                            </select>
                        </div>
                    </div>



                    <br>


                    <div class="card">
                        <div class="card-header">
                            <legend>Inovação</legend>
                        </div>
                        <div class="card-body">
                            <label>Meu projeto poderá gerar:</label><br>
                            <input type="radio" name="generation" value="patent" />Patente<br />
                            <input type="radio" name="generation" value="software" />Registro de Software<br />
                            <input type="radio" name="generation" value="industrial" />Desenhos industriais<br />
                            <input type="radio" name="generation" value="artistic" />Criações artísticas<br />
                            <input type="radio" name="generation" value="none" />Nenhuma alternativa<br />
                        </div>
                    </div>


                    <br>


                    <div class="card">
                        <div class="card-header">
                            <h3>Infraestrutura para desenvolver o projeto</h3>
                        </div>
                        <div class="card-body">
                            <label><input type="radio" name="infraestrutura"
                                    value="Sim, o projeto será desenvolvido na empresa">Sim, o
                                projeto será
                                desenvolvido na empresa</label><br>
                            <label><input type="radio" name="infraestrutura"
                                    value="Sim, porém apenas parte do projeto será desenvolvido na empresa">Sim, porém
                                apenas parte
                                do projeto será
                                desenvolvido na empresa</label><br>
                            <label><input type="radio" name="infraestrutura"
                                    value="Não, o projeto será desenvolvido na ICT (universidade, instituto de pesquisa, laboratório público) parceira">Não,
                                o projeto será desenvolvido na ICT (universidade, instituto de pesquisa, laboratório
                                público)
                                parceira</label><br>
                            <label><input type="radio" name="infraestrutura"
                                    value="Não, o projeto será desenvolvido na empresa contratada/parceira">Não, o
                                projeto será
                                desenvolvido na
                                empresa contratada/parceira</label><br>
                        </div>
                    </div>

                    <br>

                    <div class="card">
                        <div class="card-header">
                            <h3>Desenvolvimento do projeto</h3>
                        </div>
                        <div class="card-body">
                            <input type="radio" id="parceria1" name="desenvolvimento"
                                value="Em parceria com universidade ou instituto de pesquisa">
                            <label for="parceria1">Em parceria com universidade ou instituto de pesquisa</label><br>
                            <input type="radio" id="parceria2" name="desenvolvimento" value="Em parceria com Startup">
                            <label for="parceria2">Em parceria com Startup</label><br>
                            <input type="radio" id="parceria3" name="desenvolvimento" value="Em parceria com empresa">
                            <label for="parceria3">Em parceria com empresa</label><br>
                            <input type="radio" id="parceria4" name="desenvolvimento" value="Sem parceria">
                            <label for="parceria4">Sem parceria</label><br>
                        </div>
                    </div>

<br>
                    <div class="card">
                        <div class="card-header">
                            <h3>Qualificação da equipe</h3>
                        </div>
                        <div class="card-body">
                            <label>
                                <input type="radio" name="qualificacao"
                                    value="Sim, a equipe possui qualificação na área do projeto">
                                Sim, a equipe possui qualificação na área do projeto
                            </label>
                            <br>
                            <label>
                                <input type="radio" name="qualificacao"
                                    value="Sim, parte da equipe possui qualificação na área do projeto, mas precisaremos contratar outra empresa ou terceiros">
                                Sim, parte da equipe possui qualificação na área do projeto, mas precisaremos contratar
                                outra empresa ou terceiros
                            </label>
                            <br>
                            <label>
                                <input type="radio" name="qualificacao"
                                    value="Não, precisaremos contratar outra empresa ou terceiros para desenvolver o projeto">
                                Não, precisaremos contratar outra empresa ou terceiros para desenvolver o projeto
                            </label>
                            <br>
                        </div>
                    </div>

                    <br>
                    <div class="card">
                        <div class="card-header">
                            <h3>Recursos Públicos</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="recursos" id="recurso1"
                                    value="Sim, Recurso Não-Reembolsável (Subvenção Econômica)">
                                <label class="form-check-label" for="recurso1">Sim, Recurso Não-Reembolsável (Subvenção
                                    Econômica)</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="recursos" id="recurso2"
                                    value="Sim, Recurso reembolsável (financiamento para inovação)">
                                <label class="form-check-label" for="recurso2">Sim, Recurso reembolsável (financiamento
                                    para inovação)</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="recursos" id="recurso3"
                                    value="Sim, Lei de incentivo fiscal para inovação">
                                <label class="form-check-label" for="recurso3">Sim, Lei de incentivo fiscal para
                                    inovação</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="recursos" id="recurso4"
                                    value="Não, mas já tentamos">
                                <label class="form-check-label" for="recurso4">Não, mas já tentamos</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="recursos" id="recurso5"
                                    value="Não, nunca tentamos">
                                <label class="form-check-label" for="recurso5">Não, nunca tentamos</label>
                            </div>
                        </div>
                    </div>
                    <br>

                    <input class="btn btn-sm btn-success" type="submit" value="Enviar">

                </form>

            </div>
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