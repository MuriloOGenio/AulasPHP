<?php 
	/*
	while (comparação) { enquanto for verdade roda o codigo
		codigo;
	}
	*/

	/*
	do {
		executa primeiro;
	} while (comparação) compara depois
	*/

	// for (incia; compara; adiciona)	
	$M = 0;
	$F = 0;
	$sexo = "F";
	for ($i=1; $i <=50 ; $i++) { 
		switch ($sexo) {
			case "F":
				$F++;
				break;
			
			default:
				$M++;
				break;
		}
	}
	echo "O total de mulheres é: $F <br/>";
	echo "O total de homens é: $M ";

 ?>