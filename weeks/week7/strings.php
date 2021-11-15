<?php

$statment = 'Presently, I am reading The Looming Tower';
echo substr($statment, 0);
echo '<br>';
echo ($statment);
echo '<br>(0,4):';
echo substr($statment,0,4);
echo '<br>(0,14):';
echo substr($statment,0,14);
echo '<br>(0,-7):';
echo substr($statment,0,-7);
echo '<br>(-15,5):';
echo substr($statment,-15,5);
echo '<br>str_replace("the", "The", $statment2):';

$statment2 ='Hulu\'s redition of the Looming Tower is based on the book, the Looming Tower.';

echo str_replace('the', 'The', $statment2);



?>