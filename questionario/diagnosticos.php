
<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>D.E.F.I.N.E</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicons/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../vendors/simplebar/simplebar.min.js"></script>
    <script src="../assets/js/config.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>



    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>






    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
    var phoenixIsRTL = JSON.parse(localStorage.getItem('phoenixIsRTL'));
    if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
    } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
    }
    </script>


    <style>
    .dialog {
        display: none;
        position: absolute;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        z-index: 1;
    }

    .dialog2 {
        display: none;
        position: absolute;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        z-index: 1;
    }

    .trigger:hover .dialog {
        display: block;
    }

    .trigger2:hover .dialog2 {
        display: block;
    }
    </style>
</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main style="--phoenix-scroll-margin-top: 1.2rem;">
        <?php include 'navbar.php' ?>
        <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true"
            data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
            <div class="modal-dialog">
                <div class="modal-content mt-15">
                    <div class="modal-body p-0">
                        <div class="chat-search-box">
                            <div class="form-icon-container">
                                <input class="form-control py-3 form-icon-input rounded-1" type="text"
                                    autofocus="autofocus" placeholder="Search People, Groups and Messages" /><span
                                    class="fa-solid fa-magnifying-glass fs--1 form-icon"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <section class="bg-white pb-8" id="home">
        <div class="container-small hero-header-container">
          <div class="row align-items-center">
            <div class="col-12 col-lg-auto order-0 order-md-1 text-end order-1">
              <div class="position-relative p-5 p-md-7 d-lg-none">
                <div class="bg-holder" style="background-image:url(../assets/img/bg/bg-23.png);background-size:contain;">
                </div>
                

                <div class="position-relative"><img class="w-100 shadow-lg d-dark-none rounded-2" src="assets/img/bg/bg-31.png" alt="hero-header" /><img class="w-100 shadow-lg d-light-none rounded-2" src="../assets/img/bg/bg-30.png" alt="hero-header" /></div>
              </div>
              <div class="hero-image-container position-absolute top-0 bottom-0 end-0 d-none d-lg-block">
                <div class="position-relative h-100 w-100">
                  <div class="position-absolute h-100 top-0 d-flex align-items-center end-0 hero-image-container-bg"><img class="pt-7 pt-md-0 w-100" src="../assets/img/bg/bg-1-2.png" alt="hero-header" /></div>
                  <div class="position-absolute h-100 top-0 d-flex align-items-center end-0"><img class="pt-7 pt-md-0 w-100 shadow-lg d-dark-none rounded-2" src="../assets/img/bg/bg-28.png" alt="hero-header" /><img class="pt-7 pt-md-0 w-100 shadow-lg d-light-none rounded-2" src="assets/img/bg/bg-29.png" alt="hero-header" /></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 text-lg-start text-center pt-8 pb-6 order-0 position-relative">
              <h1 class="fs-5 fs-lg-6 fs-md-7 fs-lg-6 fs-xl-7 fs fw-black mb-4"><span class="text-primary me-3">Elegance</span>for<br />your web app</h1>
              <p class="mb-5">Standard, modern and Elegant solution for your next web app so you don’t have to look further. Sign up or check the demo below.</p><a class="btn btn-lg btn-primary rounded-pill me-3" href="empresas/empresa.php" role="button">Cadastrar</a><a class="btn btn-link me-2 fs-0 p-0 text-decoration-none" href="#!" role="button">Check Demo<span class="fa-solid fa-angle-right ms-2 fs--1"></span></a>
            </div>
          </div>
        </div>
      </section> -->




        <div class="container py-5">


        <div class="card" >
                            <!-- <img class="card-img-top" src="../../assets/img//generic/66.jpg" alt="..."> -->
                            <div class="card-body">
                              <h5 class="card-title">Meus Diagnosticos</h5>
                              <!-- <p class="card-text">Here is the example of the Multiple Container Sortable feature of the </p> -->

                              <input type="text" id="busca" class="form-control" onkeyup="buscar()">
        <table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>User</th>
					<th>Created</th>
                    <th>Ação</th>
				</tr>
			</thead>
			<tbody id="tabela">
				<?php


					// Executa uma consulta SQL para buscar os dados da tabela
					$sql = "SELECT id, user, created FROM questionario2";
					$result = $conn->query($sql);

					// Exibe os dados da tabela em uma tabela HTML
					if ($result->num_rows > 0) {
					    while($row = $result->fetch_assoc()) {
					        echo "<tr>";
					        echo "<td>" . $row["id"] . "</td>";
					        echo "<td>" . $row["user"] . "</td>";
					        echo "<td>" . $row["created"] . "</td>";
                            echo "<td>";
					        echo "<a href='sucess_.php?id=" . $row["id"] . "' class='btn btn-primary'>Ver detalhes</a>";
					        echo "</td>";
					        echo "</tr>";
					    }
					} else {
					    echo "0 resultados";
					}

					// Fecha a conexão com o banco de dados
					$conn->close();
				?>
			</tbody>
		</table>

                              <!-- <button class="btn btn-primary">Go somewhere</button> -->
                            </div>
                          </div>







        </div>


















        <div class="position-relative">
            <div class="bg-holder footer-bg"
                style="background-image:url(../assets/img/bg/bg-19.png);background-size:auto;">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder"
                style="background-image:url(../assets/img/bg/bg-right-20.png);background-position:right;background-size:auto;">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder"
                style="background-image:url(../assets/img/bg/bg-left-20.png);background-position:left;background-size:auto;">
            </div>
            <!--/.bg-holder-->

            <div class="position-relative">
                <!-- <svg class="w-100 text-white" preserveAspectRatio="none" viewBox="0 0 1920 368" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M1920 0.44L0 367.74V0H1920V0.44Z" fill="currentColor"></path>
                </svg> -->


                <!-- ============================================-->
                <!-- <section> begin ============================-->
                <section style="padding-top:50px;">

                    <?php include 'footer.php' ?>
                    <!-- end of .container-->

                </section>
                <!-- <section> close ============================-->
                <!-- ============================================-->


            </div>
        </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <script>
		function buscar() {
			var input, filtro, tabela, tr, td, i, valor;
			input = document.getElementById("busca");
			filtro = input.value.toUpperCase();
			tabela = document.getElementById("tabela");
			tr = tabela.getElementsByTagName("tr");
			for (i = 0; i < tr.length; i++) {
				td = tr[i].getElementsByTagName("td")[1];
				if (td) {
					valor = td.textContent || td.innerText;
					if (valor.toUpperCase().indexOf(filtro) > -1) {
						tr[i].style.display = "";
					} else {
						tr[i].style.display = "none";
					}
				}
			}
		}
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>

