
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Adder Assignment</title>
<style>
    * {
    padding:0;
    margin:0;
    box-sizing:border-box;
    }

    form{
        width:400px;
        margin:0 auto;
    }

    fieldset{
        border:1px solid red;
        padding: 12px;
    }
    h1 {
        text-align: center;
        color:red;
        font-style: italic;
    }
    h2,p{        
        text-align: center;
        }
    h3{
        color:red;
        text-align: center;
        }
</style>
</head>

<body>
    <h1>Adder.php</h1> 
    <form action="" method="post"> 
        <fieldset>
            <label>Enter the first number:</label>
            <input type="number" name="num1"><br>
            <label>Enter the second number:</label>
            <input type="number" name="num2"><br>
            <input type="submit" value="Add Em!!"> 
        </fieldset>
    </form>

<!--here are my errors--> <!--here are my errors--><!--here are my errors--><!--here are my errors--><!--here are my errors--><!--here are my errors-->

<?php
//adder-wrong.php
if (isset($_POST['num1'],$_POST['num2'])){    
    if($_POST['num1'] == null || $_POST['num2'] == null ){
        echo '<h3>Please fill out the input fields!</h3>';
    }else{
        $num1 = intval($_POST['num1']);
        $num2 = intval($_POST['num2']);  
        $myTotal = $num1 + $num2;
        echo '<h2>You added '. $num1 .' and '.$num2. '<h2>';
        echo '<p> and the answer is </p>';
        echo '<h3>'. $myTotal .'</h3>!';
        echo '<p><a href="">Reset page</a></p>';
    } 
}
?>
</body>
</html>
