<?php

    $maths=$_POST['maths'];
    $c=$_POST['c'];
    $java=$_POST['java'];
    $php=$_POST['php'];
    $ds=$_POST['ds'];

    $total=$maths+$c+$java+$php+$ds;
    $per=$total/5;

    echo "<table border=2 cellpadding=15px>";
    echo "<thead><tr><th>Subject</th><th>Marks <br> (out of 100)</th></tr></thead>";
    echo "</tbody><tr><td>Maths</td><td>$maths</td></tr>";
    echo "<tr><td>C Programming</td><td>$c</td></tr>";
    echo "<tr><td>Java</td><td>$java</td></tr>";
    echo "<tr><td>PHP</td><td>$php</td></tr></tbody>";
    echo "<tr><td>Data Stracture</td><td>$ds</td></tr></tbody>";
    echo "<tfoot><tr><th>Total Marks</th><th>$total / 500</th></tr>";
    echo "<tr><th>Percentage</th><th>$per %</th></tr></tfoot>";
    echo "</table>";
    
    echo "<h1>";
    if(($maths<30)||($c<30)||($java<30)||($php<30)||($ds<30)){
        echo "Sorry ! You Are Fail.";
    }else if($per>=80){
        echo "Congratulations :)  <br/> Your Grade : Distinction.";
    }else if($per>=65){
        echo "Congratulations :)  <br/> Your Grade : First Class.";
    }else if($per>=50){
        echo "Congratulations :)  <br/> Your Grade : Second Class.";
    }else{
        echo "Grade : Third Class.";
    }
    echo "</h1>";

?>