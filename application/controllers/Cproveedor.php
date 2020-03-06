<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cproveedor extends CI_Controller {
    function __construct(){
        parent:: __construct(); 
        $this->load->model('Mproveedor');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    function lista_proveedor(){
        $datos=array('lista_proveedor'=>$this->Mproveedor->listar_proveedor());
        $this->load->view('menu');
        $this->load->view('proveedor/Vproveedor',$datos);
        $this->load->view('footer');
    }
    function f_reg_proveedor(){
        $this->load->view('proveedor/f_reg_proveedor');
    }
    function registrar_proveedor(){

        $nom_proveedor=trim($_POST['nom_proveedor']);
        $nit_ci=trim($_POST['nit_ci']);
        $direccion=trim($_POST['direccion']);
        $telefono=trim($_POST['telefono']);
        $datos=array(
            'nit_ci'=>$nit_ci,
            'nombre_prov'=>$nom_proveedor,
            'direccion_prov'=>$direccion,
            'telefono_prov'=>$telefono     
        );
        $this->Mproveedor->reg_proveedor($datos);
        echo "<center class='alert alert-success'>Proveedor registrado con exito !!!</center>";
    }
    function f_edi_proveedor(){
        $id_proveedor=$this->uri->segment(3);
        $proveedor=array('proveedor'=>$this->Mproveedor->f_edi_proveedor($id_proveedor));
        $this->load->view('proveedor/f_edi_proveedor',$proveedor);
    }
    function actualizar_proveedor(){
        $id_proveedor=$this->uri->segment(3);

        $nom_proveedor=trim($_POST['nom_proveedor']);
        $nit_ci=trim($_POST['nit_ci']);
        $direccion=trim($_POST['direccion']);
        $telefono=trim($_POST['telefono']);

       $datos=array(
            'nit_ci'=>$nit_ci,
            'nombre_prov'=>$nom_proveedor,
            'direccion_prov'=>$direccion,
            'telefono_prov'=>$telefono     
        );

        $this->Mproveedor->actualizar_proveedor($datos,$id_proveedor);
        echo "<center class='alert alert-success'>Proveedor actualizado con exito !!!</center>";
    }
    function f_eliminar_proveedor(){
        $this->load->view('proveedor/mnj_eli_proveedor');
    }
    function eliminar_proveedor(){
        $id_proveedor=$this->uri->segment(3);
        $this->Mproveedor->eli_proveedor($id_proveedor);
        echo "<center class='alert alert-success'>Proveedor eliminado con exito !!!</center>";
    }
    function f_ver_proveedor(){
        $id_proveedor=$this->uri->segment(3);
        $proveedor=array('proveedor'=>$this->Mproveedor->info_proveedor($id_proveedor));
        $this->load->view('proveedor/detalle_proveedor',$proveedor);
    }
}