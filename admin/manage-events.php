<?php
include "../includes/db.php";

$result=$conn->query("SELECT * FROM events");

while($row=$result->fetch_assoc()){

echo $row['event_name'];
echo "<a href='delete-event.php?id=".$row['event_id']."' onclick=\"return confirm('Delete this event?')\">Delete</a>";
}
?>