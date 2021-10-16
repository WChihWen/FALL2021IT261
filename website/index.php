<?php include 'includes/header.php';?> 
<main <?php echo $bc ?>>
    <div class="container">
      <header class="header">
            <img class="logo" src="images/<?php echo $logo ?>" alt="TV Show" /> 
         </header>
         <nav class="navigation">
            <ul>
                  <?=makeLinks($nav1)?>                    
            </ul>            
         </nav>
         <article class="content">
            <h1><?php echo $headline?></h1>   
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla massa lorem, mattis sed justo ut, tincidunt rutrum lorem. Fusce vitae odio erat. Fusce eget neque tempus nisl elementum fringilla nec sit amet nisi. Phasellus sit amet tristique ante. Aenean ac ligula id dolor hendrerit pretium vehicula eu mauris. Quisque venenatis ut quam quis mollis. Ut vulputate eget magna ut fermentum. Donec vitae suscipit tellus. Suspendisse vitae condimentum dolor. Curabitur quis consequat lectus. In hac habitasse platea dictumst. Praesent eget interdum nulla.</p> 
         </article>
         <aside class="links">                
            <br>
         </aside>
         <aside class="ads">
         <br>
         </aside>
    
<?php include 'includes/footer.php';?>
    
