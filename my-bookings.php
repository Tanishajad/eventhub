<?php
session_start();
include "includes/db.php";

/* CHECK LOGIN */

if(!isset($_SESSION['user_id'])){
    echo "<script>
    alert('Please login first');
    window.location='login.php';
    </script>";
    exit();
}

include "includes/header.php";

$user = $_SESSION['user_id'];

$sql="SELECT events.* 
FROM bookings
JOIN events ON bookings.event_id = events.event_id
WHERE bookings.user_id='$user'";

$result=$conn->query($sql);
?>

<div class="container">

<h2>My Bookings</h2>

<div class="events-grid">

<?php
if($result->num_rows == 0){
    echo "<p>You have not booked any events yet.</p>";
}

while($row=$result->fetch_assoc()){
?>

<div class="event-card">

<img src="<?php echo $row['image']; ?>">

<h3><?php echo $row['event_name']; ?></h3>

<p>📅 <?php echo $row['event_date']; ?></p>

<p>📍 <?php echo $row['venue']; ?></p>
<a class="btn" href="cancel-booking.php?id=<?php echo $row['event_id']; ?>"
onclick="return confirm('Cancel this booking?')">
Cancel Booking
</a>
</div>

<?php } ?>

</div>
</div>

<?php include "includes/footer.php"; ?>
