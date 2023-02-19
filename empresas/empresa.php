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
                <h2>Cadastro de Empresa</h2>
                <form method="post" action="salvar.php">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="nome_empresa">Nome da Empresa:</label>
                        <input type="text" class="form-control" id="nome_empresa" name="nome_empresa" required>
                    </div>
                    <div class="form-group">
                        <label for="cnpj">CNPJ:</label>
                        <input type="text" class="form-control" id="cnpj" name="cnpj" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="whatsapp">Whatsapp:</label>
                        <input type="text" class="form-control" id="whatsapp" name="whatsapp" required>
                    </div>
                    <div class="form-group">
                        <label for="uf">UF:</label>
                        <select class="form-control" id="uf" name="uf" required>
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
                            <option value="PE">P</option>

                        </select>


                    </div>

                    <div class="form-group">
                        <label for="setor">Setor:</label>
                        <input type="text" class="form-control" id="setor" placeholder="Digite o setor" name="setor">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
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