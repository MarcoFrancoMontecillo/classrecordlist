<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/classrecordlist/resource/php/class/core/init.php';
$view = new view;
?>



 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registrar Portal</title>
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
   <link href="vendor/css/all.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css"  href="resource/css/styles.css">
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

 </head>
 <body>
    <div class="register_background">
        <nav class="navbar navbar-dark bg-white shadow-sm slide-in-left">
          <a class="navbar-brand" href="https://malolos.ceu.edu.ph/">
            <img src="resource/img/logo.jpg" height="70" class="d-inline-block align-top"
              alt="mdb logo"><h3 class="ib">
          </a>
          <!-- <a href="exportTableAdmin.php"><i class="fas fa-table ceucolor"></i></a>
          <a href="statsAdmin.php"><i class="fas fa-chart-line ceucolor"></i></a>
          <a href="userVerificationAdmin.php"><i class="fas fa-user-plus ceucolor"></i></a>
          <a href="verificationAdmin.php"><i class="fas fa-user-graduate ceucolor"></i></a>
          <a href="viewAlumniAdmin.php"><i class="fa fa-graduation-cap ceucolor"></i></a>
          <a href="nTransactionAdmin.php"><i class="fas fa-file-upload ceucolor"></i></a>
          <a href="view_pending_requests.php"><i class="fas fa-home ceucolor"></i></a>
          <a href="https:/www.facebook.com/theCEUofficial/"><i class="fab fa-facebook-f ceucolor"></i></a>
          <a href="https://www.instagram.com/ceuofficial/"><i class="fab fa-instagram ceucolor"></i></a>
          <a href="https://twitter.com/ceumalolos"><i class="fab fa-twitter ceucolor"></i></a> -->
        </nav>

        <div class="container mt-4 fade-in-center register_container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center" style="font-family: 'Lexend Exa', sans-serif;">Register Student/Teacher List</h1>
                </div>
           </div>
           <?php
               vald();
           ?>
           <form action="" method="post">
               <table class="table ">
                   <tr>
                       <td>
                           <div class="row justify-content-center">
                               <div class="form-group col-4">
                                <label for = "username" class=""> Username:</label>
                                <input class="form-control"  type = "text" name="username" id="username" value ="<?php echo input::get('username');?>" autocomplete="off" required />
                               </div>
                               <div class="form-group col-4">
                                <label for = "password"> Password:</label>
                                <input type="password" class="form-control" name="password" id="password" value ="<?php echo input::get('password');?>" autocomplete="off"required/>
                               </div>
                               <div class="form-group col-4">
                                <label for = "ConfirmPassword"> Confirm Password:</label>
                                <input type="password" class="form-control" name="ConfirmPassword" id="ConfirmPassword" value ="<?php echo input::get('ConfirmPassword');?>" autocomplete="off"required/>
                               </div>
                            </div>
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <div class="row justify-content-center">
                               <div class="form-group col-3">
                                <label for = "fullName" class=""> Full Name</label>
                                <input class="form-control"  type = "text" name="fullName" id="fullName" value ="<?php echo input::get('fullName');?>"/required>
                               </div>
                               <div class="form-group col-3">
                                 <label for="College" >College/s</label>
                                     <select id="College" name="College[]" class="selectpicker form-control" data-live-search="true" multiple required>
                                       <?php $view->collegeSP2();?>
                                     </select>
                               </div>
                               <div class="form-group col-3">
                                <label for = "email" class=""> Email Address</label>
                                <input class="form-control"  type = "text" name="email" id="email" value ="<?php echo input::get('email');?>"/required>
                               </div>
                               <div class="form-group col-3">
                                   <label for="College" >Status</label>
                                   <select id="Status" name="Status[]" class="selectpicker form-control" data-live-search="true" multiple required>
                                       <?php $view->statusSP2();?>
                                     </select>
                               </div>
                            </div>
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <div class="row justify-content-center">
                               <div class="form-group col-7">
                                   <label  >&nbsp;</label>
                               <input type="hidden" name ="Token" value="<?php echo Token::generate();?>" />
                                <input type="submit" value="Register" class=" form-control btn btn-primary" />
                                <a href="login.php" class="text-center mt-1" style="font-family: 'Lexend Exa', sans-serif;"> Already have an account? </a>
                               </div>
                           </div>
                       </td>
                   </tr>
               </table>
            </form>
        </div>
    </div>
 </body>
 <footer id="sticky-footer" class="py-4 bg-dark text-white-50 shadow fixed-bottom">
          <div class="container-fluid text-center">
              <div class="row">
                  <div class="col col-sm-2 text-left">
                      <small>Copyright &copy;Port-Twentyfour.info    BSIT3A 2024</small>
                  </div>
                  <div class="col text-right">
                      <small>Created by: Marco Franco Montecillo, Lesiree Charles Bautista, Carl Jerome Cabral, Jeremy Magat Yumul, Gabrielle Angelo Diño & Charles Matthew Barde</small>
                  </div>
              </div>
          </div>
        </footer>
     <script src="vendor/js/jquery.js"></script>
     <script src="vendor/js/popper.js"></script>
     <script src="vendor/js/bootstrap.min.js"></script>
     <script src="vendor/js/bootstrap-select.min.js"></script>
 </body>
 </html>
