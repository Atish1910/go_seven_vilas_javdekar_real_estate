<?php
    include '../connection.php';
    $selectquery = mysqli_query($mysqli, "select * from vj_enquiry");
    
?>
<!doctype html>
<html lang="en">

<head>
   <!-- header file -->
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
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Msg</th>
                            <th scope="col">utm source</th>
                            <th scope="col">utm medium</th>
                            <th scope="col">utm campaign</th>
                            <th scope="col">utm term</th>
                            <th scope="col">utm content</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $a = 1;
                            while ($row = mysqli_fetch_assoc($selectquery)) {
                                // Mask the phone number's last 4 digits with stars
                                $masked_phone = substr($row['phone'], 0, -4) . '****';
                                
                                // Mask the first 4 characters of the email with stars
                                $masked_email = '****' . substr($row['email'], 4);
                        ?>
                        <tr>
                            <th scope="row"><?= $a; ?></th>
                            <td><?= $row['fname']; ?></td>
                            <td><?= $masked_email; ?></td>
                            <td><?= $masked_phone; ?></td>
                            <td><?= $row['msg']; ?></td>
                            <td><?= $row['utm_source']; ?></td>
                            <td><?= $row['utm_medium']; ?></td>
                            <td><?= $row['utm_campaign']; ?></td>
                            <td><?= $row['utm_term']; ?></td>
                            <td><?= $row['utm_content']; ?></td>
                            <td><?= $row['n_date']; ?></td>
                        </tr>
                        <?php
                            $a++;
                            }
                        ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>
