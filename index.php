<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once $_SERVER['DOCUMENT_ROOT'].'/bibliotecaphp/model/dao/BDPDO.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/bibliotecaphp/model/dao/UsuarioDAO.php';

        $u = new Usuario();
        $u->setNome("João");
        $u->setEmail("joao@gmail.com");
        $u->setSenha("segredo123");
        $dao = UsuarioDAO::getInstance();
        $dao->insert($u);
        echo "Acabou o código...";
        ?>

        ?>
    </body>
</html>
