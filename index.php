

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
 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><h3> Computer Practice Set </h3></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php">Hartron</a>
            </li>
           
        </ul>
        
        </div>
    </div>
    </nav>
    <br>
<form action=""> 
<!-- Question show on screen -->
<div class="container">
    
    <div class="card text-left">
    <?php
session_start();
include('config.php');
if(isset($_GET['ques_ids'])){
    $ques_id_str = $_GET['ques_ids'];
    $ques_id_array = explode(',',$ques_id_str);
    for($i=0;$i<(count($ques_id_array)-1);$i++){
        echo 'qus ',$i+1,': ';
        if(!isset($_GET['ques_selected_option'.($i+1)]))
         $selected_ans = 0;
         else {
        $selected_ans = $_GET['ques_selected_option'.($i+1)];
        
        $sql = "SELECT * FROM question where qid=$ques_id_array[$i]";
        $res = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($res)){
            $db_rigth_ans =  $row['ans'];
        }
    }
        if($selected_ans ==0) echo 'not selected any option<br>';
    
    else{
        if($selected_ans == $db_rigth_ans){
            echo 'right ans <br>';
        }else echo 'wrong ans <br>';
    }
}
}
else{
$que_id = "";

for($i=1; $i<=10;$i++){


$qid=rand(1,886);
$que_id .= $qid.",";
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


            <div class="card-header">
               <h6>
                <?php 
                
                while( $row = mysqli_fetch_assoc($result) ){
                    echo "Question ".$i.": ", $row['ques'];
                } ?>
                
            </div>
            </h6>
           
            <div class="card-body">
            <div class="form-check">
                    <input class="form-check-input" type="radio" value="1" name="ques_selected_option<?php echo $i; ?>" id="flexRadioDefault1<?php echo $i; ?>">
                    <label class="form-check-label" for="flexRadioDefault1<?php echo $i; ?>" >1.
                    <?php 
                
                while( $row = mysqli_fetch_assoc($a) ){
                    echo $row['a'];
                } ?>
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" value="2" name="ques_selected_option<?php echo $i; ?>" id="flexRadioDefault2<?php echo $i; ?>" >
                    <label class="form-check-label" for="flexRadioDefault2<?php echo $i; ?>">2.
                    <?php 
                
                while( $row = mysqli_fetch_assoc($b) ){
                    echo $row['b'];
                } ?>
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" value="3" name="ques_selected_option<?php echo $i; ?>" id="flexRadioDefault3<?php echo $i; ?>">
                    <label class="form-check-label" for="flexRadioDefault3<?php echo $i; ?>">3.
                    <?php 
                
                while( $row = mysqli_fetch_assoc($c) ){
                    echo $row['c'];
                } ?>
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" value="4" type="radio" name="ques_selected_option<?php echo $i; ?>" id="flexRadioDefault4<?php echo $i; ?>" >
                    <label class="form-check-label" for="flexRadioDefault4<?php echo $i; ?>" >4.
                    <?php 
                while( $row = mysqli_fetch_assoc($d) ){
                    echo $row['d'];
                } ?>
                 </label>
                </br>
                <label  id="ans<?php echo $i; ?>" name="ans" style="display:none;" >
                <?php 
                    while( $row = mysqli_fetch_assoc($ans) ){
                    echo "Answer is: ".$row['ans'];
                } ?>
                 </label>
                    </div>
                 </lable>
                 </br>
                 <hr>
                <!-- <a href="index.php">
                <button type="submit" id="submit" name="submit" class="btn btn-success"> Next </button>
                </a>
                
                <button type="reset" id="reset" name="reset" class="btn btn-primary"> Reset </button>
                
                <button id="showans" name="showans" class="btn btn-dark" onclick="showAns(<?php echo $i; ?>);"> Show Answer </button> -->
                </br>
                </br>
                <lable id="topic" name="topic" value=" "  > Topic: 
                <?php 
                    while( $row = mysqli_fetch_assoc($topic) ){
                    echo $row['topic'];
                } ?>
                 </lable>
            </div>
            <?php } ?><input type="text" name="ques_ids" value="<?php  print_r($que_id); ?> " />

            <input type="submit" value="Submit" name="submit" class ="btn btn-success">
            </form>
            <?php } ?>
            <div class="card-footer text-muted">
                Created By : AjAy SHEOKAND
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script type="text/javascript">
    function showAns(i){
        $('#ans'+i).css('color','red');
        $('#ans'+i).css('display','block');
        $('#ans'+i).show();
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
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
   
  </body>
</html>