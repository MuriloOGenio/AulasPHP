<?php 
   /*$nome1 = "Maria";
   $nome2 = "Jõao";
   $nome3 = "Pedro";
   $nome4 = "Lucas";
    echo ("$nome1<br>$nome2<br>$nome3<br>$nome4<br>"); - SEM ARRAY*/

    $nome = array("Maria","João","Pedro","Lucas");
    
    echo "Os nomes no array <br/>";
    
    foreach($nome as $nomes){
        echo "<br/>".$nomes;
    }
echo'<br/><br/>';
$num = array(1,2,3,4,5);
foreach($num as $valor){
    echo "Valor é $valor <br />";

}
$num[1] = "um";
$num[2] = "dois";
$num[3] = "três";
$num[4] = "quatro";
$num[5] = "cinco <b>";
foreach($num as $valor){
    echo "Valor é $valor <br />";
}


?>