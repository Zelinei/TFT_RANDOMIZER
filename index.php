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
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

//Kode for Sign Up knappen
echo '<button class="signup" onclick="redirectToSignup()">Sign Up</button>';

//JavaScript funksjon som sender oss til en ny side/fil
echo '<script>
function redirectToSignup() {
    window.location.href = "signup.php"; 
}
</script>';

echo '<br>';    

//Kode for Sign Up knappen
echo '<button class="signup" onclick="redirectToLogin()">Login</button>';

//JavaScript funksjon som sender oss til en ny side/fil
echo '<script>
function redirectToLogin() {
    window.location.href = "login.php"; 
}
</script>';

echo '<img src="pengu.png" alt="pengu.png" class="pengu">';

echo '<img src="tftlogo.png" alt="tftlogo.png" class="logo">';

$conn->close();
?>