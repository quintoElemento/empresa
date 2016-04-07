<?php

include './Generic.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empresa
 *
 * @author Letícia
 */
class Empresa extends Generic {

    protected $nomeFantasia;
    protected $razaoSocial;
    protected $cnpj;
    protected $telefone;
    protected $atividadePrincipal;
    protected $site;
    protected $nomeDoContato;
    protected $foneDoContato;

    function getNomeFantasia() {
        return $this->nomeFantasia;
    }

    //Alt + insert --> Getters e setters

    function getRazaoSocial() {
        return $this->razaoSocial;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getAtividadePrincipal() {
        return $this->atividadePrincipal;
    }

    function getSite() {
        return $this->site;
    }

    function getNomeDoContato() {
        return $this->nomeDoContato;
    }

    function getFoneDoContato() {
        return $this->foneDoContato;
    }

    function setNomeFantasia($nomeFantasia) {
        $this->nomeFantasia = $nomeFantasia;
    }

    function setRazaoSocial($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setAtividadePrincipal($atividadePrincipal) {
        $this->atividadePrincipal = $atividadePrincipal;
    }

    function setSite($site) {
        $this->site = $site;
    }

    function setNomeDoContato($nomeDoContato) {
        $this->nomeDoContato = $nomeDoContato;
    }

    function setFoneDoContato($foneDoContato) {
        $this->foneDoContato = $foneDoContato;
    }

    function Cadastra() {
        $this->conn = new Conexao();
        $this->conn->Conecta();
        $sql = 'INSERT INTO empresa(nome_fantasia, razao_social, cnpj, telefone, atividaderincipal, site, nome_do_contato, fone_do_contato) VALUES ("' . $this->nomeFantasia . '","' . $this->razaoSocial . '","' . $this->cnpj . '","' . $this->telefone . '","' . $this->atividadePrincipal . '","' . $this->site . '","' . $this->nomeDoContato . '","' . $this->foneDoContato . '")';
        $this->conn->Executa($sql);
        $this->conn->Desconecta();
    }

    function Atualiza() {
        $this->conn = new Conexao();
        $this->conn->Conecta();
        $sql = 'UPDATE empresa nome_fantasia="'.$this->nomeFantasia.'",razao_social="'.$this->razaoSocial.'",cnpj="'.$this->cnpj.'",telefone="'.$this->telefone.'",atividaderincipal="'.$this->atividadePrincipal.'",site="'.$this->site.'",nome_do_contato="'.$this->nomeDoContato.'",fone_do_contato="'.$this->foneDoContato.'" WHERE id='.$this->id;
        $this->conn->Executa($sql);
        $this->conn->Desconecta();
    }

    function Deleta($id) {
        $this->conn = new Conexao();
        $this->conn->Conecta();
        $sql = 'DELETE FROM empresa WHERE id='.$id ;
        $this->conn->Executa($sql);
        $this->conn->Desconecta();
    }

    //put your code here
}
