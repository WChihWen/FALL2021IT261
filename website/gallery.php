<?php include 'includes/header.php';?> 

<?php
$people['Robert_Downey_Jr'] = 'Robe_Anthony Edward "Tony" Stark was a billionaire industrialist, a founding member of the Avengers, and the former CEO of Stark Industries. A brash but brilliant inventor, Stark was self-described as a genius, billionaire, playboy, and philanthropist.';
$people['Tom_Holland'] = 'Pete_Peter Benjamin Parker is a high school student who gained spider-like abilities, fighting crime across New York City as the alter ego Spider-Man, hoping someday, he will live up to his heroes in the Avengers.';
$people['Scarlett_Johansson'] = 'Scar_Natalia Alianovna "Natasha" Romanoff also known as Black Widow, was one of the most talented spies and assassins in the entire world and a founding member of the Avengers.';
$people['Chris_Evans'] = 'Stev_Captain Steven Grant "Steve" Rogers is a World War II veteran, a founding member of the Avengers, and Earth\'s first known superhero.';
$people['Chris_Hemsworth'] = 'Chri_hristopher "Chris" Hemsworth portrayed Thor in Thor, The Avengers, Thor: The Dark World, Avengers: Age of Ultron, Doctor Strange, Thor: Ragnarok, Avengers: Infinity War, Avengers: Endgame and Thor: Love and Thunder. He also portrayed an alternate Thor in Avengers: Endgame.';
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