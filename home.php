<?php



//  the year ends 
$year = 2400;

// Start a for loop from 1800 to the current year
for ($i = 1800; $i <= $year; $i++) {

    // Check if the year is a leap year
    if (($i % 4 == 0) && (($i % 100 != 0) || ($i % 400 == 0))) {

        // The year is a leap year
        echo "$i is a leap year <br>";
    }
}

?>



