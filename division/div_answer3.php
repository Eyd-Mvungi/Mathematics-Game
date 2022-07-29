<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/master.css">
    <title></title>
  </head>
  <style media="screen">
  body {
    background-color:MediumSeaGreen;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;

  }
  </style>
  <body>
<?php
$operand1 = array();
$operand2 = array();
$sum = array();
$totalQuestions = 30;
$countRight = 0;
$wrong = "";
for ($question = 1; $question <= $totalQuestions; $question++){
    $num1Index = "num1" . $question;
    $num2Index = "num2" . $question;
    $answerIndex = "answer" . $question;
    $jibuIndex = "jibu" . $question;
    $operand1[] = $_POST[$num1Index];
    $operand2[] = $_POST[$num2Index];
    $sum[] = $_POST[$answerIndex];
    $jibu[] = $_POST[$jibuIndex];

  }

  for($i = 0; $i < $totalQuestions; $i++) {
    // echo $operand1[$i] . " + " . $operand2[$i] . " = " . $sum[$i] . "<br>";
    if ($sum[$i] == $jibu[$i]) {
      $countRight++;
    }
    else {
      $wrong =" wrong answer";
    }
  }
  $countRight = (($countRight/$totalQuestions)* 100);
  $countRight = round($countRight,2);

  if ($countRight == 0){
      $countRight = 0.01;
  }

  if( $countRight >= 90){
    $grade = " A+ ";
    $status = "Execellent ";
    }
    else if ( $countRight >=80){
      $grade = " A ";
      $status = "Very good ";
      }
      else if ( $countRight >=70){
        $grade = " B+ ";
        $status = "Well done ";

        }
  else if ( $countRight >=60){
    $grade = " B ";
    $status = " Good ";
    }
  else if ( $countRight >=50){
    $grade = " c ";
    $status = " Pass ";
    }
    else if ( $countRight >=40){
      $grade = " D ";
      $status = " Tried ";
      }
  else if ( $countRight < 40){
    $grade = " F ";
    $status = " Failed ";
    }
  if ($countRight){
    session_start();
      $data =$_SESSION['student_id'];
    include 'dbconnect.php';
    $sql = "INSERT INTO `result`(`idscore`, `student_student_id`, `calculation_calculation_id`, `level_level_id`, `total_mark`, `grade`, `status`)
       VALUES ('','$data','4','3','$countRight','$grade','$status')";

     if ($query){
       echo "";
     }
       else{
         echo "error";
       }
  }
?>


  <div id="redForm">
      <h1 class=""><table style="">Your  score and aswers for the attempted questions score : <?=$countRight." % ". "(".$grade.")".  $status?></h1>
      <ol>
      <?php for($i=0; $i < $totalQuestions; $i++) {?>

        <li><?=$operand1[$i] . " / " . $operand2[$i] . " = " . $jibu[$i] . ""?>
          <?php if(($sum[$i] != $jibu[$i])){
          // echo  $wrong;
            echo "<b style = ' color: red;'> wrong answer </b>";
         }  ?>
        </li>

    <?php } ?>
    </ol>

    <h3>Correct answers for the given questions</h3>
    <ol>
    <?php for($i=0; $i < $totalQuestions; $i++) {?>

      <li><?=$operand1[$i] . " / " . $operand2[$i] . " = " . $sum[$i] . ""?></li>


  <?php } ?>
  </ol>
</table>
  </div>
  <div style="float:right;">
<button class="button button1" ><a href="nextpage/divisionlevels.php" style="text-decoration: none;"> <h3>Perfom More division</h3></a></button>
</div>

<div style="float:right;">
<button class="button button1" ><a href="../login/index.php" style="text-decoration: none;"> <h3>HOME</h3></a></button>
</div>
</body>
</html>
