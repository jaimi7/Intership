<!--For check Alphabet Is Vowel or Consonant.-->

<?php
    echo "<h1>";
    $i="s";
    echo "Your Alphabet is $i .<br>";
    switch($i){
        case "a":
        case "e":
        case "i":
        case "o":
        case "u":
            echo "$i is a Vowel.";
            break;
        default:
            echo "$i is a Consonant.";            
    }
    echo "</h1>";
?>