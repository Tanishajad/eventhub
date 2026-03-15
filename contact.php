<?php
include "includes/db.php";

if(isset($_POST['send'])){

$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['message'];

$sql="INSERT INTO queries(name,email,message)
VALUES('$name','$email','$msg')";

$conn->query($sql);

echo "<script>
alert('Thank you! Response sent to your email.');
</script>";
}
?>
<?php include "includes/header.php"; ?>
<section class="college-about">

<h1>About Our College</h1>

<p>
Our college is dedicated to nurturing innovation, creativity,
and leadership among students. Through technical festivals,
cultural events, workshops, and seminars, we create
opportunities for students to learn beyond classrooms.
</p>
<section class="coordinators">

<h2>Event Coordinators</h2>

<div class="coordinator-grid">

<div class="coordinator-card">
<img src="images/coordinator1.jpg">
<h3>Dr. Meera Sharma</h3>
<p>Faculty Event Coordinator</p>
</div>

<div class="coordinator-card">
<img src="images/coordinator2.jpg">
<h3>Rahul Verma</h3>
<p>Student Event Head</p>
</div>

<div class="coordinator-card">
<img src="images/coordinator3.jpg">
<h3>Ananya Patel</h3>
<p>Cultural Coordinator</p>
</div>

</div>

</section>
<section class="leadership">

<h2>Leadership Messages</h2>

<div class="leader-scroll">

<div class="leader-card">
<img src="images/principal.jpg">
<h3>Principal</h3>
<p>
"Our college events inspire students to innovate,
collaborate and lead with confidence."
</p>
</div>

<div class="leader-card">
<img src="images/director.jpg">
<h3>Director</h3>
<p>
"We encourage students to explore creativity
through cultural and technical platforms."
</p>
</div>

<div class="leader-card">
<img src="images/guruji.jpg">
<h3>Guruji</h3>
<p>
"Education combined with events builds
character, teamwork and leadership."
</p>
</div>

</div>

</section>
<section class="feedback">

<h2>Any Queries or Feedback?</h2>

<form method="POST">

<input type="text" name="name" placeholder="Your Name" required>

<input type="email" name="email" placeholder="Your Email" required>

<textarea name="message" placeholder="Your message"></textarea>

<button name="send">Submit</button>

</form>

</section>
</section>
<h2>Contact Us</h2>

<p>Email: support@eventhub.com</p>

<p>Phone: 9999999999</p>

<?php include "includes/footer.php"; ?>
