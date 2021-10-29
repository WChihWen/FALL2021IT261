<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Our Calculator</title>
<link href="css/calculator.css?002" type="text/css" rel="stylesheet">
</head>

<body>
    
    
    <h1>Our Trip Calculator (calculator-days.php)</h1>
     
    
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post"> 
        <fieldset>
            <label>Your Name</label>
            <input type="text" name="name" >
            <label>How many miles will you be driving?</label>
            <input type="number" name="miles" >
            <label>How many hours per day would you like to be driving?</label>
            <input type="number" name="hours" >
            <label>Price Per Gallon</label>
            <ul>
                <li>
                    <input type="radio" name="price" value="3.00" >$3.00
                </li>
                <li>
                    <input type="radio" name="price" value="3.50" >$3.50
                </li>
                <li>
                    <input type="radio" name="price" value="4.00" >$4.00
                </li>                          
            </ul>
            <label>Fuel Efficiency</label>
            <select name="efficiency">
                <option value="NULL">Select Fuel Efficiency!</option>
                <option value="10">Terible</option>
                <option value="20">Getting Better</option>
                <option value="30">Good</option>
                <option value="40">Great</option>
            </select>
            <input type="submit" class ="btn" value="Convert it!"><a class="button" href="">Reset</a>         
        </fieldset>
    </form>

    <?php 
//$speed = 50; //    m/h

        if($_SERVER['REQUEST_METHOD'] =='POST'){ 
            $all_set = true;
            if($_POST['name'] == NULL){
                //echo '<span class="error">Please fill out your name!</span>';
                $all_set = false;
            }
            if($_POST['miles'] == NULL){
                //echo '<span class="error">Please fill out a valid distance!</span>';
                $all_set = false;
            }
            if($_POST['hours'] == NULL){
                //echo '<span class="error">Please fill out hours per day!</span>';
                $all_set = false;
            }
            if(empty($_POST['price'])){ 
                //echo '<span class="error">Please choose price per gallon!</span>';
                $all_set = false;
            } 
            if($_POST['efficiency'] == "NULL"){
                //echo '<span class="error">Please select fuel efficiency!</span>';
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
                <span class="error">Please fill out the form completely!</span>
                </div>  
                ';
            } 
        }
?>
    
        <br><br>
        <p>
            <a href="calculator.php" >calculator.php</a> ~
            <a href="calculator-days-errors.php" >calculator-days-errors.php</a> ~
            <a href="calculator-days-errors-sticky.php">calculator-days-errors-sticky.php</a>
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

