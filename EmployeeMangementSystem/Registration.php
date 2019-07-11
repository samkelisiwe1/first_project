<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EmployeeMangementSystem</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     
<!-- style -->
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
        .form{
            display: inline-block;
            text-align: left;
            
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
</head>
<body>
  

 <?php require_once 'Process.php'?>
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
                  <h1>Register New Employee</h1>
                  <br>
                  <form class="form" action="" method="POST">
                      <label>
                        First Name: <input type="text" name="First_Name"  />
                      </label>
                      <label>
                        Last Name: <input type="text" name="Last_Name"  />
                       </label>
                    <label>
                      Email Addresss:<input type="text" name="Email_Address" />
                    </label>
                     <label>
                      Date of Birth:<input type="text" name="Date_of_Birth" />
                    </label>
                      <label>
                       Phone Number:<input type="text" name="Phone_Number" />
                    </label>
                      <label>
                      Job Title:<input type="text" name="Job_Title" />
                    </label>
                       <label>
                       Hired Date:<input type="text" name="Hired_Date" />
                    </label>
                       <label>
                         
                       <select name="optionSelected">
                          <option value="">Gender</option>
                          <option value="Female">Female</option>
                          <option value="Male">Male</option>
                        </select>

                    </label>
        
                       <br>
                       <br>
                       <!-- button -->
                       <label>
                       <button name="Register">Register</button>
                    </label>
                  </form>
              </div>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>
</html>