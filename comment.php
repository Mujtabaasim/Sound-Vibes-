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

// Handle form submission
if(isset($_POST['name']) && isset($_POST['comment'])){
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    // Insert comment into database
    $sql = "INSERT INTO comments (name, comment) VALUES ('$name', '$comment')";

    if ($conn->query($sql) === TRUE) {
        echo "Comment added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fetch comments from database
$sql = "SELECT * FROM comments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='container mt-5'>";
    echo "<h2>Comments</h2>";
    echo "<ul class='list-group'>";
    while($row = $result->fetch_assoc()) {
        echo "<li class='list-group-item'><strong>{$row['name']}</strong>: {$row['comment']}</li>";
    }
    echo "</ul>";
    echo "</div>";
} else {
    echo "No comments found.";
}

$conn->close();
?>
