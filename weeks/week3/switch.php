<?php
// class coffee exercise
// it today is Thursday, it will be pumpkin latte day
// we will start with the isset() function
// then we will introduce our first GLOBAL variable
// our switch

// $var = 'Life is goold!';
// if(isset($var)){
//     echo 'Yippy-skippy!!';
// }else{
//     echo 'Not';
// }

// starting the switch 
// if something is set, $today, then all is well
// else, today is TODAY

// GLOBLE VARIABLES are capitalized and start with $_GET

if(isset($_GET['today'])){
    $today = $_GET['today'];
} else {
    $today = date('l');
}

// switch

switch($today){
    case 'Thursday':
        $coffee = '<h2>'.$today.' is our Cap Day!</h2>';
        $pic = 'cap.jpg';
        $alt = 'cap';
        $content = 'A <b>cappuccino</b> is an espresso drink with steamed milk, milk foam and espresso. It’s very similar to a latte (cafe latte), but the proportion of steamed milk is different. ';
        break;
    case 'Friday':
        $coffee = '<h2>'.$today.' is our Americano Day!</h2>';
        $pic = 'americano.jpg';
        $alt = 'americano';
        $content = 'An <b>Americano</b> is an espresso drink made with hot water and espresso, also called a Caffe Americano. The drink can be made with either one or two shots of espresso, and varying ratios of water. Diluting the strong dark espresso roast brings the flavor closer to a drip coffee: which might be where the name originated! The exact origin of the term is murky, but it’s thought to have originated in the 1970’s. “Americano” means American in Italian or Spanish, referring to the coffee’s strength being closer to an American-style drip coffee.';
        break;
    case 'Saturday':
        $coffee = '<h2>'.$today.' is Black Tea Day!</h2>';
        $pic = 'black-tea.jpg';
        $alt = 'black-tea';
        $content = '<b>Black tea</b> is a true tea that comes from the Camellia sinensis plant. Black tea leaves are allowed to fully oxidize before being processed and dried, which makes the leaves dark brown and gives the tea its signature flavor profile. Black teas tend to be bold and brisk, and they are often described as astringent.';
        break;
    case 'Sunday':
        $coffee = '<h2>'.$today.' is our Green Tea Day!</h2>';
        $pic = 'green-tea.jpg';
        $alt = 'green-tea';
        $content = '<b>Green tea</b> is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process used to make oolong teas and black teas.[1] Green tea originated in China, and since then its production and manufacture has spread to other countries in East Asia.';
        break;
    default:
        $coffee = '<h2>'.$today.' is our Latte Day!</h2>';
        $pic = 'latte.jpg';
        $alt = 'latte';
        $content = 'A <b>latte</b> is a coffee drink with espresso, steamed milk and a layer of foam on top. What’s the difference between a latte vs a cappuccino? A cappuccino has equal parts espresso, steamed milk and foam (⅓ each). A latte has ⅓ espresso and 2/3 steamed milk, with a thin layer of foam on top. Oh, and a macchiato is just espresso with a thicker layer of foam on top. (Here’s a chart that breaks it down.)';
    break;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Switch Classwork Exercise</title>
    <meta charset="utf-8" />     
    
    <style>
        #wrapper{
            width:940px;
            margin:20px auto;
        }

    </style>
    </head> 
    <body>
        <div id="wrapper">
            <h1>My wonderful Switch Classwork Exercise!</h1>
            <?php
                echo $coffee;
            ?>
            <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>"> 
            <br><br>
                <?php
                    echo $content;
                ?>
            <br>
            <h2>Check out our Daily Specials</h2>
            <ul>
                <li><a href="switch.php?today=Monday">Monday</a></li>
                <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
                <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
                <li><a href="switch.php?today=Thursday">Thursday</a></li>
                <li><a href="switch.php?today=Friday">Friday</a></li>
                <li><a href="switch.php?today=Saturday">Saturday</a></li>
                <li><a href="switch.php?today=Sunday">Sunday</a></li>
            </ul>

        </div>

        <footer>
            

        </footer>
    </body>
</html>
