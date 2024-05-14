<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETSCAN LOGIN</title>
    <!-- icon -->
    <link rel="icon" href="./assets/img/LOGO3.png">
    <link rel="stylesheet" href="./css/styles.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- body styles -->
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Poppins', sans-serif;
            justify-content: center;
            display: flex;
            background-image: url('./assets/img/Web-Background.jpg');
        }
    </style>
    <script>
        // Clear browser history to prevent navigation back after logout
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</head>
<!-- body -->

<body styles>
    <div class="container">
        <div class="content">
            <div class="logo">
                <img src="./assets/img/LOGO3.png" alt="PETSCAN">
                <div class="logo-text">
                    <h1>PetScan</h1>
                    <p>ADMIN PANEL</p>
                </div>
            </div>
            <div class="input-box">
                <h1>Results Evaluation System</h1>

                <form method="post" action="">
                    <div class="input-textfields">
                        <input type="text" name="username" placeholder="email / username">
                        <input type="password" name="password" placeholder="password">
                    </div>
                    <div class="login-button">
                        <?php
                        // Define the correct username and password
                        $correctUsername = "admin";
                        $correctPassword = "admin123";

                        // Check if the form is submitted and if username and password are set in $_POST
                        if (isset($_POST['username']) && isset($_POST['password'])) {
                            // Check if the provided credentials are correct
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            if ($username === $correctUsername && $password === $correctPassword) {
                                // If credentials are correct, redirect to the dashboard
                                header("Location: ./dashboard.php");
                                exit; // Stop further execution
                            } else {
                                // If credentials are incorrect, show an error message
                                echo "<p style='color: red;'>Invalid username or password.</p>";
                            }
                        }
                        ?>
                        <!-- Input fields for username and password -->

                        <button type="submit">Login</button>
                    </div>
                </form>

                <div class="policy">
                    <p>By logging in, you agree to the <a href="#">Terms of Use</a> for accessing and contributing to our veterinary results tracking system,
                        in accordance with our <a href="#">Veterinary Data Management Policy</a> and applicable laws.</p>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
