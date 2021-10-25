<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Form 3 with HTML and CSS</title>
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
            <label>First Name:</label>
            <input type="text" name="fname">
            <br>
            <label>Last Name:</label>
            <input type="text" name="lname">
            <br>
            <label>Email:</label>
            <input type="email" name="email">
            <br>
            <label>COMMENTS:</label>
            <textarea name="comments"></textarea>
            <br>
            <input type="submit" value="Send it">
        </fieldset>
    </form> 

    <?php
        if(isset($_POST['fname'],$_POST['lname'], $_POST['email'], $_POST['comments'])){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $comments = $_POST['comments'];

            if($_POST['fname'] == null && $_POST['lname'] == null && $_POST['email'] == null && $_POST['comments'] == null){
                echo '<h3>Please fill out the input fields!</h3>';
            }else{
                echo '<br>
                    <div class="box">
                        <ul>
                            <li><b>First Name:</b>'.$fname.'</li>
                            <li><b>Last Name:</b>'.$lname.'</li>
                            <li><b>Email:</b>'.$email.'</li>
                            <li><b>Comments: </b>'.$comments.'</li>               
                        </ul>
                    
                    </div>             
                ';
            }   
        }
?>

</body>
</html>

