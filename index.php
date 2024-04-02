<?php
// Database connection (replace with your actual credentials)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "testing";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to select a random tutorial
$sql = "SELECT `tutorialid`, `title`, `link` FROM `tutorial` ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the random tutorial
    $row = $result->fetch_assoc();
    $tutorialId = $row["tutorialid"];
    $tutorialTitle = $row["title"];
    $tutorialLink = $row["link"];

    echo "Random Tutorial (ID $tutorialId):\n";
    echo "Title: $tutorialTitle\n";
    echo "Link: $tutorialLink\n";
} else {
    echo "No tutorials found.";
}

// Close connection
$conn->close();
?>
