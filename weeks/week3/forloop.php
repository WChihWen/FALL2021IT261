<?php

    for ($x = 1; $x <= 21; $x+=3) {
        echo "The number is: $x <br>";
    }

    echo "<br>";
// is a for loop for our famus cecius - far converter
// do not call out the celcius variable OUTSIDE of the loop
    for ($celcius = 0; $celcius <= 40; $celcius+=3) {
        $far = ($celcius * 9/5) + 32;
        $friendly_far = floor($far);
        echo '<b>Farenheit:</b>'.$friendly_far.'<b>  Celcius:</b><span style="color:blue;">'.$celcius.'</span><hr>';
        
    }
    echo "<br>";
//kilometers and we have miles

    for ($k = 0; $k <= 40; $k+=3) {
        $m = $k * 0.6214;
        $friendly_m = number_format($m,1);
        echo '<b>Kilometers:</b>'.$k.'<b>  Miles:</b><span style="color:green;">'.$friendly_m.'</span><hr>';
        
    }

?>