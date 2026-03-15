<?php
session_start();
include "includes/db.php";

if(!isset($_SESSION['user_id'])){
echo "<script>alert('Please login first');window.location='login.php';</script>";
exit();
}

$user=$_SESSION['user_id'];
$event=$_GET['id'];

$sql="INSERT INTO bookings(user_id,event_id)
VALUES('$user','$event')";

$conn->query($sql);

echo "<script>
alert('Event booked successfully!');
window.location='my-bookings.php';
</script>";
?>