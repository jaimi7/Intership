<?php
    //Create Array A
    $a=array(10,50,"java","c++","259",3018);

    //Print Array A
    echo "<h3>Array A is </h3>";
    echo "<pre>";
        print_r($a);
    echo "</pre>";

    //Use array_count_values
    $b=array_count_values($a);
    echo "<br><b> ===>Create Array B where values as keys, and count all matches found for particular values in the Array A</b>";
    echo "<pre>";
        print_r($b);
    echo "</pre>";

    //Use array_reverse
    $c = array_reverse($a);
    echo "<br><b>===>  Array C is Reverse Array of A.</b>";
    echo "<pre>";
        print_r($c);
    echo "</pre>";

    //Use array_merge
    $d = array_merge($b,$c);
    echo "<br><b>===>  Array D is Merge Array B and C.</b>";
    echo "<pre>";
        print_r($d);
    echo "</pre>";

    //Use range
    $e = range("G", "K");
    echo "<br><b>===>  Array E is ['G', 'K'] Give all element between G and K. </b>";
    echo "<pre>";
        print_r($e);
    echo "</pre>";

    //use array_change_key_case for UPPER Case
    echo "<br><br><b>===> Array B is Cover in key UPPER case </b>";
    $upper = array_change_key_case($b,CASE_UPPER);
    echo "<pre>";
        print_r($upper);
    echo "</pre>";
    
    //use array_change_key_case for LOWER Case
    echo "<b>===> Array B is Cover in key LOWER case </b>";
    $lower = array_change_key_case($b,CASE_LOWER);
    echo "<pre>";
        print_r($lower);
    echo "</pre>";

    //Use compact
    echo "<b>===> Create an array from variables and their values </b>";
    $name = "Jaimi";
    $subject = "php";
    $arr = compact("name", "subject");
    echo "<pre>";
        print_r($arr);
    echo "</pre>";

    //create array A1 and A2
    $a1=array(10,20,30,40,50);
    $a2=array(10,30,50);
    echo " <br><br>Array A1 : ";
    print_r($a1); 
    echo "<br>Array A2 : ";
    print_r($a2);
    
    //use array_diff
    echo "<br><br><b>===> Differences Beetween A1 and A2.</b>";
    $diff = array_diff($a1, $a2);
    echo "<pre>";
        print_r($diff);
    echo "</pre>";

    //use array_intersect
    echo "<b>===> Comparing A1 and A2.</b>";
    echo "<pre>";
        print_r(array_intersect($a1,$a2));
    echo "</pre>";
  
    //Use explode
    echo "===><b> Break a string into an array.</b> ";
    $string = "I Love PHP Language";
    $z = explode(" ",$string);
    echo "<pre>";
        print_r($z);
    echo "</pre>";
    
    //Use implode
    echo "<br><b>===> Convert an array into string .</b><br><br> ";
    $y = array("We","like","Java","Programming");
    $string2 = implode(" ", $y);
    echo $string2;


?>