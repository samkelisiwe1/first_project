<?php 

include_once 'connection.php';

if(isset($_POST['Update'])){

$id=$_POST['registration_id'];

$First_Name=$_POST['First_Name'];
$Last_Name=$_POST['Last_Name'];
$Email_Address=$_POST['Email_Address'];
$Date_of_Birth=$_POST['Date_of_Birth'];
$Phone_Number=$_POST['Phone_Number'];
$Job_Title=$_POST['Job_Title'];
$Hired_Date=$_POST['Hired_Date'];

$sql="UPDATE registration SET First_Name='$First_Name',Last_Name='$Last_Name',Email_Address='$Email_Address'
,Date_of_Birth='$Date_of_Birth',Phone_Number='$Phone_Number',Job_Title='$Job_Title',Hired_Date='$Hired_Date'WHERE registration_id='$id'";


$query = mysqli_query($conn,$sql);

header('location:update.php');

 }

?>

