<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EmployeeMangementSystem</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- style --->
<style>

table, th, td {

}

div{
    float:top;
    <padding-left:84>%;


}
.h2{
    padding-left:2%
}
.btn-outline-secondary{

  float:right;
  margin-right:5px;

}

</style>
</head>
<body style="margin:10px;"> 
<?php require_once 'connection.php'?>
   <?php 
   $result = $conn->query("SELECT * From registration") or die ($conn->error);
   ?>

      <!-- My navbar -->
            <nav class="navbar navbar-dark bg-dark">
                        <a class="navbar-brand" href="#">Digital Academy</a>
                        <form class="form-inline">
                          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                          <button type="button" class="btn btn-outline-success">Search</button> 
                        </form>
                      </nav>
                     
                      <br>
                      <td><button type="button" class="btn btn-outline-secondary"><a href="Registration.php">Add Employee</a></button></td>
                      <h2 class="h2" >All Employees</h2> 
    
      <br>
      <!-- Table -->
      <table class="table table-hover">
            
      <div>
            <tr>
                   <th>registration id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Date of Birth</th>
                    <th>Phone Number</th>
                    <th>Job Title</th>
                    <th>Hired Date</th>
                    <th>Gender</th>
                    <th></th>
                    
                    <td></td>
                    
                 

                
                

            </tr>
          <!-- selecting data from database(EmployeeManagementSystem)-->
            
            <?php  while($row = $result->fetch_assoc()): ?>
            
            
            <tr>
                    <td><?php echo $row ['registration_id'];?></td>
                    <td><?php echo $row['First_Name'];?></td>
                    <td><?php echo $row['Last_Name'];?></td>
                    <td><?php echo $row['Email_Address'];?></td>
                    <td><?php echo $row['Date_of_Birth'];?></td>
                    <td><?php echo $row['Phone_Number'];?></td>
                    <td><?php echo $row['Job_Title'];?></td>
                    <td><?php echo $row['Hired_Date'];?></td>
                    <td><?php echo $row['Gender'];?></td>
              
                   
                    <td><a href = "Delete.php?registration_id=<?php echo $row['registration_id']; ?>" 
                    class="btn btn-outline-danger" name="Del">Delete</a></td>
                    <td><a href = "update.php?Update=<?php echo $row['registration_id'];?>"
                    class="btn btn-outline-success">Update</a></td>
                    
                  

                 
            </tr>
             <?php endwhile; ?>


            </div>
      </table>
                  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
</body>
</html>