
<?php include 'includes/header.php';?> 
<main <?php echo $bc ?>>
    <div class="container">
      <header class="header">
        <a href="index.php" ><img class="logo" src="images/<?php echo $logo ?>" alt="PHP Logo" /></a>
         </header>
         <nav class="navigation">
            <ul>
                  <?=makeLinks($nav1)?>                    
            </ul>            
         </nav>
         <article class="content">
            <h1><?php echo $headline?></h1>   
            <?php include 'includes/contact_form.php';?> 
         </article>

         <aside class="links" style="width:180px;">                
            <br>
         </aside>
         <aside class="ads">
            <?php include 'includes/aside_ads.php';?> 
         </aside>
    
<?php include 'includes/footer.php';?>