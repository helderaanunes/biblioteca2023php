<?php
class Genero {
    private $id;
    private $descricao;
    function getId() {
        return $this->id;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function toString (){
        return $this->descricao;
    }
}
