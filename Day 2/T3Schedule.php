<!--Time With Task-->

<?php
    echo "<h1>";
    $time=11;
    echo "Your $time O'clock Task is <br>";
    switch ($time) {
        case '7':
            echo "Wake Up.";
            break;
        case '8':
            echo "Take Breakfast.";
            break;
        case '9':
            echo "Clean Your House.";
            break;
        case '10':
            echo "visit a docor";
            break;
        case '11':
            echo "Repair Your Car";
            break;
        case '12':
            echo "Go To the Office.";
        case '5':
            echo "Go TO the Home.";
            break;
        default:
            echo "Take a Rest.";
            break;
    }
    echo "</h1>";
?>