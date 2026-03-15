<!DOCTYPE html>
<html>
<head>
<title>EventHub</title>
<link rel="stylesheet" href="/eventhub/css/style.css">
</head>

<body>

<header>

<h1>EventHub</h1>

<nav>
<a href="/eventhub/index.php">Home</a>
<a href="/eventhub/events.php">Events</a>
<a href="/eventhub/my-bookings.php">My Bookings</a>
<a href="/eventhub/contact.php">Contact</a>

<?php
if(isset($_SESSION['user_id'])){
echo "<a href='/eventhub/logout.php'>Logout</a>";
}else{
echo "<a href='/eventhub/login.php'>Login</a>";
echo "<a href='/eventhub/register.php'>Register</a>";
}
?>

</nav>

</header>