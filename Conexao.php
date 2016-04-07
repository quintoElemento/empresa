<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexao
 *
 * @author Letícia
 */
class Conexao {

    protected $mysqli;
    protected $servidor = '127.0.0.1';
    protected $usuario = 'root';
    protected $senha = '';
    protected $baseDeDados = 'empresa';
    public $total = 0;

    public function Conecta() {
        $this->mysqli = new mysqli($this->servidor, $this->usuario, $this->senha, $this->baseDeDados);
        if ($this->mysqli->errno) {
            echo $this->mysqli->connect_errno;
            exit();
        }
    }

    public function consulta($sql) {
        try {
            if ($result = $this->mysqli->query($sql)) {
                $this->total = $result->num_rows;
                return $result;
            } else {
                $this->total = 0;
                return null;
            }
        } catch (Exception $ex) {
            $this->Desconecta();
            //Nome de método com letra maiúscula
        }
    }

    public function Executa($sql) {
        try {
            if ($result = $this->mysqli->query($sql)) {
                $ultimoIdInserido = $this->mysqli->insert_id;
                $this->mysqli->commit;
                $this->total = $this->$mysqli->affected_rows;
                return $ultimoIdInserido;
            } else {
                $this->total = 0;
                throw new Exception('erro');
                return 'Nenhum registro foi afetado';
            }
        } catch (Exception $ex) {
            $this->mysqli->rollback();
            $this->Desconecta();
            
        }
    }
    public function Desconecta()
    {
        $this->mysqli->close();
    }
    function __construct()
    {
        
    }

}
