
 <?php include 'includes/header.php';?>    
 <?php include 'includes/daily_switch.php';?>   

<main <?php echo $bc ?>>
<div class="container">
    <header class="header">
        <img class="logo" src="images/<?php echo $logo ?>" alt="TV Show" /> 
    </header>
    <nav class="navigation">
        <ul>
            <?=makeLinks($nav1)?>                    
        </ul>  
        <br>
              
    </nav>
    <article class="content">
        <h1><?php echo $headline?></h1>    
        <h1><?php echo $subtitle; ?></h1>
        <p>
        <?php echo $content; ?>
        </p>
    </article>
    <aside class="links">                
        <div class="list-type5">
            <h1>Daily Specials</h1>
            <ol>
                <li><a href="daily.php?today=Monday">Monday</a></li>
                <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
                <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
                <li><a href="daily.php?today=Thursday">Thursday</a></li>
                <li><a href="daily.php?today=Friday">Friday</a></li>
                <li><a href="daily.php?today=Saturday">Saturday</a></li>
                <li><a href="daily.php?today=Sunday">Sunday</a></li>
            </ol>   
        </div>
    </aside>
    <aside class="ads">
        <img class="TVpic" src="images/<?php echo $pic; ?>" alt="<?php echo $tvshow; ?>" /> 
    </aside>
    
<?php include 'includes/footer.php';?>