<?php
session_start();
   $s_id = $_SESSION['id'];
   if(isset($_SESSION['id'])){
       header("Location:../home.php?id=$s_id");
   }
?>

<?php 
      include("connectdb.php");
      
      
     if(isset($_POST['login'])){
         $user_id = $_POST['user_name'];
         $pwd = $_POST['pwd'];
         
          
    $query = "SELECT * FROM `user` WHERE user_id = '$user_id' AND pwd = '$pwd'";
    $fire = mysqli_query($conn,$query);
    
         
    if(mysqli_num_rows($fire) > 0 ){
         $_SESSION['id'] = $user_id;
         header("Location:../home.php?id=$user_id");
     }
     else{
          header("Location:../index.php?error=1");
       }
    }
     
     
     



?>