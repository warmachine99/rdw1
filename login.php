<?php
    $conn= mysqli_connect('localhost', 'root', '', 'rdw1');

    if (!$conn) {
        echo "<script>alert('Connection failed.');</script>";
    }





if(isset($_POST['login_user'])){
  
    $email= $_POST['email'];
    $password=$_POST['password'];
    
    $query1= "SELECT * from user WHERE email= '$email'";

    $que = mysqli_query($conn,$query1); 
    
    $row1 = mysqli_fetch_array($que);

  

  
    //if row1 is not empty has
    if(!empty( $row1)){
         $password= md5($password);

        if($password== $row1['password']){
          session_start();
          
          $_SESSION['userid'] = $row1['userid']; 
          
          header("location: main.php");


        }else{
            echo '<script> alert("password is wrong");</script>';
        }


    }else{
        echo '<script> alert("user not found");</script>'; 
    }
 

}

// create a page which lists all the signed up users with buttons href='newlicense.php?did='
    // select id, name from users
// hidden field with driver's id (foreign key)

?>
<input type="hidden" value="<?= $_GET['did'] ?>" name="foreign_key">