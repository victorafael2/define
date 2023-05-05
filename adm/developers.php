<?php include '../header.php' ?>

<style>

</style>


<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

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

                            <h3>Developers</h3>

                            <hr>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-4xl avatar-bordered  me-4 ms-4 mt-2 mb-2">
                                                <img class="rounded-circle" src="../assets/img/victor.jpg" alt="" />
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text" id="instagram-name1">Victor Rafael</p>
                                                <h5 class="card-title">
                                                <i class="fab fa-instagram me-2"></i>
                                                    <a href="https://www.instagram.com/victorafael2/" target="_blank" id="instagram-link1">@victorafael2</a>
                                                </h5>
                                                <p class="card-text" id="instagram-job1">Desenvolvedor Web</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <!-- proximo -->
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-4xl avatar-bordered  me-4 ms-4 mt-2 mb-2">
                                                <img class="rounded-circle" src="../assets/img/nat.jpg" alt="" />
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text" id="instagram-name1">Nahh Cavalcanti</p>
                                                <h5 class="card-title">
                                                <i class="fab fa-instagram me-2"></i>
                                                    <a href="https://www.instagram.com/nahhcavalcanti/" target="_blank" id="instagram-link1">@nahhcavalcanti</a>
                                                </h5>
                                                <p class="card-text" id="instagram-job1">Atriz</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                 <!-- proximo -->
                                 <div class="col-md-4">
                                    <div class="card">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-4xl avatar-bordered  me-4 ms-4 mt-2 mb-2">
                                                <img class="rounded-circle" src="../assets/img/paloma.jpg" alt="" />
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text" id="instagram-name1">Paloma Gomes</p>
                                                <h5 class="card-title">
                                                <i class="fab fa-instagram me-2"></i>
                                                    <a href="https://www.instagram.com/palomagomes.dsgn/" target="_blank" id="instagram-link1">@palomagomes.dsgn</a>
                                                </h5>
                                                <p class="card-text" id="instagram-job1">Atriz</p>
                                            </div>
                                        </div>
                                    </div>

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


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <script>
    $(document).ready(function() {
        $('.redirectToPage').on('click', function() {
            window.location.href = $(this).data('href');
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#questionario').DataTable({
            searching: true,
            ordering: true,
            lengthChange: false,
            info: false,
            language: {
                searchPlaceholder: "Pesquisar...",
                search: "",
                paginate: {
                    next: "Próximo",
                    previous: "Anterior"
                }
            },
        });
    });
    </script>


    <script>
    $(document).ready(function() {
        var token = '07d520141c16da8d170f9177aaef2b0c'; // Insira o seu token de acesso aqui
        var instagramUsername = $('#instagram-username').text().substring(
            1); // Obtém o nome de usuário do Instagram sem o "@" do elemento HTML

        $.ajax({
            url: 'https://api.instagram.com/v1/users/search',
            dataType: 'jsonp',
            type: 'GET',
            data: {
                q: instagramUsername,
                access_token: token
            },
            success: function(data) {
                var userId = data.data[0]
                    .id; // Obtém o ID do usuário do Instagram a partir do nome de usuário
                $.ajax({
                    url: 'https://api.instagram.com/v1/users/' + userId,
                    dataType: 'jsonp',
                    type: 'GET',
                    data: {
                        access_token: token
                    },
                    success: function(data) {
                        var imageUrl = data.data.profile_picture;
                        $('#instagram-avatar').attr('src', imageUrl).on('error',
                            function() {
                                $(this).attr('src',
                                    'avatar-padrao.jpg'
                                ); // Define uma imagem padrão caso ocorra algum erro ao carregar a imagem do Instagram
                            });
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            },
            error: function(data) {
                console.log(data);
            }
        });
    });
    </script>


</body>

</html>