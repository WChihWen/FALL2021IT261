<?php 

    include('config.php');


    if (isset($_GET["id"])){
        $id =(int)$_GET["id"];
    } else {
        header('Location: people.php');
    }
    $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
    $sql = 'select * from people where people_id ='.$id.'';
   
    $result = mysqli_query($iConn,$sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $first_name = stripslashes($row['first_name']);
            $last_name = stripslashes($row['last_name']);
            $email = stripslashes($row['email']);
            $oppcupation = stripslashes($row['oppcupation']);
            $birthdate = stripslashes($row['birthdate']);
            $description = stripslashes($row['description']);
           
        }
    } else{
       $feedback = 'Somthing is not working!!!';
    }
?>


<h2>Welcome to <?php echo $first_name; ?>'s page!</h2>

<?php 
    if($feedback ==''){
        echo '<ul>';
        echo '<li><b>First Name:</b>'.$first_name.'</li>';
        echo '<li><b>Last Name:</b>'.$last_name.'</li>';
        echo '<li><b>Email:</b>'.$email.'</li>';
        echo '<li><b>Birthdate:</b>'.$birthdate.'</li>';
        echo '<li><b>Oppcupation:</b>'.$oppcupation.'</li>';    
        echo '</ul>';
        echo '<p>'.$description.'</p>';

        echo '<p>Return back to the <a href="people.php">people page!</a></p>';

        mysqli_free_result($result);
         mysqli_close($iConn);
    }

?>