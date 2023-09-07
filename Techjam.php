<?php

for ($i = 33; $i <= 543; $i++) {
    echo '<span'; // Begin een span-element om opmaak toe te passen

    if ($i % 2 == 0) {
        echo ' style="font-weight:bold;"'; // Maak alle even getal vetgedrukt
    }

    if ($i % 5 == 0 && $i % 9 == 0) {
        echo '>Web'; // Alles deelbaar door 5 en 9, toon "Web"

    } elseif ($i % 5 == 0) {
        echo '>Software'; // Alles deelbaar door 5, toon "Software"

    } elseif ($i % 9 == 0) {
        echo '>Developer'; // Alles deelbaar door 9, toon "Developer"
        
    } else {
        echo '>' . $i; // geen van deze dingen? getal blijft hetzelfde 
    }

    echo '</span><br>';
}

?>
