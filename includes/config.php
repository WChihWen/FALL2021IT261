<?php

include('credentials.php');
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/
$nav1['index.php'] = "Home";
$nav1['website/daily.php'] = "Switch";
$nav1['adder.php'] = "Troubleshoot";
$nav1['calculator.php'] = "Calculator";
$nav1['final/switch.php'] = "Final Project";
//$nav1['#Database'] = "Database";


//prevents data from being sent early
ob_start();


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;
$logo_color = '';
$logo = ' fa-home';
switch(THIS_PAGE){
    case 'index.php':
        $title = "   Chih Wen Wang's Portal Page";
        $logo = ' fa-home';
        $PageID = "  Portal Page";
        break;    
    case 'gallery.php':
        $title = "Chih Wen's Gallery of IT261 Website";
        $logo = ' fa-home';
        $PageID = "Marvel Super Heroes";
        break;
   
    default:
        $title = THIS_PAGE;
        $logo = ' fa-home';
        $PageID = "  Chih Wen's IT261 Website";
        break;
   }



/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray){
    $myReturn = '';
    
    foreach($linkArray as $url => $text){
        
        switch($url){
            case '../index.php':
                $mymenuico='fa fa-university';
                break;
            case 'index.php':
                $mymenuico='fa fa-fw fa-home';
                break;           
            default:
                $mymenuico = '';
                break;
           }

           $myReturn .= '<li><a href="' . $url . '"><i class="' . $mymenuico . '"></i>' . $text . '</a></li>'  . PHP_EOL;
          
    }      
    return $myReturn;    
}



define('DEBUG', 'TRUE');  // We want to see our errors

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
