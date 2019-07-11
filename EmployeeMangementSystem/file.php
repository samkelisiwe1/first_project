<?php

//session_start();



$mysqli = new mysqli('localhost','root','','EmployeeManagementSystemdb') or die (mysqli_error($mysqli));


if(isset($_POST['Register'])){

    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Email_Address = $_POST['Email_Address'];
    $Date_of_Birth = $_POST['Date_of_Birth'];
    $Phone_Number = $_POST['Phone_Number'];
    $Job_Title = $_POST['Job_Title'];
    $Hired_Date = $_POST['Hired_Date'];
    $optionSelected = $_POST['optionSelected'];

   $mysqli->query("INSERT INTO  registration (First_Name,Last_Name,Email_Address,Date_of_Birth,Phone_Number,Job_Title,Hired_Date,Gender) 
    VALUES('$First_Name', '$Last_Name' ,'$Email_Address','$Date_of_Birth','$Phone_Number',' $Job_Title','$Hired_Date','$optionSelected')")
    or die($mysqli->error);

}





if(isset($_GET['delete'])){

    $id = $_GET['delete'];



    $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error());



    $_SESSION['message']="Record has been deleted!";

    $_SESSION['msg_type']="danger"; 



    header("location: index.php");

} 



if(isset($_GET['edit'])){

    $id = $_GET['id'];



    $mysqli->query("SELECT  FROM data WHERE id=$id") or die($mysqli->error());



    if (count($result)==1){

        $row = $result->fetch_array();

        $name = $row['name'];

        $location = row['location'];

    }





    $_SESSION['message']="Record has been deleted!";

    $_SESSION['msg_type']="danger"; 



    header("location: index.php");

} 