<?php 
include 'includes/header.php';
if (isset($_SESSION["USERNAME"]) == false or $_SESSION["USERNAME"] == NULL){     
  header("Location:login.php");  
}
?> 

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
            <img class="DBImg" src="images/db.png" alt="DB Image">
            <img class="DBImg" src="images/dt_videos.png" alt="dt_videos Image">
            <img class="DBImg" src="images/dt_member.png" alt="dt_member Image">
          </div>
         </article>
        
<?php include 'includes/footer.php';?>