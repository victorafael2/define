<?php include '../header.php' ?>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">

<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main">
        <div class="container-fluid px-0">
            <?php include '../nav.php' ?>

            <div class="container py-10">
                <div class="row">
                    <div class="card h-100">
                        <div class="card-body">

                            <!-- ============================================-->
                            <!-- <section> begin ============================-->
                            <section class="pt-5 pb-9">

                                <div class="container-small">

                                    <div class="row align-items-center justify-content-between g-3 mb-4">
                                        <div class="col-auto">
                                            <h2 class="mb-0">Perfil</h2>
                                        </div>
                                        <div class="col-auto">
                                            <div class="row g-2 g-sm-3">
                                                <!-- <div class="col-auto">
                  <button class="btn btn-phoenix-danger"><span class="fas fa-trash-alt me-2"></span>Delete customer</button>
                </div> -->
                                                <div class="col-auto">
                                                    <a class="btn btn-phoenix-secondary redirectToPage"
                                                        data-href="../questionario/questionario.php"><span
                                                            class="fas fa-clipboard me-2"></span>Novo Questionário</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-6">
                                        <div class="col-12 col-lg-8">
                                            <div class="card h-100">
                                                <div class="card-body">
                                                    <div class="border-bottom border-dashed border-300 pb-4">
                                                        <div
                                                            class="row align-items-center g-3 g-sm-5 text-center text-sm-start">
                                                            <div class="col-12 col-sm-auto">
                                                                <!-- <input class="d-none" id="avatarFile" type="file" /> -->
                                                                <label class="cursor-pointer avatar avatar-5xl"
                                                                    for="avatarFile">
                                                                    <img class="avatar-name rounded-circle"
                                                                        id="img_profile" alt="" />

                                                                </label>
                                                            </div>
                                                            <div class="col-12 col-sm-auto flex-1">
                                                                <h3><?php echo $first_name ?></h3>
                                                                <p class="text-800"><?php echo $empresa ?></p>
                                                                <!-- <div><a class="me-2" href="#!"><span class="fab fa-linkedin-in text-400 hover-primary"></span></a><a class="me-2" href="#!"><span class="fab fa-facebook text-400 hover-primary"></span></a><a href="#!"><span class="fab fa-twitter text-400 hover-primary"></span></a></div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-between-center pt-4">
                                                        <div>
                                                            <h6 class="mb-2 text-800">CNPJ</h6>
                                                            <h4 class="fs-1 text-1000 mb-0"><?php echo $cnpj ?></h4>
                                                        </div>
                                                        <div class="text-end">
                                                            <h6 class="mb-2 text-800">Ultimo questionario feito</h6>
                                                            <h4 class="fs-1 text-1000 mb-0">
                                                                <?php echo "Há " . $days . " dias<br>";  ?></h4>
                                                        </div>
                                                        <div class="text-end">
                                                            <h6 class="mb-2 text-800">Questionarios feitos</h6>
                                                            <h4 class="fs-1 text-1000 mb-0">
                                                                <?php echo $contagem_questionarios ?></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="card h-100">
                                                <div class="card-body">
                                                    <div class="border-bottom border-dashed border-300">
                                                        <h4 class="mb-3 lh-sm lh-xl-1">Endereço
                                                            <!-- <button class="btn btn-link p-0" type="button"> <span class="fas fa-edit fs--1 ms-3 text-500"></span></button> -->
                                                        </h4>
                                                    </div>
                                                    <div class="pt-4 mb-7 mb-lg-4 mb-xl-7">
                                                        <div class="row justify-content-between">
                                                            <div class="col-auto">
                                                                <h5 class="text-1000">Estado</h5>
                                                            </div>
                                                            <div class="col-auto">
                                                                <p class="text-800"><?php echo $uf ?><br />Brasil</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-top border-dashed border-300 pt-4">
                                                        <div class="row flex-between-center mb-2">
                                                            <div class="col-auto">
                                                                <h5 class="text-1000 mb-0">Email</h5>
                                                            </div>
                                                            <div class="col-auto"><a class="lh-1"
                                                                    href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
                                                            </div>
                                                        </div>
                                                        <div class="row flex-between-center">
                                                            <div class="col-auto">
                                                                <h5 class="text-1000 mb-0">Whatapp</h5>
                                                            </div>
                                                            <div class="col-auto"><a class="text-800"
                                                                    href="tel:<?php echo $whatsapp ?>"><?php echo $whatsapp ?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="scrollbar">
                                            <ul class="nav nav-underline flex-nowrap mb-3 pb-1" id="myTab"
                                                role="tablist">
                                                <li class="nav-item me-3"><a class="nav-link text-nowrap active"
                                                        id="orders-tab" data-bs-toggle="tab" href="#tab-orders"
                                                        role="tab" aria-controls="tab-orders" aria-selected="true"><span
                                                            class="fas fa-clipboard me-2"></span>Questionarios
                                                        respondidos <span class="text-700 fw-normal"></span></a>
                                                </li>

                                                <?php if ($permissao != "user") {
                                                     echo '<li class="nav-item me-3 <?php echo $permissao_class ?> "><a
                                                    class="nav-link text-nowrap" id="reviews-tab" data-bs-toggle="tab"
                                                    href="#tab-reviews" role="tab" aria-controls="tab-orders"
                                                    aria-selected="true"><span class="fas fa-star me-2"></span>Lista de
                                                    Usuarios<span class="text-700 fw-normal"></span></a></li>'; } ?>



                                                <?php if ($permissao != "user") {
                                                     echo '<li class="nav-item me-3 <?php echo $permissao_class ?> "><a
                                                    class="nav-link text-nowrap" id="reviews-tab" data-bs-toggle="tab"
                                                    href="#tab-video" role="tab" aria-controls="tab-orders"
                                                    aria-selected="true"><span class="fas fa-film me-2"></span>Videos
                                                    de Beneficios<span class="text-700 fw-normal"></span></a></li>'; } ?>
                                                <!--  <li class="nav-item me-3"><a class="nav-link text-nowrap" id="wishlist-tab" data-bs-toggle="tab" href="#tab-wishlist" role="tab" aria-controls="tab-orders" aria-selected="true"><span class="fas fa-heart me-2"></span>Wishlist</a></li>
                <li class="nav-item me-3"><a class="nav-link text-nowrap" id="stores-tab" data-bs-toggle="tab" href="#tab-stores" role="tab" aria-controls="tab-stores" aria-selected="true"><span class="fas fa-home me-2"></span>Stores</a></li>
                <li class="nav-item"><a class="nav-link text-nowrap" id="personal-info-tab" data-bs-toggle="tab" href="#tab-personal-info" role="tab" aria-controls="tab-personal-info" aria-selected="true"><span class="fas fa-user me-2"></span>Personal info</a></li> -->
                                            </ul>
                                        </div>
                                        <div class="tab-content" id="profileTabContent">
                                            <div class="tab-pane fade show active" id="tab-orders" role="tabpanel"
                                                aria-labelledby="orders-tab">
                                                <div class="border-top border-bottom border-200" id="profileOrdersTable"
                                                    data-list='{"valueNames":["order","status","delivery","date","total"],"page":6,"pagination":true}'>
                                                    <div class="table-responsive scrollbar">
                                                        <?php


                                                              // Consulta SQL para selecionar todos os usuários

                                                              $sql_query = $permissao == "user" ? "SELECT empresas.*, questionario2.*, adm_setores.setor as setor_2
                                                              FROM empresas
                                                              INNER JOIN questionario2 ON empresas.email = questionario2.user
                                                              INNER JOIN adm_setores ON empresas.setor = adm_setores.id WHERE user = '$nome_logado'" : "SELECT empresas.*, questionario2.*, adm_setores.setor as setor_2
                                                              FROM empresas
                                                              INNER JOIN questionario2 ON empresas.email = questionario2.user
                                                              INNER JOIN adm_setores ON empresas.setor = adm_setores.id";
                                                              $sql =  $sql_query;
                                                              $result = $conn->query($sql);

                                                              // echo $sql_query;

                                                              if ($result->num_rows > 0) {
                                                                  echo "<table class='table table-striped table-sm table-hover'>";
                                                                  echo "<thead><tr><th>ID</th><th>Empresa</th><th>CNPJ</th><th>Contato</th><th>Porte</th><th>Setor</th><th>Ver</th><th>Fez Contato</th><th>Relato</th></tr></thead>";
                                                                  echo "<tbody>";

                                                                  // Percorrendo os resultados e adicionando-os à tabela HTML
                                                                  while($row = $result->fetch_assoc()) {
                                                                    $relato = htmlspecialchars(isset($row["relato"]) ? $row["relato"] : '');
                                                                      echo "<tr>";
                                                                      echo "<td>" . $row["id"] . "</td>";
                                                                      echo "<td>" . $row["empresa"] . "</td>";
                                                                      echo "<td>" . $row["cnpj"] . "</td>";
                                                                      echo "<td>" . $row["whatsapp"] . "</td>";
                                                                      echo "<td>" . $row["faturamento"] . "</td>";
                                                                      echo "<td>" . $row["setor_2"] . "</td>";
                                                                      echo "<td><button class='btn btn-success btn-sm redirectToPage' data-href='../questionario/sucess.php?id=" . $row["id"] . "&email=" . $row["user"] . "'>Ver</button></td>";
                                                                      echo "<td>
                                                                      <select class='form-select'
                                                                          aria-label='Fez Contato'
                                                                          onchange='fezContato(".$row["id"].", this.value)'>
                                                                          <option value='sim'".($row["fez_contato"]=="sim" ? " selected" : ""
                                                                              )."><i class='fa fa-user'></i>Sim<span
                                                                              class='fas fa-clipboard me-2'></span></option>
                                                                          <option value='nao'".($row["fez_contato"]
                                                                              !="sim" ? " selected" : "" ).">Não
                                                                          </option>
                                                                      </select>
                                                                  </td>";
                                                                  echo '<td> <div class="input-group"><input type="text" class="form-control"  id="campo_'.$row["id"].'" value="' . $relato . '" data-toggle="tooltip" data-placement="bottom" title="' . $relato . '"> <button type="button" class="btn btn-success" onclick="atualizarCampo('.$row["id"].')"><span class="text-ligth" data-feather="check-circle" ></span></button></div></td>';
                                                                      echo "</tr>";
                                                                  }
                                                                  echo "</tbody>";
                                                                  echo "</table>";
                                                              } else {
                                                                  echo "0 Questionarios";
                                                              }

                                                              // Fechando a conexão com o banco de dados
                                                              // $conn->close();
                                                              ?>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab-reviews" role="tabpanel"
                                                aria-labelledby="reviews-tab">
                                                <div class="border-y" id="profileRatingTable"
                                                    data-list='{"valueNames":["product","rating","review","status","date"],"page":6,"pagination":true}'>
                                                    <div class="table-responsive scrollbar">
                                                        <?php if ($permissao != "user") {
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

                                  // echo $result;

                                  // Exibe os usuários em uma tabela
                                  echo '<div class="table-responsive">';

                                  echo '<form method="POST" action="<?php echo $url ?>/adm.php">';
                                                        echo '<table class="table table-sm table-stripped table-hover">
                                                            ';
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
                                                                        <select class='form-select'
                                                                            aria-label='Selecionar perfil'
                                                                            onchange='mudarPerfil(".$row["id"].", this.value)'>
                                                                            <option value='adm'".($row["permissao"]=="adm" ? " selected" : ""
                                                                                ).">Administrador</option>
                                                                            <option value='user'".($row["permissao"]
                                                                                !="adm" ? " selected" : "" ).">Usuário
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>";
                                                                }

                                                                echo "</tbody>
                                                        </table>";
                                                        echo '</form>';
                                                        echo '</div>';
                                                    }

                                                    // Fecha a conexão com o banco de dados
                                                    // $mysqli->close();
                                                    ?>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-video" role="tabpanel"
                                            aria-labelledby="wishlist-tab">
                                            <div class="border-y" id="productWishlistTable"
                                                data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":5,"pagination":true}'>
                                                <div class="table-responsive scrollbar">

                                                    <div class="container">
                                                        <h2>Formulário de atualização</h2>
                                                        <table class="table table-sm ">
                                                            <thead>
                                                                <tr>
                                                                    <th>Descrição</th>
                                                                    <th><span class="far fa-check-circle text-success "></span> Possui incetivo</th>
                                                                    <th><span class="fas fa-info-circle text-info "></span> Não possui incentivo</th>
                                                                    <th>Ação</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                        // Conexão com o banco de dados
                                                                       include '../conexao/conexao.php';

                                                                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                                                                        if (!$conn) {
                                                                        die("Conexão falhou: " . mysqli_connect_error());
                                                                        }

                                                                        // Selecionar todos os registros da tabela "videos"
                                                                        $sql = "SELECT * FROM tabelas";
                                                                        $result = mysqli_query($conn, $sql);

                                                                        // Loop através de todos os registros e exibir os dados em uma tabela HTML
                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                        ?>
                                                                <tr>
                                                                    <td><?php echo $row["descricao"]; ?></td>
                                                                    <td><input type="text" class="form-control youtube-link" name="youtube_link"
                                                                            value="<?php echo $row["sim"]; ?>">
                                                                    </td>
                                                                    <td><input type="text" class="form-control youtube-link" name="outro_campo"
                                                                            value="<?php echo $row["nao"]; ?>">
                                                                    </td>
                                                                    <td>
                                                                        <button type="button"
                                                                            class="btn btn-primary btn-atualizar-video"
                                                                            data-id="<?php echo $row["id"]; ?>">Atualizar</button>
                                                                    </td>
                                                                </tr>
                                                                <?php
    }

    mysqli_close($conn);
    ?>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-stores" role="tabpanel"
                                            aria-labelledby="wishlist-tab">
                                            <div class="border-y mb-6" id="profileStoreTable"
                                                data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":5,"pagination":true}'>
                                                <div class="table-responsive scrollbar">
                                                    <table class="table table-sm fs--1 mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th class="sort white-space-nowrap align-middle fs--2"
                                                                    scope="col" style="width:7%; min-width:80px;">
                                                                </th>
                                                                <th class="sort white-space-nowrap align-middle"
                                                                    scope="col" style="width:20%; min-width:150px;"
                                                                    data-sort="products">VENDOR</th>
                                                                <th class="sort align-middle" scope="col"
                                                                    data-sort="color"
                                                                    style="width:15%; min-width:150px;">STORE RATING
                                                                </th>
                                                                <th class="sort align-middle text-end" scope="col"
                                                                    data-sort="price"
                                                                    style="width:12%; min-width:150px;">ORDERS</th>
                                                                <th class="sort align-middle text-end" scope="col"
                                                                    data-sort="size"
                                                                    style="width:15%; min-width:150px;">TOTAL SPENT
                                                                </th>
                                                                <th class="sort align-middle text-end" scope="col"
                                                                    data-sort="price"
                                                                    style="width:15%; min-width:150px;">LAST ORDER
                                                                </th>
                                                                <th class="sort align-middle text-end pe-0" scope="col"
                                                                    style="width:30%; min-width:150px;">
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="list" id="profile-stores-table-body">
                                                            <tr
                                                                class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                <td class="align-middle white-space-nowrap ps-0 py-0">
                                                                    <img src="../../../assets/img//brand2/dell.png"
                                                                        alt="" width="53" />
                                                                </td>
                                                                <td class="products align-middle"><a
                                                                        class="fw-semi-bold mb-0" href="#!">Dell
                                                                        Technologies</a></td>
                                                                <td
                                                                    class="color align-middle white-space-nowrap fs--1 text-900">
                                                                    <span class="fa fa-star text-warning"></span><span
                                                                        class="fa fa-star text-warning"></span><span
                                                                        class="fa fa-star text-warning"></span><span
                                                                        class="fa fa-star text-warning"></span><span
                                                                        class="fa fa-star text-warning"></span>
                                                                </td>
                                                                <td
                                                                    class="size align-middle white-space-nowrap text-primary fs--1 fw-bold text-end">
                                                                    3</td>
                                                                <td
                                                                    class="price align-middle text-end text-900 fw-semi-bold">
                                                                    $ 23987</td>
                                                                <td class="price align-middle text-700 fs--1 text-end">
                                                                    Dec 12, 12:56 PM</td>
                                                                <td
                                                                    class="total align-middle fw-bold text-1000 text-end">
                                                                    <div
                                                                        class="font-sans-serif btn-reveal-trigger position-static">
                                                                        <button
                                                                            class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            data-boundary="window" aria-haspopup="true"
                                                                            aria-expanded="false"
                                                                            data-bs-reference="parent"><span
                                                                                class="fas fa-ellipsis-h fs--2"></span></button>
                                                                        <div
                                                                            class="dropdown-menu dropdown-menu-end py-2">
                                                                            <a class="dropdown-item"
                                                                                href="#!">View</a><a
                                                                                class="dropdown-item"
                                                                                href="#!">Export</a>
                                                                            <div class="dropdown-divider"></div><a
                                                                                class="dropdown-item text-danger"
                                                                                href="#!">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr
                                                                class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                <td class="align-middle white-space-nowrap ps-0 py-0">
                                                                    <img src="../../../assets/img//brand2/honda.png"
                                                                        alt="" width="53" />
                                                                </td>
                                                                <td class="products align-middle"><a
                                                                        class="fw-semi-bold mb-0" href="#!">Honda</a>
                                                                </td>
                                                                <td
                                                                    class="color align-middle white-space-nowrap fs--1 text-900">
                                                                    <span class="fa fa-star text-warning"></span><span
                                                                        class="fa fa-star text-warning"></span><span
                                                                        class="fa fa-star text-warning"></span><span
                                                                        class="fa-regular fa-star text-warning-300"></span><span
                                                                        class="fa-regular fa-star text-warning-300"></span>
                                                                </td>
                                                                <td
                                                                    class="size align-middle white-space-nowrap text-primary fs--1 fw-bold text-end">
                                                                    5</td>
                                                                <td
                                                                    class="price align-middle text-end text-900 fw-semi-bold">
                                                                    $ 1250</td>
                                                                <td class="price align-middle text-700 fs--1 text-end">
                                                                    Dec 09, 10:48 AM</td>
                                                                <td
                                                                    class="total align-middle fw-bold text-1000 text-end">
                                                                    <div
                                                                        class="font-sans-serif btn-reveal-trigger position-static">
                                                                        <button
                                                                            class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            data-boundary="window" aria-haspopup="true"
                                                                            aria-expanded="false"
                                                                            data-bs-reference="parent"><span
                                                                                class="fas fa-ellipsis-h fs--2"></span></button>
                                                                        <div
                                                                            class="dropdown-menu dropdown-menu-end py-2">
                                                                            <a class="dropdown-item"
                                                                                href="#!">View</a><a
                                                                                class="dropdown-item"
                                                                                href="#!">Export</a>
                                                                            <div class="dropdown-divider"></div><a
                                                                                class="dropdown-item text-danger"
                                                                                href="#!">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr
                                                                class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                <td class="align-middle white-space-nowrap ps-0 py-0">
                                                                    <img src="../../../assets/img//brand2/xiaomi.png"
                                                                        alt="" width="53" />
                                                                </td>
                                                                <td class="products align-middle"><a
                                                                        class="fw-semi-bold mb-0" href="#!">Xiaomi</a>
                                                                </td>
                                                                <td
                                                                    class="color align-middle white-space-nowrap fs--1 text-900">
                                                                    <span class="fa fa-star text-warning"></span><span
                                                                        class="fa fa-star text-warning"></span><span
                                                                        class="fa fa-star text-warning"></span><span
                                                                        class="fa-regular fa-star text-warning-300"></span><span
                                                                        class="fa-regular fa-star text-warning-300"></span>
                                                                </td>
                                                                <td
                                                                    class="size align-middle white-space-nowrap text-primary fs--1 fw-bold text-end">
                                                                    6</td>
                                                                <td
                                                                    class="price align-middle text-end text-900 fw-semi-bold">
                                                                    $ 360</td>
                                                                <td class="price align-middle text-700 fs--1 text-end">
                                                                    Dec 03, 05:45 PM</td>
                                                                <td
                                                                    class="total align-middle fw-bold text-1000 text-end">
                                                                    <div
                                                                        class="font-sans-serif btn-reveal-trigger position-static">
                                                                        <button
                                                                            class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            data-boundary="window" aria-haspopup="true"
                                                                            aria-expanded="false"
                                                                            data-bs-reference="parent"><span
                                                                                class="fas fa-ellipsis-h fs--2"></span></button>
                                                                        <div
                                                                            class="dropdown-menu dropdown-menu-end py-2">
                                                                            <a class="dropdown-item"
                                                                                href="#!">View</a><a
                                                                                class="dropdown-item"
                                                                                href="#!">Export</a>
                                                                            <div class="dropdown-divider"></div><a
                                                                                class="dropdown-item text-danger"
                                                                                href="#!">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr
                                                                class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                <td class="align-middle white-space-nowrap ps-0 py-0">
                                                                    <img src="../../../assets/img//brand/huawei.png"
                                                                        alt="" width="53" />
                                                                </td>
                                                                <td class="products align-middle"><a
                                                                        class="fw-semi-bold mb-0" href="#!">Huawei
                                                                        Shop BD</a></td>
                                                                <td
                                                                    class="color align-middle white-space-nowrap fs--1 text-900">
                                                                    <span class="fa fa-star text-warning"></span><span
                                                                        class="fa fa-star text-warning"></span><span
                                                                        class="fa fa-star text-warning"></span><span
                                                                        class="fa-regular fa-star text-warning-300"></span><span
                                                                        class="fa-regular fa-star text-warning-300"></span>
                                                                </td>
                                                                <td
                                                                    class="size align-middle white-space-nowrap text-primary fs--1 fw-bold text-end">
                                                                    1</td>
                                                                <td
                                                                    class="price align-middle text-end text-900 fw-semi-bold">
                                                                    $1,799</td>
                                                                <td class="price align-middle text-700 fs--1 text-end">
                                                                    Nov 27, 06:20 PM</td>
                                                                <td
                                                                    class="total align-middle fw-bold text-1000 text-end">
                                                                    <div
                                                                        class="font-sans-serif btn-reveal-trigger position-static">
                                                                        <button
                                                                            class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            data-boundary="window" aria-haspopup="true"
                                                                            aria-expanded="false"
                                                                            data-bs-reference="parent"><span
                                                                                class="fas fa-ellipsis-h fs--2"></span></button>
                                                                        <div
                                                                            class="dropdown-menu dropdown-menu-end py-2">
                                                                            <a class="dropdown-item"
                                                                                href="#!">View</a><a
                                                                                class="dropdown-item"
                                                                                href="#!">Export</a>
                                                                            <div class="dropdown-divider"></div><a
                                                                                class="dropdown-item text-danger"
                                                                                href="#!">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr
                                                                class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                <td class="align-middle white-space-nowrap ps-0 py-0">
                                                                    <img src="../../../assets/img//brand2/intel-2.png"
                                                                        alt="" width="53" />
                                                                </td>
                                                                <td class="products align-middle"><a
                                                                        class="fw-semi-bold mb-0" href="#!">Intel</a>
                                                                </td>
                                                                <td
                                                                    class="color align-middle white-space-nowrap fs--1 text-900">
                                                                    <span class="fa fa-star text-warning"></span><span
                                                                        class="fa fa-star text-warning"></span><span
                                                                        class="fa fa-star text-warning"></span><span
                                                                        class="fa fa-star text-warning"></span><span
                                                                        class="fa-regular fa-star text-warning-300"></span>
                                                                </td>
                                                                <td
                                                                    class="size align-middle white-space-nowrap text-primary fs--1 fw-bold text-end">
                                                                    2</td>
                                                                <td
                                                                    class="price align-middle text-end text-900 fw-semi-bold">
                                                                    $65</td>
                                                                <td class="price align-middle text-700 fs--1 text-end">
                                                                    Nov 21, 10:25 AM</td>
                                                                <td
                                                                    class="total align-middle fw-bold text-1000 text-end">
                                                                    <div
                                                                        class="font-sans-serif btn-reveal-trigger position-static">
                                                                        <button
                                                                            class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            data-boundary="window" aria-haspopup="true"
                                                                            aria-expanded="false"
                                                                            data-bs-reference="parent"><span
                                                                                class="fas fa-ellipsis-h fs--2"></span></button>
                                                                        <div
                                                                            class="dropdown-menu dropdown-menu-end py-2">
                                                                            <a class="dropdown-item"
                                                                                href="#!">View</a><a
                                                                                class="dropdown-item"
                                                                                href="#!">Export</a>
                                                                            <div class="dropdown-divider"></div><a
                                                                                class="dropdown-item text-danger"
                                                                                href="#!">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div
                                                    class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                                                    <div class="col-auto d-flex">
                                                        <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900"
                                                            data-list-info="data-list-info"></p><a class="fw-semi-bold"
                                                            href="#!" data-list-view="*">View
                                                            all<span class="fas fa-angle-right ms-1"
                                                                data-fa-transform="down-1"></span></a><a
                                                            class="fw-semi-bold d-none" href="#!"
                                                            data-list-view="less">View Less<span
                                                                class="fas fa-angle-right ms-1"
                                                                data-fa-transform="down-1"></span></a>
                                                    </div>
                                                    <div class="col-auto d-flex">
                                                        <button class="page-link" data-list-pagination="prev"><span
                                                                class="fas fa-chevron-left"></span></button>
                                                        <ul class="mb-0 pagination"></ul>
                                                        <button class="page-link pe-0" data-list-pagination="next"><span
                                                                class="fas fa-chevron-right"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-between-center mb-5">
                                                <div>
                                                    <h3 class="text-1100 mb-2">My Favorites Stores</h3>
                                                    <h5 class="text-700 fw-semi-bold">Essential for a better life
                                                    </h5>
                                                </div>
                                                <button class="btn btn-phoenix-primary">View all</button>
                                            </div>
                                            <div class="row gx-3 gy-5">
                                                <div
                                                    class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                                                    <div class="border d-flex flex-center rounded-3 mb-3 p-4"
                                                        style="height:180px;"><img class="mw-100"
                                                            src="../../../assets/img/brand2/dell.png"
                                                            alt="Dell Technologies" /></div>
                                                    <h5 class="mb-2">Dell Technologies</h5>
                                                    <div class="mb-1 fs--1"><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span>
                                                    </div>
                                                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(1263 people rated)
                                                    </p><a class="btn btn-link p-0" href="#!">Visit Store<span
                                                            class="fas fa-chevron-right ms-1 fs--2"></span></a>
                                                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                                                        <div class="font-sans-serif btn-reveal-trigger">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs--1"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                                                    <div class="border d-flex flex-center rounded-3 mb-3 p-4"
                                                        style="height:180px;"><img class="mw-100"
                                                            src="../../../assets/img/brand2/hp.png"
                                                            alt="HP Global Store" /></div>
                                                    <h5 class="mb-2">HP Global Store</h5>
                                                    <div class="mb-1 fs--1"><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span>
                                                    </div>
                                                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(365 people rated)
                                                    </p><a class="btn btn-link p-0" href="#!">Visit Store<span
                                                            class="fas fa-chevron-right ms-1 fs--2"></span></a>
                                                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                                                        <div class="font-sans-serif btn-reveal-trigger">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs--1"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                                                    <div class="border d-flex flex-center rounded-3 mb-3 p-4"
                                                        style="height:180px;"><img class="mw-100"
                                                            src="../../../assets/img/brand2/honda.png" alt="Honda" />
                                                    </div>
                                                    <h5 class="mb-2">Honda</h5>
                                                    <div class="mb-1 fs--1"><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span>
                                                    </div>
                                                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(596 people rated)
                                                    </p><a class="btn btn-link p-0" href="#!">Visit Store<span
                                                            class="fas fa-chevron-right ms-1 fs--2"></span></a>
                                                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                                                        <div class="font-sans-serif btn-reveal-trigger">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs--1"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                                                    <div class="border d-flex flex-center rounded-3 mb-3 p-4"
                                                        style="height:180px;"><img class="mw-100"
                                                            src="../../../assets/img/brand2/asus-rog.png"
                                                            alt="Asus ROG" /></div>
                                                    <h5 class="mb-2">Asus ROG</h5>
                                                    <div class="mb-1 fs--1"><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span>
                                                    </div>
                                                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(2365 people rated)
                                                    </p><a class="btn btn-link p-0" href="#!">Visit Store<span
                                                            class="fas fa-chevron-right ms-1 fs--2"></span></a>
                                                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                                                        <div class="font-sans-serif btn-reveal-trigger">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs--1"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                                                    <div class="border d-flex flex-center rounded-3 mb-3 p-4"
                                                        style="height:180px;"><img class="mw-100"
                                                            src="../../../assets/img/brand2/yamaha.png" alt="Yamaha" />
                                                    </div>
                                                    <h5 class="mb-2">Yamaha</h5>
                                                    <div class="mb-1 fs--1"><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span>
                                                    </div>
                                                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(1253 people rated)
                                                    </p><a class="btn btn-link p-0" href="#!">Visit Store<span
                                                            class="fas fa-chevron-right ms-1 fs--2"></span></a>
                                                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                                                        <div class="font-sans-serif btn-reveal-trigger">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs--1"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                                                    <div class="border d-flex flex-center rounded-3 mb-3 p-4"
                                                        style="height:180px;"><img class="mw-100"
                                                            src="../../../assets/img/brand2/ibm.png" alt="IBM" />
                                                    </div>
                                                    <h5 class="mb-2">IBM</h5>
                                                    <div class="mb-1 fs--1"><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span>
                                                    </div>
                                                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(996 people rated)
                                                    </p><a class="btn btn-link p-0" href="#!">Visit Store<span
                                                            class="fas fa-chevron-right ms-1 fs--2"></span></a>
                                                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                                                        <div class="font-sans-serif btn-reveal-trigger">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs--1"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                                                    <div class="border d-flex flex-center rounded-3 mb-3 p-4"
                                                        style="height:180px;"><img class="mw-100"
                                                            src="../../../assets/img/brand2/apple-2.png"
                                                            alt="Apple Store" /></div>
                                                    <h5 class="mb-2">Apple Store</h5>
                                                    <div class="mb-1 fs--1"><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span>
                                                    </div>
                                                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(365 people rated)
                                                    </p><a class="btn btn-link p-0" href="#!">Visit Store<span
                                                            class="fas fa-chevron-right ms-1 fs--2"></span></a>
                                                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                                                        <div class="font-sans-serif btn-reveal-trigger">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs--1"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                                                    <div class="border d-flex flex-center rounded-3 mb-3 p-4"
                                                        style="height:180px;"><img class="mw-100"
                                                            src="../../../assets/img/brand2/oppo.png" alt="Oppo" />
                                                    </div>
                                                    <h5 class="mb-2">Oppo</h5>
                                                    <div class="mb-1 fs--1"><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span>
                                                    </div>
                                                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(576 people rated)
                                                    </p><a class="btn btn-link p-0" href="#!">Visit Store<span
                                                            class="fas fa-chevron-right ms-1 fs--2"></span></a>
                                                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                                                        <div class="font-sans-serif btn-reveal-trigger">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs--1"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                                                    <div class="border d-flex flex-center rounded-3 mb-3 p-4"
                                                        style="height:180px;"><img class="mw-100"
                                                            src="../../../assets/img/brand2/redragon.png"
                                                            alt="Redragon" /></div>
                                                    <h5 class="mb-2">Redragon</h5>
                                                    <div class="mb-1 fs--1"><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span>
                                                    </div>
                                                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(1125 people rated)
                                                    </p><a class="btn btn-link p-0" href="#!">Visit Store<span
                                                            class="fas fa-chevron-right ms-1 fs--2"></span></a>
                                                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                                                        <div class="font-sans-serif btn-reveal-trigger">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs--1"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                                                    <div class="border d-flex flex-center rounded-3 mb-3 p-4"
                                                        style="height:180px;"><img class="mw-100"
                                                            src="../../../assets/img/brand2/xbox.png"
                                                            alt="Microsoft XBOX" /></div>
                                                    <h5 class="mb-2">Microsoft XBOX</h5>
                                                    <div class="mb-1 fs--1"><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span>
                                                    </div>
                                                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(830 people rated)
                                                    </p><a class="btn btn-link p-0" href="#!">Visit Store<span
                                                            class="fas fa-chevron-right ms-1 fs--2"></span></a>
                                                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                                                        <div class="font-sans-serif btn-reveal-trigger">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs--1"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                                                    <div class="border d-flex flex-center rounded-3 mb-3 p-4"
                                                        style="height:180px;"><img class="mw-100"
                                                            src="../../../assets/img/brand2/lenovo.png" alt="Lenovo" />
                                                    </div>
                                                    <h5 class="mb-2">Lenovo</h5>
                                                    <div class="mb-1 fs--1"><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span>
                                                    </div>
                                                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(1032 people rated)
                                                    </p><a class="btn btn-link p-0" href="#!">Visit Store<span
                                                            class="fas fa-chevron-right ms-1 fs--2"></span></a>
                                                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                                                        <div class="font-sans-serif btn-reveal-trigger">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs--1"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                                                    <div class="border d-flex flex-center rounded-3 mb-3 p-4"
                                                        style="height:180px;"><img class="mw-100"
                                                            src="../../../assets/img/brand2/xiaomi.png" alt="Xiaomi" />
                                                    </div>
                                                    <h5 class="mb-2">Xiaomi</h5>
                                                    <div class="mb-1 fs--1"><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span>
                                                    </div>
                                                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(965 people rated)
                                                    </p><a class="btn btn-link p-0" href="#!">Visit Store<span
                                                            class="fas fa-chevron-right ms-1 fs--2"></span></a>
                                                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                                                        <div class="font-sans-serif btn-reveal-trigger">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs--1"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-personal-info" role="tabpanel"
                                            aria-labelledby="personal-info-tab">
                                            <div class="row g-3 mb-5">
                                                <div class="col-12 col-lg-6">
                                                    <label class="form-label text-1000 fs-0 ps-0 text-capitalize lh-sm"
                                                        for="fullName">Full name</label>
                                                    <input class="form-control" id="fullName" type="text"
                                                        placeholder="Full name" />
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label class="form-label text-1000 fs-0 ps-0 text-capitalize lh-sm"
                                                        for="gender">Gender</label>
                                                    <select class="form-select" id="gender">
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="non-binary">Non-binary</option>
                                                        <option value="not-to-say">Prefer not to say</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label class="form-label text-1000 fs-0 ps-0 text-capitalize lh-sm"
                                                        for="email">Email</label>
                                                    <input class="form-control" id="email" type="text"
                                                        placeholder="Email" />
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <div class="row g-2 gy-lg-0">
                                                        <label
                                                            class="form-label text-1000 fs-0 ps-1 text-capitalize lh-sm">Date
                                                            of birth</label>
                                                        <div class="col-6 col-sm-2 col-lg-3 col-xl-2">
                                                            <select class="form-select" id="date">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                                <option value="25">25</option>
                                                                <option value="26">26</option>
                                                                <option value="27">27</option>
                                                                <option value="28">28</option>
                                                                <option value="29">29</option>
                                                                <option value="30">30</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6 col-sm-2 col-lg-3 col-xl-2">
                                                            <select class="form-select" id="month">
                                                                <option value="Jan">Jan</option>
                                                                <option value="Feb">Feb</option>
                                                                <option value="Mar">Mar</option>
                                                                <option value="Apr">Apr</option>
                                                                <option value="May">May</option>
                                                                <option value="Jun">Jun</option>
                                                                <option value="Jul">Jul</option>
                                                                <option value="Aug">Aug</option>
                                                                <option value="Sep">Sep</option>
                                                                <option value="Oct">Oct</option>
                                                                <option value="Nov">Nov</option>
                                                                <option value="Dec">Dec</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-sm-8 col-lg-6 col-xl-8">
                                                            <select class="form-select" id="year">
                                                                <option value="1990">1990</option>
                                                                <option value="1991">1991</option>
                                                                <option value="1992">1992</option>
                                                                <option value="1993">1993</option>
                                                                <option value="1994">1994</option>
                                                                <option value="1995">1995</option>
                                                                <option value="1996">1996</option>
                                                                <option value="1997">1997</option>
                                                                <option value="1998">1998</option>
                                                                <option value="1999">1999</option>
                                                                <option value="2000">2000</option>
                                                                <option value="2001">2001</option>
                                                                <option value="2002">2002</option>
                                                                <option value="2003">2003</option>
                                                                <option value="2004">2004</option>
                                                                <option value="2005">2005</option>
                                                                <option value="2006">2006</option>
                                                                <option value="2007">2007</option>
                                                                <option value="2008">2008</option>
                                                                <option value="2009">2009</option>
                                                                <option value="2010">2010</option>
                                                                <option value="2011">2011</option>
                                                                <option value="2012">2012</option>
                                                                <option value="2013">2013</option>
                                                                <option value="2014">2014</option>
                                                                <option value="2015">2015</option>
                                                                <option value="2016">2016</option>
                                                                <option value="2017">2017</option>
                                                                <option value="2018">2018</option>
                                                                <option value="2019">2019</option>
                                                                <option value="2020">2020</option>
                                                                <option value="2021">2021</option>
                                                                <option value="2022">2022</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label
                                                        class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm"
                                                        for="phone">Phone</label>
                                                    <input class="form-control" id="phone" type="text"
                                                        placeholder="+1234567890" />
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label
                                                        class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm"
                                                        for="alternative_phone">Alternative phone</label>
                                                    <input class="form-control" id="alternative_phone" type="text"
                                                        placeholder="+1234567890" />
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <label
                                                        class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm"
                                                        for="facebook">Facebook</label>
                                                    <input class="form-control" id="facebook" type="text"
                                                        placeholder="Facebook" />
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <label
                                                        class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm"
                                                        for="instagram">Instagram</label>
                                                    <input class="form-control" id="instagram" type="text"
                                                        placeholder="Instagram" />
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <label
                                                        class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm"
                                                        for="twitter">Twitter</label>
                                                    <input class="form-control" id="twitter" type="text"
                                                        placeholder="Twitter" />
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <button class="btn btn-primary px-7">Save changes</button>
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
            data: {
                id: id,
                perfil: perfil
            },
            success: function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Perfil alterado com sucesso!',
                    showConfirmButton: false,
                    timer: 1500
                });
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Não foi possível alterar o perfil do usuário.',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    }
    </script>


    <script>
    function fezContato(id, contato) {
        $.ajax({
            url: "update/fez_contato.php",
            type: "POST",
            data: {
                id: id,
                contato: contato
            },
            success: function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Contato Feito!',
                    showConfirmButton: false,
                    timer: 1500
                });
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Não foi possível alterar o status.',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    }
    </script>



    <script>
    // Cria um elemento SVG com a letra 'A'
    var svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    svg.setAttribute("width", "100");
    svg.setAttribute("height", "100");
    var text = document.createElementNS("http://www.w3.org/2000/svg", "text");
    text.setAttribute("x", "50%");
    text.setAttribute("y", "50%");
    text.setAttribute("font-family", "Arial");
    text.setAttribute("font-size", "40");
    text.setAttribute("text-anchor", "middle"); // define o ponto de ancoragem para o centro do texto
    text.setAttribute("dominant-baseline", "central"); // define a linha de base para o centro do texto
    text.setAttribute("fill", "grey"); // Altera a cor da fonte do texto SVG
    text.textContent = "<?php echo $duas_iniciais ?>";
    svg.appendChild(text);

    // Converte o elemento SVG em uma string SVG
    var svgString = new XMLSerializer().serializeToString(svg);

    // Define a string SVG como o src da imagem
    var img = document.getElementById("img_profile");


    img.setAttribute("src", "data:image/svg+xml;base64," + btoa(svgString));
    </script>




    <script>
    function atualizarCampo(id) {
        // Recupera o valor do campo
        var novoValor = document.getElementById("campo_" + id).value;

        // Exibe uma notificação de confirmação ao usuário
        Swal.fire({
            title: 'Tem certeza?',
            text: 'Deseja atualizar o valor do campo?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, atualizar!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Envia a requisição AJAX para atualizar o campo no banco de dados
                $.ajax({
                    url: 'update/atualizar_campo.php',
                    type: 'POST',
                    data: {
                        id: id,
                        valor: novoValor
                    },
                    success: function(response) {
                        // Mostra uma notificação de sucesso
                        Swal.fire({
                            title: 'Sucesso!',
                            text: 'O valor do campo foi atualizado.',
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        });
                    },
                    error: function() {
                        // Mostra uma notificação de erro
                        Swal.fire({
                            title: 'Oops...',
                            text: 'Houve um erro ao atualizar o valor do campo.',
                            icon: 'error',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            }
        });
    }
    </script>

    <script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
    </script>



    <script>
    $(document).ready(function() {
        $(".btn-atualizar-video").click(function() {
            // Obter o ID do registro e os valores dos campos de entrada
            var id = $(this).data("id");
            var youtubeLink = $(this).closest("tr").find("input[name='youtube_link']").val();
            var outroCampo = $(this).closest("tr").find("input[name='outro_campo']").val();

            // Exibir uma mensagem de confirmação com o SweetAlert2
            Swal.fire({
                title: 'Tem certeza?',
                text: "Você deseja atualizar este registro?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Enviar uma solicitação AJAX para atualizar o registro no banco de dados
                    $.ajax({
                        url: 'update/atualizar_video.php',
                        method: 'POST',
                        data: {
                            id: id,
                            youtube_link: youtubeLink,
                            outro_campo: outroCampo
                        },
                        success: function(response) {
                            // Exibir uma mensagem de sucesso com o SweetAlert2 e atualizar a página
                            Swal.fire({
                                title: 'Atualizado!',
                                text: 'O registro foi atualizado com sucesso.',
                                icon: 'success',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            });
                        },
                        error: function(xhr, status, error) {
                            // Exibir uma mensagem de erro com o SweetAlert2
                            Swal.fire({
                                title: 'Erro!',
                                text: 'Ocorreu um erro ao atualizar o registro.',
                                icon: 'error',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK'
                            });
                        }
                    });
                }
            });
        });
    });
    </script>


</body>

</html>