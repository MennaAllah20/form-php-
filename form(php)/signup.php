<?php 
include 'configration.php';
session_start();

if (isset($_SESSION['username'])) {
    header("location: welcome.php");
}

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    if($password==$cpassword){
        $sql= "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($connect, $sql);
        if(!$result ->num_rows > 0){
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($connect, $sql);
            if ($result) {
                echo "<script>alert('User Registration Completed.')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert(' Something Wrong Went.')</script>";
            }
        }else {
            echo "<script>alert('Email Already Exists.')</script>";
        }

    }else{
        echo '<script>alert("Password not matched")</script>';
    }

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>sign up</title>
    <link rel="stylesheet" href="style.css"></head>
    <style>
    	body { 

            background-image: url(2.jpg) ;
       
            background-repeat : no-repeat;
            background-position: center center;
            background-attachment: fixed;

            background-size: cover;
            background-size: cover;
            background-size: cover;
            background-size: cover;
}
    </style>

<body >
	<div class="parent">
        <div class="child">
	        <form class="form-hidden" id="createAccount" method="POST" action="">
            <h1 class="form-title">Create Account</h1>
            <div class="form-input-group">
                <input type="text" id="signupUsername" class="form-input"  placeholder="Username" name="username"required >
            </div>
            <div class="form-input-group">
                <input type="text" class="form-input"  placeholder="Email Address" name="email"  required>
            </div>
            
            <div class="form-input-group">
                <input type="password" class="form-input"  placeholder="Password" name="password"required>
            </div>
            <div class="form-input-group">
                <input type="password" class="form-input" placeholder="Confirm password" name="cpassword" required>
            </div>
            <div class="input4">
                <input type="submit" name="submit" value="Sign up">
            </div>
          <div class ="signin">
            <p class="formlink" ><a href="loggin1.php" id="linkLogin">Already have an account? Sign in</a>
            </p>
          </div>

        </div>    

    </div>
      <script type="text/javascript" src="js/main.js" ></script>  

</body>
</html>
