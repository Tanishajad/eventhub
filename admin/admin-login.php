<?php
session_start();
include "../includes/db.php";

if(isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if($result->num_rows > 0){

$_SESSION['admin'] = $username;

header("Location: dashboard.php");
exit();

}else{
$error = "Invalid admin credentials!";
}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
</head>

<body>

<h2>Admin Login</h2>

<?php
if(isset($error)){
echo "<p style='color:red'>$error</p>";
}
?>

<form method="POST">

<input type="text" name="username" placeholder="Username" required><br><br>

<input type="password" name="password" placeholder="Password" required><br><br>

<button type="submit" name="login">Login</button>

</form>

</body>
</html>