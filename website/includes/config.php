<?php

$nav1['index.php'] = "Home";
$nav1['aboub.php'] = "About";
$nav1['daily.php'] = "Daily";
$nav1['project.php'] = "Project";
$nav1['contact.php'] = "Contact";
$nav1['gallery.php'] = "Gallery";


//prevents data from being sent early
ob_start();

//echo basename($_SERVER['PHP_SELF']);
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

switch(THIS_PAGE){
    case 'index.php':
        $title = "Home page of our IT261 Website";
        $body='home';
        $headline = 'Welcome to our Home page of our IT261 Website';
        $logo = 'logo_php.png';
        break;    
    case 'about.php':
        $title = "About page of our IT261 Website";
        $body='about inner';
        $headline = 'Welcome to our About page of our IT261 Website';
        $logo = 'logo_php.png';
        break;
    case 'daily.php':
        $title = "Daily page of our IT261 Website";
        $body='daily inner';
        $headline = 'Welcome to our Daily page where my Homework 3 Switch will dispaly';
        $logo = 'logo_tv.png';
        break;
    case 'project.php':
        $title = "Project page of our IT261 Website";
        $body='project inner';
        $headline = 'Welcome to our Project page of our IT261 Website';
        $logo = 'logo_php.png';
        break;
    case 'contact.php':
        $title = "Contact page of our IT261 Website";
        $body='contact inner';
        $headline = 'Welcome to our Contact page of our IT261 Website';
        $logo = 'logo_php.png';
        break;
    case 'gallery.php':
        $title = "Gallery page of our IT261 Website";
        $body='gallery inner';
        $headline = 'Welcome to our Gallery page of our IT261 Website';
        $logo = 'logo_php.png';
        break;
    default:
        $title = "Home page of our IT261 Website";
        $body='home';
        $headline = 'Welcome to our Home page of our IT261 Website';
        $logo = 'logo_php.png';
        break;
}


if(isset($_GET['today'])){
    $today = $_GET['today'];
} else {
    $today = date('l');
}

// switch main's background color
$bc = ''; //change main background color. it will bork on daily page.
switch($today){
    case 'Tuesday':    
        $bc ='style="background-color:#FCD2D1;"';
        break;        
    case 'Wednesday':    
        $bc ='style="background-color:#CEE5D0;"';
        break;            
    case 'Thursday':     
        $bc ='style="background-color:#D7E9F7;"';
        break;
    case 'Friday':  
        $bc ='style="background-color:#D1E8E4;"';
        break;
    case 'Saturday':    
        $bc ='style="background-color:#C8C6C6;"';
        break;
    case 'Sunday':    
        $bc ='style="background-color:#C7BEA2;"';
        break;
    default:     
        $bc ='style="background-color:#F0E5CF;"';
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
        if(THIS_PAGE == $url){
            $myReturn .= '<li><a class="current" href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
        
        }else{
            $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
        }
    }      
    return $myReturn;    
}

$photos[0] = 'm_Monday';
$photos[1] = 'm_Tuesday';
$photos[2] = 'm_Wednesday';
$photos[3] = 'm_Thursday';
$photos[4] = 'm_Friday';   
$photos[5] = 'm_Saturday'; 
$photos[6] = 'm_Sunday'; 

function random_pic($my_photos){  
$i = rand(0, count($my_photos) - 1);    

$selected_image = 'images/'.$my_photos[$i].'.jpg';
return '<img class="TVpic" src="'.$selected_image.'" alt="'.$my_photos[$i].'" /> ';
    
}

?>



