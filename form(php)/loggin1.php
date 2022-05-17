<?php 
include 'configration.php';
session_start();

if (isset($_SESSION['email'])) {
    header("Location: welcome.php");

}
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = ($_POST['password']);

  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($connect, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['email'] = $row['email'];
    var_dump($row);
    header("Location: welcome.php");
  } else {
    echo "<script>alert('Email or Password is Wrong.')</script>";

  }
  
}
?>

<html>
  <head>
    <title>login</title>
    <link rel="stylesheet" href="style.css">
  
  </head>
  <body>
<div class="parent">
      
  <div class="child">
  <h2>Login</h2>  
    <form action="welcome.php" method="post" class="input-form" >
      <div class="input1">
        <input type="text" name="email" placeholder="Enter Username">
        
        </div>
      
        <div class=" input2">
        <input type="password" name="password" class="password" placeholder="Password">
            <span class="show">  Show </span>
        
        </div>
      
      
      <div class="input3">
        <input type="submit" name="login" value="Sign in">
        </div>
      
      
      </form>
    <div class="signup" >  Don't have an account?
      <p class="formlink"><a href="SignUp.php" id="linkCreateAccount" > Sign up</a>
      </p>
      
      </div>
    

    <script type="text/javascript" src="js/main.js" ></script>  
  </body>
</html>
 





