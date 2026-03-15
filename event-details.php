<?php
include "includes/db.php";
include "includes/header.php";

$id=$_GET['id'];

$result=$conn->query("SELECT * FROM events WHERE event_id=$id");

$row=$result->fetch_assoc();
?>

<h2><?php echo $row['event_name']; ?></h2>

<p><?php echo $row['description']; ?></p>

<p>Date: <?php echo $row['event_date']; ?></p>

<p>Venue: <?php echo $row['venue']; ?></p>

<a href="book-event.php?id=<?php echo $row['event_id']; ?>">Book Event</a>

<?php include "includes/footer.php"; ?>