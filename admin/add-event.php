<?php
include "../includes/db.php";

if(isset($_POST['add'])){

$name=$_POST['name'];
$date=$_POST['date'];
$venue=$_POST['venue'];
$desc=$_POST['description'];
$image=$_POST['image'];
$capacity=$_POST['capacity'];

$sql="INSERT INTO events(event_name,event_date,venue,description,image,capacity)
VALUES('$name','$date','$venue','$desc','$image','$capacity')";

$conn->query($sql);

echo "<script>alert('Event Added Successfully')</script>";
}
?>

<h2>Add Event</h2>

<form method="POST">

<input name="name" placeholder="Event name"><br><br>

<input type="date" name="date"><br><br>

<input name="venue" placeholder="Venue"><br><br>

<input name="image" placeholder="Image URL"><br><br>

<input name="capacity" placeholder="Total Seats"><br><br>

<textarea name="description" placeholder="Description"></textarea><br><br>

<button name="add">Add Event</button>

</form>