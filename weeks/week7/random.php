<?php

$dice = rand(1, 6);
echo $dice;

echo '<br>';

$dice1 = rand(1, 6);
$dice2 = rand(1, 6);


echo $dice1;
echo '<br>';
echo $dice2;
echo '<br>';

if($dice1 == $dice2){
    echo 'I won!';
}else{
    echo 'I did not win!';
}

$i = rand(1,20);
echo $i;
echo '<br>';

$photos = array(
    'photo1',
    'photo2',
    'photo3',
    'photo4',
    'photo5'
);


$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';


$i = rand(0, 4);
echo $i;
echo '<br>';

$selected_image = 'images/'.$photos[$i].'.jpg';
echo '<img src="'.$selected_image.'" alt="'.$photos[$i].'" /> ';

?>