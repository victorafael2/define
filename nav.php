<?php

$url_base = htmlspecialchars(dirname($_SERVER['REQUEST_URI']), ENT_QUOTES, 'UTF-8');

$barra =  "/";

$diminuir = 2;

$url = $url_base.$barra;

$caractere = "/";

$stringParaRepetir = "../";

$contagem = substr_count($url, $caractere) - $diminuir;


// $url = str_repeat($stringParaRepetir, $contagem);

if ($contagem > 0) {
    $url = str_repeat($stringParaRepetir, $contagem);
  } else {

    $url = "";
  }


$caminhobd = "conexao/conexao.php";

$caminho_full = $url.$caminhobd;


include($caminho_full);








?>

<style>
.user-avatar {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 50%;
    background-color: #f2f2f2;
    color: #333;
    text-align: center;
    font-size: 18px;
    font-weight: bold;
    margin-right: 10px;
}
</style>






<nav class="navbar navbar-top navbar-expand" id="navbarDefault">
    <div class="collapse navbar-collapse justify-content-between">
        <ul class="navbar-nav navbar-nav-icons flex-row">
        </ul>


        <div class="navbar-logo">



            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span
                    class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="<?php echo $url ?>index.php">
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center"><img src="<?php echo $url ?>assets/img/icons/logo.png"
                            alt="define" width="60" />
                        <p class="logo-text ms-2 d-none d-sm-block">D.E.F.I.N.E.</p>
                    </div>
                </div>
            </a>
        </div>

        <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item">
                <div class="theme-control-toggle fa-icon-wait px-2">
                    <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                        data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" />
                    <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon"
                            data-feather="moon"></span></label>
                    <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon"
                            data-feather="sun"></span></label>
                </div>
            </li>
            <!-- <li class="nav-item dropdown">

            </li> -->



            <?php
// Verifica se o usuário está logado
                if ($logado === "deslogado") {

           echo ' <li class="nav-item dropdown">';
           echo ' <a class="nav-link" id="navbarDropdownUser" ' . $ir_login . '>';
           echo '         <span class="fas fa-user-circle fs-3"></span>';
           echo '     </a>';
           echo '   </li>'; }
           else
           {
            echo '<li class="nav-item dropdown">';
            echo '</li>';
            echo '<li class="nav-item dropdown ">';
            echo '<a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">';
            echo '<div class="avatar avatar-l ">';
            echo '<img id="svg-img" class="avatar-name rounded-circle" alt="" />';
            echo '</div>';
            echo '</a>';
            echo '<div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">';
            echo '<div class="card position-relative border-0">';
            echo '<div class="card-body p-0">';
            echo '<div class="text-center pt-4 pb-3">';
            echo '<div class="avatar avatar-xl ">';
            echo '<div class="avatar avatar-xl status-online  me-4">';
            echo '<img id="svg-img-2" class="rounded-circle bg-100" alt="" />';
            echo '</div>';
            echo '</div>';
            echo '<h6 class="mt-2 text-black">' . $first_name . '</h6>';
            echo '</div>';
            echo '</div>';
            echo '<div class="overflow-auto scrollbar ' . $v_logado . '" style="height: 5rem;">';
            echo '<ul class="nav d-flex flex-column mb-2 pb-1">';
            echo '<li class="nav-item"><a class="nav-link px-3" href="' . $url . 'adm/perfil.php">';
            echo '<span class="me-2 text-900" data-feather="user"></span><span>Perfil / Ajustes </span></a></li>';
            echo '<li class="nav-item"><a class="nav-link px-3" href="' . $url . 'adm/questionarios_respondidos.php">';
            echo '<span class="me-2 text-900" data-feather="pie-chart"></span>Meus Relatórios</a></li>';
            echo '</ul>';
            echo '</div>';
            echo '<div class="card-footer p-0 border-top">';
            echo '<div class="px-5 py-2">';
            echo $botao_login;
            echo '</div>';
            echo '<div class="my-2 text-center fw-bold fs--2 text-600">';
            echo '<a class="text-600 me-1" href="#!">Privacy policy</a>&bull;';
            echo '<a class="text-600 mx-1" href="#!">Terms</a>&bull;';
            echo '<a class="text-600 ms-1" href="#!">Cookies</a></div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</li>';







        }
            ?>
        </ul>
    </div>
</nav>


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
var img = document.getElementById("svg-img");


img.setAttribute("src", "data:image/svg+xml;base64," + btoa(svgString));
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
var img = document.getElementById("svg-img-2");


img.setAttribute("src", "data:image/svg+xml;base64," + btoa(svgString));
</script>



