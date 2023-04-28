<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/classrecordlist/resource/php/class/core/init.php';
isLogin();
$viewtable = new viewtable();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CEU classrecordlist Portal</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
  <script src="vendor/js/jquery.js"></script>
  <link href="vendor/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css"  href="resource/css/styles.css">
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/css/dataTables.css">
  <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/jquery.dataTables.js"></script>
  <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/dataTables.buttons.min.js"></script>
  <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/jszip.min.js"></script>
  <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/pdfmake.min.js"></script>
  <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/vfs_fonts.js"></script>
  <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/buttons.html5.min.js"></script>
  <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/buttons.print.min.js"></script>

</head>
<body>

        <nav class="navbar navbar-dark bg-white shadow-sm slide-in-left">
          <a class="navbar-brand" href="https://malolos.ceu.edu.ph/">
            <img src="resource/img/logo.jpg" height="70" class="d-inline-block align-top"
              alt="mdb logo"><h3 class="ib">
          </a>
             <a href="pending.php"><i class="fas fa-home ceucolor"></i></a>
             <a href="https:/www.facebook.com/theCEUofficial/"><i class="fab fa-facebook-f ceucolor"></i></a>
             <a href="https://www.instagram.com/ceuofficial/"><i class="fab fa-instagram ceucolor"></i></a>
             <a href="https://twitter.com/ceumalolos"><i class="fab fa-twitter ceucolor"></i></a>
        </nav>

        <div class="container-fluid mt-4 puff-in-center">
          <div class="row">


              <div class="col-md-5">

                  <div class="profile-texter">
                  <h3 class="ml-5 ceucolor2"> profile </h3>
                  </div>

                  <div class="col-md-4 mb-2">
                  <?php profilePic(); ?>
                  </div>

                   <?php
                      $user = new User();
                      echo "<b class='ceucolor2'>Name: </b>"; echo $user->data()->name;
                      echo "<br/>"
                    ?>
                    
                    <?php
                    $user = new User();
                    echo "<b class='ceucolor2'>Date joined: </b>"; echo $user->data()->joined;
                    echo "<br/>"
                    ?>

                    <?php
                    $user = new User();
                    echo "<b class='ceucolor2'>Email: </b>"; echo $user->data()->email;
                    echo "<br/>"
                    ?>

                    <?php
                    $user = new User();
                    echo "<b class='ceucolor2'>Course: </b>"; echo $user->data()->colleges;
                    echo "<br/>"
                    ?>

                    <a class="btn btn-info mt-3 profile-texter" href="updateprofile.php">Update Profile</a> </br>  
                    <a class="btn btn-primary mt-3 profile-texter" href="updatepropic.php">Update Profile Picture</a> 
                  </br>  
                    <a class="btn btn-danger mt-3 profile-texter" href="logout.php">Log-out</a>

              </div>



            <div class="col-md-5">
              profile
            </div>

            <div class="col-md-7">
              list
            </div>
          </div>
        </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="vendor/js/bootstrap.min.js"></script>
<script src="vendor/js/bootstrap-select.min.js"></script>
    <script>
    $(document).ready(function(){
      window.$('#scholartable').DataTable({
        dom: 'frtipB',
        buttons: [
            {
                extend: 'excelHtml5',
                className: 'btn btn-success',
                text: 'Excel',
                titleAttr: 'Export to Excel',
                title: 'Scholarship Report',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            },
            {
                extend: 'csvHtml5',
                className: 'btn btn-primary',
                text: 'CSV',
                titleAttr: 'CSV',
                title: 'Scholarship Report',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            },
            {
                extend: 'pdfHtml5',
                className: 'btn btn-danger',
                text: 'PDF',
                titleAttr: 'PDF',
                title: 'Scholarship Report',
                orientation: 'landscape',
                pageSize: 'TABLOID',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            }
        ]
        });
    });
</script>
</body>
</html>
