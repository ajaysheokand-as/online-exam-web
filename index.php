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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <title>Exam Practice Portal</title>
</head>

<style>
  .carousel-inner {
    height: 350px;
  }

  .item,
  img {
    height: 100% !important;
    width: 100% !important;

  }
</style>

<body>


  <div class="container">
    <center>
      <h2> Welcome to Exam Practice Portal </h2>
    </center>
  </div>

  <?php include('carousel.php') ?>
  <br>
  <div class="container text-center">
    <h2> Computer Exams Practice Set Papers Free</h2>
    <p> Start practising with us practice set papers. </p>
  </div>

  <div class="container">

  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-4"><br>
        <div class="card" style="width: 90%;">
          <img src="Picture\hartron.png" class="card-img-top" alt="Hartron">
          <div class="card-body">
            <h5 class="card-title">DEO Practice Set</h5>
            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            <a href="startTest.php" class="btn btn-primary">Start Practice Set</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4"><br>
        <div class="card" style="width: 90%;">
          <img src="Picture\hssc.png" class="card-img-top" alt="HSSC">
          <div class="card-body">
            <h5 class="card-title">HSSC Computer Questions</h5>
            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            <a href="startTest.php" class="btn btn-primary">Start Practice Set</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4"><br>
        <div class="card" style="width: 90%;">
          <img src="Picture\ssc.png" class="card-img-top" alt="SSC">
          <div class="card-body">
            <h5 class="card-title">SSC Computer Questions</h5>
            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            <a href="startTest.php" class="btn btn-primary">Start Practice Set</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-8"> <br>
        <div class="card">
          <h5 class="card-header">Instructions</h5>
          <div class="card-body">
            <!-- <h5 class="card-title">Instruction</h5> -->
            <p class="card-text">1. Each Test Contain 10 Question <br>
              2. To get more question, After Completing the Test You have to click on Start Next Test Button <br>
            </p>
            <!-- <p class="card-text"></p>
            <a href="question.php" class="btn btn-primary">Start Your First Test</a> -->
          </div>
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


  <?php include('footer.php'); ?>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
-->
</body>

</html>