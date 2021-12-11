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
         <article class="content" >  

         </article>
         <aside class="links">     
         </aside>
         <aside class="ads">            
         </aside>
    
<?php include 'includes/footer.php';?>
    
