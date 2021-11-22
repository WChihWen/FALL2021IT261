<?php include 'includes/header.php';?> 

<?php
$people['Tony_Stark'] = 'Tony_He is an actor of Iron Man.';
$people['Peter_Benjamin_Parker'] = 'Pete_He is an actor of Spider Man.';
$people['Scarlett_Johansson'] = 'Scar_She is an actress of Black Widow.';
$people['Steven_Rogers'] = 'Stev_He is an actor of Captain America.';
$people['Chris_Hemsworth'] = 'Chri_He is an actor of Thor.';
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
         <article class="content">
            <h1><?php echo $headline?></h1>   
            <table>            
                <tr>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Super Hero</th>
                </tr>
                <?php foreach ($people as $name => $image):   ?>
                    <tr>
                        <td><img class="heroImg" src="images/<?php echo substr($image, 0, 4); ?>.jpg" alt="<?php echo str_replace('_',' ',$name); ?>"></td>
                        <td><?php echo str_replace('_',' ',$name); ?></td>
                        <td><?php echo substr($image, 5); ?></td>
                        <td><img class="heroImg" src="images/<?php echo substr($image, 0, 4); ?>_1.jpg" alt="<?php echo str_replace('_',' ',$name); ?>"></td>
                    </tr>
                <?php endforeach; ?>
        </table>
        

         </article>

         <aside class="links" style="width:180px;">                
            <br>
         </aside>
         <aside class="ads">
            <?php include 'includes/aside_ads.php';?> 
         </aside>
    
<?php include 'includes/footer.php';?>