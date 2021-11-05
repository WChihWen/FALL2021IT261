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
$bc = ''; //change main background color. it will bork on daily page.
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




//



?>
