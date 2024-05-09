
<style>
 
/* CSS for submit button */
.submit-btn {
    background-color: #ADD8E6; /* Light blue color */
    color: #fff; /* Text color */
    border: none; /* No border */
    padding: 10px 20px; /* Padding */
    font-size: 16px; /* Font size */
    cursor: pointer; /* Cursor style */
    border-radius: 5px; /* Border radius */
}

/* CSS for hover effect */
.submit-btn:hover {
    background-color: #87CEEB; /* Light blue color - darker shade */
}

</style>
<!--  footer -->
<footr>
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12 border_top">
          <form class="news" action="index.php" method="POST">
            <h3>Newsletter</h3>
            <input class="newslatter" placeholder="ENTER YOUR MAIL" type="text" name="email">
            <input type="submit" value="Submit " class="submit-btn">
          </form>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="address">
                <ul class="loca">
                  <li>
                    <a href="#"><img src="icon/loc.png" alt="#" /></a>Royal Albert Hal
                  </li>
                  <li>
                    <a href="#"><img src="icon/call.png" alt="#" /></a>+12586954775
                  </li>
                  <li>
                    <a href="#"><img src="icon/email.png" alt="#" /></a>vibeshub@gmail.com
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <ul class="social_link">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        <p>Copyright 2019 All Right Reserved </a></p>
      </div>
    </div>
  </div>
</footr>
<!-- end footer -->
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <?php
// Check karein ke form submit hua hai ya nahi
if(isset($_POST['email'])) {
    // Email ko sanitize karein
    $email = $_POST['email'];

    // Database connection establish karein
    $connect = mysqli_connect("localhost", "root", "", "sound_vibes_hub");

    // Check karein connection successful hai ya nahi
    if($connect === false) {
        // Agar connection fail ho gayi hai, toh error message display karein
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Query ko prepare karein
    $query = "INSERT INTO newsletter_emails (email) VALUES ('$email')";

    // Query ko execute karein
    if(mysqli_query($connect, $query)) {
        // Agar query successfully execute hui hai, toh success message display karein
        echo "Record inserted successfully.";
    } else {
        // Agar query execute nahi hui hai, toh error message display karein
        echo "ERROR: Could not execute query. " . mysqli_error($connect);
    }

    // Connection ko close karein
    mysqli_close($connect);
}
?>
  
</body>

</html>
