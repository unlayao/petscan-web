<?php
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
                    <form method="post" action="./recent.php">
                        <button type="submit"><i class='bx bxs-check-square'></i>Recent Scans</button>
                    </form>
                    <form method="post" action="#">
                        <button type="submit" disabled class="active"><i class='bx bxs-data'></i>Dataset</button>
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
            <h1>DATASET</h1>
            <p>Download PetScan's dataset in this panel.</p>
        </header>
        <hr>
        <!-- data analytics -->

        <div class="download-page">
            <div class="download-text">
                <section class=tagline>
                    <h1>
                        DELVE DEEPER INTO WHAT POWERS PETSCAN
                    </h1>
                    <p>
                        Explore the wealth of information available in our dataset,
                        specifically compiled to provide comprehensive insights into a wide range of skin diseases prevalent in both cats and dogs.
                    </p>
                    <form method="post" action="./assets/dataset/petscan_dataset.csv">
                        <button type="submit" class="download-button">Download Dataset</button>
                    </form>
                </section>

            </div>
            <div class="download-image">
                <img src="./assets/img/download.jpg" alt="image">
            </div>
        </div>
    </div>

</body>

</html>