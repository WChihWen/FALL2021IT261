<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title><?=$title?></title>
    <meta charset="utf-8" />
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/portal.css?001" />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/big.css?003" />
    <link rel="stylesheet" href="css/jquery-ui.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">   
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
    <script src="js/menumaker.js"></script>
    </head> 
    <body>
       <main>
            <header>
                <h1><a href="index.php"><i class="logo fa <?=$logo?><?=$logo_color?>"></i> Welcome to Chih Wen Wang's website.</a></h1>
                
                <nav id="cssmenu">
                    <ul>
                        <?=makeLinks($nav1)?> 
                    </ul>
                </nav>
            </header>
        
            
        
<!--  header end here  -->

