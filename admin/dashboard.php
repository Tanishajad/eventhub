<?php
session_start();

if(!isset($_SESSION['admin'])){
header("Location: admin-login.php");
exit();
}
?>
<h2>Admin Dashboard</h2>

<a href="add-event.php">Add Event</a><br><br>

<a href="manage-events.php">Manage Events</a><br><br>

<a href="manage-bookings.php">Manage Bookings</a><br><br>

<a href="manage-users.php">Manage Users</a><br><br>

<a href="manage-queries.php">View Queries</a>