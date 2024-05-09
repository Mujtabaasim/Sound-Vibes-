<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Music</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
</head>
<body>
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


    <h1 class="mb-4">Manage Music</h1>

    <?php
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sound_vibes_hub";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handle deletion
    if(isset($_GET['delete']) && isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM music WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo '<div class="alert alert-success" role="alert">Record deleted successfully</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Error deleting record: ' . $conn->error . '</div>';
        }
    }

    // Fetch music data from database
    $sql = "SELECT * FROM music";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table class="table">';
        echo '<thead class="thead-dark">';
        echo '<tr><th>Music Name</th><th>Artist Name</th><th>Audio</th><th>Action</th></tr>';
        echo '</thead>';
        echo '<tbody>';
        while($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['music_name'] . '</td>';
            echo '<td>' . $row['artist_name'] . '</td>';
            echo '<td><audio controls><source src="' . $row['file_path'] . '" type="audio/mpeg">Your browser does not support the audio element.</audio></td>';
            echo '<td><a href="delete_music.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm">Delete</a></td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else {
        echo '<div class="alert alert-info" role="alert">No music found.</div>';
    }

    $conn->close();
    ?>
</body>
</html>
