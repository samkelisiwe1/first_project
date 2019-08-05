<?php
// include database connection file
include_once 'connection.php';

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
  $id=$_POST['registration_id'];
  
  $First_Name=$_POST['First_Name'];
  $Last_Name=$_POST['Last_Name'];
  $Email_Address=$_POST['Email_Address'];
  $Date_of_Birth=$_POST['Date_of_Birth'];
  $Phone_Number=$_POST['Phone_Number'];
  $Job_Title=$_POST['Job_Title'];
  $Hired_Date=$_POST['Hired_Date'];
		
	// update user data
 // $result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");
  
  $sql="UPDATE registration SET First_Name='$First_Name',Last_Name='$Last_Name',Email_Address='$Email_Address'
,Date_of_Birth='$Date_of_Birth',Phone_Number='$Phone_Number',Job_Title='$Job_Title',Hired_Date='$Hired_Date'WHERE registration_id='$id'";
  
  $query = mysqli_query($conn,$sql);
  
	// Redirect to homepage to display updated user in list
	header("Location: HomePage.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['registration_id'];

// Fetech user data based on id
$sql2 ="SELECT * FROM registration WHERE registration_id=$id";

$result =mysqli_query($conn,$sql2);

while($row = mysqli_fetch_array($result))
{
  $First_Name = $row['First_Name'];
  $Last_Name = $row['Last_Name'];
  $Email_Address = $row['Email_Address'];
  $Date_of_Birth = $row['Date_of_Birth'];
  $Phone_Number = $row['Phone_Number'];
  $Job_Title = $row['Job_Title'];
  $Hired_Date = $row['Hired_Date'];
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EmployeeMangementSystem</title>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     
  
<style>

.card-registration{
            width: 45%;
            text-align: center;
            margin: auto;
            padding-bottom: 20px;
            margin-top: 20px;
            margin-bottom: 20px; 
            border-radius:20px ;
          
            
        }
        button{
            border-radius:5px; 
        }
        .form {
         display: inline-block;
        text-align: -webkit-center !important;
        }
        label {
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
            text-align: right;
            width: 400px;
            line-height: 35px;
            margin-bottom: 20px;
            }
            
        input {
            height: 30px;
            flex: 0 0 50px;
            margin-left: 60px;
            }
</style>
<body>

<!-- My navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Digital Academy</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      
    <span class="navbar-toggler-icon"></span>
                </button>
              </nav>

              <div class="card card-registration card text-white bg-dark mb-3">
                  <br>
                  <!-- Registeration form -->
                  <h1 >  Information Update</h1>
                  <br>
                  <br>
                 
                  <br>
                  <form class="form" action="update.php" method="POST" style="text-align:center">
                      <label>
                        First Name: <input type="text" name="First_Name" id="First_Name" value="<?php echo $First_Name;?>" >
    
                      </label>
                      <label>
                        Last Name: <input type="text" name="Last_Name" id="Last_Name" value="<?php echo $Last_Name;?>" > 
                       </label>
                    <label>
                      Email Addresss:<input type="text" name="Email_Address" id="Email_Address" value="<?php echo $Email_Address;?>" >
                    </label>
                     <label>
                      Date of Birth:<input type="text" name="Date_of_Birth" id="Date_of_Birth" value="<?php echo $Date_of_Birth;?>" >
                    </label>
                      <label>
                       Phone Number:<input type="text" name="Phone_Number" id="Phone_Number" value="<?php echo $Phone_Number;?>"  >
                    </label>
                      <label>
                      Job Title:<input type="text" name="Job_Title" id="Job_Title" value="<?php echo $Job_Title;?>">
                    </label>
                       <label>
                       Hired Date:<input type="text" name="Hired_Date" id="Hired_Date" value="<?php echo $Job_Title;?>" >
                    </label>
                    <label>
                         Gender:
                            <select  name="optionSelected">
                            <option value="Gender">Gender</option>
                            <option value="Female" id="Female">Female</option>
                            <option value="Male" id="Male">Male</option>
                        </select>
                        </label>
                               
                       <br>
                       <br>
                       <!-- button -->

                       <tr>
                       <td><input type="hidden" name="registration_id" value=<?php echo $_GET['registration_id'];?>></td>
                       <td><input type="submit" name="update" value="Update"></td>
                       </tr>
                  </form>
              </div>





              <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>
</html>