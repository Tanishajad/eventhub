<?php
include "includes/db.php";

if(isset($_POST['register'])){

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="INSERT INTO users(name,email,password)
VALUES('$name','$email','$password')";

$conn->query($sql);

echo "Registration successful";
}
?>

<?php include "includes/header.php"; ?>

<div class="auth-container">

<div class="auth-card">

<h2>Create Account</h2>

<form method="POST">

<input type="text" name="name" placeholder="Full Name" required>

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button class="auth-btn" name="register">Register</button>

</form>

<a class="auth-link" href="login.php">
Already have an account? Login
</a>

</div>

</div>

<?php include "includes/footer.php"; ?>