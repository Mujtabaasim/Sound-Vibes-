<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/contact.css">
<br>

<div class="contact-form">
    <h2>Contact Us</h2>
    <form action="contact.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone">

        <label for="message">Message:</label>
        <textarea id="message" name="msg" required></textarea>

        <input type="submit" value="Submit">
    </form>
</div>

<?php

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$msg=$_POST['msg'];

$connect=mysqli_connect("localhost","root","","sound_vibes_hub");
$query="INSERT INTO contactus(name,email,phone,msg)
 VALUES ('$name','$email','$phone','$msg')";
$sql=mysqli_query($connect,$query);
?>

<?php include 'footer.php'; ?>

