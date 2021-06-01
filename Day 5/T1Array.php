<?php
    //Create Array A
    $a=array(10,50,"java","c++","259",3018);

    //Print Array A
    echo "<h3>Array A is </h3>";
    echo "<pre>";
        print_r($a);
    echo "</pre>";

    //Use count 
    echo " ===> Number Of element in Array A is <b> ".count($a). " </b> .";
    
    //Use in_array
    $check = in_array("java",$a);
    echo "<br>===> java is exist in Array A (1=true,0=flase) = <b> $check</b> ";

    //Use array_rand
    $rand = array_rand($a);
    echo "<br>===> Random value of Array A is <b> " .$a[$rand] ."</b> .";

    //Use end
    echo "<br>===> Last Element of Array A is <b> ". end($a) ."</b> .";
    
    //Use array_push
    echo "<br><br>===> Add two element in Array A .";
    array_push($a,"Javascriot","Database");
    echo "<pre>";
        print_r($a);
    echo "</pre>";

    //Use array_pop
    echo "<br>===> Deletes the last element of  Array A .";
    array_pop($a); 
    echo "<pre>";
        print_r($a);
    echo "</pre>";
    echo"<hr>";

    //create array B
    $b = array(10,40,30,40,20,50,30);

    //Print Array B
    echo "<h3>Array B is </h3>";
    echo "<pre>";
        print_r($b);
    echo "</pre>";

    //Use array_sum
    echo "===> Sum Of Array B is " .array_sum($b);

    //Use array_product
    echo "<br>===> Product Of Array B is " .array_product($b);
    
    //Use array_unique
    echo "<br><br>===> Remove all duplicate values form Array B";
    echo "<pre>";
        print_r(array_unique($b));
    echo "</pre>";

    //Use sort
    echo "===> Sort Array B";
    sort($b);
    echo "<pre>";
        print_r($b);
    echo "</pre>";

    //Use rsort
    echo "===> Reverse sort Array B";
    rsort($b);
    echo "<pre>";
        print_r($b);
    echo "</pre>";

    //Use array_combine
    echo "===> Combine Array A and B";
    $com = array_combine($a, $b);
    echo "<pre>";
        print_r($com);
    echo "</pre>";

?>