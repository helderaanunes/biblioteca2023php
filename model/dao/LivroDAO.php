<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bibliotecaphp/model/dao/BDPDO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/bibliotecaphp/model/vo/Livro.php';

class LivroDAO {

    public static $instance;

    private function __construct() {
        
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new LivroDAO();

        return self::$instance;
    }

    public function insert(Livro $livro) {
        try {
            $sql = "INSERT INTO livro (titulo,editora,edicao,ano,tombo"
                    . ") "
                    . "VALUES (:titulo,:editora,:edicao,:ano,:tombo)";
            //perceba que na linha abaixo vai precisar de um import
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":titulo", $livro->getTitulo());
            $p_sql->bindValue(":editora", $livro->getEditora());
            $p_sql->bindValue(":edicao", $livro->getEdicao());
            $p_sql->bindValue(":ano", $livro->getAno());
            $p_sql->bindValue(":tombo", $livro->getTombo());
            
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de salvar" . $e->getMessage();
        }
    }

    public function update($livro) {
        try {
            $sql = "UPDATE livro SET nome=:nome, cpf =:cpf,logradouro=:logradouro,numero=:numero,"
                    . "bairro=:bairro, cidade=:cidade,uf =:uf,telefone=:telefone, email=:email, senha=:senha "
                    . "where id=:id";
            //perceba que na linha abaixo vai precisar de um import
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $livro->getNome());
            $p_sql->bindValue(":cpf", $livro->getCpf());
            $p_sql->bindValue(":logradouro", $livro->getLogradouro());
            $p_sql->bindValue(":numero", $livro->getNumero());
            $p_sql->bindValue(":bairro", $livro->getBairro());
            $p_sql->bindValue(":cidade", $livro->getCidade());
            $p_sql->bindValue(":uf", $livro->getUf());
            $p_sql->bindValue(":telefone", $livro->getTelefone());
            $p_sql->bindValue(":email", $livro->getEmail());
            //iremos critografar a senha para md5, asism o usuário terá mais segurança, já que frequentemente usamos a mesma senha           //  para diversas aplicações.
            $p_sql->bindValue(":senha", md5($livro->getSenha()));
            $p_sql->bindValue(":id", $livro->getId());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de atualizar" . $e->getMessage();
        }
    }

    public function delete($id) {
        try {
            $sql = "delete from livro where id = :id";
            //perceba que na linha abaixo vai precisar de um import
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de deletar --" . $e->getMessage();
        }
    }

    public function getById($id) {
        try {
            $sql = "SELECT * FROM livro WHERE id = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            $p_sql->execute();
            return $this->converterLinhaDaBaseDeDadosParaObjeto($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.";
        }
    }

    private function converterLinhaDaBaseDeDadosParaObjeto($row) {
        $obj = new Livro();
        $obj->setId($row['id']);
        $obj->setNome($row['nome']);
        $obj->setCpf($row['cpf']);
        $obj->setLogradouro($row['logradouro']);
        $obj->setNumero($row['numero']);
        $obj->setBairro($row['bairro']);
        $obj->setCidade($row['cidade']);
        $obj->setUf($row['uf']);
        $obj->setTelefone($row['telefone']);
        $obj->setEmail($row['email']);
        $obj->setSenha($row['senha']);
        return $obj;
    }

    public function listAll() {
        try {
            $sql = "SELECT * FROM livro ";
            $p_sql = BDPDO::getInstance()->prepare($sql);

            $p_sql->execute();

            $lista = array();
            $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            while ($row) {
                $lista[] = $this->converterLinhaDaBaseDeDadosParaObjeto($row);
                $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            }
            return $lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.";
        }
    }

    public function listWhere($restanteDoSQL, $arrayDeParametros, $arrayDeValores) {
        try {
            $sql = "SELECT * FROM livro " . $restanteDoSQL;
            $p_sql = BDPDO::getInstance()->prepare($sql);
            for ($i = 0; $i < sizeof($arrayDeParametros); $i++) {
                $p_sql->bindValue($arrayDeParametros[$i], $arrayDeValores [$i]);
            }
            $p_sql->execute();
            $lista = array();
            $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            while ($row) {
                $lista[] = $this->converterLinhaDaBaseDeDadosParaObjeto($row);
                $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            }
            return $lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.".$e->getMessage();
        }
    }

}

?>