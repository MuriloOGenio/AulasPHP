<?php 
    $emp = array(
        array(1,"José",4000),        
        array(2,"Maria",5000),
        array(3,"João",3000)
    );

    for($linha=0;$linha<3;$linha++){
        for($coluna=0;$coluna<3;$coluna++){
            echo $emp[$linha][$coluna]."  ";

        }
        echo "<br/>";
    }
    echo"<pre>";
    var_dump($emp);
    echo"<pre/>";

    $func = array(
    
        array(1,"Francisca",1500.00),
        array(2,"Debora", 2500),
        array(3,"Mohamed",3500)

);
   echo"<pre>";     
   print_r($func);
   echo"</pre>";   
?>