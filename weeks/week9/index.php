<?php include 'includes/header.php';?> 

<?php 
   
    if (isset($_GET["USERNAME"])){
        $USERNAME = $_GET["USERNAME"];
    }else{    
        if (isset($_SESSION["USERNAME"])){
            $USERNAME = $_SESSION["USERNAME"];
        }else{
            $USERNAME = NULL;
        }        
    }
 
    if ($USERNAME == NULL || $USERNAME == ""){
        header('Location: login.php');        
    } else {
        $type =$_GET["type"];
        $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
        $sql = "select * from members where username ='".$USERNAME."'";
      
        $result = mysqli_query($iConn,$sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
        
        if(mysqli_num_rows($result) > 0){            
            $row = mysqli_fetch_assoc($result);
            $str = '<ul class="ulnone">';
            $str .= '<li><b>First Name:</b> '.$row['first_name'].'</li>';
            $str .= '<li><b>Last Name:</b> '.$row['last_name'].'</li>';
            $str .= '<li><b>Email:</b> '.$row['email'].'</li>';
            $str .= '<li><b>Lgoin Account:</b> '.$row['username'].'</li>';         
            $str .= '</ul>'; 
            $welcome ='';
            switch($type){            
                case 'login':
                case 'logoutcancel':
                    $welcome = '        
                        <p>Hi <b>'.$row['first_name'].'</b>, you have signed in.<br>
                        If you like to sign out, please go to the <a href="logout.php">Logout page</a>.</p>';
                    break;

                case 'new':
                
                    $welcome = '
                        <p>Hi <b>'.$row['first_name'].'</b>, you have become a new member on this website.<br> 
                        Please go to the <a href="login.php">Login page</a> to sign in.</p>';
                    break;
                default:
                    mysqli_free_result($result);
                    mysqli_close($iConn);
                    header('Location: index.php');
                    break;
            }
            
        } else{
            $str ='['.$USERNAME.'] is not a member!';
        }
        mysqli_free_result($result);
        mysqli_close($iConn);
    }
   
?>


<h1>Home Page</h1>
<br><br>
<div class="center">  
    <?php echo $str ;?>   
</div>
<br><br><br>
<div  class="center">
    <p><?php echo $welcome ;?></p>
</div>
<br><br><br>
    
<?php include 'includes/footer.php';?>