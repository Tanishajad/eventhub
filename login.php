<?php
session_start();
include "includes/db.php";

if(isset($_POST['login'])){

$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM users WHERE email='$email' AND password='$password'";

$result=$conn->query($sql);

if($result->num_rows>0){

$row=$result->fetch_assoc();

$_SESSION['user_id']=$row['id'];

header("Location:index.php");
exit();

}else{
echo "Invalid login";
}
}
?>
<?php include "includes/header.php"; ?>

<div class="auth-container">

<div class="auth-card">

<h2>Welcome Back</h2>

<form method="POST">

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button class="auth-btn" name="login">Login</button>

</form>

<a class="auth-link" href="register.php">
Don't have an account? Register
</a>

</div>

</div>

<?php include "includes/footer.php"; ?>