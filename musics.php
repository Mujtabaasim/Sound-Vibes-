<?php include 'header.php'; ?>

<link rel="stylesheet" href="css/musics.css">



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ee032ea639.js" crossorigin="anonymous"></script>
    <style>
        .song-card {
    margin-bottom: 20px;
    background-color: #161616; /* Change background color */
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    color: #fff !important;
    padding: 1rem;
}

.button {
    background-color: #0fb0d3; /* Change button color */
    color: #fff;
    border: none;
    border-radius: none !important;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.button:hover {
    background-color: #0056b3;
}


        .song-image {
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .song-details {
            padding: 10px;
        }

        .song-title {
            font-size: 18px;
            margin: 0;
            margin-bottom: 5px;
    color: #fff !important;

        }

        .song-artist {
            font-size: 14px;
            margin: 0;
            color: #666;
    color: #fff !important;

        }

        .button-container {
            padding: 10px;
            text-align: center;
        }

        /* .button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #0056b3;
        } */

        /* .comment-card {
            margin-top: 20px;
        } */

        audio {
    width: 100%; /* Set width to 100% of its container */
    margin-top: 10px; /* Add some top margin for spacing */
    outline: none; /* Remove default outline */
}

/* Customize the appearance of the audio controls */
audio::-webkit-media-controls-panel {
    background-color: #161616; /* Background color of the controls panel */
    color: #ffffff; /* Color of the controls */
    border-radius: 5px; /* Border radius for rounded corners */
    padding: 10px; /* Add some padding for spacing */
}

/* Customize the appearance of the play/pause button */
audio::-webkit-media-controls-play-button {
    background-color: #0fb0d3; /* Background color of the play button */
    border-radius: 50%; /* Make the play button round */
    width: 40px; /* Set width */
    height: 40px; /* Set height */
}

/* Customize the appearance of the progress bar */
audio::-webkit-media-controls-current-time-display,
audio::-webkit-media-controls-time-remaining-display {
    color: #ffffff; /* Color of the time display */
}

/* Customize the appearance of the progress bar */
audio::-webkit-media-controls-seek-back-button,
audio::-webkit-media-controls-seek-forward-button {
    color: #ffffff; /* Color of the seek buttons */
}


/* Style the container for the comment form */
.container-comments-form {
    background-color: #f8f9fa;
    padding: 20px;
    border-radius: 10px;
    margin-top: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Style the form inputs */
.comment-form input[type="text"],
.comment-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

/* Style the submit button */
.comment-form button[type="submit"] {
    background-color: #0fb0d3;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.comment-form button[type="submit"]:hover {
    background-color: #0056b3;
}

/* Style the container for the comments */
.container-comments {
    background-color: #f8f9fa;
    padding: 20px;
    border-radius: 10px;
    margin-top: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Style the individual comment card */
.comment-card {
    margin-top: 20px;
}

.comment-card .card-body {
    background-color: #fff;
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.comment-card .card-title {
    font-size: 18px;
    margin-bottom: 5px;
}

.comment-card .card-text {
    font-size: 16px;
    margin-bottom: 10px;
}

.comment-card .text-muted {
    font-size: 14px;
}

    </style>
</head>
<body>

<div class="container">
    <div class="row">
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

        // Fetch music data from database
        $sql = "SELECT * FROM music";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                // Construct file paths using relative paths
                $imagePath = "uploads/" . $row['image'];
                $audioPath = "" . $row['file_path'];
                
                // Output debugging information
                // echo "<p>Audio Path: $audioPath</p>";
                // Check if the audio file exists
                // if (file_exists($audioPath)) {
                //     echo "<p>Audio file exists.</p>";
                // } else {
                //     echo "<p>Audio file does not exist.</p>";
                // }
                // ?>

                <div class="col-md-4 mt-4">
                    <div class="song-card">
                        <img src="<?php echo $imagePath; ?>" alt="Music Image" class="song-image">
                        <div class="song-details">
                            <h3 class="song-title"><?php echo $row['music_name']; ?></h3>
                            <p class="song-artist"><?php echo $row['artist_name']; ?></p>
                        </div>
                        <audio controls>
                            <source src="<?php echo $audioPath; ?>" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <div class="button-container">
                            <!-- Force download with correct file extension -->
                            <a href="<?php echo $audioPath; ?>" download="<?php echo basename($row['file_path']); ?>" class="button"><i class="fa-solid fa-download"></i></a>
                            <!-- <button class="button">Add to Favorites</button> -->
                        </div>
                    </div>
                </div>

                <?php
            }
        } else {
            echo "No music found.";
        }

        // Close the database connection
        $conn->close();
        ?>
    </div>
</div>

<div class="container mt-5">
    <h2>Comments</h2>
    <form action="comment.php" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<div class="container mt-5">
    <h1>Comments</h1>
    <?php
    // Reopen the database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch comments from database
    $sql = "SELECT * FROM comments ORDER BY created_at DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            ?>
            <div class="card mb-3 comment-card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                    <p class="card-text"><?php echo $row['comment']; ?></p>
                    <p class="card-text"><small class="text-muted"><?php echo $row['created_at']; ?></small></p>
                </div>
            </div>
            <?php
        }
    } else {
        echo "No comments found.";
    }
    ?>
</div>



<?php include 'footer.php'; ?>
  </body>
  </html>