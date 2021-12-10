<?php
   
   

   $conn=mysqli_connect('localhost','root','','rdw1');
   $id= $_GET['v_id'];
   $sql="SELECT * FROM  vehicle WHERE v_id='$id'";
   $result=mysqli_query($conn,$sql);

   $row=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>updated Vehicle</title>

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
	 <?php include 'adminnav.php';?>
     
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <a class="btn btn-info" href="indexbill.php">Bill List</a>
        </div> 
        <div class="col-md-6">
        <h2>Updated Vehicle</h2>
        <hr>
          
        <table class="table" >

        <thead>
          <th>Vehicle Picture :</th> 
          <td><?php echo $row['picture']; ?></td>
        
         </thead>  
         

         <?php while($row=mysqli_fetch_assoc($result)) {  ?>
            <tbody>
                <tr>
                    <td><img height="100px" width="100px" src="vehiclepicture/<?php echo $row["picture"]; ?>" alt="vehicle Pic"></td>

                    <td><a href="driverprof.php?driverid=<?php echo $row["v_id"]; ?>"> <?php echo $row["regno"] ?></a></td>
                </tr>
            </tbody> 
          <?php  }?>

          <tr>
            <th>Registration Number:</th>
            <td><?php echo $row['regno']; ?></td>
          </tr>
           
          
          <tr>
            <th >Type:</th>
            <td><?php echo $row['type']; ?></td>
          </tr>
          <tr>
            <th >Chasis no:</th>
            <td><?php echo $row['chasisno']; ?></td>
          </tr>
          <tr>
            <th > Brand:</th>
            <td><?php echo $row['brand']; ?></td>
          </tr>
          <tr>
            <th >color:</th>
            <td><?php echo $row['color']; ?></td>
          </tr>
          <tr>
            <th > Registration Date:</th>
            <td><?php echo $row['regdate']; ?></td>
          </tr>
        </table>  

        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 