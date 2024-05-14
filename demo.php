<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETSCAN DEMO</title>
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
            <form action="code.php" method="POST" enctype="multipart/form-data">
                <div class="input-box">
                    <h1>Scan Input Demo</h1>
                    <div class="input-textfields">
                        <input type="text" placeholder="scanID" name="scanID">
                        <input type="text" placeholder="userID" name="userID">
                        <select required name="disease">
                            <option value="">Select Disease</option>
                            <option value="1">Bacterial Dermatitis</option>
                            <option value="2">Allergic Dermatitis</option>
                            <option value="3">Fungal Dermatitis</option>
                        </select>
                        <input type="file" name="image" id="photo"placeholder="scan image" accept="image/*">
                    </div>
                    <div class="login-button">
                        <button type=submit name="upload">Upload to Database</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <script type="module">
        // Import the functions you need from the SDKs you need
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/10.12.0/firebase-app.js";
        import {
            getAnalytics
        } from "https://www.gstatic.com/firebasejs/10.12.0/firebase-analytics.js";
        import{
            getStorage
        } from "https://www.gstatic.com/firebasejs/10.12.0/firebase-storage.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "AIzaSyARqZm6tZTrIbNgHk7X7y-MDeEgA_peEMo",
            authDomain: "petscan-demo.firebaseapp.com",
            databaseURL: "https://petscan-demo-default-rtdb.asia-southeast1.firebasedatabase.app",
            projectId: "petscan-demo",
            storageBucket: "petscan-demo.appspot.com",
            messagingSenderId: "243961994272",
            appId: "1:243961994272:web:2dad5f4f0c4d199738b045",
            measurementId: "G-3QSVB9PFN6"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
        const storage = getStorage(app);
        console.log(app)

        function uploadimg(){
            const ref = storage.ref()

            const file = document.querySelector('#photo').files[0]

            const name = new Date() + '-' +file.name

            const metadata = {
                contentType: file.type
            }

            const task = ref.child(name).put(file, metadata)

            task
            .then(snapshot => snapshot.ref.getDownloadURL())
            .then (url => {
                alert('Image uploaded successfully')
                console.log(url)
            })
        }


        
    </script>
</body>

</html>