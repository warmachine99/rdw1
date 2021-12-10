<?php
   $id= $_GET['v_id'];

   $conn=mysqli_connect('localhost','root','','rdw1');
   $sql="SELECT * FROM vehicle WHERE v_id='$id'";
   $result=mysqli_query($conn,$sql);

   $std=mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome</title>

    <!-- Bootstrap -->
    <link href="css/bootsrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <br><br><br>
	 <?php include 'navbar.php';?>
     
    <div class="container">
      <!-- <div class="row"> -->
        
        <div class="col-md-8">
        <h2>Edit vehicle</h2>
        <hr>

        
        <form action="updatev.php?id=<?php echo '$id'.'$v_id'; ?>" method="POST">
        
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
                        $( "#regdate" ).datepicker();
                      } );
                </script> 

                <!-- cite the datepicker -->
                
                
                
                
                <!--
                 <div class="input-group">
                  <span class="input-group-addon"><b>Photo</b></span>
                  <input id="vehphoto" type="file" class="form-control" name="file">
                </div>
                <br>
                -->
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
    
     


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 