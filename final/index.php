<?php include 'includes/header.php';?> 

<main <?php echo $bc ?>>
    <div class="container">
      <header class="header">
      <a href="index.php" ><img class="logo" src="images/<?php echo $logo ?>" alt="PHP Logo" /></a>
      </header>
         <nav class="navigation">
            <ul>
                  <?= makeLinks($nav1);?>                    
            </ul>            
         </nav>
         <article class="content">  
<pre>
   <b>
   function random_pic($my_photos){
      
      $i = rand(0, count($my_photos) - 1);    
      
      $selected_image = 'images/'.$my_photos[$i].'.jpg';
      return '< img class="TVpic" src="'.$selected_image.'" 
                     alt="'.$my_photos[$i].'" /> ';
      
   }
   </b>
</pre>
            <h1><?php echo $headline?></h1>   
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla massa lorem, mattis sed justo ut, tincidunt rutrum lorem. Fusce vitae odio erat. Fusce eget neque tempus nisl elementum fringilla nec sit amet nisi. Phasellus sit amet tristique ante. Aenean ac ligula id dolor hendrerit pretium vehicula eu mauris. Quisque venenatis ut quam quis mollis. Ut vulputate eget magna ut fermentum. Donec vitae suscipit tellus. Suspendisse vitae condimentum dolor. Curabitur quis consequat lectus. In hac habitasse platea dictumst. Praesent eget interdum nulla.</p> 
         </article>
         <aside class="links">  
         <h1>Random Picture</h1>
            <?= random_pic($photos);?>  
            
         </aside>
         <aside class="ads">
            <?php include 'includes/aside_ads.php';?> 
         </aside>
    
<?php include 'includes/footer.php';?>
    
