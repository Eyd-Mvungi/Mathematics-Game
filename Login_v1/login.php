
<?php
include 'dbconnect.php';
//
// if(isset($_POST['submit']))
// {
// 	$email = $_POST["email"];
// 	$password  = sha1($_POST["password"]);
//
// 	$sql = "SELECT * FROM student WHERE email = '$email' AND password = '$password' ";
// 	$query = mysqli_query($conn, $sql);
//
// 	if($query)
// 	{
// 		if(mysqli_num_rows($query) == 1)
// 		{
// 			header("location:../login/index.php");
// 		}
//
// 		else {
// 			{
//
// 				echo "Wrong username or Password";
// 			}
// 		}
// 	}
//
// 	else {
// 		echo "Not Executed";
// 	}
// }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
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

				<form action="" method="post">

					<span class="login100-form-title"  style="font-size:30px;">
							<marquee scrollamount="5"><p style="color: #ba39b1; font-family: cursive;  font-size:13px;">CHILDREN MATHEMATICS LEARNING SYSTEM</p></marquee>
						 Login

					</span>
					<?php
					if(isset($_POST['submit']))
					{
						$email = $_POST["email"];
						$password  = sha1($_POST["password"]);

						$sql = "SELECT * FROM student WHERE email = '$email' AND password = '$password' LIMIT 1";
						$query = mysqli_query($conn, $sql);

						if($query)
						{
							if(mysqli_num_rows($query) == 1)
							{  $row = mysqli_fetch_assoc($query);
                session_start();
                $_SESSION['student_id'] = $row['student_id'];
                $_SESSION['first_name'] = $row['first_name'];

								header("location:../login/index.php");
							}

							else {
								{
?>
								<h2 style="color:red; font-size:20px; text-align: center;"><?php	echo "Wrong username or Password"; ?></h2>
								<br>
								<?php
								}
							}
						}

						else {
							echo "Not Executed";
						}
					}
					?>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="email" placeholder="Email"  required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="password" name="password" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit">
						<h4>	Login  <i class="fa fa-sign-in" aria-hidden="true"></i></h4>
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="registration.php" style=" font-size:20px;">
							Create your Account
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
