<?php include 'includes/header.php';?> 

<?php 
    if (isset($_GET["PID"])){
        $id =(int)$_GET["PID"];
    } else {
        header('Location: people.php');
    }
    $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
    $sql = 'select * from hero where hero_id ='.$id.'';
   
    $result = mysqli_query($iConn,$sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

    $feedback = "";
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $first_name = stripslashes($row['first_name']);
            $last_name = stripslashes($row['last_name']); 
            $birthdate = stripslashes($row['birthdate']);
            $saying = stripslashes($row['saying']);
            $hero = stripslashes($row['hero']);
            $description = stripslashes($row['description']);
            $image = stripslashes($row['imgs']);
        }
    } else{
       $feedback = 'Somthing is not working!!!';
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
        <article class="content">
            <h1><?php echo $headline?></h1>  
            <div class="center">
                <table style="width:600px;">                
                    <tr>
                        <td rowspan="6" style="width:120px;" ><? echo '<img class="heroImg1" src="images/'.$image.'.jpg" alt="'.$first_name.' '.$last_name.'">' ;?></td>
                        <th >
                            <b>NAME</b> 
                        </td>
                        <td  rowspan="6" style="width:120px;" ><? echo '<img class="heroImg1" src="images/'.$image.'_1.jpg" alt="'.$hero.'">'; ?></td>
                    </tr>
                    <tr>
                        <td><? echo $first_name.' '.$last_name ;?> </td>
                    </tr>
                    <tr>
                        <th><b>BIRTHDATE</b></th>
                    </tr>
                    <tr>
                        <td><? echo $birthdate ;?></td>
                    </tr>
                    <tr>
                        <th><b>HERO NAME</b></th>
                    </tr>
                    <tr>
                        <td><? echo $hero ;?></td>
                    </tr>
                    <tr>  
                        <th colspan="3" class="blurb"><? echo $saying ;?></th>   
                    </tr>
                    <tr>
                        <td colspan="3" style="background-color:white;"><? echo $description ;?></td>
                    </tr>
                </table>
            </div>
        </article>
        <aside class="links" style="width:180px;">                
            <br>
        </aside>
        <aside class="ads">
            <?php include 'includes/aside_ads.php';?> 
        </aside>
    
<?php include 'includes/footer.php';?>