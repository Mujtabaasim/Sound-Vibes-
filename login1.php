
<?php include 'header.php'; ?>
<?php

// Check if user is already logged in
if(isset($_SESSION['username'])) {
    // If user is admin, redirect to admin panel
    if($_SESSION['username'] == 'admin') {
        header("Location: admin_panel.php");
        exit;
    } else {
        // If user is not admin, redirect to home page or any other page
        header("Location: index.php");
        exit;
    }
}

// Check if login form is submitted
if(isset($_POST['login'])) {
    // Check username and password (you need to replace this with your authentication logic)
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example authentication logic (replace with your own)
    if($username === 'admin' && $password === 'admin123') {
        // Store username in session
        $_SESSION['username'] = $username;
        
        // Redirect to admin panel
        header("Location: admin_panel.php");
        exit;
    } else {
        // Invalid credentials, show error message or redirect back to login page
        $error = "Invalid username or password";
    }
}
?>
<?php

$message = ''; // Yeh message hoga agar koi error hoga

// Check kare ke form submit hua hai ya nahi
if(isset($_POST["login"])) {
    // Database connection establish kare
    $conn = new mysqli("localhost", "root", "", "sound_vibes_hub");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // User ke dwara diye gaye username aur password ko secure banayein
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    // Query banayein database mein user ko dhundne ke liye
    $query = "SELECT * FROM signup_table WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    // Check kare ke user ka data mojood hai ya nahi
    if($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("location:index.php"); // Redirect karein index.php pe
    } else {
        $message = "Invalid Username or Password!";
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
       .login {
    width: 300px;
    margin: 0 auto;
}

input[type="text"],
input[type="password"],
input[type="submit"] {
    width: 100%;
    padding: 12px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    transition: border-color 0.3s; /* Smooth transition for border color change */
}

input[type="text"]:focus,
input[type="password"]:focus {
    border-color: #0fb0d3; /* Change border color on focus */
}

input[type="submit"] {
    background-color: #0fb0d3;
    color: white;
    font-weight: bold;
    cursor: pointer;
    border: none; /* Removed border for submit button */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Added box shadow for depth effect */
}

input[type="submit"]:hover {
    background-color: #0fb0d4;
}

.error {
    color: red;
    margin-top: 5px;
}

</style>
</head>
<body>
    <div class="login">
        <h2>Login</h2>
        <form method="post" action="">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" name="login" value="Login">
            <div class="error"><?php echo $message; ?></div>
        </form>
    </div>
</body>
</html>
<?php include 'footer.php'; ?>

