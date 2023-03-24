<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/bibliotecaphp/model/dao/BDPDO.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/bibliotecaphp/model/vo/Usuario.php';

class UsuarioDAO {
    
    public static $instance;
    private function __construct() {
    }
    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new UsuarioDAO();
 
        return self::$instance;
    }

    
    
public function insert(Usuario $usuario){
        try {
            $sql = "INSERT INTO usuario (nome,cpf,logradouro,numero,bairro"
                    . ",cidade,uf,telefone, email,senha) "
                    . "VALUES (:nome,:cpf,:logradouro,:numero,:bairro,:cidade,:uf,:telefone,:email,:senha)";
            //perceba que na linha abaixo vai precisar de um import
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $usuario->getNome());
            $p_sql->bindValue(":cpf", $usuario->getCpf());
            $p_sql->bindValue(":logradouro", $usuario->getLogradouro());
            $p_sql->bindValue(":numero", $usuario->getNumero());
            $p_sql->bindValue(":bairro", $usuario->getBairro());
            $p_sql->bindValue(":cidade", $usuario->getCidade());
            $p_sql->bindValue(":uf", $usuario->getUf());
            $p_sql->bindValue(":telefone", $usuario->getTelefone());
            $p_sql->bindValue(":email", $usuario->getEmail());
            $p_sql->bindValue(":senha", $usuario->getSenha());
            //iremos critografar a senha para md5, asism o usuário terá
            // mais segurança, já que frequentemente usamos a mesma senha
            //  para diversas aplicações.
            $p_sql->bindValue(":senha", md5($usuario->getSenha()));
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de salvar".$e->getMessage();
        }
    }

public function update ($usuario) {}
public function delete ($id) { }
public function getById ($id) { }
public function listAll(){}
}
?>