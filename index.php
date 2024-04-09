<?php
// Assuming you have already established a database connection
// Replace the following placeholders with your actual database credentials
$host = 'XAMPP';
$username = 'Zerdus ^^';
$password = 'your_database_password';
$dbname = 'TFT_Randomizer';

// Create a database connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the total number of records in the 'user' table
$result = $conn->query("SELECT COUNT(*) FROM user");
$row = $result->fetch_row();
$totalRecords = $row[0];

// Generate a random index within the range of records
$randomIndex = mt_rand(0, $totalRecords - 1);

// Fetch a random username from the 'user' table
$query = "SELECT username FROM user LIMIT $randomIndex, 1";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $randomUsername = $row['username'];
    echo "Random username: $randomUsername";
} else {
    echo "No records found.";
}

// Close the database connection
$conn->close();
?>
