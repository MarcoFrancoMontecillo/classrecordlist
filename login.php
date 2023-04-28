<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/classrecordlist/resource/php/class/core/init.php';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Class Record System</title>
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
  <link href="vendor/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css"  href="resource/css/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="bg-pic-login">
        <nav class="navbar navbar-dark bg-white shadow-sm slide-in-left">
          <a class="navbar-brand " href="https://malolos.ceu.edu.ph/">
            <img src="resource/img/logo.jpg" height="70" class="d-inline-block align-top"
              alt="mdb logo"><h3 class="ib">
          </a>
        </nav>

        <span style="font-family: 'Lexend Exa', sans-serif;"><h1 class="text-center text-light pt-5 mt-3 fade-in-center">Class Record System</span></h1>

          <div class="container pt-5 mt-5">
            <div class="row justify-content-center">
                <div class="col-6">

                    <form class="text-center border border-light p-5 shadow fade-in-center bg2-color" action="" method="post" >
                    <p class="h4 mb-4">Sign in</p>
                    <?php logd();?>
                    <input type="text" id="username" class="form-control mb-4" name="username" placeholder="Enter Username" required>
                    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Enter Password" name ="password" required>
                    <div class="d-flex justify-content-around">
                    </div>
                    <input type =hidden name="token" value="<?php echo Token::generate(); ?>">
                    <input  type="submit"  class="btn btn-dark btn-block my-4"value="Login"/>

                    <a href="register.php">No account yet? Register Now.</a>
                    </form>
                </div>
            </div>
          </div>

        <footer id="sticky-footer" class="py-4 bg-dark text-white-50 shadow fixed-bottom">
          <div class="container-fluid text-center">
              <div class="row">
                  <div class="col col-sm-2 text-left">
                      <small>Copyright &copy;Port-Twentyfour.info    BSIT3A 2024</small>
                  </div>
                  <div class="col text-right">
                      <small>Created by: Marco Franco Montecillo, Lesiree Charles Bautista , Carl Jerome Cabral, Jeremy Magat Yumul , Gabrielle Angelo Diño , Charles Matthew B. Barde , Rochael Ann Reyes </small>
                  </div>
              </div>
          </div>
        </footer>
        <script src="vendor/js/jquery.js"></script>
        <script src="vendor/js/popper.js"></script>
        <script src="vendor/js/bootstrap.min.js"></script>
    </body>
    </html>
