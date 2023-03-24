<?php
class LivroGenero {
    private $id;
    private $idLivro;
    private $idGenero;
    function getId() {
        return $this->id;
    }

    function getIdLivro() {
        return $this->idLivro;
    }

    function getIdGenero() {
        return $this->idGenero;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdLivro($idLivro) {
        $this->idLivro = $idLivro;
    }

    function setIdGenero($idGenero) {
        $this->idGenero = $idGenero;
    }

    // LazyLoad (carregamento preguiçoso)
    function getLivro(){
        //retornar o objeto da classe livro após a consulta do BD
    }
     // LazyLoad (carregamento preguiçoso)
    function getGenero(){
         //retornar o objeto da classe genero após a consulta do BD
    }

}
