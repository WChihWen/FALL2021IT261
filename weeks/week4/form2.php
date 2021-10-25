<?php
// our first form
//do not care about the html
//the form elements are important
// the form attributes and values are important
// use the global variable of $_POST
// the two items - the two import fields will be name and email


if(isset($_POST['fname'],$_POST['lname'], $_POST['email'], $_POST['comments'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

    if($_POST['fname'] == null && $_POST['lname'] == null && $_POST['email'] == null && $_POST['comments'] == null){
        echo 'Please fill out the fields!';
    }else{
        echo 'First Name: '.$fname;
        echo '<br>Last Name: '.$lname;
        echo '<br>Email: '.$email;
        echo '<br>Comments: '.$comments;
    }
}else {
    echo '<form action="" method="POST">
            <label>First Name</label>
            <input type="text" name="fname">

            <label>Last Name</label>
            <input type="text" name="lname">

            <label>Email</label>
            <input type="email" name="email">

            <label>COMMENTS</label>
            <textarea name="comments"></textarea>

            <input type="submit" value="Send it">
            </form> 
    ';
   
}



?>