<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" />
    <title>Input Forma</title>
</head>

<body>
    <div class="container d-flex vh-100 justify-content-center align-items-center">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-center text-bg-dark bg-opacity-75">
                    <div class="card-body align-items-center p-5 ">
                        <form action="output.php" method="post">
                            <div class="mb-3">
                                <label for="weight" class="form-label">Weight(kg)</label>
                                <input type="text" name="weight" class="form-control" id="weight">
                            </div>
                            <div class="mb-3">
                                <label for="height" class="form-label">Height(cm)</label>
                                <input type="text" name="height" class="form-control" id="height">
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary col-12">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>