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
         <article >
            <h1><?php echo $headline?></h1>   
           <div class="center">
           <img class="DBImg" src="images/dbheros.png" alt="DB Image">
           </idv>
            
          
         </article>

        
    
<?php include 'includes/footer.php';?>