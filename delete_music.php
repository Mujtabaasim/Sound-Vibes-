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

// Retrieve ID from request parameters
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete entry from database
    $sql = "SELECT * FROM music WHERE id=$id";
    $result = $conn->query($sql);

    if ($result !== false && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Delete associated image
        $imagePath = "uploads/" . $row['image'];
        // Check if image file exists before attempting to delete
        if (file_exists($imagePath)) {
            unlink($imagePath);
        } else {
            echo "Image file does not exist at path: $imagePath";
        }

        // Delete associated music file
        $musicPath = "" . $row['file_path'];
        // Check if music file exists before attempting to delete
        if (file_exists($musicPath)) {
            unlink($musicPath);
        } else {
            echo "Music file does not exist at path: $musicPath";
        }

        // Delete entry from the database
        $deleteSql = "DELETE FROM music WHERE id=$id";
        if ($conn->query($deleteSql) === TRUE) {
            echo "Music deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        echo "No music found with the given ID";
    }
} else {
    echo "No ID provided";
}

$conn->close();
?>
