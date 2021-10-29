<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Our Currency 2 form with drop down - select options</title>
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
            <label for="bank">Choose your banking institution</label>
            <select name="bank">
                <option value="" NULL>Select one!</option>
                <option value="BOA">Bank of America</option>
                <option value="key">Key Bank </option>
                <option value="chase">Chase</option>
                <option value="BECU">Boeing Credit Union</option>
                <option value="mattress">Mattress</option>
            </select>
            <input type="submit" value="Convert it!">
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>

<?php
    if($_SERVER['REQUEST_METHOD'] =='POST'){ 
        $all_set = true;
        if($_POST['name'] == NULL){
            echo '<span class="error">Please fill out your name!</span>';
            $all_set = false;
        }
        if($_POST['email'] == NULL){
            echo '<span class="error">Please fill out your email!</span>';
            $all_set = false;
        }            
        if($_POST['amount'] == NULL){
            echo '<span class="error">Please fill out your amount!</span>';
            $all_set = false;
        }
        if(empty($_POST['currency'])){ 
            echo '<span class="error">Please choose your currency!</span>';
            $all_set = false;
        } 
        if($_POST['bank'] == NULL){
            echo '<span class="error">Please select your bank!</span>';
            $all_set = false;
        }        
    
        if ($all_set == true) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $amount = intval($_POST['amount']);
            $currency = $_POST['currency'];
            // converting
            $dollars = floor($amount * $currency);
            $bank = $_POST['bank'];            
         echo '
               <div class="box">
                    <h2>Hello, '.$name.'</h2>
                   <p>You now have $'.$dollars.' American dollars, and it will be deposited in <b>'.$bank.'</b> and we will be sending you an email at:<b>'.$email.' in the next 24 hours!</b></p>
               </div>  
            ';     
        }    
    }
     

?>



</body>
</html>