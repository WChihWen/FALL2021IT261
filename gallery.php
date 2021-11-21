<?php include 'includes/header.php';?> 

<section>  
<?php   
    $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
            
    $sql ='select * from hero';
    $result = mysqli_query($iConn,$sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

    if(mysqli_num_rows($result) > 0){
        echo '<table>';
        echo '<tr>';
        echo '<th>Photo</th>';
        echo '<th>Name</th>';
        echo '<th>Description</th>';
        echo '<th>Super Hero</th>';
        echo '</tr>';
        while($row = mysqli_fetch_assoc($result)){
            echo '<tr>';            
            echo '<td><img src="images/'.$row['imgs'].'.jpg" alt="'.$row['first_name'].'"></td>';
            echo '<td>'.$row['first_name'].' '.$row['last_name'].'</td>';
            echo '<td>'.$row['description'].'</td>';
            echo '<td><img src="images/'.$row['imgs'].'_1.jpg" alt="'.$row['first_name'].'"></td>';
            echo '</tr>';
        }
        echo '</table>';
    } else{
        echo 'Houston, we have a problem!';
    }

    mysqli_free_result($result);
    mysqli_close($iConn);

 ?> 
</section>
<aside>
<?php include 'includes/aside.php';?>
</aside>
   
<?php include 'includes/footer.php';?>