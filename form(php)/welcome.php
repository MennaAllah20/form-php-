<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: loggin1.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] ;?>
</body>
</html>