<?php
include('dbcon.php');

if(isset($_POST['upload']))
{
    $scanID = $_POST['scanID'];
    $userID = $_POST['userID'];
    $disease = $_POST['disease'];
    $image = $_FILES['image']['name'];
    $currentDate = date("Y-m-d H:i:s");
    $status = "Not Evaluated";




    $postData = [
        'scanID' => $scanID,
        'userID' => $userID,
        'disease' => $disease,
        'image' => $image,
        'date' => $currentDate,
        'status' => $status
    ];
    $ref_table = "scan_table";
    $postRef_result = $database->getReference($ref_table)->push($postData);


    if($postRef_result)
    {
        $_SESSION['status'] = "Data Uploaded Successfully";
        header('Location: demo.php');
    }
    else
    {
        $_SESSION['status'] = "Data Not Uploaded";
        header('Location: demo.php');
    }
}

?>