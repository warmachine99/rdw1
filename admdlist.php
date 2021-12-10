<?php
   
   $conn=mysqli_connect('localhost','root','','rdw1');
   $sql="SELECT * FROM  user  ";
   $result=mysqli_query($conn,$sql);

   $sql1="SELECT * FROM  driver";
   $result1=mysqli_query($conn,$sql1);

   




//    echo $sql;
//    return;

  
?>




<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title>Check User Details</title>   
<meta name="description" content="Bootstrap.">  
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="sweetalert2/sweetalert2.css">
<script src="sweetalert2/sweetalert2.min.js"></script>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">




<body> 
 <?php include 'adminnav.php';?> 
 <br><br>
<div class="container">

<div class="row">
    <div class="page header">
        <h3 style="text-align: center;">User List</h3>

    </div>
    
    <table id="myTable" class="table table-bordered" >  

        <thead>
              <th>Firstname</th>
              <th >Lastname</th>
              <th >Action</th>
        </thead>

        <tbody>
            <?php while($row=mysqli_fetch_assoc($result)){?>
              <tr>
                <td> <?php echo $row['firstname']?> </td>
                <td> <?php echo $row['lastname']?> </td>
                <td>

                  <a class="btn btn-danger" href="driverprof.php?did=<?php echo $row['driverid']; ?>">view</a>
                  <input type="number" value="<?php echo $row = $_GET['did']; ?>" name="foreign_key">
                
                </td>
              </tr>
              <?php }?>

            </tbody>

          </table>

</div>

</div>
</body>  

</html>  


'
<!-- 
// create a page which lists all the signed up users with buttons href='newlicense.php?did='
    // select id, name from users
// hidden field with driver's id (foreign key) -->