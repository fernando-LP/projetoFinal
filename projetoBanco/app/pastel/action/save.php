<?php

$dirProjeto = $_SERVER['DOCUMENT_ROOT'] . '/Projeto_DevEvolution/projetoBanco/';

//var_dump($dirProjeto);

require $dirProjeto . 'classes/db/MySQL.php';

$MySQL = new MySQL();
$DB = $MySQL->connectDB();


$sabor = addslashes($_POST['sabor']);
$nome = addslashes($_POST['nome']);
$setor = addslashes($_POST['setor']);
$obs = addslashes($_POST['obs']);



$DB->query("INSERT INTO pastel (sabor, nome, setor, obs)
			VALUES('$sabor', '$nome', '$setor', '$obs')");



if($DB->affected_rows > 0){
	header('Location: ../list.php');
}else{
	header('Location: ../new.php');
}