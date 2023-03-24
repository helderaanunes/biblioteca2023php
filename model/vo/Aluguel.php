<?php

class Aluguel {
    private $id;
    private $idPessoa;
    private $dataRealizouAluguel;
    private $dataDevolucaoAluguel;
    private $dataRealDevolucaoAluguel;
    private $idLivro;
    
    function getId() {
        return $this->id;
    }

    function getIdPessoa() {
        return $this->idPessoa;
    }

    function getDataRealizouAluguel() {
        return $this->dataRealizouAluguel;
    }

    function getDataDevolucaoAluguel() {
        return $this->dataDevolucaoAluguel;
    }

    function getDataRealDevolucaoAluguel() {
        return $this->dataRealDevolucaoAluguel;
    }

    function getIdLivro() {
        return $this->idLivro;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdPessoa($idPessoa) {
        $this->idPessoa = $idPessoa;
    }

    function setDataRealizouAluguel($dataRealizouAluguel) {
        $this->dataRealizouAluguel = $dataRealizouAluguel;
    }

    function setDataDevolucaoAluguel($dataDevolucaoAluguel) {
        $this->dataDevolucaoAluguel = $dataDevolucaoAluguel;
    }

    function setDataRealDevolucaoAluguel($dataRealDevolucaoAluguel) {
        $this->dataRealDevolucaoAluguel = $dataRealDevolucaoAluguel;
    }

    function setIdLivro($idLivro) {
        $this->idLivro = $idLivro;
    }

    function getPessoa(){
        
    }
    function getLivro(){
        
    }
}
