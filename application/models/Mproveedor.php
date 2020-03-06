<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mproveedor extends CI_Model{
    function listar_proveedor(){
        $this->db->select('*');
        $this->db->from('proveedor');
        $resultado=$this->db->get();
        return $resultado->result();
    }
    function reg_proveedor($datos){
        $this->db->insert("proveedor",$datos);
    }
    function f_edi_proveedor($id_proveedor){
        $this->db->select('*');
        $this->db->from('proveedor');
        $this->db->where('id_proveedor',$id_proveedor);
        $resultado=$this->db->get();
        return $resultado->result();
    }
    function actualizar_proveedor($datos, $id_proveedor){
        $this->db->where('id_proveedor',$id_proveedor);
        $this->db->update('proveedor',$datos);
    }
    function eli_proveedor($id_proveedor){
        $this->db->where('id_proveedor',$id_proveedor);
        $this->db->delete('proveedor');
    }
    function info_proveedor($id_proveedor){
        $this->db->select('*');
        $this->db->from('proveedor');
        $this->db->where('id_proveedor',$id_proveedor);
        $resultado=$this->db->get();
        return $resultado->result();
    }
}
?>