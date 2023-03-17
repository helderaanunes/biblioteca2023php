<?php
class Livro {
    private $id;
    private $titulo;
    private $editora;
    private $edicao;
    private $ano;
    private $tombo;
    
    function getId() {
        return $this->id;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getEditora() {
        return $this->editora;
    }

    function getEdicao() {
        return $this->edicao;
    }

    function getAno() {
        return $this->ano;
    }

    function getTombo() {
        return $this->tombo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setEditora($editora) {
        $this->editora = $editora;
    }

    function setEdicao($edicao) {
        $this->edicao = $edicao;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }

    function setTombo($tombo) {
        $this->tombo = $tombo;
    }

    function toString(){
        return $this->titulo;
    }

}
?>