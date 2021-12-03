<?php include 'includes/header.php';?> 


<?php
$account = '';
$pwd = '';

$account_Err ='';
$pwd_Err = '';
$login_Err =''; 
$all_set = true;

if($_SERVER['REQUEST_METHOD'] == "POST"){  

   if($_POST['account'] == NULL){
      $account_Err = 'Please enter your account';   
      $all_set = false; 
   }else {           
      $account = $_POST['account'];
   }

   if($_POST['pwd'] == NULL){
      $pwd_Err = 'Please enter your password';   
      $all_set = false; 
   }else {          
      $pwd = $_POST['pwd'];                
   }

   if($all_set == true){
      // create new member

      $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
                     
      $sql ="select * from members where username='".$account."' and passwd='".$pwd."'";
      $result = mysqli_query($iConn,$sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

      if(mysqli_num_rows($result) > 0){   
         $row = mysqli_fetch_assoc($result);   
         session_start();
         $_SESSION["USERNAME"] = $account; //$row['username'];    
         $_SESSION["FIRSTNAME"] =  $row['first_name'];
         mysqli_free_result($result);
         mysqli_close($iConn);
         header("Location:index.php?type=login");     
      } else{
         // insert new account
         $login_Err ='Username or Password error.';

         mysqli_free_result($result);
         mysqli_close($iConn);
      }
   }
}
?>

<h1>Login</h1>            
<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
   <fieldset>
      <label>Login Account</label>
      <input type="text" name="account"  value="<?php echo $account; ?>">
      <span class="error"><?php echo $account_Err;?></span>
      
      <label>Login Password</label>
      <input type="password" name="pwd"  value="<?php echo $pwd; ?>">
      <span class="error"><?php echo $pwd_Err;?></span>                 
      <span class="error"><?php echo $login_Err;?></span>     
      <div class="center">
      <input type="submit" class="btn" value="Sign in">
      <a href="" class="button">Reset</a>
      </div>               
   </fieldset>
</form>
<div class="center">
<p>Not yet a member?   <a href="members.php">Sign up</a>.</p>
</div>
<br><br><br>
      

    
<?php include 'includes/footer.php';?>