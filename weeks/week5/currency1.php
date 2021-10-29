<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Basic Currency Form</title>
<link href="css/styles.css?006" type="text/css" rel="stylesheet">
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post"> 
        <fieldset>
            <label for="name">Name</label>
            <input type="text" name="name">
            <label for="email">Email</label>
            <input type="email" name="email">
            <label for="amount">How much money do you have?</label>
            <input type="number" name="amount">
            <label for="currency">Choose your currency</label>
            <ul>
                <li>
                    <input type="radio" name="currency" value="0.013" >Rubles
                </li>
                <li>
                    <input type="radio" name="currency" value="0.76">Canadian
                </li>
                <li>
                    <input type="radio" name="currency" value="1.28">Pounds
                </li>
                <li>
                    <input type="radio" name="currency" value="1.18">Euros
                </li>
                <li>
                    <input type="radio" name="currency" value="0.0094">Yen
                </li>                
            </ul>
            <input type="submit" value="Convert it!">
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>

<?php
    if($_SERVER['REQUEST_METHOD'] =='POST'){
        if (isset($_POST['name'],$_POST['email'], $_POST['amount'], $_POST['currency'])) {
            if( $_POST['name'] == NULL || $_POST['email'] == NULL || $_POST['amount'] == NULL || $_POST['currency'] == NULL){
                echo '<div class="box">Please fill out the input fields!</div>';
            }else{
                $name = $_POST['name'];
                $email = $_POST['email'];
                $amount = intval($_POST['amount']);
                $currency = $_POST['currency'];
                // converting
                $dollars = floor($amount * $currency);
    
                echo '
                    <div class="box">
                        <h2>Hello, '.$name.'</h2>
                        <p>You now have $'.$dollars.' American dollars, and we will be sending you an email at:<b>'.$email.'</b></p>
                    </div>  
                ';
            } 
        }else{
            echo '<div class="box">Please fill out the input fields!</div>';
        }    
    }
     

?>



</body>
</html>