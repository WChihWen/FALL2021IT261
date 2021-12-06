<?php

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


            $to = $email;
            //$to = 'szemeo@mystudentswa.com';
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
            // // $headers = array(
            // //     'From' => 'noreply@mystudentswa.com',
            // //     'Reply-to' => ''.$email.''
            // // );

            // //$headers = "MIME-Version: 1.0" . "\r\n";
            // //$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            // // More headers
            // $headers = 'From: <noreply@mystudentswa.com>' . "\r\n";
            // $headers .= 'Cc: '.$email. "\r\n";
            // $headers .= 'Reply-to: '.$email. "\r\n";

            
            // $success = mail($to, $subject, $body, $headers);
            // if($success){
            //     //$host = $_SERVER['HTTP_HOST'];
            //     //$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            //     $extra = 'index.php';
            //     //header("Location:https://$host$uri/$extra");     
            //     //header( "refresh:5;url=$extra");
            //     //echo '<span>You\'ll be redirected in about 5 secs. If not, click <a href="'.$extra.'">here</a>.</span>';
            //     echo '
            //     <br><br><br><br>  
            //     Hello, <b>' .$first_name. '</b> <br>
            //     Thanks for contacting us.
            //     This email was sent to <b>'.$to.'</b> successfully! <br><br> 
            //     Click <a href="'.$extra.'">here,</a> to go to home page.
            //     <br><br><br><br><br><br>    
                
            //     ';
            //     exit;
            //}   

            //SendGrid
            $url = 'https://api.sendgrid.com/';
            $user = SENDGRID;
            $pass = SENDGRIDPWD;

            print_r('User: '.$user.'<br> pass:'.$pass );

            // $json_string = array(
            //     'to' => array(
            //         'example1@sendgrid.com'
            //     ),
            //     'category' => 'test_category'
            // );
            // $json_string = array(
            //     'to' => array(
            //         $to
            //     )               
            // );


            // $params = array(
            //     'api_user'  => $user,
            //     'api_key'   => $pass,
            //     'x-smtpapi' => json_encode($json_string),
            //     'to'        => $email,
            //     'subject'   => $subject ,                
            //     'text'      => $body,
            //     'from'      => 'noreply@mystudentswa.com',
            // );


            // $request =  $url.'api/mail.send.json';

            // // Generate curl request
            // $session = curl_init($request);
            // // Tell curl to use HTTP POST
            // curl_setopt ($session, CURLOPT_POST, true);
            // // Tell curl that this is the body of the POST
            // curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
            // // Tell curl not to return headers, but do return the response
            // curl_setopt($session, CURLOPT_HEADER, false);
            // // Tell PHP not to use SSLv3 (instead opting for TLS)
            // curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
            // curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

            // // obtain response
            // $response = curl_exec($session);
            // curl_close($session);

            // // print everything out
            // print_r($response);
            
            // exit;
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