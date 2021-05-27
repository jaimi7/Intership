<!--Check the Month via number.-->

<?php
echo "<h1>";
$num=6;
echo "Your choise is $num.<br>";
 switch ($num) {
    case '1':
         echo "This Month is January.";
         break;
    case '2':
        echo "This Month is February.";
        break;
    case '3':
        echo "This Month is March.";
        break;
    case '4':
        echo "This Month is April.";
        break;
    case '5':
        echo "This Month is May.";
        break;
    case '6':
        echo "This Month is June.";
        break;
    case '7':
        echo "This Month is July.";
        break;
    case '8':
        echo "This Month is August.";
        break;
    case '9':
        echo "This Month is September.";
        break;
    case '10':
        echo "This Month is October.";
        break;
    case '11':
        echo "This Month is November.";
        break;
    case '12':
        echo "This Month is December.";
        break;
    default:
        echo "This Month is not in List.";
        break;
 }
echo "</h1>";
?>