<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   

    $connection= mysqli_connect('localhost','root','','rdw1');
    $msg= "" ;     


    if(isset($_POST['submit'])){
        $drname=$_POST['drname'];
        $dob=$_POST['dob'];
        $col=$_POST['col'];
        $nation=$_POST['nation'];
        $drlicense=$_POST['drlicense'];
        $drlicensevalid=$_POST['drlicensevalid'];
        $doi=$_POST['doi'];
        $dphoto = "lcpic/".basename($_FILES['file']['name']);
      
        //image Upload
        
        // $res=false;
        $insert_query="INSERT INTO driver (`drname`, `dob`, `col`, `nationality`, `drlicense`, `doi`, `drlicenseex`, `drphoto`) VALUES ('$drname','$dob','$col','$nation','$drlicense','$doi','$drlicensevalid','$dphoto')";
        // echo $insert_query;
        // return;
        $res= mysqli_query($connection,$insert_query);

        if (move_uploaded_file($_FILES['file']['tmp_name'], $dphoto)){
          // $msg = " image uploaded";
        }else{
          // $msg = "Error image not uploaded";
        }
  
    
  }
  else{
      echo 'not inserted';
        
     }

    
        
       
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Driver</title> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
  
 
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animate.css">
</head>
<body>  
 <?php include 'navbar.php'; ?>
 <br>
  
  
   <div class="container"> 
     <div class="row">
       
        <div class="page-header">
            <h1 style="text-align: center;">New Driver Form</h1>
            <?php echo $msg; ?>
                              
                  
      
      </div> 
       <div class="col-md-3">
         
       </div>
        <div class="col-md-6 animated bounceIn"> 
                <br>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" >
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Driver Name</b></span>
                  <input id="drname" type="text" class="form-control" name="drname" placeholder="Name">
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Date of Birth</b></span>
                  <input id="dob" type="text" class="form-control" name="dob" placeholder="yyyy-mm-dd">
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Class of License</b></span>
                  <input id="col" type="text" class="form-control" name="col" placeholder="class">
                </div>
                <br>
                
              
                
                  <script>
                      $( function() {
                        $( "#dob" ).datepicker({
                          dateFormat: 'yy-mm-dd'
                        });
                      } );
                  </script> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Nationality</b></span>
                  <input id="nation" type="text" class="form-control" name="nation" placeholder="Nationality">
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon"><b>License No</b></span>
                  <input id="drlicense" type="text" class="form-control" name="drlicense" placeholder="License No">
                </div>
                <br>


                <div class="input-group">
                  <span class="input-group-addon"><b>Date of issue</b></span>
                  <input id="doi" type="text" class="form-control" name="doi" placeholder="yyyy-mm-dd">
                </div>
                <br>

                <script>
                      $( function() {
                        $( "#doi" ).datepicker({
                          dateFormat: 'yy-mm-dd'
                        });
                      } );
                  </script> 

              
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Expiry Date</b></span>
                  <input id="drlicensevalid" type="text" class="form-control" name="drlicensevalid" placeholder="yyyy-mm-dd">
                </div>
                <br>

                
              
                
                 <script>
                      $( function() {
                        $( "#drlicensevalid" ).datepicker({dateFormat: 'yy-mm-dd'});
                      } );
                </script> 

                 <div class="input-group">
                  <span class="input-group-addon"><b>Photo</b></span>
                  <input  type="file" class="form-control" name="file"> 

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