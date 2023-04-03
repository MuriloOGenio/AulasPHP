<?php
    function somarValor($n1,$n2){ 
        $soma = $n1 + $n2;

        echo("A Soma de : " . $n1. " + " . $n2.  " = "   .$soma );
    }

    somarValor(10, 10);
    echo("<br/>");

    function MultiValor($n1,$n2){ 
        $multi = $n1 * $n2;
    
        echo("A Multiplicação de: " . $n1. " * " . $n2.  " = "  .$multi );
    }
    MultiValor(5, 9);
    echo("<br/>");


    function SubValor($n1,$n2){ 
        $sub = $n1 - $n2;
        
        echo("A Subtração de : " . $n1. " - " . $n2.  " = "   .$sub );
        }
    SubValor(50, 25);
    print("<br/>");

    function DivValor($n1, $n2){
        $div = $n1 / $n2;
        echo("A Divisão de : " .$n1 ." / " .$n2 . " = " .$div);
    }
     DivValor(50 , 2);

?>