
 <?php

session_start();

if (isset($_POST['Submit'])){
  include 'connection.php';

  //variables 

$Email = $_POST['Email'];
$Password =$_POST['Password'];

//input from user 

$Email = $_POST['Email'];
$Password =$_POST['Password'];

//check empty fields
if(empty(($Email) ||($Password) )){
  header("Location:index.php");
  exit();
  //select statement
}
else{
  $sql="SELECT * FROM Login WHERE Email='$Email' && Password='$Password'";
  $result = mysqli_query($conn,$sql);
  $resultcheck= mysqli_num_rows($result);
  if($resultcheck > 0 ){
    header("Location:HomePage.php");
    exit();
  } else{
    echo "<script>alert('Incorrect Password');location.href='index.php';</script>";
  
  }
}
 

}
   
?>
 

    
        
    
    
    

 


    






