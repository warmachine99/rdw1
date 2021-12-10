<?php
   
//    $vregno= $_POST['regno'];
//    $vtype= $_POST['type'];
//    $vchasisno= $_POST['chasisno'];
//    $vbrand= $_POST['brand'];
//    $vcolor= $_POST['color'];
//    $vregdate= $_POST['regdate'];
//    $vpicture= $_FILES['image']['name'];
  
//    $target = "vehiclepicture/".basename($_FILES['image']['name']);



   $conn=mysqli_connect('localhost','root','','rdw1');
   $sql="UPDATE vehicle SET  regno=?,type=?,chasisno=?,brand=?,color=?,regdate=?, brand=?, picture=?,  WHERE veh_id=?";
     
   echo $sql;
   return;



   if(mysqli_query($conn,$sql)){
      header("Location: updatedv.php?v_id=".$id); 
   }else{
        echo "Not updated";
   }
?>