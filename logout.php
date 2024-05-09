<?php
session_start();
session_unset(); // Session ko clear kare
session_destroy(); // Session ko destroy kare
header("location:index.php"); // Redirect karein index.php pe
exit;
?>
<?php
session_start();

// Check if the logout button is clicked
if(isset($_POST['logout'])) {
    // Destroy session and redirect to login page
    session_destroy();
    header("Location: login.php");
    exit;
} else {
    // Redirect to admin panel if logout button is not clicked
    header("Location: admin_panel.php");
    exit;
}
?>

