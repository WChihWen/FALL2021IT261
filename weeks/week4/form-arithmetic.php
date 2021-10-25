<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Arithmetic Form</title>
    <style>
        form {
            width:400px;
            margin: 0 auto;
        }
        fieldset {
            border: 1px solid red;
            padding:10px;
        }
        label, textarea {
            display:block;
            margin-bottom:5px;
        }
        input{
            margin-bottom:10px
        }

        input[type=text],
        input[type=email],
        textarea {
            width:90%;    
        }

        h3{
            color:red;
            text-align:center;
        }

        .box{
            width:400px;
            margin:0 auto;
            padding:15px;
            background:beige;
        }
    </style>
   
</head>

<body>

    <form action="" method="POST">
        <fieldset>
            <label for="fname">First Name</label>
            <input type="text" name="fname">
            <br>
            <label for="coffees">How many coffees?</label>
            <input type="number" name="coffees">
            <br>
            <label for="lattes">Lattes</label>
            <input type="number" name="lattes">
            <br>
            <label for="caps">Cappucino</label>
            <input type="number" name="caps">
            <br>
            <input type="submit" value="Send it">
        </fieldset>
    </form> 

    <?php
        if(isset($_POST['fname'],$_POST['coffees'], $_POST['lattes'], $_POST['caps'])){
            
            if( $_POST['fname'] == NULL || $_POST['coffees'] == NULL || $_POST['lattes'] == NULL || $_POST['caps'] == NULL){
                echo '<h3>Please fill out the input fields!</h3>';
            }else{
                $fname = $_POST['fname'];
                $coffees = intval($_POST['coffees']);            
                $lattes = intval($_POST['lattes']);
                $caps = intval($_POST['caps']);
                $totall= $coffees + $lattes + $caps;
                echo '<br>
                    <div class="box">
                    <h2>Hello '.$fname.'</h2>
                    <p>You have ordered the following:</p>
                        <ul>
                            <li>'.$coffees.' Coffees</li>
                            <li>'.$lattes.' Lattes</li>
                            <li>'.$caps.' Cappucino</li>                                      
                        </ul>
                    <p>Totalling '.$totall.' beverages</p>
                    </div>             
                ';
            }   
        }
?>

</body>
</html>

