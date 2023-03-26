<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">


<?php include 'head.php' ?>

  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid px-0">

      <?php include 'nav.php' ?>

        <div class="content">
          <div class="d-flex flex-center content-min-h">
            <div class="text-center py-9"><img class="img-fluid mb-7 d-dark-none" src="../assets/img/spot-illustrations/2.png" width="470" alt="" /><img class="img-fluid mb-7 d-light-none" src="../assets/img/spot-illustrations/dark_2.png" width="470" alt="" />
              <h1 class="text-800 fw-normal mb-5">Create Something Beautiful.</h1><a class="btn btn-lg btn-primary" href="../documentation/getting-started.html">Getting Started</a>
            </div>
          </div>


<?php include 'footer.php' ?>


        </div>


      </div>
      <script>
        var navbarTopStyle = localStorage.getItem('phoenixNavbarTopStyle');
        var navbarTop = document.querySelector('.navbar-top');
        if (navbarTopStyle === 'darker') {
          navbarTop.classList.add('navbar-darker');
        }

        var navbarVerticalStyle = localStorage.getItem('phoenixNavbarVerticalStyle');
        var navbarVertical = document.querySelector('.navbar-vertical');
        if (navbarVerticalStyle === 'darker') {
          navbarVertical.classList.add('navbar-darker');
        }
      </script>
    </main>



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

  </body>

</html>