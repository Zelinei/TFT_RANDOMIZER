<?php
// Database connection (replace with your actual credentials)
$host = 'localhost';
$dbname = 'TFT_Randomizer';
$username = 'your_username';
$password = 'your_password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Randomly select an item
    $stmt = $pdo->query("SELECT * FROM random_items ORDER BY RAND() LIMIT 1");
    $randomItem = $stmt->fetch(PDO::FETCH_ASSOC);

    // Display the item
    echo "<div class='random-item'>";
    echo "<h2>{$randomItem['item_name']}</h2>";
    echo "<p>{$randomItem['item_description']}</p>";
    echo "</div>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

