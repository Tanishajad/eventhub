<?php
include "../includes/db.php";

$result = $conn->query("SELECT * FROM queries");
?>

<h2>User Queries</h2>

<?php
while($row = $result->fetch_assoc()){
?>

<div style="border:1px solid #ccc;padding:15px;margin-bottom:15px;">

<b>Name:</b> <?php echo $row['name']; ?><br>

<b>Email:</b> <?php echo $row['email']; ?><br>

<b>Message:</b> <?php echo $row['message']; ?><br><br>

<a href="reply-query.php?id=<?php echo $row['id']; ?>">Reply</a>

</div>

<?php } ?>