<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EmployeeMangementSystem</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>

            .card-signup{
            width: 45%;
            text-align: center;
            margin: auto;
            padding-bottom: 70px;
            margin-top: 100px;
            margin-bottom: 10px; 
            border-radius:30px ;
            padding-left:30px;
            padding-top:30px;
            padding-right:30px;
          
            
        }
    </style>

</head>
<body>

<?php require_once 'SignUpProcess.php'?>
<!-- My navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Digital Academy</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span></button>
  </nav>
  
  <div class="card card-signup card text-white bg-dark mb-3">
  <h1 >New User</h1>
  
    <form method="POST" action=" ">
      <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputFirst_Name">First Name</label>
          <input type="text" class="form-control" name="First_Name"  id="First_Name" placeholder="First Name" require>
        </div>

        <div class="form-group col-md-6">
        <label for="inputLast_Name">Last Name</label>
          <input type="text" class="form-control" name="Last_Name" id="Last_Name" placeholder="Last Name"required>
        </div>
      </div>
      
    <div class="form-group">
    <label for="inputEmail_Address">Email Address</label>
      <input type="text" class="form-control" name="Email_Address" id="Email_Address" placeholder="example@gmail.com" required>
    </div>
    
    
    <div class="form-row">
      <div class="form-group col-md-6">
      <label for="inputCreate_Password">Create Password</label>
        <input type="password" class="form-control" name="Create_Password" id="Create_Password" placeholder="1234" required>
      </div>

      <div class="form-group col-md-6">
      <label for="inputCreate_Password">Confirm Password</label>
        <input type="password" class="form-control" name="Confirm_Password" id="Confirm_Password" placeholder="1234" required>
      </div>
    </div>
    
    <button type="submit"  id="SignUp" name="SignUp" class="btn btn-outline-primary">Sign Up</button>
  </form>
</div>
    

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>
</html>