</html>




<script>
document.addEventListener('DOMContentLoaded', function() {
    var videoModal = document.getElementById('videoModal');
    var videoIframe = videoModal.querySelector('iframe');

    videoModal.addEventListener('hide.bs.modal', function() {
        var videoSrc = videoIframe.src;
        videoIframe.src = '';
        videoIframe.src = videoSrc;
    });
});
</script>

<script>
var options1 = {
    series: [{
        name: 'Fomento',
        data: [<?php echo $linha ?>],
    }],
    chart: {
        height: 350,
        type: 'radar',
    },
    dataLabels: {
        enabled: true
    },
    plotOptions: {
        radar: {
            size: 140,
            polygons: {
                strokeColors: '#e9e9e9',
                fill: {
                    colors: ['#f8f8f8', '#fff']
                }
            }
        }
    },
    title: {
        // text: 'Radar with Polygon Fill'
    },
    colors: ['#FF4560'],
    markers: {
        size: 4,
        colors: ['#fff'],
        strokeColor: '#FF4560',
        strokeWidth: 2,
    },
    tooltip: {
        y: {
            formatter: function(val) {
                return val
            }
        }
    },
    xaxis: {
        categories: ['Tecnologia', 'Potencial Tecnologico', 'Tipo Inovação', 'Risco Tecnologico',
            'Impacto Cientifico Tecnologico', 'Infra estrutura da empresa', 'Parcerias', 'Impacto Gerais',
            'Equipe', 'Beneficios Inovação'
        ]
    },
    yaxis: {
        tickAmount: 7,
        labels: {
            formatter: function(val, i) {
                if (i % 2 === 0) {
                    return val
                } else {
                    return ''
                }
            }
        }
    }
};

var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);
chart1.render();

var options2 = {
    series: [{
            name: 'Bubble1',
            data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
                min: 10,
                max: 60
            })
        },
        {
            name: 'Bubble2',
            data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
                min: 10,
                max: 60
            })
        },
        {
            name: 'Bubble3',
            data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
                min: 10,
                max: 60
            })
        },
        {
            name: 'Bubble4',
            data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
                min: 10,
                max: 60
            })
        }
    ],
    chart: {
        height: 350,
        type: 'bubble',
    },
    dataLabels: {
        enabled: false
    },
    fill: {
        opacity: 0.8
    },
    title: {
        text: 'Simple Bubble Chart'
    },
    xaxis: {
        tickAmount: 12,
        type: 'category',
    },
    yaxis: {
        max: 70
    }
};

var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
chart2.render();
</script>


<script>
var ctx = document.getElementById('myChart').getContext('2d');
var bubbleChart = new Chart(ctx, {
    type: 'bubble',
    data: {
        datasets: [{
            label: 'Dados Bubble',
            data: [{
                    x: 10,
                    y: 20,
                    r: 5
                },
                {
                    x: 15,
                    y: 10,
                    r: 15
                },
                {
                    x: 7,
                    y: 15,
                    r: 10
                }
            ],
            backgroundColor: 'rgba(255, 99, 132, 0.6)'
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>


<script>
document.addEventListener('DOMContentLoaded', function() {
    var trigger = document.querySelector('.trigger');
    var dialog = document.getElementById('dialog');

    trigger.addEventListener('mouseover', function() {
        dialog.style.display = 'block';
    });

    trigger.addEventListener('mouseout', function() {
        dialog.style.display = 'none';
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var trigger = document.querySelector('.trigger2');
    var dialog = document.getElementById('dialog2');

    trigger.addEventListener('mouseover', function() {
        dialog.style.display = 'block';
    });

    trigger.addEventListener('mouseout', function() {
        dialog.style.display = 'none';
    });
});
</script>