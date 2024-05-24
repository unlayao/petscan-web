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
            <dialog id="dialog-terms">
                <div class="dialog-header">
                    <h2>PetScan Terms of Use</h2>
                </div>
                <div class="dialog-body">
                    <h3>1. Acceptance of Terms</h3>
                    <p>By accessing or using the PetScan web application, you agree to comply with and be bound by these Terms of Use. 
                        If you do not agree to these terms, please do not use the application.</p>
                    <h3>2. User Responsibilities</h3>
                    <p>As an admin or vet, you are responsible for ensuring that all data you input, review, or export is accurate and used ethically.
                        Misuse of the application may result in inaccurateness of the mobile application.</p>
                    </p>
                    <h3>3. Data Usage</h3>
                    <p>Data processed and exported through PetScan is to be used solely for the purposes of evaluating and diagnosing skin diseases in pets. 
                        You agree not to use this data for any other purposes without explicit permission.</p>
                    <h3>4. Intellectual Property</h3>
                    <p>All content and data provided by PetScan is the intellectual property of NexSUS and Doc J Vet Clinic. 
                        You agree not to reproduce, distribute, or modify any content without explicit permission.</p>
                    <h3>5. Modification of Terms</h3>
                    <p>PetScan reserves the right to modify these terms at any time. 
                        You are responsible for reviewing these terms regularly to stay informed of any changes.</p>
                    <button onclick="dialogTerms.close()">Okay</button>
                </div>
            </dialog>
            <dialog id="dialog-policy">
                <div class="dialog-header">
                    <h2>Veterinary Data Management Policy</h2>
                </div>
                <div class="dialog-body">
                <h3>1. Data Collection</h3>
                    <p>PetScan collects data related to pet skin conditions, including images and diagnostic results, to aid in the identification and treatment of skin diseases. 
                        This data is inputted by users and stored securely.</p>
                    <h3>2. 2. Data Usage</h3>
                    <p>The data collected is used to train and improve marchine learning model, provide diagnostic results to vets for review.
                        The data is not shared with third parties without explicit permission.</p>
                    </p>
                    <h3>3. Data Access and Sharing</h3>
                    <p>Access to the data is restricted to authorized users (admins and vets) who need it for diagnostic and evaluative purposes.
                         Data will not be shared with third parties without explicit consent, except as required by law.</p>
                    <h3>4. Intellectual Property</h3>
                    <p>All content and data provided by PetScan is the intellectual property of NexSUS and Doc J Vet Clinic. 
                        You agree not to reproduce, distribute, or modify any content without explicit permission.</p>
                    <h3>5. Changes to the Policy</h3>
                    <p>PetScan reserves the right to modify this Veterinary Data Management Policy at any time. 
                        You are responsible for reviewing these policies regularly to stay informed of any changes.</p>
                    <button onclick="dialogPolicy.close()">Okay</button>
                </div>

            </dialog>
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
                    <p>By logging in, you agree to the <a href="#" onclick=showTermsDialog()>Terms of Use</a> for accessing and contributing to our veterinary results tracking system,
                        in accordance with our <a href="#" onclick=showPolicyDialog()>Veterinary Data Management Policy</a> and applicable laws.</p>
                </div>
            </div>
        </div>

    </div>

    <script>
        const dialogTerms = document.getElementById('dialog-terms');
        const dialogPolicy = document.getElementById('dialog-policy');

        function showTermsDialog() {
            dialogTerms.showModal();
        }
        function showPolicyDialog() {
            dialogPolicy.showModal();
        }
    </script>
</body>

</html>
