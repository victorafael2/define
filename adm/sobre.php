<?php include '../header.php' ?>

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

<h3>Sobre a Matech Solution</h3>

<div class="table-responsive scrollbar ms-n1 px1">
  <p></p>
<p class="text-700">QUEM SOMOS
A Matech é uma startup que atua na elaboração de projetos de pesquisa, desenvolvimento e inovação (PD&I) para empresas interessadas em captar recursos públicos.</p>
<p class="text-700">
Somos especializados em três frentes norteadoras:
1) Captação de recurso não-reembolsável, reembolsável e incentivos fiscais (desde Lei do Bem, Informática, Rota 2030 até Lei Inovar PE);
2) Prospecção de parceiros científico-tecnológicos na base das universidades brasileiras para contribuir na solução dos problemas das empresas;
3) Elaboração de propostas a serem submetidas aos editais públicos ou formulários das leis de incentivo fiscal para inovação.
</p>
<p class="text-700">
Nosso público-alvo são empresas de biotecnologia ou empresas que utilizam da biotecnologia para melhorar seus processos de produção ou produtos. Isso inclui um universo vasto de empresas, que vão desde o agronegócio até a indústria farmacêutica, passando pelos setores de alimentos, bebidas, cosméticos e biomateriais.
</p>
<p class="text-700">
MAIS SOBRE A GENTE
Já participamos do programa de pré-incubação da JUMP/Porto Digital/2022. Também fomos contemplados nos editais Centelha e Pró-Startup (primeira rodada). E atualmente participamos do programa Fast Motion do Sebrae-PE, bem como estamos incubados no Porto Digital/JUMP.</p>

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
        $(document).ready(function(){
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
        search: "",paginate: {
        next: "Próximo",
        previous: "Anterior"
      }
      },
    });
  });
</script>



</body>

</html>