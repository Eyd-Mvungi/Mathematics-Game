<?php
include 'dbconnect.php';

if(isset($_POST['submit'])){
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
		$email = $_POST["email"];
		$password  = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $sql = "Select * from student where email='$email'";

    $result = mysqli_query($conn, $sql);

    // This sql query is use to check if
    // the username is already present
    // or not in our Database
    // if(mysqli_num_rows($result) <0) {

        if($password == $cpassword) {

            $password = sha1($password);

            // Password Hashing is used here.
            $sql = "INSERT INTO `student`(`first_name`, `last_name`, `email`, `password`)
             VALUES ('$first_name','$last_name','$email','$password')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
							echo "Registered successfully";
                header('location:login.php');
            }

						else {
							echo '<script type="text/javascript"> alert("email already exist"); </script> ';
              exit();
						}
        }
        else {
            $showError = "Passwords do not match";
        }
    }// end if

   else
   {
      $exists="email arleady exist";
   }

//end if

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>registarion</title>
	<meta charset="UTF-8">
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
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/circle-cropped.png" alt="IMG">
				</div>

				<form action="registration_form.php" method="post">
					<?php if (isset($_GET['error'])){?>
							<center><h2 style="font-size:20px; color:red;"><?php echo "Email Already Exist";?></h2></center>
				<?php	}?>
						<marquee scrollamount="5"><p style="color:#ba39b1;font-family: cursive; font-size:12px;">CHILDREN MATHEMATICS LEARNING SYSTEM</p></marquee>
					<span class="login100-form-title"  style=" font-size:30px;">

						 Register Here
					</span>


					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="first_name" placeholder="first_name" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-baby" aria-hidden="true"></i>
						</span>
					</div>
          <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="last_name" placeholder="last_name" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-baby" aria-hidden="true"></i>
						</span>
					</div>
          <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="email" placeholder="Email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
							</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="password" name="password" placeholder="create Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="password" name="cpassword" placeholder="verify Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit">
							Register
						</button>
					</div>
					<div class="text-center p-t-136">
						<a class="txt2"  href="login.php" style=" font-size:20px;">
							You have an account? Login
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
