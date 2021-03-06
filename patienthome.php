<?php
session_start();
if(!isset($_SESSION["hms_login"])){
    header("location: ./");
}
   if($_SESSION["hms_doctor"]){
      echo $_SESSION["hms_doctor"];
      header("location: doctorhome.php?".$_SERVER['QUERY_STRING']);
      return;
   }
   if($_SESSION["hms_admin"]){
      header("location: adminhome.php?".$_SERVER['QUERY_STRING']);
      return;
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSPITAL MANAGEMENT SYSTEM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="pt-4">
    <nav class="navbar navbar-expand-lg p-3 fixed-top navbar-light bg-white shadow-sm" >
        <a class="navbar-brand h5" href="#">HOSPITAL MANAGEMENT SYSTEM</b>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto mr-0 mt-2 mt-lg-0">
            <li class="nav-item"><a class="nav-link m-1" style="color: #000;text-decoration:none" href="home.php">HOME</a></li>
            <li class="nav-item"><a class="nav-link m-1" style="color: #000;text-decoration:none" href="about.php">ABOUT</a></li>
            <li class="nav-item"><a class="nav-link m-1" style="color: #000;text-decoration:none" href="pharmacy.php">PHARMACY</a></li>
            <li class="nav-item"><a class="nav-link m-1" style="color: #000;text-decoration:none" href="alldoctors.php">ALL_DOCTORS</a></li>
            <li class="nav-item"><a class="nav-link m-1" style="color: #000;text-decoration:none" href="dashboard.php">DASHBOARD</a></li>
            <li class="nav-item"><a class="nav-link m-1" style="color: #000;text-decoration:none" href="logout.php">LOGOUT</a></li>
        </ul>
          
        </div>
      </nav>
      <br>
    <main class="container p-2 pt-4 mt-4">
        <?php
        if(isset($_GET["success"])):
        ?>
        <div class="text-center w-100">
        <div class="alert alert-success mx-auto w-50">Login Successful</div>
        </div>
        <?php endif ?>
        <div class="h4 py-3">WELCOME TO HOSPITAL MANAGEMENT SYSTEM DASHBOARD:</div>
        <div class="row">
            <div class="col-lg-7">
                <a class="btn btn-primary p-4 m-2 w-75 text-white" href="./home.php">
                    <b class="h4">HOME</b>
                </a>
                <a class="btn btn-primary p-4 m-2 w-75 text-white" href="./dashboard.php">
                    <b class="h4">DASHBOARD</b>
                </a>
                <a class="btn btn-primary p-4 m-2 w-75 text-white" href="./alldoctors.php">
                    <b class="h4">ALL DOCTORS</b>
                </a>
                <a class="btn btn-primary p-4 m-2 w-75 text-white" href="./medicines.php">
                    <b class="h4">MEDICINES</b>
                </a>
                <a class="btn btn-primary p-4 m-2 w-75 text-white" href="./myappointments.php">
                    <b class="h4">MY APPOINTMENTS</b>
                </a>
                <a class="btn btn-primary p-4 m-2 w-75 text-white" href="./myaccount.php">
                    <b class="h4">MY ACCOUNT</b>
                </a>
                <br><br><br>
            </div>
            <div class="col-lg-5">
                <img class="w-100 p-2" src="images/photo_bg2.jpg">
                <img class="w-100 p-2 h-50" src="images/photo_bg.jpg">
            </div>
        </div>
    </main>
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>?? 2017-2018 Company, Inc. ?? <a href="#">Privacy</a> ?? <a href="#">Terms</a></p>
      </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
</body>
</html>