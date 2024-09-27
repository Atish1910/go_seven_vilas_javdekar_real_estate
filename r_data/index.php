<?php
    session_start();
    if(isset($_SESSION['loggg'])){
        header('Location: detail.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="images/img/favicon.ico" type="image/x-icon">
    <title>VJ Palladio | 3, 4 & 4XL BHK APARTMENTS | At Balewadi Central, Pune</title>
    <meta name="description"
        content=""
        content="">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owl.theme.default.min.css">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Fontawsome kit -->
    <script src="https://kit.fontawesome.com/12b03fea70.js" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>

    <section>
        <div class="ad-log-main">
            <div class="ad-log-in">
                <div class="ad-log-in-logo">
                    <a href="../index"><img src="image/logo.png" class="img-responsive" alt="" style="height:90px;"></a>
                </div>
                <div class="ad-log-in-con">
                    <div class="log-in-pop-right">
                        <div class="container py-5 d-flex justify-content-center">
                            <div class="row  text-center">
                                <div class="col-12 border border-1 p-5 rounded-3">
                                    <form action="login.php" method="post">
                                        <h5>Login Form</h5>
                                        <div class="my-3">
                                            <label for="exampleInputEmail1" class="form-label">UserName</label>
                                            <input type="text" name="uname" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/mystl.js"></script>
</body>

</html>