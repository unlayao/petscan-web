<?php
    //retrieve data from the database
    include('dbcon.php');
    $ref_table = "scan_table";
    $fetchdata = $database->getReference($ref_table)->getValue();
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETSCAN DASHBOARD</title>
    <!-- icon -->
    <link rel="icon" href="./assets/img/LOGO3.png">
    <!-- css -->
    <link rel="stylesheet" href="./css/styles.css">
    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<!-- body -->
<body>
    <div class="container">
        <!-- sidebar -->
        <div class="sidebar">
            <div class="sidebar-content">
                <div class="logo">
                        <img src="./assets/img/LOGO3.png" alt="PETSCAN">
                        <div class="logo-text">
                            <h1>PetScan</h1>
                            <p>ADMIN PANEL</p>
                        </div>
                </div>
                <!-- sidebar menu buttons -->
                <div class="sidebar-buttons">
                    <form method="post" action="./dashboard.php">
                        <button type="submit"><i class="bx bxs-dashboard"></i>Dashboard</button>
                    </form>
                    <form method="post" action="#">
                        <button type="submit" disabled class="active"><i class='bx bxs-check-square' ></i>Recent Scans</button>
                    </form>
                    <form method="post" action="./analytics.php">
                        <button type="submit"><i class='bx bxs-data'></i>Dataset</button>
                    </form>
                    <div class="logout-button">
                        <form method="post" action="./index.php">
                            <button type="submit"><i class="bx bx-log-out"></i>Logout</button>
                        </form>
                    </div>
                    
                </div>
                    
            </div>
        </div>

        
    </div>
    <!-- dashboard content -->
    <div class="db-content">

        <!-- header -->
        <header>
            <h1>RECENT SCANS</h1>
            <p>Check and Evaluate the latest scans.</p>
        </header>
        <hr>
        <div class="recent-scans">
            <div class="scan-container">
            <?php
            if ($fetchdata == null) {
                echo "<p>No scans available.</p>";
            } else {
                foreach ($fetchdata as $key => $row) {
                    $scanID = $row['scanID'];
                    $disease = $row['disease'];
                    $userID = $row['userID'];
                    $scanIMG = $row['image'];
                    $disease = $row['disease'];
                    $date = $row['date'];
                    $status = $row['status'];
                    if ($disease == 1) {
                        $disease = "Bacterial Dermatitis";
                    } else if ($disease == 2) {
                        $disease = "Allergic Dermatitis";
                    } else if ($disease == 3) {
                        $disease = "Fungal Dermatitis";
                    }
                    echo "<div class='card' data-scan-id='$key'>
                            <img src='$scanIMG' alt='scan'>
                            <p class='scan-text'>$scanID</p>
                            <p class='scan-text'>$userID</p>
                            <p class='scan-text'>$date</p>
                            <p class='scan-text'>$disease</p>
                            <p class='scan-text'>$status</p>
                        </div>";
                }
            }
            ?>
            </div>
        </div>
    </div>

</body>
</html>

<script>
    // Get all card elements
    var cards = document.querySelectorAll(".card");

    // Add click event listener to each card
    cards.forEach(function(card) {
        card.addEventListener("click", function() {
            // Get the ID of the clicked card
            var scanID = this.getAttribute("data-scan-id");
            
            // Open view.php with the scanID parameter
            window.location.href = "./view.php?ID=" + encodeURIComponent(scanID);
            return scanID;
        });
    });

</script>