<!---->

<?php 
  include("connectdb.php");
  require("../healper.php");
session_start();
if(isset($_POST['submit'])){
   $name    =    cleandata(sanitize($_POST['user_name']));
   
   $tempid  =    $name.rand(10,999);
   $user_id =    preg_replace('/\s+/','',$tempid);
   $pwd     =    rand(1000,9999);
   
     
   $query = "INSERT INTO `user`(`user_id`, `name`, `pwd`) VALUES ('$user_id','$name','$pwd')";
   $fire = mysqli_query($conn,$query);
  if($fire){
       $_SESSION['id'] = $user_id;
       header("Location:../home.php?id=$user_id");
  }
  else{
     header("Location:../index.php?error=1");
 }
}

?>