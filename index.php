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
        require_once $_SERVER['DOCUMENT_ROOT'] . '/bibliotecaphp/model/dao/UsuarioDAO.php';

//        $u = new Usuario();
//        $u->setNome("Vitoria");
//        $u->setEmail("vitoria@gmail.com");
//        $u->setSenha("afogados");
//        UsuarioDAO::getInstance()->insert($u);
//        echo "Salvou mais um usuario...";
//        //testando o getById()
//        $objDoId2= UsuarioDAO::getInstance()->getById(2);
//        print_r($objDoId2);
//        //testar o atualizar()
//        $objDoId2->setLogradouro("Av. Manoel Borba");
//        $objDoId2->setCidade("Afogados da Ingazeira");
//        $objDoId2->setSenha("123");
//        UsuarioDAO::getInstance()->update($objDoId2);
//        //testar o método de deletar 
//        UsuarioDAO::getInstance()->delete(6);
        $arrayDeParametros = array (":login", ":senha");
        $arrayDeValores = array ("helder", md5("123"));
        print_r(UsuarioDAO::getInstance()->listWhere(
                "where login like :login and senha like :senha",
                $arrayDeParametros,
                $arrayDeValores
                ));
        ?>

        ?>
    </body>
</html>
