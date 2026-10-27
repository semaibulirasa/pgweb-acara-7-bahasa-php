<?php
    /*
    $i = 1; // Initialize counter
    while ($i < 5) { // Check condition
        echo $i; // Execute code
        $i = $i + 1; // Increment counter $i++;
    }
    */

    /*
    for($i=1; $i<100; $i++){
        echo $i."<br>";
    }
    */

    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
    echo "$value <br>";
    }

    for($i=0; $i<=3; $i++){
        echo $colors[$i]."<br>"; 
    }
?> 