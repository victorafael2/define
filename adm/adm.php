<?php include '../header.php' ?>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main">
        <div class="container-fluid px-0">
            <?php include '../nav.php' ?>

            <div class="container py-10">

                <div class="container py-1">

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-2 row-cols-xxl-4 g-3 mb-9">
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex flex-between-center pb-3 border-bottom mb-4">
                                        <h3 class="flex-1 mb-0 lh-sm line-clamp-1">Lista de Usuarios</h3>

                                    </div>

                                <?php
                                  // Conecta ao banco de dados
                                  // $mysqli = new mysqli('localhost', 'usuario', 'senha', 'nome_do_banco');

                                  // Verifica se o formulário foi enviado
                                  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                      $usuario_id = $_POST['usuario_id'];
                                      $privilegios = $_POST['privilegios'];

                                      // Atualiza os privilégios do usuário no banco de dados
                                      $query = "UPDATE empresas SET permissao = '$privilegios' WHERE id = '$usuario_id'";
                                      $conn->query($query);
                                  }

                                  // Busca os usuários cadastrados
                                  $query = "SELECT * FROM empresas";
                                  $result = $conn->query($query);

                                  // Exibe os usuários em uma tabela
                                  echo '<div class="table-responsive">';

                                  echo '<form method="POST" action="<?php echo $url ?>/adm.php">';
                                  echo '<table class="table table-sm table-stripped table-hover">';
                                  echo '<thead>';
                                  echo '<tr>';
                                  echo '<th>ID</th>';
                                  echo '<th>Nome</th>';
                                  echo '<th>Empresa</th>';
                                  echo '<th>Email</th>';
                                  echo '<th>Privilégios</th>';

                                  echo '</tr>';
                                  echo '</thead>';
                                  echo '<tbody>';
                                  while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>
                                            <td>".$row["id"]."</td>
                                            <td>".$row["nome"]."</td>
                                            <td>".$row["empresa"]."</td>
                                            <td>".$row["email"]."</td>

                                            <td>
                                              <select class='form-select' aria-label='Selecionar perfil' onchange='mudarPerfil(".$row["id"].", this.value)'>
                                                <option value='administrador'".($row["permissao"] == "adm" ? " selected" : "").">Administrador</option>
                                                <option value='usuario'".($row["permissao"] != "adm" ? " selected" : "").">Usuário</option>
                                              </select>
                                            </td>
                                          </tr>";
                                }

                                echo "</tbody></table>";
                                  echo '</form>';
                                  echo '</div>';


                                  // Fecha a conexão com o banco de dados
                                  // $mysqli->close();
                                  ?>



                                </div>



                            </div>
                        </div>

                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex flex-between-center pb-3 border-bottom mb-4">
                                    <h3 class="flex-1 mb-0 lh-sm line-clamp-1">Videos de Diagnostico</h3>

                                </div>

                            </div>



                        </div>

                    </div>

                </div>



            </div>

            <?php include '../footer.php' ?>


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script>
    $(document).ready(function() {
        $('.redirectToPage').on('click', function() {
            window.location.href = $(this).data('href');
        });
    });
    </script>



<script>
function mudarPerfil(id, perfil) {
  $.ajax({
    url: "update/mudar_perfil.php",
    type: "POST",
    data: {id: id, perfil: perfil},
    success: function() {
      alert("Perfil alterado com sucesso!");
    },
    error: function() {
      alert("Não foi possível alterar o perfil do usuário.");
    }
  });
}


</script>


</body>

</html>