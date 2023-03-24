<?php

class UsuarioPermissao {
    private $id;
    private $idPessoa;
    private $idPermissao;
    function getId() {
        return $this->id;
    }

    function getIdPessoa() {
        return $this->idPessoa;
    }

    function getIdPermissao() {
        return $this->idPermissao;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdPessoa($idPessoa) {
        $this->idPessoa = $idPessoa;
    }

    function setIdPermissao($idPermissao) {
        $this->idPermissao = $idPermissao;
    }

}
