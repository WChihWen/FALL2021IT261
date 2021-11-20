<?php

    include('config.php');

    $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
    
    $sql ='select * from people';
    $result = mysqli_query($iConn,$sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo '<p>For more information about '.$row['first_name'].', please click <a href="people-view.php?id='.$row['people_id'].'">here</a>!</p>';
            echo '<ul>';
            echo '<li>'.$row['first_name'].'</li>';
            echo '<li>'.$row['last_name'].'</li>';
            echo '<li>'.$row['email'].'</li>';
            echo '</ul>';
        }
    } else{
        echo 'Houston, we have a problem!';
    }

    
    mysqli_free_result($result);
    mysqli_close($iConn);

?>