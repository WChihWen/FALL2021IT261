<?php
//prevents data from being sent early
ob_start();
session_start();

include('credentials.php');





if (isset($_SESSION["USERNAME"]) && $_SESSION["USERNAME"] != NULL){  
    
}else{
    
}

?>