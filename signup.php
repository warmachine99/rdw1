<?php

    $firstname = "";
    $lastname = "";
    $email = "";
    $errors =array();
    // connect to the database
    $conn=mysqli_connect("localhost","root","","rdw1");

    session_start();
    $msg="";

    // REGISTER USER
    if (isset($_POST['submit'])) {
      // receive all input values from the form
      if(isset($_POST['submit'])){

        $firstname= mysqli_real_escape_string($conn,($_POST['firstname']));
        $lastname= mysqli_real_escape_string($conn,($_POST['lastname']));
        $email= mysqli_real_escape_string($conn,($_POST['email']));
        $username= mysqli_real_escape_string($conn,($_POST['username']));
        $password= mysqli_real_escape_string($conn,($_POST['password'])); 
        
        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        if (empty($firstname)) { array_push($errors, "firstname is required"); }
        if (empty($lastname)) { array_push($errors, "lastname is required"); }
        if (empty($email)) { array_push($errors, "Email is required"); }
        if (empty($password)) { array_push($errors, "Password is required"); }
        
      }
    
        $check_query= "SELECT * FROM `user` WHERE username='$username' or email='$email'";
        $checkres=mysqli_query($conn,$check_query);
        $user = mysqli_fetch_assoc($checkres);

        
          if ($user) { // if user exists
            if ($user['username'] === $username) {
              array_push($errors, "name already exists");
            }
            

            if ($user['email'] === $email) {
              array_push($errors, "email already exists");
            }
          }   

            // Finally, register user if there are no errors in the form
              if (count($errors) == 0) {
                $password = md5($password);//encrypt the password before saving in the database

                $query = "INSERT INTO `user`(`firstname`, `lastname`, `email`, `username`, `password`) VALUES ('$firstname','$lastname','$email','$username','$password')"; 
                // echo $query;
                // return;
      
                mysqli_query($conn, $query);
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                
                echo  "<script> alert('successfully signed up') </script>";

                header('location: index.php');
              }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="swal/sweetalert.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="swal/sweetalert.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50"> 
  
  
  
  
  
   
    
    <br>
    <div class="container"> 
     <div class="row">
       <div class="col-md-3"></div>
        <div class="col-md-6"> 
           <?php echo $msg; ?>
            <div class="page-header">
                <h1 style="text-align: center;">Sign Up</h1>      
          </div> 
            <form class="form-horizontal animated bounce" action="" method="post"> 
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="firstname" type="text" class="form-control" name="firstname" placeholder="First Name">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="lastname" type="text" class="form-control" name="lastname" placeholder="Lastname">
                </div>
                <br>
                 <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="email" type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="username" type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <br> 
                
                <div class="input-group">
                  <button type="submit" name="submit" class="btn btn-success">Sign Up</button>
                  
                </div>

              </form>   
        </div> 
        <div class="col-md-3"></div>
         
     </div> 
    
    </div> 
    
   
    
</body>
</html>