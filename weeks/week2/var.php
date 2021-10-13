<?php
$name = 'Chih Wen';
$weather = 'Today is a suuny day';
$body_tmp = 98.6;

echo $name;
echo '<br>';
echo'My name is $name';

echo '<br>';
echo "My name is $name";
echo '<br>';
// If using single quotes around a variable, the value of the variable will not display.
// If using double quates, the variable value will display!

echo 'My name is ' .$name.' ';
echo '<br>';
echo $weather;
echo '<br>';
echo $body_tmp;
echo '<br>';
echo 'The normal body temperature is'.$body_tmp.' and all is well!';
echo '<br>';

$name = 'Wang';
echo $name;
echo '<br>';
$x = 20;
$y = 5;
echo $x;
echo '<br>';
$z = $x + $y;
echo '<br>';
echo $z;
$z = $x * $y;
echo '<br>';
echo $z;
echo '<br>';

$first_name = 'Chih Wen';
$last_name = 'Wang';

echo $first_name.' '.$last_name;
echo '<br>';
echo ' '.$first_name.' '.$last_name.'';
echo '<br>';
echo 'Here are the names with a single\'s quote! '.$first_name.' '.$last_name.' ';
//punctuation challenge - inside sigle qoutes, we MUST nest the variable with the following '.$variable.' .....
//Now when we have an apostraphe, we must use ESCAPE before the apostraphe....\'
echo '<br>';
echo "Here are the names with a double's quote! $first_name$last_name";
echo '<br>';

$name = 'Chih Wen';
$name .= ' Wang';
echo $name;
echo '<br>';

$x = 20;
$x *= 2;
echo $x;

echo '<br>';

$x = 120;
$x *= .09;
echo $x;

//our first function - number_format()
echo '<br>';
$x = 137;
$x /= 4;
$friendly_x = number_format($x,1);
echo $friendly_x;
echo '<br>';
// our second preset function- the date function
echo date('Y');
echo '<br>';
echo date('l');
echo '<br>';
//arrays - cannot echo an array!
$fruit[] = 'orange';
$fruit[] = 'banana';
$fruit[] = 'grapes';
$fruit[] = 'apples';
$fruit[] = 'cherries';
echo '<br>';
echo $fruit[3]; // we can echo an indexed option
echo '<br>';
$fruit = array(
    'orange',
    'banana',
    'grapes',
    'apples',
    'cherries'
);

$fruit = [
    'orange',
    'banana',
    'grapes',
    'apples',
    'cherries'
];
// cannot echo an array!
echo $fruit;
echo '<br>';
print_r($fruit);
echo '<br>';
var_dump($fruit);

echo '<br>';
// another array in the world of websites

$nav[] = 'Home';
$nav[] = 'About';
$nav[] = 'Daily';
$nav[] = 'Contact';
$nav[] = 'Gallery';

echo $nav[0];

echo '<br>';
// associative array

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';


$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);

echo '<pre>';
var_dump($nav);
echo '</pre>';

echo '<br>';

$show = 'The Crown';
$show_actor = 'Olivia Colman';
$show_genre = 'Historical Fiction';

echo 'My favorite series during 2020 was '.$show.' starring, '.$show_actor.', and it is a '.$show_genre.' ';
?>