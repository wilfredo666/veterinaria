<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcompra extends CI_Model{
    function listar_compra(){
        $this->db->select('*');
        $this->db->from('compra');
        $resultado=$this->db->get();
        return $resultado->result();
    }
    function reg_compra($datos){
        $this->db->insert("compra",$datos);
    }
    function f_edi_compra($id_compra){
        $this->db->select('*');
        $this->db->from('compra');
        $this->db->where('id_compra',$id_compra);
        $resultado=$this->db->get();
        return $resultado->result();
    }
    function actualizar_compra($datos, $id_compra){
        $this->db->where('id_compra',$id_compra);
        $this->db->update('compra',$datos);
    }
    function eli_compra($id_compra){
        $this->db->where('id_compra',$id_compra);
        $this->db->delete('compra');
    }
    function info_compra($id_compra){
        $this->db->select('*');
        $this->db->from('compra');
        $this->db->where('id_compra',$id_compra);
        $resultado=$this->db->get();
        return $resultado->result();
    }
}
?>