<?php



$is_invalid = false;
//koden henter informasjon fra databasen og sjekker om alt passer
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: home.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">


</head>
<body>
    
    <h1>Login</h1>
    
    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
    
    <form method="post">
    <div class="loginbox">    
    <label for="email">Email:</label>
    <br>
        <input type="email" name="email" id="email"
        
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
    </div>

    <br>    

    <div class="loginbox"> 
        <label for="password">Password: </label>
        <br>
        <input type="password" name="password" id="password">
        
    </div>

    <br>

    <div class="centered">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <div class="g-recaptcha" data-sitekey="6LdA7bwpAAAAADcw81mngCkZSjOB2fTGK0flYQJR" data-secret="6LdA7bwpAAAAAPHM4NQa3ScPAL_m9YoQ97cYsON1"></div>
    
</div>
        <br>

        <button class="button">Login</button>
    </form>

  

<br>

    <button class="button" onclick="redirectToIndex()">Go back</button>

<script>
function redirectToIndex() {
    window.location.href = "index.php";
}
</script>
    
</body>
</html>