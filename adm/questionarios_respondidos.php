<?php include '../header.php' ?>


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

<h3>Meus questionarios</h3>


<?php


        // Consulta SQL para selecionar todos os usuários
        $sql = "SELECT id, user, created FROM questionario2 where user = '$nome_logado'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table table-striped table-sm'>";
            echo "<thead><tr><th>ID</th><th>First Name</th><th>Created</th><th>ação</th></tr></thead>";
            echo "<tbody>";

            // Percorrendo os resultados e adicionando-os à tabela HTML
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["user"] . "</td>";
                echo "<td>" . $row["created"] . "</td>";
                echo "<td><button class='btn btn-primary btn-sm redirectToPage' data-href='../questionario/sucess.php?id=" . $row["id"] . "'>Go</button></td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        } else {
            echo "0 results";
        }

        // Fechando a conexão com o banco de dados
        $conn->close();
        ?>





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
        $(document).ready(function(){
            $('.redirectToPage').on('click', function() {
                window.location.href = $(this).data('href');
            });
        });
    </script>


</body>

</html>