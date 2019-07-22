<?php 
if (isset($_GET['registration_id']))
include 'connection.php';
{
    $id=$_GET['registration_id'];

    $sql="Delete FROM registration WHERE registration_id='$id'";

    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Delete successful');location.href='HomePage.php';</script>";
    }
    else{

        echo mysqli_error($conn);
        
        }
    }
?>