<!--Check Give year is Leap Year or Not-->

<?php
    echo "<h1>";
    $year=2004;
    $check=$year % 400==0 || $year % 100==0 || $year % 4==0;
    echo "Your Given Year Is $year.<br>";
    switch ($check) {
        case '1':
            echo "Given Year Is Leap Year.";
            break;
        default:
            echo "Given Year Is Not Leap Year.";
            break;
    }  
    echo "</h1>";
?>