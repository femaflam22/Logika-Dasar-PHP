<?php

// Munculkan text dengan tag heading size berbeda sebanyak 5 jenis

for ($i=1; $i<=5; $i++){
    echo '<h'.$i .'>Heading '. $i .'</h'. $i. '>';
}