
<?php 

   include 'includes/header.php';

   if (isset($_SESSION["USERNAME"]) == false or $_SESSION["USERNAME"] == NULL){     
      header("Location:login.php");  
   }

   $first_name = '';
   $last_name = '';   
   $email = '';
   $phone = '';
   $langs[] = '';
   $browser = '';
   $comments = '';
   $privacy = '';

   $first_name_Err ='';
   $last_name_Err ='';
   $email_Err = '';
   $phone_Err ='';
   $langs_Err = '';
   $browser_Err = '';
   $comments_Err = '';
   $privacy_Err = '';    

   $my_langs = array(
      'php'=>'PHP',
      'js'=>'Javascript',
      'csh'=>'C#',
      'py'=>'Python',
      'java'=>'Java',
      'cpl'=>'C++',
      'c'=>'C'
   );
   $my_browser = array(
      'NULL'=>'Select One',
      'MF'=>'Mozilla Firefox',
      'IE'=>'Internet Explorer',
      'ME'=>'Microsoft Edge',
      'GC'=>'Google Chrome',
      'opera'=>'Opera',
      'safari'=>'Safari'
   );
   $all_set = true;
   if($_SERVER['REQUEST_METHOD'] == "POST"){
      if($_POST['first_name'] == NULL){
         $first_name_Err = 'Please fill out your first name';  
         $all_set = false; 
      }else {
         $first_name = $_POST['first_name'];
      }

      if($_POST['last_name'] == NULL){
         $last_name_Err = 'Please fill out your last name';   
         $all_set = false; 
      }else {
         $last_name = $_POST['last_name'];
      }

      if($_POST['email'] == NULL){
         $email_Err = 'Please enter your email';   
         $all_set = false; 
      }else {
         $email = $_POST['email'];
      }

      if($_POST['phone'] == NULL){
         $phone_Err = 'Please enter your phone';   
         $all_set = false; 
      }else {
         $phone = $_POST['phone'];
         if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])){ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
               $phone_Err = 'Invalid format!';
               $all_set = false;
         }           
      }


      function my_langs($_my_langs,$_langs){
         $str='';
         foreach($_langs as $key ){                 
               $str .=''.$_my_langs[$key].', ';
         }  
         if($str != ''){
               $str = substr($str,0, strlen($str) - 2);
         }
         return $str;
      }
      if( empty($_POST['langs'])){
         $langs_Err = 'Please choose your computer languages';   
         $all_set = false; 
      }else {
         $langs = $_POST['langs'];
      }

      if($_POST['browser'] == "NULL"){
         $browser_Err = 'Please select your browser';  
         $all_set = false;  
      }else{
         $browser = $_POST['browser'];
      }  

      if($_POST['comments'] == NULL){
         $comments_Err = 'Please fill out your comments';   
         $all_set = false; 
      }else {
         $comments = $_POST['comments'];
      }

      if( empty($_POST['privacy'])){
         $privacy_Err = 'You MUST Agree'; 
         $all_set = false;   
      }else {
         $privacy = $_POST['privacy'];
      }




      if($all_set == true){
         //send an email
         //Always set content-type when sending HTML email
         //$headers = "MIME-Version: 1.0" . "\r\n";
         //$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

         // More headers
         //$headers .= 'From: <webmaster@example.com>' . "\r\n";
         //$headers .= 'Cc: myboss@example.com' . "\r\n";


         //$to = $email;
         $to = 'szemeo@mystudentswa.com';
         // $from ='';
         $subject = 'Emailable Form from Chih Wen\'s website, '.date('Y-m-d') ;   

         $body ='
               The first name is: '. $first_name .' '.PHP_EOL.'
               The last name is: '. $last_name .' '.PHP_EOL.'
               Email: '.$email.' '.PHP_EOL.'
               Phone: '.$phone.' '.PHP_EOL.'
               Computer Languages: '.my_langs($my_langs,$langs).' '.PHP_EOL.'       
               Browser: '. $my_browser[$browser] .' '.PHP_EOL.'                         
               Comments: '.$comments .' '.PHP_EOL.'      
         ';
         // $headers = array(
         //     'From' => 'noreply@mystudentswa.com',
         //     'Reply-to' => ''.$email.''
         // );

         //$headers = "MIME-Version: 1.0" . "\r\n";
         //$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
         // More headers
         $headers = 'From: <noreply@mystudentswa.com>' . "\r\n";
         $headers .= 'Cc: '.$email. "\r\n";
         $headers .= 'Reply-to: '.$email. "\r\n";

         
         $success = mail($to, $subject, $body, $headers);
         if($success){
               //$host = $_SERVER['HTTP_HOST'];
               //$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
               $extra = 'index.php';
               //header("Location:https://$host$uri/$extra");     
               //header( "refresh:5;url=$extra");
               //echo '<span>You\'ll be redirected in about 5 secs. If not, click <a href="'.$extra.'">here</a>.</span>';
               echo '
               <br><br><br><br>  
               Hello, <b>' .$first_name. '</b> <br>
               Thanks for contacting us.
               This email was sent to <b>'.$to.'</b> successfully! <br><br> 
               Click <a href="'.$extra.'">here,</a> to go to home page.
               <br><br><br><br><br><br>    
               
               ';
               exit;
         }   
      }
   }


   function GetSelectOptions($_my_browser,$_browser){
      $options= "";    
      foreach($_my_browser as $key => $text){  
         $options .=' <option value="'.$key.'"  ';     
         if($key == $_browser){
               $options .= ' selected="unselected"';
         }
         $options .=' >'.$text.'</option>';
      }  
      return $options;
      
   }    

   function GetCheckboxItems($_my_langs, $_langs){ 
      $options= "";    
      foreach($_my_langs as $key => $text){  
         $options .='<li><input type="checkbox" name="langs[]"  value="'.$key.'"';     
         if(in_array($key, $_langs)){
               $options .= ' checked="checked"';
         }
         $options .=' >'.$text.'</li>';
      }  
      return $options;
   }


  

