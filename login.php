<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="assets/css/Jost.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/breadcrumb.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/sticky-dark-top-nav-with-dropdown-1.css">
    <link rel="stylesheet" href="assets/css/sticky-dark-top-nav-with-dropdown.css">
</head>

<body class="bg-gradient-primary" style="/*background-color: rgba(255,255,255,0);*/background: linear-gradient(to right, rgba(255, 163, 163, 0.5), rgba(156, 249, 255, 0.5));">
    <div class="container">
        <div class="row justify-content-center" style="margin-right: auto;margin-left: auto;">
            <div class="col-md-9 col-lg-12 col-xl-10" style="margin-right: auto;margin-left: auto;height: auto;">
                <div class="card shadow-lg o-hidden border-0 my-5" style="background-color: rgba(0,0,0,0.7);height: auto;width: 450px;margin-right: auto;margin-left: auto;">
                    <div class="card-body p-0" style="height: auto;">
                        <div class="row" style="height: auto;">
                            <div class="p-5" style="width: 400px;height: auto;margin-right: auto;margin-left: auto;">
                                <div class="text-center"><img src="assets/img/SYSTIMP/LazeRosa%20Logo.png" style="width: 175px;margin-bottom: 20px;">
                                    <h4 class="text-white mb-4" style="font-family: ABeeZee, sans-serif;font-size: 25px;">Welcome to LazeRosa!</h4>
                                </div>
                                <form class="user" method="POST">
                                <?php
                                        if(isset($_GET['err'])){ ?>
                                            <p class="err"><?php echo $_GET['err']; ?></p>
                                    <?php    }
                                    ?>
                                    <div class="form-group"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email" name="email" autocomplete="on" style="background-color: rgba(0,0,0,0.5);" required></div>
                                    <div class="form-group"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="password" style="background-color: rgba(0,0,0,0.5);" required></div>
                                    
                            <div class="form-group">
                                <div class="custom-control custom-checkbox small">
                                    <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                </div>
                            </div><button class="btn btn-primary btn-block text-white btn-user" type="submit" name = "submit" style="background: linear-gradient(to right, rgba(255, 163, 163, 0.5), rgba(156, 249, 255, 0.5));">LOGIN</button>
                            <hr>
                            </form>
                            <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
<?php
    require("connect.php");

    if(isset($_POST["submit"])){
        $temail = $_POST["email"];
        $tpword = $_POST["password"];
        $tpword = md5($tpword);
        $sql = mysqli_query($DBConnect, "SELECT upassword FROM users WHERE uemail='$temail'");
        if($row=mysqli_fetch_array($sql)){
            if($tpword==$row['upassword']){
                echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
                exit();
            }
            else{
                echo "<script type='text/javascript'> document.location = 'login.php?err=Username/Password incorrect'; </script>";
            }
        }
        else{
            echo "<script type='text/javascript'> document.location = 'login.php?err=Username/Password incorrect'; </script>";
        }

    }
?>