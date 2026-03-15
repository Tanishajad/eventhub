<?php
include "../includes/db.php";

$sql="SELECT users.name,events.event_name
FROM bookings
JOIN users ON bookings.user_id=users.id
JOIN events ON bookings.event_id=events.event_id";

$result=$conn->query($sql);

while($row=$result->fetch_assoc()){

echo $row['name']." booked ".$row['event_name']."<br>";

}
?>