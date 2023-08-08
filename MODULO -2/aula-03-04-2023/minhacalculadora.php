<?php
    function somarValor($n1,$n2){ 
        $soma = $n1 + $n2;

        return $soma;
    }

    function MultiValor($n1,$n2){ 
        $multi = $n1 * $n2;
    
        return $multi;
    }

    function SubValor($n1,$n2){ 
        $sub = $n1 - $n2;
        
        return $sub;
        }
    
    function DivValor($n1, $n2){
        $div = 0;
        if($n2 == 0){
            echo "Não se pode divir por zero. <br/>";

        } else if ($n1 == 0) {
            echo "Não se pode dividir por zero.<br/>";

        }
        else{
            $div = $n1 / $n2;
        }
             return $div;
    
        };
          
       

    $n1 = 40;
    $n2 = 20;
    $operador = "+";

    echo "Digite o operador para a função: <br/>";
    echo "1 - Para Soma <br/>";
    echo "2 - Para Subtrair <br/>";
    echo "3 - Para Multiplicar <br/>";
    echo "4 - Para Dividir <br/> <br/>";

    switch($operador){

        case "+":
            $resultado = somarValor($n1 , $n2);
            break;

        case "-":
            $resultado = SubValor($n1 , $n2);
            break;

        case "*":
            $resultado = MultiValor($n1 , $n2);
            break;
        
        case "/":
            $resultado = SubValor($n1 , $n2);
        default:
            echo "Operação não encontrada";
            break;
        
    }
    print("O operador escolhido por você foi: " ."$operador<br/>");
    print("$n1 $operador $n2 = ");
    printf("%.2f", $resultado);

?>