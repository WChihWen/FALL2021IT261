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
            <?php   
                $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
                        
                $sql ='select * from hero';
                $result = mysqli_query($iConn,$sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

                if(mysqli_num_rows($result) > 0){
                    echo '<div class="center">';                  
                    $i = 0;               
                    while($row = mysqli_fetch_assoc($result)){  
                        echo '<table >';
                        echo '<tr><td '.$bc.'>';              
                        echo '<a href="people-view.php?PID='.$row['hero_id'].'"><img class="heroImg1" src="images/'.$row['imgs'].'_1.jpg" alt="'.$row['first_name'].'"></a>';  
                        echo '</td></tr>';     
                        echo '<tr><td><a href="people-view.php?PID='.$row['hero_id'].'">'.$row['hero'].'</a></td></tr>';
                        echo '</table>';
                    }
       
                    echo '</div>';
                } else{
                    echo 'Houston, we have a problem!';                    
                }

                mysqli_free_result($result);
                mysqli_close($iConn);

            ?> 
        </article>

        <aside class="links" style="width:180px;">                
            <br>
        </aside>
        <aside class="ads">
            <?php include 'includes/aside_ads.php';?> 
        </aside>
    
<?php include 'includes/footer.php';?>