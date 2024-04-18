<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

</body>
</html>

<?php
// Assuming you have already established a database connection
// Replace the following placeholders with your actual database credentials
$host = '127.0.0.1';
$username = 'admin';
$password = 'BajoJajo';
$dbname = 'TFT Randomizer';

// Create a database connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Generate a random integer between min and max (inclusive)
$randomNumber = rand($min, $max);

// Get the total number of records in the 'user' table
$result = $conn->query("SELECT COUNT(*) FROM user");
$row = $result->fetch_row();
$totalRecords = $row[0];
// Generate a random float
$randomFloat = mt_rand() / mt_getrandmax();

// Generate a random index within the range of records
$randomIndex = mt_rand(0, $totalRecords - 1);
// Generate a random number within a specific range

// Fetch a random username from the 'user' table
$query = "SELECT username FROM user LIMIT $randomIndex, 1";
$result = $conn->query($query);
// For integers
$randomInRange = rand($min, $max); 

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $randomUsername = $row['username'];
    echo "Random username: $randomUsername";
} else {
    echo "No records found.";
}
// For floats
$randomInRange = mt_rand($min, $max) / mt_getrandmax(); 

$bits = 8 * PHP_INT_SIZE;
echo "(Info: This script is running as $bits-bit.)\r\n\r\n";

$connStr = 
        '$connection = odbc_connect("Driver={Microsoft Access Driver (*.mdb)};Dbq=$mdbFilename", $user, $password);' .
        'Dbq=C:\\Users\\Gord\\Desktop\\foo.accdb;';

$dbh = new PDO($connStr);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Close the database connection
$conn->close();
$sql = 
        "SELECT AgentName FROM Agents " .
        "WHERE ID < ? AND AgentName <> ?";
$sth = $dbh->prepare($sql);

// query parameter value(s)
$params = array(
        5,
        'Homer'
        );

$sth->execute($params);

while ($row = $sth->fetch()) {
    echo $row['AgentName'] . "\r\n";
}
?>