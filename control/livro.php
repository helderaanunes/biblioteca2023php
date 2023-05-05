<?php
// fluxograma?
// 1 instanciar objeto Livro
// 2 "setar" informações vindas do formulário no objeto
// 3 pegar um DAO do livro
// 4 salvar o livro usando o método salvar do DAO
require_once $_SERVER['DOCUMENT_ROOT'] . '/bibliotecaphp/model/vo/Livro.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/bibliotecaphp/model/dao/LivroDAO.php';

$obj = new Livro();
$obj->setTitulo($_POST['titulo']);
$obj->setEditora($_POST['editora']);
$obj->setEdicao($_POST['edicao']);
$obj->setAno($_POST['ano']);
$obj->setTombo($_POST['tombo']);

LivroDAO::getInstance()->insert($obj);