//header("Location: http://$host$uri/$extra");   
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
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
               <fieldset>
                  <label >First Name</label>
                  <input type="text" name="first_name" value="<?php echo $first_name; ?>">
                  <span class="error"><?php echo $first_name_Err;?></span>

                  <label>Last Name</label>
                  <input type="text" name="last_name" value="<?php echo $last_name; ?>">
                  <span class="error"><?php echo $last_name_Err;?></span>

                  <label>Email</label>
                  <input type="email" name="email" value="<?php echo $email; ?>">
                  <span class="error"><?php echo $email_Err;?></span>

                  <label>Phone</label>
                  <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php echo $phone; ?>">
                  <span class="error"><?php echo $phone_Err;?></span>

                  <label>Which computer languages you learnd</label>
                  <ul>
                        <?=GetCheckboxItems($my_langs,$langs)?>
                  </ul>
                  <span class="error"><?php echo $langs_Err;?></span>

                  <label >Your browser</label>
                  <select name="browser">           
                        <?=GetSelectOptions($my_browser,$browser)?>          
                  </select>
                  <span class="error"><?php echo $browser_Err;?></span>

                  <label>Comments</label>
                  <textarea name="comments" ><?php echo $comments; ?></textarea>
                  <span class="error"><?php echo $comments_Err;?></span>

                  <label >Privacy</label>
                  <ul>
                        <li>               
                           <input type="radio" name="privacy" value="agree" <?php if( $privacy=='agree' ) echo 'checked="checked"'; ?>>I agree!
                        </li>             
                  </ul>
                  <span class="error"><?php echo $privacy_Err;?></span>
                  <div class="center">
                  <input type="submit" class="btn" value="Send it">
                  <a href="" class="button">Reset</a>
                  </div>
               </fieldset>
            </form>
         </article>

         <aside class="links" style="width:180px;">                
            <br>
         </aside>
         <aside class="ads"  style="width:180px;">
            <br>
         </aside>
    
<?php include 'includes/footer.php';?>