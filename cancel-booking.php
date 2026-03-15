<?php
session_start();
include "includes/db.php";

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$user = $_SESSION['user_id'];
$event_id = $_GET['id'];

$sql = "DELETE FROM bookings 
        WHERE user_id='$user' 
        AND event_id='$event_id'";

$conn->query($sql);

echo "<script>
alert('Booking cancelled successfully');
window.location='my-bookings.php';
</script>";
?>