<?php
  
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 $database_name = 'EmployeeManagementSystemdb';

 //create connection 
 $conn = new mysqli ($servername ,$username,$password ,$database_name );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

//$_post method
if(isset($_POST['Register'])){

    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Email_Address = $_POST['Email_Address'];
    $Date_of_Birth = $_POST['Date_of_Birth'];
    $Phone_Number = $_POST['Phone_Number'];
    $Job_Title = $_POST['Job_Title'];
    $Hired_Date = $_POST['Hired_Date'];
    $Gender = $_POST['Gender'];


$sql = "INSERT INTO registration (First_Name, Last_Name, Email_Address,Date_of_Birth, Phone_Number,Job_Title,Hired_Date,Gender)
VALUES (' $First_Name ', '$Last_Name ', ' $Email_Address','$Date_of_Birth','$Phone_Number','$Job_Title','$Hired_Date','$Gender' )";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//$_GET method

if(isset($_GET['Delete'])){
    $registration_id = $_GET['registration_id'];
}

//deleting data from database
$sql = "DELETE FROM registration WHERE registration_id = 200";


if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}



//$_GET method

if(isset($_GET['Delete'])){
    $registration_id = $_GET['registration_id'];
}

//editing data

$sql = "UPDATE  registration SET Last_Name = 'Khumalo' WHERE registration_id = 3 ";


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


}

$conn->close();
?>