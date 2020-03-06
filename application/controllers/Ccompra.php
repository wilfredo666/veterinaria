<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccompra extends CI_Controller {
    function __construct(){
        parent:: __construct(); 
        $this->load->model('Mcompra');
        $this->load->model('Mproveedor');
        $this->load->model('Mproducto');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    function lista_compra(){
        $datos=array('lista_compra'=>$this->Mcompra->listar_compra());
        $this->load->view('menu');
        $this->load->view('compra/Vcompra',$datos);
        $this->load->view('footer');
    }
    function f_reg_compra(){
        $datos=array(
        'proveedor'=>$this->Mproveedor->listar_proveedor(),
        'producto'=>$this->Mproducto->listar_productos()    
        );
        
        $this->load->view('compra/f_reg_compra',$datos);
    }
    function registrar_compra(){

        $cod_compra=trim($_POST['cod_compra']);
        $proveedor=trim($_POST['proveedor']);
        $producto=trim($_POST['producto']);
        $cantidad=trim($_POST['cantidad']);
        
        $pre_compra=trim($_POST['pre_compra']);
        $pre_venta=trim($_POST['pre_venta']);
        $pago=trim($_POST['pago']);
        $cambio=trim($_POST['cambio']);
        $total=trim($_POST['total']);
        $datos=array(
            'nit_ci'=>$nit_ci,
            'nombre_prov'=>$nom_compra,
            'direccion_prov'=>$direccion,
            'telefono_prov'=>$telefono     
        );
        $this->Mcompra->reg_compra($datos);
        echo "<center class='alert alert-success'>compra registrado con exito !!!</center>";
    }
    function f_edi_compra(){
        $id_compra=$this->uri->segment(3);
        $compra=array('compra'=>$this->Mcompra->f_edi_compra($id_compra));
        $this->load->view('compra/f_edi_compra',$compra);
    }
    function actualizar_compra(){
        $id_compra=$this->uri->segment(3);

        $nom_compra=trim($_POST['nom_compra']);
        $nit_ci=trim($_POST['nit_ci']);
        $direccion=trim($_POST['direccion']);
        $telefono=trim($_POST['telefono']);

       $datos=array(
            'nit_ci'=>$nit_ci,
            'nombre_prov'=>$nom_compra,
            'direccion_prov'=>$direccion,
            'telefono_prov'=>$telefono     
        );

        $this->Mcompra->actualizar_compra($datos,$id_compra);
        echo "<center class='alert alert-success'>compra actualizado con exito !!!</center>";
    }
    function f_eliminar_compra(){
        $this->load->view('compra/mnj_eli_compra');
    }
    function eliminar_compra(){
        $id_compra=$this->uri->segment(3);
        $this->Mcompra->eli_compra($id_compra);
        echo "<center class='alert alert-success'>compra eliminado con exito !!!</center>";
    }
    function f_ver_compra(){
        $id_compra=$this->uri->segment(3);
        $compra=array('compra'=>$this->Mcompra->info_compra($id_compra));
        $this->load->view('compra/detalle_compra',$compra);
    }
}