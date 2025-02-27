<?php
    include 'connection.php';
    $selectquery=mysqli_query($mysqli, "select * from user1");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- header file -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Source</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $a = 1;
                            while ($row = mysqli_fetch_assoc($selectquery)) {
                        ?>
                        <tr>
                            <th scope="row"><?= $a; ?></th>
                            <td><?= $row['name']; ?></td>
                            <td><?= $row['email']; ?></td>
                            <td><?= $row['number']; ?></td>
                            <td><?= $row['source']; ?></td>
                            <td><?= $row['created_date']; ?></td>
                        </tr>
                        <?php
                          $a++;}
                        ?>
                    </tbody>
                </table>
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
