<?php
session_start();
   $s_id = $_SESSION['id'];
   if(isset($_SESSION['id'])){
       header("Location:../home.php?id=$s_id");
   }
?>


<?php 
  include("connectdb.php");
session_start();
if(isset($_POST['submit'])){
   $msg    =    $_POST['msg'];
   $user_id =   $_GET['id'];
   $status = 1;
    $query = "INSERT INTO `message`(`user_id`, `msg`,`status`) VALUES('$user_id','$msg',$status)";
    $fire = mysqli_query($conn,$query);
  if($fire){
       
       header("Location:../index.php?id=$user_id&status=1");
  }
  else{
     header("Location:../index.php?error=1");
 }
}

?>