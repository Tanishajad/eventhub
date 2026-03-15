<?php
include "includes/db.php";
include "includes/header.php";

$result=$conn->query("SELECT * FROM events");
?>

<div class="container">

<h2>Upcoming Events</h2>

<input type="text" id="search" placeholder="Search events..." onkeyup="searchEvents()">

<div class="events-grid">

<?php
while($row=$result->fetch_assoc()){
?>

<div class="event-card">

<img src="<?php echo $row['image']; ?>">

<h3><?php echo $row['event_name']; ?></h3>

<p><?php echo substr($row['description'],0,80); ?>...</p>

<p>📅 <?php echo $row['event_date']; ?></p>

<p>📍 <?php echo $row['venue']; ?></p>

<p>🎟 Seats: <?php echo $row['capacity']; ?></p>

<a class="btn" href="event-details.php?id=<?php echo $row['event_id']; ?>">View</a>

</div>

<?php } ?>

</div>
</div>

<script>
function searchEvents(){
let input=document.getElementById("search").value.toLowerCase();
let cards=document.querySelectorAll(".event-card");

cards.forEach(card=>{
let title=card.innerText.toLowerCase();

if(title.includes(input)){
card.style.display="block";
}else{
card.style.display="none";
}
});
}
</script>

<?php include "includes/footer.php"; ?>
