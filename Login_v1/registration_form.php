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
            // $showError = "Passwords do not match";
            echo '<script type="text/javascript"> alert("Password dont match"); </script> ';
            exit();
        }
    }// end if

   else
   {
      $exists="email arleady exist";
   }

//end if

?>
