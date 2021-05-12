<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Online Exam Web</title>
</head>

<body>


    <?php
    session_start();
    include('header.php');
    include('config.php');

    ?>

    <div class="container text-center">
        <h1> Compputer Related Exams Practice Set Papers </h1>
        <p> Start practising with us practice set papers free. </p>
    </div>

    <!-- Question show on screen -->

    <div class="container">
        <div class="row">


            <div class="col-sm-8">

                <?php
                for ($i = 1; $i <= 10; $i++) {


                    $qid = rand(1, 886);
                    $sql = "SELECT ques FROM question where qid=$qid";
                    $result = $conn->query($sql);

                    $sql = "SELECT a FROM question where qid=$qid";
                    $a = $conn->query($sql);

                    $sql = "SELECT b FROM question where qid=$qid";
                    $b = $conn->query($sql);

                    $sql = "SELECT c FROM question where qid=$qid";
                    $c = $conn->query($sql);

                    $sql = "SELECT d FROM question where qid=$qid";
                    $d = $conn->query($sql);

                    $sql = "SELECT ans FROM question where qid=$qid";
                    $ans = $conn->query($sql);

                    $sql = "SELECT topic FROM question where qid=$qid";
                    $topic = $conn->query($sql);

                ?>
                    <br>
                    <div class="card text-left">
                        <div class="card-header">
                            <h6>
                                <?php

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "Question: ", $i, " ", $row['ques'];
                                } ?>

                        </div>
                        </h6>

                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">1.
                                    <?php

                                    while ($row = mysqli_fetch_assoc($a)) {
                                        echo $row['a'];
                                    } ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">2.
                                    <?php

                                    while ($row = mysqli_fetch_assoc($b)) {
                                        echo $row['b'];
                                    } ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault3">3.
                                    <?php

                                    while ($row = mysqli_fetch_assoc($c)) {
                                        echo $row['c'];
                                    } ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault4">4.
                                    <?php
                                    // ghfg
                                    while ($row = mysqli_fetch_assoc($d)) {
                                        echo $row['d'];
                                    } ?>
                                </label>
                                </br>
                                <label id="ans<?php echo $i; ?>" name="ans" style="display:none;">
                                    <?php
                                    while ($row = mysqli_fetch_assoc($ans)) {
                                        echo "Answer is: " . $row['ans'];
                                    } ?>
                                </label>

                            </div>

                            </lable>
                            </br>



                            <!-- <button type="reset" id="reset" name="reset" class="btn btn-primary"> Reset </button> -->

                            <button id="showans" name="showans" class="btn btn-dark" onclick="showAns(<?php echo $i; ?>);"> Show Answer </button>
                            </br>
                            </br>
                            <lable id="topic" name="topic" value=" "> Topic:
                                <?php
                                while ($row = mysqli_fetch_assoc($topic)) {
                                    echo $row['topic'];
                                } ?>
                            </lable>
                        </div>
                        <!-- </form> -->
                    </div>
                <?php } ?>
                <br>
                <div class="container">
                    <a href="question.php">
                        <button type="submit" id="submit" name="submit" class="btn btn-success">Start Next Test </button>
                    </a>
                </div>

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


    <!-- <form > -->

    </div>
    <?php include('footer.php'); ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
        function showAns(i) {
            $('#ans' + i).css('color', 'red');
            $('#ans' + i).css('display', 'block');
            $('#ans' + i).show();
        }
        // $(document).ready(function(){
        //     var ans = $('#ans').val();
        //     $('#showans').click(function(){

        //         //var ans=2;
        //         $('#answ').html("Answer is : " );
        //         $('#answ').css('color','red');
        //         return false;
        //     })
        // })
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>