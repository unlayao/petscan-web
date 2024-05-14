<?php
include('dbcon.php');
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
if (isset($_GET['ID'])) {
    $uniqueID = $_GET['ID'];
    $scan_ref = $database->getReference('scan_table/' . $uniqueID);
    $scan_data = $scan_ref->getValue();
    if($scan_data != null) {
        $scanID = $scan_data['scanID'];
        $userID = $scan_data['userID'];
        $disease = $scan_data['disease'];
        $image = $scan_data['image'];
        $date = $scan_data['date'];
    } else {
        echo "<script>alert('Scan not found!')</script>";
        echo "<script>window.location.href = './dashboard.php'</script>";
    }
   
}
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
    <div class="view-content">
        <!-- header -->
        <header>
            <h1>RECENT SCANS</h1>
            <p>Check and Evaluate the latest scans.</p>
        </header>
        <hr>
        <div class="scan-content">
            <h1>SCAN EVALUATION</h1>
            <p>SCAN ID: <?php echo $scanID; ?></p>
            <p>USER ID: <?php echo $userID; ?></p>
            <div class="parent-container">
                <div class="result-container">
                    <img src=<?php echo $image?> alt="scan">
                    <div class="scan-result">
                        <h1>RESULTS</h1>
                        <p>Disease Name:<?php 
                        if ($disease == 1){
                            echo "Bacterial Dermatitis";
                        } else if ($disease == 2){
                            echo "Allergic Dermatitis";
                        } else if ($disease == 3){
                            echo "Fungal Dermatitis";
                        }
                        ?> 
                        </p>
                        <p>Disease Description:
                        
                        </p>
                        <p>Mortality Rate: </p>
                        <button class="import-button" onclick="showAlert()">IMPORT TO DATASET</button>
                    </div>
                </div>
                <div class="edit-container">
                    <h1>EDIT</h1>
                    <form action="#" method="post">
                    <label for="disease">Disease Name</label>
                    <select name="disease" id="disease" required>
                        <option value="">Select Disease</option>
                        <option value="disease1">Bacterial Dermatitis</option>
                        <option value="disease2">Allergic Dermatitis</option>
                        <option value="disease3">Fungal Dermatitis</option>
                        <!-- Add more options as needed -->
                    </select>
                    <label for="description">Description</label>
                    <label for="mortality">Mortality Rate</label>
                    <button type="submit" class="import-button" onclick="alertEdit()">IMPORT TO DATASET</button>
                </form>

                </div>
            </div>
        </div>
    </div>

</body>
</html>


<?php

 ?>
<script>
    function showAlert(){
        alert('Scan Imported to the Dataset.');
    }
</script>