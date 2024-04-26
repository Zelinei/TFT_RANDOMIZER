<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">   
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="/js/validation.js" defer></script>
    

</head>
<body>
    
    <h1>Signup</h1>
    <br>
    <form action="process-signup.php" method="post" id="signup" novalidate>
        <div class="loginbox">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
        </div>
        <br>
        <div class="loginbox">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <br>
        <div class="loginbox">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>
        <br> 
        <div class="loginbox">
            <label for="password_confirmation">Repeat password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>
        
<br>

        <div class="centered">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <div class="g-recaptcha" data-sitekey="6LdA7bwpAAAAADcw81mngCkZSjOB2fTGK0flYQJR" data-secret="6LdA7bwpAAAAAPHM4NQa3ScPAL_m9YoQ97cYsON1"></div>
</div>

<br>
        <button class="button">Sign up</button>
        <br>

    <button class="button" onclick="redirectToIndex()">Go back</button>

<script>
function redirectToIndex() {
    window.location.href = "index.php";
}
</script>   
    </form>
    

    
</body>
</html>