 


 
<?php
//online
 $host = "remotemysql.com";
 $user = "MhXSQS4apV";
 $pwd = "BsWLe8Yyym";
  $db = "MhXSQS4apV";
 
  $conn = mysqli_connect($host,$user,$pwd,$db);
   if(!$conn){
    echo "not connected";
    echo error();
   }


?>