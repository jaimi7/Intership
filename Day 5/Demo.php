<?php
    //Numerical Array
    $a[0]=10;
    $a[1]=20.30;
    $a[2]="c";
    $a[3]="4";

    //Index Dynamic Array
    $b[]=100;
    $b[]=200.30;
    $b[]="j";
    $b[]="6";

    //Using Object
    $c=array(190,20.390,"y","18");

    //Print the Array
    echo $a[1];

    echo "<hr>";

    for($i=0;$i<count($a);$i++){
        echo $a[$i];
        echo "<br>";
    }

    echo "<hr>";
    echo "<pre>";
        print_r($b);
    echo "</pre>";

    echo "<hr>";
    echo "<pre>";
        var_dump($c);
    echo "</pre>";
    echo "<hr>";

    //Associative Array
        //Key=value
        $d[0]=400;
        $d['php']="Web Development";
        $d['c']=9876;
        $d[10]="Ten";

        //usinf method
        $e=array(
            1=>183,
            'js'=>"Web Desinging",
            'c++'=>5643,
            2=>"Two"
        );
    
    //Print Associative Array
    echo "PHP is a ". $d['php'] ;
    echo "<hr>";

    foreach ($e as $key => $value) {
        echo "Your Key is <b>' $key '</b> and value is <b>' $value '</b> .<br>";   
    }
    echo "<hr>";

    echo "<pre>";
        print_r($d);
    echo "</pre>";

    echo "<hr>";
    echo "<pre>";
        var_dump($e);
    echo "</pre>";
    
?>