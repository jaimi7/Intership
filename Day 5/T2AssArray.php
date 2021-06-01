<?php
    //Create Array A
    $a=array(
        1=>183,
        'js'=>"Web Desinging",
        'c++'=>5643,
        2=>"Two",
        0=>400,
        'php'=>"Web Development",
        'c'=>9876,
        10=>"Ten"
    );
    
    //Print Array A
    echo "<h3>Array A is </h3>";
    echo "<pre>";
        print_r($a);
    echo "</pre>";

    //Use array_rand
    $rand = array_rand($a,3);
    echo "<br>===>  3 Random value of Array A is.";
    echo "<pre>";
        print_r($rand);
    echo "</pre>";

    //Use array_search
    $check = array_search("Web Desinging", $a);
    echo "===> Web Desinging is in <b> $check </b> index ."; 

    //Use array_key_exists
    echo "<br>===> php key is exist in Array A (1=true,0=flase) = <b>".array_key_exists('php',$a) ."</b> ";

    //Use array_flip
    echo "<br><br>===> Flip Keys and Values Array A";
    $flip= array_flip($a); 
    echo "<pre>";
        print_r($flip);
    echo "</pre>";

    //Use asort
    echo "===> Ascending order according to the values sort Array A";
    asort($a);
    echo "<pre>";
        print_r($a);
    echo "</pre>";

    //Use ksort
    echo "===> Ascending order according to the keys sort Array A";
    ksort($a);
    echo "<pre>";
        print_r($a);
    echo "</pre>";

    //Use krsort
    echo "===> Descending order according to the keys sort Array A";
    krsort($a);
    echo "<pre>";
        print_r($a);
    echo "</pre>";

    //Use array_values
    echo "===> Convert Array A in numerically indexed Array .";
    $arr = array_values($a);
    echo "<pre>";
        print_r($arr);
    echo "</pre>";

    //Use shuffle
    echo "===> R andomly shuffle Array A";
    shuffle($a); 
    echo "<pre>";
        print_r($a);
    echo "</pre>";

    
?>