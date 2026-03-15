<?php
include "includes/db.php";

$q=$_GET['q'];

$sql="SELECT * FROM events WHERE event_name LIKE '%$q%'";

$result=$conn->query($sql);

while($row=$result->fetch_assoc()){
echo $row['event_name']."<br>";
}
?>