<?php
include('header.php');

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Exam Portal</title>
</head>

<body>
    <div class="container text-center">
        <h1> Compputer Related Exams Practice Set Papers </h1>
        <p> Start practising with us practice set papers free. </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">S.No.</th>
                            <th scope="col">Test</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 1; $i <= 10; $i++) { ?>
                            <tr>
                                <th scope="row"><?php echo $i ?></th>
                                <td>Test Serise - <?php echo $i ?> </td>
                                <td><a href="question.php">
                                        <button type="submit" id="submit" name="submit" class="btn btn-success">Start Test </button>
                                    </a></td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-4"> <br>
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <h5>Other Category </h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="#" class="text-uppercase fw-bolder"> Computer Fundamental </a> </li>
                        <li class="list-group-item"><a href="#" class="text-uppercase fw-bolder"> MS-Office </a></li>
                        <li class="list-group-item"><a href="#" class="text-uppercase fw-bolder"> Internet </a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <?php include('footer.php')  ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
</body>

</html>