<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title> Report Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!--===============================================================================================-->
  <style media="screen">
  .center {
    margin-left: auto;
    margin-right: auto;
  }
  #grad{
    background-image: linear-gradient(to right, #f799ec,#dec7e4, #85a7ea);

  }
  table, th, td {
    border: 2px solid black;
    background-color: white;
    border-radius: 10px;
    text-align:center;
  }
  td
  {
    text-align:center;
    padding: 10px;
  }
  th
  {
    padding: 20px;
  }
  </style>
</head>
<body id="grad">


  <?php

  require_once("dbconnect.php");
  session_start();
  $student_id = $_SESSION['student_id'];

  // $query = "SELECT student.student_id, student.first_name,student.last_name,calculation.name,level.name,result.total_mark,result.grade,result.status,result.date
  // FROM student, calculation,level,result
  // WHERE student.student_id = $student_id
  // AND  result.student_id = $student_id
  // AND  student.student_id=result.student_student_id
  // AND calculation.calculation_id=result.calculation_calculation_id
  //  AND level.level_id=result.level_level_id";
  $query ="SELECT * FROM student
  INNER JOIN result ON student.student_id=result.student_student_id
  INNER JOIN  calculation ON calculation.calculation_id=result.calculation_calculation_id
  INNER JOIN level ON level.level_id=result.level_level_id WHERE student_id = $student_id
  ORDER BY result.date ASC";

  //$query = " select * from student where student_id='".$student_id."' ";

  $result = mysqli_query($conn,$query);
  ?>
  <!-- <div style="background-color:white;" > -->
  <div style="float:right; color:blue; padding: 10px;background-color: white;">
    <a  href="../login/index.php" style="text-decoration: none;"> <i class="fa fa-home fa-2x" aria-hidden="true"> GO HOME</i></a>
  </div>
  <h2 style="text-align:center;  margin-top:100px;"> RESULTS FOR PERFOMED QUESTIONS</h2>


  <table  class="center" style='width:70%' border='1' cellspacing='1' cellpadding='1'>



    <!-- <th>first_name</th>
    <th>last_name</th> --><tr>
    <th>No.</th>
    <th>calculation</th>
    <th>level</th>
    <th>total_mark</th>
    <th>grade</th>
    <th>status</th>
    <th>date</th>
  </tr>

  <?php
  // select first_name,sur_name,kosa_name,category_name,date from student,makosa,category,student_makosa where student_makosa.student_id=student.student_id and student_makosa.kosa_id=makosa.kosa_id and category.category_id=makosa.category_id;


  for($i=1;$i<=mysqli_num_rows($result);$i++)
  {
    $row=mysqli_fetch_array($result);

    $student_id = $row['student_id'];
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $calculation_calculation_id = $row['calculation_id'];
    $level_name = $row['name'];
    $total_mark = $row['total_mark'];
    $grade = $row['grade'];
    $status = $row['status'];
    $date = $row['date'];

    ?>

    <td><?php echo $i; ?></td>
    <td><?php echo $calculation_calculation_id; ?></td>
    <td><?php echo $level_name; ?></td>
    <td><?php echo $total_mark; ?></td>
    <td><?php echo $grade; ?></td>
    <td><?php echo $status; ?></td>
    <td><?php echo $date; ?></td>
  </tr>
  <?php
}

?>
</table>
</div>



</body>
</html>
