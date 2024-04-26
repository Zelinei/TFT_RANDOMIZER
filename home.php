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



//Tittelen pa siden
echo '<h1>Teamfight Tactics Randomizer</h1>';

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

//Kode for Knappen som generer tilfeldige resultat (Sender til en ny side)
echo '<button class="button" onclick="redirectToPage()">Time to Roll!</button>';

//JavaScript funksjon som sender oss til en ny side/fil
echo '<script>
function redirectToPage() {
    window.location.href = "sidepage.php"; 
}
</script>';

echo '<img src="lux.png" alt="lux.png" class="lux">';

echo '<img src="gwen.png" alt="gwen.png" class="gwen">';

$conn->close();
?>