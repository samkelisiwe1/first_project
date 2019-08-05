

<?php
include 'connection.php';
//$_post method
if(isset($_POST['SignUp'])){
    $First_Name = ($_POST['First_Name']);
    $Last_Name = ($_POST['Last_Name']);
    $Email_Address = ($_POST['Email_Address']);
    $Create_Password = ($_POST['Create_Password']);
    $Confirm_Password = ($_POST['Confirm_Password']);
  
    //checking if passwords & email address match

    if ($_POST['Create_Password']!= $_POST['Confirm_Password'])
    
 {
    echo"<script>alert('Oops! Password did not match! Try again.');</script>";
   header("location.href=SignUp.php");
   
    }
    else{
        $sql = "INSERT INTO SignUp (First_Name, Last_Name, Email_Address,Create_Password,Confirm_Password)
        VALUES (' $First_Name', '$Last_Name ', ' $Email_Address','$Create_Password',' $Confirm_Password ')";

        if ($conn->query($sql) === TRUE) {
            header('Location:HomePage.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

?>


