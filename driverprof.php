<?php
    $connection= mysqli_connect("localhost","root","","rdw1");
    session_start();

   

    $sql= "SELECT * FROM driver"; 
    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);

    // echo $sql;
    // return;

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>vehicle management system</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>  
  
   <?php include 'navbar.php';?>
   <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
	
   
</div>
       
        <div class="container">
          <div class="row"> 
          <div class="fb-profile-text" id="h1" >
              <h2><?php echo $row['drname']; ?></h2>
            </div>
            <hr>
           <div class="col-sm-3">
                   <div class="fb-profile">
                        <img height="200" width="200" align="left" class="fb-image-profile thumbnail userpic" src="lcpic/<?php echo $row['drphoto'] ?>" alt="dp"/>
                    </div>
           </div> 
           
           <div class="col-sm-9">
               <div data-spy="scroll" class="tabbable-panel">
                <div class="tabbable-line">
                  <ul class="nav nav-tabs ">
                    <li class="active">
                      <a href="#tab_default_1" data-toggle="tab">
                      About Me </a>
                    </li>
                    
                   
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab_default_1">

                     
                      <h4><strong>Full Name:</strong></h4>
                      <p>
                        <?php echo $row['drname']; ?> 
                      </p>
                      <h4><strong>License ID:</strong></h4>
                      <p><?php echo $row['drlicense']; ?></p>
                      
                      <h4><strong>Nationality: </strong></h4>
                      <p><?php echo $row['nationality']; ?></p>

                      <h4><strong>Date Of Birth:</strong></h4>
                      <p><?php echo $row['dob']; ?></p>

                      <h4><strong>Date of Issue:</strong></h4>
                      <p><?php echo $row['doi']; ?></p>

                      <h4><strong>Expiry Date:</strong></h4>
                      <p><?php echo $row['drlicenseex']; ?></p>

                     


                    </div>
          
                      
                      
                  </div>
                </div>
              </div>
           </div>
          </div>
        </div>
        
          <!-- /container fluid-->  
        <div class="container">
          <div class="col-sm-12"> 
              
          </div>
    </div>
    
</body>
</html>




