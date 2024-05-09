<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sound_vibes_HUB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Handle form submission
if(isset($_POST['submit'])){
    $image = $_FILES['image']['name'];
    $musicName = $_POST['music_name'];
    $artistName = $_POST['artist_name'];
    $musicFile = $_FILES['music_file']['name'];

 // Upload image and music file
$targetDir = "uploads/";
$targetImage = $targetDir . basename($image);
$targetMusic = $targetDir . basename($musicFile);

// Check if the directory exists, create it if not
if (!file_exists($targetDir)) {
    mkdir($targetDir, 0777, true); // You may need to adjust permissions
}

// Move the files
if (move_uploaded_file($_FILES['image']['tmp_name'], $targetImage) && move_uploaded_file($_FILES['music_file']['tmp_name'], $targetMusic)) {
    // Insert data into database
    $sql = "INSERT INTO music (image, music_name, artist_name, file_path) VALUES ('$image', '$musicName', '$artistName', '$targetMusic')";

    if ($conn->query($sql) === TRUE) {
        echo "Music added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Failed to upload files.";
}
}

$conn->close();
?>
