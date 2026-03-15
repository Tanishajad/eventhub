<?php

$conn = new mysqli("localhost","root","","eventhub");

if($conn->connect_error){
die("Connection failed");
}

?>