<?php
$host = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'tftrandomizer';

//Kode som kobler siden til CSS
echo '<link rel="stylesheet" type="text/css" href="stylesheet.css">';

//Koden som lager en ny connection til databasen
$conn = new mysqli($host, $username, $password, $database);

//Kode som sjekker connection til databasen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "";  
}

echo '<br>';

//Tittelen pa siden
echo '<h1>Teamfight Tactics Randomizer</h1>';

echo '<br>';
echo '<br>';

//Koden som viser resultatet pa forste "random generator" (Your Carry)
echo '<div class="result">';
echo '<h2>Your Carry:</h2>';

$sql = "SELECT champion FROM champs ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo '<br> <span style="font-size: 25px; color: #d8d8d8;">' .$row["champion"]. '</span>'; 
  }
} else {
  echo "0 results";
}

echo '</div>';

echo '<br>';

//Koden som viser resultatet pa andre "random generator" (Your Main Trait)
echo '<div class="result">';
echo '<h2>Your Main Trait:</h2>';

$sql = "SELECT origin FROM main_trait ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo '<br> <span style="font-size: 25px; color: #d8d8d8;">' .$row["origin"]. '</span>';
  }
} else {
  echo "0 results";
}

echo '</div>';

echo '<br>';

//Koden som viser resultatet pa tredje "random generator" (Your Main Class)
echo '<div class="result">';
echo '<h2>Your Main Class:</h2>';

$sql = "SELECT class FROM main_class ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo '<br> <span style="font-size: 25px; color: #d8d8d8;">' .$row["class"]. '</span>';
  }
} else {
  echo "0 results";
}

echo '</div>';

echo '<br>';
echo '<br>';
echo '<br>';

//Knappen som generer alt pa nytt (refresher)
echo '<button class="button" onclick="location.reload()">Roll Again!</button>';

echo '<br>';

//Knappen som logger ut
echo '<button class="button" onclick="redirectTologout()">Logout</button>';

echo '<script>
function redirectTologout() {
    window.location.href = "logout.php"; 
}
</script>';


$conn->close();
?>