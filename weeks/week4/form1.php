<?php
// our first form
//do not care about the html
//the form elements are important
// the form attributes and values are important
// use the global variable of $_POST
// the two items - the two import fields will be name and email


if(isset($_POST['name'], $_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    if($_POST['name'] == null && $_POST['email'] == null){
        echo 'Please fill out the fields!';
    }else{
        echo 'Name: '.$name;
        echo '<br>Email: '.$email;
    }
}else {
    echo '<form action="" method="POST">
            <label>Name</label>
            <input type="text" name="name">

            <label>Email</label>
            <input type="email" name="email">

            <input type="submit" value="Send it">
            </form> 
    ';
   
}



?>