<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/master.css">
    <title></title>
  </head>
  <style>
body {
  background-image: url('../images/chld1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;

}
div.transbox {
background-color: #ffffff;
border: 1px solid black;
opacity: 0.9;
background-color: #ffffff;
margin: 100px auto;
padding: 40px;
width: 50%;
min-width: 300px;
}
button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}


</style>
  <body>
    <div class="transbox">
    <form id="regForm" action="div_answer3.php" method ="POST">

<h1 style="text-align:center;">Attemp 30 Questions below:</h1><br>

<?php

 for ($question = 1; $question <= 30; $question++){
    $num1 = rand(1000,1000000);
    $num2 = rand(1,1000);
    $answer = $num1 / $num2;
    $answer = round($answer,2);
?>

<!-- One "tab" for each step in the form: -->
<div class="tab">
  <!-- <h2> Question: </h2> -->

  <h3><?= $question ." . ". $num1 ." / ". $num2 ." = "; ?></h3>
  <input type="hidden" value="<?=$num1?>" name="num1<?=$question?>">
  <input type="hidden" value="<?=$num2?>" name="num2<?=$question?>">
  <input type="hidden" value="<?=$answer?>" name="answer<?=$question?>">

    <input type="decimal" id ="answers" name = "jibu<?=$question?>" placeholder="Answere here...in some case use 2 decimal place" oninput="this.className = ''" required>

</div>
<br>
<?php
      }
  // echo  $name[0] . ", " . $name[1] . " and " . $name[2] . ".";
    ?>

    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>


      </div>
    <div style="overflow:auto;">
      <div style="float:right;">
              <button type="submit" id="nextBtn" onclick="nextPrev(1)" name="submit">submit</button>

      </div>
    </div>

    </form>
  </div>

<script type="text/javascript" src="assets/js/script.js">
</script>
  </body>
</html>
