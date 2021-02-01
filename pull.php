<?php
$persona = [
		“nombre” => “Pedro”,
		“apellido” => “Sánchez”,
		“edad” => 50
	];
	Foreach ($persona as $valor) {
			Echo “$valor <br>”;
}

$auto = [
	“Marca” => “Ford”,
	“Modelo” => “Focus”,
	“Año” => 2017
];
Foreach ($auto as $posicion => $valor) {
		echo “$posicion: $valor <br>”;
}

?>
