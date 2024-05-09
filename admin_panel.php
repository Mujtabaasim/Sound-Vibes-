<style>
        body {
            padding: 20px;
        }
        .navbar {
    background-color: #ffffff; /* Navbar background color */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Box shadow for depth effect */
    padding: 10px 20px; /* Adjust padding as needed */
}

.navbar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.navbar li {
    display: inline;
    margin-right: 20px; /* Adjust margin between navbar items */
}

.navbar li:last-child {
    margin-right: 0; /* Remove margin from last navbar item */
}

.navbar a {
    text-decoration: none;
    color: #333333; /* Navbar link color */
    font-weight: bold;
}

.navbar a:hover {
    color: #0fb0d3; /* Navbar link color on hover */
}

    </style>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin_panel.php">admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="manage_music.php">Manage Music</a>
        </li>

       <form method="POST" action="logout.php">
       <li class="nav-item">
          <a class="nav-link" href="logout.php">Log Out</a>
        </li>
    </form>
      </ul>
      
    </div>
  </div>
</nav>
<!-- end navbar -->


<?php
session_start();

// Check if user is not logged in as admin, redirect to login page
if(!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
    header("Location: login.php");
    exit;
}

// Logout logic
if(isset($_POST['logout'])) {
    // Destroy session and redirect to login page
    session_destroy();
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

</head>
<body>
    <div class="container mt-5">
   
    <br>
    <br>
            <h1>Add Music</h1>
        <form action="add_music.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" name="image" id="image">
            </div>
            
            <div class="form-group">
                <label for="music_name">Music Name:</label>
                <input type="text" class="form-control" name="music_name" id="music_name">
            </div>
            
            <div class="form-group">
                <label for="artist_name">Artist Name:</label>
                <input type="text" class="form-control" name="artist_name" id="artist_name">
            </div>
            
            <div class="form-group">
                <label for="music_file">Music File:</label>
                <input type="file" class="form-control-file" name="music_file" id="music_file">
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Add Music</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
