<?php
    echo "<h1>";
    $a=2;
    echo "Your vlue is $a <br/>";
    switch ($a) {
        case '1':
            echo "ONE";
            break;
        case '2':
            echo "TWO";
            break;
        case '3':
            echo "THREE";
            break;
        default:
            echo "OTHER";
            break;
    }
    echo "</h1>";
?>