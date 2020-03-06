<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Macceso extends CI_Model{
    function ingresar($datos){
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('alias',$datos['alias']);
        $this->db->where('password',$datos['password']);
        $resultados=$this->db->get();
        return $resultados->result();
    }
    function listar_cargo(){
        $this->db->select('*');
        $this->db->from('cargo');
        $resultado=$this->db->get();
        return $resultado->result();
    }
    function reg_usuario($datos){
        $this->db->insert('usuario',$datos);
    }
}