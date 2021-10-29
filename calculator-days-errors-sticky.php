<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Our Calculator</title>
<link href="css/calculator.css?002" type="text/css" rel="stylesheet">
</head>

<body>
    
    
    <h1>Our Trip Calculator (calculator-days-errors-sticky.php)</h1>
     
    
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post"> 
        <fieldset>
            <label >Your Name</label>
            <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">
            <label >How many miles will you be driving?</label>
            <input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']); ?>">
            <label >How many hours per day would you like to be driving?</label>
            <input type="number" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']); ?>">
            <label >Price Per Gallon</label>
            <ul>
                <li>
                    <input type="radio" name="price" value="3.00"  <?php if(isset($_POST['price']) && $_POST['price'] =='3.00' ) echo 'checked="checked"'; ?>>$3.00
                </li>
                <li>
                    <input type="radio" name="price" value="3.50" <?php if(isset($_POST['price']) && $_POST['price'] =='3.50' ) echo 'checked="checked"'; ?>>$3.50
                </li>
                <li>
                    <input type="radio" name="price" value="4.00" <?php if(isset($_POST['price']) && $_POST['price'] =='4.00' ) echo 'checked="checked"'; ?>>$4.00
                </li>                          
            </ul>
            <label >Fuel Efficiency</label>
            <select name="efficiency">
                <option value="NULL" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == NULL ) echo 'selected="unselected"'; ?> >Select Fuel Efficiency!</option>
                <option value="10" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == "10" ) echo 'selected="selected"'; ?> >Terible</option>
                <option value="20" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == "20" ) echo 'selected="selected"'; ?> >Getting Better</option>
                <option value="30" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == "30" ) echo 'selected="selected"'; ?> >Good</option>
                <option value="40" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == "40" ) echo 'selected="selected"'; ?> >Great</option>
            </select>
            <input type="submit" class ="btn" value="Convert it!"><a class="button" href="">Reset</a>    
        </fieldset>
    </form>

    <?php 
//$speed = 50; //    m/h

        if($_SERVER['REQUEST_METHOD'] =='POST'){ 
            $all_set = true;
            $err = '';
            if($_POST['name'] == NULL){
                $err = $err.'<span class="error">Please fill out your name!</span>';
                $all_set = false;
            }
            if($_POST['miles'] == NULL){
                $err = $err.'<span class="error">Please fill out a valid distance!</span>';
                $all_set = false;
            }
            if($_POST['hours'] == NULL){
                $err = $err.'<span class="error">Please fill out hours per day!</span>';
                $all_set = false;
            }
            if(empty($_POST['price'])){ 
                $err = $err.'<span class="error">Please choose price per gallon!</span>';
                $all_set = false;
            } 
            if($_POST['efficiency'] == "NULL"){
                $err = $err.'<span class="error">Please select fuel efficiency!</span>';
                $all_set = false;
            }        

            if ($all_set == true) {   
                $name = $_POST['name'];        
                $miles = intval($_POST['miles']);
                $price = $_POST['price'];   
                $hours = intval($_POST['hours']);   
                $efficiency = $_POST['efficiency'];    
                $total = number_format( ($miles / $efficiency) * $price, 2);
                $speed = 50;

                $total_hours = $miles / $speed;
                $total_day = $total_hours / $hours;

            echo '
                <div class="box">
                    <h2>Calculator Results</h2>
                    <b>'.$name.'</b>, You have driven <b>'.$miles.'</b> miles </br>
                    Your vehicle has an efficiency rating of <b>'.$efficiency.'</b> miles per gallon <br>
                    Your total cost for gas will be $ <b>'.$total.'</b> dollars <br>
                    You will be driving a total of <b>'.$total_hours.'</b> hours equating to <b>'.$total_day.'</b> days
                </div>  
                ';
            }else{
                echo '
                <div class="box">
                <h2>ERROR</h2>
                '.$err.'
                </div>  
                ';
            } 
        }
?>
    
        <br><br>
        <p>
            <a href="calculator.php" >calculator.php</a> ~
            <a href="calculator-days.php" >calculator-days.php</a> ~
            <a href="calculator-days-errors.php">calculator-days-errors.php</a>
        <p>
        
        <footer>
      <p>
        <small>          
          <a href="https://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ 
          <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
        </small>
      </p>
    </footer>


</body>
</html>

