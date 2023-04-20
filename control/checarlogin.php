<?php
//$_SERVER['DOCUMENT_ROOT'] é a mesma coisa de "C:\xampp\htdocs"
require_once  $_SERVER['DOCUMENT_ROOT']. '/bibliotecaphp/model/dao/UsuarioDAO.php';
$daoUsuario = UsuarioDAO::getInstance();
$sql = " where email = :email and senha =:senha";
$arrayDeParametros = array(":email",":senha");
$arrayDeValores = array($_POST['email'], md5($_POST['senha']));

$lista=$daoUsuario->listWhere($sql,$arrayDeParametros,$arrayDeValores);
print_r($lista);
if(count($lista)>0){
    session_start();
    $_SESSION['idUsuarioLogado']=$lista[0]->getId();
     header("location: ../index.php"); 
}

   header("location: ../login.php?erroNoLogin=true"); 
?>