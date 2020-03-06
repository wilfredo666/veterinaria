<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mproducto extends CI_Model{

    function reg_producto($datos){
        $this->db->insert("producto",$datos);
    }
    function listar_productos(){
        $this->db->select('*');
        $this->db->from('producto');
        $resultado=$this->db->get();
        return $resultado->result();
    }
    function f_edi_producto($id_producto){
        $this->db->select('*');
        $this->db->from('producto');
        $this->db->where('id_producto',$id_producto);
        $resultado=$this->db->get();
        return $resultado->result();
    }
    function actualizar_producto($datos, $id_producto){
        $this->db->where('id_producto',$id_producto);
        $this->db->update('producto',$datos);
    }
    function eli_producto($id_producto){
        $this->db->where('id_producto',$id_producto);
        $this->db->delete('producto');
    }
    function info_producto($id_producto){
        $this->db->select('*');
        $this->db->from('producto');
        $this->db->join('usuario','usuario.id_usuario=producto.id_usuario');
        $this->db->where('id_producto',$id_producto);
        $resultado=$this->db->get();
        return $resultado->result();
    }
}
?>