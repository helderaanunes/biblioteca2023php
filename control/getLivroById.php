<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bibliotecaphp/model/vo/Livro.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/bibliotecaphp/model/dao/LivroDAO.php';
$livro = new Livro();
$livro= LivroDAO::getInstance()->getById($_GET['id']);
echo json_encode($livro->jsonSerialize(), JSON_FORCE_OBJECT);
