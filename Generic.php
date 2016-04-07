<?php
include './Conexao.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Generic
 *
 * @author Letícia
 */
class Generic {
    //put your code here
    protected $id;
    protected $conn;
    function getId() {
        return $this->id;
    }

    function getConn() {
        return $this->conn;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setConn($conn) {
        $this->conn = $conn;
    }
    function __construct() {
        
    }


}
