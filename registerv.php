<?php 
    // if(!isset($_SESSION)) 
    // { 
    //     session_start(); 
    // } 
    

  
    $msg= "" ;
    
    if(isset($_POST['submit'])){

        $host="localhost";
        $user="root";
        $pass="";
        $db="rdw1";

          
        $conn= mysqli_connect($host,$user,$pass,$db);
        $vregno= $_POST['regno'];
        $vtype= $_POST['type'];
        $vchasisno= $_POST['chasisno'];
        $vbrand= $_POST['brand'];
        $vcolor= $_POST['color'];
        $vregdate= $_POST['regdate'];
        $vpicture= $_FILES['image']['name'];
        $target = "vehiclepicture/".basename($_FILES['image']['name']);
        //image Upload he


        
        $vquery="INSERT INTO vehicle (regno, type, chasisno, brand, color, regdate, picture) VALUES ('$vregno','$vtype','$vchasisno','$vbrand','$vcolor','$vregdate','$target')";
        // 
        $res= mysqli_query($conn,$vquery);

        // echo $vquery;
        //  return;

        if (move_uploaded_file($_FILES['image']['tmp_name'], './'.$target)){

            echo'<script> alert("Vehicle has Been Registered");</script>';
            
        }else{
            $msg = "Error Vehicle not Registered";
        }

            // header("location: main.php ");
      
    }
    else{
        echo 'not inserted';
    
    }
    
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Vehicle</title> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    
  
 
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
</head>
<body>  
 <?php include 'navbar.php'; ?>
 <br>
  
  
   <div class="container"> 
     <div class="row">
       
        <div class="page-header">
            <h1 style="text-align: center;">Register Vehicle Form </h1>
            <?php echo $msg; ?>
      </div> 
       <div class="col-md-3">
        
         <!--
          <br> 
          <form action="" method="post" enctype="multipart/form-data">
              <div class="input-group">
                  <span class="input-group-addon"><b>Photo</b></span>
                  <input id="drphoto" type="file" class="form-control" name="file"> 

              </div>
              <input type="submit" name="psubmit" class="btn btn-success btn-small">
              
          </form>
           
         -->  
       </div>
        <div class="col-md-6 animated bounceIn"> 
          
           
            
                <br>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Registration Number</b></span>
                  <input id="vehreg" type="text" class="form-control" name="regno" placeholder="Reg No">
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Type</b></span>
                  <label class="radio-inline">
                      <input type="radio" name="type" value="bus">Bus 
                    </label>
                <label class="radio-inline">
                  <input type="radio" name="type" value="car">Car
                </label>
                <label class="radio-inline">
                      <input type="radio" name="type" value="motorcycle">Motorcycle
                    </label>
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Chasis No</b></span>
                  <input id="vchasis" type="text" class="form-control" name="chasisno" placeholder="Chasis No">
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Brand</b></span>
                  <input id="brandv" type="text" class="form-control" name="brand" placeholder="Brand">
                </div>
                <br>
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Color</b></span>
                  <input id="colorv" type="text" class="form-control" name="color" placeholder="Color">
                </div>
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Registration Date</b></span>
                  <input id="regdatev" type="text" class="form-control" name="regdate" placeholder="Registration date">
                </div>
                <br>
                
              
                <script>
                      $( function() {
                        $( "#regdatev" ).datepicker({
                          dateFormat: 'yy-mm-dd'
                        });
                      } );
                  </script> 

                

                <!-- cite the datepicker -->
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Photo</b></span>
                  <input  type="file" class="form-control" name="image"> 

              </div>
                <br>
                <div class="input-group">
                  <input type="submit" name="submit" class="btn btn-success">
                  
                </div>

              </form>   
        </div>  
        <div class="col-md-3"></div>
         
     </div>
         
   
    </div> 
    
     
      
    
</body>
</html>

