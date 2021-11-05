<?php

    $first_name = '';
    $last_name = '';
    $gender = '';
    $email = '';
    $phone = '';
    $wines[] = '';
    $regions = '';
    $comments = '';
    $privacy = '';

    $first_name_Err ='';
    $last_name_Err ='';
    $gender_Err = '';
    $email_Err = '';
    $phone_Err ='';
    $wines_Err = '';
    $regions_Err = '';
    $comments_Err = '';
    $privacy_Err = '';

    $my_regions = array(
        'nw'=>'Northwest',
        'sw'=>'Southwest',
        'mw'=>'Midwest',
        'ne'=>'Northeast',
        'se'=>'Southeast',
        'no'=>'North',
        'so'=>'South'
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


        if( empty($_POST['gender'])){
            $gender_Err = 'Please check your gender';   
            $all_set = false; 
        }else {
            $gender = $_POST['gender'];
        }
        function my_wines($_wines){
            return implode(', ', $_wines);
        }
        if( empty($_POST['wines'])){
            $wines_Err = 'Please choose your wines';   
            $all_set = false; 
        }else {
            $wines = $_POST['wines'];
        }

        

        if($_POST['regions'] == "NULL"){
            $regions_Err = 'Please select your regions';  
            $all_set = false;  
        }else{
            $regions = $_POST['regions'];
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
            $from ='';
            $subject = 'Test Email, '.date('Y-m-d') ;
            $body ='
                The first name is: '. $first_name .' '.PHP_EOL.'
                The last name is: '. $last_name .' '.PHP_EOL.'
                Gender: '. $gender .' '.PHP_EOL.'
                Email: '.$email.' '.PHP_EOL.'
                Phone: '.$phone.' '.PHP_EOL.'
                Region: '. $my_regions[$regions] .' '.PHP_EOL.'
                wines: '.my_wines($wines).' '.PHP_EOL.'                
                Comments: '. $comments .' '.PHP_EOL.'
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
                    header('Location:thx.php?firstname='.$first_name.'&&to='.$to.'');

            }   
        }
    }

?>


<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Emailable form Number 1</title>
<link href="css/styles.css?001" type="text/css" rel="stylesheet">
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <fieldset>
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" value="<?php echo $first_name; ?>">
            <span class="error"><?php echo $first_name_Err;?></span>

            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" value="<?php echo $last_name; ?>">
            <span class="error"><?php echo $last_name_Err;?></span>

            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
            <span class="error"><?php echo $email_Err;?></span>

            <label for="phone">Phone</label>
            <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php echo $phone; ?>">
            <span class="error"><?php echo $phone_Err;?></span>

            <label for="gender">Gender</label>
            <ul>
                <li>               
                    <input type="radio" name="gender" value="female"  <?php if( $gender=='female' ) echo 'checked="checked"'; ?>>Female
                </li>
                <li>               
                    <input type="radio" name="gender" value="male" <?php if( $gender=='male' ) echo 'checked="checked"'; ?>>Male
                </li>
                <li>               
                    <input type="radio" name="gender" value="other" <?php if( $gender=='other' ) echo 'checked="checked"'; ?>>Other
                </li>
            </ul>
            <span class="error"><?php echo $gender_Err;?></span>

            <label for="wines">Favorite Wines</label>
            <ul>
                <li>
                    <input type="checkbox" name="wines[]"  value="cab" <?php if( in_array('cab', $wines)) echo 'checked="checked"'; ?>>Cabernet
                </li>
                <li>
                    <input type="checkbox" name="wines[]"  value="merlot"  <?php if( in_array('merlot', $wines)) echo 'checked="checked"'; ?>>Merlot
                </li>
                <li>
                    <input type="checkbox" name="wines[]"  value="syrah"  <?php if( in_array('syrah', $wines)) echo 'checked="checked"'; ?>>Syrah
                </li>
                <li>
                    <input type="checkbox" name="wines[]"  value="malbec"  <?php if( in_array('malbec', $wines)) echo 'checked="checked"'; ?>>Malbec
                </li>
                <li>
                    <input type="checkbox" name="wines[]"  value="blend"  <?php if( in_array('blend', $wines)) echo 'checked="checked"'; ?>>Red Blend
                </li>
            </ul>
            <span class="error"><?php echo $wines_Err;?></span>

            <label for="regions">Regions</label>
            <select name="regions">
                <option value="NULL" <?php if($regions == "NULL" ) echo 'selected="unselected"'; ?>>Select One</option>
                <option value="nw" <?php if($regions == "nw" ) echo 'selected="unselected"'; ?>>Northwest</option>
                <option value="sw" <?php if($regions == "sw" ) echo 'selected="unselected"'; ?>>Southwest</option>
                <option value="mw" <?php if($regions == "mw" ) echo 'selected="unselected"'; ?>>Midwest</option>
                <option value="ne" <?php if($regions == "ne" ) echo 'selected="unselected"'; ?>>Northeast</option>
                <option value="se" <?php if($regions == "se" ) echo 'selected="unselected"'; ?>>Southeast</option>
                <option value="no" <?php if($regions == "no" ) echo 'selected="unselected"'; ?>>North</option>
                <option value="so" <?php if($regions == "so" ) echo 'selected="unselected"'; ?>>South</option>                
            </select>
            <span class="error"><?php echo $regions_Err;?></span>

            <label for="comments">Comments</label>
            <textarea name="comments" ><?php echo $comments; ?></textarea>
            <span class="error"><?php echo $comments_Err;?></span>

            <label for="privacy">Privacy</label>
            <ul>
                <li>               
                    <input type="radio" name="privacy" value="agree" <?php if( $privacy=='agree' ) echo 'checked="checked"'; ?>>I agree!
                </li>             
            </ul>
            <span class="error"><?php echo $privacy_Err;?></span>

            <input type="submit" class="btn" value="Send it">
            <p><a href="" class="button">Reset</a></p>
        </fieldset>
    </form>
</body>
</html>