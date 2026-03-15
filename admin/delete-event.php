<?php
include "../includes/db.php";

$id = $_GET['id'];

$sql = "DELETE FROM events WHERE event_id='$id'";

if($conn->query($sql)){
    header("Location: manage-events.php");
    exit();
}else{
    echo "Error deleting event";
}
?>