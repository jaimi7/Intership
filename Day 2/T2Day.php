<!--Check the day via number.-->

<?php
echo "<h1>";
$num=4;
echo "Your choise is $num.<br>";
 switch ($num) {
    case '1':
         echo "Today is Monday.";
         break;
    case '2':
        echo "Today is Tuesday.";
        break;
    case '3':
        echo "Today is Wednesday.";
        break;
    case '4':
        echo "Today is Thursday.";
        break;
    case '5':
        echo "Today is Friday.";
        break;
    case '6':
        echo "Today is Saturday.";
        break;
    default:
        echo "Today is Holiday";
        break;
 }
echo "</h1>";
?>