<?php

	$operador1 = $_POST['valor1'];
	$operador2 = $_POST['valor2'];
	$operacion = $_POST['operacion'];

	if(empty($valor1) || empty($valor2)){
		echo "Falta un dato";
	} else{
		if($operacion == 1){
			echo "Numeros ". $valor1 . " + " . $valor2 . " = " . ($valor1 + $valor2);
		}
		if($operacion == 2){
			echo "Numeros ". $valor1 . " - " . $valor2 . " = " . ($valor1 - $valor2);
		}
		if($operacion == 3){
			echo "Numeros ". $valor1 . " * " . $valor2 . " = " . ($valor1 * $valor2);
		}
		if($operacion == 4){
			echo "Numeros ". $valor1 . " / " . $valor2 . " = " . ($valor1 / $valor2);
		}
		if($operacion == 5){
			echo "Numeros ". $valor1 . " % " . $valor2 . " = " . ($valor1 % $valor2);
		}
	}

?>