<?php 

//funtion to clean data
 function cleandata($value){
     return trim($value);
 }


//function to senitize value for string => to remove html js property
function sanitize($raw_value){
    
    return filter_var($raw_value, FILTER_SANITIZE_STRING);
}

//function to validate value of email
function validatemail($raw_email){
    return filter_var($raw_email,FILTER_VALIDATE_EMAIL);
}

//  funtion to validate value of interger
function validateint($raw_int){
     return filter_var($raw_int,FILTER_VALIDATE_INT);
}

//function to redirect
function redirect($page){
    header("Location:{$page}");
}

//function to keep error in session
function keepmsg($message){
    if(empty($message)){
        $message = "";
    }else{
      $_SESSION['msg'] = $message;
    }

}
//display error message
function showmsg(){
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
}
// Creat function to hashed password and message
 function hashing($value){
        return md5($value);
    }


 

?>