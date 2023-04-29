<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bibliotecaphp/model/vo/Usuario.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/bibliotecaphp/model/dao/UsuarioDAO.php';
$obj = new Usuario();
$obj->setBairro($_POST['bairro']);
$obj->setCidade($_POST['cidade']);
$obj->setCpf($_POST['cpf']);
$obj->setEmail($_POST['email']);
$obj->setLogradouro($_POST['logradouro']);
$obj->setNome($_POST['nome']);
$obj->setNumero($_POST['numero']);
$obj->setSenha($_POST['senha']);
$obj->setTelefone($_POST['telefone']);
$obj->setUf($_POST['uf']);

UsuarioDAO::getInstance()->insert($obj);
header("location: ../cadastrarusuario.php");
?>

