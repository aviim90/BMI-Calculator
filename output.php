<?php

$weight = $_POST['weight'];
$height = $_POST['height'];

$heightInMetersSquared = ($height / 100) ** 2;
$weightMassIndex = (round($weight / $heightInMetersSquared, 2));



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="styleOutput.css" />
    <title>KMI Output</title>
</head>

<body>

    <div class="container d-flex vh-100 justify-content-center align-items-center">
        <div class="card text-center border-0 text-bg-dark bg-opacity-75" style="width: 30rem;">
            <div class="card-body">
                <h5 class="card-title">Your BMI is: <?php echo $weightMassIndex; ?></h5>
            </div>
            <table class="table w-75 m-auto text-bg-light mb-0">
                <tbody>
                    <tr class="table-danger">
                        <th scope="row">< 18.5</th>
                        <td>you're in the underweight range</td>
                    </tr>
                    <tr class="table-success">
                        <th scope="row">18.5 - 24.9</th>
                        <td>you're in the healthy weight range</td>

                    </tr>
                    <tr class="table-warning">
                        <th scope="row">25 - 29.9</th>
                        <td>you're in the overweight range</td>
                    </tr>
                    <tr class="table-danger">
                        <th scope="row">30 - 39.9</th>
                        <td>you're in the obese range</td>
                    </tr>
                </tbody>
            </table>
            <div class="container mt-3 mb-3">
                <a href="index.php" class="btn btn-primary">New BMI</a>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>