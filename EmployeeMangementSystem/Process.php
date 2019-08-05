
<?php require_once 'connection.php'?>

<?php


//$_post method
if(isset($_POST['Register'])){

    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Email_Address = $_POST['Email_Address'];
    $Date_of_Birth = $_POST['Date_of_Birth'];
    $Phone_Number = $_POST['Phone_Number'];
    $Job_Title = $_POST['Job_Title'];
    $Hired_Date = $_POST['Hired_Date'];
    $Gender = $_POST['optionSelected'];
  
    $select="SELECT * FROM registration  WHERE Email_Address=' $Email_Address' ";

    $result=mysqli_query($conn,$select);
    $resultcheck=mysqli_num_rows($result);
    if($resultcheck>0){
          echo"<script>alert('email address already exists');</script>";
         header("location.href=Registration.php");
    
    } 
    else{
        $sql = "INSERT INTO registration (First_Name, Last_Name, Email_Address,Date_of_Birth, Phone_Number,Job_Title,Hired_Date,Gender)
        VALUES (' $First_Name ', '$Last_Name ', ' $Email_Address','$Date_of_Birth','$Phone_Number','$Job_Title','$Hired_Date','$Gender' )";
    
        if ($conn->query($sql) === TRUE) {
        header('Location:HomePage.php');
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
     
       

  

}

 $conn->close();
?>