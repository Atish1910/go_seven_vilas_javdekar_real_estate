<?php
  include 'link.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- header file -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="images/img/fevicon.svg" type="image/x-icon">
    <title>Supreme Towers - Supreme Universal Group</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owl.theme.default.min.css">

    <!-- Fontawsome kit -->
    <script src="https://kit.fontawesome.com/12b03fea70.js" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>



</head>

<body class="bg-lblack">


    <!-- -------------------------------------------header------------------------------------------------->
    <?php include 'header.php';?>
    <div id="carouselExample" class="carousel slide pt-5 mt-4">
        <div class="">
            <div class="">
                <div class="container ">

                </div>
                <img src="images/img/thanky.png" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <!-- -------------------------------------------footer------------------------------------------------->
    <?php  include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script>
        function Redirect() {
            window.location = "<?= LINK;?>";
        }
        document.write("You will be redirected to a new page in 5 seconds");
        setTimeout('Redirect()', 5000);
    </script>
</body>

</html>