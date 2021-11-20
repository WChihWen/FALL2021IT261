<?php 
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

 

 

 

 echo 'DB_HOST:'.DB_HOST.'<br>';
 echo 'DB_USER:'.DB_USER.'<br>';
 echo 'DB_PASSWORD:'.DB_PASSWORD.'<br>'; 
 echo 'DB_NAME:'.DB_NAME.'<br>';


 

 

 

 

function myError($myFile, $myLine, $errorMsg){
    if(defined('DEBUG') && DEBUG){
        echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
        echo 'Error message: <b> '.$errorMsg.'</b>';
        die();
    }  else {
        echo ' Houston, we have a problem!';
        die();
    }
}

?>