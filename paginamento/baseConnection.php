<?php 

$connect = mysqli_connect("localhost", "root", "", "primeira_demanda");

if(!$connect){
	die("Não foi possivel conectar no banco!");
}

?>