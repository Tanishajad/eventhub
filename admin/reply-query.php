<?php
include "../includes/db.php";

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM queries WHERE id='$id'");
$row = $result->fetch_assoc();

if(isset($_POST['send_reply'])){

$reply=$_POST['reply'];
$email=$row['email'];

$conn->query("UPDATE queries SET reply='$reply' WHERE id='$id'");

mail($email,"EventHub Response",$reply);

echo "<script>alert('Reply sent');window.location='manage-queries.php';</script>";
}
?>

<h2>Reply to Query</h2>

<p><b>Name:</b> <?php echo $row['name']; ?></p>
<p><b>Email:</b> <?php echo $row['email']; ?></p>
<p><b>Message:</b> <?php echo $row['message']; ?></p>

<form method="POST">

<textarea name="reply" placeholder="Write reply here"></textarea>

<br><br>

<button name="send_reply">Send Reply</button>

</form>