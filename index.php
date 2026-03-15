<?php
include "includes/db.php";
include "includes/header.php";

$result=$conn->query("SELECT * FROM events LIMIT 3");
?>

<section class="hero">

<div class="hero-text">
<h1>Discover Amazing College Events</h1>
<p>Workshops • Hackathons • Cultural Fests • Tech Talks</p>

<a class="hero-btn" href="events.php">Explore Events</a>
</div>

</section>


<section class="featured">

<h2>Featured Events</h2>

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

<a class="btn" href="event-details.php?id=<?php echo $row['event_id']; ?>">
View Event
</a>

</div>

<?php } ?>

</div>

<div style="text-align:center;margin-top:30px;">
<a class="hero-btn" href="events.php">View All Events</a>
</div>

</section>


<section class="categories">

<h2>Event Categories</h2>

<div class="category-grid">

<div class="category">🎤 Cultural Fest</div>
<div class="category">💻 Hackathons</div>
<div class="category">📚 Workshops</div>
<div class="category">🎮 Gaming Events</div>

</div>

</section>

<?php include "includes/footer.php"; ?>