<?php
    $conn=mysqli_connect('localhost','root','','rdw1');

   $sql1="SELECT * from driver";
   $result1=mysqli_query($conn,$sql1);

   if(mysqli_num_rows($result1)>0)
   {
     while($rowss=mysqli_fetch_assoc($result1)){
       $id=$rowss['driverid'];

       $sql="DELETE FROM driver WHERE driverid = '$id' ";
       $query=mysqli_query($conn,$sql);


       $driverid = mysqli_insert_id($conn);
     }



 

   $conn=mysqli_connect('localhost','root','','rdw1');
  

  //  echo $sql;
  //  return;
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
       header("Location: deletedriver.php");
   }else{
         echo "Not deleted";
   }
}
   
?>
