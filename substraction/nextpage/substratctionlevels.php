<?php
  session_start();
    $data =$_SESSION['student_id'];
  include 'dbconnect.php';
  $sql = "INSERT INTO `enroll`(`enroll_id`, `date`, `student_student_id`, `calculation_calculation_id`) VALUES
   ('','','$data','1')";
   $query = mysqli_query ($conn, $sql);
   if ($query){
    ?>

<!DOCTYPE html>
<html>
<head>
<title>Solving Questions</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<style>
body {
background-image: url('../images/chld6.jpg');
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

</style>
<body id="top">

<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="" style="font-family: cursive;  font-size:30px;">

    <div class="fl_left">
      <ul class="nospace inline pushright">
          <li> <a href="../../login/index.php"><i class="fa fa-home">HOME</i></a></li>

      </ul>
    </div>
  </div>

  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded" style="background-image:url('images/demo/backgrounds/chld1.jpg');">
  <!-- ################################################################################################ -->
  <div class="wrapper">
    <article id="pageintro" class="hoc clear">
      <!-- ################################################################################################ -->
      <!-- <h2 class="heading">so nice</h2> -->
      <p style="text-align: center; color:DodgerBlue; font-family: cursive;">welcome to Perform more substraction (-) questions</p>
      <!-- <footer><a class="btn" href="#">HOME</a></footer> -->
      <!-- ################################################################################################ -->
    </article>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row2">
    <div id="introblocks" class="hoc clear">
      <!-- ################################################################################################ -->
      <article class="one_quarter first"><a href="../sub_level_one.php" title="Learn up to ( Hundreds)"><i class="fa fa-battery-quarter"></i>
        <h3 class="heading">Level One</h3>
        </a></article>
      <article class="one_quarter"><a href="../sub_level_two.php" title="Learn up to ( Thousands )"><i class="fa fa-battery-2"></i>
        <h3 class="heading">Level Two</h3>
        </a></article>
      <article class="one_quarter"><a href="../sub_level_three.php" title="Learn up to ( 100 Thousands )"><i class="fa fa-battery-3"></i>
        <h3 class="heading">Level Three</h3>
        </a></article>
      <article class="one_quarter"><a href="../sub_level_four.php" title="Learn up to ( 1 Billion )"><i class="fa fa-battery-full"></i>
        <h3 class="heading">Level Four</h3>
        </a></article>
      <!-- ################################################################################################ -->
      <div class="clear"></div>
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>

<!-- ################################################################################################ -->
<div class="wrapper row4 " style="font-family: cursive; font-size:0px;">
  <footer id="footer" class="hoc clear">
    <!-- ################################################################################################ -->

  <p>welcome to Perform more addition questions ........... </p>
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <p class="fl_left">Copyright &copy; 2021- All Rights Reserved  <a href="#"></a></p>
    <p class="fl_right">Programmed by <a target="_blank" href="mailto:meydmvungi@gmail.com" title="for more contact">Eyd Mvungi</a></p>

  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>
<?php
}
else{
  echo "error";
}
?>
