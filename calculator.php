<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Our Calculator</title>
<link href="css/calculator.css?002" type="text/css" rel="stylesheet">
</head>

<body> 
    <h1>Our Calculator (calculator.php)</h1>  
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post"> 
        <fieldset>
            <label>How Many miles will you be driving?</label>
            <input type="number" name="miles" >
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
            <label >Fuel Efficiency</label>
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
            if($_POST['miles'] == NULL){
                echo '<span class="error">Please fill out a valid distance!</span>';
                $all_set = false;
            }
        
            if(empty($_POST['price'])){ 
                echo '<span class="error">Please choose price per gallon!</span>';
                $all_set = false;
            } 
            if($_POST['efficiency'] == "NULL"){
                echo '<span class="error">Please select fuel efficiency!</span>';
                $all_set = false;
            }        

            if ($all_set == true) {            
                $miles = intval($_POST['miles']);
                $price = $_POST['price'];   
                $efficiency = $_POST['efficiency'];    
                $total = number_format( ($miles / $efficiency) * $price, 2);
            echo '
                <div class="box">
                    <h2>Calculator Results</h2>
                    You have driven '.$miles.' miles </br>
                    Your vehicle has an efficiency rating of '.$efficiency.' miles per gallon <br>
                    Your total cost for gas will be $ '.$total.' dollars 
                </div>  
                ';
            }    
        }
?>
    
        <br><br>
        <p>
            <a href="calculator-days.php">calculator-days.php</a> ~
            <a href="calculator-days-errors.php" >calculator-days-errors.php</a> ~
            <a href="calculator-days-errors-sticky.php" >calculator-days-errors-sticky.php</a>
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

