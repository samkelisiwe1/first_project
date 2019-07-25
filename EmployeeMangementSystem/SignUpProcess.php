

<?php
include 'connection.php';
//$_post method
if(isset($_POST['SignUp'])){
    $First_Name = ($_POST['First_Name']);
    $Last_Name = ($_POST['Last_Name']);
    $Email_Address = ($_POST['Email_Address']);
    $Confirm_Email_Address= ($_POST['Confirm_Email_Address']);
    $Create_Password = ($_POST['Create_Password']);
    $Confirm_Password = ($_POST['Confirm_Password']);
  

$sql = "INSERT INTO SignUp (First_Name, Last_Name, Email_Address,Confirm_Email_Address, Create_Password,Confirm_Password)
VALUES (' $First_Name', '$Last_Name ', ' $Email_Address','  $Confirm_Email_Address',' $Create_Password',' $Confirm_Password ')";

if ($conn->query($sql) === TRUE) {
    header('Location:HomePage.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>